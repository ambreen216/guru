<?php

if ( ! function_exists('bridge_core_import_object') ) {
	function bridge_core_import_object() {
		$qode_import_object = new Qode_Import();
	}

	add_action( 'init', 'bridge_core_import_object' );
}

if(!function_exists('bridge_core_required_plugins_list')) {
	function bridge_core_required_plugins_list(){

		echo bridge_core_get_required_plugins_links($_POST['example']);

		die();
	}
	add_action('wp_ajax_bridge_core_required_plugins_list', 'bridge_core_required_plugins_list');
}

if(!function_exists('bridge_core_plugins_to_install')) {
	function bridge_core_plugins_to_install(){
		global $default_plugins_array_to_install;
        $response = array();

	    $additional_plugins_to_install = $_POST['reqiredPlugins'];
		update_option("qode_required_plugins", array_unique(array_merge($additional_plugins_to_install,$default_plugins_array_to_install)));

		$response['link'] = $_POST['link'];

		echo json_encode($response);

		die();
	}
	add_action('wp_ajax_qode_pluginsToInstall', 'bridge_core_plugins_to_install');
}

if(!function_exists('bridge_core_data_import')) {

	function bridge_core_data_import() {

		$importObject = Qode_Import::getInstance();

		if ($_POST['import_attachments'] == 1) {
			$importObject->attachments = true;
		} else {
			$importObject->attachments = false;
		}
		$folder = "bridge/";
		if (!empty($_POST['example'])) {
			$folder = $_POST['example'] . "/";
		}
		$importObject->import_content($folder.$_POST['xml']);

		die();
	}

	add_action('wp_ajax_qode_dataImport', 'bridge_core_data_import');
}

if(!function_exists('bridge_core_widgets_import')) {
	function bridge_core_widgets_import()
	{
		$importObject = Qode_Import::getInstance();

		$folder = "bridge/";
		if (!empty($_POST['example']))
			$folder = $_POST['example']."/";

		$importObject->import_widgets($folder.'widgets.txt',$folder.'custom_sidebars.txt');

		die();
	}

	add_action('wp_ajax_qode_widgetsImport', 'bridge_core_widgets_import');
}

if(!function_exists('bridge_core_options_import')) {
	function bridge_core_options_import()
	{
		$importObject = Qode_Import::getInstance();

		$folder = "bridge/";
		if (!empty($_POST['example']))
			$folder = $_POST['example']."/";

		$importObject->import_options($folder.'options.txt');

		bridge_core_update_qode_options_after_import($folder);
		die();
	}

	add_action('wp_ajax_qode_optionsImport', 'bridge_core_options_import');
}

if(!function_exists('bridge_core_other_import')) {
	function bridge_core_other_import()
	{

		$importObject = Qode_Import::getInstance();

		$folder = "bridge/";
		if (!empty($_POST['example']))
			$folder = $_POST['example']."/";



		$importObject->import_options($folder.'options.txt');
		$importObject->import_widgets($folder.'widgets.txt',$folder.'custom_sidebars.txt');
		$importObject->import_menus($folder.'menus.txt');
		$importObject->import_settings_pages($folder.'settingpages.txt');

		if ( bridge_qode_revolution_slider_installed() ) {
			$importObject->rev_slider_import( $folder );
		}

        if ( bridge_qode_layer_slider_installed() ) {
            $importObject->layer_slider_import( $folder );
        }

		bridge_core_update_meta_fields_after_import($folder);
		bridge_core_update_qode_options_after_import($folder);



		die();
	}

	add_action('wp_ajax_qode_otherImport', 'bridge_core_other_import');
}


