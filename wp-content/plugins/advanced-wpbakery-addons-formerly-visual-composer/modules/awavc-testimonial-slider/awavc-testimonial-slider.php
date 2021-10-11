<?php
vc_map(array(
    "name"             => "Advanced Testimonial Slider",
    "category"         => 'Advanced Elements',
    "description"    => "What's client says in styles",
    "base"             => "awavc_testimonial_Slider",
    "class"         => "",
    "icon"             => "testi_slider_icon",

    "params"     => array(

        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Testimonial Slider Style:", "awavcl"),
            "param_name" => "testi_sldr_style",
            "value" => array(
                __("style 1","awavcl") => 'testi_style_1',
                __("style 2","awavcl") => 'testi_style_2',
                __("style 3","awavcl") => 'testi_style_3',
                __("style 4","awavcl") => 'testi_style_4',
                __("style 5","awavcl") => 'testi_style_5',
            ),
            "admin_label"        => true,
        ),

        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Column", "awavcl"),
            "param_name" => "column_num",
            "value" => array(
                __("1 Column","awavcl") => '1',
                __("2 Columns","awavcl") => '2',
                __("3 Columns","awavcl") => '3',
                __("4 Columns","awavcl") => '4',
                __("5 Columns","awavcl") => '5',
                __("6 Columns","awavcl") => '6',
            ),
            "dependency"    => array( 'element' => "testi_box_style", 'value' => array('testi_style_5','testi_style_4','testi_style_3') ),
        ),

        array(
            'type' => 'param_group',
            'heading' => __( 'Testimonial Slider Content', 'awavcl' ),
            'param_name' => 'slider_data',
            'params' => array(

                    array(
                        "type" => "attach_image",
                        "heading" => __("Author Image", "awavcl"),
                        "param_name" => "image",
                        "value" => "",
                        "description" => __("Leave empty if dont want image here", "awavcl"),
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __("Title", 'awavcl'),
                        "param_name" => "title",
                        "description" => __("", 'awavcl'),
                        "value" => __("Title", 'awavcl'),
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __("Company Name", 'awavcl'),
                        "param_name" => "company",
                        "description" => __("", 'awavcl'),
                        "value" => __("Company", 'awavcl'),
                        "dependency"    => array( 'element' => "testi_box_style", 'value' => array('testi_style_4') ),
                    ),

                    array(
                        "type" => "textarea",
                        "heading" => __("Comment", 'awavcl'),
                        "param_name" => "desc",
                        "description" => __("", 'awavcl'),
                        "value" => __("There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.", 'awavcl'),
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
                            __("Disabled","awavcl") => 'not_to_show',
                            __("0 Star","awavcl") => '',
                            __("1 Star","awavcl") => 'adts_testimonial__rating--1',
                            __("2 Star","awavcl") => 'adts_testimonial__rating--2',
                            __("3 Star","awavcl") => 'adts_testimonial__rating--3',
                            __("4 Star","awavcl") => 'adts_testimonial__rating--4',
                            __("5 Star","awavcl") => 'adts_testimonial__rating--5',
                        ),
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __("Facebook URL", 'awavcl'),
                        "param_name" => "sc_url_1",
                        "description" => __("", 'awavcl'),
                        "value" => __("", 'awavcl'),
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __("Twitter URL", 'awavcl'),
                        "param_name" => "sc_url_2",
                        "description" => __("", 'awavcl'),
                        "value" => __("", 'awavcl'),
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __("Google Plus URL", 'awavcl'),
                        "param_name" => "sc_url_3",
                        "description" => __("", 'awavcl'),
                        "value" => __("", 'awavcl'),
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __("Linked In URL", 'awavcl'),
                        "param_name" => "sc_url_4",
                        "description" => __("", 'awavcl'),
                        "value" => __("", 'awavcl'),
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __("Instagram In URL", 'awavcl'),
                        "param_name" => "sc_url_5",
                        "description" => __("", 'awavcl'),
                        "value" => __("", 'awavcl'),
                    ),


            ),
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
            "description" => __("Choose Title Font Size as Pixel.", "awavcl"),
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
            "description" => __("Choose Description Font Size as Pixel.", "awavcl"),
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
            "description" => __("Choose Description Font Size as Pixel.", "awavcl"),
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
            "dependency"    => array( 'element' => "testi_sldr_style", 'value' => array('testi_style_2','testi_style_3','testi_style_4') ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Border Color", 'awavcl'),
            "param_name" => "bg_color1",
            "value" => "",
            "group" => __("Colors", 'awavcl'),


        ),

        array(
            "type" => "colorpicker",
            "heading" => __("Folded Part Color", 'awavcl'),
            "param_name" => "bg_color2",
            "value" => "",
            "Description" => __("Colsest to border color will look good", 'awavcl'),
            "group" => __("Colors", 'awavcl'),
            "dependency"    => array( 'element' => "testi_sldr_style", 'value' => array('testi_style_2','testi_style_3','testi_style_4') ),
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
            "param_name" => "qot_clr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Rating Color", 'awavcl'),
            "param_name" => "rating_color",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Icon Background", 'awavcl'),
            "param_name" => "icon_bg",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
            "dependency"    => array( 'element' => "testi_box_style", 'value' => array('testi_style_5','testi_style_4','testi_style_3','testi_style_2') ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Nav Color", 'awavcl'),
            "param_name" => "nav_bg",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
            "dependency"    => array( 'element' => "testi_box_style", 'value' => array('testi_style_5','testi_style_4','testi_style_3','testi_style_2') ),
        ),
        array(
            "type" => "textfield",
            "heading" => esc_attr__("Extra class name", 'awavcl'),
            "param_name" => "el_class",
            "description" => esc_attr__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'awavcl'),
        ),

    )

));

