<?php
namespace Element_Ready\Widgets\popup;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;

use Elementor\Group_Control_Border;
use Elementor\Group_Control_Background;
use Elementor\Group_Control_Box_Shadow;
use Element_Ready\Widget_Controls\User_Style;

if ( ! defined( 'ABSPATH' ) ) exit;


class PopUp extends Widget_Base {

    use User_Style;
    public $base;

    public function get_name() {
        return 'element-ready-global-popup';
    }

    public function get_keywords() {
		return ['element ready','popup'];
	}

    public function get_title() {
        return esc_html__( 'ER PopUp', 'element-ready' );
    }

    public function get_icon() { 
        return 'eicon-editor-external-link';
    }

    public function get_categories() {
        return [ 'element-ready-addons' ];
    }

    public function layout(){
        return[
            
            'style1'   => esc_html__( 'style1', 'element-ready' ),
            'style2'   => esc_html__( 'style2', 'element-ready' ),
            
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

            $this->add_control(
                'modal_template_id',
                [
                    'label'     => esc_html__( 'Select Content Template', 'element-ready' ),
                    'type'      => Controls_Manager::SELECT,
                    'default'   => '0',
                    'options'   => element_ready_elementor_template(),
                    'description' => esc_html__( 'Please select elementor templete from here, if not create elementor template from menu', 'element-ready' )
                   
                ]
            );

         
       

        $this->end_controls_section();

        $this->start_controls_section(
            'section_interface_fields',
            [
                'label' => esc_html__('Interface', 'element-ready'),
            ]
        );

            
            $this->add_control(
                'interface_icon',
                [
                    'label' => esc_html__( 'Icon', 'element-ready' ),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    'default' => [
                        'value' => 'fas fa-user',
                        'library' => 'solid',
                    ],
                ]
            );

            $this->add_control(
                'interface_text',
                [
    
                    'label' => esc_html__( 'Text', 'element-ready' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'placeholder' => esc_html__( 'Login', 'element-ready' ),
                    'default' => esc_html__('login','element-ready')
                    
                ]
            );

        $this->end_controls_section();

       

       $this->icon_css(esc_html__('Interface Icon Style','element-ready'));
       $this->interface_text_css(esc_html__('Interface Text Style','element-ready'),'interface_text');
       $this->popup_css(esc_html__('PopUp box','element-ready'),'popup_box_cont','pop_box_element');
  
       
       
    } //Register control end


    protected function render( ) { 

        $settings     = $this->get_settings();
        $widget_id    = 'element-ready-'.$this->get_id().'-';
       
        
       ?>
     
    <?php if($settings['_style'] == 'style1'): ?>

        <?php include('popup/style1.php'); ?>   

    <?php endif; ?>  

    <?php if($settings['_style'] == 'style2'): ?>

        <?php include('popup/style2.php'); ?>   

    <?php endif; ?>

    <?php  

    }
    
    protected function content_template() { }
}