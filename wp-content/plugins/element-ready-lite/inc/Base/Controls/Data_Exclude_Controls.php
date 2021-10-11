<?php 
namespace Element_Ready\Base\Controls;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Custom_Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Border;
use Element_Ready\Base\BaseController;

class Data_Exclude_Controls extends BaseController
{
	public function register() 
	{
	
		add_action('element_ready_section_data_exclude_tab' , array( $this, 'settings_section' ),10,2 );
	}

	public function settings_section( $ele,$widget ) 
	{
        $ele->start_controls_section(
            'section_data_source_tab',
            [
                'label' => esc_html__('Data Exclude', 'element-ready'),
            ]
        );
            
        $ele->add_control(
            'post__not_in',
            [
                'label'       => esc_html__('Select excluded posts', 'element-ready'),
                'type'        => Controls_Manager::SELECT2,
                'options'     => element_ready_get_posts(),
                'label_block' => true,
                'multiple'    => true,
                'description' => esc_html__('Do not show selected posts', 'element-ready'),
            ]
        );

       
   
        $ele->add_control(
            'offset_enable',
                [
                'label'     => esc_html__('Post skip', 'element-ready'),
                'type'      => Controls_Manager::SWITCHER,
                'label_on'  => esc_html__('Yes', 'element-ready'),
                'label_off' => esc_html__('No', 'element-ready'),
                'default'   => 'no',
                
                ]
        );
  
        $ele->add_control(
            'offset_item_num',
            [
            'label'     => esc_html__( 'Skip post count', 'element-ready' ),
            'type'      => Controls_Manager::NUMBER,
            'default'   => '1',
            'condition' => [ 'offset_enable' => 'yes' ]

            ]
        );
        
        do_action( 'element_ready_section_data_exclude_tab_extra_control', $ele, $widget );
    $ele->end_controls_section();

	}
}