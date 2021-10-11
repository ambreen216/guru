<?php
vc_map(array(
    "name" 			=> __("Advanced Info Section", "awavcl"),
    "category" 		=> 'Advanced Elements',
    "description"	=> "",
    "base" 			=> "awavc_info_section",
    "class" 		=> "",
    "icon" 			=> "advc_info_ico_v1",
    "description" => __( "Advance Info Box Full Section With Image", "advc"),
    
    "params" 	=> array(

        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Info Section Style", "awavcl"),
            "param_name" => "info_section_type",
            "value" => array(
                __("Advance Info Section 1","awavcl") => "info_section_one",
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

function awavc_info_section_shortcode($atts, $content = null) {
    extract(shortcode_atts(array(

        'info_section_type' => 'info_section_one',
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

    if($info_section_type == 'info_section_one') {
        $unq_advc = (rand(99,9999));
        $html .= '<section id="featureses" class="container">

        <!-- Features Background -->
        <div class="features-background parallax2 soft-bg-1" ></div>

        <!-- Features Inner -->
        <div class="innerr features">
            <!-- Header -->
            <h1 class="header uppercase white oswald">
                features with mobile
            </h1>
            <!-- Header Strip(s) -->
            <div class="header-strips-one"></div>
            <!-- Header Description -->
            <h2 class="description white">
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in piece of classical. There are many variations of passages of Lorem Ipsum available.
            </h2>
            <!-- Features With Mobile -->
            <ul class="features-mobile clearfix animated fadeIn visible" data-animation="fadeIn" data-animation-delay="200">

                <!-- Feature Box -->
                <li class="feature-box animated fadeIn visible" data-animation="fadeIn" data-animation-delay="200">
                    <!-- Feature Box Icon -->
                    <a class="box-icon">
                        <!-- Icon -->
                        <i class="fa fa-camera-retro"></i>
                    </a>
                    <!-- Feature Texts -->
                    <div class="feature-texts">
                        <!-- Feature Box Header -->
                        <h1 class="box-head white oswald uppercase">
                            analystic
                        </h1>
                        <!-- Feature Box Description -->
                        <p class="box-desc white semibold">
                            There are many variations of passages of the Lorem Ipsum available, but the majority have suffered alteration in some form.
                        </p>
                    </div>
                    <!-- End Feature Texts -->
                </li>
                <!-- End Feature Box -->


                <!-- Feature Box -->
                <li class="feature-box animated fadeIn visible" data-animation="fadeIn" data-animation-delay="200">
                    <!-- Feature Box Icon -->
                    <a class="box-icon">
                        <!-- Icon -->
                        <i class="fa fa-desktop"></i>
                    </a>
                    <!-- Feature Texts -->
                    <div class="feature-texts">
                        <!-- Feature Box Header -->
                        <h1 class="box-head white oswald uppercase">
                            wordpress
                        </h1>
                        <!-- Feature Box Description -->
                        <p class="box-desc white semibold">
                            There are many variations of passages of the Lorem Ipsum available, but the majority have suffered alteration in some form.
                        </p>
                    </div>
                    <!-- End Feature Texts -->
                </li>
                <!-- End Feature Box -->


                <!-- Feature Box -->
                <li class="feature-box animated fadeIn visible" data-animation="fadeIn" data-animation-delay="400">
                    <!-- Feature Box Icon -->
                    <a class="box-icon">
                        <!-- Icon -->
                        <i class="fa fa-gear"></i>
                    </a>
                    <!-- Feature Texts -->
                    <div class="feature-texts">
                        <!-- Feature Box Header -->
                        <h1 class="box-head white oswald uppercase">
                            web design
                        </h1>
                        <!-- Feature Box Description -->
                        <p class="box-desc white semibold">
                            There are many variations of passages of the Lorem Ipsum available, but the majority have suffered alteration in some form.
                        </p>
                    </div>
                    <!-- End Feature Texts -->
                </li>
                <!-- End Feature Box -->


                <!-- Feature Box -->
                <li class="feature-box animated fadeIn visible" data-animation="fadeIn" data-animation-delay="400">
                    <!-- Feature Box Icon -->
                    <a class="box-icon">
                        <!-- Icon -->
                        <i class="fa fa-globe"></i>
                    </a>
                    <!-- Feature Texts -->
                    <div class="feature-texts">
                        <!-- Feature Box Header -->
                        <h1 class="box-head white oswald uppercase">
                            graphic
                        </h1>
                        <!-- Feature Box Description -->
                        <p class="box-desc white semibold">
                            There are many variations of passages of the Lorem Ipsum available, but the majority have suffered alteration in some form.
                        </p>
                    </div>
                    <!-- End Feature Texts -->
                </li>
                <!-- End Feature Box -->
            </ul>
            <!-- End Feature Boxes -->
        </div>
        <!-- End Features Inner -->
    </section>
        

        


                        ';

    }



    

    return $html;
}

add_shortcode("awavc_info_section", "awavc_info_section_shortcode");