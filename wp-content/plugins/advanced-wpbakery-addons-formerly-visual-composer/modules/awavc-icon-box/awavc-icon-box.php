<?php
vc_map(array(
    "name" 			=>__("Advanced Icon Box", "awavcl"),
    "category" 		=> 'Advanced Elements',
    "description"	=> "Icon box",
    "base" 			=> "awavc_icon_box",
    "class" 		=> "",
    "icon" 			=> "awavc-icon-box",

    "params" 	=> array(

        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Styles", "awavcl"),
            "param_name" => "icon_box",
            "admin_label"        => true,
            "value" => array(
                __("Style 1","awavcl") => 'iconbox1',
                __("Style 2","awavcl") => 'iconbox2',
                __("Style 3","awavcl") => 'iconbox3',
                __("Style 4","awavcl") => 'iconbox4',
                __("Style 5","awavcl") => 'iconbox5',
            ),
           ),
        
        array(
            "type" => "iconpicker",
            "heading" => __("Font Icon", "awavcl"),
            "param_name" => "i_icon",
            "value" => "fa fa-car",
            "group" => "Icon",
            "dependency" => array(
                "element" => "icon_type", "value" => "font_icon_a",
                 ),
        ),
              
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Icon Size', 'awavcl' ),
            'param_name'       => 'i_icon_sz',
            "value" => 18,
            "min" => 5,
            "max" => 99,
            "step" => 1,
            "unit" => "px",
            "description" => __("", "awavcl"),
            "group" => __("Icon", 'awavcl'),
           
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Icon Color", 'awavcl'),
            "param_name" => "i_icon_clr",
            "value" => "",
            "group" => __("Icon", 'awavcl'),
            
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Icon Color On Hover", 'awavcl'),
            "param_name" => "i_icon_hvr",
            "value" => "",
            "group" => __("Icon", 'awavcl'),
            
        ),
           
        array(
            "type" => "textfield",
            "heading" => __("Title", 'awavcl'),
            "param_name" => "i_text",
            "description" => __("", 'awavcl'),
            "value" => __("The quick brown fox jumps over the", 'awavcl'),
            "admin_label"        => true,
            ),
           
        array(
            "type" => "textfield",
            "heading" => __("Description", 'awavcl'),
            "param_name" => "i_desc",
            "description" => __("", 'awavcl'),
            "value" => __("The quick brown fox jumps over the", 'awavcl'),
            "admin_label"        => true,
            ),      
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Title Size', 'awavcl' ),
            'param_name'       => 'i_text_sz',
            "value" => 20,
            "min" => 5,
            "max" => 99,
            "step" => 1,
            "unit" => "px",
            "description" => __("", "awavcl"),
            "group" => __("Settings", 'awavcl'),
           
        ),      
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Description Size', 'awavcl' ),
            'param_name'       => 'i_desc_sz',
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
            'heading'          => __( 'Box Padding', 'awavcl' ),
            'param_name'       => 'i_box_pad',
            "value" => 3,
            "min" => 2,
            "max" => 99,
            "step" => 1,
            "unit" => "px",
            "description" => __("", "awavcl"),
            "group" => __("Settings", 'awavcl'),
           
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Title Color", 'awavcl'),
            "param_name" => "i_text_clr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
            
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Description Color", 'awavcl'),
            "param_name" => "i_desc_clr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Title Color On Hover", 'awavcl'),
            "param_name" => "i_text_hvr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Background Color", 'awavcl'),
            "param_name" => "i_bg",
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

