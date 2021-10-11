<?php
if (!function_exists('bridge_core_register_button')){
    function bridge_core_register_button($buttons ){
        array_push( $buttons, "|", "qode_shortcodes" );
        return $buttons;
    }
}

if (!function_exists('bridge_core_add_plugin')){
    function bridge_core_add_plugin($plugin_array ) {
        $plugin_array['qode_shortcodes'] = BRIDGE_CORE_MODULES_URL_PATH . '/shortcodes/qode_shortcodes.js';
        return $plugin_array;
    }
}

if (!function_exists('bridge_core_shortcodes_button')){
    function bridge_core_shortcodes_button(){
        if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') ) {
            return;
        }

        if ( get_user_option('rich_editing') == 'true' ) {
            add_filter( 'mce_external_plugins', 'bridge_core_add_plugin' );
            add_filter( 'mce_buttons', 'bridge_core_register_button' );
        }
    }

	add_action('init', 'bridge_core_shortcodes_button');
}


if (!function_exists('bridge_core_num_shortcodes')){
    function bridge_core_num_shortcodes($content){
        $columns = substr_count( $content, '[pricing_cell' );
        return $columns;
    }
}

//shortcodes v2
if(!function_exists('bridge_core_load_shortcode_interface')) {
    function bridge_core_load_shortcode_interface() {
        include_once BRIDGE_CORE_MODULES_PATH.'/shortcodes/lib/shortcode-interface.php';
        include_once BRIDGE_CORE_MODULES_PATH.'/shortcodes/lib/load.php';
    }
    add_action('bridge_qode_action_before_options_map', 'bridge_core_load_shortcode_interface');
}

if(!function_exists('bridge_core_load_shortcodes')) {
    /**
     * Loades all shortcodes by going through all folders that are placed directly in shortcodes/shortcode-elements folder
     * and loads load.php file in each. Hooks to qode_after_options_map action
     *
     * @see http://php.net/manual/en/function.glob.php
     */
    function bridge_core_load_shortcodes() {
        foreach(glob(BRIDGE_CORE_MODULES_PATH.'/shortcodes/shortcode-elements/*/load.php') as $shortcode_load) {
            include_once $shortcode_load;
        }

		do_action('bridge_qode_action_include_shortcodes_file');

        include_once BRIDGE_CORE_MODULES_PATH.'/shortcodes/lib/shortcode-loader.php';

    }

    add_action('bridge_qode_action_before_options_map', 'bridge_core_load_shortcodes');
}

if(!function_exists('bridge_core_load_shortcodes_vc_map')) {
	/**
	 * Loades all shortcodes by going through all folders that are placed directly in shortcodes/shortcode-elements folder
	 * and loads load.php file in each. Hooks to qode_after_options_map action
	 *
	 * @see http://php.net/manual/en/function.glob.php
	 */
	function bridge_core_load_shortcodes_vc_map() {
		foreach(glob(BRIDGE_CORE_MODULES_PATH.'/shortcodes/shortcode-elements/*/vc_map.php') as $shortcode_load) {
			include_once $shortcode_load;
		}

	}

	add_action('bridge_qode_action_before_options_map', 'bridge_core_load_shortcodes_vc_map');
}