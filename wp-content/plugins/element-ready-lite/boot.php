<?php

final class Element_Ready_Elementor_Extension {

	const VERSION                   = '1.0.0';
	const MINIMUM_ELEMENTOR_VERSION = '3.0.15';
	const MINIMUM_PHP_VERSION       = '7.0';

	private static $_instance = null;
	
	public static function instance() {

		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;

	}

	public function __construct() {
		add_action( 'plugins_loaded', [ $this, 'init' ] );
		
	}
	public function init() {

		load_plugin_textdomain( 'element-ready' );

		/*---------------------------------
			Check if Elementor installed and activated
		-----------------------------------*/
		if ( ! did_action( 'elementor/loaded' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_missing_main_plugin' ] );
			return;
		}
		

		/*---------------------------------
			Check for required Elementor version
		----------------------------------*/
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_elementor_version' ] );
			return;
		}

		/*----------------------------------
			Check for required PHP version
		-----------------------------------*/
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_php_version' ] );
			return;
		}

		
		if (file_exists(dirname(__FILE__) . '/inc/helper_functions.php' )) {
			require_once(dirname(__FILE__) . '/inc/helper_functions.php' );
		}
		if (file_exists(dirname(__FILE__) . '/inc/Hooks.php' )) {
			require_once(dirname(__FILE__) . '/inc/Hooks.php' );
		}
		
        $this->includes();
		/*----------------------------------
			ADD NEW ELEMENTOR CATEGORIES
		------------------------------------*/
		add_action( 'elementor/init', [ $this, 'add_elementor_category' ] );