function awavc_icon_box_shortcode($atts, $content = null) {
    extract(shortcode_atts(array(

                //'show_btnnnn' => 'Yes',
                'icon_box' => 'iconbox1',
                'i_text' => 'FREE SHIPPING RETURN',
                'i_desc' => 'Free 7-day returns',
                'i_text_sz' => '',
                'i_desc_sz' => '',
                'i_icon' => 'fa fa-car',
                'i_icon_sz' => '',
                'i_icon_clr' => '',
                'i_icon_hvr' => '',
                'tx_color_hvr' => '',
                'i_text_clr' => '',
                'i_desc_clr' => '',
                'i_text_hvr' => '',
                'i_bg' => '',
                'i_box_pad' => '',
                'el_class' => '',
    ), $atts));        

        
        $html = '';    
                
                
            if($icon_box == 'iconbox1' ){
                $i = (rand(1,33));
                $html .= '
                <style>.icon-box1'.$i.':hover .title'.$i.'{color:'.$i_text_hvr.'!important;}.icon-box1'.$i.':hover .icon-'.$i.'{color:'.$i_icon_hvr.'!important;}</style>
                <div class="icon-box1 '.$el_class.' icon-box1'.$i.'" style="background-color:'.$i_bg.';padding:'.$i_box_pad.'px;">
                    <div class="innerr">
                        <div class="icon"><i class="'.$i_icon.' icon-'.$i.'"  style="transition:all .5s ease .2s;font-size:'.$i_icon_sz.'px;color:'.$i_icon_clr.';" ></i></div>
                        <div class="content">
                            <h6 class="title title'.$i.' " style="transition:all .5s ease .2s;font-size:'.$i_text_sz.'px;color:'.$i_text_clr.'; ">'.$i_text.'</h6>
                            <p style="font-size:'.$i_desc_sz.'px;color:'.$i_desc_clr.'; ">'.$i_desc.'</p>
                        </div>
                    </div>
                </div>';
            }
            
            if($icon_box == 'iconbox2' ){
                $i = (rand(1,33));
                $html .= '
                <style>.icon-box2'.$i.':hover .title'.$i.'{color:'.$i_text_hvr.'!important;}.icon-box2'.$i.':hover .icon-'.$i.'{color:'.$i_icon_hvr.'!important;}</style>
                <div class="icon-box2 '.$el_class.' icon-box2'.$i.'" style="background-color:'.$i_bg.';padding:'.$i_box_pad.'px;">
                    <div class="innerr">
                        <div class="icon"><i class="'.$i_icon.' icon-'.$i.'"  style="transition:all .5s ease .2s;font-size:'.$i_icon_sz.'px;color:'.$i_icon_clr.';" ></i></div>
                        <div class="content">
                            <h6 class="title title'.$i.' " style="transition:all .5s ease .2s;font-size:'.$i_text_sz.'px;color:'.$i_text_clr.'; ">'.$i_text.'</h6>
                            <p style="font-size:'.$i_desc_sz.'px;color:'.$i_desc_clr.'; ">'.$i_desc.'</p>
                        </div>
                    </div>
                </div>';
            }
            if($icon_box == 'iconbox3' ){
                $i = (rand(1,33)); 
                $html .= '
                <style>.icon-box3'.$i.':hover .title'.$i.'{color:'.$i_text_hvr.'!important;}.icon-box3'.$i.':hover .icon-'.$i.'{color:'.$i_icon_hvr.'!important;}</style>
                <div class="icon-box3 col  '.$el_class.' icon-box3'.$i.'" style="background-color:'.$i_bg.';padding:'.$i_box_pad.'px;">
                    <div class="innerr">
                        <div class="icon"><i class="'.$i_icon.' icon-'.$i.'"  style="transition:all .5s ease .2s;font-size:'.$i_icon_sz.'px;color:'.$i_icon_clr.';" ></i></div>
                        <div class="content">
                            <h6 class="title title'.$i.' " style="transition:all .5s ease .2s;font-size:'.$i_text_sz.'px;color:'.$i_text_clr.'; ">'.$i_text.'</h6>
                            <p style="font-size:'.$i_desc_sz.'px;color:'.$i_desc_clr.'; ">'.$i_desc.'</p>
                        </div>
                    </div>
                </div>';
            }
            if($icon_box == 'iconbox4' ){
                $i = (rand(1,33)); 
                $html .= '
                <style>.icon-box4'.$i.':hover .title'.$i.'{color:'.$i_text_hvr.'!important;}.icon-box4'.$i.':hover .icon-'.$i.'{color:'.$i_icon_hvr.'!important;}</style>
                <div class="icon-box5 '.$el_class.' icon-box4 icon-box4'.$i.'" style="background-color:'.$i_bg.';padding:'.$i_box_pad.'px;">
                    <div class="icon"><i class="'.$i_icon.' icon-'.$i.'"  style="transition:all .5s ease .2s;font-size:'.$i_icon_sz.'px;color:'.$i_icon_clr.';" ></i></div>
                    <div class="content">
                        <h4 class="title title'.$i.' " style="transition:all .5s ease .2s;font-size:'.$i_text_sz.'px;color:'.$i_text_clr.'; ">'.$i_text.'</h4>
                        <p style="font-size:'.$i_desc_sz.'px;color:'.$i_desc_clr.'; ">'.$i_desc.'</p>
                    </div>
                </div>';
            }
            if($icon_box == 'iconbox5' ){
                $i = (rand(1,33)); 
                $html .= '
                <style>.icon-box5'.$i.':hover .title'.$i.'{color:'.$i_text_hvr.'!important;}.icon-box5'.$i.':hover .icon-'.$i.'{color:'.$i_icon_hvr.'!important;}</style>
                <div class="icon-box5 '.$el_class.'  icon-box5'.$i.'" style="background-color:'.$i_bg.';padding:'.$i_box_pad.'px;">
                    
                    <div class="content">
                        <h4 class="title title'.$i.' " style="transition:all .5s ease .2s;font-size:'.$i_text_sz.'px;color:'.$i_text_clr.'; ">'.$i_text.'</h4>
                        <p style="font-size:'.$i_desc_sz.'px;color:'.$i_desc_clr.'; ">'.$i_desc.'</p>
                    </div>
                    <div class="icon"><i class="'.$i_icon.' icon-'.$i.'"  style="transition:all .5s ease .2s;font-size:'.$i_icon_sz.'px;color:'.$i_icon_clr.';" ></i></div>
                </div>';
            }
     
           


    
            


    return $html;
}

add_shortcode("awavc_icon_box", "awavc_icon_box_shortcode");