<?php 
namespace Element_Ready\Base\Controls;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Custom_Controls_Manager;
use Elementor\Group_Control_Typography;

use Elementor\Group_Control_Border;
use Element_Ready\Base\BaseController;

class Sort_Controls extends BaseController
{
	public function register() 
	{
	
		add_action('element_ready_section_sort_tab' , array( $this, 'settings_section' ),10,2 );
	}

	public function settings_section( $ele,$widget ) 
	{
           $ele->start_controls_section(
            'section_sort_tab',
                [
                    'label' => esc_html__('Sort / order', 'element-ready'),
                ]
            );
                
            $ele->add_control(
                'post_sortby',
                [
                    'label'     =>esc_html__( 'Post sort by', 'element-ready' ),
                    'type'      => Controls_Manager::SELECT,
                    'default'   => 'latestpost',
                    'options'   => [
                        'latestpost'    => esc_html__( 'Latest', 'element-ready' ),
                        'popularposts'  => esc_html__( 'Popular / most view', 'element-ready' ),
                        'mostdiscussed' => esc_html__( 'Most discussed', 'element-ready' ),
                        'fb_share'      => esc_html__( 'Most fb share', 'element-ready' ),
                        'tranding'      => esc_html__( 'Tranding', 'element-ready' ),
                    ],
                ]
            );
    
            $ele->add_control(
                'post_order',
                [
                    'label'     =>esc_html__( 'Post order', 'element-ready' ),
                    'type'      => Controls_Manager::SELECT,
                    'default'   => 'DESC',
                    'options'   => [
                        'DESC'      =>esc_html__( 'Descending', 'element-ready' ),
                        'ASC'       =>esc_html__( 'Ascending', 'element-ready' ),
                    ],
                ]
            );
            
            do_action( 'element_ready_section_sort_tab_extra_control', $ele, $widget );    
            $ele->end_controls_section();	
	}
}