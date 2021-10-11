<?php
vc_map(array(
    "name" 			=> "Advanced Tabs",
    "category" 		=> 'Advanced Elements',
    "description"	=> "Animated Tabs",
    "base" 			=> "awavc_tabs_style",
    "class" 		=> "",
    "icon" 			=> "advc_tab_ico",

    "params" 	=> array(


        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Tab Box", "awavcl"),
            "param_name" => "tab_box",
            "description" => __("Ps: In a page you can use one tab section...We are on fixing this bug ASAP . then you will use more then one tsb box", "awavcl"),
            "value" => array(
                __("Tab 1","awavcl") => 'tab_box_1',
                __("Tab 2","awavcl") => 'tab_box_2',
            ),
            "admin_label"        => true,
        ),

        array(
            'type' => 'param_group',
            'heading' => __( 'Tab Contents', 'awavcl' ),
            'param_name' => 'tab_contents',
            'params' => array(

                    array(
                        "type" => "textfield",
                        "heading" => __("Tab Lable (Left)", "awavcl"),
                        "param_name" => "tab_lbl",
                        "value" => "Lable",
                        "description" => __("Title", "awavcl"),
                    ),
                    array(
                        "type" => "iconpicker",
                        "heading" => __("Tab Header Icon", "awavcl"),
                        "param_name" => "icon",
                        "value" => "fa fa-bus",
                        "description" => __("", "awavcl"),
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __("Tab Content Title (Right)", "awavcl"),
                        "param_name" => "title",
                        "value" => "Title",
                        "description" => __("Title", "awavcl"),
                    ),
                    array(
                        "type" => "textarea",
                        "heading" => __("Content (Right)", "awavcl"),
                        "param_name" => "content",
                        "value" => __( "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", "awavcl" ),

                    ),
                    array(
                        "type" => "dropdown",
                        "class" => "",
                        "heading" => __("Image Enabled (Right)", "awavcl"),
                        "param_name" => "rt_img",
                        "description" => __("Ps: In a page you can use one tab section...We are on fixing this bug ASAP . then you will use more then one tsb box", "awavcl"),
                        "value" => array(
                            __("Yes","awavcl") => '8',
                            __("No","awavcl") => '12',
                        ),
                    ),
                    array(
                        "type" => "attach_image",
                        "heading" => __("Image", "awavcl"),
                        "param_name" => "advc_image",
                        "value" => "",
                        "description" => __("Select image 250*500", "awavcl"),
                        "group" => __("Image", "awavcl")
                    ),
                    
                    array(
                        "type" => "dropdown",
                        "class" => "",
                        "heading" => __("Button Enabled", "awavcl"),
                        "param_name" => "show_button",
                        "description" => __("Ps: In a page you can use one tab section...We are on fixing this bug ASAP . then you will use more then one tsb box", "awavcl"),
                        "value" => array( 
                            __("Yes","awavcl") => 'yes',
                            __("No","awavcl") => 'no',
                        ),
                    ),

                    array(
                        "type" => "vc_link",
                        "class" => "",
                        "heading" => __("Add Button Text and url", "awavcl"),
                        "param_name" => "link",
                        "value" => "",
                        "description" => __("Add a custom link or select existing page. You can remove existing link as well.", "awavcl"),
                        'dependency' => array(
                            'element' => 'show_button',
                            'value' => 'yes',
                        ),
                    ),



            ),
        ),

        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Lable Font Size', 'awavcl' ),
            'param_name'       => 'lable_size',
            "value" => 20,
            "min" => 5,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "description" => __("Choose Lable Font Size as Pixel. Default is 26px", "awavcl"),
            "group" => __("Settings", 'awavcl'),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Title Font Size', 'awavcl' ),
            'param_name'       => 'ttl_size',
            "value" => 32,
            "min" => 5,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "description" => __("Choose Title Font Size as Pixel. Default is 26px", "awavcl"),
            "group" => __("Settings", 'awavcl'),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Text Font Size', 'awavcl' ),
            'param_name'       => 'content_size',
            "value" => 14,
            "min" => 5,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "description" => __("Choose Text Font Size as Pixel. Default is 26px", "awavcl"),
            "group" => __("Settings", 'awavcl'),
        ),

        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Content Font style", "awavcl"),
            "param_name" => "content_style",
            "value" => array(
                __("Normal","awavcl") => "",
                __("Italic","awavcl") => "italic",
            ),
            "group" => __("Settings", 'awavcl'),
        ),

        array(
            "type" => "colorpicker",
            "heading" => __("Lable Background Color", 'awavcl'),
            "param_name" => "bg_clr",
            "value" => "",
            "group" => __("Lable/Icon Colors", 'awavcl'),
            "description" => __("Choose a background When not cliked", 'awavcl'),
            'dependency' => array(
                            'element' => 'tab_box',
                            'value' => 'tab_box_1',
                        ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Lable Background Color", 'awavcl'),
            "param_name" => "bg_clr1",
            "value" => "",
            "group" => __("Lable/Icon Colors", 'awavcl'),
            "description" => __("Choose a background When not cliked", 'awavcl'),
            'dependency' => array(
                            'element' => 'tab_box',
                            'value' => 'tab_box_2',
                        ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Lable Color Gradients 1", 'awavcl'),
            "param_name" => "lbl_gr1",
            "value" => "",
            "group" => __("Lable/Icon Colors", 'awavcl'),
            "description" => __("Get Color Gradientsr idea from <a href=\"https://digitalsynopsis.com/design/beautiful-color-ui-gradients-backgrounds\" target=\"_blank\">HERE</a>  ", 'awavcl'),
            'dependency' => array(
                            'element' => 'tab_box',
                            'value' => 'tab_box_2',
                        ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Lable Color Gradientsr 2", 'awavcl'),
            "param_name" => "lbl_gr2",
            "value" => "",
            "group" => __("Lable/Icon Colors", 'awavcl'),
            "description" => __("Get Color Gradientsr idea from <a href=\"https://digitalsynopsis.com/design/beautiful-color-ui-gradients-backgrounds\" target=\"_blank\">HERE</a>  ", 'awavcl'),
            'dependency' => array(
                            'element' => 'tab_box',
                            'value' => 'tab_box_2',
                        ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Lable Back on Hover/Focus", 'awavcl'),
            "param_name" => "lable_bg",
            "value" => "",
            "group" => __("Lable/Icon Colors", 'awavcl'),
            "description" => __("After click color", 'awavcl'),
            'dependency' => array(
                            'element' => 'tab_box',
                            'value' => 'tab_box_1',
                        ),
        ),

        array(
            "type" => "colorpicker",
            "heading" => __("Lable Color", 'awavcl'),
            "param_name" => "lable_clr",
            "value" => "",
            "group" => __("Lable/Icon Colors", 'awavcl'),
            "description" => __("Choose a lable text color", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Icon", 'awavcl'),
            "param_name" => "icon_clr",
            "value" => "",
            "group" => __("Lable/Icon Colors", 'awavcl'),
            "description" => __("Choose a lable icon color", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Lable Text And Icon Color on Hover/Focus", 'awavcl'),
            "param_name" => "clr_hvr",
            "value" => "",
            "group" => __("Lable/Icon Colors", 'awavcl'),
        ),


        array(
            "type" => "colorpicker",
            "heading" => __("Content Box Background Color", 'awavcl'),
            "param_name" => "tab_bg_clr",
            "value" => "",
            "group" => __("Content Colors", 'awavcl'),
            "description" => __("Choose ontent box color default #fff", 'awavcl'),
            'dependency' => array(
                            'element' => 'tab_box',
                            'value' => 'tab_box_2',
                        ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Title", 'awavcl'),
            "param_name" => "ttl_clr",
            "value" => "",
            "group" => __("Content Colors", 'awavcl'),
            "description" => __("Select a color for content heading default:#000000", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Content", 'awavcl'),
            "param_name" => "content_clr",
            "value" => "",
            "group" => __("Content Colors", 'awavcl'),
            "description" => __("Select a color for content description default:#000000", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Underline", 'awavcl'),
            "param_name" => "brdr_clr",
            "value" => "",
            "group" => __("Content Colors", 'awavcl'),
            "description" => __("Heading underline color", 'awavcl'),
        ),

        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Font Size', 'awavcl' ),
            'param_name'       => 'btntx_size',
            "value" => 20,
            "min" => 5,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "description" => __("Choose button Font Size as Pixel. Default is 26px", "awavcl"),
            "group" => __("Button", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Text", 'awavcl'),
            "param_name" => "btntx_clr",
            "value" => "",
            "group" => __("Button", 'awavcl'),
            "description" => __("Choose button text color", 'awavcl'),
        ),

        array(
            "type" => "colorpicker",
            "heading" => __("Text Hover", 'awavcl'),
            "param_name" => "btntx_clr_hv",
            "value" => "",
            "group" => __("Button", 'awavcl'),
            "description" => __("Choose button text color after hover", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Background", 'awavcl'),
            "param_name" => "btntx_bg",
            "value" => "",
            "group" => __("Button", 'awavcl'),
            "description" => __("Choose button BG", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Background Hover", 'awavcl'),
            "param_name" => "btntx_bg_hv",
            "value" => "",
            "group" => __("Button", 'awavcl'),
            "description" => __("Choose button BG color after hover", 'awavcl'),
        ),

        array(
            "type" => "textfield",
            "heading" => esc_attr__("Extra class name", 'awavcl'),
            "param_name" => "el_class",
            "description" => esc_attr__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'awavcl'),
        ),

    )

));

function awavc_tabs_style_shortcode($atts, $content = null) {
    extract(shortcode_atts(array(

                //'show_btnnnn' => 'Yes',
                'tab_box' => 'tab_box_1',
                'tab_contents' => '',
                'lable_size' => '',
                'ttl_size' => '',
                'content_size' => '',
                'content_style' => '',
                'bg_clr' => '#00203FFF',
                'bg_clr1' => '#fff',
                'lbl_gr1' => '#00203FFF',
                'lbl_gr2' => '#ADEFD1FF',
                'tab_bg_clr' => '#fcfcfc',
                'lable_bg' => '#ADEFD1FF',
                'lable_clr' => '',
                'ttl_clr' => '',
                'icon_clr' => '',
                'content_clr' => '',
                'content_clr' => '',
                'clr_hvr' => '',
                'brdr_clr' => '',
                'btntx_size' => '',
                'btntx_clr' => '',
                'btntx_clr_hv' => '',
                'btntx_bg' => '',
                'btntx_bg_hv' => '',
                'el_class' => '',
    ), $atts));
 

    wp_register_style( 'awavcl-bootstrapp.min', plugins_url( '/css/awavcl-bootstrap.min.css',  __FILE__) );
    wp_enqueue_style( 'awavcl-bootstrapp.min' );

    wp_register_style( 'awavcl-normalise', plugins_url( '/css/awavcl-normalise.css',  __FILE__) );
    wp_enqueue_style( 'awavcl-normalise' );

    wp_register_style( 'awavcl-style-tab', plugins_url( '/css/awavcl-style-tab.css',  __FILE__) );
    wp_enqueue_style( 'awavcl-style-tab' );


    wp_register_script('adv-bootstrap.min.js', plugins_url('/js/adv-bootstrap.min.js', __FILE__), array('jquery'));
    wp_enqueue_script('adv-bootstrap.min.js');


    $tab_contents = vc_param_group_parse_atts($tab_contents);
    $image_br = $tab_contents['advc_image'];

    $image = wp_get_attachment_image_src( $image_br, 'full' );


    $html = '';

    if($tab_box == 'tab_box_1') {
               $q = rand(99,99999);
    $html .= '
                         <style>#adv-finity.advctab_'.$q.' .adv-finity_tabs_part .adv-finity_tabs_right_part .adv-finity_tab_content .adv-finity_tab_content_head .title:after{background-color:'.$brdr_clr.'!important;}#adv-finity.advctab_'.$q.' .adv-finity_tabs_part .adv-finity_tabs_left_part .nav-tabs.nav-tabs-neutral > .nav-item > .nav-link.active{background-color: '.$lable_bg.'!important;}#adv-finity.advctab_'.$q.' .adv-finity_tabs_part .adv-finity_tabs_left_part .nav-item .nav-link{background-color: '.$bg_clr.'!important;}#adv-finity.advctab_'.$q.' .adv-finity_tabs_part .adv-finity_tabs_left_part .nav-item .nav-link.active span,#adv-finity.advctab_'.$q.' .adv-finity_tabs_part .adv-finity_tabs_left_part .nav-item  .nav-link.active p{color: '.$clr_hvr.'!important;}#adv-finity.advctab_'.$q.' .adv-finity_tabs_part .adv-finity_tabs_left_part .nav-tabs .nav-item .nav-link::after {border-left: 10px solid '.$bg_clr.';}#adv-finity .adv-finity_tabs_part .adv-finity_tabs_left_part .nav-tabs.nav-tabs-neutral > .nav-item > .nav-link.active::after {border-left-color:'.$lable_bg.'!important;;}#adv-finity.advctab_'.$q.' .adv-finity_tabs_part .adv-finity_tabs_right_part .adv-finity_tab_content_btn a:hover{color:'.$btntx_clr_hv.'!important;background-color:'.$btntx_bg_hv.'!important;}</style>


           <div class="row advctab_'.$q.' '.$el_class.'" id="adv-finity" >
                <div class="container" >
                    <div class="adv-finity_tabs_part">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="adv-finity_tabs_left_part">
                                <ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist">';

                                    $i = 1;
                                    foreach($tab_contents as $tab_content){
                                        $qc = rand(99,99999);

                                        if(!empty($tab_content['tab_lbl'])){$tab_lable = $tab_content['tab_lbl'];}
                                        if(!empty($tab_content['icon'])){$tab_icon = $tab_content['icon'];}


                                     $html .= '<li class="nav-item">
                                        <a id="ad-link" class="nav-link" data-toggle="tab" data-target="#advpane'.$i.'e'.$q.'" role="tab">
                                            <span class="'.$tab_icon.'" style="font-size:'.$lable_size.'px;color:'.$icon_clr.';"></span>
                                            <p style="font-size:'.$lable_size.'px;color:'.$lable_clr.';">'.$tab_lable.'</p>
                                        </a>
                                    </li>';

                                    $i++;


                                    }




                                $html .= '</ul>
                            </div>

                            <div class="adv-finity_tabs_right_part">
                                <div class="tab-content ">';

                                $i = 1;
                                    foreach($tab_contents as $tab_content){

                                        if(!empty($tab_content['title'])){$tab_title = $tab_content['title'];}
                                        if(!empty($tab_content['content'])){$content = $tab_content['content'];}
                                        if(!empty($tab_content['rt_img'])){$rt_img = $tab_content['rt_img'];}
                                        if(!empty($tab_content['advc_image'])){$image_src = $tab_content['advc_image'];}
                                        if(!empty($tab_content['advc_image'])){$image = wp_get_attachment_image_src( $image_src, 'full' );}
                                        $show_button = $tab_content['show_button'];

                                        $tab_link = $tab_content['link'];
                                        $link   = vc_build_link( $tab_link );

                                        $html .= '
                                            <div class="tab-pane " id="advpane'.$i.'e'.$q.'" role="tabpanel">
                                                <div class="adv-finity_tab_content">
                                                    <div class="d-flex flex-wrap">
                                                        <div class="col-md-'.$rt_img.'">
                                                            <div class="adv-finity_tab_content_head">
                                                                <h2 class="title" style="font-size:'.$ttl_size.'px;color:'.$ttl_clr.';">'.$tab_title.'</h2>
                                                            </div>
                                                            <div class="adv-finity_tab_content_description">
                                                            	<p style="font-size:'.$content_size.'px;color:'.$content_clr.';font-style:'.$content_style.';">'.$content.'</p>
                                                            </div>';

                                                        if($show_button == 'yes') {
                                                             $html .= '
                                                             <div class="adv-finity_tab_content_btn">
                                                            	<a href="'.$link['url'].'" target="'.$link['target'].'" style="font-size:'.$btntx_size.'px;color:'.$btntx_clr.';background-color:'.$btntx_bg.';transition:all .3s ease-in-out .1s;">'.$link['title'].'</a>
                                                            </div>';
                                                            }
                                                             $html .= '
                                                        </div>';
                                                        if (!empty($image[0])){ $html .= '<div class="col-md-4">
                                                            <div class="adv-finity_tab_content_img">
                                                                <figure>
                                                                    <img src="'.$image[0].'" alt="">
                                                                </figure>
                                                            </div>
                                                        </div>';}
                                                        $html .= '
                                                    </div>
                                                </div>
                                            </div>';
                                            $i++;
                                    }

                    $html .= '</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


             <script type="text/javascript">
                        jQuery(document).ready(function(){
                          jQuery(".advctab_'.$q.' .nav-link:first").addClass("active");
                          jQuery(".advctab_'.$q.' .tab-pane:first").addClass("active");

                    });

            </script>



        ';



    }

    if($tab_box == 'tab_box_2') {
               $q = rand(99,99999);
    $html .= '
                         <style>#gradient.advctab2_'.$q.' .gradient_tabs_section .gradient_tabs_content .gradient_tabs_left_part .nav-tabs .nav-link {    background-color: '.$bg_clr1.';}.advctab2_'.$q.' .gradient_tabs_left_part .nav-tabs .nav-link.active{background: -moz-linear-gradient(left, '.$lbl_gr1.' 1%, '.$lbl_gr2.' 100%);background: -webkit-linear-gradient(left, '.$lbl_gr1.' 1%,'.$lbl_gr2.' 100%);background: linear-gradient(to right, '.$lbl_gr1.' 1%,'.$lbl_gr2.' 100%);}#gradient.advctab2_'.$q.' .gradient_tabs_section .gradient_tabs_content .gradient_tabs_right_part{background-color: '.$tab_bg_clr.'}.advctab2_'.$q.' .gradient_tabs_left_part .nav-tabs .nav-link.active p,.advctab2_'.$q.' .gradient_tabs_left_part .nav-tabs .nav-link.active span{color:'.$clr_hvr.';}</style>


           <div class="row advctab2_'.$q.'" id="gradient">
                <div class="container">
                    <div class="gradient_tabs_section">
                        <div class="tabs_title">
                            
                        </div>
                        <div class="gradient_tabs_content">
                            <div class="d-flex flex-wrap justify-content-between">
                                <div class="gradient_tabs_left_part">
                                    <ul class="nav nav-tabs nav-tabs-neutral d-flex justify-content-between" role="tablist">';

                                    $i = 1;
                                    foreach($tab_contents as $tab_content){
                                        $qc = rand(99,99999);

                                        if(!empty($tab_content['tab_lbl'])){$tab_lable = $tab_content['tab_lbl'];}
                                        if(!empty($tab_content['icon'])){$tab_icon = $tab_content['icon'];}


                                     $html .= '<li class="nav-item">
                                            <a class="nav-link  d-flex flex-wrap align-items-center" data-toggle="tab" href="#advpane2'.$i.'e'.$q.'" role="tab">
                                                <span class="'.$tab_icon.'" style="font-size:'.$lable_size.'px;color:'.$icon_clr.';"></span>
                                                <p style="font-size:'.$lable_size.'px;color:'.$lable_clr.';">'.$tab_lable.'</p>
                                            </a>
                                        </li>';
                                    $i++;
                                    }
                                    $html .= '
                                    </ul>
                                </div>
                                <div class="gradient_tabs_right_part">
                                    <div class="tab-content">';

                                $i = 1;
                                    foreach($tab_contents as $tab_content){

                                        if(!empty($tab_content['title'])){$tab_title = $tab_content['title'];}
                                        if(!empty($tab_content['content'])){$content = $tab_content['content'];}
                                        if(!empty($tab_content['advc_image'])){$image_src = $tab_content['advc_image'];}
                                        if(!empty($tab_content['advc_image'])){$image = wp_get_attachment_image_src( $image_src, 'full' );}
                                        $show_button = $tab_content['show_button'];

                                        $tab_link = $tab_content['link'];
                                        $link   = vc_build_link( $tab_link );

                                        $html .= '<div class="tab-pane " id="advpane2'.$i.'e'.$q.'" role="tabpanel">
                                            <div class="gradient_tabs_right_content">
                                                <div class="gradient_right_tabs_heading">
                                                    <h2 class="title" style="font-size:'.$ttl_size.'px;color:'.$ttl_clr.';">'.$tab_title.'</h2>
                                                </div>
                                                <div class="gradient_right_tabs_description">
                                                    <p class="description" style="font-size:'.$content_size.'px;color:'.$content_clr.';font-style:'.$content_style.';">'.$content.'</p>
                                                </div>
                                                ';

                                                if($show_button == 'yes') {
                                                     $html .= '
                                                     <div class="adv-finity_tab_content_btn">
                                                    	<a href="'.$link['url'].'" target="'.$link['target'].'" style="font-size:'.$btntx_size.'px;color:'.$btntx_clr.';background-color:'.$btntx_bg.';transition:all .3s ease-in-out .1s;">'.$link['title'].'</a>
                                                    </div>';
                                                    }
                                                     $html .= '
                                            </div>
                                        </div>
                                    ';
                                            $i++;
                                    }

                    $html .= '</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


             <script type="text/javascript">
                        jQuery(document).ready(function(){
                          jQuery(".advctab2_'.$q.' .nav-link:first").addClass("active");
                          jQuery(".advctab2_'.$q.' .tab-pane:first").addClass("active");

                    });

            </script>



        ';



    }





    return $html;
}

add_shortcode("awavc_tabs_style", "awavc_tabs_style_shortcode");