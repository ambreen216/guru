<?php
namespace Element_Ready\dashboard;

class Settings {

  
    public function register() {

        add_filter( 'plugin_row_meta', [ $this, 'plugin_row_meta' ], 10, 2 );
        add_filter( 'plugin_action_links_'.ELEMENT_READY_PLUGIN_BASE, [ $this ,'add_plugin_page_settings_link'] );
    }

    function add_plugin_page_settings_link( $links ) {
	
        $links[] = '<a href="' .
            admin_url( 'admin.php?page='.ELEMENT_READY_SETTING_PATH ) .
            '">' . esc_html__('Settings','element-ready') . '</a>';
    
        if(!defined('ELEMENT_READY_PRO')){

            $links[] = '<a style="color: #325DF6; font-weight: bold;"  href="' .
            esc_url( ELEMENT_READY_DEMO_URL ) .
            '">' . esc_html__('Go Pro','element-ready') . '</a>';
        }
       

        return $links;
    
    }

    public function plugin_row_meta( $plugin_meta, $plugin_file ) {

		if ( ELEMENT_READY_PLUGIN_BASE === $plugin_file ) {
			$row_meta = [
				'docs' => '<a href="'.ELEMENT_READY_DEMO_URL.'docs/element-ready'.'" aria-label="' . esc_attr__( 'View Documentation', 'element-ready' ) . '" target="_blank">' . esc_html__( 'Docs & FAQs', 'element-ready' ) . '</a>',

				'plugin-demos' => '<a href="'.ELEMENT_READY_DEMO_URL.'" aria-label="' . esc_attr__( 'View Demos', 'element-ready' ) . '" target="_blank">' . esc_html__( 'Demos', 'element-ready' ) . '</a>',

				'plugin-support' => '<a href="'.ELEMENT_READY_DEMO_URL.'customer" aria-label="' . esc_attr__( 'Get Support', 'element-ready' ) . '" target="_blank">' . esc_html__( 'Get Support', 'element-ready' ) . '</a>',
			];

			$plugin_meta = array_merge( $plugin_meta, $row_meta );
		}

		return $plugin_meta;
	}

    
}    