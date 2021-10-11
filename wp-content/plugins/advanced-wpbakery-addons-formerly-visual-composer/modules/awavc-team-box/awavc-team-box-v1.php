<?php
vc_map(array(
    "name"             => "Advanced Team Box",
    "category"         => 'Advanced Elements',
    "description"    => "Show your team in many styles",
    "base"             => "awavc_team_box_two",
    "class"         => "",
    "icon"             => "advc_team_ico",

    "params"     => array(

        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Team Box Style:", "awavcl"),
            "param_name" => "team_box_style",
            "value" => array(
                __("Team Box Style 1","awavcl") => 'team_box_style_1',
                __("Team Box Style 2","awavcl") => 'team_box_style_2',
                __("Team Box Style 3","awavcl") => 'team_box_style_3',
                __("Team Box Style 4","awavcl") => 'team_box_style_4',
            ),
            "admin_label"        => true,
            //"std" => "boxvd2",
        ),
        array(
            "type" => "attach_image",
            "heading" => __("Image", "awavcl"),
            "param_name" => "image",
            "value" => "",
            "description" => __("", "awavcl"),
        ),
        array(
            "type" => "textfield",
            "heading" => __("Title", 'awavcl'),
            "param_name" => "title",
            "description" => __("In style 3 image should be like 400*600", 'awavcl'),
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
            "type" => "textarea",
            "heading" => __("Designation", 'awavcl'),
            "param_name" => "desig",
            "description" => __("", 'awavcl'),
            "value" => __("CEO", 'awavcl'),
        ),
        array(
            "type" => "vc_link",
            "class" => "",
            "heading" => __( "Portfolio Link", "awavcl" ),
            "param_name" => "service_link",
            "value" => '',
            "description" => __( "If you don/'t want to link, Leave it empty", "my-text-domain" )
        ),
        array(
            'type' => 'param_group',
            'heading' => __( 'Social Links', 'awavcl' ),
            'param_name' => 'social_link_lists',
            'group' => 'Social Links',

            'params' => array(
                array(
                    'type' => 'vc_link',
                    'heading' => __( 'Social Link', 'awavcl' ),
                    'param_name' => 'social_link',
                    'description' => __( '', 'awavcl' ),
                    'value' => '#',
                ),
                array(
                    "type" => "iconpicker",
                    "heading" => __("Front Icon", "awavcl"),
                    "param_name" => "font_icon",
                    "value" => "fa fa-handshake-o",
                ),
                array(
                    "type" => "colorpicker",
                    "heading" => __("Icon Color", 'awavcl'),
                    "param_name" => "icon_color",
                    "value" => "#0986565",
                ),
                array(
                    "type" => "colorpicker",
                    "heading" => __("Icon Color on Hover", 'awavcl'),
                    "param_name" => "icon_hvr_color",
                    "value" => "#0986565",
                ),
                array(
                    "type" => "colorpicker",
                    "heading" => __("Icon Background on Hover", 'awavcl'),
                    "param_name" => "icon_bg",
                    "value" => "#0986565",
                ),
                array(
                    "type" => "colorpicker",
                    "heading" => __("Icon Border on Hover", 'awavcl'),
                    "param_name" => "icon_bdr",
                    "value" => "#0986565",
                ),


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
            'heading'          => __( 'Title Font Size', 'awavcl' ),
            'param_name'       => 'title_size',
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
            "param_name" => "title_style",
            "value" => array(
                __("Normal","awavcl") => "",
                __("Italic","awavcl") => "italic",
            ),
            "group" => __("Settings", 'awavcl'),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Designation Font Size', 'awavcl' ),
            'param_name'       => 'desig_size',
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
            "heading" => __("Designation Font style", "awavcl"),
            "param_name" => "desig_style",
            "value" => array(
                __("Normal","awavcl") => "",
                __("Italic","awavcl") => "italic",
            ),
            "group" => __("Settings", 'awavcl'),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Description Font Size', 'awavcl' ),
            'param_name'       => 'desc_size',
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
            "param_name" => "desc_style",
            "value" => array(
                __("Normal","awavcl") => "",
                __("Italic","awavcl") => "italic",
            ),
            "group" => __("Settings", 'awavcl'),
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
            "group" => __("Settings", 'awavcl'),
            ),
        array(
            "type" => "colorpicker",
            "heading" => __("Background Color", 'awavcl'),
            "param_name" => "bg_color",
            "value" => "",
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
            "heading" => __("Designation Color", 'awavcl'),
            "param_name" => "desig_color",
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
            "heading" => __("Text Hover Color", 'awavcl'),
            "param_name" => "txt_color_hvr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),
    )

));

function awavc_team_box_two_shortcode($atts, $content = null) {
    extract(shortcode_atts(array(

                //'show_btnnnn' => 'Yes',
                'team_box_style' => 'team_box_style_1',
                'image' => '',
                'title' => 'Title',
                'desc' => 'Awesome way to show your features inside wpbakery page builder.',
                'desig' => 'AFO',
                'social_link_lists' => '',
                'service_link' => '',
                'el_class' => '',
                'title_size' => '',
                'title_style' => '',
                'desig_size' => '',
                'desc_size' => '',
                'desig_style' => '',
                'desc_style' => '',
                'icon_size' => '',
                'bg_color' => '#313C5A',
                'bg_color_hvr' => '',
                'ttl_color' => '',
                'desc_color' => '',
                'desig_color' => '',
                'txt_color_hvr' => '',
    ), $atts));

    //$image_url = wp_get_attachment_url( $image, 'full' );
    //$image = aq_resize( $image_url, 296, 289, false ); //resize & crop the image
    //var_dump($image);
    $image = wp_get_attachment_image_src( $image, 'full' );
    $html = '';
    $list_html = '';



    $social_link_lists = vc_param_group_parse_atts($social_link_lists);
    $service_link   = vc_build_link( $service_link );
    $link_url   = ($service_link['url']);
    $link_target   = ($service_link['target']);

    if($team_box_style == "team_box_style_1"||$team_box_style == "team_box_style_2"||$team_box_style == "team_box_style_3"||$team_box_style == "team_box_style_4"){

        foreach ($social_link_lists as $social_link_list) {
            $social_link = $social_link_list['social_link'];
            $link_midea   = vc_build_link( $social_link );
            $link_midea_url   = ($link_midea['url']);
            $link_midea_target   = ($link_midea['target']);
            $font_icon =$social_link_list['font_icon'];
              $icon_color='';
              $font_icon_bg='';
              $font_icon_bdr='';
              $icon_hvr_color='';
            if(!empty($social_link_list['icon_color'])){
                $icon_color = $social_link_list['icon_color'];
            }
            if(!empty($social_link_list['icon_bg'])){
                $font_icon_bg = $social_link_list['icon_bg'];
            }
            if(!empty($social_link_list['icon_bdr'])){
                $font_icon_bdr = $social_link_list['icon_bdr'];
            }
            if(!empty($social_link_list['icon_hvr_color'])){
                $icon_hvr_color = $social_link_list['icon_hvr_color'];
            }




            $unq_social =(rand(12,30000));
                $list_html .= '

                <li class=""><a href="'.$link_midea_url.'" target="'.$link_midea_target.'" style="color:'.$icon_color.';"><i class="'.$font_icon.'"></i></a></li>  ';
            }
    }

    if($team_box_style == 'team_box_style_1') {
                 $add_class = (rand(99,99999));
        $html .= '
        <style>
        .advt1_'.$unq_social.'.advc_team_v3 .team__content h5 a:hover{color:'.$txt_color_hvr.'!important;}.advt1_'.$unq_social.'.advc_team_v3 .team__image::before {background-color:'.$bg_color.';}
                        .advt1_'.$unq_social.'.advc_team_v3 .team__social ul li a:hover{color:'.$icon_hvr_color.'!important;background: '.$font_icon_bg.' none repeat scroll 0 0;border-color: '.$font_icon_bdr.';}
                </style>
            <figure class="advt1_'.$unq_social.' advc_team_v3 team">
                                <div class="team__header">
                                    <div class="team__image">
                                        <img alt="team member thumb" src="'.$image[0].'">
                                    </div>
                                    <div class="team__social">
                                        <ul>
                                            '.$list_html.'
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="team__content">
                                    <h4>
                                        <a href="'.$link_url.'" target="'.$link_target.'" style="color:'.$ttl_color.' ; font-size:'.$title_size.' px; fonr-style:'.$title_style.' ;">'.$title.'</a>
                                    </h4>
                                    <p style="color:'.$desc_color.' ; font-size:'.$desc_size.' px; fonr-style:'.$desc_style.' ;">'.$desc.'</p>
                                </figcaption>
            </figure>
                 ';
    }
    if($team_box_style == 'team_box_style_2') {
                 $add_class = (rand(99,99999));
        $html .= '
        <style>
.advt2_'.$add_class.' .team-box .team-img::after {background: '.$bg_color.' none repeat scroll 0 0;content: "";height: 0;left: 0;opacity:0;position: absolute;top: 0;width: 100%; z-index: 9;}.advt2_'.$add_class.' .advt2_ttl:hover {color:'.$txt_color_hvr.';}.advt2_'.$add_class.' ul.team-social.advc_team_sc a:hover{color:'.$icon_hvr_color.'!important;background: '.$font_icon_bg.' none repeat scroll 0 0;border-color: '.$font_icon_bdr.';}
        </style>
            <div class="advt2_'.$add_class.' advc_team_v5 meet-professors team-page team-page">
                        <div class="team-box">
                                    <div class="team-img">
                                        <div class="team-caption">
                                            <p style="color:'.$desc_color.' ; font-size:'.$desc_size.' px; fonr-style:'.$desc_style.' ;">'.$desc.'</p>
                                            <ul class="team-social advc_team_sc">
                                                '.$list_html.'
                                            </ul>
                                        </div>
                                        <span class="plus"> <i style="color:'.$bg_color.';" class="fa fa-plus"></i> <i style="color:'.$bg_color.';" class="fa fa-minus"></i> </span> <img alt="" src="'.$image[0].'">
                                    </div>
                                    <div class="team-name">
                                        <h4> <a href="'.$link_url.'" target="'.$link_target.'" class="advt2_ttl" style="color:'.$ttl_color.' ; font-size:'.$title_size.' px; fonr-style:'.$title_style.' ;">'.$title.'</a></h4>
                                        <strong style="color:'.$desig_color.' ; font-size:'.$desig_size.' px; fonr-style:'.$desig_style.' ;">'.$desig.'</strong>
                                    </div>
                                </div>
                </div>
                 ';
    }
    if($team_box_style == 'team_box_style_3') {
                 $add_class = (rand(99,99999));
        $html .= '
        <style>
             .advt3_'.$add_class.'.advc_team_v4.team-page-3 .team-box:hover .team-cap {background: '.$bg_color.' none repeat scroll 0 0;}.advt3_'.$add_class.' .advt3_ttl:hover {color:'.$txt_color_hvr.';}.advt3_'.$add_class.' ul.team-social.advc_team_sc a:hover{color:'.$icon_hvr_color.'!important;background: '.$font_icon_bg.' none repeat scroll 0 0;border-color: '.$font_icon_bdr.';}
        </style>
            <div class="advt3_'.$add_class.' advc_team_v4 team-page-3">
                        <div class="team-box">
                                    <div class="team-cap">
                                        <h4 class="advt3_ttl"> <a href="'.$link_url.'" target="'.$link_target.'" class="advt2_ttl" style="color:'.$ttl_color.' ; font-size:'.$title_size.' px; fonr-style:'.$title_style.' ;">'.$title.'</a></h4>
                                        <strong style="color:'.$desig_color.' ; font-size:'.$desig_size.' px; fonr-style:'.$desig_style.' ;">'.$desig.'</strong>
                                        <p  style="color:'.$desc_color.' ; font-size:'.$desc_size.' px; fonr-style:'.$desc_style.' ;">'.$desc.'</p>
                                        <ul class="team-social advc_team_sc">
                                            '.$list_html.'
                                        </ul>
                                    </div>
                                    <img alt="" src="'.$image[0].'">
                        </div>
            </div>
                 ';
    }
if($team_box_style == 'team_box_style_4') {
                 $add_class = (rand(99,99999));
        $html .= '
        <style>
             .advt4_'.$add_class.'.advc_team_v4.team-page-3 .team-box:hover .team-cap {background: '.$bg_color.' none repeat scroll 0 0;}.advt4_'.$add_class.' .advt3_ttl:hover {color:'.$txt_color_hvr.';}.advt4_'.$add_class.'.team-style-1.team-page .team-box ul.team-social a:hover{color:'.$icon_hvr_color.'!important;background: '.$font_icon_bg.' none repeat scroll 0 0;border-color: '.$font_icon_bdr.';}
        </style>
            <div class="advt4_'.$add_class.' team-style-1 team-page advc_team_v5">
                    <div class="team-box">
                                    <img alt="" src="'.$image[0].'">
                                    <div class="team-cap">
                                        <span style="background:'.$font_icon_bg.';"class="plusc"><i class="fa fa-plus"></i></span>
                                        <h4 class="advt3_ttl"> <a href="'.$link_url.'" target="'.$link_target.'" class="advt2_ttl" style="color:'.$ttl_color.' ; font-size:'.$title_size.' px; fonr-style:'.$title_style.' ;">'.$title.'</a></h4>
                                        <<stron></stron>g style="color:'.$desig_color.' ;margin:0; font-size:'.$desig_size.' px; fonr-style:'.$desig_style.' ;">'.$desig.'</strong>
                                        <p style="margin:5px;color:'.$desc_color.' ; font-size:'.$desc_size.' px; fonr-style:'.$desc_style.' ;">'.$desc.'</p>
                                        <ul class="team-social advc_team_sc">
                                            '.$list_html.'
                                        </ul>
                                    </div>
                                </div>
                </div>
                 ';
    }

    return $html;
}

add_shortcode("awavc_team_box_two", "awavc_team_box_two_shortcode");