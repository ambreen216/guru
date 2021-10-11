<?php
vc_map(array(
    "name" 			=> "Advanced Service Box",
    "category" 		=> 'Advanced Elements',
    "description"	=> "Service box with nice styles",
    "base" 			=> "awavc_serv_box_two",
    "class" 		=> "",
    "icon" 			=> "advc_service_ico",
    
    "params" 	=> array(

        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Service Box Style:", "awavcl"),
            "param_name" => "servive_box_style",
            "value" => array(
                __("Box style 1","awavcl") => 'boxvd2',
                __("Box style 2","awavcl") => 'boxvd3',
                __("Box style 3","awavcl") => 'boxvd5',
                __("Box style 4","awavcl") => 'boxvd6',
                __("Box style 5","awavcl") => 'boxvd7',
                __("Box style 6","awavcl") => 'boxvd8',
            ),
            "admin_label"        => true,
            //"std" => "boxvd2",
        ),
        array(
            "type" => "attach_image",
            "heading" => __("Image", "awavcl"),
            "param_name" => "image",
            "value" => "",
            "description" => __("Note:&nbsp;All service box image should be in same size. Ex: 350*280", "awavcl"),
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
            "type" => "textfield",
            "heading" => __("Button Text", 'awavcl'),
            "param_name" => "btn_txt",
            "description" => __("", 'awavcl'),
            "value" => __("Button", 'awavcl'),
            "dependency" => array(
                "element" => "servive_box_style", "value" => "boxvd3",
                 ),
        ),
        array(
            "type" => "textfield",
            "heading" => __("Button Text", 'awavcl'),
            "param_name" => "btn_txt1",
            "description" => __("", 'awavcl'),
            "value" => __("Button", 'awavcl'),
            "dependency" => array(
                "element" => "servive_box_style", "value" => "boxvd6",
                 ),
        ),
        array(
            "type" => "textfield",
            "heading" => __("Button Text", 'awavcl'),
            "param_name" => "btn_txt2",
            "description" => __("", 'awavcl'),
            "value" => __("Button", 'awavcl'),
            "dependency" => array(
                "element" => "servive_box_style", "value" => "boxvd7",
                 ),
        ),
        array(
            'type' => 'param_group',
            'heading' => __( 'List Items Below Content', 'awavcl' ),
            'param_name' => 'services_lists',
            "dependency" => array(
                "element" => "servive_box_style", "value" => "boxvd8",
                 ),

            'params' => array(
                array(
                    'type' => 'textfield',
                    'heading' => __( 'Service List', 'awavcl' ),
                    'param_name' => 'list_content',
                    'description' => __( '', 'awavcl' ),
                    'value' => 'Consultation',
                ),

            ),
        ),
        array(
            "type" => "textfield",
            "class" => "",
            "heading" => __( "Link", "awavcl" ),
            "param_name" => "service_link",
            "value" => '',
            "description" => __( "If you don/'t want to link, Leave it empty", "my-text-domain" )
        ),

        array(
            "type" => "textfield",
            "heading" => esc_attr__("Extra class name", 'awavcl'),
            "param_name" => "el_class",
            "description" => esc_attr__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'awavcl'),
        ),
        array(
            "type" => "iconpicker",
            "heading" => __("Front Icon", "awavcl"),
            "param_name" => "font_icon1",
            "value" => "fa fa-handshake-o",
            "group" => "Icon",
            "dependency" => array(
                "element" => "servive_box_style", "value" => "boxvd5",
                 ),
        ),
        array(
            "type" => "iconpicker",
            "heading" => __("Icon On Hover", "awavcl"),
            "param_name" => "font_icon2",
            "value" => "fa fa-handshake-o",
            "group" => "Icon",
            "dependency" => array(
                "element" => "servive_box_style", "value" => "boxvd5",
                 ),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Icon Size', 'awavcl' ),
            'param_name'       => 'icon_size',
            "value" => 50,
            "min" => 5,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "description" => __("Choose Title Font Size as Pixel. Default is 26px", "awavcl"),
            "group" => __("Icon", 'awavcl'),
            "dependency" => array(
                "element" => "servive_box_style", "value" => "boxvd5",
                 ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Icon Color", 'awavcl'),
            "param_name" => "icon_color",
            "value" => "red",
            "group" => __("Icon", 'awavcl'),
            "dependency" => array(
                "element" => "servive_box_style", "value" => "boxvd5",
                 ),
        ),
        array(
            "type" => "iconpicker",
            "heading" => __("Front Icon", "awavcl"),
            "param_name" => "font_icon3",
            "value" => "fa fa-handshake-o",
            "group" => "Icon",
            "dependency" => array(
                "element" => "servive_box_style", "value" => "boxvd6",
                 ),
        ),
        array(
            "type" => "iconpicker",
            "heading" => __("Icon On Hover", "awavcl"),
            "param_name" => "font_icon4",
            "value" => "fa fa-handshake-o",
            "group" => "Icon",
            "dependency" => array(
                "element" => "servive_box_style", "value" => "boxvd6",
                 ),
        ),

        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Icon Size', 'awavcl' ),
            'param_name'       => 'icon_size1',
            "value" => 50,
            "min" => 5,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "description" => __("Choose Title Font Size as Pixel. Default is 26px", "awavcl"),
            "group" => __("Icon", 'awavcl'),
            "dependency" => array(
                "element" => "servive_box_style", "value" => "boxvd6",
                 ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Icon Color", 'awavcl'),
            "param_name" => "icon_color1",
            "value" => "red",
            "group" => __("Icon", 'awavcl'),
            "dependency" => array(
                "element" => "servive_box_style", "value" => "boxvd6",
                 ),
        ),
        array(
            "type" => "iconpicker",
            "heading" => __("Icon On Hover", "awavcl"),
            "param_name" => "font_icon5",
            "value" => "fa fa-handshake-o",
            "group" => "Icon",
            "dependency" => array(
                "element" => "servive_box_style", "value" => "boxvd7",
                 ),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Icon Size', 'awavcl' ),
            'param_name'       => 'icon_size2',
            "value" => 50,
            "min" => 5,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "description" => __("Choose Title Font Size as Pixel. Default is 26px", "awavcl"),
            "group" => __("Icon", 'awavcl'),
            "dependency" => array(
                "element" => "servive_box_style", "value" => "boxvd7",
                 ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Icon Color", 'awavcl'),
            "param_name" => "icon_color2",
            "value" => "",
            "group" => __("Icon", 'awavcl'),
            "dependency" => array(
                "element" => "servive_box_style", "value" => "boxvd7",
                 ),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Title Font Size', 'awavcl' ),
            'param_name'       => 'title_f_size',
            "value" => 20,
            "min" => 5,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "description" => __("Choose Title Font Size as Pixel. Default is 26px", "awavcl"),
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
            'heading'          => __( 'Description Font Size', 'awavcl' ),
            'param_name'       => 'desc_f_size',
            "value" => 14,
            "min" => 5,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "description" => __("Choose Description Font Size as Pixel. Default is 14px", "awavcl"),
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
            "type" => "colorpicker",
            "heading" => __("Background Color", 'awavcl'),
            "param_name" => "bg_color",
            "value" => "red",
            "group" => __("Colors", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Background Color On Hover", 'awavcl'),
            "param_name" => "bg_color_hvr",
            "value" => "red",
            "group" => __("Colors", 'awavcl'),
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
            "heading" => __("Button Text Color", 'awavcl'),
            "param_name" => "btn_text_clr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
            "dependency" => array(
                "element" => "servive_box_style", "value" => "boxvd3",
                 ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Button Background Color", 'awavcl'),
            "param_name" => "btn_bg_clr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
            "dependency" => array(
                "element" => "servive_box_style", "value" => "boxvd3",
                 ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Button Background Color on Hover", 'awavcl'),
            "param_name" => "btn_bg_hvr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
            "dependency" => array(
                "element" => "servive_box_style", "value" => "boxvd3",
                 ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Button Text Color", 'awavcl'),
            "param_name" => "btn_text_clr1",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
            "dependency" => array(
                "element" => "servive_box_style", "value" => "boxvd6",
                 ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Button Background Color", 'awavcl'),
            "param_name" => "btn_bg_clr1",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
            "dependency" => array(
                "element" => "servive_box_style", "value" => "boxvd6",
                 ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Button Background Color on Hover", 'awavcl'),
            "param_name" => "btn_bg_hvr1",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
            "dependency" => array(
                "element" => "servive_box_style", "value" => "boxvd6",
                 ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Button Text Color", 'awavcl'),
            "param_name" => "btn_text_clr2",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
            "dependency" => array(
                "element" => "servive_box_style", "value" => "boxvd7",
                 ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Button Background Color", 'awavcl'),
            "param_name" => "btn_bg_clr2",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
            "dependency" => array(
                "element" => "servive_box_style", "value" => "boxvd7",
                 ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Button Background Color on Hover", 'awavcl'),
            "param_name" => "btn_bg_hvr2",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
            "dependency" => array(
                "element" => "servive_box_style", "value" => "boxvd7",
                 ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Text Color on Hover", 'awavcl'),
            "param_name" => "txt_hvr_color",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),

    )
    
));

function awavc_serv_box_two_shortcode($atts, $content = null) {
    extract(shortcode_atts(array(

                //'show_btnnnn' => 'Yes',
                'servive_box_style' => 'boxvd2',
                'image' => '',
                'title' => 'Title',
                'desc' => 'Awesome way to show your features inside wpbakery page builder.',
                'service_link' => '',
                'open_tab' => '',
                'img_hite' => '',
                'img_wid' => '',
                'brdr_dadius' => '',
                'title_f_size' =>'',
                'title_f_style' =>'',
                'desc_f_size' =>'',
                'desc_f_size' =>'',
                'desc_f_style' =>'',
                'bg_color' =>'',
                'bg_color_hvr' =>'',
                'ttl_color' =>'',
                'desc_color' =>'',
                'txt_hvr_color' =>'',
                'btn_txt' =>'Learn More',
                'btn_text_clr' =>'',
                'btn_bg_clr' =>'',
                'btn_bg_hvr' =>'',
                'font_icon1' =>'fa fa-home',
                'font_icon2' =>'fa fa-home',
                'icon_size' =>'',
                'icon_color' =>'',
                'font_icon3' =>'',
                'font_icon4' =>'',
                'font_icon5' =>'',
                'icon_size1' =>'',
                'icon_size2' =>'',
                'icon_color1' =>'',
                'icon_color2' =>'',
                'btn_txt1' =>'',
                'btn_text_clr1' =>'',
                'btn_bg_clr1' =>'',
                'btn_bg_hvr1' =>'',
                'btn_txt2' =>'',
                'btn_text_clr2' =>'',
                'btn_bg_clr2' =>'',
                'btn_bg_hvr2' =>'',
                'services_lists' =>'',
                'el_class' =>'',
    ), $atts));

    //$image_url = wp_get_attachment_url( $image, 'full' );
    //$image = aq_resize( $image_url, 296, 289, false ); //resize & crop the image
    //var_dump($image);
    $image = wp_get_attachment_image_src( $image, 'full' );
    $html = '';
    $list_html = '';

    

    $services_lists = vc_param_group_parse_atts($services_lists);
    if($servive_box_style == "boxvd8"){
    foreach ($services_lists as $services_list) {
            $list_html .= '<li class="" style="color:'.$desc_color.';font-size:'.$desc_f_size.'px; font-style:'.$desc_f_style.';">'.$services_list['list_content'].'</li>';
        }
    }
    if($servive_box_style == "boxvd2") {
           $add_class = (rand(99,99999));
        $html .= '
            <style>
                .adsv_'.$add_class.'.advc_serv_v1 .service-overlay-box{background:'.$bg_color.';}.adsv_'.$add_class.'.advc_serv_v1.service-overlay:hover .service-overlay-box{background: '.$bg_color_hvr.';}.adsv_'.$add_class.'.advc_serv_v1.service-overlay:hover .advs_ttl,.adsv_'.$add_class.'.advc_serv_v1.service-overlay:hover .service-overlay-box p{color: '.$txt_hvr_color.'!important;}
            </style>
                <div class="advc_serv_v1 service-overlay adsv_'.$add_class.' '.$el_class.'">
                    <img src="'.$image[0].'" alt="">
                    <div class="service-overlay-box center-holder">
                        <h4><a class="advs_ttl" herf="'.$service_link.'" style="color:'.$ttl_color.';font-size:'.$title_f_size.'px; font-style:'.$title_f_style.';">'.$title.'</a></h4>
                        <p style="color:'.$desc_color.';font-size:'.$desc_f_size.'px; font-style:'.$desc_f_style.';">'.$desc.'</p>



                    </div>
                </div>
                 ';
    }
    if($servive_box_style == 'boxvd3') {
                 $add_class = (rand(99,99999));
        $html .= '
        <style>
            .adsv2_'.$add_class.'.advc_info_v2:hover {background:'.$bg_color_hvr.'!important;}.adsv2_'.$add_class.'.advc_info_v2:hover .adsv2_ttl{color:'.$txt_hvr_color.'!important;}.adsv2_'.$add_class.'.advc_info_v2:hover .firo-bottom.sm {background:'.$btn_bg_hvr.'!important;}
        </style>
                <div class="adsv2_'.$add_class.' advc_info_v2 firo-img-text layout-4 box-shadow '.$el_class.'" style="background:'.$bg_color.';-webkit-transition: all 0.4s ease;-o-transition: all 0.4s ease;transition: all 0.4s ease">
                        <div class="img">
                            <img alt="" src="'.$image[0].'">
                        </div>
                        <h4 class="adsv2_ttl" style="color:'.$ttl_color.';font-size:'.$title_f_size.'px; font-style:'.$title_f_style.';-webkit-transition: all 0.4s ease;-o-transition: all 0.4s ease;transition: all 0.4s ease;">'.$title.'</h4>
                        <div class="text" style="color:'.$desc_color.';font-size:'.$desc_f_size.'px; font-style:'.$desc_f_style.';">'.$desc.'</div>';
                    if(!empty($btn_txt)) {
                        $html .= '<a class="firo-bottom sm" href="'.$service_link.'" style="color:'.$btn_text_clr.'; background:'.$btn_bg_clr.';">'.$btn_txt.'</a>';
                        }
                        $html .= '</div>
                 ';
    }
    if($servive_box_style == 'boxvd5') {
                   $add_class = (rand(99,99999));
        $html .= '
            <style>
                .adsv3_'.$add_class.'.advc_serv_v6.feature::before {background:'.$bg_color.';opacity:.9;}.adsv3_'.$add_class.'.advc_serv_v6:hover .advs3_ttl{color:'.$txt_hvr_color.';}
            </style>
                <div style="background-image: url(\''.$image[0].'\');" class="feature adsv3_'.$add_class.' advc_serv_v6 '.$el_class.'">
                            <div class="feature__icon">
                                <span>
                                   <i class="'.$font_icon1.'" style="font-size:'.$icon_size.'px;color:'.$icon_color.'"></i>
                                </span>
                                <span>
                                    <i class="'.$font_icon2.'" style="font-size:'.$icon_size.'px;color:'.$icon_color.'"></i>
                                </span>
                            </div>
                            <div class="feature__content">
                                <h4 class="wow fadeInUp">
                                    <a class="advs3_ttl" href="features.html" style="color:'.$ttl_color.';font-size:'.$title_f_size.'px; font-style:'.$title_f_style.';">'.$title.'</a>
                                </h4>
                                <p data-wow-delay="0.15s" class="wow fadeInUp" style="color:'.$desc_color.';font-size:'.$desc_f_size.'px; font-style:'.$desc_f_style.';">'.$desc.'</p>
                            </div>
                        </div>
                 ';
    }

    if($servive_box_style == 'boxvd6') {
                $add_class = (rand(99,99999));
        $html .= '
         <style>
                .adsv4_'.$add_class.'.advc_serv_v1:hover .adsv_i_bg i{background:'.$bg_color_hvr.'!important;}.adsv4_'.$add_class.'.advc_serv_v1:hover .adsv4_ttl h4{color:'.$txt_hvr_color.'!important;}.adsv4_'.$add_class.':hover .adsv4_btn {background: '.$btn_bg_hvr1.'!important;}
         </style>
                <div class="advc_serv_v1 our-services '.$el_class.' adsv4_'.$add_class.'">
                        <div class="item">
                                <div class="icon text-center adsv_i_bg" style="background:'.$bg_color.'">
                                    <i class="'.$font_icon3.'" style="font-size:'.$icon_size1.'px;color:'.$icon_color1.';background:'.$bg_color.';-webkit-transition: all 0.4s ease;-o-transition: all 0.4s ease;transition: all 0.4s ease;"></i>
                                </div>
                                <div class="info text-center adsv4_ttl">
                                    <h4 style="color:'.$ttl_color.';font-size:'.$title_f_size.'px; font-style:'.$title_f_style.';-webkit-transition: all 0.4s ease;-o-transition: all 0.4s ease;transition: all 0.4s ease;">'.$title.'</h4>
                                    <p style="color:'.$desc_color.';font-size:'.$desc_f_size.'px; font-style:'.$desc_f_style.';">'.$desc.'</p>';
                                if(!empty($btn_txt1)) {
                                    $html .= '<a class="adsv4_btn" href="'.$service_link.'" style="border-radius: 30px;padding: 7px;color:'.$btn_text_clr1.'; background:'.$btn_bg_clr1.';">'.$btn_txt1.' <i class="'.$font_icon4.'" style="font-size:'.$desc_f_size.'px;color:'.$btn_text_clr1.'"></i> </a>';
                                    }
                                $html .= '</div>
                        </div>
                    </div>
                 ';
    }
    if($servive_box_style == 'boxvd7') {
                  $add_class = (rand(99,99999));
        $html .= '
        <style>
             .adsv_'.$add_class.'.advc_serv_v3.service-block .image-box .overlay-box::before{background-color:'.$bg_color.';opacity:.9;}.adsv_'.$add_class.':hover .adsv5_ttl {color: '.$txt_hvr_color.'!important;}
        </style>
                <div class="advc_serv_v3 adsv_'.$add_class.' service-block '.$el_class.'">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="'.$image[0].'" alt=""></figure>
                            <div class="overlay-box">
                                <div class="text" style="color:'.$desc_color.';font-size:'.$desc_f_size.'px; font-style:'.$desc_f_style.';">'.$desc.'</div>
                                <div class="link-box">';
                                if(!empty($btn_txt2)) {
                                    $html .= '<a class="adsv5_btn" href="'.$service_link.'" style=" border-radius: 20px;padding: 7px;color:'.$btn_text_clr2.'; background:'.$btn_bg_clr2.';">'.$btn_txt2.' <i class="fa fa-angle-double-right" style="font-size:'.$desc_f_size.'px;color:'.$btn_text_clr.'"></i></a>';
                                    }
                                $html .= '</div></div>
                        </div>
                        <div class="caption-box">
                            <div class="caption">
                                 <i class="icon '.$font_icon5.'" style="font-size:'.$icon_size2.'px;color:'.$icon_color2.';"></i>
                                 <h3><a class="adsv5_ttl" href="'.$service_link.'" style="color:'.$ttl_color.';font-size:'.$title_f_size.'px; font-style:'.$title_f_style.';">'.$title.'</a></h3>
                            </div>
                        </div>
                    </div>
            </div>
                 ';
    }
    if($servive_box_style == 'boxvd8') {
                 $add_class = (rand(99,9999));
                 $add_ttl = (rand(99,99999));
                 $add_li = (rand(99,999999));
        $html .= '
        <style>
        .adsv6_'.$add_class.'.advc_serv_v4.case-block .caption-box .icon-box a:hover,.adsv6_'.$add_class.'.advc_serv_v4.case-block .caption-box .icon-box a:hover .adsv6_'.$add_class.' .adsv6_i,.adsv6_'.$add_class.'.advc_serv_v4.case-block .caption-box:hover  .adsv6_ttl_'.$add_ttl.',.adsv6_'.$add_class.'.advc_serv_v4.case-block .caption-box .info li:hover{border-color:'.$txt_hvr_color.';color:'.$txt_hvr_color.'!important;}
        </style>
                <div class="advc_serv_v4 adsv6_'.$add_class.' case-block '.$el_class.'">
                        <div class="image-box">
                            <div class="image"><img src="'.$image[0].'" alt=""></div>
                            <div class="caption-box">
                                <h5 class="adsv6_ttl_'.$add_ttl.'" style="-webkit-transition: all 0.4s ease;-o-transition: all 0.4s ease;transition: all 0.4s ease;color:'.$ttl_color.';font-size:'.$title_f_size.'px; font-style:'.$title_f_style.';">'.$title.'</h5>
                                <ul class="info">
                                    <p style="color:'.$desc_color.';font-size:'.$desc_f_size.'px; font-style:'.$desc_f_style.';">'.$desc.'</p>
                                    '.$list_html.'
                                </ul>
                                <div class="adsv6 icon-box"><a href="'.$service_link.'" style="color:'.$ttl_color.';border-color:'.$ttl_color.';"><i  class="adsv6_i fa fa-angle-right"></i></a></div>
                            </div>
                            </div>
                </div>

                 ';
    }



    return $html;
}

add_shortcode("awavc_serv_box_two", "awavc_serv_box_two_shortcode");