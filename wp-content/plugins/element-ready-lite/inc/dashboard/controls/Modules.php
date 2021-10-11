<?php

$return_arr = [

   
    'header_footer_builder' => [
        'demo_link' => ELEMENT_READY_DEMO_URL.'headers-elemantor-widget',
        'lavel'     => esc_html__('Header Footer builder','element-ready'),
        'default'   => 0,
        'is_pro'    => 0,
    ],

    'template_importer' => [
        'demo_link' => '',
        'lavel'     => esc_html__('Template Importer','element-ready'),
        'default'   => 0,
        'is_pro'    => 0,
    ],

    'section_perticles' => [
        'demo_link' => ELEMENT_READY_DEMO_URL.'headers-elemantor-widget#er-ready-particles',
        'lavel'     => esc_html__('Perticles Background', 'element-ready'),
        'default'   => 0,
        'is_pro'    => 1,
    ],

    'media_unsplash' => [
        'demo_link' => ELEMENT_READY_DEMO_URL,
        'lavel'     => esc_html__('Unsplash','element-ready'),
        'default'   => 0,
        'is_pro'    => 0,
    ],

    'sticky_section' => [
        'demo_link' => '',
        'lavel'     => esc_html__('Sticky Section', 'element-ready'),
        'default'   => 0,
        'is_pro'    => 1,
    ], 

    'advance_section' => [
        'demo_link' => '',
        'lavel'     => esc_html__('Column Advance', 'element-ready'),
        'default'   => 0,
        'is_pro'    => 1,
    ],

    'columns_order_width' => [
        'demo_link' => '',
        'lavel'     => esc_html__('Columns Order Width', 'element-ready'),
        'default'   => 0,
        'is_pro'    => 1,
    ],

    'columns_content_alignmnet' => [
        'demo_link' => '',
        'lavel'     => esc_html__('Columns Content Alignment', 'element-ready'),
        'default'   => 0,
        'is_pro'    => 0,
    ],

    'widget_advanced' => [
        'demo_link' => '',
        'lavel'     => esc_html__('Widget advanced', 'element-ready'),
        'default'   => 0,
        'is_pro'    => 1,
    ],
   
    'widget_tooltip' => [
        'demo_link' => '',
        'lavel'     => esc_html__('Widget Tooltip', 'element-ready'),
        'default'   => 0,
        'is_pro'    => 1,
    ],

    'widget_overlay' => [
        'demo_link' => '',
        'lavel'     => esc_html__('Widget Overlay', 'element-ready'),
        'default'   => 0,
        'is_pro'    => 0,
    ],
    'widget_order' => [
        'demo_link' => '',
        'lavel'     => esc_html__('Widget Order', 'element-ready'),
        'default'   => 0,
        'is_pro'    => 1,
    ],

    'floating_effect' => [
        'demo_link' => '',
        'lavel'     => esc_html__('Floating Effect', 'element-ready'),
        'default'   => 0,
        'is_pro'    => 1,
    ],

    'edd' => [
        'demo_link' => ELEMENT_READY_DEMO_URL.'edd-product-slider-elementor-widget',
        'lavel'     => esc_html__('EDD', 'element-ready'),
        'default'   => 0,
        'is_pro'    => 1,
    ],
    
    'give' => [
        'demo_link' => ELEMENT_READY_DEMO_URL.'give-campains-elemantor-widget',
        'lavel'     => esc_html__('Give WP', 'element-ready'),
        'default'   => 0,
        'is_pro'    => 1,
    ],

    'learnpress' => [
        'demo_link' => ELEMENT_READY_DEMO_URL.'learnpress-course-elemantor-widget',
        'lavel'     => esc_html__('Learnpress LMS', 'element-ready'),
        'default'   => 0,
        'is_pro'    => 1,
    ],

    'timeline' => [
        'demo_link' => '',
        'lavel'     => esc_html__('Timeline', 'element-ready'),
        'default'   => 0,
        'is_pro'    => 1,
    ],

    'weather' => [
        'demo_link' => ELEMENT_READY_DEMO_URL.'weather-elemantor-widget',
        'lavel'     => esc_html__('Open Weather', 'element-ready'),
        'default'   => 0,
        'is_pro'    => 1,
    ],

    'woocommerce' => [
        'demo_link' => ELEMENT_READY_DEMO_URL.'woocommerce-tabs-elemantor-widget',
        'lavel'     => esc_html__('WooCommerce', 'element-ready'),
        'default'   => 0,
        'is_pro'    => 1,
    ],

    'wpdefault' => [
        'demo_link' => '',
        'lavel'     => esc_html__('WordPress Default', 'element-ready'),
        'default'   => 0,
        'is_pro'    => 0,
    ],
    'pro_protected_content' => [
        'demo_link' => '',
        'lavel'     => esc_html__('Protected Content', 'element-ready'),
        'default'   => 0,
        'is_pro'    => 1,
    ],
    'pro_conditional_content' => [
        'demo_link' => '',
        'lavel'     => esc_html__('Conditional Content', 'element-ready'),
        'default'   => 0,
        'is_pro'    => 1,
    ],
    'live_copy' => [
        'demo_link' => '',
        'lavel'     => esc_html__('Live Copy', 'element-ready'),
        'default'   => 0,
        'is_pro'    => 1,
    ],
    'custom_icons' => [
        'demo_link' => '',
        'lavel'     => esc_html__('Custom Icons', 'element-ready'),
        'default'   => 1,
        'is_pro'    => 0,
    ],
    'image_masking' => [
        'demo_link' => ELEMENT_READY_DEMO_URL.'image-masking-elemantor-widget',
        'lavel'     => esc_html__('Image Masking', 'element-ready'),
        'default'   => 1,
        'is_pro'    => 1,
    ],
    
];
 
$return_arr = apply_filters('element_ready/dashboard/modules' , $return_arr );
$return_arr = (element_ready_sort_widget_display($return_arr));
