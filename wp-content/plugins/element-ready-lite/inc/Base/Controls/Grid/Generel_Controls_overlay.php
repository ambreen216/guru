<?php 
namespace Element_Ready\Base\Controls\Grid;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Custom_Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Border;
use Element_Ready\Base\BaseController;

class Generel_Controls_overlay extends BaseController
{
	public function register() 
	{
	
		add_action('er_section_general_grid_tab_overlay' , array( $this, 'settings_section' ), 10, 2 );
	
	}
    public function not_allowed_control($control,$widget){
       
        $widget_list = [
           'er-post-slider' =>
                 ['show_date','show_cat','show_readmore']
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
            'section_general_tab',
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
                'post_title_crop',
                    [
                        'label'         => esc_html__( 'Post title crop', 'element-ready' ),
                        'type'          => Controls_Manager::NUMBER,
                        'default'       => '8',
                    ]
                );
                // uncommon  
                if($this->not_allowed_control('show_content',$widget)){
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
    
                }
               
                    $ele->add_control(
                        'post_content_crop',
                            [
                                'label'         => esc_html__( 'Post content crop', 'element-ready' ),
                                'type'          => Controls_Manager::NUMBER,
                                'default'       => '18',
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
                        'show_readmore',
                        [
                            'label'     => esc_html__('Show Readmore', 'element-ready'),
                            'type'      => Controls_Manager::SWITCHER,
                            'label_on'  => esc_html__('Yes', 'element-ready'),
                            'label_off' => esc_html__('No', 'element-ready'),
                            'default'   => 'yes',
                        ]
                    );
   

                    $ele->add_control(
                        'readmore_text',
                        [
                            
                        'label'         => esc_html__( 'Readmore title', 'element-ready' ),
                        'type'          => Controls_Manager::TEXT,
                        'default'      => esc_html__( 'Read more', 'element-ready' ),  
                        'condition' => [ 'show_readmore' => 'yes' ]
                        ]
                     );

                     
                    $ele->add_control(
                        'readmore_icon',
                        [
                            'label' => esc_html__( 'Icon', 'element-ready' ),
                            'type' => \Elementor\Controls_Manager::ICONS,
                            'default' => [
                                'value' => 'fas fa-star',
                                'library' => 'solid',
                            ],
                            'exclude_inline_options'=>[''],
                        ]
                    );
               
             
              
                
            $ele->end_controls_section();	
            $ele->start_controls_section(
                'section_general_social_tab',
                    [
                        'label' => esc_html__('Social', 'element-ready'),
                       
                    ]
                );
                $ele->add_control(
                    'show_social',
                    [
                        'label'     => esc_html__('Show social', 'element-ready'),
                        'type'      => Controls_Manager::SWITCHER,
                        'label_on'  => esc_html__('Yes', 'element-ready'),
                        'label_off' => esc_html__('No', 'element-ready'),
                        'default'   => 'no',
                        
                    ]
                );
                $repeater = new \Elementor\Repeater();

                $repeater->add_control(
                    'type',
                    [
                        'label' => esc_html__( 'Brand name', 'element-ready' ),
                        'type' => \Elementor\Controls_Manager::SELECT,
                        'default' => 'facebook',
                        'options' => element_ready_social_share_list()
                    ]
                );
        
                $repeater->add_control(
                    'icon',
                    [
                        'label' => esc_html__( 'Icon', 'element-ready' ),
                        'type' => \Elementor\Controls_Manager::ICONS,
                        'default' => [
                            'value' => 'fas fa-star',
                            'library' => 'solid',
                        ],
                        'exclude_inline_options'=>[''],
                    ]
                );
        
                $ele->add_control(
                    'social_list',
                    [
                        'label' => esc_html__( 'Social List', 'element-ready' ),
                        'type' => \Elementor\Controls_Manager::REPEATER,
                        'fields' => $repeater->get_controls(),
                        'title_field' => '{{{ type }}}',
                    ]
                );

            $ele->end_controls_section();	
    }
 
}