<?php 
namespace Element_Ready\Base\Controls;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Custom_Controls_Manager;
use Elementor\Group_Control_Typography;

use Elementor\Group_Control_Border;
use Element_Ready\Base\BaseController;

class Sticky_Controls extends BaseController
{
	public function register() 
	{
	
		add_action('element_ready_section_sticky_tab' , array( $this, 'settings_section' ),10,2 );
	}

	public function settings_section( $ele ,$widget) 
	{
        $ele->start_controls_section(
            'section_sticky_source_tab',
            [
                'label' => esc_html__('Sticky / Features ', 'element-ready'),
            ]
        );
    
        
        $ele->add_control(
            'sticky_post',
            [
                'label'       => esc_html__('Show Feature post', 'element-ready'),
                'type'        => Controls_Manager::SWITCHER,
                'label_on'    => esc_html__('Yes', 'element-ready'),
                'label_off'   => esc_html__('No', 'element-ready'),
                'default'     => 'no',
                'description' => esc_html__('Use Sticky option to feature posts', 'element-ready'),
            ]
        );
   
        do_action( 'element_ready_section_sticky_tab_extra_control', $ele, $widget );
        
    $ele->end_controls_section();

	}
}