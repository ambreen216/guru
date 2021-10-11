<?php
namespace Element_Ready\Widgets\search;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;

use Elementor\Group_Control_Border;


if ( ! defined( 'ABSPATH' ) ) exit;

class Search extends Widget_Base {


    public $base;
  
    public function get_name() {
        return 'element-ready-popup-search';
    }
    public function get_keywords() {
		return ['element ready','popup search','search','popup'];
	}
    public function get_title() {
        return esc_html__( 'ER PopUp Search', 'element-ready' );
    }

    public function get_icon() { 
        return 'eicon-search';
    }

    public function get_script_depends() {
        return [
           
            'element-ready-core',
        ];
    }

    public function get_style_depends() {
        return [
            '',
        ];
    }

    public function get_categories() {
        return [ 'element-ready-addons' ];
    }
    public function layout(){
        return[
            
            'style1'   => esc_html__( 'style1', 'element-ready' ),
            
        ];
    }

    protected function _register_controls() {

        $this->start_controls_section(
			'menu_layout',
			[
				'label' => esc_html__( 'Layout', 'element-ready' ),
			]
        );


                $this->add_control(
                    '_style',
                    [
                        'label' => esc_html__( 'Style', 'element-ready' ),
                        'type' => \Elementor\Controls_Manager::SELECT,
                        'default' => 'style1',
                        'options' => $this->layout()
                    ]
                );

        $this->end_controls_section();
   
        
        $this->start_controls_section(
			'header_search_section',
			[
                'label' => esc_html__( 'Header Search', 'element-ready' ),
                
			]
        );


        $this->add_control(
            'custom_search_templte',
            [
                'label' => esc_html__( 'Custom template', 'element-ready' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'element-ready' ),
                'label_off' => esc_html__( 'Hide', 'element-ready' ),
                'return_value' => 'yes',
                'default' => '',
            ]
        );

        $this->add_control(
            'popup_search_template_id',
            [
                'label'     => esc_html__( 'Select Content Template', 'element-ready' ),
                'type'      => Controls_Manager::SELECT,
                'default'   => '0',
                'options'   => element_ready_elementor_template(),
                'condition' => [
                    'custom_search_templte' => ['yes']
                ],
                'description' => esc_html__( 'Please select elementor templete from here, if not create elementor template from menu', 'element-ready' )
               
            ]
        );

        $this->add_control(
            'search_display',
            [
                'label'     => esc_html__( 'Device Breakpoint', 'element-ready' ),
                'type'      => Controls_Manager::SELECT,
                'default'   => '',
                'options'   => [
                    '' => esc_html__('No Action','element-ready'),
                    'd-xl-none' => esc_html__('Extra Large','element-ready'),
                    'd-lg-none' => esc_html__('Large','element-ready'),
                    'd-md-none' => esc_html__('Medium','element-ready'),
                    'd-sm-none' => esc_html__('Small','element-ready'),
                    
                ],
                
            ]
        );

        $this->add_control(
            'header_search_text',
            [

                'label'       => esc_html__( 'Text', 'element-ready' ),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'placeholder' => esc_html__( 'Search', 'element-ready' ),
                'default'     => esc_html__('Search','element-ready')
                
            ]
        );

        $this->add_control(
			'header_search_icon',
			[
				'label' => esc_html__( 'Icon', 'element-ready' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				
			]
        );
        
        $this->add_control(
			'header_close_icon',
			[
				'label' => esc_html__( ' Close Icon', 'element-ready' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				
			]
        );
        
        $this->add_control(
            'header_search_logo',
            [
                'label' => esc_html__( 'Choose logo', 'element-ready' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => ELEMENT_READY_ROOT_IMG.'/logo.png',
                ],
                
            ]
        );
    $this->end_controls_section();

    $this->start_controls_section('menu_search_container_section',
    [
        'label' => esc_html__( 'Popup Container', 'element-ready' ),
        'tab'   => Controls_Manager::TAB_STYLE,
    
        ]
    );

    $this->add_control(
        '__search_menu_container_po_bgcolor_', [

            'label'		 => esc_html__( 'Background', 'element-ready' ),
            'type'		 => Controls_Manager::COLOR,
            'selectors'	 => [

                '{{WRAPPER}} .element-ready-search-box' => 'background-color: {{VALUE}};',
    
            ],
        ]
    );

    $this->add_group_control(
        \Elementor\Group_Control_Box_Shadow::get_type(),
        [
            'name' => '__search_menu_container_po_n_box_shadow',
            'label' => esc_html__( 'Box Shadow', 'element-ready' ),
            'selector' => '{{WRAPPER}} .element-ready-search-box',
        ]
    );
    
    $this->end_controls_section();
  
    $this->start_controls_section('menu_search_popup_icons_section',
    [
        'label' => esc_html__( 'Search', 'element-ready' ),
        'tab'   => Controls_Manager::TAB_STYLE,
       
        ]
    );

    $this->add_control(
        'menu_search_popup_icon_popover-toggle',
        [
            'label' => esc_html__( 'Icon option', 'element-ready' ),
            'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
            'label_off' => esc_html__( 'Default', 'element-ready' ),
            'label_on' => esc_html__( 'Custom', 'element-ready' ),
            'return_value' => 'yes',
        ]
    );

    $this->start_popover();

        $this->add_control(
            '__search_menu_icon_color_', [

                'label'		 => esc_html__( 'Color', 'element-ready' ),
                'type'		 => Controls_Manager::COLOR,
                'selectors'	 => [

                    '{{WRAPPER}} .element-ready-search-open i' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .element-ready-search-open span' => 'color: {{VALUE}};',
                
                ],
            ]
        );

        $this->add_control(
            '__search_menu_icon_hovern_color_', [

                'label'		 => esc_html__( 'Hover Color', 'element-ready' ),
                'type'		 => Controls_Manager::COLOR,
                'selectors'	 => [
                    '{{WRAPPER}} .element-ready-search-open:hover i' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .element-ready-search-open:hover span' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            '__search_menu_i_icon_bgcolor_', [

                'label'		 => esc_html__( 'Background', 'element-ready' ),
                'type'		 => Controls_Manager::COLOR,
                'selectors'	 => [

                    '{{WRAPPER}} .element-ready-search-open' => 'background: {{VALUE}};',
        
                ],
            ]
        );

        $this->add_control(
            '__search_menu_i_hover_icon_bgcolor_', [

                'label'		 => esc_html__( 'Hover Background', 'element-ready' ),
                'type'		 => Controls_Manager::COLOR,
                'selectors'	 => [

                    '{{WRAPPER}} .element-ready-search-open:hover' => 'background: {{VALUE}};',

                ],
            ]
        );

        $this->add_responsive_control(
            '__search_menu_icon__border_radius',
            [
                'label'     => esc_html__( 'Border Radius', 'quomodo-market-essential' ),
                'type'      => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .element-ready-search-open' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                
                ],
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => '__search_menu_icon__section_border',
                'label' => esc_html__( 'Border', 'element-ready' ),
                'selector' => '{{WRAPPER}} .element-ready-search-open',
            ]
        );

        

        $this->add_responsive_control(
            '__search_menu_iccon_section_margin',
            [
                'label'      => esc_html__( 'Margin', 'element-ready' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors'  => [
                    '{{WRAPPER}} .element-ready-search-open' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                
                ],
                'separator' => 'before',
            ]
        );

        $this->add_responsive_control(
            '__search_menu_icon_section_padding',
            [
                'label'      => esc_html__( 'Padding', 'element-ready' ),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors'  => [
                    
                    '{{WRAPPER}} .element-ready-search-open i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    
                ],
                'separator' => 'before',
                
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => '__search_menu_contentpo_i_icon_li_typho',
                'label'    => esc_html__( 'Typography', 'element-ready' ),
                'selector' => '{{WRAPPER}} .element-ready-search-open i,{{WRAPPER}} .element-ready-search-open span',
                
                ]
        );
   

    $this->end_popover();

   
 

    $this->add_control(
        '__search_menu_close_icon_bgcolor_', [

            'label'		 => esc_html__( 'Close Color', 'element-ready' ),
            'type'		 => Controls_Manager::COLOR,
            'selectors'	 => [

                '{{WRAPPER}} .element-ready-search-box .element-ready-search-header .element-ready-search-close button span' => 'background: {{VALUE}};',
                '{{WRAPPER}} .element-ready-search-box .element-ready-search-header .element-ready-search-close button' => 'color: {{VALUE}};',
    
            ],
        ]
    );

    $this->add_control(
        '__search_box_menu_iqwert_icon_bgcolor_', [

            'label'		 => esc_html__( 'Search Color', 'element-ready' ),
            'type'		 => Controls_Manager::COLOR,
            'selectors'	 => [

                '{{WRAPPER}} .element-ready-search-box .element-ready-search-form  i' => 'color: {{VALUE}};',
    
            ],
        ]
    );

    $this->add_control(
        '__search_box_menu_iqwert_icon_bgcolor_font_size',
        [
            'label' => esc_html__( 'Icon Font Size', 'element-ready' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => [ 'px','REM','em' ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 150,
                    'step' => 5,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 100,
                ],
            ],
           
            'selectors' => [
                '{{WRAPPER}} .element-ready-search-box .element-ready-search-form  i' => 'font-size: {{SIZE}}{{UNIT}};',
            ],
        ]
    );

    $this->add_control(
        '__search_box_menu_iqwert_input_color_', [

            'label'		 => esc_html__( 'Input Color', 'element-ready' ),
            'type'		 => Controls_Manager::COLOR,
            'selectors'	 => [

                '{{WRAPPER}} .element-ready-search-box .search-body .element-ready-search-form  input' => 'color: {{VALUE}};',
                '{{WRAPPER}} .element-ready-search-box .search-body .element-ready-search-form  input::placeholder' => 'color: {{VALUE}};',
    
            ],
        ]
    );

    $this->add_group_control(
        Group_Control_Typography::get_type(),
        [
            'name'     => '__search_menu_conteo_i_input_typho',
            'label'    => esc_html__( 'Typography', 'element-ready' ),
            'selector' => '{{WRAPPER}} .element-ready-search-box .search-body .element-ready-search-form  input,{{WRAPPER}} .element-ready-search-box .search-body .element-ready-search-form  input::placeholder',
            
            ]
    );

    $this->add_control(
        '__search_box_menu_iqwert_input_bgcolor_', [

            'label'		 => esc_html__( 'Input Background', 'element-ready' ),
            'type'		 => Controls_Manager::COLOR,
            'selectors'	 => [

                '{{WRAPPER}} .element-ready-search-box .search-body .element-ready-search-form  input' => 'background: {{VALUE}};',
    
            ],
        ]
    );

    $this->add_control(
        'menu_search_popup_i_popover_content-toggle',
        [
            'label' => esc_html__( 'Input Advanced', 'element-ready' ),
            'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
            'label_off' => esc_html__( 'Default', 'element-ready' ),
            'label_on' => esc_html__( 'Custom', 'element-ready' ),
            'return_value' => 'yes',
        ]
    );

    $this->start_popover();

        $this->add_responsive_control(
            '__search_box_menu_iqwert_input__border_radius',
            [
                'label'     => esc_html__( 'Border Radius', 'quomodo-market-essential' ),
                'type'      => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .element-ready-search-box .search-body .element-ready-search-form  input' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                ],
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => '__search_box_menu_iqwert_input_section_border',
                'label' => esc_html__( 'Border', 'element-ready' ),
                'selector' => '{{WRAPPER}} .element-ready-search-box .search-body .element-ready-search-form  input',
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'menu_ite__search_box_iqwert_inputbox_shadow',
                'label' => esc_html__( 'Box Shadow', 'element-ready' ),
                'selector' => '{{WRAPPER}} .element-ready-search-box .search-body .element-ready-search-form  input',
            ]
        );

    $this->end_popover();

    $this->end_controls_section();
   
    } //Register control end

  
     
    protected function render( ) { 

        $settings       = $this->get_settings();
        $widget_id    = 'element-ready-'.$this->get_id().'-';
       
    ?>    
         
    <!--====== Header START ======-->

        <?php if($settings['_style'] == 'style1'): ?>

            <?php include('layout/search/style1.php'); ?>   

        <?php endif; ?>

    <!--====== PART ENDS ======-->
    
    <?php  

    }
    
    protected function content_template() { }

}