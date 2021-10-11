<?php 
/*
  Global Section
*/
namespace Element_Ready\section_control;

use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Border;

class Element_Ready_Section_Tooltip {

    private static $instance = null;
    
    private function __construct(){

        add_action( 'elementor/element/before_section_start', [ $this, 'element_ready_tooltip_controls' ] ,15,3 );       
        add_action( 'elementor/frontend/after_enqueue_scripts', array ( $this, 'tooltip_script' ), 10 );

        // front render
        add_action( 'elementor/frontend/widget/before_render', [ $this, 'before_element_render' ] );
    }

    public function tooltip_script(){
        wp_enqueue_script( 'tipped' );
        wp_enqueue_style( 'tipped' );
        wp_enqueue_script( 'element-ready-global-widget' );
    }

    public function before_element_render( \Elementor\Element_Base $element ){

       
        if ( ! $element->get_settings( 'element_ready_tooltip_enable' ) ) {
            return;
        }

        $settings_obj = [

            'enable_tooltip'        => $element->get_settings( 'element_ready_tooltip_enable' ),
            'default_open'          => $element->get_settings( 'element_ready_tooltip_default_open' ),
            'tooltip_position'      => $element->get_settings( 'element_ready_tooltip_position' ),
            'tooltip_target'        => $element->get_settings( 'element_ready_tooltip_target' ),
            'tooltip_enable_title'  => $element->get_settings( 'element_ready_tooltip_enable_title' ),
            'tooltip_title'         => $element->get_settings( 'element_ready_tooltip_title' ),
            'tooltip_content'       => $element->get_settings( 'element_ready_tooltip_content' ),
            'tooltip_behavior'      => $element->get_settings( 'element_ready_tooltip_behavior' ),
            'tooltip_cache'         => $element->get_settings( 'element_ready_tooltip_cache' ),
            'tooltip_close_btn'     => $element->get_settings( 'element_ready_tooltip_close_btn' ),
            'tooltip_hide_false'    => $element->get_settings( 'element_ready_tooltip_hide_false' ),
            'tooltip_skin'          => $element->get_settings( 'element_ready_tooltip_skin' ),
            'tooltip_detach'        => $element->get_settings( 'element_ready_tooltip_detach' ),
            'tooltip_fadein_dealy'  => $element->get_settings( 'element_ready_tooltip_fadein_dealy' )['size'],
            'tooltip_fadeout_dealy' => $element->get_settings( 'element_ready_tooltip_fadeout_dealy' )['size'],
            'hide_on_outside_click' => $element->get_settings( 'element_ready_tooltip_hide_on_outside_click' ),
            'tooltip_max_width'     => $element->get_settings( 'element_ready_tooltip_max_width' )['size'],
            
        ];
    
        $element->add_render_attribute( '_wrapper',[
            'data-tooltip_data' => json_encode( $settings_obj ),
        ]);
    }

