<?php
/**
 * Plugin Name: Advanced WpBakery Addons
 * Plugin URI: http://themescup.com/
 * Description: An extende of WpBakery Addons with tons of modern element,use any element, no programming knowledge required.
 * Version: 1.2.6
 * Author: ThemesCup -themescup.com
 * Author URI: http://wpbakery.com
 * License: GPLv2 or later
 * @package Advanced WpBakery Addons
 */

// Don't load directly
if (!defined('ABSPATH')){die('-1');}


include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( is_plugin_active( 'js_composer/js_composer.php' ) ){

    /* Constants */
    define( 'AWAVC_URL', rtrim( plugin_dir_url( __FILE__ ), '/' ) );
    define( 'AWAVC_DIR', rtrim( plugin_dir_path( __FILE__ ), '/' ) );
    if ( ! function_exists( 'awavc_WordPressCheckup' ) ) {
        function awavc_WordPressCheckup( $version = '3.8' ) {
            global $wp_version;
            if ( version_compare( $wp_version, $version, '>=' ) ) {
                return "true";
            } else {
                return "false";
            }
        }
    }


    //Loading CSS
    function awavc_business_template_styles() {
        
        // CSS
        wp_enqueue_style('awavc-font-awesome', plugins_url( '/assets/css/font-awesome.min.css' , __FILE__ ) );
        wp_enqueue_style('awavc-grid', plugins_url( '/assets/css/grid.css' , __FILE__ ) );
        wp_enqueue_style('awavc-style', plugins_url( '/assets/css/style.css' , __FILE__ ) );

        // JS
       wp_enqueue_script('awavc-plugins-js', plugins_url('/assets/js/main.js', __FILE__), array('jquery'),'1.0.0', true);
 
    }
    add_action( 'wp_enqueue_scripts', 'awavc_business_template_styles' );

    // Admin Style CSS
    function awavc_admin_enqeue() {
        
        wp_enqueue_style( 'awavc_admin_css', plugins_url( 'admin/admin.css', __FILE__ ) );
    }
    add_action( 'admin_enqueue_scripts', 'awavc_admin_enqeue' );

    // Initialize hover effects addon
    add_action( 'vc_before_init', 'init_awavc_addon' );
    function init_awavc_addon() {
        //params
        require_once 'admin/params/index.php';

    //slider carousel shortcode



            require_once( 'modules/awavc-flip-box-1/awavc-flip-box-two.php' );
            require_once( 'modules/awavc-flip-box-2/awavc-flip-box-advanced.php' );
            require_once( 'modules/awavc-flip-box-3/awavc-flip-box.php' );
            require_once( 'modules/awavc-hover-effect/awavc-hover-effects.php' );
            require_once( 'modules/awavc-info-box/awavc-info-box-one-v1.php' );
            require_once( 'modules/awavc-icon-box/awavc-icon-box.php');
            require_once( 'modules/awavc-heading/awavc-heading.php');
            //require_once( 'modules/awavc-info-section/awavc-info-section.php' );
            //require_once( 'modules/awavc-info-history/awavc-info-history.php' );
            require_once( 'modules/awavc-service-box/awavc-service-box-one-v1.php' );
            require_once( 'modules/awavc-team-box/awavc-team-box-v1.php' );
            require_once( 'modules/awavc-profile-card/awavc-profile-card.php' );
            require_once( 'modules/awavc-button/awavc-button.php' );
            require_once( 'modules/awavc-anim-text/awavc-anim-text.php' );
            require_once( 'modules/awavc-anim-img/awavc-anim-img.php' );
            require_once( 'modules/awavc-lightbox/awavc-lightbox.php');
            require_once( 'modules/awavc-testimonial/awavc-testimonial.php');
            require_once( 'modules/awavc-testimonial-slider/awavc-testimonial-slider.php');
            require_once( 'modules/awavc-blog/awavc-post-content.php' );
            require_once( 'modules/awavc-blog-slider/awavc-blog-slider.php' );
            require_once( 'modules/awavc-pricing-list/awavc-pricing-list.php');
            require_once( 'modules/awavc-tabs/awavc-tabs.php');
            require_once( 'modules/awavc-woo-products/awavc-woo-products.php');
            require_once( 'modules/awavc-woo-products-slider/awavc-woo-products-slider.php');
            require_once( 'modules/awavc-news/awavc-news.php');
            require_once( 'modules/awavc-before-after/awavc-before-after.php');
            require_once( 'modules/awavc-timeline/awavc-timeline.php');
            require_once( 'modules/awavc-promo/awavc-promo.php');
            require_once( 'modules/awavc-countdown/awavc-countdown.php');
            require_once( 'modules/awavc-banner/awavc-banner.php');
            require_once( 'modules/awavc-clickbox/awavc-clipbox.php');
    }
}
// Check If VC is activate
else {
    function awavc_required_plugin() {
        if ( is_admin() && current_user_can( 'activate_plugins' ) &&  !is_plugin_active( 'js_composer/js_composer.php' ) ) {
            add_action( 'admin_notices', 'awavc_required_plugin_notice' );

            deactivate_plugins( plugin_basename( __FILE__ ) ); 

            if ( isset( $_GET['activate'] ) ) {
                unset( $_GET['activate'] );
            }
        }

    }
    add_action( 'admin_init', 'awavc_required_plugin' );

    function awavc_required_plugin_notice(){
        ?><div class="error"><p>Error! you need to install or activate the <a target="_blank" href="1.envato.market/RdjNg">WPBakery Page Builder for WordPress (formerly Visual Composer)</a> plugin to run "<span style="font-weight: bold;">Feature Boxes Addon for WPBakery Page Builder</span>" plugin.</p></div><?php
    }
}
?>