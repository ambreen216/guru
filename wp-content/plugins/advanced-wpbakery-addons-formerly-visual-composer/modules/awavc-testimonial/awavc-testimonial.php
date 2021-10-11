<?php
vc_map(array(
    "name" 			=> "Advanced Testimonial Box",
    "category" 		=> 'Advanced Elements',
    "description"	=> "What's client says in styles",
    "base" 			=> "awavc_testimonial_box",
    "class" 		=> "",
    "icon" 			=> "advc_testi_icon",

    "params" 	=> array(

        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Testimonial Box Style:", "awavcl"),
            "param_name" => "testi_box_style",
            "value" => array(
                __("style 1","awavcl") => 'testi_style_1',
                __("style 2","awavcl") => 'testi_style_2',
                __("style 3","awavcl") => 'testi_style_3',
                __("style 4","awavcl") => 'testi_style_4',
                __("style 5","awavcl") => 'testi_style_5',
                __("style 6","awavcl") => 'testi_style_6',
            ),
            "admin_label"        => true,
        ),
        array(
            "type" => "attach_image",
            "heading" => __("Image", "awavcl"),
            "param_name" => "image",
            "value" => "",
            "description" => __("Choose your image icon::60*60", "awavcl"),
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
            "heading" => __("Comment", 'awavcl'),
            "param_name" => "desc",
            "description" => __("", 'awavcl'),
            "value" => __("Description", 'awavcl'),
        ),
        array(
            "type" => "textarea",
            "heading" => __("Position", 'awavcl'),
            "param_name" => "position",
            "description" => __("", 'awavcl'),
            "value" => __("Position", 'awavcl'),
        ),
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Rating Stared", "awavcl"),
            "param_name" => "rating_star",
            "value" => array(
                __("0 Star","awavcl") => '',
                __("1 Star","awavcl") => 'adts_testimonial__rating--1',
                __("2 Star","awavcl") => 'adts_testimonial__rating--2',
                __("3 Star","awavcl") => 'adts_testimonial__rating--3',
                __("4 Star","awavcl") => 'adts_testimonial__rating--4',
                __("5 Star","awavcl") => 'adts_testimonial__rating--5',
            ),
            "dependency" => array("element" => "testi_box_style", "value" => "testi_style_1",),
        ),


        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Rating Stared", "awavcl"),
            "param_name" => "rating_star_2",
            "value" => array(
                __("0 Star","awavcl") => '',
                __("1 Star","awavcl") => 'adts2_testimonial__rating--1',
                __("2 Star","awavcl") => 'adts2_testimonial__rating--2',
                __("3 Star","awavcl") => 'adts2_testimonial__rating--3',
                __("4 Star","awavcl") => 'adts2_testimonial__rating--4',
                __("5 Star","awavcl") => 'adts2_testimonial__rating--5',
            ),
            "dependency" => array("element" => "testi_box_style", "value" => "testi_style_2",),
        ),
        /*array(
            'type' => 'param_group',
            'heading' => __( 'List Items Below Content', 'awavcl' ),
            'param_name' => 'services_lists',
            'params' => array(
                array(
                    'type' => 'textfield',
                    'heading' => __( 'Service List', 'awavcl' ),
                    'param_name' => 'list_content',
                    'description' => __( '', 'awavcl' ),
                    'value' => 'Consultation',
                ),

            ),
        ),*/
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
            'heading'          => __( 'Position Font Size', 'awavcl' ),
            'param_name'       => 'position_size',
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
            "heading" => __("Position Font Style", "awavcl"),
            "param_name" => "position_style",
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
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Background Color 2", 'awavcl'),
            "param_name" => "bg_color1",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
            "dependency"    => array( 'element' => "testi_box_style", 'value' => array('testi_style_4','testi_style_6') ),
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
            "heading" => __("Comment Color", 'awavcl'),
            "param_name" => "descrip_color",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Position Color", 'awavcl'),
            "param_name" => "pos_color",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Qoute Color", 'awavcl'),
            "param_name" => "bg_color_hvr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
            "dependency"    => array( 'element' => "testi_box_style", 'value' => "testi_style_3" ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Rating Color", 'awavcl'),
            "param_name" => "rating_color",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
            "dependency"    => array( 'element' => "testi_box_style", 'value' => array('testi_style_2', 'testi_style_1') ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Border Color", 'awavcl'),
            "param_name" => "brdr_color",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
            "dependency"    => array( 'element' => "testi_box_style", 'value' => array('testi_style_5','testi_style_4','testi_style_3','testi_style_2') ),
        ),
        array(
            'type' => 'vc_link',
            'heading' => __( 'Customer Link', 'awavcl' ),
            'param_name' => 'customer_link',
            'description' => __( '', 'awavcl' ),
            'value' => '#',
            "dependency"    => array( 'element' => "testi_box_style", 'value' => array('testi_style_4') ),
         ),
        array(
            "type" => "textfield",
            "heading" => esc_attr__("Extra class name", 'awavcl'),
            "param_name" => "el_class",
            "description" => esc_attr__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'awavcl'),
        ),

    )

));

