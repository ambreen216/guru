<?php
namespace Element_Ready\Modules\TemplateLibrary\base;

use Elementor\Plugin;
use Elementor\TemplateLibrary\Source_Base;
use Elementor\TemplateLibrary\Source_Local;
use Elementor\Core\Common\Modules\Ajax\Module as Ajax;
use Elementor\User;

/**
 *  Template Library.
 *
 * @since 1.0
 */
class Templates_Lib {
	/**
	 * FireFly library option key.
	 */
	const LIBRARY_OPTION_KEY = 'fe_templates_library';

	/**
	 * API templates URL.
	 *
	 * Holds the URL of the templates API.
	 *
	 * @access public
	 * @static
	 *
	 * @var string API URL.
	 */
	
	public static $api_url = 'https://plugins.quomodosoft.com/templates/wp-json/rest/v1/mega-menu/templates/info_library';

	/**
	 * Init.
	 *
	 * Initializes the hooks.
	 *
	 * @since 1.0
	 * @access public
	 *
	 * @return void
	 */
	public function register() {
		
		
		add_action( 'elementor/init', [ __CLASS__, 'register_source' ] );
		add_action( 'elementor/editor/after_enqueue_scripts', [ __CLASS__, 'enqueue_editor_scripts' ] );
		add_action( 'elementor/ajax/register_actions', [ __CLASS__, 'register_ajax_actions' ] );
		add_action( 'elementor/editor/footer', [ __CLASS__, 'render_template' ] );
		
	}

	/**
	 * Register source.
	 *
	 * Registers the library source.
	 *
	 * @since 1.0
	 * @access public
	 *
	 * @return void
	 */
	public static function register_source() {

		Plugin::$instance->templates_manager->register_source( __NAMESPACE__ . '\FE_Source' );
	}

	/**
	 * Enqueue Editor Scripts.
	 *
	 * Enqueues required scripts in Elementor edit mode.
	 *
	 * @since 1.0
	 * @access public
	 *
	 * @return void
	 */
	public static function enqueue_editor_scripts() {

        wp_enqueue_style( 'element-ready-templates-lib', ELEMENT_READY_TEMPLATE_MODULE_URL . 'assets/css/editor.css',1.1,true );
		wp_enqueue_script(
			'element-ready-templates-lib',
			ELEMENT_READY_TEMPLATE_MODULE_URL . 'assets/js/templates-lib.js',
			[
				'jquery',
				'backbone-marionette',
				'backbone-radio',
				'elementor-common-modules',
				'elementor-dialog',
			
			],
			1.1,
			true
		);

		wp_localize_script( 'element-ready-templates-lib', 'fe_templates_lib', array(
			'logoUrl'	=> ELEMENT_READY_ROOT_IMG.'logo.svg',
		) );
	}

	/**
	 * Init ajax calls.
	 *
	 * Initialize template library ajax calls for allowed ajax requests.
	 *
	 * @since 1.0
	 * @access public
	 *
	 * @param Ajax $ajax Elementor's Ajax object.
	 * @return void
	 */
	public static function register_ajax_actions( Ajax $ajax ) {

		$library_ajax_requests = [
			'eready_get_library_data',
		];

		foreach ( $library_ajax_requests as $ajax_request ) {
			$ajax->register_ajax_action( $ajax_request, function( $data ) use ( $ajax_request ) {
				return self::handle_ajax_request( $ajax_request, $data );
			} );
		}
	}

	/**
	 * Handle ajax request.
	 *
	 * Fire authenticated ajax actions for any given ajax request.
	 *
	 * @since 1.0
	 * @access private
	 *
	 * @param string $ajax_request Ajax request.
	 * @param array  $data Elementor data.
	 *
	 * @return mixed
	 * @throws \Exception Throws error message.
	 */
	private static function handle_ajax_request( $ajax_request, array $data ) {
		if ( ! User::is_current_user_can_edit_post_type( Source_Local::CPT ) ) {
			throw new \Exception( 'Access Denied' );
		}

		if ( ! empty( $data['editor_post_id'] ) ) {
			$editor_post_id = absint( $data['editor_post_id'] );

			if ( ! get_post( $editor_post_id ) ) {
				throw new \Exception( esc_html__( 'Post not found.', 'element-ready' ) );
			}

			Plugin::$instance->db->switch_to_post( $editor_post_id );
		}

		$result = call_user_func( [ __CLASS__, $ajax_request ], $data );

		if ( is_wp_error( $result ) ) {
			throw new \Exception( $result->get_error_message() );
		}

		return $result;
	}

