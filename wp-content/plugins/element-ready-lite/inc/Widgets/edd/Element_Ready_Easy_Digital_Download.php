<?php
namespace Element_Ready\Widgets\edd;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Css_Filter;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use Elementor\Modules\DynamicTags\Module as TagsModule;
use Elementor\Utils;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( !class_exists('Easy_Digital_Downloads') ) {
    return;
}

class Element_Ready_Easy_Digital_Download extends Widget_Base {

    public function get_name() {
        return 'Element_Ready_Easy_Digital_Download';
    }
    
    public function get_title() {
        return esc_html__( 'ER Edd Product Grid', 'element-ready' );
    }

    public function get_icon() {
        return 'eicon-file-download';
    }

    public function get_categories() {
        return [ 'element-ready-addons' ];
    }

    public function get_keywords() {
        return [ 'EDD', 'Product', 'Easy Digital Download' ];
    }

    protected function _register_controls() {
        $this->start_controls_section(
            'easydigitaldownload_content',
            [
                'label' => esc_html__( 'Easy Digital Downloads', 'element-ready' ),
            ]
        );
            $this->add_control(
                'columns',
                [
                    'label'   => esc_html__( 'Columns', 'element-ready' ),
                    'type'    => Controls_Manager::SELECT,
                    'options' => [
                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                        '5' => '5',
                        '6' => '6',
                    ],
                    'default' => '4',
                ]
            );
            $this->add_control(
                'number',
                [
                    'label'   => esc_html__( 'Number of Item', 'element-ready' ),
                    'type'    => Controls_Manager::NUMBER,
                    'default' => '4',
                ]
            );
            $this->add_control(
                'easydigitaldownload_thumbnail_show',
                [
                    'label'        => esc_html__( 'Show Thumbnail', 'element-ready' ),
                    'type'         => Controls_Manager::SWITCHER,
                    'return_value' => 'yes',
                    'default'      => 'yes',
                ]
            );

            $this->add_responsive_control(
                'easydigitaldownload_thumbnail_width',
                [
                    'label' => esc_html__( 'Width', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'condition'   => [
                        'easydigitaldownload_thumbnail_show' => ['yes'],
                    ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 1000,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        '{{WRAPPER}} .edd_download_image a img' => 'width: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_responsive_control(
                'easydigitaldownload_thumbnail_height',
                [
                    'label' => esc_html__( 'Width', 'element-ready' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'condition'   => [
                        'easydigitaldownload_thumbnail_show' => ['yes'],
                    ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 800,
                            'step' => 5,
                        ],
                        '%' => [
                            'min' => 0,
                            'max' => 100,
                        ],
                    ],
                   
                    'selectors' => [
                        '{{WRAPPER}} .edd_download_image a img' => 'height: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_control(
                'easydigitaldownload_excerpt_show',
                [
                    'label'        => esc_html__( 'Show Content', 'element-ready' ),
                    'type'         => Controls_Manager::SWITCHER,
                    'return_value' => 'yes',
                    'default'      => 'yes',
                ]
            );
            $this->add_control(
                'easydigitaldownload_price_show',
                [
                    'label'        => esc_html__( 'Show Price', 'element-ready' ),
                    'type'         => Controls_Manager::SWITCHER,
                    'return_value' => 'yes',
                    'default'      => 'yes',
                ]
            );
            $this->add_control(
                'easydigitaldownload_buy_button',
                [
                    'label'        => esc_html__( 'Show Buy Button', 'element-ready' ),
                    'type'         => Controls_Manager::SWITCHER,
                    'return_value' => 'yes',
                    'default'      => 'yes',
                ]
            );
            $this->add_control(
                'easydigitaldownload_pagination_show',
                [
                    'label'        => esc_html__( 'Show Pagination', 'element-ready' ),
                    'type'         => Controls_Manager::SWITCHER,
                    'return_value' => 'yes',
                    'default'      => 'yes',
                ]
            );
        $this->end_controls_section();

        // Content Options
        $this->start_controls_section(
            'section_options',
            [
                'label' => esc_html__( 'Options', 'element-ready' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
            $this->add_control(
                'source',
                [
                    'label'   => _x( 'Source', 'Posts Query Control', 'element-ready' ),
                    'type'    => Controls_Manager::SELECT,
                    'options' => [
                        ''          => esc_html__( 'Show All', 'element-ready' ),
                        'by_id'     => esc_html__( 'Manual Selection', 'element-ready' ),
                        'by_parent' => esc_html__( 'By Parent', 'element-ready' ),
                    ],
                ]
            );

            $categories = get_terms( 'download_category' );
            $options    = array();
            
            if(class_exists( 'Easy_Digital_Downloads' )){
                foreach ( $categories as $category ) {
                    $options[ $category->term_id ] = $category->name;
                }
            }
            

            $this->add_control(
                'categories',
                [
                    'label'       => esc_html__( 'Categories', 'element-ready' ),
                    'type'        => Controls_Manager::SELECT2,
                    'options'     => $options,
                    'default'     => [],
                    'label_block' => true,
                    'multiple'    => true,
                    'condition'   => [
                        'source' => 'by_id',
                    ],
                ]
            );
            $parent_options = array( '0' => esc_html__( 'Only Top Level', 'element-ready' ) ) + $options;
            $this->add_control(
                'parent',
                [
                    'label'     => esc_html__( 'Parent', 'element-ready' ),
                    'type'      => Controls_Manager::SELECT,
                    'default'   => '0',
                    'options'   => $parent_options,
                    'condition' => [
                        'source' => 'by_parent',
                    ],
                ]
            );
            $this->add_control(
                'hide_empty',
                [
                    'label'        => esc_html__( 'Hide Empty', 'element-ready' ),
                    'type'         => Controls_Manager::SWITCHER,
                    'return_value' => 'yes',
                ]
            );
            $this->add_control(
                'orderby',
                [
                    'label'   => esc_html__( 'Order by', 'element-ready' ),
                    'type'    => Controls_Manager::SELECT,
                    'default' => 'name',
                    'options' => [
                        'name'        => esc_html__( 'Name', 'element-ready' ),
                        'slug'        => esc_html__( 'Slug', 'element-ready' ),
                        'description' => esc_html__( 'Description', 'element-ready' ),
                        'count'       => esc_html__( 'Count', 'element-ready' ),
                    ],
                ]
            );
            $this->add_control(
                'order',
                [
                    'label'   => esc_html__( 'Order', 'element-ready' ),
                    'type'    => Controls_Manager::SELECT,
                    'default' => 'desc',
                    'options' => [
                        'asc'  => esc_html__( 'ASC', 'element-ready' ),
                        'desc' => esc_html__( 'DESC', 'element-ready' ),
                    ],
                ]
            );
        $this->end_controls_section();

        // Single Item section
        $this->start_controls_section(
            'single_item_style_section',
            [
                'label' => esc_html__( 'Single Item', 'element-ready' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->add_control(
                'single_item_gap',
                [
                    'label'   => esc_html__( 'Item Gap', 'element-ready' ),
                    'type'    => Controls_Manager::SLIDER,
                    'default' => [
                        'size' => 15,
                    ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 200,
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .edd_downloads_list'                                   => 'margin: -{{SIZE}}px -{{SIZE}}px 0',
                        '(desktop){{WRAPPER}} .edd_downloads_list .edd_download'            => 'width: calc( 100% / {{columns.SIZE}} ); border: {{SIZE}}px solid transparent',
                        '(tablet){{WRAPPER}} .edd_downloads_list .edd_download'             => 'width: calc( 100% / 2 ); border: {{SIZE}}px solid transparent',
                        '(mobile){{WRAPPER}} .edd_downloads_list .edd_download'             => 'width: calc( 100% / 1 ); border: {{SIZE}}px solid transparent',
                        '{{WRAPPER}} .edd_downloads_list .edd_download .edd_download_inner' => 'margin: 0;',
                    ],
                    'frontend_available' => true,
                ]
            );
            $this->add_group_control(
                Group_Control_Background:: get_type(),
                [
                    'name'     => 'single_item_background',
                    'label'    => esc_html__( 'Item Background', 'element-ready' ),
                    'types'    => [ 'classic', 'gradient' ],
                    'selector' => '{{WRAPPER}} .edd_downloads_list .edd_download .edd_download_inner',
                ]
            );
            $this->add_responsive_control(
                'single_item_padding',
                [
                    'label'      => esc_html__( 'Padding', 'element-ready' ),
                    'type'       => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors'  => [
                        '{{WRAPPER}} .edd_downloads_list .edd_download .edd_download_inner' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'separator' => 'before',
                ]
            );
            $this->add_group_control(
                Group_Control_Border:: get_type(),
                [
                    'name'      => 'single_item_border',
                    'label'     => esc_html__( 'Border', 'element-ready' ),
                    'selector'  => '{{WRAPPER}} .edd_downloads_list .edd_download .edd_download_inner',
                    'separator' => 'before',
                ]
            );
            $this->add_responsive_control(
                'single_item_border_radius',
                [
                    'label'      => esc_html__( 'Border Radius', 'element-ready' ),
                    'type'       => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%' ],
                    'selectors'  => [
                        '{{WRAPPER}} .edd_downloads_list .edd_download .edd_download_inner' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_group_control(
                Group_Control_Box_Shadow:: get_type(),
                [
                    'name'    => 'single_item_box_shadow',
                    'exclude' => [
                        'box_shadow_position',
                    ],
                    'selector' => '{{WRAPPER}} .edd_downloads_list .edd_download .edd_download_inner',
                ]
            );
            $this->add_control(
                'single_item_alignment',
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
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .edd_downloads_list .edd_download .edd_download_inner' => 'text-align: {{VALUE}}',
                    ],
                ]
            );
        $this->end_controls_section();

        // Item Title section
        $this->start_controls_section(
            'single_item_title_style_section',
            [
                'label' => esc_html__( 'Title', 'element-ready' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->start_controls_tabs('title_style_tabs');
                $this->start_controls_tab(
                    'title_style_normal_tab',
                    [
                        'label' => esc_html__( 'Normal', 'element-ready' ),
                    ]
                );
                    $this->add_control(
                        'title_color',
                        [
                            'label'     => esc_html__( 'Color', 'element-ready' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '',
                            'selectors' => [
                                '{{WRAPPER}} .edd_downloads_list .edd_download .edd_download_inner .edd_download_title a' => 'color: {{VALUE}};',
                            ],
                        ]
                    );
                    $this->add_group_control(
                        Group_Control_Typography:: get_type(),
                        [
                            'name'     => 'title_typography',
                            'label'    => esc_html__( 'Typography', 'element-ready' ),
                            'selector' => '{{WRAPPER}} .edd_downloads_list .edd_download .edd_download_inner .edd_download_title',
                        ]
                    );
                    $this->add_responsive_control(
                        'title_margin',
                        [
                            'label'      => esc_html__( 'Margin', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%' ],
                            'selectors'  => [
                                '{{WRAPPER}} .edd_downloads_list .edd_download .edd_download_inner .edd_download_title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );
                $this->end_controls_tab();
                $this->start_controls_tab(
                    'title_style_hover_tab',
                    [
                        'label' => esc_html__( 'Hover', 'element-ready' ),
                    ]
                );
                    $this->add_control(
                        'title_hover_color',
                        [
                            'label'     => esc_html__( 'Hover Color', 'element-ready' ),
                            'type'      => Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .edd_downloads_list .edd_download .edd_download_inner .edd_download_title a:hover' => 'color: {{VALUE}};',
                            ],
                        ]
                    );
                $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'single_item_description_style_section',
            [
                'label'     => esc_html__( 'Description', 'element-ready' ),
                'tab'       => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'easydigitaldownload_excerpt_show' => 'yes',
                ]
            ]
        );
            $this->add_control(
                'single_item_description_color',
                [
                    'label'     => esc_html__( 'Color', 'element-ready' ),
                    'type'      => Controls_Manager::COLOR,
                    'default'   => '',
                    'selectors' => [
                        '{{WRAPPER}} .edd_downloads_list .edd_download .edd_download_inner .edd_download_excerpt' => 'color: {{VALUE}};',
                    ],
                    'separator' => 'before',
                ]
            );
            $this->add_responsive_control(
                'single_item_description_margin',
                [
                    'label'      => esc_html__( 'Margin', 'element-ready' ),
                    'type'       => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%' ],
                    'selectors'  => [
                        '{{WRAPPER}} .edd_downloads_list .edd_download .edd_download_inner .edd_download_excerpt' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_group_control(
                Group_Control_Typography:: get_type(),
                [
                    'name'     => 'single_item_description_typography',
                    'label'    => esc_html__( 'Typography', 'element-ready' ),
                    'selector' => '{{WRAPPER}} .edd_downloads_list .edd_download .edd_download_inner .edd_download_excerpt',
                ]
            );
        $this->end_controls_section();

        // Price Style section
        $this->start_controls_section(
            'single_item_price_style_section',
            [
                'label'     => esc_html__( 'Price', 'element-ready' ),
                'tab'       => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'easydigitaldownload_price_show' => 'yes',
                ]
            ]
        );
            $this->add_control(
                'single_item_price_color',
                [
                    'label'     => esc_html__( 'Price Color', 'element-ready' ),
                    'type'      => Controls_Manager::COLOR,
                    'default'   => '',
                    'selectors' => [
                        '{{WRAPPER}} .edd_downloads_list .edd_download .edd_download_inner span.edd_price, 
                         {{WRAPPER}} .edd_downloads_list .edd_download .edd_download_inner .edd_price_options span' => 'color: {{VALUE}};',
                    ],
                    'separator' => 'before',
                ]
            );
            $this->add_group_control(
                Group_Control_Typography:: get_type(),
                [
                    'name'     => 'single_item_price_typography',
                    'label'    => esc_html__( 'Typography', 'element-ready' ),
                    'selector' => '{{WRAPPER}} .edd_downloads_list .edd_download .edd_download_inner span.edd_price, 
                     {{WRAPPER}} .edd_downloads_list .edd_download .edd_download_inner .edd_price_options span',
                ]
            );
            $this->add_responsive_control(
                'single_item_price_margin',
                [
                    'label'      => esc_html__( 'Price Margin', 'element-ready' ),
                    'type'       => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%' ],
                    'selectors'  => [
                        '{{WRAPPER}} .edd_downloads_list .edd_download .edd_download_inner span.edd_price, 
                         {{WRAPPER}} .edd_downloads_list .edd_download .edd_download_inner .edd_price_options span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
        $this->end_controls_section();
        $this->start_controls_section(
            'single_item_button_style_section',
            [
                'label'     => esc_html__( 'Button', 'element-ready' ),
                'tab'       => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'easydigitaldownload_buy_button' => 'yes',
                ]
            ]
        );
            $this->start_controls_tabs('single_item_button_style_tabs');
                $this->start_controls_tab(
                    'single_item_button_style_normal_tab',
                    [
                        'label' => esc_html__( 'Normal', 'element-ready' ),
                    ]
                );
                    $this->add_control(
                        'button_text_color',
                        [
                            'label'     => esc_html__( 'Color', 'element-ready' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '',
                            'selectors' => [
                                '{{WRAPPER}} .edd_downloads_list .edd_download .edd_download_inner .edd_purchase_submit_wrapper > .button' => 'color: {{VALUE}};',
                            ],
                        ]
                    );
                    $this->add_group_control(
                        Group_Control_Background:: get_type(),
                        [
                            'name'     => 'button_background',
                            'label'    => esc_html__( 'Background', 'element-ready' ),
                            'types'    => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .edd_downloads_list .edd_download .edd_download_inner .edd_purchase_submit_wrapper > .button',
                        ]
                    );
                    $this->add_group_control(
                        Group_Control_Border:: get_type(),
                        [
                            'name'        => 'button_border',
                            'label'       => esc_html__( 'Border', 'element-ready' ),
                            'placeholder' => '1px',
                            'default'     => '1px',
                            'selector'    => '{{WRAPPER}} .edd_downloads_list .edd_download .edd_download_inner .edd_purchase_submit_wrapper > .button',
                            'separator'   => 'before',
                        ]
                    );
                    $this->add_control(
                        'button_border_radius',
                        [
                            'label'      => esc_html__( 'Border Radius', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%' ],
                            'selectors'  => [
                                '{{WRAPPER}} .edd_downloads_list .edd_download .edd_download_inner .edd_purchase_submit_wrapper > .button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );
                    $this->add_control(
                        'button_padding',
                        [
                            'label'      => esc_html__( 'Padding', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', 'em', '%' ],
                            'selectors'  => [
                                '{{WRAPPER}} .edd_downloads_list .edd_download .edd_download_inner .edd_purchase_submit_wrapper > .button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );
                $this->end_controls_tab();
                $this->start_controls_tab(
                    'single_item_button_style_hover_tab',
                    [
                        'label' => esc_html__( 'Hover', 'element-ready' ),
                    ]
                );
                    $this->add_control(
                        'button_text_hover_color',
                        [
                            'label'     => esc_html__( 'Color', 'element-ready' ),
                            'type'      => Controls_Manager::COLOR,
                            'default'   => '',
                            'selectors' => [
                                '{{WRAPPER}} .edd_downloads_list .edd_download .edd_download_inner .edd_purchase_submit_wrapper > .button:hover' => 'color: {{VALUE}};',
                            ],
                        ]
                    );
                    $this->add_group_control(
                        Group_Control_Background:: get_type(),
                        [
                            'name'     => 'button_hover_background',
                            'label'    => esc_html__( 'Background', 'element-ready' ),
                            'types'    => [ 'classic', 'gradient' ],
                            'selector' => '{{WRAPPER}} .edd_downloads_list .edd_download .edd_download_inner .edd_purchase_submit_wrapper > .button:hover',
                        ]
                    );
                    $this->add_group_control(
                        Group_Control_Border:: get_type(),
                        [
                            'name'        => 'button_hover_border',
                            'label'       => esc_html__( 'Border', 'element-ready' ),
                            'placeholder' => '1px',
                            'default'     => '1px',
                            'selector'    => '{{WRAPPER}} .edd_downloads_list .edd_download .edd_download_inner .edd_purchase_submit_wrapper > .button:hover',
                        ]
                    );
                    $this->add_control(
                        'button_hover_border_radius',
                        [
                            'label'      => esc_html__( 'Border Radius', 'element-ready' ),
                            'type'       => Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px', '%' ],
                            'selectors'  => [
                                '{{WRAPPER}} .edd_downloads_list .edd_download .edd_download_inner .edd_purchase_submit_wrapper > .button:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ]
                    );
                $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->end_controls_section();
    }

    protected function render( $instance = [] ) {

        $settings       = $this->get_settings_for_display();
        $edd_attributes = [
            'number'     => $settings['number'],
            'columns'    => $settings['columns'],
            'hide_empty' => ( 'yes' === $settings['hide_empty'] ) ? 1 : 0,
            'orderby'    => $settings['orderby'],
            'order'      => $settings['order'],
            'thumbnails' => ('yes' === $settings['easydigitaldownload_thumbnail_show']) ? 'true' : 'false',
            'excerpt'    => ('yes' === $settings['easydigitaldownload_excerpt_show']) ? 'yes' : 'no',
            'price'      => ('yes' === $settings['easydigitaldownload_price_show']) ? 'yes' : 'no',
            'buy_button' => ('yes' === $settings['easydigitaldownload_buy_button']) ? 'yes' : 'no',
            'pagination' => ('yes' === $settings['easydigitaldownload_pagination_show']) ? 'true' : 'false',
        ];

        if ( 'by_id' === $settings['source'] ) {
            $edd_attributes['category'] = implode( ',', $settings['categories'] );
        }elseif( 'by_parent' === $settings['source'] ) {
            $edd_attributes['parent'] = $settings['parent'];
        }

        $this->add_render_attribute( 'shortcode', $edd_attributes );
        echo do_shortcode( sprintf( '[edd_downloads %s]', $this->get_render_attribute_string( 'shortcode' ) ) );
    }
}