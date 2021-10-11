<?php
/**
 * @package Element Ready
 */
namespace Elementor;
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Box_Shadow;

trait Element_Ready_Box_Style {

    public function box_css($atts) {
        
        $atts_variable = shortcode_atts(
            array(
                'title'        => esc_html__('Box Style','element-ready'),
                'slug'         => '_box_style',
                'element_name' => '_element_ready_',
                'selector'     => '{{WRAPPER}} ',
                'condition'    => '',
            ), $atts );

        extract($atts_variable);    

        $widget = $this->get_name().'_'.element_ready_heading_camelize($slug);

        $tab_start_section_args =  [
            'label' => $title,
            'tab'   => Controls_Manager::TAB_STYLE,
        ];
        
        if(is_array($condition)){
            $tab_start_section_args['condition'] = $condition;
        }
        /*----------------------------
            ELEMENT__STYLE
        -----------------------------*/
        $this->start_controls_section(
            $widget.'_style_section',
            $tab_start_section_args
        );

            $this->start_controls_tabs( $widget.'_tabs_style' );
                $this->start_controls_tab(
                    $widget.'_normal_tab',
                    [
                        'label' => esc_html__( 'Normal', 'element-ready' ),
                    ]
                );


                    // Background
                    $this->add_group_control(
                        Group_Control_Background::get_type(),
                        [
                            'name'     => $widget.'_background',
                            'label'    => esc_html__( 'Background', 'element-ready' ),
                            'types'    => [ 'classic', 'gradient' ],
                            'selector' => $selector,
                        ]
                    );

                    // Border
                    $this->add_group_control(
                        Group_Control_Border:: get_type(),
                        [
                            'name'     => $widget.'_border',
                            'label'    => esc_html__( 'Border', 'element-ready' ),
                            'selector' => $selector,
                        ]
                    );

                    // Radius
                    $this->add_responsive_control(
                        $widget.'_radius',
                        [
                            'label'      => esc_html__( 'Border Radius', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                $selector => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                               
                            ],
                        ]
                    );
                    
                    // Shadow
                    $this->add_group_control(
                        Group_Control_Box_Shadow::get_type(),
                        [
                            'name'     => $widget.'_shadow',
                            'selector' => $selector,
                        ]
                    );

                    // Margin
                    $this->add_responsive_control(
                        $widget.'_margin',
                        [
                            'label'      => esc_html__( 'Margin', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                
                                $selector => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );

                    // Padding
                    $this->add_responsive_control(
                        $widget.'_padding',
                        [
                            'label'      => esc_html__( 'Padding', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                $selector => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                               
                            ],
                        ]
                    );

                    
                    $this->add_responsive_control(
                        $widget.'main_section_element_ready_yu_custom_css',
                        [
                            'label'     => esc_html__( 'Custom CSS', 'element-ready' ),
                            'type'      => Controls_Manager::CODE,
                            'rows'      => 20,
                            'language'  => 'css',
                            'selectors' => [
                                $selector => '{{VALUE}};',
                              
                            ],
                            'separator' => 'before',
                        ]
                    );

                $this->end_controls_tab();

       
            $this->end_controls_tabs();

            $this->add_responsive_control(
                $widget.'_section___section_show_hide_'.$element_name.'_display',
                [
                    'label' => esc_html__( 'Display', 'element-ready' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => '',
                    'options' => [
                        'flex'         => esc_html__( 'Flex', 'element-ready' ),
                        'inline-flex'         => esc_html__( 'Inline Flex', 'element-ready' ),
                        'block'        => esc_html__( 'Block', 'element-ready' ),
                        'inline-block' => esc_html__( 'Inline Block', 'element-ready' ),
                        'grid'         => esc_html__( 'Grid', 'element-ready' ),
                        'none'         => esc_html__( 'None', 'element-ready' ),
                        ''             => esc_html__( 'inherit', 'element-ready' ),
                    ],
                    'selectors' => [
                        $selector => 'display: {{VALUE}};'
                  ],
                ]
                
            );

            $this->add_responsive_control(
                $widget.'_section___section_flex_direction_'.$element_name.'_display',
                [
                    'label' => esc_html__( 'Flex Direction', 'element-ready' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => '',
                    'options' => [
                        'column'         => esc_html__( 'Column', 'element-ready' ),
                        'row'            => esc_html__( 'Row', 'element-ready' ),
                        'column-reverse' => esc_html__( 'Column Reverse', 'element-ready' ),
                        'row-reverse'    => esc_html__( 'Row Reverse', 'element-ready' ),
                        'revert'         => esc_html__( 'Revert', 'element-ready' ),
                        'none'           => esc_html__( 'None', 'element-ready' ),
                        ''               => esc_html__( 'inherit', 'element-ready' ),
                    ],
                    'selectors' => [
                        $selector => 'flex-direction: {{VALUE}};'
                    ],
                    'condition' => [ $widget.'_section___section_show_hide_'.$element_name.'_display' => ['flex','inline-flex'] ]
                ]
                
            );

            $this->add_responsive_control(
                $widget.'_section___section_flex_wrap_'.$element_name.'_display',
                [
                    'label' => esc_html__( 'Flex Wrap', 'element-ready' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => '',
                    'options' => [
                        'wrap'         => esc_html__( 'Wrap', 'element-ready' ),
                        'wrap-reverse' => esc_html__( 'Wrap Reverse', 'element-ready' ),
                        'nowrap'    => esc_html__( 'No Wrap', 'element-ready' ),
                        'unset'         => esc_html__( 'Unset', 'element-ready' ),
                        'normal'           => esc_html__( 'None', 'element-ready' ),
                        'inherit'               => esc_html__( 'inherit', 'element-ready' ),
                    ],
                    'selectors' => [
                        $selector => 'flex-wrap: {{VALUE}};'
                    ],
                    'condition' => [ $widget.'_section___section_show_hide_'.$element_name.'_display' => ['flex','inline-flex'] ]
                ]
                
            );

            $this->add_responsive_control(
                $widget.'_section_align_section_e_'.$element_name.'_flex_align',
                [
                    'label' => esc_html__( 'Alignment', 'element-ready' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => '',
                    'options' => [
                        'flex-start'    => esc_html__( 'Left', 'element-ready' ),
                        'flex-end'      => esc_html__( 'Right', 'element-ready' ),
                        'center'        => esc_html__( 'Center', 'element-ready' ),
                        'space-around'  => esc_html__( 'Space Around', 'element-ready' ),
                        'space-between' => esc_html__( 'Space Between', 'element-ready' ),
                        'space-evenly'  => esc_html__( 'Space Evenly', 'element-ready' ),
                        ''              => esc_html__( 'inherit', 'element-ready' ),
                    ],
                    'condition' => [ $widget.'_section___section_show_hide_'.$element_name.'_display' => ['flex','inline-flex'] ],

                    'selectors' => [
                        $selector => 'justify-content: {{VALUE}};'
                   ],
                ]
                
            );

            $this->add_responsive_control(
                $widget.'_section_align_items_section_e_'.$element_name.'_flex_align',
                [
                    'label' => esc_html__( 'Align Items', 'element-ready' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => '',
                    'options' => [
                        'flex-start'    => esc_html__( 'Left', 'element-ready' ),
                        'flex-end'      => esc_html__( 'Right', 'element-ready' ),
                        'center'        => esc_html__( 'Center', 'element-ready' ),
                        'baseline'  => esc_html__( 'Baseline', 'element-ready' ),
                        ''              => esc_html__( 'inherit', 'element-ready' ),
                    ],
                    'condition' => [ $widget.'_section___section_show_hide_'.$element_name.'_display' => ['flex','inline-flex'] ],

                    'selectors' => [
                        $selector => 'align-items: {{VALUE}};'
                   ],
                ]
                
            );



            $this->add_control(
                $widget.'_section___section_popover_'.$element_name.'_position',
                [
                    'label' => esc_html__( 'Position', 'element-ready' ),
                    'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
                    'label_off' => esc_html__( 'Default', 'element-ready' ),
                    'label_on' => esc_html__( 'Custom', 'element-ready' ),
                    'return_value' => 'yes',
                ]
            );
    
            $this->start_popover();
            $this->add_responsive_control(
                $widget.'_section__'.$element_name.'_position_type',
                [
                    'label' => esc_html__( 'Position', 'element-ready' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => '',
                    'options' => [
                        'fixed'    => esc_html__('Fixed','element-ready'),
                        'absolute' => esc_html__('Absolute','element-ready'),
                        'relative' => esc_html__('Relative','element-ready'),
                        'sticky'   => esc_html__('Sticky','element-ready'),
                        'static'   => esc_html__('Static','element-ready'),
                        'inherit'  => esc_html__('inherit','element-ready'),
                        ''         => esc_html__('none','element-ready'),
                    ],
                    'selectors' => [
                        $selector => 'position: {{VALUE}};',
                       
                    ],
                    
                ]
            );
    
            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'_position_left',
                [
                    'label' => esc_html__( 'Position Left', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -3000,
                            'max' => 3000,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        $selector => 'left: {{SIZE}}{{UNIT}};',
                       
                    ],
                ]
            );
    
            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'_r_position_top',
                [
                    'label' => esc_html__( 'Position Top', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -3000,
                            'max' => 3000,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        $selector => 'top: {{SIZE}}{{UNIT}};',
                      
                    ],
                ]
            );

            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'_r_position_bottom',
                [
                    'label' => esc_html__( 'Position Bottom', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -2100,
                            'max' => 3000,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        $selector => 'bottom: {{SIZE}}{{UNIT}};',
                       
                    ],
                ]
            );
            $this->add_responsive_control(
                $widget.'main_section_'.$element_name.'_r_position_right',
                [
                    'label' => esc_html__( 'Position Right', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => -1600,
                            'max' => 3000,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        $selector => 'right: {{SIZE}}{{UNIT}};',
                       
                    ],
                ]
            );
            $this->end_popover();

            $this->add_control(
                $widget.'main_section_'.$element_name.'_rbox_popover_section_sizen',
            [
                'label' => esc_html__( 'Box Size', 'element-ready' ),
                'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
                'label_off' => esc_html__( 'Default', 'element-ready' ),
                'label_on' => esc_html__( 'Custom', 'element-ready' ),
                'return_value' => 'yes',
              
            ]
        );

        $this->start_popover();

        $this->add_responsive_control(
            $widget.'main_section_'.$element_name.'_r_section__width',
            [
                'label' => esc_html__( 'Width', 'element-ready' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 3000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
               
                'selectors' => [
                    $selector => 'width: {{SIZE}}{{UNIT}};',
                   
                ],
            ]
        );

        $this->add_responsive_control(
            $widget.'main_section_'.$element_name.'_r_container_height',
            [
                'label' => esc_html__( 'Height', 'element-ready' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 3000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
               
                'selectors' => [
                    $selector => 'height: {{SIZE}}{{UNIT}};',
                  
                ],
            ]
        );

       
        $this->end_popover();


        $this->end_controls_section();
        /*----------------------------
            ELEMENT__STYLE END
        -----------------------------*/
    }


  }