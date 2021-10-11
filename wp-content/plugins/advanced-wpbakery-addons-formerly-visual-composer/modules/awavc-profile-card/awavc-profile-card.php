<?php
vc_map(array(
    "name" 			=> "Advanced Profile Card",
    "category" 		=> 'Advanced Elements',
    "description"	=> "To show profile or team member.Both",
    "base" 			=> "awavc_profile_box",
    "class" 		=> "",
    "icon" 			=> "advc_profile_icon",
     "admin_label"        => true,

    "params" 	=> array(

        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Profile Card Style:", "advc"),
            "param_name" => "advc_pc_style",
            "value" => array(
                __("Box style 1","advc") => 'boxvd1',
                __("Box style 2","advc") => 'boxvd2',
                __("Box style 3","advc") => 'boxvd3',
                __("Box style 4","advc") => 'boxvd4',
                __("Box style 5","advc") => 'boxvd5',
                __("Box style 6","advc") => 'boxvd6',
                __("Box style 7","advc") => 'boxvd7',
                __("Box style 8","advc") => 'boxvd8',
                __("Box style 9","advc") => 'boxvd9',
                __("Box style 10","advc") => 'boxvd10',
            ),
            "admin_label"        => true,
            //"std" => "boxvd2",
        ),
        array(
            "type" => "attach_image",
            "heading" => __("Profile Image", "advc"),
            "param_name" => "image",
            "value" => "",
            "description" => __("", "advc"),
        ),
        array(
            "type" => "attach_image",
            "heading" => __("Background Image", "advc"),
            "param_name" => "images",
            "value" => "",
            "description" => __("", "advc"),
            "dependency" => array(
                "element" => "advc_pc_style","value" => "boxvd1",
                 ),
        ),
        array(
            "type" => "attach_image",
            "heading" => __("Background Image", "advc"),
            "param_name" => "images2",
            "value" => "",
            "description" => __("", "advc"),
            "dependency" => array(
                "element" => "advc_pc_style","value" => "boxvd7",
                 ),
        ),
        array(
            "type" => "textfield",
            "heading" => __("Title", 'advc'),
            "param_name" => "title",
            "description" => __("", 'advc'),
            "value" => __("Title", 'advc'),
        ),
        array(
            "type" => "textarea",
            "heading" => __("Designation", 'advc'),
            "param_name" => "desig",
            "description" => __("", 'advc'),
            "value" => __("Designer", 'advc'),
        ),
        array(
            "type" => "textarea",
            "heading" => __("Description", 'advc'),
            "param_name" => "desc",
            "description" => __("Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.", 'advc'),
            "value" => __("Description", 'advc'),
        ),

        array(
            'type' => 'param_group',
            'heading' => __( 'Social Media Links', 'advc' ),
            'param_name' => 'pc_social_lists',
            "group" => __("Social Icon", 'advc'),

            'params' => array(
                array(
                    'type' => 'vc_link',
                    'heading' => __( 'Social Media Link', 'advc' ),
                    'param_name' => 'media_links',
                    'description' => __( '', 'advc' ),
                    'value' => '#',
                ),
                array(
                    'type' => 'iconpicker',
                    'heading' => __( 'social Media Icon', 'advc' ),
                    'param_name' => 'social_icon',
                    'description' => __( '', 'advc' ),
                    'value' => 'fa fa-facebook',
                ),

            ),
        ),
        /* Overview */ /* Overview */ /* Overview */ /* Overview */ /* Overview */ /* Overview */ /* Overview */ /* Overview */ /* Overview */
        array(
            'type' => 'param_group',
            'heading' => __( 'Project Overview-Counter', 'advc' ),
            'param_name' => 'pc_overvie_ones',
             "dependency" => array(
                "element" => "advc_pc_style","value" => "boxvd4",
                 ),

            "group" => __("Overview Sections", 'advc'),

            'params' => array(
                array(
                    'type' => 'textfield',
                    'heading' => __( 'Overview Title', 'advc' ),
                    'param_name' => 'overview_title',
                    'description' => __( '', 'advc' ),
                    'value' => 'PROJECTS',
                    "dependency" => array(
                        "element" => "advc_pc_style","value" => "boxvd4",
                    ),
                ),

                array(
                    'type' => 'textfield',
                    'heading' => __( 'Overview Count Value', 'advc' ),
                    'param_name' => 'overview_count',
                    'description' => __( '', 'advc' ),
                    'value' => '2230',
                    "dependency" => array(
                        "element" => "advc_pc_style","value" => "boxvd4",
                    ),
                ),

            ),
        ),
        array(
            'type' => 'param_group',
            'heading' => __( 'Project Overview-Counter', 'advc' ),
            'param_name' => 'pc_overvie_twos',
             "dependency" => array(
                "element" => "advc_pc_style","value" => "boxvd5",
                 ),

            "group" => __("Overview Sections", 'advc'),

            'params' => array(
                array(
                    'type' => 'textfield',
                    'heading' => __( 'Overview Title', 'advc' ),
                    'param_name' => 'overview_title',
                    'description' => __( '', 'advc' ),
                    'value' => 'FOLLOWERS',
                    "dependency" => array(
                        "element" => "advc_pc_style","value" => "boxvd5",
                    ),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => __( 'Overview Count Value', 'advc' ),
                    'param_name' => 'overview_count',
                    'description' => __( '', 'advc' ),
                    'value' => '223',
                    "dependency" => array(
                        "element" => "advc_pc_style","value" => "boxvd5",
                    ),
                ),

            ),
        ),
        array(
            'type' => 'param_group',
            'heading' => __( 'Project Overview-Counter', 'advc' ),
            'param_name' => 'pc_overvie_threes',
             "dependency" => array(
                "element" => "advc_pc_style","value" => "boxvd6",
                 ),

            "group" => __("Overview Sections", 'advc'),

            'params' => array(
                array(
                    'type' => 'textfield',
                    'heading' => __( 'Overview Title', 'advc' ),
                    'param_name' => 'overview_title',
                    'description' => __( '', 'advc' ),
                    'value' => 'FOLLOWERS',
                    "dependency" => array(
                        "element" => "advc_pc_style","value" => "boxvd6",
                    ),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => __( 'Overview Count Value', 'advc' ),
                    'param_name' => 'overview_count',
                    'description' => __( '', 'advc' ),
                    'value' => '223',
                    "dependency" => array(
                        "element" => "advc_pc_style","value" => "boxvd6",
                    ),
                ),

            ),
        ),

        array(
            'type' => 'param_group',
            'heading' => __( 'Project Overview-Counter', 'advc' ),
            'param_name' => 'pc_overvie_fours',
             "dependency" => array(
                "element" => "advc_pc_style","value" => "boxvd7",
                 ),

            "group" => __("Overview Sections", 'advc'),

            'params' => array(
                array(
                    'type' => 'textfield',
                    'heading' => __( 'Overview Title', 'advc' ),
                    'param_name' => 'overview_title',
                    'description' => __( '', 'advc' ),
                    'value' => 'FOLLOWERS',
                    "dependency" => array(
                        "element" => "advc_pc_style","value" => "boxvd6",
                    ),
                ),
                array(
                    'type' => 'textfield',
                    'heading' => __( 'Overview Count Value', 'advc' ),
                    'param_name' => 'overview_count',
                    'description' => __( '', 'advc' ),
                    'value' => '223',
                    "dependency" => array(
                        "element" => "advc_pc_style","value" => "boxvd6",
                    ),
                ),

            ),
        ),
        array(
            "type" => "textfield",
            "heading" => __('Button Text', 'advc'),
            "param_name" => "btn_txt",
            "description" => __("if you dont want it leave it blank", 'advc'),
            "group" => __("Button", 'advc'),
            "dependency" => array(
                "element" => "advc_pc_style","value" => "boxvd9",
                 ),
        ),
        array(
            "type" => "vc_link",
            "heading" => __('Button URL', 'advc'),
            "param_name" => "btn_url",
            "description" => __("Ex:http://themescup.com/", 'advc'),
            "group" => __("Button", 'advc'),
            "dependency" => array(
                "element" => "advc_pc_style","value" => "boxvd9",
                 ),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Button Text Size', 'advc' ),
            'param_name'       => 'btn_txt_size',
            "value" => 16,
            "min" => 5,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "description" => __("Choose Title Font Size as Pixel. Default is 26px", "advc"),
            "group" => __("Button", 'advc'),
            "dependency" => array(
                "element" => "advc_pc_style","value" => "boxvd9",
                 ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Button Text Color", 'advc'),
            "param_name" => "btn_txt_color",
            "value" => "",
            "group" => __("Button", 'advc'),
            "dependency" => array(
                "element" => "advc_pc_style","value" => "boxvd9",
                 ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Button Background", 'advc'),
            "param_name" => "btn_bg",
            "value" => "",
            "group" => __("Button", 'advc'),
            "dependency" => array(
                "element" => "advc_pc_style","value" => "boxvd9",
                 ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Button Background On Hover", 'advc'),
            "param_name" => "btn_bg_hvr",
            "value" => "",
            "group" => __("Button", 'advc'),
            "dependency" => array(
                "element" => "advc_pc_style","value" => "boxvd9",
                 ),
        ),
        array(
            "type" => "textfield",
            "heading" => __('Portfolio Link', 'advc'),
            "param_name" => "prt_link",
            "description" => __("if you dont want it leave it blank", 'advc'),
        ),
        array(
            "type" => "textfield",
            "heading" => esc_attr__("Extra class name", 'advc'),
            "param_name" => "el_class",
            "description" => esc_attr__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'advc'),
        ),

        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Icon Size', 'advc' ),
            'param_name'       => 'icon_size',
            "value" => 16,
            "min" => 5,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "description" => __("Choose Title Font Size as Pixel. Default is 26px", "advc"),
            "group" => __("Social Icon", 'advc'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Icon Color", 'advc'),
            "param_name" => "icon_color",
            "value" => "red",
            "group" => __("Social Icon", 'advc'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Icon Color On Hover", 'advc'),
            "param_name" => "icon_color_hvr",
            "value" => "red",
            "group" => __("Social Icon", 'advc'),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Background Image Height', 'advc' ),
            'param_name'       => 'bg_hite',
            "value" => 110,
            "min" => 5,
            "max" => 500,
            "step" => 5,
            "unit" => "px",
            "description" => __("It will work In Profile Card Style 1,", "advc"),
            "group" => __("Settings", 'advc'),
             "dependency" => array(
                "element" => "advc_pc_style", "value" => "boxvd1",
                 ) ,
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Profile Image Size', 'advc' ),
            'param_name'       => 'prf_img_size',
            "value" => 100,
            "min" => 5,
            "max" => 500,
            "step" => 5,
            "unit" => "px",
            "description" => __("It will work In Profile Card Style 1,", "advc"),
            "group" => __("Settings", 'advc'),
             "dependency" => array(
                "element" => "advc_pc_style","value" => "boxvd1",
                 ) ,
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Title Font Size', 'advc' ),
            'param_name'       => 'title_f_size',
            "value" => 20,
            "min" => 5,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "description" => __("Choose Title Font Size as Pixel. Default is 26px", "advc"),
            "group" => __("Settings", 'advc'),
        ),
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Title Font style", "advc"),
            "param_name" => "title_f_style",
            "value" => array(
                __("Normal","advc") => "",
                __("Italic","advc") => "italic",
            ),
            "group" => __("Settings", 'advc'),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Designation Font Size', 'advc' ),
            'param_name'       => 'desig_f_size',
            "value" => 14,
            "min" => 5,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "description" => __("Choose Designation Font Size as Pixel. Default is 14px", "advc"),
            "group" => __("Settings", 'advc'),
        ),

        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Designation Font style", "advc"),
            "param_name" => "desig_f_style",
            "value" => array(
                __("Normal","advc") => "",
                __("Italic","advc") => "italic",
            ),
            "group" => __("Settings", 'advc'),
            "description" => __("This Will be Designation Color Also", 'advc'),
            "std" => "italic",
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Description Font Size', 'advc' ),
            'param_name'       => 'desc_f_size',
            "value" => 14,
            "min" => 5,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "description" => __("Choose Description Font Size as Pixel. Default is 14px", "advc"),
            "group" => __("Settings", 'advc'),
        ),
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Description Font style", "advc"),
            "param_name" => "desc_f_style",
            "value" => array(
                __("Normal","advc") => "",
                __("Italic","advc") => "italic",
            ),
            "group" => __("Settings", 'advc'),
            "description" => __("THis Will be Designation Color Also", 'advc'),
        ),
        /* Overview css */        /* Overview css */          /* Overview css */                 /* Overview css */
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Overview Title Size', 'advc' ),
            'param_name'       => 'over_ttl_size',
            "value" => 10,
            "min" => 5,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "description" => __("Choose Description Font Size as Pixel. Default is 14px", "advc"),
            "group" => __("Settings", 'advc'),
            "dependency" => array(
                "element" => "advc_pc_style","value" => "boxvd4",
                 ),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Overview Number Size', 'advc' ),
            'param_name'       => 'over_num_size',
            "value" => 14,
            "min" => 5,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "description" => __("Choose Description Font Size as Pixel. Default is 14px", "advc"),
            "group" => __("Settings", 'advc'),
            "dependency" => array(
                "element" => "advc_pc_style","value" => "boxvd4",
                 ),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Overview Title Size', 'advc' ),
            'param_name'       => 'over_ttl_size1',
            "value" => 10,
            "min" => 5,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "description" => __("Choose Description Font Size as Pixel. Default is 14px", "advc"),
            "group" => __("Settings", 'advc'),
            "dependency" => array(
                "element" => "advc_pc_style","value" => "boxvd5",
                 ),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Overview Number Size', 'advc' ),
            'param_name'       => 'over_num_size1',
            "value" => 14,
            "min" => 5,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "description" => __("Choose Description Font Size as Pixel. Default is 14px", "advc"),
            "group" => __("Settings", 'advc'),
            "dependency" => array(
                "element" => "advc_pc_style","value" => "boxvd5",
                 ),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Overview Title Size', 'advc' ),
            'param_name'       => 'over_ttl_size2',
            "value" => 10,
            "min" => 5,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "description" => __("Choose Description Font Size as Pixel. Default is 14px", "advc"),
            "group" => __("Settings", 'advc'),
            "dependency" => array(
                "element" => "advc_pc_style","value" => "boxvd6",
                 ),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Overview Number Size', 'advc' ),
            'param_name'       => 'over_num_size2',
            "value" => 14,
            "min" => 5,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "description" => __("Choose Description Font Size as Pixel. Default is 14px", "advc"),
            "group" => __("Settings", 'advc'),
            "dependency" => array(
                "element" => "advc_pc_style","value" => "boxvd6",
                 ),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Overview Title Size', 'advc' ),
            'param_name'       => 'over_ttl_size3',
            "value" => 10,
            "min" => 5,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "description" => __("Choose Description Font Size as Pixel. Default is 14px", "advc"),
            "group" => __("Settings", 'advc'),
            "dependency" => array(
                "element" => "advc_pc_style","value" => "boxvd7",
                 ),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Overview Number Size', 'advc' ),
            'param_name'       => 'over_num_size3',
            "value" => 14,
            "min" => 5,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "description" => __("Choose Description Font Size as Pixel. Default is 14px", "advc"),
            "group" => __("Settings", 'advc'),
            "dependency" => array(
                "element" => "advc_pc_style","value" => "boxvd7",
                 ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Background Color", 'advc'),
            "param_name" => "bg_color",
            "value" => "red",
            "group" => __("Colors", 'advc'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Background Color On Hover", 'advc'),
            "param_name" => "bg_color_hvr",
            "value" => "red",
            "group" => __("Colors", 'advc'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Title Color", 'advc'),
            "param_name" => "ttl_color",
            "value" => "",
            "group" => __("Colors", 'advc'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Description Color", 'advc'),
            "param_name" => "desc_color",
            "value" => "",
            "group" => __("Colors", 'advc'),
        ),
         array(
            "type" => "colorpicker",
            "heading" => __("Desig Color", 'advc'),
            "param_name" => "desig_color",
            "value" => "",
            "group" => __("Colors", 'advc'),
        ),
         /* Overview css */         /* Overview css */            /* Overview css */
        array(
            "type" => "colorpicker",
            "heading" => __("Overview Title Color", 'advc'),
            "param_name" => "over_ttl_color",
            "value" => "",
            "group" => __("Colors", 'advc'),
            "dependency" => array(
                "element" => "advc_pc_style","value" => "boxvd4",
                 ),
        ),
         array(
            "type" => "colorpicker",
            "heading" => __("Overview Number Color", 'advc'),
            "param_name" => "over_num_color",
            "value" => "",
            "group" => __("Colors", 'advc'),
            "dependency" => array(
                "element" => "advc_pc_style","value" => "boxvd4",
                 ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Overview Title Color 1", 'advc'),
            "param_name" => "over_ttl_color1",
            "value" => "",
            "group" => __("Colors", 'advc'),
            "dependency" => array(
                "element" => "advc_pc_style","value" => "boxvd5",
                 ),
        ),
         array(
            "type" => "colorpicker",
            "heading" => __("Overview Number Color 1", 'advc'),
            "param_name" => "over_num_color1",
            "value" => "",
            "group" => __("Colors", 'advc'),
            "dependency" => array(
                "element" => "advc_pc_style","value" => "boxvd5",
                 ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Overview Title Color", 'advc'),
            "param_name" => "over_ttl_color2",
            "value" => "",
            "group" => __("Colors", 'advc'),
            "dependency" => array(
                "element" => "advc_pc_style","value" => "boxvd6",
                 ),
        ),
         array(
            "type" => "colorpicker",
            "heading" => __("Overview Number Color", 'advc'),
            "param_name" => "over_num_color2",
            "value" => "",
            "group" => __("Colors", 'advc'),
            "dependency" => array(
                "element" => "advc_pc_style","value" => "boxvd6",
                 ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Overview Title Color", 'advc'),
            "param_name" => "over_ttl_color3",
            "value" => "",
            "group" => __("Colors", 'advc'),
            "dependency" => array(
                "element" => "advc_pc_style","value" => "boxvd7",
                 ),
        ),
         array(
            "type" => "colorpicker",
            "heading" => __("Overview Number Color", 'advc'),
            "param_name" => "over_num_color3",
            "value" => "",
            "group" => __("Colors", 'advc'),
            "dependency" => array(
                "element" => "advc_pc_style","value" => "boxvd7",
                 ),
        ),

        array(
            "type" => "colorpicker",
            "heading" => __("Text Color on Hover", 'advc'),
            "param_name" => "txt_hvr_color",
            "value" => "",
            "group" => __("Colors", 'advc'),
        ),

    )
    
));

function awavc_profile_box_two_shortcode($atts, $content = null) {
    extract(shortcode_atts(array(

                //'show_btnnnn' => 'Yes',
                'advc_pc_style' => 'boxvd1',
                'image' => '',
                'images' => '',
                'images2' => '',
                'title' => 'Title',
                'desig' => 'AFO',
                'desc' => 'Awesome way to show your features inside wpbakery page builder.',
                'pc_social_lists' => '',
                'el_class' => '',
                'prt_link' => '',
                'icon_size' => '',
                'icon_color' => '',
                'icon_color_hvr' => '',
                'bg_hite' => '',
                'prf_img_size' => '',
                'title_f_size' => '',
                'title_f_style' => '',
                'desig_f_size' => '',
                'desig_f_style' => '',
                'desc_f_size' => '',
                'desc_f_style' => '',
                'bg_color' => '',
                'bg_color_hvr' => '',
                'ttl_color' => '',
                'desc_color' => '',
                'desig_color' => '',
                'brdr_color' => '',
                'txt_hvr_color' => '',
                'pc_overvie_ones' => '',
                'pc_overvie_twos' => '',
                'pc_overvie_threes' => '',
                'pc_overvie_fours' => '',
                'over_ttl_size' => '',
                'over_num_size' => '',
                'over_ttl_size1' => '',
                'over_num_size1' => '',
                'over_ttl_size2' => '',
                'over_num_size2' => '',
                'over_ttl_size3' => '',
                'over_num_size3' => '',
                'over_ttl_color' => '',
                'over_num_color' => '',
                'over_ttl_color1' => '',
                'over_num_color1' => '',
                'over_ttl_color2' => '',
                'over_num_color2' => '',
                'over_ttl_color3' => '',
                'over_num_color3' => '',
                'btn_txt' => '',
                'btn_url' => '',
                'btn_txt_color' => '',
                'btn_txt_size' => '',
                'btn_bg' => '',
                'btn_bg_hvr' => '',

    ), $atts));

    //$image_url = wp_get_attachment_url( $image, 'full' );
    //$image = aq_resize( $image_url, 296, 289, false ); //resize & crop the image
    //var_dump($image);
    $image = wp_get_attachment_image_src( $image, 'full' );
    $images = wp_get_attachment_image_src( $images, 'full' );
    $images2 = wp_get_attachment_image_src( $images2, 'full' );
     if($advc_pc_style == "boxvd9" && !empty($btn_url)){

        $btn_url   = vc_build_link( $btn_url);
        $btn_url_link   =  $btn_url['url'];
        $btn_url_target   =  $btn_url['target'];
    }
    $html = '';
    $list_html = '';
    $overview_html = '';



    $pc_social_lists = vc_param_group_parse_atts($pc_social_lists);

    if($advc_pc_style == "boxvd4" && !empty($pc_overvie_ones)){
        $pc_overvie_ones = vc_param_group_parse_atts($pc_overvie_ones);
        foreach ($pc_overvie_ones as $pc_overvie_one) {
            $overview_title = $pc_overvie_one['overview_title'];
            $overview_count = $pc_overvie_one['overview_count'];

            $overview_html .= '<div class="mg-col-xs-4">
                                    <div class="profile-overview">
                                        <p style="margin-bottom:3px;color:'.$over_ttl_color.';font-size:'.$over_ttl_size.'px;">'.$overview_title.'</p>
                                        <h4 style="margin:3px;color:'.$over_num_color.';font-size:'.$over_num_size.'px;text-decoration:none;">'.$overview_count.'</h4>
                                    </div>
                            </div>';
        }
    }
    if($advc_pc_style == "boxvd5" && !empty($pc_overvie_twos)){

        $pc_overvie_twos = vc_param_group_parse_atts($pc_overvie_twos);
        foreach ($pc_overvie_twos as $pc_overvie_two) {
            $overview_title = $pc_overvie_two['overview_title'];
            $overview_count = $pc_overvie_two['overview_count'];

            $overview_html .= '<div class="mg-col-xs-6">
                                    <div class="profile-overview">
                                        <p style="margin-bottom:3px;color:'.$over_ttl_color1.';font-size:'.$over_ttl_size1.'px;">'.$overview_title.'</p>
                                        <h4 style="margin-bottom:3px;color:'.$over_num_color1.';font-size:'.$over_num_size1.'px;">'.$overview_count.'</h4>
                                    </div>
                            </div>';
        }
    }
    if($advc_pc_style == "boxvd6" && !empty($pc_overvie_threes)){

        $pc_overvie_threes = vc_param_group_parse_atts($pc_overvie_threes);
        foreach ($pc_overvie_threes as $pc_overvie_three) {
            $overview_title = $pc_overvie_three['overview_title'];
            $overview_count = $pc_overvie_three['overview_count'];

            $overview_html .= '<div class="mg-col-xs-4">
                                    <div class="profile-overview">
                                        <h3 style="margin-bottom:3px;color:'.$over_num_color2.';font-size:'.$over_num_size2.'px;">'.$overview_count.'</h3>
                                        <p style="margin-bottom:3px;color:'.$over_ttl_color2.';font-size:'.$over_ttl_size2.'px;">'.$overview_title.'</p>

                                    </div>
                            </div>';
        }
    }

    if($advc_pc_style == "boxvd7" && !empty($pc_overvie_fours)){

        $pc_overvie_fours = vc_param_group_parse_atts($pc_overvie_fours);
        foreach ($pc_overvie_fours as $pc_overvie_four) {
            $overview_title = $pc_overvie_four['overview_title'];
            $overview_count = $pc_overvie_four['overview_count'];

            $overview_html .= '<div class="mg-col-xs-4">
                                    <div class="profile-overview text-center">
                                         <p style="margin:5px;color:'.$over_ttl_color3.';font-size:'.$over_ttl_size3.'px;">'.$overview_title.'</p>
                                        <h3 style="margin:5px;color:'.$over_num_color3.';font-size:'.$over_num_size3.'px;">'.$overview_count.'</h3>


                                    </div>
                            </div>';
        }
    }


     


    if($advc_pc_style == "boxvd1"||$advc_pc_style == "boxvd2"||$advc_pc_style == "boxvd3"||$advc_pc_style == "boxvd4"||$advc_pc_style == "boxvd5"||$advc_pc_style == "boxvd6"||$advc_pc_style == "boxvd7"||$advc_pc_style == "boxvd8"||$advc_pc_style == "boxvd9"||$advc_pc_style == "boxvd10"){
    foreach ($pc_social_lists as $pc_social_list) {
            $media_links_url = '';
            $media_links_target = '';
            $social_icon =    $pc_social_list['social_icon'];
            if(!empty( $pc_social_list['media_links'])){
                $media_links   = vc_build_link( $pc_social_list['media_links']);
                $media_links_url =    $media_links['url'];
                $media_links_target =    $media_links['target'];
                }
            $list_html .= '<a href="'.$media_links_url.'" class="sc_icon_color" target="'.$media_links_target.'"><i  style="-webkit-transition: all 0.3s ease-in-out 0s;-moz-transition: all 0.3s ease-in-out 0s; -ms-transition: all 0.3s ease-in-out 0s;-o-transition: all 0.3s ease-in-out 0s; transition: all 0.3s ease-in-out 0s;color:'.$icon_color.';font-size:'.$icon_size.'px;" class="'.$social_icon.'"></i></a>';
        }
    }

    if($advc_pc_style == "boxvd1") {
           $add_class = (rand(99,99999));
        $html .= '
            <style>
                .adpc1_'.$add_class .'.advc_profile-card-1 {background-image: url("'.$images[0].'");background-size:cover;padding-top: 150px;} .adpc1_'.$add_class .'.advc_profile-card-1 .profile-img img{border-color:'.$brdr_color.';-moz-box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.3);-webkit-box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.3);-o-box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.3);box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.3);  } .adpc1_'.$add_class .'.advc_profile-card-1 .profile-name:hover{color:'.$txt_hvr_color.';}.adpc1_'.$add_class .' .sc_icon_color i:hover{color:'.$icon_color_hvr.'!important;}
            </style>
                <div class="adpc1_'.$add_class .' advc_profile-card-1">
                        <div class="profile-content">
                            <div class="profile-img"><img style="height:'.$prf_img_size.'px;width:'.$prf_img_size.'px;" class="img img-responsive" src="'.$image[0].'"></div>
                            <div class="profile-name" style="-webkit-transition: all 0.3s ease-in-out 0s;-moz-transition: all 0.3s ease-in-out 0s; -ms-transition: all 0.3s ease-in-out 0s;-o-transition: all 0.3s ease-in-out 0s; transition: all 0.3s ease-in-out 0s;"><a class="profile-name" href="'.$prt_link.'" target="_blank" style="font-size:'.$title_f_size.'px;font-style:'.$title_f_style.'; color:'.$ttl_color.';">'.$title.'</div>
                            <div class="profile-address" style="font-size:'.$desig_f_size.'px;font-style:'.$desig_f_style.'; color:'.$desig_color.';">'.$desig.'</div>
                            <p class="profile-description" style="font-weight: 400;font-size:'.$desc_f_size.'px;font-style:'.$desc_f_style.'; color:'.$desc_color.';">'.$desc.'</p>
                            <div class="profile-icons">
                            '.$list_html.'
                        </div>
                        </div>
                    </div>
                 ';
    }
    if($advc_pc_style == "boxvd2") {
           $add_class = (rand(99,99999));
        $html .= '
            <style>
                   .adpc2_'.$add_class.' .profile-name:hover{color:'.$txt_hvr_color.'!important;} .adpc2_'.$add_class.' .sc_icon_color i:hover{color:'.$icon_color_hvr.'!important;}
            </style>
                <div class="adpc2_'.$add_class.' advc_profile-card-2"><img class="img img-responsive" src="'.$image[0].'">
                        <div class="profile-name" style="-webkit-transition: all 0.3s ease-in-out 0s;-moz-transition: all 0.3s ease-in-out 0s; -ms-transition: all 0.3s ease-in-out 0s;-o-transition: all 0.3s ease-in-out 0s; transition: all 0.3s ease-in-out 0s;"><a class="profile-name" href="'.$prt_link.'" target="_blank" style="font-size:'.$title_f_size.'px;font-style:'.$title_f_style.'; color:'.$ttl_color.';">'.$title.'</div>
                        <div class="profile-username" style="font-size:'.$desig_f_size.'px;font-style:'.$desig_f_style.'; color:'.$desig_color.';">'.$desig.'</div>
                        <div class="profile-icons">'.$list_html.'</div>

                    </div>
                 ';
    }
    if($advc_pc_style == "boxvd3") {
           $add_class = (rand(99,99999));
        $html .= '
            <style>
                   .adpc3_'.$add_class.' .profile-name:hover{color:'.$txt_hvr_color.'!important;} .adpc3_'.$add_class.' .sc_icon_color i:hover{color:'.$icon_color_hvr.'!important;}
            </style>
                <div class="adpc3_'.$add_class.' advc_profile-card-3 text-center">
                        <div class="profile-name" style="-webkit-transition: all 0.3s ease-in-out 0s;-moz-transition: all 0.3s ease-in-out 0s; -ms-transition: all 0.3s ease-in-out 0s;-o-transition: all 0.3s ease-in-out 0s; transition: all 0.3s ease-in-out 0s;"><a class="profile-name" href="'.$prt_link.'" target="_blank" style="font-size:'.$title_f_size.'px;font-style:'.$title_f_style.'; color:'.$ttl_color.';">'.$title.'</div>
                        <div class="profile-location" style="font-size:'.$desig_f_size.'px;font-style:'.$desig_f_style.'; color:'.$desig_color.';">'.$desig.'</div>
                        <img class="img img-responsive" src="'.$image[0].'">
                        <p class="profile-description" style="font-weight: 400;line-height:1.5;font-size:'.$desc_f_size.'px;font-style:'.$desc_f_style.'; color:'.$desc_color.';">'.$desc.'</p>
                        <div class="profile-icons">'.$list_html.'</div>
                </div>
                 ';
    }
    if($advc_pc_style == "boxvd4") {
           $add_class = (rand(99,99999));
        $html .= '
            <style>
                .adpc4_'.$add_class.'.advc_profile-card-4::before{background-color:'.$bg_color.'!important;}   .advc_profile-card-4 .sc_icon_color{padding:5px;margin:1px;} .adpc4_'.$add_class.' .profile-name a:hover{color:'.$txt_hvr_color.'!important;} .adpc4_'.$add_class.' .sc_icon_color i:hover{color:'.$icon_color_hvr.'!important}
            </style>
                <div class="adpc4_'.$add_class.' advc_profile-card-4 text-center"><img class="img img-responsive" src="'.$image[0].'">
                        <div class="profile-content" style="padding:13px">
                            <div class="profile-name" style="-webkit-transition: all 0.3s ease-in-out 0s;-moz-transition: all 0.3s ease-in-out 0s; -ms-transition: all 0.3s ease-in-out 0s;-o-transition: all 0.3s ease-in-out 0s; transition: all 0.3s ease-in-out 0s;"><a class="profile-name" href="'.$prt_link.'" target="_blank" style="text-decoration: none; color:'.$ttl_color.';font-size:'.$title_f_size.'px;font-style:'.$title_f_style.';">'.$title.'</a>
                                <p style="font-size:'.$desig_f_size.'px;font-style:'.$desig_f_style.'; color:'.$desig_color.';">'.$desig.'</p>
                            </div>
                            <div class="profile-description" style="font-weight: 400;line-height:1.5;font-size:'.$desc_f_size.'px;font-style:'.$desc_f_style.'; color:'.$desc_color.';">'.$desc.'</div>
                            <div class="row">
                                '.$overview_html.'
                            </div>

                            <div class="profile-icons">'.$list_html.'</div>
                        </div>
                    </div>
                 ';
    }
    if($advc_pc_style == "boxvd5") {
           $add_class = (rand(99,99999));
        $html .= '
            <style>
                   .adpc5_'.$add_class.'.advc_profile-card-5::before{background-color:'.$bg_color.'!important;} .advc_profile-card-5 .sc_icon_color{padding:5px;margin:1px;} .adpc5_'.$add_class.' .profile-name a:hover{color:'.$txt_hvr_color.'!important;} .adpc5_'.$add_class.' .sc_icon_color i:hover{color:'.$icon_color_hvr.'!important}
            </style>
                <div class="adpc5_'.$add_class.' advc_profile-card-5 text-center"><img src="'.$image[0].'" class="img img-responsive">
                        <div class="profile-name" style="font-size:'.$title_f_size.'px;font-style:'.$title_f_style.';">'.$title.'</div>
                        <div class="profile-designation" style="font-size:'.$desig_f_size.'px;font-style:'.$desig_f_style.'; color:'.$desig_color.';">'.$desig.'</div>
                        <p class="profile-description" style="font-weight: 400;font-size:'.$desc_f_size.'px;font-style:'.$desc_f_style.'; color:'.$desc_color.';">'.$desc.'</p>
                        <div class="row">
                            '.$overview_html.'
                        </div>
                        <div class="row">
                            <div class="profile-icons">'.$list_html.'</div>
                        </div>

                    </div>
                 ';
    }

    if($advc_pc_style == "boxvd6") {
           $add_class = (rand(99,99999));
        $html .= '
            <style>
                  .adpc6_'.$add_class.'.advc_profile-card-6 .profile-name{width:65%!important;} .adpc6_'.$add_class.'.advc_profile-card-6 .profile-name a{background: rgba(0, 0, 0, 0) linear-gradient(140deg, '.$bg_color.' 50%, rgba(255, 255, 0, 0) 50%) repeat scroll 0 0;width:100%!important;}.advc_profile-card-6 .sc_icon_color{padding:5px;margin:1px;} .adpc6_'.$add_class.' .profile-name a:hover{color:'.$txt_hvr_color.'!important;} .adpc6_'.$add_class.' .sc_icon_color i:hover{color:'.$icon_color_hvr.'!important}
            </style>
                <div class="adpc6_'.$add_class.' advc_profile-card-6"><img src="'.$image[0].'" class="img img-responsive">
                        <div class="profile-name" style="line-height:1.6;" style="-webkit-transition: all 0.3s ease-in-out 0s;-moz-transition: all 0.3s ease-in-out 0s; -ms-transition: all 0.3s ease-in-out 0s;-o-transition: all 0.3s ease-in-out 0s; transition: all 0.3s ease-in-out 0s; "><a class="profile-name" href="'.$prt_link.'" target="_blank" style="color:'.$ttl_color.';font-size:'.$title_f_size.'px;font-style:'.$title_f_style.';">'.$title.'</a> </div>
                        <div class="profile-position" style="font-size:'.$desig_f_size.'px;font-style:'.$desig_f_style.'; color:'.$desig_color.';">'.$desig.'</div>
                        
                        <div class="profile-overview">
                            <div class="profile-overview">
                                <div class="row text-center">
                                    '.$overview_html.'
                                </div>
                                <div class="row text-center">
                                    <div class="profile-icons">'.$list_html.'</div>
                                </div>

                            </div>
                        </div>

                    </div>
                 ';
    }

    if($advc_pc_style == "boxvd7") {
           $add_class = (rand(99,99999));
        $html .= '
            <style>
                   .adpc7_'.$add_class.'.advc_profile-card-7 .profile-name{width:100%!important;}.adpc7_'.$add_class.'.advc_profile-card-7 .profile-name a{background: rgba(0, 0, 0, 0) linear-gradient(140deg, '.$bg_color.' 50%, rgba(255, 255, 0, 0) 50%) repeat scroll 0 0;width:100%!important;}.advc_profile-card-7 .sc_icon_color{padding:5px;margin:1px;} .adpc7_'.$add_class.' .profile-name a:hover{color:'.$txt_hvr_color.'!important;} .adpc7_'.$add_class.' .sc_icon_color i:hover{color:'.$icon_color_hvr.'!important}
            </style>
                <div class="adpc7_'.$add_class.' advc_profile-card-7 "><img src="'.$images2[0].'" class="img img-responsive">
                        <div class="profile-content"><img style="-moz-box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.3);-webkit-box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.3);-o-box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.3);box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.3);  }" src="'.$image[0].'" class="img img-responsive">
                            <div class="profile-name" style="line-height:1.6;" style="-webkit-transition: all 0.3s ease-in-out 0s;-moz-transition: all 0.3s ease-in-out 0s; -ms-transition: all 0.3s ease-in-out 0s;-o-transition: all 0.3s ease-in-out 0s; transition: all 0.3s ease-in-out 0s; "><a class="profile-name" href="'.$prt_link.'" target="_blank" style="color:'.$ttl_color.';font-size:'.$title_f_size.'px;font-style:'.$title_f_style.';">'.$title.'</a> </div>
                            <div class="profile-position" style="font-size:'.$desig_f_size.'px;font-style:'.$desig_f_style.'; color:'.$desig_color.';">'.$desig.'</div>
                            <div class="row">
                                '.$overview_html.'
                            </div>
                            <div class="row">
                                 <div class="profile-icons text-center">'.$list_html.'</div>
                            </div>
                        </div>
                    </div>
                 ';
    }

    if($advc_pc_style == "boxvd8") {
           $add_class = (rand(99,99999));
        $html .= '
            <style>
                   .advc_profile-card-8 .sc_icon_color{padding:5px;margin:1px;} .adpc8_'.$add_class.' .profile-name a:hover{color:'.$txt_hvr_color.'!important;} .adpc8_'.$add_class.' .sc_icon_color i:hover{color:'.$icon_color_hvr.'!important}
            </style>
                <div class="adpc8_'.$add_class.' advc_profile-card-8 text-center"><img src="'.$image[0].'" class="img img-responsive">

                        <div class="profile-name" style="-webkit-transition: all 0.3s ease-in-out 0s;-moz-transition: all 0.3s ease-in-out 0s; -ms-transition: all 0.3s ease-in-out 0s;-o-transition: all 0.3s ease-in-out 0s; transition: all 0.3s ease-in-out 0s; "><a class="profile-name" href="'.$prt_link.'" target="_blank" style="color:'.$ttl_color.';font-size:'.$title_f_size.'px;font-style:'.$title_f_style.';">'.$title.'</a></div>

                        <div class="profile-designation" style="font-size:'.$desig_f_size.'px;font-style:'.$desig_f_style.'; color:'.$desig_color.';">'.$desig.'</div>
                        <div class="profile-icons">'.$list_html.'
                         <p class="profile-description" style="padding:10px;font-weight: 400;font-size:'.$desc_f_size.'px;font-style:'.$desc_f_style.'; color:'.$desc_color.';">'.$desc.'</p>
                        </div>
                    </div>
                 ';
    }

    if($advc_pc_style == "boxvd9") {
           $add_class = (rand(99,99999));
        $html .= '
            <style>
                   .advc_profile-card-9 .sc_icon_color{padding:5px;margin:1px;} .adpc9_'.$add_class.' .profile-name a:hover{color:'.$txt_hvr_color.'!important;} .adpc9_'.$add_class.' .sc_icon_color i:hover{color:'.$icon_color_hvr.'!important} .adpc9_btn_'.$add_class.':hover{background-color:'.$btn_bg_hvr.'!important;}
            </style>
                <div class="adpc9_'.$add_class.' advc_profile-card-9 text-center"><img src="'.$image[0].'" class="img img-responsive">
                            <div class="profile-name" style="-webkit-transition: all 0.3s ease-in-out 0s;-moz-transition: all 0.3s ease-in-out 0s; -ms-transition: all 0.3s ease-in-out 0s;-o-transition: all 0.3s ease-in-out 0s; transition: all 0.3s ease-in-out 0s; "><a class="profile-name" href="'.$prt_link.'" target="_blank" style="color:'.$ttl_color.';font-size:'.$title_f_size.'px;font-style:'.$title_f_style.';">'.$title.'</a></div>

                            <div class="profile-designation" style="font-size:'.$desig_f_size.'px;font-style:'.$desig_f_style.'; color:'.$desig_color.';">'.$desig.'</div>
                            <p class="profile-description" style="background-color:'.$bg_color.';font-weight: 400;font-size:'.$desc_f_size.'px;font-style:'.$desc_f_style.'; color:'.$desc_color.';">'.$desc.'</p>
                        <div class="profile-icons" style="margin:15px 0px;">'.$list_html.'</div>';

                        if($advc_pc_style == "boxvd9" && !empty($btn_txt)) {
                            $html .= '<a class="adpc9_btn adpc9_btn_'.$add_class.'" href="'.$btn_url_link.'" target="'.$btn_url_target.'" style="background-color:'.$btn_bg.';font-weight: 400;font-size:'.$btn_txt_size.'px;color:'.$btn_txt_color.';">'.$btn_txt.'</a>';
                            }
                       $html .= '
                       </div>

                 ';
    }
    if($advc_pc_style == "boxvd10") {
           $add_class = (rand(99,99999));
        $html .= '
            <style>
                   .advc_profile-card-10 .sc_icon_color{padding:5px;margin:1px;} .adpc10_'.$add_class.' .profile-name a:hover{color:'.$txt_hvr_color.'!important;} .adpc10_'.$add_class.' .sc_icon_color i:hover{color:'.$icon_color_hvr.'!important} .adpc10_'.$add_class.'.advc_profile-card-10{ background-color:'.$bg_color.';
            </style>
                <div class="adpc10_'.$add_class.'  advc_profile-card-10 text-center"><img src="'.$image[0].'" class="img img-responsive">
                        <div class="profile-name" style="-webkit-transition: all 0.3s ease-in-out 0s;-moz-transition: all 0.3s ease-in-out 0s; -ms-transition: all 0.3s ease-in-out 0s;-o-transition: all 0.3s ease-in-out 0s; transition: all 0.3s ease-in-out 0s; "><a class="profile-name" href="'.$prt_link.'" target="_blank" style="color:'.$ttl_color.';font-size:'.$title_f_size.'px;font-style:'.$title_f_style.';">'.$title.'</a></div>

                        <div class="profile-location" style="font-size:'.$desig_f_size.'px;font-style:'.$desig_f_style.'; color:'.$desig_color.';">'.$desig.'</div>
                        <p class="profile-description" style="font-weight: 400;font-size:'.$desc_f_size.'px;font-style:'.$desc_f_style.'; color:'.$desc_color.';">'.$desc.'</p>
                        <div class="profile-icons">
                             '.$list_html.'
                        </div>
                    </div>
                 ';
    }


    return $html;
}

add_shortcode("awavc_profile_box", "awavc_profile_box_two_shortcode");