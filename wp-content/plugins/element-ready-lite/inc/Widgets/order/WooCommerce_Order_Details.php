<?php
namespace Element_Ready\Widgets\order;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;

use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Css_Filter;
use Elementor\Group_Control_Box_Shadow;
require_once( ELEMENT_READY_DIR_PATH . '/inc/style_controls/common/common.php' );
require_once( ELEMENT_READY_DIR_PATH . '/inc/style_controls/position/position.php' );
require_once( ELEMENT_READY_DIR_PATH . '/inc/style_controls/box/box_style.php' );
require_once( ELEMENT_READY_DIR_PATH . '/inc/content_controls/common.php' );
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if(!class_exists( 'woocommerce' )){

	return;
}

class WooCommerce_Order_Details extends Widget_Base {

	use \Elementor\Element_Ready_Common_Style;
    use \Elementor\Element_ready_common_content;
    use \Elementor\Element_Ready_Box_Style;

	public function get_name() {
		return 'Element_Ready_WooCommerce_Order_Details';
	}

	public function get_title() {
		return esc_html__( 'ER WC Order Details', 'element-ready' );
	}

	public function get_icon() {
		return 'eicon-download-button';
	}

	public function get_categories() {
		return array('element-ready-addons');
	}

    public function get_keywords() {
        return [ 'woocommerce', 'order', 'Thanks', 'free' ];
    }



	protected function _register_controls() {

	
		$this->start_controls_section(
			'section_Settings',
			[
				'label' => esc_html__( 'Settings', 'element-ready' ),
			]
		);

		 	

		$this->end_controls_section();

		$this->text_wrapper_css(
            array(
                'title' => esc_html__('Label','element-ready'),
                'slug' => '_time_desc_text_style',
                'element_name' => '_time_edesc_element_ready_',
                'selector' => '{{WRAPPER}} .er-order-details .label',
                'hover_selector' => false,
            )
        ); 

		$this->text_wrapper_css(
            array(
                'title' => esc_html__('Value','element-ready'),
                'slug' => '_value_desc_text_style',
                'element_name' => '_time_value_element_ready_',
                'selector' => '{{WRAPPER}} .er-order-details .er-value',
                'hover_selector' => false,
            )
        ); 

		$this->box_css(
            array(
                'title' => esc_html__('Inner Container','element-ready'),
                'slug' => 'wrapper_inner_box_style',
                'element_name' => 'wrapper_inner_element_ready_',
                'selector' => '{{WRAPPER}} .er-order-details',
               
               
            )
        );

        $this->box_css(
            array(
                'title' => esc_html__('Main Wrapper','element-ready'),
                'slug' => 'wrapper_body_box_style',
                'element_name' => 'wrapper_body_element_ready_',
                'selector' => '{{WRAPPER}} .er-thankyou-container',
               
               
            )
        );

	}
	
	protected function render() {

		$settings = $this->get_settings_for_display();

        //wc_order_BMUNamyoNrrQ2
		if(!isset($_REQUEST['order_key'])){

          include('layout/default.php'); 
		  return;	
		}
		
		$order_key = sanitize_text_field($_REQUEST['order_key']); 
		$order_id = wc_get_order_id_by_order_key($order_key);

		if( $order_id < 1 ){

			include('layout/default.php'); 
			return;
		}

		// Get $order object when you have the ID.
		$order = wc_get_order( $order_id );
		
		include('layout/order_details.php'); 
    
	}	
}
