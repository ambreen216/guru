<?php
vc_map(array(
    "name" 			=> "Advanced LightBox",
    "category" 		=> 'Advanced Elements',
    "description"	=> "Create a nice gallary",
    "base" 			=> "awavc_lightbox_style",
    "class" 		=> "",
    "icon" 			=> "light_box_icon",

    "params" 	=> array(

        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Light Box Styles", "awavcl"),
            "param_name" => "light_box_style",
            "value" => array(
                __("style 1","awavcl") => 'light_box_1',
                __("style 2","awavcl") => 'light_box_2',
                __("style 3","awavcl") => 'light_box_3',
            ),
            "admin_label"        => true,
        ),
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Column", "awavcl"),
            "param_name" => "column",
            "value" => array(
                __("1 Col","awavcl") => '12',
                __("2 Col","awavcl") => '6',
                __("3 Col","awavcl") => '4',
                __("4 Col","awavcl") => '3',
                __("6 Col","awavcl") => '2',
            ),
        ),
        array(
            "type" => "textfield",
            "heading" => __("Give a Name", 'awavcl'),
            "param_name" => "title",
            "description" => __("", 'awavcl'),
            "value" => __("Title", 'awavcl'),
        ),

        array(
            'type' => 'param_group',
            'heading' => __( 'Gallary', 'awavcl' ),
            'param_name' => 'gallary_content',
            'params' => array(

                    array(
                        "type" => "attach_image",
                        "heading" => __("Image to Show", "awavcl"),
                        "param_name" => "image",
                        "value" => "",
                        "description" => __("", "awavcl"),
                    ),
                    array(
                        "type" => "attach_image",
                        "heading" => __("Image to Open", "awavcl"),
                        "param_name" => "image_1",
                        "value" => "",
                        "description" => __("If you leave it blank Same Image will open", "awavcl"),
                        "dependency"    => array( 'element' => "light_box_style", 'value' => array('light_box_2','light_box_3') ),
                    ),



            ),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Image Height', 'awavcl' ),
            'param_name'       => 'img_hite',
            "value" => 300,
            "min" => 5,
            "max" => 800,
            "step" => 1,
            "unit" => "px",
            "description" => __("Give a specfic Height to your image", "awavcl"),
            "group" => __("Settings", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Overlay Color", 'awavcl'),
            "param_name" => "bg_color",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),

    )

));

