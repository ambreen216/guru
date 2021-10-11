<?php
vc_map(array(
    "name" 			=>__("Advanced Text Typing Effects", "awavcl"),
    "category" 		=> 'Advanced Elements',
    "description"	=> "Give typing effect to your text",
    "base" 			=> "awavc_anim_text",
    "class" 		=> "",
    "icon" 			=> "awavc-anim-icon",

    "params" 	=> array(

        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Styles", "awavcl"),
            "param_name" => "typing_design",
            "admin_label"        => true,
            "value" => array(
                __("Style 1","awavcl") => 'typing_one',
                //__("Style 2","awavcl") => 'typing_two',   
                //__("Style 2","awavcl") => 'typing_three',   
            ),
           ),
           
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
        ),

    )

));

function awavc_anim_text_shortcode($atts, $content = null) {
    extract(shortcode_atts(array(

                //'show_btnnnn' => 'Yes',
                'typing_design' => '',
                'ty_text' => 'The quick brown fox jumps over the',
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

    wp_register_style( 'awavcl.anim_text.css', plugins_url( '/css/style-anim-text.css',  __FILE__) );
    wp_enqueue_style( 'awavcl.anim_text.css' );
    wp_register_script('awavcl.anim_text.js', plugins_url('js/awavc-anim-text.js', __FILE__), array("jquery"));
    wp_enqueue_script('awavcl.anim_text.js');

        
        $facilities_list = vc_param_group_parse_atts($facilities_lists);
        
        $fc_txt_1 = $facilities_list[0]["fc_text"];
        $fc_txt_2 = $facilities_list[1]["fc_text"];
        $fc_txt_3 = $facilities_list[2]["fc_text"];
        $fc_txt_4 = $facilities_list[3]["fc_text"];
        $fc_txt_5 = $facilities_list[4]["fc_text"];
        $fc_txt_6 = $facilities_list[5]["fc_text"];
        $fc_txt_7 = $facilities_list[6]["fc_text"];
        $fc_txt_8 = $facilities_list[7]["fc_text"];
        $fc_txt_9 = $facilities_list[8]["fc_text"];
        $fc_txt_10 = $facilities_list[9]["fc_text"];
        $fc_txt_11 = $facilities_list[10]["fc_text"];
        $fc_txt_12 = $facilities_list[11]["fc_text"];
        $fc_txt_13 = $facilities_list[12]["fc_text"];
        $fc_txt_14 = $facilities_list[13]["fc_text"];
        $fc_txt_14 = $facilities_list[14]["fc_text"];
        
        $html = '';    
                $add_class = (rand(9,9999));
            if($typing_design = 'typing_one' ){
             
                $html .= '
                
                <style>a.typo'.$add_class.':hover{color:'.$tx_color_hvr.'!important}</style>
                
                <div class"'.$el_class.' adv_typing_'.$add_class.'">
                                <'.$h_tag.' style="font-size:'.$ty_tx_size.'px;color:'.$tx_color.';">'.$ty_text.' <a href=""  style="font-size:'.$fc_size.'px;color:'.$fc_color.';transition: all 1s linear .2s;" class="typewrite typo'.$add_class.'" data-period="222" data-type=\'[ ';  if(!empty($fc_txt_1)){$html .= '" '.$fc_txt_1.' " ';}     if(!empty($fc_txt_2)){$html .= '," '.$fc_txt_2.' " ';}if(!empty($fc_txt_3)){$html .= '," '.$fc_txt_3.' " ';}if(!empty($fc_txt_4)){$html .= '," '.$fc_txt_4.' " ';}if(!empty($fc_txt_5)){$html .= '," '.$fc_txt_5.' " ';}if(!empty($fc_txt_6)){$html .= '," '.$fc_txt_6.' " ';} if(!empty($fc_txt_7)){$html .= '," '.$fc_txt_7.' " ';}if(!empty($fc_txt_8)){$html .= '," '.$fc_txt_8.' " ';}if(!empty($fc_txt_9)){$html .= '," '.$fc_txt_9.' " ';}if(!empty($fc_txt_10)){$html .= '," '.$fc_txt_10.' " ';}if(!empty($fc_txt_11)){$html .= '," '.$fc_txt_11.' " ';}if(!empty($fc_txt_12)){$html .= '," '.$fc_txt_12.' " ';}if(!empty($fc_txt_13)){$html .= '," '.$fc_txt_13.' " ';}if(!empty($fc_txt_14)){$html .= '," '.$fc_txt_14.' " ';}if(!empty($fc_txt_15)){$html .= '," '.$fc_txt_15.' " ';} $html .= '   ]\'>
                    
                    <span class="wrap"></span>
                </a>
            </'.$h_tag.'> </div>';}

            if($typing_design = 'typing' ){
             
                $html .= '<div class"'.$el_class.' adv_typing_'.$add_class.'">
                                <div class="container py-5">
                                    <div class="output" id="output">
                                        <h1 class="cursor"></h1>
                                       
                                    </div>
                                </div>

                                 </div>';}      
           


    
            


    return $html;
}

add_shortcode("awavc_anim_text", "awavc_anim_text_shortcode");