if(!function_exists('bridge_core_update_meta_fields_after_import')) {
	function bridge_core_update_meta_fields_after_import($folder){

		global $wpdb;
		$url = home_url( '/' );

		$demo_url = bridge_core_import_get_demo_url($folder);

		$images_field_array = bridge_qode_meta_boxes()->getOptionsByType('image');
		$images_field_array[] = 'qode_portfolio_images';

		if(!(is_array($images_field_array) && count($images_field_array) > 0)) {
			$images_field_array = array();
		}
		foreach ($images_field_array as $image_field) {

			$meta_values = $wpdb->get_results("SELECT * FROM $wpdb->postmeta WHERE meta_key = '" . $image_field . "'");

			foreach ($meta_values as $meta_value) {
				$new_value = bridge_core_recalc_serialized_lengths(str_replace($demo_url, $url, $meta_value->meta_value));

				$wpdb->update(
					$wpdb->postmeta,
					array(
						'meta_value' => $new_value,
					),
					array('meta_id' => $meta_value->meta_id)
				);
			}
		}

		if(bridge_qode_layer_slider_installed()) {
            $importObject = Qode_Import::getInstance();

            $demos = $importObject->demos_import_list();
            $demo_folder = str_replace('/', '', $folder);
            $layer_list     = $demos[$demo_folder]['layer-sliders']['sliders'];
            $layer_pairs    = $demos[$demo_folder]['layer-sliders']['pairs'];
            $slider_in_content = $demos[$demo_folder]['layer-sliders']['slider_in_content'];

            if(is_array($layer_pairs) && is_array($layer_list) && count($layer_list) > 0 && count($layer_pairs) > 0) {

                foreach ($layer_pairs as $layer_pair => $value){
                    $slider_meta_values = $wpdb->get_results("SELECT * FROM $wpdb->postmeta WHERE meta_key = 'qode_revolution-slider' AND meta_value = '[layerslider id=\"". $layer_pair ."\"]'");

                    foreach($slider_meta_values as $slider_meta_value) {

                        $new_value = bridge_core_recalc_serialized_lengths(str_replace($layer_pair, $value, $slider_meta_value->meta_value));

                        $wpdb->update(
                            $wpdb->postmeta,
                            array(
                                'meta_value' => $new_value,
                            ),
                            array('meta_id' => $slider_meta_value->meta_id)
                        );

                    }

                    if($slider_in_content){
                        $slider_content_values = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_content LIKE '%[layerslider_vc id=\"". $layer_pair ."\"]%'");

                        foreach($slider_content_values as $slider_content_value) {

                            $search_value = '[layerslider_vc id="' . $layer_pair .'"]';
                            $replace_value = '[layerslider_vc id="' . $value .'"]';

                            $new_value = str_replace($search_value, $replace_value, $slider_content_value->post_content);

                            $wpdb->update(
                                $wpdb->posts,
                                array(
                                    'post_content' => $new_value,
                                ),
                                array('ID' => $slider_content_value->ID)
                            );

                        }

                    }

                }
            }
        }

	}
}

if(!function_exists('bridge_core_update_qode_options_after_import')) {
	function bridge_core_update_qode_options_after_import($folder){

		$url = home_url( '/' );
		$demo_url = bridge_core_import_get_demo_url($folder);

		$global_options = get_option( 'qode_options_proya');
		$new_global_values = str_replace($demo_url, $url, $global_options);
		update_option( 'qode_options_proya', $new_global_values);
	}
}

if(!function_exists('bridge_core_import_get_demo_url')) {
	function bridge_core_import_get_demo_url($folder) {

		if(strpos($folder, 'db')){

			//remove db from folder
			$folder_new = str_replace('db','',$folder);
			$folder_new = str_replace('/','',$folder_new);
			$demo_url	= 'http://' . $folder_new . '.qodeinteractive.com/';
		} else {
			$folder_new = str_replace('/','',$folder);
			$demo_url = 'http://demo.qodeinteractive.com/' . $folder_new . '/';
		}

		return $demo_url;
	}
}

if(!function_exists('bridge_core_recalc_serialized_lengths')) {
	function bridge_core_recalc_serialized_lengths($sObject) {

		$ret = preg_replace_callback('!s:(\d+):"(.*?)";!', 'bridge_core_recalc_serialized_lengths_callback', $sObject );

		return $ret;
	}
}
if(!function_exists('bridge_core_recalc_serialized_lengths_callback')) {
	function bridge_core_recalc_serialized_lengths_callback($matches) {

		return "s:".strlen($matches[2]).":\"$matches[2]\";";
	}
}