<?php
/**
 * Plugin Name: Element Ready Lite
 * Description: Elements Ready comes up with ultimate Elementor blocks and widgets. Ready section and flexible option makes it more efficient for the users
 * Plugin URI: https://elementsready.com
 * Version: 1.1.7
 * Requires at least: 5.0
 * Tested up to: 5.8
 * Requires PHP: 7.0
 * Author: QuomodoSoft
 * Author URI: https://quomodosoft.com
 * License: GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: element-ready
 * Domain Path: /languages/
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Require once the Composer Autoload
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

/**
* PUGINS MAIN PATH CONSTANT
*/
//define( 'ELEMENT_READY_DEV_MODE', TRUE );
if( defined( 'ELEMENT_READY_DEV_MODE' ) ){
	define( 'ELEMENT_READY_VERSION', time() );
	define( 'ELEMENT_READY_SCRIPT_VAR', '.' );
}else{
	define( 'ELEMENT_READY_VERSION', '1.6.0' );
	define( 'ELEMENT_READY_SCRIPT_VAR', '.min.' );
}

ini_set( 'memory_limit', '2048M' );
ini_set( 'upload_max_size', '150M' );
ini_set( 'post_max_size', '128M' );
ini_set( 'max_execution_time', '600' );

define('ER_PUC','element-ready-update.php');
define( 'ELEMENT_READY_LITE', TRUE );
define( 'ELEMENT_READY_ROOT', dirname(__FILE__) );

define( 'ELEMENT_READY_URL', plugins_url( '/', __FILE__ ) );
define( 'ELEMENT_READY_ROOT_JS', plugins_url( '/assets/js/', __FILE__ ) );
define( 'ELEMENT_READY_ROOT_CSS', plugins_url( '/assets/css/', __FILE__ ) );
define( 'ELEMENT_READY_ROOT_ICON', plugins_url( '/assets/icons/', __FILE__ ) );
define( 'ELEMENT_READY_ROOT_IMG', plugins_url( '/assets/img/', __FILE__ ) );

define( 'ELEMENT_READY_DIR_URL', plugin_dir_url( __FILE__ ));
define( 'ELEMENT_READY_DIR_PATH', plugin_dir_path( __FILE__ ) );
define( 'ELEMENT_READY_BASE', plugin_basename( ELEMENT_READY_ROOT ) );
define( 'ELEMENT_READY_PLUGIN_BASE', plugin_basename(__FILE__) );
define( 'ELEMENT_READY_DEMO_URL', 'https://elementsready.com/' );
define( 'ELEMENT_READY_SETTING_PATH', 'element_ready_elements_dashboard_page' );

do_action( 'element_ready_loaded' );

require_once ELEMENT_READY_DIR_PATH . '/boot.php';
include( ELEMENT_READY_DIR_PATH . '/inc/Base/Puc.php' );