    public function element_ready_tooltip_controls( $element, $section_id, $args ){

        if( 'common' === $element->get_name() && '_section_style' == $section_id ) {

            $element->start_controls_section(
                'element_ready_tooltipd_section',
                [
                    'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
                    'label' => esc_html__( 'Element Ready Tooltip', 'element-ready' ),
                ]
            );
                $element->add_control(
                    'element_ready_tooltip_enable',
                    [
                        'label'        => esc_html__( 'Enable Tooltip?', 'element-ready' ),
                        'type'         => \Elementor\Controls_Manager::SWITCHER,
                        'return_value' => 'yes',
                    ]
                );
                $element->start_controls_tabs( 
                    '_tooltip_tabs',[                        
                        'condition'    => [
                            'element_ready_tooltip_enable' => ['yes']
                        ],
                        'separator' => 'before',
                    ]
                );
                    $element->start_controls_tab(
                        '_tooltip_content_tab',
                        [
                            'label' => esc_html__( 'Tooltip Content', 'element-ready' ),
                        ]
                    );
                        $element->add_responsive_control(
                            'element_ready_tooltip_skin',
                            [
                                'label'   => esc_html__( 'Tooltip Skin', 'element-ready' ),
                                'type'    => \Elementor\Controls_Manager::SELECT,
                                'options' => [
                                    'dark'        => esc_html__( 'dark', 'element-ready'),
                                    'light'       => esc_html__( 'light', 'element-ready'),
                                    'gray'        => esc_html__( 'gray', 'element-ready'),
                                    'red'         => esc_html__( 'red', 'element-ready'),
                                    'green'       => esc_html__( 'green', 'element-ready'),
                                    'blue'        => esc_html__( 'blue', 'element-ready'),
                                    'lightyellow' => esc_html__( 'lightyellow', 'element-ready'),
                                    'lightblue'   => esc_html__( 'lightblue', 'element-ready'),
                                    'lightpink'   => esc_html__( 'lightpink', 'element-ready'),
                                ],
                                'default' => 'dark',
                                'selectors' => [
                                    '{{WRAPPER}}' => 'position: {{VALUE}};',
                                ],
                                'separator' => 'before',
                            ]
                        );
                        $element->add_control(
                            'element_ready_tooltip_content_heading',
                            [
                                'label'     => esc_html__( 'Content', 'element-ready' ),
                                'type'      => \Elementor\Controls_Manager::HEADING,
                                'separator' => 'before',
                            ]
                        );
                        $element->add_control(
                            'element_ready_tooltip_enable_title',
                            [
                                'label'        => esc_html__( 'Title?', 'element-ready' ),
                                'type'         => \Elementor\Controls_Manager::SWITCHER,
                                'return_value' => 'yes',
                                'separator'    => 'before',
                            ]
                        );
                        $element->add_control(
                            'element_ready_tooltip_title',
                            [
                                'label'       => esc_html__( 'Tooltip Title', 'element-ready' ),
                                'type'        => \Elementor\Controls_Manager::TEXT,
                                'placeholder' => esc_html__( 'Your Tooltip Title Here.', 'element-ready' ),
                                'condition'   => [
                                    'element_ready_tooltip_enable_title' => 'yes',
                                ],
                            ]
                        );
                        $element->add_control(
                            'element_ready_tooltip_content',
                            [
                                'label'       => esc_html__( 'Tooltip Content', 'element-ready' ),
                                'type'        => \Elementor\Controls_Manager::WYSIWYG,
                                'placeholder' => esc_html__( 'Your Tooltip Content Here.', 'element-ready' ),
                                'separator' => 'before',
                            ]
                        );
                
                    $element->end_controls_tab();
                    $element->start_controls_tab(
                        '_tooltip_settings_tab',
                        [
                            'label' => esc_html__( 'Tooltip Settings', 'element-ready' ),
                        ]
                    );

                        $element->add_control(
                            'element_ready_tooltip_default_open',
                            [
                                'label'        => esc_html__( 'Default Open', 'element-ready' ),
                                'type'         => \Elementor\Controls_Manager::SWITCHER,
                                'return_value' => 'yes',
                            ]
                        );

                        $element->add_control(
                            'options_hr',
                            [
                                'type' => \Elementor\Controls_Manager::DIVIDER,
                            ]
                        );
                        $element->add_control(
                            'element_ready_tooltip_heading',
                            [
                                'label' => esc_html__( 'Layout Style', 'element-ready' ),
                                'type'  => \Elementor\Controls_Manager::HEADING,
                            ]
                        );
                        $element->add_responsive_control(
                            'element_ready_tooltip_position',
                            [
                                'label'   => esc_html__( 'Tooltip Positon', 'element-ready' ),
                                'type'    => \Elementor\Controls_Manager::SELECT,
                                'options' => [
                                    'topleft'     => esc_html__( 'topleft', 'element-ready'),
                                    'top'         => esc_html__( 'top', 'element-ready'),
                                    'topright'    => esc_html__( 'topright', 'element-ready'),
                                    'righttop'    => esc_html__( 'righttop', 'element-ready'),
                                    'right'       => esc_html__( 'right', 'element-ready'),
                                    'rightbottom' => esc_html__( 'rightbottom', 'element-ready'),
                                    'bottomleft'  => esc_html__( 'bottomleft', 'element-ready'),
                                    'bottom'      => esc_html__( 'bottom', 'element-ready'),
                                    'bottomright' => esc_html__( 'bottomright', 'element-ready'),
                                    'lefttop'     => esc_html__( 'lefttop', 'element-ready'),
                                    'left'        => esc_html__( 'left', 'element-ready'),
                                    'leftbottom'  => esc_html__( 'leftbottom', 'element-ready'),
                                ],
                                'default' => 'top',
                                'selectors' => [
                                    '{{WRAPPER}}' => 'position: {{VALUE}};',
                                ],
                                'separator' => 'before',
                            ]
                        );
                        $element->add_responsive_control(
                            'element_ready_tooltip_target',
                            [
                                'label'   => esc_html__( 'Tooltip Target', 'element-ready' ),
                                'type'    => \Elementor\Controls_Manager::SELECT,
                                'options' => [
                                    'mouse'       => esc_html__( 'mouse', 'element-ready'),
                                    'element'     => esc_html__( 'element', 'element-ready'),
                                ],
                                'default' => 'element',
                            ]
                        );
                        $element->add_control(
                            'element_ready_tooltip_option_heading',
                            [
                                'label'     => esc_html__( 'Options', 'element-ready' ),
                                'type'      => \Elementor\Controls_Manager::HEADING,
                                'separator' => 'before',
                            ]
                        );
                        $element->add_responsive_control(
                            'element_ready_tooltip_behavior',
                            [
                                'label'   => esc_html__( 'Behavior', 'element-ready' ),
                                'type'    => \Elementor\Controls_Manager::SELECT,
                                'options' => [
                                    'mouse'  => esc_html__( 'mouse', 'element-ready'),
                                    'hide'   => esc_html__( 'hide', 'element-ready'),
                                    'sticky' => esc_html__( 'sticky', 'element-ready'),
                                ],
                                'default' => 'hide',
                                'separator' => 'before',
                            ]
                        );
                        $element->add_control(
                            'element_ready_tooltip_cache',
                            [
                                'label'        => esc_html__( 'Cache?', 'element-ready' ),
                                'type'         => \Elementor\Controls_Manager::SWITCHER,
                                'return_value' => 'yes',
                                'separator'    => 'before',
                            ]
                        );
                        $element->add_control(
                            'element_ready_tooltip_close_btn',
                            [
                                'label'        => esc_html__( 'Close Button?', 'element-ready' ),
                                'type'         => \Elementor\Controls_Manager::SWITCHER,
                                'return_value' => 'yes',
                                'separator'    => 'before',
                            ]
                        );
                        $element->add_control(
                            'element_ready_tooltip_hide_false',
                            [
                                'label'        => esc_html__( 'Hide False In Mouseout', 'element-ready' ),
                                'type'         => \Elementor\Controls_Manager::SWITCHER,
                                'return_value' => 'yes',
                                'separator'    => 'before',
                            ]
                        );
                        $element->add_control(
                            'element_ready_tooltip_detach',
                            [
                                'label'        => esc_html__( 'Detach', 'element-ready' ),
                                'type'         => \Elementor\Controls_Manager::SWITCHER,
                                'return_value' => 'yes',
                                'separator'    => 'before',
                            ]
                        );
                        $element->add_control(
                            'element_ready_tooltip_fadein_dealy',
                            [
                                'label'       => esc_html__( 'FadeIn Time', 'element-ready' ),
                                'type'        => \Elementor\Controls_Manager::SLIDER,
                                'default'     => '200',
                                'placeholder' => esc_html__( '200', 'element-ready' ),
                                'size_units' => [ 'px' ],
                                'range'      => [
                                    'px' => [
                                        'min'  => 200,
                                        'max'  => 5000,
                                        'step' => 10,
                                    ],
                                ],
                                'default' => [
                                    'unit' => 'px',
                                    'size'      => 200,
                                ],
                                'separator' => 'before',
                            ]
                        );
                        $element->add_control(
                            'element_ready_tooltip_fadeout_dealy',
                            [
                                'label'       => esc_html__( 'FadeOut Time', 'element-ready' ),
                                'type'        => \Elementor\Controls_Manager::SLIDER,
                                'default'     => '200',
                                'placeholder' => esc_html__( '200', 'element-ready' ),
                                'size_units' => [ 'px'],
                                'range'      => [
                                    'px' => [
                                        'min'  => 200,
                                        'max'  => 5000,
                                        'step' => 10,
                                    ],
                                ],
                                'default' => [
                                    'unit' => 'px',
                                    'size'      => 200,
                                ],
                                'separator' => 'before',
                            ]
                        );
                        $element->add_control(
                            'element_ready_tooltip_hide_on_outside_click',
                            [
                                'label'        => esc_html__( 'Hide On Click Outside', 'element-ready' ),
                                'type'         => \Elementor\Controls_Manager::SWITCHER,
                                'return_value' => 'yes',
                                'separator'    => 'before',
                                'default' => 'yes',
                            ]
                        );                
                        $element->add_control(
                            'element_ready_tooltip_max_width',
                            [
                                'label'       => esc_html__( 'Max Width', 'element-ready' ),
                                'type'        => \Elementor\Controls_Manager::SLIDER,
                                'default'     => '200',
                                'placeholder' => esc_html__( '200', 'element-ready' ),
                                'size_units' => [ 'px' ],
                                'range'      => [
                                    'px' => [
                                        'min'  => 200,
                                        'max'  => 1000,
                                        'step' => 10,
                                    ],
                                ],
                                'default' => [
                                    'unit' => 'px',
                                    'size' => 300,
                                ],
                                'separator' => 'before',
                            ]
                        );
                    $element->end_controls_tab();
                $element->end_controls_tabs();
            $element->end_controls_section();
        }
    }
 
    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self:: $instance;
    }
}
if(element_ready_get_modules_option('widget_tooltip')){
    Element_Ready_Section_Tooltip::getInstance();
}