function awavc_lightbox_style_shortcode($atts, $content = null) {
    extract(shortcode_atts(array(

                //'show_btnnnn' => 'Yes',
                'light_box_style' => 'light_box_1',
                'gallary_content' => '',
                'title' => '',
                'column' => '',
                'img_hite' => '',
                'bg_color' => '',
    ), $atts));


    wp_register_style( 'awavcl.style-light', plugins_url( '/css/style-light.css',  __FILE__) );
    wp_enqueue_style( 'awavcl.style-light' );

    if($light_box_style == 'light_box_1'){
        wp_register_script('adv-main-light', plugins_url('/js/main.js', __FILE__), array('jquery'));
        wp_enqueue_script('adv-main-light');
    }
    if($light_box_style == 'light_box_3'){
        wp_register_script('adv-picbox-light', plugins_url('/js/adlb-light.js', __FILE__), array('jquery'));
        wp_enqueue_script('adv-picbox-light');
    }
    //$image_url = wp_get_attachment_url( $image, 'full' );
    //$image = aq_resize( $image_url, 296, 289, false ); //resize & crop the image
    //var_dump($image);

    $html = '';
    if($light_box_style == 'light_box_1') {
               $add_class = (rand(99,9999));
    $html .= '<section id="advc_gallery">
        <style>
            .ad_lght_'.$add_class.' .advc_img-overlay {background: '.$bg_color.'!important)} .
        </style>
        <div id="advc_image-gallery">
                 ';
        $gallary_contents = vc_param_group_parse_atts($gallary_content);
        foreach ($gallary_contents as $gallary_image) {
            $image ='';
            if(!empty($gallary_image['image'])){ $image_src = $gallary_image['image'];}
            if(!empty($image_src)){ $image = wp_get_attachment_image_src( $image_src, 'full' );}
            if(!empty($gallary_image['image_1'])){ $image_src_1 = $gallary_image['image_1'];}
            if(!empty($image_src_1)){ $image_1 = wp_get_attachment_image_src( $image_src_1, 'full' );}




        $html .= '
                <div class="mg-col-lg-'.$column.' mg-col-md-'.$column.' mg-col-sm-12 mg-col-xs-12 image">
                   <div class="advc_img-wrapper ad_lght_'.$add_class.'">
                        <a href="'.$image_1[0].'"';

                        $html .= '"><img src="'.$image[0].'" class="img-responsive" style="height:'.$img_hite.'px;"></a>
                        <div class="advc_img-overlay">
                            <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        </div>
                    </div>
                     </div>
                ';
                }
            $html .= '
        </div><!-- End image gallery -->
</section>

         ';



    }

    if($light_box_style == 'light_box_2') {
               $add_class = (rand(99,9999));
    $html .= '
    <style>
        .ad_lght_'.$add_class.' .advc_img-overlay {background: '.$bg_color.'!important)} .adlb_lightbox img{width:auto!important;}
        </style>
                 ';
        $gallary_contents = vc_param_group_parse_atts($gallary_content);
        foreach ($gallary_contents as $gallary_image) {
            if(!empty($gallary_image['image'])){ $image_src = $gallary_image['image'];}
            if(!empty($image_src)){ $image = wp_get_attachment_image_src( $image_src, 'full' );}
            if(!empty($gallary_image['image_1'])){ $image_src_1 = $gallary_image['image_1'];}
            if(!empty($image_src_1)){ $image_1 = wp_get_attachment_image_src( $image_src_1, 'full' );}


                $unq = (rand(99,9999));

        $html .= '

                <div class="text-center">

                     <div class="mg-col-lg-'.$column.' mg-col-md-'.$column.' mg-col-sm-12 mg-col-xs-12">
                         <div id="adlb_content">
                            <a href="#adlb_image1_'.$unq.'" class="adlb_wiggle"><img src="'.$image[0].'" style="height:'.$img_hite.'px;"/></a>
                            <div class="adlb_lightbox short-animate" id="adlb_image1_'.$unq.'">
                                <img class="adlb_long-animate" src="'.$image_1[0].'"/>
                            </div>
                            <div id="adlb_lightbox-controls" class="adlb_short-animate">
                                <a id="adlb_close-lightbox" class="adlb_long-animate" href="#!">Close Lightbox</a>
                            </div>
                        </div>
                     </div>

                 </div>
                ';
                }
            $html .= '


         ';



    }

    if($light_box_style == 'light_box_3') {
               $add_class = (rand(99,9999));
    $html .= '
        <style>
            .ad_lght_'.$add_class.' .advc_img-overlay {background: '.$bg_color.'!important)} .adlb_lightbox img{width:auto!important;}
        </style>
                 ';
        $gallary_contents = vc_param_group_parse_atts($gallary_content);
        foreach ($gallary_contents as $gallary_image) {
            if(!empty($gallary_image['image'])){ $image_src = $gallary_image['image'];}
            if(!empty($image_src)){ $image = wp_get_attachment_image_src( $image_src, 'full' );}


                $unq = (rand(99,9999));

        $html .= '
            <div class="mg-col-lg-'.$column.' mg-col-md-'.$column.' mg-col-sm-12 mg-col-xs-12">
                <p><a rel="lightbox-demo" href="'.$image[0].'" title="'.$title.'"><img style="height:'.$img_hite.'px" alt="" src="'.$image[0].'"  class="alignnone size-thumbnail wp-image-50"></a></p>
            </div>
                ';
                }
            $html .= '


         ';



    }






    return $html;
}

add_shortcode("awavc_lightbox_style", "awavc_lightbox_style_shortcode");