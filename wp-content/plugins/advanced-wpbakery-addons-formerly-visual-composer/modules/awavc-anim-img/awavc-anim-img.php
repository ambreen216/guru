<?php
vc_map(array(
    "name" 			=>__("Advanced Animated Image", "awavcl"),
    "category" 		=> 'Advanced Elements',
    "description"	=> "Image on move",
    "base" 			=> "awavc_anim_img",
    "class" 		=> "",
    "icon" 			=> "awavc-anim-img-icon",

    "params" 	=> array(

        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Styles", "awavcl"),
            "param_name" => "anim_img",
            "admin_label"        => true,
            "value" => array(
                __("Style 1","awavcl") => 'animimg1',
                //__("Style 2","awavcl") => 'typing_two',   
                //__("Style 2","awavcl") => 'typing_three',   
            ),
           ),
        
        array(
            "type" => "attach_image",
            "heading" => __("Animated Image", "awavcl"),
            "param_name" => "img",
            "value" => "",
            "description" => __("select image", "awavcl"),
        ),
        /*   
        array(
            "type" => "textfield",
            "heading" => __("Text Wioutht Effect", 'awavcl'),
            "param_name" => "ty_text",
            "description" => __("", 'awavcl'),
            "value" => __("The quick brown fox jumps over the", 'awavcl'),
            ),
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Choose Header Tag for better SEO", "awavcl"),
            "param_name" => "h_tag",
            "admin_label"        => true,
            "value" => array(
                __("Header 1 <h1>","awavcl") => 'h1',
                __("Header 2 <h2>","awavcl") => 'h2',
                __("Header 3 <h3>","awavcl") => 'h3',
                __("Header 4 <h4>","awavcl") => 'h4',
                __("Header 5 <h5>","awavcl") => 'h5',
                __("Header 6 <h6>","awavcl") => 'h6',
            ),
           ),
              
array(
            'type' => 'param_group',
            'heading' => __( 'Test to have effects', 'awavcl' ),
            'param_name' => 'facilities_lists',
            'params' => array(

                    array(
                        "type" => "textfield",
                        "heading" => __("Test to Have Effects", 'awavcl'),
                        "param_name" => "fc_text",
                        "description" => __("", 'awavcl'),
                        "value" => __("lazy dog", 'awavcl'),
                        
                    ),
                   

            ),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Text Size', 'awavcl' ),
            'param_name'       => 'ty_tx_size',
            "value" => 14,
            "min" => 5,
            "max" => 99,
            "step" => 1,
            "unit" => "px",
            "description" => __("", "awavcl"),
            "group" => __("Settings", 'awavcl'),
           
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Text Color", 'awavcl'),
            "param_name" => "tx_color",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
            
        ),
        
        
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Fancy Text Size', 'awavcl' ),
            'param_name'       => 'fc_size',
            "value" => 14,
            "min" => 5,
            "max" => 99,
            "step" => 1,
            "unit" => "px",
            "description" => __("", "awavcl"),
            "group" => __("Settings", 'awavcl'),
        ),
        array(
            "type" => "textfield",
            "heading" => __("Font Style", 'awavcl'),
            "param_name" => "font_style_class",
            "description" => __("", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Fancy Text Color", 'awavcl'),
            "param_name" => "fc_color",
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
            "type" => "textfield",
            "heading" => esc_attr__("Extra class name", 'awavcl'),
            "param_name" => "el_class",
            "description" => esc_attr__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'awavcl'),
        ),*/

    )

));

function awavc_anim_img_shortcode($atts, $content = null) {
    extract(shortcode_atts(array(

                //'show_btnnnn' => 'Yes',
                'anim_img' => '',
                'img' => 'The quick brown fox jumps over the',
                'h_tag' => 'h2',
                'facilities_lists' => '',
                'ty_tx_size' => '22px',
                'fc_size' => '#ddd',
                'tx_color' => '#2b2b2b',
                'fc_color' => '#2b2b2b',
                'tx_color_hvr' => '#CCE8FF',
                'font_style_class' => '#4773D8',
                'el_class' => '',
    ), $atts));

    wp_register_style( 'awavcl.anim-img.css', plugins_url( '/css/style-anim-img.css',  __FILE__) );
    wp_enqueue_style( 'awavcl.anim-img.css' );
    //wp_register_script('awavcl.anim-img.js', plugins_url('js/', __FILE__), array("jquery"));
    //wp_enqueue_script('awavcl.anim-img.js');
    $image = wp_get_attachment_image_src( $img, 'full' );
        
             
        $html = '';    
                $add_class = (rand(9,9999));
            if($anim_img = 'animimg1' ){
             
                $html .= '
                <div class="product-deal-image text-center">
                    <img src="'.$image[0].'" alt="">
                </div>';
            }
     
           


    
            


    return $html;
}

add_shortcode("awavc_anim_img", "awavc_anim_img_shortcode");