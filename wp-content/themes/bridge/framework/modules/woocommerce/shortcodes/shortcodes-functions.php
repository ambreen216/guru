<?php

if(!function_exists('bridge_qode_include_woocommerce_shortcodes')) {
	function bridge_qode_include_woocommerce_shortcodes() {
		foreach(glob(QODE_FRAMEWORK_MODULES_ROOT_DIR.'/woocommerce/shortcodes/*/load.php') as $shortcode_load) {
			include_once $shortcode_load;
		}
	}

	add_action('bridge_qode_action_include_shortcodes_file', 'bridge_qode_include_woocommerce_shortcodes');
}