		/*----------------------------------
			ADD PLUGIN WIDGETS ACTIONS
		-----------------------------------*/
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'init_widgets' ] );

		/*----------------------------------
			ELEMENTOR REGISTER CONTROL
		-----------------------------------*/
		add_action( 'elementor/controls/controls_registered', [ $this, 'init_controls' ] );	

		/*----------------------------------
			EDITOR STYLE
		----------------------------------*/
		add_action( 'elementor/editor/after_enqueue_styles', [ $this, 'element_ready_editor_styles' ] );

		/*----------------------------------
			ENQUEUE DEFAULT SCRIPT
		-----------------------------------*/
		add_action( 'wp_enqueue_scripts', array ( $this, 'element_ready_default_scripts' ) );
       	
		/*---------------------------------
			REGISTER FRONTEND SCRIPTS
		----------------------------------*/
		add_action( 'elementor/frontend/after_register_scripts', [ $this, 'element_ready_register_frontend_scripts' ] );
		add_action( 'elementor/frontend/after_register_styles', [ $this, 'element_ready_register_frontend_styles' ]);

		/*--------------------------------
			ENQUEUE FRONTEND SCRIPTS
		---------------------------------*/
		add_action( 'elementor/frontend/after_enqueue_scripts', [ $this, 'element_ready_enqueue_frontend_scripts' ] );
		add_action( 'elementor/frontend/after_enqueue_styles', [ $this, 'element_ready_enqueue_frontend_style' ] );
	

		if (file_exists(dirname(__FILE__) . '/inc/Base/Texonomy.php' )) {
			require_once(dirname(__FILE__) . '/inc/Base/Texonomy.php' );
		}

		if (element_ready_get_modules_option('edd') && file_exists(dirname(__FILE__) . '/inc/edd.php' )) {			
			require_once(dirname(__FILE__) . '/inc/edd.php' );
		}

		if (file_exists(dirname(__FILE__) . '/inc/icons.php' )) {
			require_once(dirname(__FILE__) . '/inc/icons.php' );
		}

		do_action('element_ready/loaded/after'); 
	}



	/*******************************
	 * 	ADD ASSETS
	 *******************************/

	public function element_ready_editor_styles(){}

	/**
	 * Enqueue Default Style and Scripts
	 *
	 * Enqueue custom Scripts required to run Skima Core.
	 *
	 * @since 1.7.0
	 * @since 1.7.1 The method moved to this class.
	 *
	 * @access public
	 */
	public function element_ready_default_scripts(){
		wp_enqueue_style( 'element-ready-widgets', ELEMENT_READY_ROOT_CSS . 'widgets'.ELEMENT_READY_SCRIPT_VAR.'css' );
		if ( class_exists('Give') ) {
			wp_enqueue_style( 'overwrite', ELEMENT_READY_ROOT_CSS . 'overwrite.css', array('give-styles'), ELEMENT_READY_VERSION, 'all' );
		}
	}

	/**
	 * Enqueue Widget Scripts
	 *
	 * Enqueue custom Scripts required to run Skima Core.
	 *
	 * @since 1.7.0
	 * @since 1.7.1 The method moved to this class.
	 *
	 * @access public
	 */
	public function element_ready_enqueue_frontend_scripts(){

		wp_enqueue_script( 'appear', ELEMENT_READY_ROOT_JS . 'appear.js', array('jquery'), ELEMENT_READY_VERSION, true );
		wp_enqueue_script( 'waypoints', ELEMENT_READY_ROOT_JS . 'waypoints.min.js', array('jquery'), ELEMENT_READY_VERSION, true );
		
		if(element_ready_get_components_option('cookie')){
			wp_enqueue_script( 'ihavecookies' );
		}
		
		wp_enqueue_script( 'element-ready-global-widget', ELEMENT_READY_ROOT_JS . 'globalwidget'.ELEMENT_READY_SCRIPT_VAR.'js', array('jquery','wp-util'), ELEMENT_READY_VERSION, true );
		
		if(element_ready_get_components_option('cookie')){
		  wp_localize_script( 'element-ready-global-widget', 'element_ready_cookie_consent' , $this->page_cookie_consent());
		}

        if(defined('ELEMENT_READY_PRO')){

			wp_localize_script( 'element-ready-global-widget', 'ercp', array(
				'script_url' => 'https://plugins.quomodosoft.com/api.html',
				'ajaxurl' => admin_url( 'admin-ajax.php' )
			) );
			
		}
		
		
	}

	public function page_cookie_consent(){

		$pages_settings = ['enable'=>'no'];
	
		$post_id = get_the_ID();
		// Get the page settings manager
		$page_settings_manager = \Elementor\Core\Settings\Manager::get_settings_managers( 'page' );
		// Get the settings model for current post
		$page_settings_model = $page_settings_manager->get_model( $post_id );
		// Retrieve the color we added before
		$pages_settings['enable']                = $page_settings_model->get_settings( 'eready_cookie_consent_enable' );
		$pages_settings['delay']                 = $page_settings_model->get_settings( 'eready_cookie_consent_delay' );
		$pages_settings['expire']                = $page_settings_model->get_settings( 'eready_cookie_consent_expire' );
		$pages_settings['expire_type']           = $page_settings_model->get_settings( 'eready_cookie_consent_expire_time_type' );
		$pages_settings['title_color']           = $page_settings_model->get_settings( 'eready_cookie_consent_title_color' );
		$pages_settings['title']                 = $page_settings_model->get_settings( 'eready_cookie_consent_title' );
		$pages_settings['accept_cookie_lavel']   = $page_settings_model->get_settings( 'eready_cookie_lavel' );
		$pages_settings['advanced_cookie_lavel'] = $page_settings_model->get_settings( 'eready_cookie_advancedlavel' );
		$pages_settings['cookie_unchecked']      = $page_settings_model->get_settings( 'eready_cookie_consent_unchecked' );
		$pages_settings['message']               = $page_settings_model->get_settings( 'eready_cookie_consent_message' );
		$pages_settings['more_info_lavel']       = $page_settings_model->get_settings( 'eready_cookie_more_info_lavel' );
		$pages_settings['more_info_link']        = $page_settings_model->get_settings( 'eready_cookie_url' );
	
		return $pages_settings;

	}

	/**
	 * Register Widget Scripts
	 *
	 * Register custom scripts required to run Skima Core.
	 *
	 * @since 1.6.0
	 * @since 1.7.1 The method moved to this class.
	 *
	 * @access public
	 */
	public function element_ready_register_frontend_scripts() {

        wp_register_script( 'owl-carousel', ELEMENT_READY_ROOT_JS . 'owl.carousel.min.js', array('jquery'), ELEMENT_READY_VERSION, true );
        wp_register_script( 'goodshare', ELEMENT_READY_ROOT_JS . 'goodshare.min.js', array('jquery'), ELEMENT_READY_VERSION, true );
        wp_register_script( 'slick', ELEMENT_READY_ROOT_JS . 'slick.min.js', array('jquery'), ELEMENT_READY_VERSION, true );
        wp_register_script( 'swiper', ELEMENT_READY_ROOT_JS . 'swiper.min.js', array('jquery'), ELEMENT_READY_VERSION, true );
        wp_register_script( 'modal-video', ELEMENT_READY_ROOT_JS . 'modal-video.min.js', array('jquery'), ELEMENT_READY_VERSION, true );
        wp_register_script( 'svg-progress', ELEMENT_READY_ROOT_JS . 'svg-progress-min.js', array('jquery'), ELEMENT_READY_VERSION, true );
        wp_register_script( 'TimeCircle', ELEMENT_READY_ROOT_JS . 'TimeCircles.js', array('jquery'), ELEMENT_READY_VERSION, true );
        wp_register_script( 'roadmap', ELEMENT_READY_ROOT_JS . 'roadmap.min.js', array('jquery'), ELEMENT_READY_VERSION, true );
        wp_register_script( 'timeline', ELEMENT_READY_ROOT_JS . 'timeline.min.js', array('jquery'), ELEMENT_READY_VERSION, true );
        wp_register_script( 'tooltipster', ELEMENT_READY_ROOT_JS . 'tooltipster.bundle.min.js', array('jquery'), ELEMENT_READY_VERSION, true );
        wp_register_script( 'tipped', ELEMENT_READY_ROOT_JS . 'tipped.min.js', array('jquery'), ELEMENT_READY_VERSION, true );
        wp_register_script( 'animatedheadline', ELEMENT_READY_ROOT_JS . 'jquery.animatedheadline.min.js', array('jquery'), ELEMENT_READY_VERSION, true );
        wp_register_script( 'datatables', ELEMENT_READY_ROOT_JS . 'datatables.min.js', array('jquery'), ELEMENT_READY_VERSION, true );
        wp_register_script( 'nice-select', ELEMENT_READY_ROOT_JS . 'nice-select.min.js', array('jquery'), ELEMENT_READY_VERSION, true );
        wp_register_script( 'prism', ELEMENT_READY_ROOT_JS . 'prism.js', null, ELEMENT_READY_VERSION, true );
        wp_register_script( 'flip', ELEMENT_READY_ROOT_JS . 'jquery.flip.min.js', array('jquery'), ELEMENT_READY_VERSION, true );
        wp_register_script( 'sticky_video', ELEMENT_READY_ROOT_JS . 'sticky_video.js', array('jquery'), ELEMENT_READY_VERSION, true );
        wp_register_script( 'easyBar', ELEMENT_READY_ROOT_JS . 'easyBar.js', array('jquery','waypoints'), ELEMENT_READY_VERSION, true );
        wp_register_script( 'event-move', ELEMENT_READY_ROOT_JS . 'jquery.event.move.js', array('jquery'), ELEMENT_READY_VERSION, true );
        wp_register_script( 'twentytwenty', ELEMENT_READY_ROOT_JS . 'jquery.twentytwenty.js', array('jquery','event-move'), ELEMENT_READY_VERSION, true );
		wp_register_script( 'mapbox-map', '//api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.js', null, ELEMENT_READY_VERSION, true );
		wp_register_script( 'element-ready-map', ELEMENT_READY_ROOT_JS . 'element-ready-map.js', array('mapbox-map'), ELEMENT_READY_VERSION, true );
		
        /*--------------------------
		SINGLE SCRIPTS
        ---------------------------*/
		wp_register_script( 'ihavecookies', ELEMENT_READY_ROOT_JS . 'jquery.ihavecookies.min.js', array('jquery'), ELEMENT_READY_VERSION, true );
		wp_register_script( 'circle-progress', ELEMENT_READY_ROOT_JS . 'circle-progress.min.js', array('jquery'), ELEMENT_READY_VERSION, true );
		
        wp_register_script( 'shuffle', ELEMENT_READY_ROOT_JS . 'jquery.shuffle.min.js', array('jquery'), ELEMENT_READY_VERSION, true );
        wp_register_script( 'isotope', ELEMENT_READY_ROOT_JS . 'isotope.pkgd.min.js', array('jquery','imagesloaded'), ELEMENT_READY_VERSION, true );
        wp_register_script( 'masonry', array('jquery', 'imagesloaded') );
        wp_register_script( 'ajaxchimp', ELEMENT_READY_ROOT_JS . 'ajaxchimp.js', array('jquery'), ELEMENT_READY_VERSION, true );
		wp_register_script( 'anime', ELEMENT_READY_ROOT_JS . 'anime.min.js', array('jquery'), ELEMENT_READY_VERSION, true );
		
        wp_register_script( 'element-ready-effect', ELEMENT_READY_ROOT_JS . 'element-ready-effect.min.js', array('jquery'), ELEMENT_READY_VERSION, true );
		
        wp_register_script( 'base_effect', ELEMENT_READY_ROOT_JS . 'element_ready_base_effect.js', array('jquery'), ELEMENT_READY_VERSION, true );
        wp_register_script( 'element-ready-core', ELEMENT_READY_ROOT_JS . 'active'.ELEMENT_READY_SCRIPT_VAR.'js', array('jquery'), ELEMENT_READY_VERSION, true );


		/*--------------------------
		Menu Builder
        ---------------------------*/
		if(defined('ELEMENT_READY_MEGA_MENU_MODULE_URL')){
          
			wp_register_style( 'stellarnav', ELEMENT_READY_MEGA_MENU_MODULE_URL . 'assets/css/stellarnav.min.css', null, ELEMENT_READY_VERSION );
	     	wp_register_style( 'element-ready-mega-menu-frontend', ELEMENT_READY_MEGA_MENU_MODULE_URL . 'assets/css/frontend'.ELEMENT_READY_SCRIPT_VAR.'css' );
			//wp_enqueue_style( 'element-ready-mega-menu-vitalac', ELEMENT_READY_MEGA_MENU_MODULE_URL . 'assets/css/vitalac.css' );
			wp_register_style( 'element-ready-mega-menu-style', ELEMENT_READY_MEGA_MENU_MODULE_URL . 'assets/css/style'.ELEMENT_READY_SCRIPT_VAR.'css' );
			//wp_enqueue_script( 'popper', ELEMENT_READY_MEGA_MENU_MODULE_URL . 'assets/js/popper.min.js',array( 'jquery' ));
			wp_register_script( 'stellarnav', ELEMENT_READY_MEGA_MENU_MODULE_URL . 'assets/js/stellarnav.min.js',array( 'jquery' ));
			wp_register_script( 'element-ready-menu-frontend-script', ELEMENT_READY_MEGA_MENU_MODULE_URL . 'assets/js/frontend.js',['stellarnav']);
		 
		}
     
	}

	/**
	 * Enqueue Widget Styles
	 *
	 * Enqueue custom styles required to run Skima Core.
	 *
	 * @since 1.7.0
	 * @since 1.7.1 The method moved to this class.
	 *
	 * @access public
	 */
	public function element_ready_enqueue_frontend_style() {		
        wp_enqueue_style( 'animate', ELEMENT_READY_ROOT_CSS . 'animate.css' );		
	}

	/**
	 * Register Widget Styles
	 *
	 * Register custom styles required to run Skima Core.
	 *
	 * @since 1.7.0
	 * @since 1.7.1 The method moved to this class.
	 *
	 * @access public
	 */
	
	public function element_ready_register_frontend_styles(){
		wp_register_style( 'element-ready-widgets', ELEMENT_READY_ROOT_CSS . 'widgets'.ELEMENT_READY_SCRIPT_VAR.'css' );
		wp_register_style( 'owl-carousel', ELEMENT_READY_ROOT_CSS .'owl.carousel.css' );
        wp_register_style( 'slick', ELEMENT_READY_ROOT_CSS .'slick.min.css' );
        wp_register_style( 'swiper', ELEMENT_READY_ROOT_CSS .'swiper.min.css' );
        wp_register_style( 'modal-video', ELEMENT_READY_ROOT_CSS .'modal-video.min.css' );
        wp_register_style( 'TimeCircle', ELEMENT_READY_ROOT_CSS .'TimeCircles.css' );
        wp_register_style( 'roadmap', ELEMENT_READY_ROOT_CSS .'roadmap.min.css' );
        wp_register_style( 'timeline', ELEMENT_READY_ROOT_CSS .'timeline.min.css' );
        wp_register_style( 'tooltipster', ELEMENT_READY_ROOT_CSS .'tooltipster.bundle.min.css' );
        wp_register_style( 'tipped', ELEMENT_READY_ROOT_CSS .'tipped.css' );
        wp_register_style( 'animatedheadline', ELEMENT_READY_ROOT_CSS .'jquery.animatedheadline.css' );
        wp_register_style( 'datatables', ELEMENT_READY_ROOT_CSS .'datatables.min.css' );
        wp_register_style( 'nice-select', ELEMENT_READY_ROOT_CSS .'nice-select.css' );
        wp_register_style( 'prism', ELEMENT_READY_ROOT_CSS .'prism.css' );
        wp_register_style( 'flip', ELEMENT_READY_ROOT_CSS .'element-ready-flipbox.css' );
        wp_register_style( 'sticky_video', ELEMENT_READY_ROOT_CSS .'sticky_video.css' );
        wp_register_style( 'easyBar', ELEMENT_READY_ROOT_CSS .'easyBar.css' );
        wp_register_style( 'twentytwenty', ELEMENT_READY_ROOT_CSS .'twentytwenty.css' );
        wp_register_style( 'mapbox-map', '//api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.css' );
        wp_register_style( 'element-ready-news-grid', ELEMENT_READY_ROOT_CSS .'news.grid.css' );
        wp_register_style( 'element-ready-learnpress', ELEMENT_READY_ROOT_CSS .'learnpress.css' );
		wp_register_style( 'element-ready-social-share', ELEMENT_READY_ROOT_CSS .'social-share.css' );
		
		wp_register_style( 'element-ready-er-grid', ELEMENT_READY_ROOT_CSS .'er-grid.css' );
		wp_register_style( 'element-ready-grid', ELEMENT_READY_ROOT_CSS .'grid.css' );
		wp_register_style( 'element-ready-admin', ELEMENT_READY_ROOT_CSS .'admin.css' );
	}

	/***************************
	 * 	VERSION CHECK
	 * *************************/
	public function admin_notice_minimum_elementor_version() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'element-ready' ),
			'<strong>' . esc_html__( 'Element Ready Addon', 'element-ready' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'element-ready' ) . '</strong>',
			 self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
	}

	/**************************
	 * 	MISSING NOTICE
	 ***************************/
	public function admin_notice_missing_main_plugin() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'element-ready' ),
			'<strong>' . esc_html__( 'Element Ready', 'element-ready' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'element-ready' ) . '</strong>'
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );
	}

	/****************************
	 * 	PHP VERSION NOTICE
	 ****************************/
	public function admin_notice_minimum_php_version() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'element-ready' ),
			'<strong>' . esc_html__( 'Element Ready Addons', 'element-ready' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'element-ready' ) . '</strong>',
			 self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}

	/****************************
	 * 	INIT WIDGETS
	 ****************************/
	public function init_widgets() {
		$this->element_ready_widgets();
	}

   /****************************
	 * 	Register Widgets
	 ****************************/
	public function element_ready_widgets(){
	
		/*
		** Autoload Widget class
		** 
		*/

		$widget_path = ELEMENT_READY_DIR_PATH."/inc/Widgets";
		$widgets     = element_ready_widgets_class_list($widget_path);
	
		if( is_array($widgets) ){

			// Register Widgets
			foreach($widgets as $widget_cls){
				
				$cls = '\Element_Ready\Widgets'.'\\'.$widget_cls;
				if( class_exists( $cls ) ):
					\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new $cls() );
				endif;	
				
			}
		}
	    $this->widget_modules();

	}
 	/****************************
	 * 	Register Widgets Modules
	 ****************************/
	public function widget_modules(){

		include( dirname(__FILE__) . '/inc/dashboard/controls/active.php' );
	    $widgets_dir     = element_ready_get_dir_list();
	    	   
	    $widgets_modules = element_ready_components_permission($widgets_dir);
		
		foreach($widgets_modules as $path => $value){

			$widget_path = ELEMENT_READY_DIR_PATH."/inc/Widgets/".$path;
			$widgets     = element_ready_widgets_class_list($widget_path);
		   
			if( is_array($widgets) ){

				// Register Widgets
				foreach($widgets as $widget_cls){
				   
					if(in_array($widget_cls,$return_active) ){
						$cls = '\Element_Ready\Widgets'.'\\'.$path.'\\'.$widget_cls;
					   
						if(class_exists($cls)):
							\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new $cls() );
						endif;

					}elseif(did_action('element_ready_pro_init')){
						
						$pro_cls = '\Element_Ready\Widgets'.'\\'.$path.'\\'.$widget_cls;
						
						if(class_exists($pro_cls)):
							\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new $pro_cls() );
						endif;	
						
					}
				
				}

			}
		}
		
	}


	/******************************
	 * 	INIT CONTROLS
	 ******************************/
	public function init_controls() {

		\Elementor\Plugin::$instance->controls_manager->register_control( 'file-select', new \Element_Ready\Controls\File_Select_Clr() );
		\Elementor\Plugin::$instance->controls_manager->register_control( 'radioimage', new \Element_Ready\Controls\Radio_Choose() );
	}

	/*******************************
	 * 	ADD CUSTOM CATEGORY
	 *******************************/
	public function add_elementor_category()
	{
		\Elementor\Plugin::instance()->elements_manager->add_category( 'element-ready-addons', array(
			'title' => esc_html__( 'Element Ready Lite', 'element-ready' ),
			'icon'  => 'fa fa-plug',
		), 1 );
	}


	/******************************
	 * 	ALL INCLUDES
	******************************/
	public function includes() {
	   // inc
	   require_once( __DIR__ . '/inc/inc.php' );
	  
	   if ( class_exists( '\Element_Ready\\Init' ) ) {
		   
			\Element_Ready\Init::register_services();
			\Element_Ready\Init::register_modules();
		}
	}
}

Element_Ready_Elementor_Extension::instance();