	/**
	 * Get library data.
	 *
	 * Get data for template library.
	 *
	 * @since 1.0
	 * @access public
	 *
	 * @param array $args Arguments.
	 *
	 * @return array Collection of templates data.
	 */
	public static function eready_get_library_data( array $args ) {
		$library_data = self::get_library_data( ! empty( $args['sync'] ) );

		// Ensure all document are registered.
		Plugin::$instance->documents->get_document_types();

		return [
			'templates' => self::get_templates(),
			'config' => $library_data['types_data'],
		];
	}

	/**
	 * Get templates.
	 *
	 * Retrieve all the templates from all the registered sources.
	 *
	 * @since 1.16.0
	 * @access public
	 *
	 * @return array Templates array.
	 */
	public static function get_templates() {
		$source = Plugin::$instance->templates_manager->get_source( 'firefly' );
		return $source->get_items();
	}

	/**
	 * Ajax reset API data.
	 *
	 * Reset Elementor library API data using an ajax call.
	 *
	 * @since 1.0
	 * @access public
	 * @static
	 */
	public static function ajax_reset_api_data() {

		check_ajax_referer( 'elementor_reset_library', '_nonce' );

		self::get_templates_data( true );

		wp_send_json_success();
	}

	/**
	 * Get templates data.
	 *
	 * This function the templates data.
	 *
	 * @since 1.0
	 * @access private
	 * @static
	 *
	 * @param bool $force_update Optional. Whether to force the data retrieval or
	 *                                     not. Default is false.
	 *
	 * @return array|false Templates data, or false.
	 */
	private static function get_templates_data( $force_update = false ) {
		$cache_key = 'fe_templates_data_' . 1.1;

		$templates_data = get_transient( $cache_key );


		if ( $force_update || false === $templates_data ) {
			$timeout = ( $force_update ) ? 25 : 8;

			$response = wp_remote_get( self::$api_url, [
				'timeout' => $timeout,
				'body' => [
					// Which API version is used.
					'api_version' => 1.1,
					// Which language to return.
					'site_lang' => get_bloginfo( 'language' ),
				],
			] );

			

			if ( is_wp_error( $response ) || 200 !== (int) wp_remote_retrieve_response_code( $response ) ) {
				set_transient( $cache_key, [], 1 * HOUR_IN_SECONDS );

				return false;
			}

			$templates_data = json_decode( wp_remote_retrieve_body( $response ), true );
            
           		
			if ( empty( $templates_data ) || ! is_array( $templates_data ) ) {
				set_transient( $cache_key, [], 1 * HOUR_IN_SECONDS );

				return false;
			}

			if ( isset( $templates_data['library'] ) ) {
				update_option( self::LIBRARY_OPTION_KEY, $templates_data['library'], 'no' );

				unset( $templates_data['library'] );
			}

			set_transient( $cache_key, $templates_data, 12 * HOUR_IN_SECONDS );
		}

		return $templates_data;
	}

	/**
	 * Get templates data.
	 *
	 * Retrieve the templates data from a remote server.
	 *
	 * @since 1.0
	 * @access public
	 * @static
	 *
	 * @param bool $force_update Optional. Whether to force the data update or
	 *                                     not. Default is false.
	 *
	 * @return array The templates data.
	 */
	public static function get_library_data( $force_update = false ) {
		self::get_templates_data( $force_update );

		$library_data = get_option( self::LIBRARY_OPTION_KEY );

		if ( empty( $library_data ) ) {
			return [];
		}

		return $library_data;
	}

