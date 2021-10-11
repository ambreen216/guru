<?php
vc_map(array(
    "name" 			=> __("Advanced Info History", "awavcl"),
    "category" 		=> 'Advanced Elements',
    "description"	=> "",
    "base" 			=> "awavc_info_history",
    "class" 		=> "",
    "icon" 			=> "advc_info_ico_v1",
    "description" => __( "Advance Info Box Full Section With Image", "advc"),
    
    "params" 	=> array(

        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Info History Style", "awavcl"),
            "param_name" => "info_history_type",
            "value" => array(
                __("Advance Info History 1","awavcl") => "info_History_one",
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
            "description" => __("Choose your image icon::60*60", "awavcl"),
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

function awavc_info_history_shortcode($atts, $content = null) {
    extract(shortcode_atts(array(

        'info_history_type' => 'info_history_one',
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
        'font_icon' =>'fa fa-home',
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
    
    
    //$image_url = wp_get_attachment_url( $image, 'full' );
    //$image = aq_resize( $image_url, 296, 289, false ); //resize & crop the image
    //var_dump($image);
    $image = wp_get_attachment_image_src( $image_icon_s, 'full' );
    $html = '';

    if($info_history_type == 'info_history_one') {
        $unq_advc = (rand(99,9999));
        $html .= '<section id="history" class="contain parallax1 " style="background-position: 50% 111px;">
        
            <div class="innerr">
            
                <!-- History Top Icon -->
                <div class="contain-logo br">
                    <i class="fa fa-clock-o "></i>
                </div>
            
                <!-- Header -->
                <div class="header white">
                    company history
                </div>
                
                <!-- Second Header -->
                <div class="page-desc white">
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                </div>
            
                    <ul class="timeline list-unstyled">
                        
                        <!-- History Year -->
                        <li class="year">2013</li>
                        
                        <li class="note animated fadeInRight visible" data-animation="fadeInRight" data-animation-delay="50">
                            <h4>
                                The standard chunk
                            </h4>
                            <p class="desc">
                                This is  version  Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat.
                            </p>
                            <span class="date">
                                20 DEC 2013
                            </span>
                            
                            <span class="arrow fa fa-play"></span>
                            
                        </li>
                        
                        <li class="note animated fadeInLeft visible" data-animation="fadeInLeft" data-animation-delay="50">
                            <h4>
                                There are many variations of passages
                            </h4>
                            <p class="desc">
                                This is Photo version  Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.
                            </p>
                            <span class="date">
                                11 JUN 2013
                            </span>
                            
                            <span class="arrow fa fa-play"></span>
                            
                        </li>
                        
                        <li class="note animated fadeInRight visible" data-animation="fadeInRight" data-animation-delay="100">
                            <h4>
                                Sed ut perspiciatis.
                            </h4>
                            <p class="desc">
                                This is Photo version  Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit a consequat.Photo version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, quis bibendum auctor, nisi elit consequat.
                            </p>
                            <span class="date">
                                15 MAY 2013
                            </span>
                            
                            <span class="arrow fa fa-play"></span>
                            
                        </li>
                        
                        <li class="note animated fadeInLeft visible" data-animation="fadeInLeft" data-animation-delay="100">
                            <h4>
                                Finibus Bonorum et
                            </h4>
                            <p class="desc">
                                This is Photo version  Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat.
                            </p>
                            <span class="date">
                                08 FEB 2013
                            </span>
                            
                            <span class="arrow fa fa-play"></span>
                            
                        </li>
                        
                        <!-- History Year -->
                        <li class="year">2012</li>
                        
                        <li class="note animated fadeInLeft visible" data-animation="fadeInLeft" data-animation-delay="150">
                            <h4>
                                1914 translation by H. Rackham
                            </h4>
                            <p class="desc">
                                This is Photo version  Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                            </p>
                            <span class="date">
                                18 NOV 2012
                            </span>
                            
                            <span class="arrow fa fa-play"></span>
                            
                        </li>
                        
                        <li class="note animated fadeInRight visible" data-animation="fadeInRight" data-animation-delay="150">
                            <h4>
                                At vero eos et accusamus et iusto
                            </h4>
                            <p class="desc">
                                This is Photoshop\'s version  Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                            </p>
                            <span class="date">
                                20 AUG 2012
                            </span>
                            
                            <span class="arrow fa fa-play"></span>
                            
                        </li>
                        
                        <!-- Start icon -->
                        <li class="start fa fa-bookmark"></li>
                        
                        <li class="clear"></li>
                        
                    </ul><!-- End Timeline ul -->
                    
            </div><!-- End inner div -->
            
    </section>
        

        


                        ';

    }



    

    return $html;
}

add_shortcode("awavc_info_history", "awavc_info_history_shortcode");