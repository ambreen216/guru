<?php

$path   = ELEMENT_READY_DIR_PATH.'element-ready-pro/index.php';
$path   = str_replace('element-ready-lite','',$path);
$domain = parse_url(home_url(), PHP_URL_HOST);

if( file_exists( $path ) ){
  
	Puc_v4_Factory::buildUpdateChecker(
		'https://plugins.quomodosoft.com/'.ER_PUC.'?license='.get_option('element_ready_pro_license_key').'&domain='.$domain,
		$path, 
		'element-ready-pro'
	);

}