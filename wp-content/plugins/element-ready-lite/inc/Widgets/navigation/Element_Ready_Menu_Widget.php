<?php
namespace Element_Ready\Widgets\navigation;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Icons_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Css_Filter;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Modules\DynamicTags\Module as TagsModule;
use Elementor\Utils;
use Elementor\Plugin;
use Elementor\Repeater;
use Element_Ready\Base\Nav_Walker;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Element_Ready_Menu_Widget extends Widget_Base {

    public function get_name() {
        return 'Element_Ready_Menu_Widget';
    }
    
    public function get_title() {
        return esc_html__( 'ER Navigation', 'element-ready' );
    }

    public function get_icon() {
        return 'eicon-nav-menu';
    }

    public function get_categories() {
        return [ 'element-ready-addons' ];
    }

    public function get_keywords() {
        return [ 'Nav Menu', 'Menu', 'Navigation' ];
    }

    private function get_available_menus() {

		$menus     = wp_get_nav_menus();
		$menulists = [];
        foreach ( $menus as $menu ) {
            $menulists[ $menu->slug ] = $menu->name;
        }
        return $menulists;

    }

    protected function _register_controls() {

        /*------------------------
			MENU CONTENT SOURCE
        -------------------------*/
        $this->start_controls_section(
            'inline_menu_content',
            [
                'label' => esc_html__( 'Select Navigation & Style', 'element-ready' ),
            ]
        );
            $this->add_control(
                'inline_menu_style',
                [
                    'label'   => esc_html__( 'Style', 'element-ready' ),
                    'type'    => Controls_Manager::SELECT,
                    'default' => '1',
                    'options' => [
                        '1'      => esc_html__( 'Style One', 'element-ready' ),
                        '2'      => esc_html__( 'Style Two', 'element-ready' ),
                        '3'      => esc_html__( 'Style Three', 'element-ready' ),
                        '4'      => esc_html__( 'Badge Menu', 'element-ready' ),
                        'custom' => esc_html__( 'Custom Style', 'element-ready' ),
                    ],
                ]
            );
            if ( ! empty( $this->get_available_menus() ) ) {
                $this->add_control(
                    'inline_menu_id',
                    [
                        'label'        => esc_html__( 'Menu', 'element-ready' ),
                        'type'         => Controls_Manager::SELECT,
                        'options'      => $this->get_available_menus(),
                        'default'      => array_keys( $this->get_available_menus() )[0],
                        'save_default' => true,
                        'description'  => sprintf( esc_html__( 'Go to the <a href="%s" target="_blank">Menus Option</a> to manage your menus.', 'element-ready' ), admin_url( 'nav-menus.php' ) ),
                        'separator'    => 'before',
                    ]
                );
            } else {
                $this->add_control(
                    'inline_menu_id',
                    [
                        'type'      => Controls_Manager::RAW_HTML,
                        'raw'       => sprintf( esc_html__( '<strong>There are no menus in your site.</strong><br>Go to the <a href="%s" target="_blank">Menus Option</a> to create one.', 'element-ready' ), admin_url( 'nav-menus.php?action=edit&menu=0' ) ),
                        'separator' => 'before',
                    ]
                );
            }
            $this->add_control(
                'show_menu_bedge',
                [
                    'label'        => esc_html__( 'Show Menu Badge', 'element-ready' ),
                    'type'         => Controls_Manager::SWITCHER,
                    'return_value' => 'yes',
                    'default'      => 'no',
                    'separator'    => 'before',
                ]
            );
        $this->end_controls_section();
        /*------------------------
			MENU CONTENT SOURCE END
        -------------------------*/

        /*------------------------
			MENU ITEMS STYLE
        -------------------------*/
        $this->start_controls_section(
            'inline_menu_style_section',
            [
                'label' => esc_html__( 'Menu Items', 'element-ready' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->add_responsive_control(
                'menu_items_display',
                [
                    'label'   => esc_html__( 'Display', 'element-ready' ),
                    'type'    => Controls_Manager::SELECT,
                    'default' => 'block',
                    'options' => [
                        'initial'      => esc_html__( 'Initial', 'element-ready' ),
                        'block'        => esc_html__( 'Block', 'element-ready' ),
                        'inline-block' => esc_html__( 'Inline Block', 'element-ready' ),
                        'flex'         => esc_html__( 'Flex', 'element-ready' ),
                        'inline-flex'  => esc_html__( 'Inline Flex', 'element-ready' ),
                        'inherit'      => esc_html__( 'Inherit', 'element-ready' ),
                        'none'         => esc_html__( 'None', 'element-ready' ),
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .single__menu__nav ul.element__ready__menu' => 'display: {{VALUE}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                'menu_items_width',
                [
                    'label'      => esc_html__( 'Width', 'element-ready' ),
                    'type'       => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range'      => [
                        'px' => [
                            'min'  => 0,
                            'max'  => 1000,
                            'step' => 1,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                    'default' => [
                        'unit' => 'px',
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .single__menu__nav ul.element__ready__menu' => 'width: {{SIZE}}{{UNIT}};',
                    ],
                    'separator' => 'before',
                ]
            );
            $this->add_responsive_control(
                'menu_items_height',
                [
                    'label'      => esc_html__( 'Height', 'element-ready' ),
                    'type'       => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range'      => [
                        'px' => [
                            'min'  => 0,
                            'max'  => 1000,
                            'step' => 1,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                    'default' => [
                        'unit' => 'px',
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .single__menu__nav ul.element__ready__menu' => 'height: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                'menu_items_float',
                [
                    'label'   => esc_html__( 'Float', 'element-ready' ),
                    'type'    => Controls_Manager::SELECT,
                    'default' => 'none',
                    'options' => [
                        'left'    => esc_html__( 'Left', 'element-ready' ),
                        'right'   => esc_html__( 'Right', 'element-ready' ),
                        'none'    => esc_html__( 'None', 'element-ready' ),
                        'inherit' => esc_html__( 'Inherit', 'element-ready' ),
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .single__menu__nav ul.element__ready__menu' => 'float:{{VALUE}};',
                    ],
                    'separator' => 'before',
                ]
            );
            $this->add_responsive_control(
                'menu_items_list_style',
                [
                    'label'   => esc_html__( 'List Style', 'element-ready' ),
                    'type'    => Controls_Manager::SELECT,
                    'default' => 'none',
                    'options' => [
                        'none'                 => esc_html__('None','element-ready'),
                        'disc'                 => esc_html__('Disc','element-ready'),
                        'circle'               => esc_html__('Circle','element-ready'),
                        'square'               => esc_html__('Square','element-ready'),
                        'decimal'              => esc_html__('Decimal','element-ready'),
                        'decimal-leading-zero' => esc_html__('Decimal-leading-zero','element-ready'),
                        'lower-roman'          => esc_html__('Lower Roman','element-ready'),
                        'upper-roman'          => esc_html__('Upper Roman','element-ready'),
                        'lower-greek'          => esc_html__('Lower Greek','element-ready'),
                        'lower-latin'          => esc_html__('Lower Latin','element-ready'),
                        'upper-latin'          => esc_html__('Upper Latin','element-ready'),
                        'armenian'             => esc_html__('Armenian','element-ready'),
                        'georgian'             => esc_html__('Georgian','element-ready'),
                        'lower-alpha'          => esc_html__('Lower Alpha','element-ready'),
                        'upper-alpha'          => esc_html__('Upper Alpha','element-ready'),
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .single__menu__nav ul.element__ready__menu' => 'list-style: {{VALUE}};',
                    ],
                    'separator' => 'before',
                ]
            );
            $this->add_responsive_control(
                'menu_items_align',
                [
                    'label'   => esc_html__( 'Alignment', 'element-ready' ),
                    'type'    => Controls_Manager::CHOOSE,
                    'options' => [
                        'left' => [
                            'title' => esc_html__( 'Left', 'element-ready' ),
                            'icon'  => 'fa fa-align-left',
                        ],
                        'center' => [
                            'title' => esc_html__( 'Center', 'element-ready' ),
                            'icon'  => 'fa fa-align-center',
                        ],
                        'right' => [
                            'title' => esc_html__( 'Right', 'element-ready' ),
                            'icon'  => 'fa fa-align-right',
                        ],
                        'justify' => [
                            'title' => esc_html__( 'Justify', 'element-ready' ),
                            'icon'  => 'fa fa-align-justify',
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .single__menu__nav ul.element__ready__menu' => 'text-align: {{VALUE}};',
                    ],
                    'default'   => '',
                    'separator' => 'before',
                ]
            );
            $this->add_responsive_control(
                'menu_items_margin',
                [
                    'label'      => esc_html__( 'Margin', 'element-ready' ),
                    'type'       => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors'  => [
                        '{{WRAPPER}} .single__menu__nav ul.element__ready__menu li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'separator' => 'before',
                ]
            );
        $this->end_controls_section();
        /*------------------------
			MENU ITEMS STYLE
        -------------------------*/

        /*------------------------
			MENU ITEM STYLE
        -------------------------*/
        $this->start_controls_section(
            'inline_menu_item_style_section',
            [
                'label' => esc_html__( 'Single Menu Item', 'element-ready' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
            // Menu Normal Tab
            $this->start_controls_tabs( 'menu_style_tabs' );

                $this->start_controls_tab(
                    'menu_style_normal_tab',
                    [
                        'label' => esc_html__( 'Normal', 'element-ready' ),
                    ]
                );
                    $this->add_control(
                        'menu_normal_color',
                        [
                            'label'     => esc_html__( 'Color', 'element-ready' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .single__menu__nav ul.element__ready__menu li a' => 'color: {{VALUE}};',
                            ],
                            'separator' => 'before',
                        ]
                    );
                    $this->add_group_control(
                        Group_Control_Background:: get_type(),
                        [
                            'name'     => 'menu_normal_background',
                            'label'    => esc_html__( 'Background', 'element-ready' ),
                            'types'    => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .single__menu__nav ul.element__ready__menu li a',
                        ]
                    );
                    $this->add_group_control(
                        Group_Control_Typography:: get_type(),
                        [
                            'name'     => 'menu_typography',
                            'selector' => '{{WRAPPER}} .single__menu__nav ul.element__ready__menu li a',
                        ]
                    );        
                    $this->add_responsive_control(
                        'menu_display',
                        [
                            'label'   => esc_html__( 'Display', 'element-ready' ),
                            'type'    => Controls_Manager::SELECT,
                            'default' => 'block',
                            'options' => [
                                'initial'      => esc_html__( 'Initial', 'element-ready' ),
                                'block'        => esc_html__( 'Block', 'element-ready' ),
                                'inline-block' => esc_html__( 'Inline Block', 'element-ready' ),
                                'flex'         => esc_html__( 'Flex', 'element-ready' ),
                                'inline-flex'  => esc_html__( 'Inline Flex', 'element-ready' ),
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .single__menu__nav ul.element__ready__menu li'   => 'display: {{VALUE}};',
                                '{{WRAPPER}} .single__menu__nav ul.element__ready__menu li a' => 'display: {{VALUE}};',
                            ],
                            'separator' => 'before',
                        ]
                    );
                    $this->add_responsive_control(
                        'menu_position',
                        [
                            'label'   => esc_html__( 'Position', 'element-ready' ),
                            'type'    => Controls_Manager::SELECT,
                            'default' => 'relative',
                            'options' => [
                                'initial'  => esc_html__( 'Initial', 'element-ready' ),
                                'relative' => esc_html__( 'Relative', 'element-ready' ),
                                'static'   => esc_html__( 'Static', 'element-ready' ),
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .single__menu__nav ul.element__ready__menu li a' => 'position: {{VALUE}};',
                            ],
                            'separator' => 'before',
                        ]
                    );
                    $this->add_group_control(
                        Group_Control_Border:: get_type(),
                        [
                            'name'      => 'menu_normal_border',
                            'label'     => esc_html__( 'Border', 'element-ready' ),
                            'selector'  => '{{WRAPPER}} .single__menu__nav ul.element__ready__menu li a',
                            'separator' => 'before',
                        ]
                    );
                    $this->add_responsive_control(
                        'menu_normal_border_radius',
                        [
                            'label'     => esc_html__( 'Border Radius', 'element-ready' ),
                            'type'      => Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}} .single__menu__nav ul.element__ready__menu li a' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                            ],
                        ]
                    );
                    $this->add_group_control(
                        Group_Control_Box_Shadow:: get_type(),
                        [
                            'name'      => 'menu_normal_box_shadow',
                            'label'     => esc_html__( 'Box Shadow', 'element-ready' ),
                            'selector'  => '{{WRAPPER}} .single__menu__nav ul.element__ready__menu li a',
                            'separator' => 'before',
                        ]
                    );
                    $this->add_group_control(
                        Group_Control_Text_Shadow:: get_type(),
                        [
                            'name'     => 'menu_normal_text_shadow',
                            'label'    => esc_html__( 'Text Shadow', 'element-ready' ),
                            'selector' => '{{WRAPPER}} .single__menu__nav ul.element__ready__menu li a',
                        ]
                    );
                    $this->add_responsive_control(
                        'menu_item_width',
                        [
                            'label'      => esc_html__( 'Width', 'element-ready' ),
                            'type'       => Controls_Manager::SLIDER,
                            'size_units' => [ 'px', '%' ],
                            'range'      => [
                                'px' => [
                                    'min'  => 0,
                                    'max'  => 1000,
                                    'step' => 1,
                                ],
                                '%' => [
                                    'min' => 0,
                                    'max' => 100,
                                ],
                            ],
                            'default' => [
                                'unit' => 'px',
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .single__menu__nav ul.element__ready__menu li'   => 'width: {{SIZE}}{{UNIT}};',
                                '{{WRAPPER}} .single__menu__nav ul.element__ready__menu li a' => 'width: {{SIZE}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );
                    $this->add_responsive_control(
                        'menu_item_height',
                        [
                            'label'      => esc_html__( 'Height', 'element-ready' ),
                            'type'       => Controls_Manager::SLIDER,
                            'size_units' => [ 'px', '%' ],
                            'range'      => [
                                'px' => [
                                    'min'  => 0,
                                    'max'  => 1000,
                                    'step' => 1,
                                ],
                                '%' => [
                                    'min' => 0,
                                    'max' => 100,
                                ],
                            ],
                            'default' => [
                                'unit' => 'px',
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .single__menu__nav ul.element__ready__menu li'   => 'height: {{SIZE}}{{UNIT}};',
                                '{{WRAPPER}} .single__menu__nav ul.element__ready__menu li a' => 'height: {{SIZE}}{{UNIT}};',
                            ],
                        ]
                    );
                    $this->add_responsive_control(
                        'menu_normal_margin',
                        [
                            'label'      => esc_html__( 'Margin', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .single__menu__nav ul.element__ready__menu li a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );
                    $this->add_responsive_control(
                        'menu_normal_padding',
                        [
                            'label'      => esc_html__( 'Padding', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .single__menu__nav ul.element__ready__menu li a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );

                $this->end_controls_tab();

                 // Menu Hover Tab
                $this->start_controls_tab(
                    'menu_style_hover_tab',
                    [
                        'label' => esc_html__( 'Hover', 'element-ready' ),
                    ]
                );
                    
                    $this->add_control(
                        'menu_hover_color',
                        [
                            'label'     => esc_html__( 'Color', 'element-ready' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .single__menu__nav ul.element__ready__menu > li:hover > a' => 'color: {{VALUE}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Background:: get_type(),
                        [
                            'name'     => 'menu_hover_background',
                            'label'    => esc_html__( 'Background', 'element-ready' ),
                            'types'    => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .single__menu__nav ul.element__ready__menu > li:hover > a',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Border:: get_type(),
                        [
                            'name'     => 'menu_hover_border',
                            'label'    => esc_html__( 'Border', 'element-ready' ),
                            'selector' => '{{WRAPPER}} .single__menu__nav ul.element__ready__menu > li:hover > a',
                        ]
                    );

                    $this->add_responsive_control(
                        'menu_hover_border_radius',
                        [
                            'label'     => esc_html__( 'Border Radius', 'element-ready' ),
                            'type'      => Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}} .single__menu__nav ul.element__ready__menu > li:hover > a' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                            ],
                            'separator' => 'after',
                        ]
                    );

                $this->end_controls_tab();

                // Menu Active Tab
                $this->start_controls_tab(
                    'menu_style_active_tab',
                    [
                        'label' => esc_html__( 'Active', 'element-ready' ),
                    ]
                );
                    
                    $this->add_control(
                        'menu_active_color',
                        [
                            'label'     => esc_html__( 'Color', 'element-ready' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .single__menu__nav ul.element__ready__menu li.current-menu-item a' => 'color: {{VALUE}};',
                            ],
                            'separator' => 'before',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Background:: get_type(),
                        [
                            'name'     => 'menu_active_background',
                            'label'    => esc_html__( 'Background', 'element-ready' ),
                            'types'    => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .single__menu__nav ul.element__ready__menu li.current-menu-item a',
                        ]
                    );

                    $this->add_group_control(
                        Group_Control_Border:: get_type(),
                        [
                            'name'     => 'menu_active_border',
                            'label'    => esc_html__( 'Border', 'element-ready' ),
                            'selector' => '{{WRAPPER}} .single__menu__nav ul.element__ready__menu li.current-menu-item a',
                        ]
                    );

                    $this->add_responsive_control(
                        'menu_active_border_radius',
                        [
                            'label'     => esc_html__( 'Border Radius', 'element-ready' ),
                            'type'      => Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}} .single__menu__nav ul.element__ready__menu li.current-menu-item a' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                            ],
                            'separator' => 'after',
                        ]
                    );

                $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->end_controls_section();
        /*-------------------------
			MENU ITEM STYLE END
        --------------------------*/

        /*----------------------------
            BADGE STYLE
        -----------------------------*/
        $this->start_controls_section(
            'badge_style_section',
            [
                'label'     => esc_html__( 'Badge', 'ultimate' ),
                'tab'       => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'show_menu_bedge' => 'yes',
                ]
            ]
        );

            $this->start_controls_tabs( 'badge_tabs_style' );
                $this->start_controls_tab(
                    'badge_normal_tab',
                    [
                        'label' => esc_html__( 'Normal', 'ultimate' ),
                    ]
                );
                    $this->add_control(
                        'badge_color',
                        [
                            'label'     => esc_html__( 'Color', 'ultimate' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '',
                            'selectors' => [
                                '{{WRAPPER}} .single__menu__nav ul.element__ready__menu li a .badge' => 'color: {{VALUE}};',
                            ],
                            'separator' => 'before',
                        ]
                    );
                    $this->add_group_control(
                        Group_Control_Background:: get_type(),
                        [
                            'name'     => 'badge_background',
                            'label'    => esc_html__( 'Background', 'ultimate' ),
                            'types'    => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .single__menu__nav ul.element__ready__menu li a .badge',
                        ]
                    );
                    $this->add_group_control(
                        Group_Control_Typography:: get_type(),
                        [
                            'name'     => 'badge_typography',
                            'selector' => '{{WRAPPER}} .single__menu__nav ul.element__ready__menu li a .badge',
                        ]
                    );
                    $this->add_group_control(
                        Group_Control_Border:: get_type(),
                        [
                            'name'      => 'badge_border',
                            'label'     => esc_html__( 'Border', 'ultimate' ),
                            'selector'  => '{{WRAPPER}} .single__menu__nav ul.element__ready__menu li a .badge',
                            'separator' => 'before',
                        ]
                    );
                    $this->add_responsive_control(
                        'badge_radius',
                        [
                            'label'      => esc_html__( 'Border Radius', 'ultimate' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .single__menu__nav ul.element__ready__menu li a .badge' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );
                    $this->add_group_control(
                        Group_Control_Box_Shadow:: get_type(),
                        [
                            'name'     => 'badge_shadow',
                            'selector' => '{{WRAPPER}} .single__menu__nav ul.element__ready__menu li a .badge',
                        ]
                    );
                    $this->add_responsive_control(
                        'badge_width',
                        [
                            'label'      => esc_html__( 'Width', 'ultimate' ),
                            'type'       => Controls_Manager::SLIDER,
                            'size_units' => [ 'px', '%' ],
                            'range'      => [
                                'px' => [
                                    'min'  => 0,
                                    'max'  => 1000,
                                    'step' => 1,
                                ],
                                '%' => [
                                    'min' => 0,
                                    'max' => 100,
                                ],
                            ],
                            'default' => [
                                'unit' => 'px',
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .single__menu__nav ul.element__ready__menu li a .badge' => 'width: {{SIZE}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );
                    $this->add_responsive_control(
                        'badge_height',
                        [
                            'label'      => esc_html__( 'Height', 'ultimate' ),
                            'type'       => Controls_Manager::SLIDER,
                            'size_units' => [ 'px', '%' ],
                            'range'      => [
                                'px' => [
                                    'min'  => 0,
                                    'max'  => 1000,
                                    'step' => 1,
                                ],
                                '%' => [
                                    'min' => 0,
                                ],
                            ],
                            'default' => [
                                'unit' => 'px',
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .single__menu__nav ul.element__ready__menu li a .badge' => 'height: {{SIZE}}{{UNIT}};',
                            ],
                        ]
                    );
                    $this->add_responsive_control(
                        'badge_margin',
                        [
                            'label'      => esc_html__( 'Margin', 'ultimate' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .single__menu__nav ul.element__ready__menu li a .badge' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'separator' => 'before',
                        ]
                    );
                    $this->add_responsive_control(
                        'badge_padding',
                        [
                            'label'      => esc_html__( 'Padding', 'ultimate' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .single__menu__nav ul.element__ready__menu li a .badge' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );
                $this->end_controls_tab();
                $this->start_controls_tab(
                    'badge_hover_tab',
                    [
                        'label' => esc_html__( 'Hover', 'ultimate' ),
                    ]
                );
                    $this->add_control(
                        'hover_badge_color',
                        [
                            'label'     => esc_html__( 'Color', 'ultimate' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .single__menu__nav ul.element__ready__menu li a:hover .badge' => 'color: {{VALUE}};',
                            ],
                            'separator' => 'before',
                        ]
                    );
                    $this->add_group_control(
                        Group_Control_Background:: get_type(),
                        [
                            'name'     => 'hover_badge_background',
                            'label'    => esc_html__( 'Background', 'ultimate' ),
                            'types'    => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .single__menu__nav ul.element__ready__menu li a:hover .badge',
                        ]
                    );
                    $this->add_group_control(
                        Group_Control_Border:: get_type(),
                        [
                            'name'      => 'hover_badge_border',
                            'label'     => esc_html__( 'Border', 'ultimate' ),
                            'selector'  => '{{WRAPPER}} .single__menu__nav ul.element__ready__menu li a:hover .badge',
                            'separator' => 'before',
                        ]
                    );
                    $this->add_responsive_control(
                        'hover_badge_radius',
                        [
                            'label'      => esc_html__( 'Border Radius', 'ultimate' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%', 'em' ],
                            'selectors'  => [
                                '{{WRAPPER}} .single__menu__nav ul.element__ready__menu li a:hover .badge' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );
                    $this->add_group_control(
                        Group_Control_Box_Shadow:: get_type(),
                        [
                            'name'     => 'hover_badge_shadow',
                            'selector' => '{{WRAPPER}} .single__menu__nav ul.element__ready__menu li a:hover .badge',
                        ]
                    );
                $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->end_controls_section();
        /*----------------------------
            BADGE STYLE END
        -----------------------------*/
    }

    protected function render( $instance = [] ) {

        $settings = $this->get_settings_for_display();
        $id       = $this->get_id();
        
        $this->add_render_attribute( 'element_ready_menu_attr', 'class', 'element__ready__menu__area element__ready__menu__style__'.$settings['inline_menu_style'] );
        $menuargs = [
            'echo'        => false,
            'menu'        => isset( $settings['inline_menu_id'] ) ? $settings['inline_menu_id'] : 0,
            'menu_class'  => 'element__ready__menu',
            'menu_id'     => 'menu-'. $id,
            'fallback_cb' => '__return_empty_string',
            'container'   => '',
            'depth'       => 1
        ];
        if( 'yes' == $settings['show_menu_bedge'] ){
            $menuargs['walker'] = new Nav_Walker();
        }

        // General Menu.
        $menu_html = wp_nav_menu( $menuargs );

        ?>
            <div <?php echo $this->get_render_attribute_string('element_ready_menu_attr'); ?> >
                <nav class = "single__menu__nav">
                    <?php
                        if( !empty( $menu_html ) ){
                            echo $menu_html;
                        }
                    ?>
                </nav>
            </div>
        <?php
    }
}