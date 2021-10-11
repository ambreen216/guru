<?php 
/**
 * @package  Mega menu
 */
namespace Element_Ready\Modules\Menu_Builder\Base;
use Element_Ready\Base\BaseController;

class Enqueue extends BaseController
{
	public function register() {
		// admin
		add_action( 'admin_enqueue_scripts', array( $this, 'backend' ) );
       
   	}
	
	function backend( $handle ) {
        // enqueue all our scripts
        if( 'nav-menus.php' != $handle ){
            return;
        }

        if ( ! did_action( 'wp_enqueue_media' ) ) {
            wp_enqueue_media();
        }
 
		wp_enqueue_style( 'element-ready-mega-menu-style', ELEMENT_READY_MEGA_MENU_MODULE_URL . 'assets/css/backend.css' );
        wp_enqueue_script( 'element-ready-mega-menu-backend-script', ELEMENT_READY_MEGA_MENU_MODULE_URL . 'assets/js/backend.js', array('jquery','underscore','backbone-marionette') );
       
        $mege_menu_obj = array(
            'ajax_url'        => admin_url( 'admin-ajax.php' ),
            'nonce'           => wp_create_nonce( 'element_ready_mega_menu_metabox_nonce' ),
            'menu_id'         => sanitize_text_field(isset($_REQUEST['menu'])?$_REQUEST['menu']:null),
            'mega_menu_title' => esc_html__('Mega Menu','element-ready')
        );

        wp_localize_script( 'element-ready-mega-menu-backend-script', 'mege_menu_obj', $mege_menu_obj );
    }

    
    
  
}