function awavc_testimonial_box_shortcode($atts, $content = null) {
    extract(shortcode_atts(array(

                //'show_btnnnn' => 'Yes',
                'testi_box_style' => 'testi_style_1',
                'image' => '',
                'title' => 'Title',
                'desc' => 'Awesome way to show your features inside wpbakery page builder.',
                'position' => 'AFO-INCOP',
                'rating_star' => '',
                'rating_star_2' => '',
                'title_size' => '',
                'title_style' => '',
                'desc_size' => '',
                'desc_style' => '',
                'el_class' =>'',
                'position_size' =>'',
                'position_style' =>'',
                'bg_color' =>'',
                'bg_color1' =>'',
                'bg_color_hvr' =>'',
                'ttl_color' =>'',
                'descrip_color' =>'',
                'pos_color' =>'',
                'services_lists' =>'',
                'rating_color' =>'',
                'brdr_color' =>'',
                'customer_link' =>'',
    ), $atts));

    wp_register_style( 'testimonial-css', plugins_url( '/css/style-testimonial.css',  __FILE__) );
    wp_enqueue_style( 'testimonial-css' );

    //$image_url = wp_get_attachment_url( $image, 'full' );
    //$image = aq_resize( $image_url, 296, 289, false ); //resize & crop the image
    //var_dump($image);
    $image = wp_get_attachment_image_src( $image, 'full' );
    $html = '';
    $list_html = '';


    $customer_link   = vc_build_link( $customer_link);


    if($testi_box_style == 'testi_style_1') {
                 $add_class = (rand(99,9999));
        $html .= '
        <style>
            .testi1_'.$add_class.' .adts_testimonial__rating--4 .fa:nth-of-type(1), .testi1_'.$add_class.' .adts_testimonial__rating--4 .fa:nth-of-type(2), .testi1_'.$add_class.' .adts_testimonial__rating--4 .fa:nth-of-type(3),.testi1_'.$add_class.' .adts_testimonial__rating--4 .fa:nth-of-type(4) {color:'.$rating_color.'!important;}.testi1_'.$add_class.' .adts_testimonial__rating--5 .fa:nth-of-type(1), .testi1_'.$add_class.' .adts_testimonial__rating--5 .fa:nth-of-type(2), .testi1_'.$add_class.' .adts_testimonial__rating--5 .fa:nth-of-type(3), .testi1_'.$add_class.' .adts_testimonial__rating--5 .fa:nth-of-type(4), .testi1_'.$add_class.' .adts_testimonial__rating--5 .fa:nth-of-type(5) {color:'.$rating_color.'!important;}.testi1_'.$add_class.' .adts_testimonial__rating--1 .fa:nth-of-type(1) {color:'.$rating_color.'!important;}.adts_testimonial__rating--2 .fa:nth-of-type(1), .adts_testimonial__rating--2 .fa:nth-of-type(2){color:'.$rating_color.'!important;}.testi1_'.$add_class.' .adts_testimonial__rating--3 .fa:nth-of-type(1), .adts_testimonial__rating--3 .fa:nth-of-type(2),.testi1_'.$add_class.' .adts_testimonial__rating--3 .fa:nth-of-type(3){color:'.$rating_color.'!important;}.testi1_'.$add_class.' .adts_testimonial__inner::before, .testi1_'.$add_class.' .adts_testimonial__inner::after {background-color: '.$bg_color.'!important;}
        .testi1_'.$add_class.' .adts_testimonial__ava::before {background-color: '.$bg_color.'!important;z-index:-1;}.adts_testimonial__ava > img {
    border-radius: 50%;
}
        .testi1_'.$add_class.' .adts_testimonial__inner {border-color: -moz-use-text-color '.$bg_color.' '.$bg_color.'!important;}
        </style>
                    <div class="adts_testimonial '.$el_class.' testi1_'.$add_class.'">
                        <div class="adts_testimonial__inner">
                            <div class="adts_testimonial__head">
                                <div class="adts_testimonial__ava">
                                    <img src="'.$image[0].'" class="" alt="">
                                </div>
                            </div>
                            <div class="adts_testimonial__body">
                                <p style="font-size:'.$desc_size.'; font-style:'.$desc_style.'; color:'.$descrip_color.'; " >'.$desc.'</p>
                            </div>
                            <div class="adts_testimonial__rating '.$rating_star.' ">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="adts_testimonial__foot">
                                <h4 class="adts_testimonial__name" style="font-size:'.$title_size.'px; font-style:'.$title_style.'; color:'.$ttl_color.'; ">'.$title.'</h4>
                                <h5 class="adts_testimonial__prof" style="font-size:'.$position_size.'px; font-style:'.$position_style.'; color:'.$pos_color.'; ">'.$position.'</h5>
                            </div>
                        </div>
                    </div>

                 ';
    }

    if($testi_box_style == 'testi_style_2') {
                 $add_class = (rand(99,9999));
        $html .= '
        <style>
            .testi2_'.$add_class.' .adts2_testimonial__rating--1 .fa:nth-of-type(1) {color:'.$rating_color.'!important;}
            .adts2_testimonial__rating--2 .fa:nth-of-type(1), .adts2_testimonial__rating--2 .fa:nth-of-type(2){color:'.$rating_color.'!important;}
            .testi2_'.$add_class.' .adts2_testimonial__rating--3 .fa:nth-of-type(1), .adts2_testimonial__rating--3 .fa:nth-of-type(2),.testi2_'.$add_class.' .adts2_testimonial__rating--3 .fa:nth-of-type(3){color:'.$rating_color.'!important;}

            .testi2_'.$add_class.' .adts2_testimonial__rating--4 .fa:nth-of-type(1), .testi2_'.$add_class.' .adts2_testimonial__rating--4 .fa:nth-of-type(2), .testi2_'.$add_class.' .adts2_testimonial__rating--4 .fa:nth-of-type(3),.testi2_'.$add_class.' .adts2_testimonial__rating--4 .fa:nth-of-type(4) {color:'.$rating_color.'!important;}

            .testi2_'.$add_class.' .adts2_testimonial__rating--5 .fa:nth-of-type(1), .testi2_'.$add_class.' .adts2_testimonial__rating--5 .fa:nth-of-type(2), .testi2_'.$add_class.' .adts2_testimonial__rating--5 .fa:nth-of-type(3), .testi2_'.$add_class.' .adts2_testimonial__rating--5 .fa:nth-of-type(4), .testi2_'.$add_class.' .adts2_testimonial__rating--5 .fa:nth-of-type(5) {color:'.$rating_color.'!important;}

             .testi2_'.$add_class.' .adts2_testimonial__inner{background-color:'.$bg_color.';}.adts2_testimonial__ava::before {background: '.$brdr_color.' none repeat scroll 0 0!important;}





        </style>
                    <div class="adts2_testimonial testi2_'.$add_class.'">
                                <div class="adts2_testimonial__inner">
                                    <div class="adts2_testimonial__head">
                                        <div class="adts2_testimonial__ava">
                                            <img src="'.$image[0].'" class="adts2_testimonial__ava-img" alt="">
                                        </div>
                                    </div>
                                    <div class="adts2_testimonial__body">
                                        <p style="font-size:'.$desc_size.'px; font-style:'.$desc_style.'; color:'.$descrip_color.'; " >'.$desc.'</p>
                                    </div>
                                    <div class="adts2_testimonial__rating '.$rating_star_2.'">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="adts2_testimonial__foot">
                                        <h4 class="adts2_testimonial__name" style="font-size:'.$title_size.'px; font-style:'.$title_style.'; color:'.$ttl_color.'; ">'.$title.'</h4>
                                        <h5 class="adts2_testimonial__prof" style="font-size:'.$position_size.'px; font-style:'.$position_style.'; color:'.$pos_color.'; ">'.$position.'</h5>
                                    </div>
                                </div>
                            </div>

                 ';
    }
    if($testi_box_style == 'testi_style_3') {
                 $add_class = (rand(99,9999));
        $html .= '
        <style>
             .testi3_'.$add_class.' .adts3_testimonial__content-inner{background-color:'.$bg_color.';}.testi3_'.$add_class.' .adts3_testimonial__content-text::before {color: #ff0000;top: 40px!important;opacity:.2!important;}.testi3_'.$add_class.' .adts3_testimonial__content-text::after{color:#ff0000;opacity:.2!important;}.testi3_'.$add_class.' .adts3_testimonial__ava::before {border-color:'.$brdr_color.'!important;;}
        </style>
                            <div class="adts3_testimonial  testi3_'.$add_class.'">
                                <div class="adts3_testimonial__item adts3_testimonial__pict">
                                    <div class="adts3_testimonial__ava">
                                        <img src="'.$image[0].'" class="" alt="">
                                    </div>
                                </div>
                                <div class="adts3_testimonial__item adts3_testimonial__content">
                                    <div class="adts3_testimonial__content-inner">
                                        <h3 class="adts3_testimonial__title" style="font-size:'.$title_size.'px; font-style:'.$title_style.'; color:'.$ttl_color.'; ">'.$title.'</h3>
                                        <div class="adts3_testimonial__content-text">
                                             <h5 class="adts3_testimonial__pos" style="font-size:'.$position_size.'px; font-style:'.$position_style.'; color:'.$pos_color.'; ">'.$position.'</h5>
                                            <p style="font-size:'.$desc_size.'px; font-style:'.$desc_style.'; color:'.$descrip_color.'; " >'.$desc.'</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                 ';
    }


    if($testi_box_style == 'testi_style_4') {
                 $add_class = (rand(99,9999));
        $html .= '
        <style>
            .testi4_'.$add_class.'.adts4_tc-testimonial-style6 .adts4_testi-photo img{background-color:'.$brdr_color.'!important;} .testi4_'.$add_class.'.adts4_tc-testimonial-style6 .adts4_testi-desc {border-color:'.$brdr_color.'!important;}.testi4_'.$add_class.'.adts4_tc-testimonial-style6 .adts4_testi-info {background: rgba(0, 0, 0, 0) linear-gradient(to right, #ffffff 15%, '.$bg_color1.' 85%, '.$bg_color.' 100%) repeat scroll 0 0!important;padding: 10px 15px;text-align: right;}
        </style>
                            <div class="adts4_tc-testimonial-style6 testi4_'.$add_class.'">
                                <div class="adts4_testi-desc">
                                    <p style="font-size:'.$desc_size.'px; font-style:'.$desc_style.'; color:'.$descrip_color.'; " >'.$desc.'</p>
                                </div>
                                <div class="adts4_testi-photo">
                                    <img src="'.$image[0].'" alt="">
                                </div>
                                <div class="adts4_testi-info">
                                    <span class="name" style="font-size:'.$title_size.'px; font-style:'.$title_style.'; color:'.$ttl_color.'; ">'.$title.'</span>
                                    <div class="position">
                                        <span class="meta"  style="font-size:'.$position_size.'px; font-style:'.$position_style.'; color:'.$pos_color.'; ">'.$position.'</span> - <a style="font-size:'.$position_size.'px; font-style:'.$position_style.'; color:'.$pos_color.'; " href="'.$customer_link['url'].'" target="'.$customer_link['target'].'" >'.$customer_link['title'].'</a>
                                    </div>
                                </div>
                            </div>

                 ';
    }


    if($testi_box_style == 'testi_style_5') {
                 $add_class = (rand(99,9999));
        $html .= '
        <style>
             .testi5_'. $add_class.'.adts5_style-ten:hover figcaption, .adts5_style-ten.hover figcaption{background:'.$bg_color.';}   .adts5_style-ten .border::before, .adts5_style-ten .border::after, .adts5_style-ten .border div::before, .adts5_style-ten .border div::after{background-color:'.$brdr_color.'!important;}
        </style>
                    <figure class="adts5_style-ten testi5_'. $add_class.'">
                        <img src="'.$image[0].'" alt=""/>
                        <div class="border one">
                            <div></div>
                        </div>
                        <div class="border two">
                            <div></div>
                        </div>
                        <figcaption>
                            <blockquote  style="font-size:'.$desc_size.'px; font-style:'.$desc_style.'; color:'.$descrip_color.'; " >"'.$desc.'"</blockquote>
                            <h5 style="font-size:'.$title_size.'px; font-style:'.$title_style.'; color:'.$ttl_color.'; ">'.$title.'<span style="font-size:'.$position_size.'px; font-style:'.$position_style.'; color:'.$pos_color.'; ">'.$position.'</span></h5>
                        </figcaption><a href="#"></a>
                    </figure>

                 ';
    }

    if($testi_box_style == 'testi_style_6') {
                 $add_class = (rand(99,9999));
        $html .= '
        <style>
             .testi6_'.$add_class.'.adts9_style-twenty blockquote{background:rgba(0, 0, 0, 0) linear-gradient(to bottom, '.$bg_color.', '.$bg_color1.') repeat scroll 0 0!important;}.testi6_'.$add_class.'.adts9_style-twenty .adts9_author {background: rgba(0, 0, 0, 0) linear-gradient(to bottom, '.$bg_color.', '.$bg_color1.') repeat scroll 0 0!important;}
        </style>
                    <figure class="adts9_style-twenty testi6_'.$add_class.'">
                            <blockquote style="font-size:'.$desc_size.'px; font-style:'.$desc_style.'; color:'.$descrip_color.';">'.$desc.'
                                <div class="arrow"></div>
                            </blockquote>
                            <img alt="sample3" src="'.$image[0].'">
                            <div class="adts9_author">
                                <h5 style="font-size:'.$title_size.'px; font-style:'.$title_style.'; color:'.$ttl_color.'; ">'.$title.'<span style="font-size:'.$position_size.'px; font-style:'.$position_style.'; color:'.$pos_color.'; ">- '.$position.'</span></h5>
                            </div>
                        </figure>

                 ';
    }







    return $html;
}

add_shortcode("awavc_testimonial_box", "awavc_testimonial_box_shortcode");