function awavc_testimonial_slider_shortcode($atts, $content = null) {
    extract(shortcode_atts(array(

                //'show_btnnnn' => 'Yes',
                'testi_sldr_style' => 'testi_style_1',
                'slider_data' => '',
                'title_size' => '',
                'title_style' => '',
                'desc_size' => '',
                'desc_style' => '',
                'el_class' =>'',
                'position_size' =>'',
                'position_style' =>'',
                'bg_color' =>'',
                'bg_color1' =>'',
                'bg_color2' =>'',
                'bg_color_hvr' =>'',
                'ttl_color' =>'',
                'descrip_color' =>'',
                'pos_color' =>'',
                'services_lists' =>'',
                'rating_color' =>'',
                'brdr_color' =>'',
                'column_num' =>'',
                'qot_clr' =>'',
                'icon_bg' =>'',
                'nav_bg' =>'',
                'customer_link' =>'',
    ), $atts));

    wp_register_style( 'awavcl.xowl.carousel', plugins_url( '/css/owl.carousel.css',  __FILE__) );
    wp_enqueue_style( 'awavcl.xowl.carousel' );

    wp_register_style( 'awavcl.oxwl.transitions', plugins_url( '/css/owl.transitions.css',  __FILE__) );
    wp_enqueue_style( 'awavcl.oxwl.transitions' );

    wp_register_style( 'awavcl.oxwl.theme', plugins_url( '/css/owl.theme.css',  __FILE__) );
    wp_enqueue_style( 'awavcl.oxwl.theme' );

    wp_register_style( 'awavcl.sxtylets', plugins_url( '/css/style.css',  __FILE__) );
    wp_enqueue_style( 'awavcl.sxtylets' );

    wp_register_script('adv.owl.xcarousel.min', plugins_url('/js/owl.carousel.min.js', __FILE__), array('jquery'));
    wp_enqueue_script('adv.owl.xcarousel.min');

    wp_register_script('adv-main.xjs', plugins_url('/js/main.js', __FILE__), array('jquery'));
    wp_enqueue_script('adv-main.xjs');
    //$image_url = wp_get_attachment_url( $image, 'full' );
    //$image = aq_resize( $image_url, 296, 289, false ); //resize & crop the image
    //var_dump($image);

    $html = '';
    $social_html  = '';
    $position  = '';


    $customer_link   = vc_build_link( $customer_link);

    $slider_contents = vc_param_group_parse_atts($slider_data);


    if($testi_sldr_style == 'testi_style_1') {
                 $add_class = (rand(99,9999));



        $html .= '
        <script>

    jQuery(document).ready(function($) {
          $(".advc-tesimonial_'.$add_class.'").owlCarousel({
              navigation : true, // Show next and prev buttons
              navigationText: [
                   "<i class=\'fa fa-chevron-left\'></i>",
                   "<i class=\'fa fa-chevron-right\'></i>"
                ],

              autoPlay:true,
              pagination: true,
              slideSpeed : 1000,
              paginationSpeed : 1000,
              singleItem:true,
              transitionStyle : "backSlide",

  });
    });
      </script>
        <style>
            .adts_'.$add_class.' .adts_testimonial__rating--1 .fa:nth-of-type(1){color: '.$rating_color.'!important;}
            .adts_'.$add_class.' .adts_testimonial__rating--2 .fa:nth-of-type(1),.adts_'.$add_class.' .adts_testimonial__rating--2 .fa:nth-of-type(2){color: '.$rating_color.'!important;}.adts_'.$add_class.' .adts_testimonial__rating--3 .fa:nth-of-type(1),.adts_'.$add_class.' .adts_testimonial__rating--3 .fa:nth-of-type(2),.adts_'.$add_class.' .adts_testimonial__rating--3 .fa:nth-of-type(3){color: '.$rating_color.'!important;}.adts_'.$add_class.' .adts_testimonial__rating--4 .fa:nth-of-type(1),.adts_'.$add_class.' .adts_testimonial__rating--4 .fa:nth-of-type(2),.adts_'.$add_class.' .adts_testimonial__rating--4 .fa:nth-of-type(3),.adts_'.$add_class.' .adts_testimonial__rating--4 .fa:nth-of-type(4){color: '.$rating_color.'!important;}   .adts_'.$add_class.' .adts_testimonial__rating--5 .fa:nth-of-type(1),.adts_'.$add_class.' .adts_testimonial__rating--5 .fa:nth-of-type(2),.adts_'.$add_class.' .adts_testimonial__rating--5 .fa:nth-of-type(3),.adts_'.$add_class.' .adts_testimonial__rating--5 .fa:nth-of-type(4),.adts_'.$add_class.' .adts_testimonial__rating--5 .fa:nth-of-type(5){color: '.$rating_color.'!important;}  .adts_'.$add_class.'.owl-theme .owl-controls .owl-page span{background-color:'.$nav_bg.';} .adts_'.$add_class.'.owl-theme .owl-controls .owl-buttons div{color:'.$nav_bg.'!important;}
        </style>



            <div id="advc-tesimonial"  class="advc-tesimonial_'.$add_class.' adts_'.$add_class.' adv-owl-carousel owl-theme advc-testimonials-wrapper '.$el_class.'">';

                foreach ($slider_contents as $slider_content) {
                     $image[0] ='';
                     $position  = '';
                     if(!empty($slider_content['image'])){$image_src = $slider_content['image'];}
                     
                     if(!empty($slider_content['image'])){$image = wp_get_attachment_image_src( $image_src, 'full' );}
                     $title = $slider_content['title'];
                     $desc = $slider_content['desc'];
                     if(!empty($slider_content['position'])){$position = $slider_content['position'];}
                     $rating_star = '';
                     if(!empty($slider_content['rating_star'])){$rating_star = $slider_content['rating_star'];}
                     $sc_url_1 ='';
                     $sc_url_2 ='';
                     $sc_url_3 ='';
                     $sc_url_4 ='';
                     $sc_url_5 ='';
                      if(!empty($slider_content['sc_url_1'])){$sc_url_1 = $slider_content['sc_url_1'];}
                      if(!empty($slider_content['sc_url_2'])){$sc_url_2 = $slider_content['sc_url_2'];}
                      if(!empty($slider_content['sc_url_3'])){$sc_url_3 = $slider_content['sc_url_3'];}
                      if(!empty($slider_content['sc_url_4'])){$sc_url_4 = $slider_content['sc_url_4'];}
                      if(!empty($slider_content['sc_url_5'])){$sc_url_5 = $slider_content['sc_url_5'];}


                    $html .= '
                     <div class="item">
                            <i class="fa fa-quote-left" aria-hidden="true" style="color:'.$qot_clr.'!important;"></i><p style="font-size:'.$desc_size.'px; font-style:'.$desc_style.';color:'.$descrip_color.';">'.$desc.'</p>
                            <div class="advc-author"> ';
                                if(!empty($image[0])){
                                      $html .= '<img src="'.$image[0].'" alt="Author image">';
                                    }
                            $html .= '
                                <ul class="advc-author-info">
                                    <li style="font-size:'.$title_size.'px; font-style:'.$title_style.';color:'.$ttl_color.';">'.$title.'</li>';
                                    if(!empty($position)){
                                        $html .= '           <li><span style="font-size:'.$position_size.'px; font-style:'.$position_style.';color:'.$pos_color.';">'.$position.'</span></li>';
                                        }

                            if($rating_star == 'not_to_show'){
                                     $html .= '';
                            }  else{
                                $html .= '<div class="adts_testimonial__rating '.$rating_star.' ">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>';
                            }

                              $html .= '  </ul>

                                <div class="adsc-ico">';
                                    if(!empty($sc_url_1)){$html .= '<a href="'.$sc_url_1.'" target="_blank" style="background:'.$icon_bg.';"><i class="fa fa-facebook"></i></a>';}
                                    if(!empty($sc_url_2)){$html .= '<a href="'.$sc_url_2.'" target="_blank" style="background:'.$icon_bg.';"><i class="fa fa-twitter"></i></a>';}
                                    if(!empty($sc_url_3)){$html .= '<a href="'.$sc_url_3.'" target="_blank" style="background:'.$icon_bg.';"><i class="fa fa-google-plus"></i></a>';}
                                    if(!empty($sc_url_4)){$html .= '<a href="'.$sc_url_4.'" target="_blank" style="background:'.$icon_bg.';"><i class="fa fa-linkedin"></i></a>';}
                                    if(!empty($sc_url_5)){$html .= '<a href="'.$sc_url_5.'" target="_blank" style="background:'.$icon_bg.';"><i class="fa fa-instagram"></i></a>';}

                               $html .= ' </div>
                            </div>
                        </div>
                        ';



        }
        $html .= '</div>
      <div style="clear:both"></div>


      ';



    }


    if($testi_sldr_style == 'testi_style_2') {
                 $add_class = (rand(99,9999));

        $html .= '

        <script>

    jQuery(document).ready(function($) {
          $(".advc-tesimonial3_'.$add_class.'").owlCarousel({
                  autoPlay:true,
                  pagination: true,
                  slideSpeed : 1600,
                  paginationSpeed : 1600,
                  singleItem:true,
                  lazyLoad : false,
                  lazyFollow : true,
                  lazyEffect : "fade"

  });
    });
      </script>
        <style>
            .adts_'.$add_class.' .adts_testimonial__rating--1 .fa:nth-of-type(1){color: '.$rating_color.'!important;}
            .adts_'.$add_class.' .adts_testimonial__rating--2 .fa:nth-of-type(1),.adts_'.$add_class.' .adts_testimonial__rating--2 .fa:nth-of-type(2){color: '.$rating_color.'!important;}.adts_'.$add_class.' .adts_testimonial__rating--3 .fa:nth-of-type(1),.adts_'.$add_class.' .adts_testimonial__rating--3 .fa:nth-of-type(2),.adts_'.$add_class.' .adts_testimonial__rating--3 .fa:nth-of-type(3){color: '.$rating_color.'!important;}.adts_'.$add_class.' .adts_testimonial__rating--4 .fa:nth-of-type(1),.adts_'.$add_class.' .adts_testimonial__rating--4 .fa:nth-of-type(2),.adts_'.$add_class.' .adts_testimonial__rating--4 .fa:nth-of-type(3),.adts_'.$add_class.' .adts_testimonial__rating--4 .fa:nth-of-type(4){color: '.$rating_color.'!important;}   .adts_'.$add_class.' .adts_testimonial__rating--5 .fa:nth-of-type(1),.adts_'.$add_class.' .adts_testimonial__rating--5 .fa:nth-of-type(2),.adts_'.$add_class.' .adts_testimonial__rating--5 .fa:nth-of-type(3),.adts_'.$add_class.' .adts_testimonial__rating--5 .fa:nth-of-type(4),.adts_'.$add_class.' .adts_testimonial__rating--5 .fa:nth-of-type(5){color: '.$rating_color.'!important;}#advc-tesimonial3.adts_'.$add_class.' .right-section{border-color:'.$bg_color1.'!important}#advc-tesimonial3.adts_'.$add_class.' .right-section::after{border-bottom: 50px solid '.$bg_color2.'!important;border-left: 50px solid '.$bg_color1.'!important;} .adts_'.$add_class.'.owl-theme .owl-controls .owl-page span{background-color:'.$nav_bg.'!important;}
        </style>


            <div id="advc-tesimonial3"  class="adts_'.$add_class.' advc-tesimonial3_'.$add_class.' adv-owl-carousel owl-theme advc-testimonials-wrapper '.$el_class.'">

                        ';


                foreach ($slider_contents as $slider_content) {
                     $image[0] ='';
                     $position  = '';
                     if(!empty($slider_content['image'])){$image_src = $slider_content['image'];}
                     if(!empty($slider_content['image'])){$image = wp_get_attachment_image_src( $image_src, 'full' );}
                     $title = $slider_content['title'];
                     $desc = $slider_content['desc'];
                     if(!empty($slider_content['position'])){$position = $slider_content['position'];}
                     $rating_star = '';
                     if(!empty($slider_content['rating_star'])){$rating_star = $slider_content['rating_star'];}
                     $sc_url_1 ='';
                     $sc_url_2 ='';
                     $sc_url_3 ='';
                     $sc_url_4 ='';
                     $sc_url_5 ='';
                      if(!empty($slider_content['sc_url_1'])){$sc_url_1 = $slider_content['sc_url_1'];}
                      if(!empty($slider_content['sc_url_2'])){$sc_url_2 = $slider_content['sc_url_2'];}
                      if(!empty($slider_content['sc_url_3'])){$sc_url_3 = $slider_content['sc_url_3'];}
                      if(!empty($slider_content['sc_url_4'])){$sc_url_4 = $slider_content['sc_url_4'];}
                      if(!empty($slider_content['sc_url_5'])){$sc_url_5 = $slider_content['sc_url_5'];}


                    $html .= '
                    <div class="item">
                        <div class="row">
                         <div class="mg-col-md-4 mg-col-sm-4 mg-col-xs-12">
                          <div class="left-section" style="background:'.$bg_color.';">
                              <div class="author-img">';
                                if(!empty($image[0])){
                                      $html .= '<img src="'.$image[0].'" alt="Author image">';
                                    }
                            $html .= '</div>
                            <ul class="advc-author-info">
                              <li style="font-size:'.$title_size.'px; font-style:'.$title_style.';color:'.$ttl_color.';">'.$title.'</li>';
                                    if(!empty($position)){
                                        $html .= '           <li><span style="font-size:'.$position_size.'px; font-style:'.$position_style.';color:'.$pos_color.';">'.$position.'</span></li>';
                                        }
                                    if($rating_star == 'not_to_show'){
                                     $html .= '';
                            }  else{
                                $html .= '<div class="adts_testimonial__rating '.$rating_star.' ">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>';
                            }
                             $html .= '</ul>
                           <ul class="adsc-ico">';
                                    if(!empty($sc_url_1)){$html .= '<li style="background:'.$icon_bg.';"><a href="'.$sc_url_1.'" target="_blank" ><i class="fa fa-facebook"></i></a></li>';}
                                    if(!empty($sc_url_2)){$html .= '<li style="background:'.$icon_bg.';"><a href="'.$sc_url_2.'" target="_blank" style="background:;"><i class="fa fa-twitter"></i></a></li>';}
                                    if(!empty($sc_url_3)){$html .= '<li style="background:'.$icon_bg.';"><a href="'.$sc_url_3.'" target="_blank" style="background:$;"><i class="fa fa-google-plus"></i></a></li>';}
                                    if(!empty($sc_url_4)){$html .= '<li style="background:'.$icon_bg.';"><a href="'.$sc_url_4.'" target="_blank" style="background:;"><i class="fa fa-linkedin"></i></a></li>';}
                                    if(!empty($sc_url_5)){$html .= '<li style="background:'.$icon_bg.';"><a href="'.$sc_url_5.'" target="_blank" style="background:;"><i class="fa fa-instagram"></i></a></li>';}
                $html .= '</ul>
                          </div>
                          </div>
                        <div class="mg-col-md-8 mg-col-sm-8 mg-col-xs-12">
                          <div class="right-section"><i class="fa fa-quote-left" aria-hidden="true" style="color:'.$qot_clr.'!important;"></i>
                            <p style="font-size:'.$desc_size.'px; font-style:'.$desc_style.';color:'.$descrip_color.';">'.$desc.'</p>
                          </div>
                        </div>
                    </div>
                </div>
                        ';



        }
        $html .= '  </div>
      <div style="clear:both"></div>';

    }


    if($testi_sldr_style == 'testi_style_3') {
                 $add_class = (rand(99,9999));

        $html .= '





        <style>
            .adts_'.$add_class.' .adts_testimonial__rating--1 .fa:nth-of-type(1){color: '.$rating_color.'!important;}
            .adts_'.$add_class.' .adts_testimonial__rating--2 .fa:nth-of-type(1),.adts_'.$add_class.' .adts_testimonial__rating--2 .fa:nth-of-type(2){color: '.$rating_color.'!important;}.adts_'.$add_class.' .adts_testimonial__rating--3 .fa:nth-of-type(1),.adts_'.$add_class.' .adts_testimonial__rating--3 .fa:nth-of-type(2),.adts_'.$add_class.' .adts_testimonial__rating--3 .fa:nth-of-type(3){color: '.$rating_color.'!important;}.adts_'.$add_class.' .adts_testimonial__rating--4 .fa:nth-of-type(1),.adts_'.$add_class.' .adts_testimonial__rating--4 .fa:nth-of-type(2),.adts_'.$add_class.' .adts_testimonial__rating--4 .fa:nth-of-type(3),.adts_'.$add_class.' .adts_testimonial__rating--4 .fa:nth-of-type(4){color: '.$rating_color.'!important;}   .adts_'.$add_class.' .adts_testimonial__rating--5 .fa:nth-of-type(1),.adts_'.$add_class.' .adts_testimonial__rating--5 .fa:nth-of-type(2),.adts_'.$add_class.' .adts_testimonial__rating--5 .fa:nth-of-type(3),.adts_'.$add_class.' .adts_testimonial__rating--5 .fa:nth-of-type(4),.adts_'.$add_class.' .adts_testimonial__rating--5 .fa:nth-of-type(5){color: '.$rating_color.'!important;}#advc-tesimonial5.adts_'.$add_class.' .ad-ts-content{border-color:'.$bg_color1.'!important}#advc-tesimonial5.adts_'.$add_class.' .ad-ts-content::after{border-bottom: 50px solid '.$bg_color2.'!important;border-left: 50px solid '.$bg_color1.'!important;} .adts_'.$add_class.'.owl-theme .owl-controls .owl-page span{background-color:'.$nav_bg.'!important;} .adts_'.$add_class.'.owl-theme .owl-controls .owl-buttons div{color:'.$nav_bg.'!important;}
        </style>

             <script>

    jQuery(document).ready(function($) {
                  $(".advc-tesimonial5_'.$add_class.'").owlCarousel({
                      navigation : true, // Show next and prev buttons
                       navigationText: ["<i class=\'fa fa-angle-left\'></i>", "<i class=\'fa fa-angle-right\'></i>"],
                      items:'.$column_num.',
                      itemsDesktop:[1000,'.$column_num.'],
                      itemsDesktopSmall:[979,'.$column_num.'],
                      itemsTablet:[767,1],
                      autoPlay:true,
                      pagination: true,
                      slideSpeed : 1600,
                      paginationSpeed : 1600,
                      singleItem:false,
                      lazyLoad : false,
                      lazyFollow : true,
                      lazyEffect : "fade"

      });
    });
             </script>

            <div id="advc-tesimonial5"  class="adts_'.$add_class.' advc-tesimonial5_'.$add_class.' adv-owl-carousel owl-theme advc-testimonials-wrapper '.$el_class.'">

                        ';


                foreach ($slider_contents as $slider_content) {
                    $image[0] ='';
                    $position  = '';
                     if(!empty($slider_content['image'])){$image_src = $slider_content['image'];}
                     if(!empty($slider_content['image'])){$image = wp_get_attachment_image_src( $image_src, 'full' );}
                     $title = $slider_content['title'];
                     $desc = $slider_content['desc'];
                     if(!empty($slider_content['position'])){$position = $slider_content['position'];}
                     $rating_star = '';
                     if(!empty($slider_content['rating_star'])){$rating_star = $slider_content['rating_star'];}
                     $sc_url_1 ='';
                     $sc_url_2 ='';
                     $sc_url_3 ='';
                     $sc_url_4 ='';
                     $sc_url_5 ='';
                      if(!empty($slider_content['sc_url_1'])){$sc_url_1 = $slider_content['sc_url_1'];}
                      if(!empty($slider_content['sc_url_2'])){$sc_url_2 = $slider_content['sc_url_2'];}
                      if(!empty($slider_content['sc_url_3'])){$sc_url_3 = $slider_content['sc_url_3'];}
                      if(!empty($slider_content['sc_url_4'])){$sc_url_4 = $slider_content['sc_url_4'];}
                      if(!empty($slider_content['sc_url_5'])){$sc_url_5 = $slider_content['sc_url_5'];}


    $html .= '
        <div class="item">
            <div class="row">
                <div class="mg-col-md-12">
                    <div class="ad-ts-content"  style="background:'.$bg_color.';"><i class="fa fa-quote-left" aria-hidden="true" style="color:'.$qot_clr.'!important;"></i>
                        <p style="font-size:'.$desc_size.'px; font-style:'.$desc_style.';color:'.$descrip_color.';">'.$desc.'</p>
                        <div class="advc-author img-adts">';
                                if(!empty($image[0])){
                                      $html .= '<img src="'.$image[0].'" alt="Author image">';
                                    }
                            $html .= '
                            <ul class="advc-author-info">
                                <li style="font-size:'.$title_size.'px; font-style:'.$title_style.';color:'.$ttl_color.';">'.$title.'</li>';
                                    if(!empty($position)){
                                        $html .= '           <li><span style="font-size:'.$position_size.'px; font-style:'.$position_style.';color:'.$pos_color.';">'.$position.'</span></li>';
                                        }
                                   if($rating_star == 'not_to_show'){
                                     $html .= '';
                            }  else{
                                $html .= '<div class="adts_testimonial__rating '.$rating_star.' ">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>';
                            }
                             $html .= '</ul>


                            <div class="adsc-ico">';
                                    if(!empty($sc_url_1)){$html .= '<a href="'.$sc_url_1.'" target="_blank" style="background:'.$icon_bg.';"><i class="fa fa-facebook"></i></a>';}
                                    if(!empty($sc_url_2)){$html .= '<a href="'.$sc_url_2.'" target="_blank" style="background:'.$icon_bg.';"><i class="fa fa-twitter"></i></a>';}
                                    if(!empty($sc_url_3)){$html .= '<a href="'.$sc_url_3.'" target="_blank" style="background:'.$icon_bg.';"><i class="fa fa-google-plus"></i></a>';}
                                    if(!empty($sc_url_4)){$html .= '<a href="'.$sc_url_4.'" target="_blank" style="background:'.$icon_bg.';"><i class="fa fa-linkedin"></i></a>';}
                                    if(!empty($sc_url_5)){$html .= '<a href="'.$sc_url_5.'" target="_blank" style="background:'.$icon_bg.';"><i class="fa fa-instagram"></i></a>';}

                               $html .= ' </div>
                        </div>
                    </div>
                </div>
              </div>
        </div>
                        ';



        }
        $html .= '  </div>
      <div style="clear:both"></div>';

    }

    if($testi_sldr_style == 'testi_style_4') {
                 $add_class = (rand(99,9999));

        $html .= '
        <style>
            .adts_'.$add_class.' .adts_testimonial__rating--1 .fa:nth-of-type(1){color: '.$rating_color.'!important;}
            .adts_'.$add_class.' .adts_testimonial__rating--2 .fa:nth-of-type(1),.adts_'.$add_class.' .adts_testimonial__rating--2 .fa:nth-of-type(2){color: '.$rating_color.'!important;}.adts_'.$add_class.' .adts_testimonial__rating--3 .fa:nth-of-type(1),.adts_'.$add_class.' .adts_testimonial__rating--3 .fa:nth-of-type(2),.adts_'.$add_class.' .adts_testimonial__rating--3 .fa:nth-of-type(3){color: '.$rating_color.'!important;}.adts_'.$add_class.' .adts_testimonial__rating--4 .fa:nth-of-type(1),.adts_'.$add_class.' .adts_testimonial__rating--4 .fa:nth-of-type(2),.adts_'.$add_class.' .adts_testimonial__rating--4 .fa:nth-of-type(3),.adts_'.$add_class.' .adts_testimonial__rating--4 .fa:nth-of-type(4){color: '.$rating_color.'!important;}   .adts_'.$add_class.' .adts_testimonial__rating--5 .fa:nth-of-type(1),.adts_'.$add_class.' .adts_testimonial__rating--5 .fa:nth-of-type(2),.adts_'.$add_class.' .adts_testimonial__rating--5 .fa:nth-of-type(3),.adts_'.$add_class.' .adts_testimonial__rating--5 .fa:nth-of-type(4),.adts_'.$add_class.' .adts_testimonial__rating--5 .fa:nth-of-type(5){color: '.$rating_color.'!important;}#advc-tesimonial5.adts_'.$add_class.' .ad-ts-content{border-color:'.$bg_color1.'!important}#advc-tesimonial5.adts_'.$add_class.' .ad-ts-content::after{border-bottom: 50px solid '.$bg_color2.'!important;border-left: 50px solid '.$bg_color1.'!important;} .adts_'.$add_class.'.owl-theme .owl-controls .owl-page span{background-color:'.$nav_bg.'!important;} .adts_'.$add_class.'.owl-theme .owl-controls .owl-buttons div{color:'.$nav_bg.'!important;}#ad-ts-slider9.adts_'.$add_class.' .testimonial .description{border: 1px solid '.$bg_color1.'!important;}#ad-ts-slider9.adts_'.$add_class.' .testimonial .description::after{border-color: '.$bg_color1.'!important;}#ad-ts-slider10.adts_'.$add_class.' .testimonial:hover,#ad-ts-slider10.adts_'.$add_class.' .testimonial:hover .image {border-color: '.$bg_color1.'!important;}#ad-ts-slider10_'.$add_class.' .advc_testimonial:hover .ad-ts-content{background-color:'.$bg_color.'!important;}
        </style>
                     <script>

    jQuery(document).ready(function($) {
                  $(".ad-ts-slider10_'.$add_class.'").owlCarousel({
                    items:'.$column_num.',
                    itemsDesktop:[1000,'.$column_num.'],
                    itemsDesktopSmall:[979,'.$column_num.'],
                    itemsTablet:[768,2],
                    itemsMobile:[650,1],
                    pagination:true,
                    navigation:true,
                    navigationText:["",""],
                    autoPlay:true

      });
    });
             </script>


            <div id="ad-ts-slider10"  class="adts_'.$add_class.' ad-ts-slider10_'.$add_class.' adv-owl-carousel '.$el_class.'">

                        ';


                foreach ($slider_contents as $slider_content) {
                     $image[0] ='';
                     $position  = '';
                     if(!empty($slider_content['image'])){$image_src = $slider_content['image'];}
                     if(!empty($slider_content['image'])){$image = wp_get_attachment_image_src( $image_src, 'full' );}
                     $title = $slider_content['title'];
                     $company = $slider_content['company'];
                     $desc = $slider_content['desc'];
                     if(!empty($slider_content['position'])){$position = $slider_content['position'];}
                     $rating_star = '';
                     if(!empty($slider_content['rating_star'])){$rating_star = $slider_content['rating_star'];}
                     $sc_url_1 ='';
                     $sc_url_2 ='';
                     $sc_url_3 ='';
                     $sc_url_4 ='';
                     $sc_url_5 ='';
                      if(!empty($slider_content['sc_url_1'])){$sc_url_1 = $slider_content['sc_url_1'];}
                      if(!empty($slider_content['sc_url_2'])){$sc_url_2 = $slider_content['sc_url_2'];}
                      if(!empty($slider_content['sc_url_3'])){$sc_url_3 = $slider_content['sc_url_3'];}
                      if(!empty($slider_content['sc_url_4'])){$sc_url_4 = $slider_content['sc_url_4'];}
                      if(!empty($slider_content['sc_url_5'])){$sc_url_5 = $slider_content['sc_url_5'];}


    $html .= '
        <div class="advc_testimonial">
                    <div class="image">
                        ';
                                if(!empty($image[0])){
                                      $html .= '<img src="'.$image[0].'" alt="Author image">';
                                    }
                            $html .= '
                    </div>
                    <h3 class="title" style="font-size:'.$title_size.'px; font-style:'.$title_style.';color:'.$ttl_color.';">'.$title.'</h3>
                    <p class="description" style="font-size:'.$desc_size.'px; font-style:'.$desc_style.';color:'.$descrip_color.';">'.$desc.'</p>
                    <div class="ad-ts-content">
                        <div class="ad-ts-profile">
                            <h3 class="name"  style="font-size:'.$title_size.'px; font-style:'.$title_style.';color:'.$ttl_color.';">'.$company.'</h3>
                            ';
                                    if(!empty($position)){
                                        $html .= '<span class="post" style="font-size:'.$position_size.'px; font-style:'.$position_style.';color:'.$pos_color.';">'.$position.'</span>';
                                        }
                                    $html .= '

                        </div>';
                        if($rating_star == 'not_to_show'){
                                     $html .= '';
                            }  else{
                                $html .= '<div class="adts_testimonial__rating '.$rating_star.' ">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>';
                            }
                           $html .= '

                        <ul class="social-links">';
                                    if(!empty($sc_url_1)){$html .= '<li style="background:'.$icon_bg.';"><a href="'.$sc_url_1.'" target="_blank class="fa fa-facebook""></a></li>';}
                                    if(!empty($sc_url_2)){$html .= '<li style="background:'.$icon_bg.';"><a href="'.$sc_url_2.'" target="_blank" class="fa fa-twitter"></a></li>';}
                                    if(!empty($sc_url_3)){$html .= '<li style="background:'.$icon_bg.';"><a href="'.$sc_url_3.'" target="_blank" class="fa fa-google-plus"></a></li>';}
                                    if(!empty($sc_url_4)){$html .= '<li style="background:'.$icon_bg.';"><a href="'.$sc_url_4.'" target="_blank" class="fa fa-linkedin"></a></li>';}
                                    if(!empty($sc_url_5)){$html .= '<li style="background:'.$icon_bg.';"><a href="'.$sc_url_5.'" target="_blank" class="fa fa-instagram"><i ></i></a></li>';}
                $html .= '</ul>
                    </div>
                </div>
                        ';



        }
        $html .= '  </div>
      <div style="clear:both"></div>';

    }

    if($testi_sldr_style == 'testi_style_5') {
                 $add_class = (rand(99,9999));

        $html .= '
        <script>

    jQuery(document).ready(function($) {
                  $(".ad-ts-slider9_'.$add_class.'").owlCarousel({
                    items:'.$column_num.',
                    itemsDesktop:[1000,'.$column_num.'],
                    itemsDesktopSmall:[979,'.$column_num.'],
                    itemsTablet:[768,1],
                    pagination: true,
                    transitionStyle : "goDown",
                    autoPlay:true

      });
    });
             </script>

        <style>
            .adts_'.$add_class.' .adts_testimonial__rating--1 .fa:nth-of-type(1){color: '.$rating_color.'!important;}
            .adts_'.$add_class.' .adts_testimonial__rating--2 .fa:nth-of-type(1),.adts_'.$add_class.' .adts_testimonial__rating--2 .fa:nth-of-type(2){color: '.$rating_color.'!important;}.adts_'.$add_class.' .adts_testimonial__rating--3 .fa:nth-of-type(1),.adts_'.$add_class.' .adts_testimonial__rating--3 .fa:nth-of-type(2),.adts_'.$add_class.' .adts_testimonial__rating--3 .fa:nth-of-type(3){color: '.$rating_color.'!important;}.adts_'.$add_class.' .adts_testimonial__rating--4 .fa:nth-of-type(1),.adts_'.$add_class.' .adts_testimonial__rating--4 .fa:nth-of-type(2),.adts_'.$add_class.' .adts_testimonial__rating--4 .fa:nth-of-type(3),.adts_'.$add_class.' .adts_testimonial__rating--4 .fa:nth-of-type(4){color: '.$rating_color.'!important;}   .adts_'.$add_class.' .adts_testimonial__rating--5 .fa:nth-of-type(1),.adts_'.$add_class.' .adts_testimonial__rating--5 .fa:nth-of-type(2),.adts_'.$add_class.' .adts_testimonial__rating--5 .fa:nth-of-type(3),.adts_'.$add_class.' .adts_testimonial__rating--5 .fa:nth-of-type(4),.adts_'.$add_class.' .adts_testimonial__rating--5 .fa:nth-of-type(5){color: '.$rating_color.'!important;}#advc-tesimonial5.adts_'.$add_class.' .ad-ts-content{border-color:'.$bg_color1.'!important}#advc-tesimonial5.adts_'.$add_class.' .ad-ts-content::after{border-bottom: 50px solid '.$bg_color2.'!important;border-left: 50px solid '.$bg_color1.'!important;} .adts_'.$add_class.'.owl-theme .owl-controls .owl-page span{background-color:'.$nav_bg.'!important;} .adts_'.$add_class.'.owl-theme .owl-controls .owl-buttons div{color:'.$nav_bg.'!important;}#ad-ts-slider9.adts_'.$add_class.' .advc_testimonial .description{border: 1px solid '.$bg_color1.'!important;}#ad-ts-slider9.adts_'.$add_class.' .advc_testimonial .description::after{border-color: '.$bg_color1.'!important;}
        </style>


            <div id="ad-ts-slider9"  class="adts_'.$add_class.' ad-ts-slider9_'.$add_class.' adv-owl-carousel '.$el_class.'">

                        ';


                foreach ($slider_contents as $slider_content) {
                     $image[0] ='';
                     $position  = '';
                     if(!empty($slider_content['image'])){$image_src = $slider_content['image'];}
                     if(!empty($slider_content['image'])){$image = wp_get_attachment_image_src( $image_src, 'full' );}
                     $title = $slider_content['title'];
                     $desc = $slider_content['desc'];
                     if(!empty($slider_content['position'])){$position = $slider_content['position'];}
                     $rating_star = '';
                     if(!empty($slider_content['rating_star'])){$rating_star = $slider_content['rating_star'];}
                     $sc_url_1 ='';
                     $sc_url_2 ='';
                     $sc_url_3 ='';
                     $sc_url_4 ='';
                     $sc_url_5 ='';
                      if(!empty($slider_content['sc_url_1'])){$sc_url_1 = $slider_content['sc_url_1'];}
                      if(!empty($slider_content['sc_url_2'])){$sc_url_2 = $slider_content['sc_url_2'];}
                      if(!empty($slider_content['sc_url_3'])){$sc_url_3 = $slider_content['sc_url_3'];}
                      if(!empty($slider_content['sc_url_4'])){$sc_url_4 = $slider_content['sc_url_4'];}


                      if(!empty($slider_content['sc_url_5'])){$sc_url_5 = $slider_content['sc_url_5'];}
    $html .= '
        <div class="advc_testimonial">
                    <p class="description" style="font-size:'.$desc_size.'px; font-style:'.$desc_style.';color:'.$descrip_color.';">'.$desc.'</p>
                    <div class="image">
                        ';
                                if(!empty($image[0])){
                                      $html .= '<img src="'.$image[0].'" alt="Author image">';
                                    }
                            $html .= '
                    </div>
                    <div class="ad-ts-title">
                        <span style="font-size:'.$title_size.'px; font-style:'.$title_style.';color:'.$ttl_color.';">'.$title.'</span>
                        ';
                                    if(!empty($position)){
                                        $html .= '<small style="font-size:'.$position_size.'px; font-style:'.$position_style.';color:'.$pos_color.';">'.$position.'</small>';
                                        }
                                    if($rating_star == 'not_to_show'){
                                     $html .= '';
                            }  else{
                                $html .= '<div class="adts_testimonial__rating '.$rating_star.' ">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>';
                            }
                            $html .= '

                    </div>
                </div>
                        ';



        }
        $html .= '  </div>
      <div style="clear:both"></div>';

    }

    return $html;
}

add_shortcode("awavc_testimonial_Slider", "awavc_testimonial_slider_shortcode");