	/**
	 * Get template content.
	 *
	 * Retrieve the templates content received from a remote server.
	 *
	 * @since 1.0
	 * @access public
	 * @static
	 *
	 * @param int $template_id The template ID.
	 *
	 * @return object|\WP_Error The template content.
	 */
	public static function get_template_content( $template_id ) {
		
		$url = self::$api_url . '/' . $template_id;
		$_key = apply_filters( 'element_ready_product', '*' );
      
		if ( empty( $_key ) ) {
			return new \WP_Error( 'no_license', esc_html__( 'Product is not active.', 'element-ready' ) );
		}

		$args = [
			'body' => [
				// Which API version is used.
				'api_version' 	=> 1.1,
				'license_key'	=> $_key,
				'home_url' 		=> trailingslashit( home_url() ),
			],
			'timeout' => 25,
		];

		$response = wp_remote_get( $url, $args );

		if ( is_wp_error( $response ) ) {
			// @codingStandardsIgnoreStart WordPress.XSS.EscapeOutput.
			wp_die( $response, [
				'back_link' => true,
			] );
			// @codingStandardsIgnoreEnd WordPress.XSS.EscapeOutput.
		}

		$body = wp_remote_retrieve_body( $response );
		$response_code = (int) wp_remote_retrieve_response_code( $response );
		
		if ( ! $response_code ) {
			return new \WP_Error( 500, 'No Response' );
		}

		// Server sent a success message without content.
		if ( 'null' === $body ) {
			$body = true;
		}

		$as_array = true;
		$body = json_decode( $body, $as_array );

		if ( false === $body ) {
			return new \WP_Error( 422, esc_html__('Wrong Server Response','element-ready') );
		}

		if ( 200 !== $response_code ) {
			// In case $as_array = true.
			$body = (object) $body;

			$message = isset( $body->message ) ? $body->message : wp_remote_retrieve_response_message( $response );
			$code = isset( $body->code ) ? $body->code : $response_code;

			return new \WP_Error( $code, $message );
		}

		return $body;
	}

