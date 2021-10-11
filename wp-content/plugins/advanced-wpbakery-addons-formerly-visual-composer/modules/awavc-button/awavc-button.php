<?php
vc_map(array(
    "name" 			=>__("Advanced Button", "awavcl"),
    "category" 		=> 'Advanced Elements',
    "description"	=> "Animated Buttons",
    "base" 			=> "awavc_button",
    "class" 		=> "",
    "icon" 			=> "awavc-btn-icon",

    "params" 	=> array(

        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Styles", "awavcl"),
            "param_name" => "btns_design",
            "admin_label"        => true,
            "value" => array(
                __("Style 1 -Basic","awavcl") => 'adv-basic',
                __("Style 2 -Basic","awavcl") => 'adv-basic-a',
                __("Style 3 -Basic","awavcl") => 'adv-basic-b',
                __("Style 4 -Basic","awavcl") => 'adv-basic-c',
                __("Style 5 -Basic","awavcl") => 'adv-basic-d',      
                __("Style 6 -Basic","awavcl") => 'adv-basic-e',      
                __("Style 7 -Animation","awavcl") => 'adv-animate-a',      
                __("Style 8 -Animation","awavcl") => 'adv-animate-b',      
                __("Style 9 -Animation","awavcl") => 'adv-animate-c',      
                __("Style 10 -Animation","awavcl") => 'adv-animate-d',      
                __("Style 11 -Animation","awavcl") => 'adv-animate-e',      
                __("Style 12 -Modern","awavcl") => 'adv-modern-a',      
                __("Style 13 -Modern","awavcl") => 'adv-modern-d',      
                __("Style 14 -3D","awavcl") => 'adv-3d-a adv-large adv-pill',      
                __("Style 15 -3D","awavcl") => 'adv-3d-b adv-large adv-round',      
                __("Style 16 -3D","awavcl") => 'adv-3d-c adv-large adv-round',      
                __("Style 17 -3D","awavcl") => 'adv-3d-d adv-large adv-round',      
            ),
            'std'         => 'adv-basic',

           ),
           array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Styles", "awavcl"),
            "param_name" => "btns_round",
            "value" => array(
                __("Round","awavcl") => 'adv-round',
                __("Square","awavcl") => '',  
            ),
            'std'         => 'adv-basic',
            "dependency"    => array( 'element' => "btns_design", 'value' => array('adv-basic','adv-basic-a','adv-basic-c','adv-basic-d','adv-basic-e','adv-animate-a','adv-animate-b','adv-animate-c','adv-animate-d','adv-animate-e',)),
           ),
        array(
                "type" => "dropdown",
                "holder" => "",
                "class" => "",
                "heading" => __("Position",'awavcl'),
                "param_name" => "advb_col",
                "value" => array(
                        __("Left","awavcl") => 'left',
                        __("Right","awavcl") => 'right',
                        __("Center","awavcl") => 'center',
                    ),
                "description" => __("Select How many post in one row.",'awavcl'),
                "group" => __("Settings", 'awavcl'),
            ),
        array(
            "type" => "vc_link",
            "heading" => __("Button Text and Link", 'awavcl'),
            "param_name" => "btn_links",
            "description" => __("", 'awavcl'),
            "value" => __("Title", 'awavcl'),
        ),

        array(
            "type" => "iconpicker",
            "heading" => __("Font Icon", "awavcl"),
            "param_name" => "font_icon",
            "value" => "fa fa-handshake-o",
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Text Size', 'awavcl' ),
            'param_name'       => 'btn_tx_size',
            "value" => 14,
            "min" => 5,
            "max" => 99,
            "step" => 1,
            "unit" => "px",
            "description" => __("", "awavcl"),
            "group" => __("Settings", 'awavcl'),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Padding Top and Bottom', 'awavcl' ),
            'param_name'       => 'btn_pad_tb',
            "value" => 20,
            "min" => 2,
            "max" => 99,
            "step" => 1,
            "unit" => "px",
            "description" => __("", "awavcl"),
            "group" => __("Settings", 'awavcl'),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Padding Left and Right', 'awavcl' ),
            'param_name'       => 'btn_pad_lr',
            "value" => 15,
            "min" => 2,
            "max" => 99,
            "step" => 1,
            "unit" => "px",
            "description" => __("", "awavcl"),
            "group" => __("Settings", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Background", 'awavcl'),
            "param_name" => "bg_color",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Text Color", 'awavcl'),
            "param_name" => "tx_color",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Background on Hover", 'awavcl'),
            "param_name" => "bg_color_hvr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Text on Hover", 'awavcl'),
            "param_name" => "tx_color_hvr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Border Color", 'awavcl'),
            "param_name" => "bdr_color",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Border on Hover", 'awavcl'),
            "param_name" => "bdr_color_hvr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),
        array(
            "type" => "textfield",
            "heading" => esc_attr__("Extra class name", 'awavcl'),
            "param_name" => "el_class",
            "description" => esc_attr__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'awavcl'),
        ),

    )

));

