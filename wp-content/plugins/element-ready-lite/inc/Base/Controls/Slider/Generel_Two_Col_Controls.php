<?php 
namespace Element_Ready\Base\Controls\Slider;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Custom_Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Border;
use Element_Ready\Base\BaseController;

class Generel_Two_Col_Controls extends BaseController
{
	public function register() 
	{
	
		add_action('element_ready_section_general_two_col_slider_tab' , array( $this, 'settings_section' ), 10, 2 );
		add_action('element_ready_section_general_two_col_slider_tab_extra_control' , array( $this, 'settings_section_extra' ),10, 2 );
	}
    public function not_allowed_control($control,$widget){
       
        $widget_list = [
           'element_ready-post-slider' =>
                 ['show_view_count']
       ];
        try{
            if(isset($widget_list[$widget])){

                $the_widget = $widget_list[$widget];
                if( in_array($control,$the_widget) ){
                  return false;
                }else{
                    return true;
                }
            }
           
            return true;
        }catch (Exception $e) {
            return true;
        }
        return true;
    }
	public function settings_section( $ele,$widget ) 
	{
            
           $ele->start_controls_section(
            'section_generals_tab',
                [
                    'label' => esc_html__('General', 'element-ready'),
                ]
            );


                    $ele->add_control(
                    'post_count',
                        [
                            'label'         => esc_html__( 'Post count', 'element-ready' ),
                            'type'          => Controls_Manager::NUMBER,
                            'default'       => '8',
                        ]
                    );
                    $ele->add_control(
                        'post_view_in_slide',
                            [
                                'label'         => esc_html__( 'Post view', 'element-ready' ),
                                'type'          => Controls_Manager::NUMBER,
                                'default'       => '2',
                               
                            ]
                        );
                    $ele->add_control(
                    'post_title_crop',
                        [
                            'label'         => esc_html__( 'Post title crop', 'element-ready' ),
                            'type'          => Controls_Manager::NUMBER,
                            'default'       => '8',
                        ]
                    );
                // uncommon  
                
                    $ele->add_control(
                        'show_content',
                        [
                            'label'     => esc_html__('Show content', 'element-ready'),
                            'type'      => Controls_Manager::SWITCHER,
                            'label_on'  => esc_html__('Yes', 'element-ready'),
                            'label_off' => esc_html__('No', 'element-ready'),
                            'default'   => 'yes',
                           
                        ]
                    );
    
                    $ele->add_control(
                        'post_content_crop',
                            [
                                'label'         => esc_html__( 'Post content crop', 'element-ready' ),
                                'type'          => Controls_Manager::NUMBER,
                                'default'       => '18',
                               
                            ]
                    );
                 
                    $ele->add_control(
                        'show_date',
                        [
                            'label'     => esc_html__('Show Date', 'element-ready'),
                            'type'      => Controls_Manager::SWITCHER,
                            'label_on'  => esc_html__('Yes', 'element-ready'),
                            'label_off' => esc_html__('No', 'element-ready'),
                            'default'   => 'yes',
                        ]
                    );

                   $ele->add_control(
                        'show_cat',
                        [
                            'label'     => esc_html__('Show Category', 'element-ready'),
                            'type'      => Controls_Manager::SWITCHER,
                            'label_on'  => esc_html__('Yes', 'element-ready'),
                            'label_off' => esc_html__('No', 'element-ready'),
                            'default'   => 'yes',
                        ]
                    );
                
              
                    $ele->add_control(
                        'show_author',
                        [
                            'label'     => esc_html__('Show Author', 'element-ready'),
                            'type'      => Controls_Manager::SWITCHER,
                            'label_on'  => esc_html__('Yes', 'element-ready'),
                            'label_off' => esc_html__('No', 'element-ready'),
                            'default'   => 'yes',
                        ]
                    );
                
               
                    $ele->add_control(
                        'show_author_img',
                        [
                            'label'     => esc_html__('Show Author image', 'element-ready'),
                            'type'      => Controls_Manager::SWITCHER,
                            'label_on'  => esc_html__('Yes', 'element-ready'),
                            'label_off' => esc_html__('No', 'element-ready'),
                            'default'   => 'no',
                        ]
                    );
               
                
               
                $ele->add_control(
                    'show_bookmark',
                    [
                        'label'     => esc_html__('Show bookmark', 'element-ready'),
                        'type'      => Controls_Manager::SWITCHER,
                        'label_on'  => esc_html__('Yes', 'element-ready'),
                        'label_off' => esc_html__('No', 'element-ready'),
                        'default'   => 'yes',
                        
                    ]
                );

                do_action( 'element_ready_section_general_two_col_slider_tab_extra_control', $ele, $widget );
            $ele->end_controls_section();	
    }
    
    public function settings_section_extra($ele, $widget ){
        
        
    }
}