	/**
	 * Render template.
	 *
	 * Library modal template.
	 *
	 * @since 1.0
	 * @access public
	 * @static
	 *
	 * @return void
	 */
	public static function render_template() {
		?>
		<script type="text/template" id="tmpl-elementor-template-library-header-actions-eready">
			<div id="elementor-template-library-header-sync" class="elementor-templates-modal__header__item">
				<i class="eicon-sync" aria-hidden="true" title="<?php esc_attr_e( 'Sync Templates', 'element-ready' ); ?>"></i>
				<span class="elementor-screen-only"><?php echo esc_html__( 'Sync Templates', 'element-ready' ); ?></span>
			</div>
		</script>
		<script type="text/template" id="tmpl-elementor-templates-modal__header__logo_eready">
			<span class="elementor-templates-modal__header__logo__icon-wrapper">
				<img src="<?php echo esc_url( ELEMENT_READY_ROOT_IMG.'logo.svg' ); ?>" style="height: 30px;" />
			</span>
			<span class="elementor-templates-modal__header__logo__title">{{{ title }}}</span>
		</script>
		<script type="text/template" id="tmpl-elementor-template-library-header-preview-eready">
			<div id="elementor-template-library-header-preview-insert-wrapper" class="elementor-templates-modal__header__item">
				{{{ fe_templates_lib.templates.layout.getTemplateActionButton( obj ) }}}
			</div>
			
		</script>
		<script type="text/template" id="tmpl-elementor-template-library-templates-eready">
			<#
				var activeSource = fe_templates_lib.templates.getFilter('source');
			#>
			<div id="elementor-template-library-toolbar">
				<# if ( 'firefly' === activeSource ) {
					var activeType = fe_templates_lib.templates.getFilter('type');
					var config = fe_templates_lib.templates.getConfig( activeType );
					#>
					<div id="elementor-template-library-filter-toolbar-remote" class="elementor-template-library-filter-toolbar">
						
							<div id="elementor-template-library-order">
								<input type="radio" id="elementor-template-library-order-new" class="elementor-template-library-order-input" name="elementor-template-library-order" value="date">
								<label for="elementor-template-library-order-new" class="elementor-template-library-order-label"><?php echo esc_html__( 'New', 'element-ready' ); ?></label>
								<input type="radio" id="elementor-template-library-order-trend" class="elementor-template-library-order-input" name="elementor-template-library-order" value="trendIndex">
								<label for="elementor-template-library-order-trend" class="elementor-template-library-order-label"><?php echo esc_html__( 'Trend', 'element-ready' ); ?></label>
								<input type="radio" id="elementor-template-library-order-popular" class="elementor-template-library-order-input" name="elementor-template-library-order" value="popularityIndex">
								<label for="elementor-template-library-order-popular" class="elementor-template-library-order-label"><?php echo esc_html__( 'Popular', 'element-ready' ); ?></label>
							</div>
							
						
						<div id="elementor-template-library-my-favorites">
							<# var checked = fe_templates_lib.templates.getFilter( 'favorite' ) ? ' checked' : ''; #>
							<input id="elementor-template-library-filter-my-favorites" type="checkbox"{{{ checked }}}>
							<label id="elementor-template-library-filter-my-favorites-label" for="elementor-template-library-filter-my-favorites">
								<i class="eicon" aria-hidden="true"></i>
								<?php echo esc_html__( 'My Favorites', 'element-ready' ); ?>
							</label>
						</div>
					</div>
				<# } #>
				<div id="elementor-template-library-filter-text-wrapper">
					<label for="elementor-template-library-filter-text" class="elementor-screen-only"><?php echo esc_html__( 'Search Templates:', 'element-ready' ); ?></label>
					<input id="elementor-template-library-filter-text" placeholder="<?php echo esc_attr__( 'Search', 'element-ready' ); ?>">
					<i class="eicon-search"></i>
				</div>
				
			</div>
			<div class="elementor-template-library-templates-container-wrapper">
				<# if ( config.categories ) { #>
					<div id="elementor-template-library-toolbar-cats">
						<div class="element-ready-template-popup">
							<# config.categories.forEach( function( category ) {
								var selected = category === fe_templates_lib.templates.getFilter( 'subtype' ) ? ' selected' : '';
								#>

								<label data-elementor-text="{{ category }}" data-elementor-filter="subtype" class="element-ready-template-library-cat-text {{ selected }}">{{{ category }}}</label>
					
							<# } ); #>
							
						
						</div>
					</div>
				<# } #>
					<div id="elementor-template-library-templates-container"></div>
			</div>
			<# if ( 'firefly' === activeSource ) { #>
				<div id="elementor-template-library-footer-banner">
					<img class="elementor-nerd-box-icon" src="<?php echo esc_url( ELEMENTOR_ASSETS_URL . 'images/information.svg' ); ?>" />
					<div class="elementor-excerpt"><?php echo esc_html__( 'Stay tuned! More awesome templates coming real soon.', 'element-ready' ); ?></div>
				</div>
			<# } #>
		</script>
		<script type="text/template" id="tmpl-elementor-template-library-template-eready">
		    
			<div class="elementor-template-library-template-body">
				<# if ( 'page' === type ) { #>
					<div class="elementor-template-library-template-screenshot" style="background-image: url({{ thumbnail }});"></div>
				<# } else { #>
					<img src="{{ thumbnail }}">
				<# } #>
				<div class="elementor-template-library-template-preview">
					<i class="eicon-zoom-in-bold" aria-hidden="true"></i>
				</div>
			</div>
			<div class="elementor-template-library-template-footer">
				{{{ fe_templates_lib.templates.layout.getTemplateActionButton( obj ) }}}
				<div class="elementor-template-library-template-name">{{{ title }}} - {{{ type }}}</div>
				<div class="elementor-template-library-favorite">
					<input id="elementor-template-library-template-{{ template_id }}-favorite-input" class="elementor-template-library-template-favorite-input" type="checkbox"{{ favorite ? " checked" : "" }}>
					<label for="elementor-template-library-template-{{ template_id }}-favorite-input" class="elementor-template-library-template-favorite-label">
						<i class="eicon-heart-o" aria-hidden="true"></i>
						<span class="elementor-screen-only"><?php echo esc_html__( 'Favorite', 'element-ready' ); ?></span>
					</label>
				</div>
			</div>
		</script>
		<script type="text/template" id="tmpl-elementor-template-library-get-pro-button-eready">
			<a class="elementor-template-library-template-action elementor-button elementor-go-pro" href="<?php echo esc_url(ELEMENT_READY_DEMO_URL); ?>" target="_blank">
				<i class="eicon-external-link-square" aria-hidden="true"></i>
			
				<span class="elementor-button-title"><?php echo esc_html__( 'Go Pro', 'element-ready' ); ?></span>
			</a>
		</script>
		<script type="text/template" id="tmpl-elementor-pro-template-library-activate-license-button-eready">
			<a class="elementor-template-library-template-action elementor-button elementor-go-pro" href="<?php echo esc_url(ELEMENT_READY_DEMO_URL); ?>" target="_blank">
				<i class="eicon-external-link-square"></i>
				<span class="elementor-button-title"><?php echo esc_html__( 'Activate License', 'element-ready' ); ?></span>
			</a>
		</script>
		<?php
	}
}




