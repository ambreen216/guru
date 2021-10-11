<?php
vc_map(array(
    "name"             => "Advanced Pricing List",
    "category"         => 'Advanced Elements',
    "description"    => "Modern Pricing Table",
    "base"             => "awavc_pricing_list",
    "class"         => "",
    "icon"             => "price_list_ico",

    "params"     => array(

        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Styles", "awavcl"),
            "param_name" => "pricing_style",
            "value" => array(
                __("Style 1","awavcl") => 'pricing_1',
                __("Style 2","awavcl") => 'pricing_2',
                __("Style 3","awavcl") => 'pricing_3',
                __("Style 4","awavcl") => 'pricing_4',
                __("Style 5","awavcl") => 'pricing_5',
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
            "type" => "textfield",
            "heading" => __("Price", 'awavcl'),
            "param_name" => "price",
            "description" => __("", 'awavcl'),
            "value" => __("69", 'awavcl'),
        ),
        array(
            "type" => "iconpicker",
            "heading" => __("Money Sign", "awavcl"),
            "param_name" => "font_icon",
            "value" => "fa fa-usd",
        ),
        array(
            "type" => "textfield",
            "heading" => __("Plan for", 'awavcl'),
            "param_name" => "time_frame",
            "description" => __("", 'awavcl'),
            "value" => __("monthly", 'awavcl'),
        ),
        array(
            'type' => 'param_group',
            'heading' => __( 'Dertails of Package', 'awavcl' ),
            'param_name' => 'facilities_lists',
            "dependency"    => array( 'element' => "pricing_style", 'value' => array('pricing_1','pricing_3') ),
            'params' => array(


                    array(
                        "type" => "checkbox",
                        "class" => "",
                        "heading" => __( "Do You Want Text With Link Before Plan Facility Text?", "awavcl" ),
                        "param_name" => "link_yes",
                        "value" => array(
                            __("Yes","awavcl")=>'yes',
                                        ),
                        "description" => __( "", "awavcl" )
                    ),
                    array(
                        "type" => "vc_link",
                        "heading" => __("Linked Text", 'awavcl'),
                        "param_name" => "linked_text",
                        "description" => __("Put your Title and url here{it will  be the first part of the full text}", 'awavcl'),
                        "value" => __("monthly", 'awavcl'),
                        "dependency"    => array( 'element' => "link_yes", 'value' => 'yes', ),
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __("Package Contains", 'awavcl'),
                        "param_name" => "fc_text",
                        "description" => __("", 'awavcl'),
                        "value" => __("Have A Button", 'awavcl'),
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __("Tooltip/Hover Text", 'awavcl'),
                        "param_name" => "tooltip_txt",
                        "description" => __("", 'awavcl'),
                        "value" => __("Lorem ipsum dolor sit amet, ei duis putent argumentum eam.", 'awavcl'),
                    ),

            ),
        ),
        array(
            'type' => 'param_group',
            'heading' => __( 'Dertails of Package', 'awavcl' ),
            'param_name' => 'at_lists',
            "dependency"    => array( 'element' => "pricing_style", 'value' => array('pricing_2',) ),
            'params' => array(


                    array(
                        "type" => "checkbox",
                        "class" => "",
                        "heading" => __( "Do You Want Text With Link Before Plan Facility Text?", "awavcl" ),
                        "param_name" => "link_yes_s",
                        "value" => array(
                            __("Yes","awavcl")=>'y',
                                        ),
                        "description" => __( "", "awavcl" )
                    ),
                    array(
                        "type" => "vc_link",
                        "heading" => __("Linked Text", 'awavcl'),
                        "param_name" => "linked_text_s",
                        "description" => __("Put your Title and url here{it will  be the first part of the full text}", 'awavcl'),
                        "value" => __("monthly", 'awavcl'),
                        "dependency"    => array( 'element' => "link_yes_s", 'value' => 'y', ),
                    ),

            ),
        ),

        array(
            'type' => 'param_group',
            'heading' => __( 'Dertails of Package', 'awavcl' ),
            'param_name' => 'sol_lists',
            "dependency"    => array( 'element' => "pricing_style", 'value' => array('pricing_4','pricing_5') ),
            'params' => array(


                    array(
                        "type" => "checkbox",
                        "class" => "",
                        "heading" => __( "Do You Want Text With Link Before Plan Facility Text?", "awavcl" ),
                        "param_name" => "link_yes_y",
                        "value" => array(
                            __("Yes","awavcl")=>'y',
                                        ),
                        "description" => __( "", "awavcl" )
                    ),
                    array(
                        "type" => "vc_link",
                        "heading" => __("Linked Text", 'awavcl'),
                        "param_name" => "linked_text_y",
                        "description" => __("Put your Title and url here{it will  be the first part of the full text}", 'awavcl'),
                        "value" => __("monthly", 'awavcl'),
                        "dependency"    => array( 'element' => "link_yes_y", 'value' => 'y', ),
                    ),
                    array(
                        "type" => "textfield",
                        "heading" => __("Package Contains", 'awavcl'),
                        "param_name" => "fc_text_y",
                        "description" => __("", 'awavcl'),
                        "value" => __("Lorem Ipsum", 'awavcl'),
                    ),
                    array(
                        "type" => "dropdown",
                        "class" => "",
                        "heading" => __( "This Facility ", "awavcl" ),
                        "param_name" => "in_or_out",
                        "value" => array(
                            __("Included","awavcl")=>'fa-check',
                            __("Excluded","awavcl")=>'fa-close',
                                        ),
                        "description" => __( "", "awavcl" )
                    ),

            ),
        ),

        array(
            "type" => "vc_link",
            "heading" => __("Button Text And Title", 'awavcl'),
            "param_name" => "btn_text",
            "description" => __("Put the url and title", 'awavcl'),
            "value" => array(
                'title'   => 'Button',
                'url'   => '#',
                ),
            "group" => __("Button", 'awavcl'),

        ),

        array(
            "type" => "textfield",
            "heading" => __("Promotional Text", 'awavcl'),
            "param_name" => "promo_text",
            "description" => __("If you dont want to put a promotional text keep it blank", 'awavcl'),
            "value" => __("Best Seller", 'awavcl'),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Title Font Size', 'awavcl' ),
            'param_name'       => 'ttl_size',
            "value" => 42,
            "min" => 5,
            "max" => 110,
            "step" => 1,
            "unit" => "px",
            "description" => __("", "awavcl"),
            "group" => __("Settings", 'awavcl'),
            "dependency"    => array( 'element' => "pricing_style", 'value' => array('pricing_1','pricing_4') ),
        ),

        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Title Font Size', 'awavcl' ),
            'param_name'       => 'ttl_size_s',
            "value" => 35,
            "min" => 5,
            "max" => 110,
            "step" => 1,
            "unit" => "px",
            "description" => __("", "awavcl"),
            "group" => __("Settings", 'awavcl'),
            "dependency"    => array( 'element' => "pricing_style", 'value' => array('pricing_2','pricing_3') ),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Price Size', 'awavcl' ),
            'param_name'       => 'price_size',
            "value" => 60,
            "min" => 5,
            "max" => 110,
            "step" => 1,
            "unit" => "px",
            "description" => __("", "awavcl"),
            "group" => __("Settings", 'awavcl'),
            "dependency"    => array( 'element' => "pricing_style", 'value' => array('pricing_1','pricing_4') ),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Price Size', 'awavcl' ),
            'param_name'       => 'price_size_s',
            "value" => 22,
            "min" => 5,
            "max" => 110,
            "step" => 1,
            "unit" => "px",
            "description" => __("", "awavcl"),
            "group" => __("Settings", 'awavcl'),
            "dependency"    => array( 'element' => "pricing_style", 'value' => array('pricing_2','pricing_3') ),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Facility Text Size', 'awavcl' ),
            'param_name'       => 'fc_txt_size',
            "value" => 18,
            "min" => 5,
            "max" => 110,
            "step" => 1,
            "unit" => "px",
            "description" => __("", "awavcl"),
            "group" => __("Settings", 'awavcl'),
        ),
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Facility Text Style", "awavcl"),
            "param_name" => "fc_font_style",
            "value" => array(
                __("Normal","awavcl") => '',
                __("Italic","awavcl") => 'italic',
            ),
            "group" => __("Settings", 'awavcl'),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Button Text Size', 'awavcl' ),
            'param_name'       => 'btn_txt_size',
            "value" =>22,
            "min" => 5,
            "max" => 110,
            "step" => 1,
            "unit" => "px",
            "description" => __("", "awavcl"),
            "group" => __("Button", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Top Background", 'awavcl'),
            "param_name" => "tp_bg_clr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
            "dependency"    => array( 'element' => "pricing_style", 'value' => array('pricing_2','pricing_3','pricing_4') ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("List Background", 'awavcl'),
            "param_name" => "bg_clr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),

        array(
            "type" => "colorpicker",
            "heading" => __("List Background 2", 'awavcl'),
            "param_name" => "bg_clr_list",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
            "dependency"    => array( 'element' => "pricing_style", 'value' => array('pricing_2','pricing_4',) ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Title Color", 'awavcl'),
            "param_name" => "ttl_clr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Price Color", 'awavcl'),
            "param_name" => "price_clr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Plan Time Color", 'awavcl'),
            "param_name" => "time_clr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Facility Text Color", 'awavcl'),
            "param_name" => "fc_txt_clr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Facility Link Color", 'awavcl'),
            "param_name" => "fc_lnk_clr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Heilighted Text", 'awavcl'),
            "param_name" => "highlighted_clr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
            "dependency"    => array( 'element' => "pricing_style", 'value' => array('pricing_1',) ),
        ),

        array(
            "type" => "colorpicker",
            "heading" => __("Tooltip Text Color", 'awavcl'),
            "param_name" => "tooltip_clr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
            "dependency"    => array( 'element' => "pricing_style", 'value' => array('pricing_3',) ),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Border Color", 'awavcl'),
            "param_name" => "brdr_clr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
            "dependency"    => array( 'element' => "pricing_style", 'value' => array('pricing_3','pricing_5') ),
        ),

        array(
            "type" => "colorpicker",
            "heading" => __("Button Text Color", 'awavcl'),
            "param_name" => "btn_txt_clr",
            "value" => "",
            "group" => __("Button", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Button Background", 'awavcl'),
            "param_name" => "btn_bg",
            "value" => "",
            "group" => __("Button", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Button Background on Hover", 'awavcl'),
            "param_name" => "btn_bg_hvr",
            "value" => "",
            "group" => __("Button", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Promo Color", 'awavcl'),
            "param_name" => "promo_clr",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Promo Background Color", 'awavcl'),
            "param_name" => "promo_bg",
            "value" => "",
            "group" => __("Colors", 'awavcl'),
        ),

        array(
            "type" => "textfield",
            "heading" => esc_attr__("Extra class name", 'advc'),
            "param_name" => "el_class",
            "description" => esc_attr__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'advc'),
        ),
    )

));