function awavc_button_shortcode($atts, $content = null) {
    extract(shortcode_atts(array(

                //'show_btnnnn' => 'Yes',
                'btns_design' => '',
                'btns_round' => '',
                'btn_links' => 'Learn More',
                'font_icon' => '',
                'btn_tx_size' => '14px',
                'advb_col' => 'center',
                'bg_color' => '#00bcd4',
                'tx_color' => '#2b2b2b',
                'bg_color_hvr' => '#eeeeee',
                'tx_color_hvr' => '#CCE8FF',
                'bdr_color_hvr' => '#4773D8',
                'bdr_color' => '#4773D8',
                'btn_pad_tb' => '12',
                'btn_pad_lr' => '10',
                'el_class' => '',
    ), $atts));

    wp_register_style( 'awavcl.style-btn', plugins_url( '/css/style-btn.css',  __FILE__) );
    wp_enqueue_style( 'awavcl.style-btn' );

        $btn_link   = vc_build_link( $btn_links);
        $btn_url   = $btn_link['url'];
        $btn_target   = $btn_link['target'];
        $btn_title   = $btn_link['title'];

            
                $add_class = (rand(9,9999));
            
                $html = '
                        <style>.advb-'.$add_class.'.adv-modern-a::before, .advb-'.$add_class.'.adv-modern-a::after{background:'.$bg_color.'}.advb-'.$add_class.':hover{color:'.$tx_color_hvr.'!important;background-color:'.$bg_color_hvr.'!important;border-color:'.$bdr_color_hvr.'!important;}.advb-'.$add_class.'.adv-basic-d::before, .advb-'.$add_class.'.adv-basic-d::after{background-color:'.$bg_color_hvr.'!important;}.advb-'.$add_class.'.adv-basic-e::before, .advb-'.$add_class.'.adv-basic-e::after{background-color:'.$bg_color_hvr.'!important;}.advb-'.$add_class.'.adv-animate-a::before{background-color:'.$bg_color_hvr.'!important;}.advb-'.$add_class.'.adv-animate-b::before{background-color:'.$bg_color_hvr.'!important;}
                           </style>
                ';

                $html .= '<div class="'.$el_class.' text-'.$advb_col.'" >
                            <a href="'.$btn_url.'" target="'.$btn_target.'" class="advb-'.$add_class.' '.$btns_design.' '.$btns_round.'" style="font-size:'.$btn_tx_size.'px;color:'.$tx_color.';background-color:'.$bg_color.';border-color:'.$bdr_color.'; padding:'.$btn_pad_tb.'px '.$btn_pad_lr.'px!important;">'.$btn_title.' <i class="'.$font_icon.'"></i></a>
                          </div>
                                ';

         

            
           


    
            


    return $html;
}

add_shortcode("awavc_button", "awavc_button_shortcode");