<?php 
namespace Element_Ready\Base\Controls;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Custom_Controls_Manager;
use Elementor\Group_Control_Typography;

use Elementor\Group_Control_Border;
use Element_Ready\Base\BaseController;

class Slider_Controls extends BaseController
{
	public function register() 
	{
	
		add_action('element_ready_section_slider_tab' , array( $this, 'settings_section' ), 10 , 2 );
	}

	public function settings_section( $ele,$widget ) 
	{
           $ele->start_controls_section(
            'section_slider_tab',
                [
                    'label' => esc_html__('Slider Controls', 'element-ready'),
                ]
            );
            
            $ele->add_responsive_control(
                'element_ready_slider_items',
                [
                    'label'   => esc_html__( 'Items', 'element-ready' ),
                    'type'    => \Elementor\Controls_Manager::NUMBER,
                    'min'     => 1,
                    'max'     => 20,
                    'step'    => 1,
                    'default' => 1
                   
                ]
            );

            $ele->add_control(
                'element_ready_slider_loop',
                    [
                    'label'        => esc_html__( 'Loop', 'element-ready' ),
                    'type'         => \Elementor\Controls_Manager::SWITCHER,
                    'label_on'     => esc_html__( 'Yes', 'element-ready' ),
                    'label_off'    => esc_html__( 'No', 'element-ready' ),
                    'return_value' => 'yes',
                    'default'      => 'no'
                    ]
            );

            $ele->add_control(
                'element_ready_slider_autoplay',
                    [
                    'label'        => esc_html__( 'Autoplay', 'element-ready' ),
                    'type'         => \Elementor\Controls_Manager::SWITCHER,
                    'label_on'     => esc_html__( 'Yes', 'element-ready' ),
                    'label_off'    => esc_html__( 'No', 'element-ready' ),
                    'return_value' => 'yes',
                    'default'      => 'no'
                    ]
            );

            $ele->add_control(
                'element_ready_slider_autoplay_hover_pause',
                    [
                    'label'        => esc_html__( 'Autoplay Hover Pause', 'element-ready' ),
                    'type'         => \Elementor\Controls_Manager::SWITCHER,
                    'label_on'     => esc_html__( 'Yes', 'element-ready' ),
                    'label_off'    => esc_html__( 'No', 'element-ready' ),
                    'return_value' => 'yes',
                    'default'      => 'no'
                    ]
            ); 
            
            $ele->add_control(
                'element_ready_slider_autoplay_timeout',
                [
                    'label'   => esc_html__( 'Autoplay timeout', 'element-ready' ),
                    'type'    => \Elementor\Controls_Manager::NUMBER,
                    'min'     => 0,
                    'max'     => 20000,
                    'step'    => 1,
                   
                ]
            );
        
            $ele->add_control(
                'element_ready_slider_smart_speed',
                [
                    'label'   => esc_html__( 'Smart Speed', 'element-ready' ),
                    'type'    => \Elementor\Controls_Manager::NUMBER,
                    'min'     => 0,
                    'max'     => 20000,
                    'step'    => 1,
                   
                ]
            );
             
            $ele->add_control(
                'element_ready_slider_nav_show',
                    [
                    'label'        => esc_html__( 'Nav', 'element-ready' ),
                    'type'         => \Elementor\Controls_Manager::SWITCHER,
                    'label_on'     => esc_html__( 'Yes', 'element-ready' ),
                    'label_off'    => esc_html__( 'No', 'element-ready' ),
                    'return_value' => 'yes',
                    'default'      => 'yes'
                    ]
            );

            $ele->add_control(
                'element_ready_slider_margin',
                [
                    'label'   => esc_html__( 'Margin', 'element-ready' ),
                    'type'    => \Elementor\Controls_Manager::NUMBER,
                    'min'     => 0,
                    'max'     => 200,
                    'step'    => 1,
                   
                ]
            );
    
         
            do_action( 'element_ready_section_slider_tab_extra_control', $ele, $widget );    
            $ele->end_controls_section();	
	}
}