function awavc_pricing_list_shortcode($atts, $content = null) {
    extract(shortcode_atts(array(

                //'show_btnnnn' => 'Yes',
                'pricing_style' => 'pricing_1',
                'title' => 'Premium',
                'price' => '69',
                'font_icon' => 'fa fa-usd',
                'time_frame' => 'mo',
                'facilities_lists' => '',
                'btn_text' => 'Buy Now',
                'promo_text' => 'Sell On',
                'ttl_size' => '',
                'fc_txt_size' => '',
                'fc_font_style' => '',
                'btn_txt_size' => '',
                'bg_clr' => '',
                'ttl_clr' => '',
                'fc_txt_clr' => '',
                'fc_lnk_clr' => '',
                'highlighted_clr' => '',
                'btn_txt_clr' => '',
                'btn_bg' => '',
                'btn_bg_hvr' => '',
                'price_size' => '',
                'price_clr' => '',
                'time_clr' => '',
                'promo_clr' => '',
                'promo_bg' => '',
                'promo_bg_hvr' => '',
                'el_class' => '',
                'ttl_size_s' => '',
                'price_size_s' => '',
                'at_lists' => '',
                'tp_bg_clr' => '',
                'bg_clr_list' => '',
                'tooltip_clr' => '',
                'brdr_clr' => '',
                'sol_lists' => '',

    ), $atts));


            $btn_text   = vc_build_link( $btn_text);
                 $btn_url = $btn_text['url'];
                 $btn_title = $btn_text['title'];
                 $btn_target = $btn_text['target'];
         $facilities_lists = vc_param_group_parse_atts($facilities_lists);
         $at_lists = vc_param_group_parse_atts($at_lists);
         $sol_lists = vc_param_group_parse_atts($sol_lists);
        wp_register_style( 'awavcl.pricing-list', plugins_url( '/css/pricing-list.css',  __FILE__) );
        wp_enqueue_style( 'awavcl.pricing-list' );



    if($pricing_style == 'pricing_3' || 'pricing_4'){
        wp_register_style( 'awsxbootstrap.css', plugins_url( '/css/bootstrap.css',  __FILE__) );
        wp_enqueue_style( 'awsxbootstrap.css' );
        wp_register_script('awsxbootstrap.js', plugins_url('js/bootstrap.min.js', __FILE__), array("jquery"));
        wp_enqueue_script('awsxbootstrap.js');

      }

    //$image_url = wp_get_attachment_url( $image, 'full' );
    //$image = aq_resize( $image_url, 296, 289, false ); //resize & crop the image
    //var_dump($image);

    $html = '';
    if($pricing_style == 'pricing_1') {
               $add_class = (rand(99,9999));


        $html .= '
        <style>.awpl_'.$add_class.' .aw-card-popular:hover{background:'.$promo_bg_hvr.'!important;}.awpl_'.$add_class.' .guarantee{color:'.$highlighted_clr.'!important;}.awpl_'.$add_class.' .aw-card-submit-large:hover{background:'.$btn_bg_hvr.'!important;}</style>
                <div class="awac-pricing-page awac-pricing-page-updated awac-pricing-page-long '.$el_class.' awpl_'.$add_class.'">

                    <div id="awac-pricing-area">
                        <div class="awac-pricing-wrap">
                            <div id="aw-cards" class="clearfix">
                                <div class="aw-card aw_argun aw-card aw-card-1-2" style="background:'.$bg_clr.';">
                                    <h1 class="aw-card-title" style="font-size:'.$ttl_size_s.'px;color:'.$ttl_clr.';">'.$title.'</h1>
                                    <h3 class="aw-card-price" style="font-size:'.$price_size_s.'px;color:'.$price_clr.';"><i class="'.$font_icon.'" style="font-size:'.$price_size_s.'px;color:'.$price_clr.';"></i>'.$price.' <small style="color:'.$time_clr.';">/'.$time_frame.'</small></h3>
                                    <ul>';
                                    foreach($facilities_lists as $facilities_list){
                                          if(!empty($facilities_list['linked_text'])){
                                           $text_with_link ='';

                                          $linked_text   = vc_build_link( $facilities_list['linked_text']);
                                             $link_url  =$linked_text['url'];
                                             $link_txt  =$linked_text['title'];
                                             $link_target  =$linked_text['target'];
                                               $text_with_link ='<a href="'.$link_url.'" target="'.$link_target.'" style="color:'.$fc_lnk_clr.';font-size:'.$fc_txt_size.'px;">'.$link_txt.'&nbsp;</a>';
                                           }
                                           if($facilities_list['fc_text']){$fc_text = $facilities_list['fc_text'];}
                                           if($facilities_list['tooltip_txt']){$tooltip_txt = $facilities_list['tooltip_txt'];}



                                            $html .= '<li class="" style="color:'.$fc_txt_clr.'; font-size:'.$fc_txt_size.'px;font-style:'.$fc_font_style.';"> <span>'.$text_with_link.' '.$fc_text.' </span> <span class="tooltip-hover"><b></b>'.$tooltip_txt.'</span> </li>';
                                    }

                                    $html .= '</ul>
                                     <a href="'.$btn_url.'" target="'.$btn_target.'" class="aw-card-submit-large"  style="color:'.$btn_txt_clr.';background:'.$btn_bg.';font-size:'.$btn_txt_size.'px;">'.$btn_title.'</a>';
                            if(!empty($promo_text)){
                                    $html .= '<div class="aw-card-popular" style="background:'.$promo_bg.';transition:all .2s linear .1s;">
                                        <p style="word-break: break-all;color:'.$promo_clr.';">'.$promo_text.'</p>
                                    </div>';
                                        }
                                $html .= '</div>

                            </div>
                        </div>


                    </div>
                </div>
                ';
                }

    if($pricing_style == 'pricing_2') {
               $add_class = (rand(99,9999));


        $html .= '



                <div class="pricing-advctable pricing_'.$add_class.' cat-id-1 '.$el_class.'">


                    <div class="price-table-advc style1">
                        <div class="advc-pricetable-wrap price-17">
                            <div class="top">';  if(!empty($promo_text)){
                                    $html .= '<span id="advc_popu" class="popular transition" style="color:'.$promo_clr.';">'.$promo_text.'</span> ';
                                }
                                 $html .= '<div class="advc-header">
                                    <h4 style="font-size:'.$ttl_size_s.'px;color:'.$ttl_clr.';">'.$title.'</h4>
                                </div>
                                <div class="advc-subheader">
                                    <h3>
                                        <span class="dolar"><i class="'.$font_icon.'" style="font-size:'.$price_size_s.'px;color:'.$price_clr.';"></i></span>'.$price.' <h5 style="color:'.$time_clr.';">/'.$time_frame.'</h5>
                                    </h3>
                                </div>
                            </div>
                            <div class="bottom">
                                <ul>';
                                    foreach($at_lists as $at_list){
                                          if(!empty($at_list['linked_text_s'])){
                                           $text_with_link ='';

                                          $linked_text_s   = vc_build_link( $at_list['linked_text_s']);
                                             $link_url_s  =$linked_text_s['url'];
                                             $link_txt_s  =$linked_text_s['title'];
                                             $link_target_s  =$linked_text_s['target'];

                                             $text_with_link ='<a href="'.$link_url_s.'" target="'.$link_target_s.'" style="color:'.$fc_lnk_clr.';font-size:'.$fc_txt_size.'px;">'.$link_txt_s.'&nbsp;</a> ';
                                           }
                                           if($at_list['fc_text_s']){$fc_text_s = $at_list['fc_text_s'];}


                                            $html .= '<li class="" style="color:'.$fc_txt_clr.'; font-size:'.$fc_txt_size.'px;font-style:'.$fc_font_style.';"> <span>'.$text_with_link.' '. $fc_text_s.'</li>';
                                    }

                                $html .='</ul>';
                                if(!empty($btn_title)){
                                    $html .='<a  href="'.$btn_url.'" target="'.$btn_target.'"  class="btn-table btn-1 hvr-sweep-to-right" style="color:'.$btn_txt_clr.';background:'.$btn_bg.';font-size:'.$btn_txt_size.'px;">'.$btn_title.'</a>';  }
                            $html .='</div>
                        </div>
                        <style>
                            .pricing_'.$add_class.'.pricing-advctable .price-table-advc.style1 .advc-pricetable-wrap .bottom .btn-table::before{ background: '.$btn_bg_hvr.'!important; }
                            .pricing_'.$add_class.'.pricing-advctable .price-table-advc.style1 .advc-pricetable-wrap .top .popular{background:'.$promo_bg.'!important; left: -46px!important;padding: 34px 43px 0!important;font-size: 14px!important;}
                            .pricing_'.$add_class.'.pricing-advctable .price-table-advc.style1 .advc-pricetable-wrap:hover #advc_popu{background:'.$promo_bg_hvr.'!important;}

                            .pricing_'.$add_class.' .style1 .advc-pricetable-wrap.price-17 .bottom{
                            background: '.$bg_clr.'!important;
                            color: red;
                            }
                            .pricing_'.$add_class.' .style1 .advc-pricetable-wrap.price-17{
                            background: '.$tp_bg_clr.'!important;
                            }

                            .pricing_'.$add_class.'.pricing-advctable .price-table-advc.style1 .advc-pricetable-wrap .bottom .btn-table:hover{border: 2px solid '.$btn_bg.'!important;}

                            .pricing_'.$add_class.'.pricing-advctable .price-table-advc.style1 .advc-pricetable-wrap .bottom ul li:nth-child(2n+1){
                                    background: '.$bg_clr_list.'!important;
                            }
                        </style>
                    </div>


                </div>
                ';
                }

    if($pricing_style == 'pricing_3') {
               $add_class = rand(99,9999);
               $unq_id = rand(0,999);

        $html .= '
                <div class="pricing-advctable cat-id-2 pricing3_'.$add_class.' '.$el_class.'" ">
                                            <div class="price-table-advc style2">
                                                <div class="advc-pricetable-wrap price-23 ">
                                                    <div class="top">';  if(!empty($promo_text)){
                                                    $html .= '<span id="advc_ppopu3" class="popular" style="color:'.$promo_clr.';">'.$promo_text.'</span> ';
                                                }
                                 $html .= '<div class="advc-header">
                                                            <h4 style="font-size:'.$ttl_size.'px;color:'.$ttl_clr.';">'.$title.' <span class="dolar" style="font-size:'.$price_size.'px;color:'.$price_clr.';"><i class="'.$font_icon.'" style="font-size:'.$price_size.'px;color:'.$price_clr.';"></i>'.$price.'</span>
                                                            </h4>
                                                        </div>
                                                        <h5 style="color:'.$time_clr.';padding-bottom:10px;">'.$time_frame.'</h5>
                                                        ';
                                                if(!empty($btn_title)){
                                                    $html .='<a  href="'.$btn_url.'" target="'.$btn_target.'"  class="btn-table btn-1 hvr-sweep-to-right" style="color:'.$btn_txt_clr.';background:'.$btn_bg.'!important;font-size:'.$btn_txt_size.'px;">'.$btn_title.'</a>';  }
                                            $html .='</div>
                                                    <div class="bottom">
                                                        <ul>';

                                    foreach($facilities_lists as $facilities_list){
                                          if(!empty($facilities_list['linked_text'])){
                                           $text_with_link ='';
                                            $unq_id = rand(0,999);

                                          $linked_text   = vc_build_link( $facilities_list['linked_text']);
                                             $link_url  =$linked_text['url'];
                                             $link_txt  =$linked_text['title'];
                                             $link_target  =$linked_text['target'];
                                               $text_with_link ='<a href="'.$link_url.'" target="'.$link_target.'" style="color:'.$fc_lnk_clr.';font-size:'.$fc_txt_size.'px;">'.$link_txt.'&nbsp;</a>';
                                           }
                                           if($facilities_list['fc_text']){$fc_text = $facilities_list['fc_text'];}
                                           if($facilities_list['tooltip_txt']){$tooltip_txt = $facilities_list['tooltip_txt'];}


                                            $html .= '
                                                      <li><button type="button" class="btn btn-default toogle_button" data-toggle="collapse" data-target="#desc'.$unq_id.'"  style="color:'.$fc_txt_clr.'; font-size:'.$fc_txt_size.'px;font-style:'.$fc_font_style.';">'.$text_with_link.''. $fc_text.'</button></li>
                                                       <div id="desc'.$unq_id.'" class="collapse"><span class="tooltiptext">'.$tooltip_txt.'</span></div>
                                            ';
                                    }

                                    $html .= '</ul>
                                                    </div>
                                                </div>

        <style>
            .pricing3_'.$add_class.' .style2 .advc-pricetable-wrap.price-23 .top{color: #ffffff;}
            .pricing3_'.$add_class.' .style2 .advc-pricetable-wrap.price-23  .top .advc-header h4{background: '.$tp_bg_clr.'!important;}
            .pricing3_'.$add_class.' .style2 .advc-pricetable-wrap.price-23  .dolar{background: '.$bg_clr.'!important;border: 5px solid '.$tp_bg_clr.'!important;color: '.$tp_bg_clr.'!important;}
            .pricing3_'.$add_class.' .style2 .advc-pricetable-wrap.price-23  .top:after{border-right:80vw solid '.$tp_bg_clr.'!important;}
            .pricing3_'.$add_class.' .style2 .advc-pricetable-wrap.price-23  li button{border-left:  5px solid '.$tp_bg_clr.'!important;}
            @media screen and (max-width:767px){.pricing3_'.$add_class.' .style2 .advc-pricetable-wrap.price-23  .top:after{border-right:170vw solid '.$tp_bg_clr.'!important;}}
            .pricing3_'.$add_class.' .style2 .advc-pricetable-wrap.price-23  .bottom{color: '.$tooltip_clr.'!important;}
            .pricing3_'.$add_class.' .style2 .advc-pricetable-wrap.price-23 {background:!important;border: 1px solid '.$brdr_clr.'!important;}
            .pricing3_'.$add_class.' .style2 .advc-pricetable-wrap.price-23  .btn-table{border: 2px solid '.$btn_bg_hvr.'!important;}
            .pricing3_'.$add_class.' .style2 .advc-pricetable-wrap.price-23  .btn-table:before{background: '.$btn_bg_hvr.' !important;}
        </style>
                                            </div>

                                        </div>
                ';
                }


    if($pricing_style == 'pricing_4') {
               $add_class = rand(99,9999);
               $unq_id = rand(0,999);

        $html .= '
                <div class="pricing-advctable cat-id-3  pricing4_'.$add_class.' '.$el_class.'"">
                    <div class="price-table-advc style3">


                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="advc-pricetable-wrap price-26">
                                <div class="top">';
                                if(!empty($promo_text)){
                                                    $html .= '<span id="advc_popu4" class="popular" style="color:'.$promo_clr.'; background:'.$promo_bg.';">'.$promo_text.'</span> ';
                                                }
                                 $html .= '<div class="advc-header">
                                        <h4 style="font-size:'.$ttl_size.'px;color:'.$ttl_clr.';">'.$title.'</h4>
                                        <h5 style="color:'.$time_clr.';">'.$time_frame.'</h5>
                                    </div>
                                </div>
                                <div class="featured">
                                    <ul>';
                                    foreach($sol_lists as $sol_list){
                                          if(!empty($sol_list['linked_text_y'])){
                                           $text_with_link ='';

                                             $linked_text_y   = vc_build_link( $sol_list['linked_text_y']);
                                             $link_url_y  =$linked_text_y['url'];
                                             $link_txt_y  =$linked_text_y['title'];
                                             $link_target_y  =$linked_text_y['target'];

                                             $text_with_link ='<a href="'.$link_url_y.'" target="'.$link_target_y.'" style="color:'.$fc_lnk_clr.';font-size:'.$fc_txt_size.'px;">'.$link_txt_y.'&nbsp;</a> ';
                                           }
                                           $in_or_out ='';
                                           if($sol_list['fc_text_y']){$fc_text_y = $sol_list['fc_text_y'];}

                                           if($sol_list['in_or_out']){$in_or_out = $sol_list['in_or_out'];}


                                            $html .= '
                                    <li  style="color:'.$fc_txt_clr.'; font-size:'.$fc_txt_size.'px;font-style:'.$fc_font_style.';"><i class="feature_icon fa '.$in_or_out.'" aria-hidden="true"  style="color:'.$fc_txt_clr.'; font-size:'.$fc_txt_size.'px;font-style:'.$fc_font_style.';"></i>


                                  '.$text_with_link.' '. $fc_text_y.'</li>
';              }

                                $html .='

                                    </ul>
                                </div>
                                <div class="bottom">
                                    <div class="advc-footer">
                                        <div class="dolar"  style="font-size:'.$price_size.'px;color:'.$price_clr.';"><i class="'.$font_icon.'" style="font-size:'.$price_size.'px;color:'.$price_clr.';"></i>'.$price.'</div>';
                                            if(!empty($btn_title)){
                                                    $html .='<a id="btn-table" href="'.$btn_url.'" target="'.$btn_target.'"  class="btn-table btn-1 hvr-sweep-to-right" style="color:'.$btn_txt_clr.';background:'.$btn_bg.'!important;font-size:'.$btn_txt_size.'px;">'.$btn_title.'</a>';  }
                                            $html .='
                                    </div>
                                </div>
                            </div>
                            <style>
                                .pricing4_'.$add_class.' .style3 .advc-pricetable-wrap.price-26 .top{background:'.$tp_bg_clr.'!important;}
                                .pricing4_'.$add_class.' .style3 .advc-pricetable-wrap.price-26 .top:after{border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) '.$tp_bg_clr.'!important;}
                                .pricing4_'.$add_class.' .style3 .advc-pricetable-wrap.price-26 .featured{background:'.$bg_clr.'!important;}
                                .pricing4_'.$add_class.' .style3 .advc-pricetable-wrap.price-26 .featured .fa{color:'.$tp_bg_clr.'!important;}
                                .pricing4_'.$add_class.' .style3 .advc-pricetable-wrap.price-26 .bottom{color: #363636;background:'.$bg_clr_list.'!important;}
                                .pricing4_'.$add_class.' .style3 .advc-pricetable-wrap.price-26{background: '.$bg_clr.'!important;}
                                .pricing4_'.$add_class.' .style3 .advc-pricetable-wrap.price-26 .btn-table{border: 2px solid '.$btn_bg_hvr.' !important;  }
                                .pricing4_'.$add_class.' .style3 .advc-pricetable-wrap.price-26 .btn-table:before{background: '.$btn_bg_hvr.' !important;}
                            </style>
                        </div>

                    </div>
                </div>
                ';
                }
    if($pricing_style == 'pricing_5') {
               $add_class = rand(99,9999);
               $unq_id = rand(0,999);

        $html .= '
                <div class="pricing-advctable cat-id-12  pricing5_'.$add_class.' '.$el_class.'"">
                                            <div class="price-table-advc style12">
                                                <div class="advc-pricetable-wrap price-35  category35 ';
                                if(!empty($promo_text)){$html .= 'popular_plan';}$html .= '">
                                                    <div class="inner-box">
                                                        <div class="top">';
                                if(!empty($promo_text)){
                                                    $html .= '<span id="advc_popu4" class="popular" style="color:'.$promo_clr.'; background:'.$promo_bg.';">'.$promo_text.'</span> ';
                                                }
                                 $html .= '<div class="advc-header">
                                                                <h4 style="font-size:'.$ttl_size.'px;color:'.$ttl_clr.';">'.$title.'</h4>
                                                                <h5 style="color:'.$time_clr.';">'.$time_frame.'</h5>
                                                            </div>
                                                        </div>
                                                        <div class="featured">
                                                            <ul>';

                                    foreach($sol_lists as $sol_list){
                                          if(!empty($sol_list['linked_text_y'])){
                                           $text_with_link ='';

                                             $linked_text_y   = vc_build_link( $sol_list['linked_text_y']);
                                             $link_url_y  =$linked_text_y['url'];
                                             $link_txt_y  =$linked_text_y['title'];
                                             $link_target_y  =$linked_text_y['target'];

                                             $text_with_link ='<a href="'.$link_url_y.'" target="'.$link_target_y.'" style="color:'.$fc_lnk_clr.';font-size:'.$fc_txt_size.'px;">'.$link_txt_y.'&nbsp;</a> ';
                                           }
                                           $in_or_out ='';
                                           if($sol_list['fc_text_y']){$fc_text_y = $sol_list['fc_text_y'];}

                                           if($sol_list['in_or_out']){$in_or_out = $sol_list['in_or_out'];}


                                            $html .= '
                                    <li  style="color:'.$fc_txt_clr.'; font-size:'.$fc_txt_size.'px;font-style:'.$fc_font_style.';"><i class="feature_icon fa '.$in_or_out.'" aria-hidden="true"  style="color:'.$fc_txt_clr.'; font-size:'.$fc_txt_size.'px;font-style:'.$fc_font_style.';"></i>


                                  '.$text_with_link.' '. $fc_text_y.'</li>
';              }

                                    $html .= '

                                                            </ul>
                                                        </div>
                                                        <div class="bottom">
                                                            <div class="advc-footer">
                                                                <div class="dolar" style="font-size:'.$price_size.'px;color:'.$price_clr.';"><i class="'.$font_icon.'" style="font-size:'.$price_size.'px;color:'.$price_clr.';"></i>'.$price.'</div>';
                                            if(!empty($btn_title)){
                                                    $html .='<a id="btn-table" href="'.$btn_url.'" target="'.$btn_target.'"  class="btn-table btn-1 hvr-sweep-to-right" style="color:'.$btn_txt_clr.';background:'.$btn_bg.'!important;font-size:'.$btn_txt_size.'px;">'.$btn_title.'</a>';  }
                                            $html .='
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <style>

                                            .pricing5_'.$add_class.' .style12 .advc-pricetable-wrap.price-35 .top:after{border-color: '.$bg_clr.'!important;}
                                            .pricing5_'.$add_class.' .style12 .advc-pricetable-wrap.price-35.popular_plan, .style12 .advc-pricetable-wrap.price-35{background: '.$bg_clr.'!important;}         .pricing5_'.$add_class.' .style12 .advc-pricetable-wrap.price-35 .btn-table:hover, .style12 .advc-pricetable-wrap.price-35.popular_plan .btn-table{border: 2px solid #169c9b !important;}
                                            .pricing5_'.$add_class.' .style12 .advc-pricetable-wrap.price-35 .btn-table:hover, .pricing5_'.$add_class.' .style12 .advc-pricetable-wrap.price-35.popular_plan .btn-table{border: 2px solid '.$btn_bg_hvr.'!important;}
                                            .pricing5_'.$add_class.' .style12 .advc-pricetable-wrap.price-35 .btn-table{border: 2px solid '.$btn_bg_hvr.'!important;}
                                            .pricing5_'.$add_class.' .style12 .advc-pricetable-wrap.price-35 .btn-table:before{background: #169c9b !important;}
                                            .pricing5_'.$add_class.' .style12 .advc-pricetable-wrap.price-35 .btn-table:before{background: '.$btn_bg_hvr.' !important;}
                                        </style>
                                            </div>

                                        </div>
                ';
                }




    return $html;
}

add_shortcode("awavc_pricing_list", "awavc_pricing_list_shortcode");