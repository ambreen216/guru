<?php
vc_map(array(
    "name" 			=> __("Advanced Info Box", "awavcl"),
    "category" 		=> 'Advanced Elements',
    "description"	=> "",
    "base" 			=> "awavc_info_box_two",
    "class" 		=> "",
    "icon" 			=> "advc_info_ico_v1",
    "description" => __( "Advance Info Box Styles", "advc"),
    
    "params" 	=> array(

        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Info Box Style", "awavcl"),
            "param_name" => "info_box_type",
            "value" => array(
                __("Advance Info Box 1","awavcl") => "modern_info_round",
                __("Advance Info Box 2","awavcl") => "modern_info_round_square",
                __("Advance Info Box 3","awavcl") => "featured_info",
                __("Advance Info Box 4","awavcl") => "infobox4",
                __("Advance Info Box 5","awavcl") => "infobox5",
            ),
            "admin_label"        => true,
        ),

        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Hover Effects", "awavcl"),
            "param_name" => "info_hover_style",
            "param_name" => "info_hover_style",
            "value" => array(
                __("None","awavcl") => "",
                __("Hover style 1","awavcl") => "box-hover-1",
                __("Hover style 2","awavcl") => "box-hover-2",
                __("Hover style 3","awavcl") => "box-hover-3",
                __("Hover style 4","awavcl") => "box-hover-4",
                __("Hover style 5","awavcl") => "box-hover-5",
                __("Hover style 6","awavcl") => "box-hover-6",
                __("Hover style 7","awavcl") => "box-hover-7",
                __("Hover style 8","awavcl") => "box-hover-8",
                __("Hover style 9","awavcl") => "box-hover-9",
                __("Hover style 10","awavcl") => "box-hover-10",
                __("Hover style 11","awavcl") => "box-hover-11",
                __("Hover style 12","awavcl") => "box-hover-12",
                __("Hover style 13","awavcl") => "box-hover-13",
                __("Hover style 14","awavcl") => "box-hover-14",
                __("Hover style 15","awavcl") => "box-hover-15",
                __("Hover style 16","awavcl") => "box-hover-16",
                __("Hover style 17","awavcl") => "box-hover-17",
                __("Hover style 18","awavcl") => "box-hover-18",
                __("Hover style 19","awavcl") => "box-hover-19",
                __("Hover style 20","awavcl") => "box-hover-20",
                __("Hover style 21","awavcl") => "box-hover-21",
            ),
        "dependency" => array(
                "element" => "info_box_type","value" => "featured_info",
                 ),
            "admin_label"        => true,
        ),

        array(
            "type" => "textfield",
            "heading" => __("Title", 'awavcl'),
            "param_name" => "title",
            "description" => __("", 'awavcl'),
            "value" => __("Title", 'awavcl'),
        ),
        array(
            "type" => "textarea",
            "heading" => __("Description", 'awavcl'),
            "param_name" => "desc",
            "description" => __("", 'awavcl'),
            "value" => __("Description", 'awavcl'),
        ),
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Choose Icon Type", "awavcl"),
            "param_name" => "icon_type",
            "group" => "Icon",
            "value" => array(
                __("Font","awavcl") => "font_icon_a",
                __("Image Icon","awavcl") => "image_icon",
            ),

        ),
        array(
            "type" => "attach_image",
            "heading" => __("Image Icon", "awavcl"),
            "param_name" => "image_icon_s",
            "group" => "Icon",
            "value" => "",
            "description" => __("Choose your image icon::60*60 and Note: Image icon works on 1,2,3", "awavcl"),
            "dependency" => array(
                "element" => "icon_type", "value" => "image_icon",
                 ),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Border Radius', 'asvc' ),
            'param_name'       => 'brdr_dadius',
            "value" => 50,
            "min" => 0,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "description" => __("Make your image circle or semi-circle", "asvc"),
            "group" => __("Icon", 'awavcl'),
            "dependency" => array(
                "element" => "icon_type", "value" => "image_icon",
                 ),
        ),

        array(
            "type" => "iconpicker",
            "heading" => __("Font Icon", "awavcl"),
            "param_name" => "font_icon",
            "value" => "fa fa-handshake-o",
            "group" => "Icon",
            "dependency" => array(
                "element" => "icon_type", "value" => "font_icon_a",
                 ),
        ),
        array(
            "type" => "textfield",
            "heading" => esc_attr__("Extra class name", 'awavcl'),
            "param_name" => "el_class",
            "description" => esc_attr__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'awavcl'),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Title Font Size', 'asvc' ),
            'param_name'       => 'title_f_size',
            "value" => 22,
            "min" => 5,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "description" => __("Choose Title Font Size as Pixel. Default is 26px", "asvc"),
            "group" => __("Settings", 'awavcl'),
        ),
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Title Font style", "awavcl"),
            "param_name" => "title_f_style",
            "value" => array(
                __("Normal","awavcl") => "",
                __("Italic","awavcl") => "italic",
            ),
            "group" => __("Settings", 'awavcl'),
        ),

        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Description Font Size', 'asvc' ),
            'param_name'       => 'desc_f_size',
            "value" => 12,
            "min" => 5,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "description" => __("Choose Description Font Size as Pixel. Default is 14px", "asvc"),
            "group" => __("Settings", 'awavcl'),
        ),

        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Description Font style", "awavcl"),
            "param_name" => "desc_f_style",
            "value" => array(
                __("Normal","awavcl") => "",
                __("Italic","awavcl") => "italic",
            ),
            "group" => __("Settings", 'awavcl'),
        ),
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Icon and Text Position In The Box", "awavcl"),
            "param_name" => "text_center",
            "value" => array(
                __("Left","awavcl") => "",
                __("Center","awavcl") => "text-center",
                __("Right","awavcl") => "text-right",
            ),
            "group" => __("Settings", 'awavcl'),
        ),

        array(
            "type" => "colorpicker",
            "heading" => __("Background Color", 'awavcl'),
            "param_name" => "bg_color",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
            "description" => __("On style 4. No need to select it", "asvc"),

        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Icon Size', 'asvc' ),
            'param_name'       => 'icon_size',
            "value" => 50,
            "min" => 5,
            "max" => 300,
            "step" => 1,
            "unit" => "px",
            "description" => __("", "asvc"),
            "group" => __("Icon", 'awavcl'),
            "dependency" => array(
                "element" => "icon_type", "value" => "font_icon_a",
                 ),
        ),

        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Icon Height', 'asvc' ),
            'param_name'       => 'img_icon_hite',
            "value" => 100,
            "min" => 30,
            "max" => 300,
            "step" => 1,
            "unit" => "px",
            "description" => __("", "asvc"),
            "group" => __("Icon", 'awavcl'),
            "dependency" => array(
                "element" => "icon_type", "value" => "image_icon",
                 ),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Icon Width', 'asvc' ),
            'param_name'       => 'img_icon_wid',
            "value" => 100,
            "min" => 30,
            "max" => 300,
            "step" => 1,
            "unit" => "px",
            "description" => __("", "asvc"),
            "group" => __("Icon", 'awavcl'),
            "dependency" => array(
                "element" => "icon_type", "value" => "image_icon",
                 ),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Box Height and Width', 'asvc' ),
            'param_name'       => 'i_box_size',
            "value" => 138,
            "min" => 100,
            "max" => 300,
            "step" => 1,
            "unit" => "px",
            "description" => __("Choose Description Font Size as Pixel. Default is 14px", "asvc"),
            "group" => __("Icon", 'awavcl'),
            "dependency" => array(
                "element" => "info_box_type", "value" => "modern_info_round_square",
                 ),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Box Padding', 'asvc' ),
            'param_name'       => 'i_box_pad',
            "value" => 7,
            "min" => 2,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "description" => __("Choose Description Font Size as Pixel. Default is 14px", "asvc"),
            "group" => __("Icon", 'awavcl'),
            "dependency" => array(
                "element" => "info_box_type", "value" => "modern_info_round_square",
                 ),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Box Height and Width', 'asvc' ),
            'param_name'       => 'i_box_size1',
            "value" => 138,
            "min" => 100,
            "max" => 300,
            "step" => 1,
            "unit" => "px",
            "description" => __("Choose Description Font Size as Pixel. Default is 14px", "asvc"),
            "group" => __("Icon", 'awavcl'),
            "dependency" => array(
                "element" => "info_box_type", "value" => "modern_info_round",
                 ),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Box Padding', 'asvc' ),
            'param_name'       => 'i_box_pad1',
            "value" => 7,
            "min" => 2,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "description" => __("Choose Description Font Size as Pixel. Default is 14px", "asvc"),
            "group" => __("Icon", 'awavcl'),
            "dependency" => array(
                "element" => "info_box_type", "value" => "modern_info_round",
                 ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Icon Color", 'awavcl'),
            "param_name" => "icon_color",
            "value" => "",
            "group" => __("Icon", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Icon Color on Hover", 'awavcl'),
            "param_name" => "icon_color_hvr",
            "value" => "",
            "group" => __("Icon", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Icon Background Color", 'awavcl'),
            "param_name" => "icon_bg_color",
            "value" => "",
            "group" => __("Icon", 'awavcl'),
            "description" => __("On stle 4 icon hover color will replace the backround color", "asvc"),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Title Color", 'awavcl'),
            "param_name" => "ttl_color",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Description Color", 'awavcl'),
            "param_name" => "desc_color",
            "value" => "",
            "group" => __("Colors", 'awavcl'),

        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Hover Text Color", 'awavcl'),
            "param_name" => "af_hvr_color",
            "value" => "",
            "group" => __("Colors", 'awavcl'),

        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Hover Effect Color Border/Overlay", 'awavcl'),
            "param_name" => "af_hvr_clr_border",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
            "dependency" => array(
                "element" => "info_box_type", "value" => "featured_info",
                 ),
           ),


    )
    
));

function awavc_info_box_two_shortcode($atts, $content = null) {
    extract(shortcode_atts(array(

        'info_box_type' => 'modern_info_round',
        'info_hover_style' => '',
        'image' => '',
        'title' => 'Title',
        'desc' => 'Awesome way to show your features inside wpbakery page builder.',
        'title_f_size' => '',
        'title_f_style' => '',
        'desc_f_size' => '',
        'desc_f_style' =>'',
        'bg_color' =>'#ddd',
        'icon_size' =>'',
        'icon_color' =>'',
        'icon_color_hvr' =>'',
        'icon_bg_color' =>'',
        'ttl_color' =>'',
        'desc_color' =>'',
        'af_hvr_color' =>'',
        'el_class' =>'',
        'icon_type' =>'',
        'image_icon_s' =>'',
        'font_icon' =>'fa fa-tree',
        'brdr_dadius' =>'',
        'img_icon_hite' =>'',
        'img_icon_wid' =>'',
        'i_box_size' =>'',
        'i_box_size1' =>'',
        'i_box_pad' =>'',
        'i_box_pad1' =>'',
        'af_hvr_clr_border' =>'',
        'text_center' =>'',

    ), $atts));
    
    
    wp_register_style( 'blog-styles', plugins_url( '/css/bootstrap.min.css',  __FILE__) );
    wp_enqueue_style( 'blog-styles' );
    //$image_url = wp_get_attachment_url( $image, 'full' );
    //$image = aq_resize( $image_url, 296, 289, false ); //resize & crop the image
    //var_dump($image);
    $image = wp_get_attachment_image_src( $image_icon_s, 'full' );
    $html = '';

    if($info_box_type == 'featured_info') {
        $unq_advc = (rand(99,9999));
        $html .= '
        <style>
        .advc_info_f'.$unq_advc.'.advc_info_3.box-hover-1::before, .advc_info_f'.$unq_advc.'.advc_info_3.box-hover-2::before, .advc_info_f'.$unq_advc.'.advc_info_3.box-hover-3::before, .advc_info_f'.$unq_advc.'.advc_info_3.box-hover-4::before, .advc_info_f'.$unq_advc.'.advc_info_3.box-hover-5::before, .advc_info_f'.$unq_advc.'.advc_info_3.box-hover-6::before, .advc_info_f'.$unq_advc.'.advc_info_3.box-hover-7::before, .advc_info_f'.$unq_advc.'.advc_info_3.box-hover-8::before,.advc_info_f'.$unq_advc.'.advc_info_3.box-hover-9::before,.advc_info_f'.$unq_advc.'.advc_info_3.box-hover-10::before,.advc_info_f'.$unq_advc.'.advc_info_3.box-hover-11::before,.advc_info_f'.$unq_advc.'.advc_info_3.box-hover-12::before,.advc_info_f'.$unq_advc.'.advc_info_3.box-hover-13::before,.advc_info_f'.$unq_advc.'.advc_info_3.box-hover-14::before,.advc_info_f'.$unq_advc.'.advc_info_3.box-hover-15::before,.advc_info_f'.$unq_advc.'.advc_info_3.box-hover-16::before,.advc_info_f'.$unq_advc.'.advc_info_3.box-hover-17::before {background-color: '.$af_hvr_clr_border.';}
    .advc_info_f'.$unq_advc.'.advc_info_3.box-hover-18::before,.advc_info_f'.$unq_advc.'.advc_info_3.box-hover-20::before {border-top-width: 15px;border-top-style: solid;border-top-color: '.$af_hvr_clr_border.';}
    .advc_info_f'.$unq_advc.'.advc_info_3.box-hover-19::before,.advc_info_f'.$unq_advc.'.advc_info_3.box-hover-20::after {border-bottom-width: 15px;border-bottom-style: solid;border-bottom-color: '.$af_hvr_clr_border.';border-right-width: 15px;border-right-style: solid;border-right-color: '.$af_hvr_clr_border.';}
    .advc_info_f'.$unq_advc.'.advc_info_3.box-hover-21::before {border-top-width: 15px;border-top-style: solid;border-top-color: '.$af_hvr_clr_border.';border-right-width: 15px;border-right-style: solid;border-right-color: '.$af_hvr_clr_border.';}
    .advc_info_f'.$unq_advc.'.advc_info_3.box-hover-21::after { border-left-width: 15px;border-left-style: solid;border-left-color: '.$af_hvr_clr_border.';border-bottom-width: 15px;border-bottom-style: solid;border-bottom-color: '.$af_hvr_clr_border.';}
    .advc_info_f'.$unq_advc.'.advc_info_3.box-hover-18::before,.advc_info_f'.$unq_advc.'.advc_info_3.box-hover-20::before {border-top-width: 15px;border-top-style: solid;border-top-color: '.$af_hvr_clr_border.';border-left-width: 15px;border-left-style: solid;border-left-color: '.$af_hvr_clr_border.';}
    .advc_info_f'.$unq_advc.':hover .box-title_advc{color:'.$af_hvr_color.'!important;}
    
        </style>

        <div class="advc_info_3 text-icon-box bg-white advc_info_f'.$unq_advc.' relative mb50 padding20 '.$info_hover_style.' wow fadeInUp '.$el_class.' '.$text_center.'" data-wow-delay="0.1s" style="background-color:'.$bg_color.';">
                            <div class="box-img-icon" style=" ">';
                    if($icon_type != 'image_icon'){
                    $html .= ' <i class="'.$font_icon.'" style="color:'.$icon_color.';background-color:'.$icon_bg_color.';font-size:'.$icon_size.'px;" ></i>';
                    }
                    if($icon_type == 'image_icon'){
                    $html .= '<img style="height:'.$img_icon_hite.'px; width:'.$img_icon_wid.'px; border-radius:'.$brdr_dadius.'px;" src="'.$image[0].'" alt="">';
                    }
                    $html .= '</div>
                            <h3 class="box-title_advc" style="font-size:'.$title_f_size.'px; font-style:'.$title_f_style.'; color:'.$ttl_color.';">'.$title.' </h3>
                            <p class="box-desc"  style="font-size:'.$desc_f_size.'px; font-style:'.$desc_f_style.'; color:'.$desc_color.'">'.$desc.' </p>
                        </div>


                        ';

    }



    if($info_box_type == 'modern_info_round') {
            $unq_advc_class = (rand(99,9999));
            $unq_advc_i = (rand(99,9999));

        $html .= '
        <style>.ads1_'.$unq_advc_class.':hover.ads1_'.$unq_advc_class.' h4{color:'.$af_hvr_color.'!important;}.ads1_'.$unq_advc_class.' .iconbox.active{border-color:'.$icon_color.';}.ads1_'.$unq_advc_class.'.advc_serv_v2.feature-box01 .iconbox{padding:'.$i_box_pad1.'px;height:'.$i_box_size1.'px; width:'.$i_box_size1.'px;}.ads1_'.$unq_advc_class.'.advc_serv_v2.feature-box01 :hover.iconbox.active{border-color:'.$icon_color_hvr.'!important;}.ads1_'.$unq_advc_class.' :hover .ads1_'.$unq_advc_i.' {color:'.$icon_color_hvr.'!important;}.ads1_'.$unq_advc_class.'.advc_serv_v2.feature-box01 .iconbox.active{border-color: '.$bg_color.'!important;}
</style>
                <div class="advc_serv_v2 feature-box01 text-center ads1_'.$unq_advc_class.'">
                    <div class="iconbox active box-shadow-2"><span class="icon-adjustments text-center text-primary">';
                    if($icon_type != 'image_icon'){
                    $html .= ' <i class="ads1_'.$unq_advc_i.' '.$font_icon.'" style="color:'.$icon_color.';font-size:'.$icon_size.'px;" ></i>';
                    }
                    if($icon_type == 'image_icon'){
                    $html .= '<img class="ads1_'.$unq_advc_i.'" style="height:'.$img_icon_hite.'px; width:'.$img_icon_wid.'px; border-radius:'.$brdr_dadius.'px;" src="'.$image[0].'" alt="">';
                    }

                    $html .= '</span></div>
                    <h4 class="font-weight_06 tpadding-02" style="transition: all 0.5s ease 0s;font-size:'.$title_f_size.'px; font-style:'.$title_f_style.'; color:'.$ttl_color.';margin-top:20px;">'.$title.'</h4>
                    <p style="font-size:'.$desc_f_size.'px; font-style:'.$desc_f_style.'; color:'.$desc_color.'">'.$desc.'</p>
                </div>
                 ';

    }

    if($info_box_type == 'modern_info_round_square') {
            $unq_advc_class = (rand(99,9999));
            $unq_advc_i = (rand(99,9999));
        $html .= '
             <style>.ads2_'.$unq_advc_class.':hover.ads2_'.$unq_advc_class.' h4{color:'.$af_hvr_color.'!important;}.ads2_'.$unq_advc_class.'{border-color:'.$icon_color.';}.ads2_'.$unq_advc_class.'.advc_serv_v2.feature-box01 .iconbox{padding:'.$i_box_pad.'px;height:'.$i_box_size.'px; width:'.$i_box_size.'px;}.ads2_'.$unq_advc_class.'.advc_serv_v2.feature-box01 :hover.iconbox{border-color:'.$icon_color_hvr.';}.ads2_'.$unq_advc_class.' :hover .ads2_'.$unq_advc_i.' {color:'.$icon_color_hvr.'!important}
            </style>

                <div class="advc_serv_v2 feature-box01 text-center ads2_'.$unq_advc_class.'">
                    <div class="iconbox box-shadow-2"><span class="icon-compass text-center text-primary">';
                        if($icon_type != 'image_icon'){
                    $html .= '<i id="advc_ivh" class="ads2_'.$unq_advc_i.' '.$font_icon.' feature-box01-icon" style="color:'.$icon_color.';font-size:'.$icon_size.'px;" ></i>';
                        }
                        if($icon_type == 'image_icon'){
                    $html .= '<img class="ads1_'.$unq_advc_i.'" style="height:'.$img_icon_hite.'px; width:'.$img_icon_wid.'px; border-radius:'.$brdr_dadius.'px;" src="'.$image[0].'" alt="">';
                        }

                    $html .= '</span></div>
                    <h4 class="font-weight_06 tpadding-02" style="transition: all 0.5s ease 0s;font-size:'.$title_f_size.'px; font-style:'.$title_f_style.'; color:'.$ttl_color.';margin-top:20px;">'.$title.'</h4>
                    <p style="font-size:'.$desc_f_size.'px; font-style:'.$desc_f_style.'; color:'.$desc_color.'">'.$desc.'</p>
                </div>
                 ';

    }
    
    
    if($info_box_type == 'infobox4') {
            $unq_advc_class = (rand(99,9999));
            $unq_advc_i = (rand(99,9999));
        $html .= '
             <style>.advc4-'.$unq_advc_class.' .advc-4-icon-wrap .advc-4-icon i,.advc4-'.$unq_advc_class.' .advc-4-icon-wrap .advc-4-icon i::before{color: '.$icon_color.';

background:'.$icon_color_hvr.';box-sizing: border-box;border-color:'.$icon_color.';}.advc-4-icon-wrap .advc-4-icon i:hover, .advc-4-icon-wrap .advc-4-icon i:hover::before{color:'.$icon_color_hvr.'!important;background: '.$icon_color.';border-color: '.$icon_color_hvr.';}</style>

                <div class="advc4-'.$unq_advc_class.' advc-4-module-content advc-4-infobox advc-4-infobox-center infobox-has-icon infobox-icon-above-title ">
    <div class="advc-4-infobox-left-right-wrap">
    <div class="advc-4-infobox-content">
            <div class="advc-4-module-content advc-4-imgicon-wrap"><span class="advc-4-icon-wrap">
            <span class="advc-4-icon">
                <i id="advc_ivh" class="ads2_'.$unq_advc_i.' '.$font_icon.' feature-box01-icon" style="font-size:'.$icon_size.'px;" ></i>
            </span>
        </span>
    
        </div><div class="advc-4-infobox-title-wrap"><h4 class="advc-4-infobox-title"  style="transition: all 0.5s ease 0s;font-size:'.$title_f_size.'px; font-style:'.$title_f_style.'; color:'.$ttl_color.';margin-top:20px;">'.$title.'</h4></div>			<div class="advc-4-infobox-text-wrap">
                <div class="advc-4-infobox-text advc-4-text-editor"><p  style="font-size:'.$desc_f_size.'px; font-style:'.$desc_f_style.'; color:'.$desc_color.'">'.$desc.'</p>
</div>			</div> 
                    </div>	</div>
</div>
             
                 ';

    }



    return $html;
}

add_shortcode("awavc_info_box_two", "awavc_info_box_two_shortcode");