<?php


vc_map(array(
    "name"             => "Advanced Blog Post Slider",
    "category"         => 'Advanced Elements',
    "description"    => "Post Are On Move",
    "base"             => "awavc_blog_slider",
    "class"         => "",
    "icon"             => "advc-blog-slider-icon",

    "params"     => array(

            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => __("Team Box Style:", "awavcl"),
                "param_name" => "advc_blog_style",

                "value" => array(
                    __("Style 1","awavcl") => 'blog_style_1',
                    __("Style 2","awavcl") => 'blog_style_2',
                    __("Style 3","awavcl") => 'blog_style_3',
                ),
                "admin_label"        => true,
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => __("Category",'awavcl'),
                "param_name" => "advc_cat",
                "value" => awavc_dropdown_catss(),
                "description" => __("type the item category.",'awavcl')
                ),
            array(
                "type" => "dropdown",
                "holder" => "",
                "class" => "",
                "heading" => __("Column",'awavcl'),
                "param_name" => "advb_col",
                "value" => array(
                        __("One Column","awavcl") => 1,
                        __("Two Columns","awavcl") => 2,
                        __("Three Columns","awavcl") => 3,
                        __("Four Columns","awavcl") => 4,
                        __("Five Columns","awavcl") => 5,
                        __("Six Columns","awavcl") => 6,
                    ),
                "description" => __("Select How many post in one row.",'awavcl'),
                "std" => "3",


            ),
            array(
                "type" => "textfield",
                "heading" => __('Post to Show', 'awavcl'),
                "param_name" => "post_count",
                "description" => __("Put -1 for unlimited post to show", 'awavcl'),
            ),
            array(
                "type" => "textfield",
                "heading" => __('Button Text', 'awavcl'),
                "param_name" => "btn_text",
                "description" => __("specify a height and Width wheen you are using different size featured image for post", 'awavcl'),
                "group" => __("Button", 'awavcl'),
                "value" => __("Learn More", 'awavcl'),
            ),

            array(
                'type'             => 'prime_slider',
                'heading'          => __( 'Text Size', 'awavcl' ),
                'param_name'       => 'btn_text_size',
                "value" => 14,
                "min" => 5,
                "max" => 100,
                "step" => 1,
                "unit" => "px",
                "description" => __("Choose Title Font Size as Pixel. Default is 26px", "awavcl"),
                "group" => __("Button", 'awavcl'),
            ),
            array(
                "type" => "colorpicker",
                "heading" => __("Button Text Color", 'awavcl'),
                "param_name" => "btn_text_clr",
                "value" => "",
                "group" => __("Button", 'awavcl'),
            ),
            array(
                "type" => "colorpicker",
                "heading" => __("Button Back Color", 'awavcl'),
                "param_name" => "btn_bg_color",
                "value" => "",
                "group" => __("Button", 'awavcl'),
            ),
            array(
                "type" => "colorpicker",
                "heading" => __("Button Text Color on hover", 'awavcl'),
                "param_name" => "btn_clr_hvr",
                "value" => "",
                "group" => __("Button", 'awavcl'),
            ),

            array(
                "type" => "textfield",
                "heading" => __('Image Height', 'awavcl'),
                "param_name" => "img_hite",
                "description" => __("px Note:specify a height and Width wheen you are using different size featured image for post", 'awavcl'),
                "value" => "300",
                "group" => __("Settings", 'awavcl'),
            ),
            array(
                "type" => "textfield",
                "heading" => __('Image Width', 'awavcl'),
                "param_name" => "img_wid",
                "value" => "500",
                "description" => __("px", 'awavcl'),
                "group" => __("Settings", 'awavcl'),
            ),
            array(
                'type'             => 'prime_slider',
                'heading'          => __( 'Title Font Size', 'awavcl' ),
                'param_name'       => 'ttl_size',
                "value" => 18,
                "min" => 5,
                "max" => 100,
                "step" => 1,
                "unit" => "px",
                "description" => __("Choose Title Font Size as Pixel. Default is 16px", "awavcl"),
                "group" => __("Settings", 'awavcl'),
            ),

            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => __("Title Font Weight", "awavcl"),
                "param_name" => "ttl_wt",
                "value" => array(
                    __("Normal","awavcl") => "",
                    __("Bold","awavcl") => "bold",
                    __("600","awavcl") => "600",
                    __("700","awavcl") => "700",
                    __("900","awavcl") => "900",
                        ),
                "group" => __("Settings", 'awavcl'),
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => __("Title Font style", "awavcl"),
                "param_name" => "ttl_f_style",
                "value" => array(
                    __("Normal","awavcl") => "",
                    __("Italic","awavcl") => "italic",
                        ),
                "group" => __("Settings", 'awavcl'),
            ),

            array(
                'type'             => 'prime_slider',
                'heading'          => __( 'Description Size', 'awavcl' ),
                'param_name'       => 'desc_size',
                "value" => 12,
                "min" => 5,
                "max" => 100,
                "step" => 1,
                "unit" => "px",
                "description" => __("Choose Description Font Size as Pixel. Default is 26px", "awavcl"),
                "group" => __("Settings", 'awavcl'),
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => __("Desc Font style", "awavcl"),
                "param_name" => "desc_style",
                "value" => array(
                    __("Normal","awavcl") => "",
                    __("Italic","awavcl") => "italic",
                        ),
                "group" => __("Settings", 'awavcl'),
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => __("Nav Type", "awavcl"),
                "param_name" => "nav_type",
                "value" => array(
                    __("Nav+Button","awavcl") => "nav_btn",
                    __("Nav","awavcl") => "nav",
                    __("Button","awavcl") => "btn",
                        ),
                "group" => __("Nav", 'awavcl'),
            ),
            array(
                'type'             => 'prime_slider',
                'heading'          => __( 'Nav Font Size', 'awavcl' ),
                'param_name'       => 'nav_size',
                "value" => 42,
                "min" => 5,
                "max" => 100,
                "step" => 1,
                "unit" => "px",
                "group" => __("Nav", 'awavcl'),
            ),
            array(
                "type" => "colorpicker",
                "heading" => __("Nav Color", 'awavcl'),
                "param_name" => "nav_clr",
                "value" => "",
                "group" => __("Nav", 'awavcl'),
            ),
            array(
                "type" => "colorpicker",
                "heading" => __("Title Color", 'awavcl'),
                "param_name" => "ttl_clr",
                "value" => "",
                "group" => __("Color", 'awavcl'),
            ),
            array(
                "type" => "colorpicker",
                "heading" => __("Title Color on Hover", 'awavcl'),
                "param_name" => "ttl_clr_hvr",
                "value" => "",
                "group" => __("Color", 'awavcl'),
            ),
            array(
                "type" => "colorpicker",
                "heading" => __("Description Color", 'awavcl'),
                "param_name" => "desc_clr",
                "value" => "",
                "group" => __("Color", 'awavcl'),
            ),
            array(
                "type" => "colorpicker",
                "heading" => __("Date Color", 'awavcl'),
                "param_name" => "date_clr",
                "value" => "",
                "group" => __("Color", 'awavcl'),
            ),

            array(
            "type" => "textfield",
            "heading" => esc_attr__("Extra class name", 'awavcl'),
            "param_name" => "el_class",
            "description" => esc_attr__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'awavcl'),
        ),

    )

));
function awavc_dropdown_catss( ) {
    $categories_obj = get_categories('hide_empty=0');
    $categories = array();
    foreach ($categories_obj as $pn_cat){
        $categories[$pn_cat->cat_name] = $pn_cat->category_nicename;
    }
    $categories=array("All Categories"=>"") + $categories;
    return $categories;
    print_r($categories);
}


function awavc_blog_slider_shortcode($atts, $content = null) {
    extract(shortcode_atts(array(

                //'show_btnnnn' => 'Yes',
                'advc_blog_style' => 'blog_style_1',
                'advc_cat' => '',
                'advb_col' => '3',
                'post_count' => '',
                'btn_text' => 'Read More',
                'btn_text_size' => '',
                'btn_text_clr' => '',
                'btn_bg_color' => '',
                'btn_clr_hvr' => '',
                'img_hite' => '300',
                'img_wid' => '',
                'ttl_size' => '',
                'ttl_style' => '',
                'ttl_wt' => '',
                'desc_size' => '',
                'desc_style' => '',
                'ttl_clr' => '',
                'ttl_clr_hvr' => '',
                'desc_clr' => '',
                'date_clr' => '',
                'nav_type' => '',
                'nav_size' => '',
                'nav_clr' => '',
                'el_class' => '',
    ), $atts));
    wp_register_style( 'blog-style', plugins_url( '/css/blog-css.css',  __FILE__) );
    wp_enqueue_style( 'blog-style' );

    wp_register_style( 'awavcl.owl.carousel', plugins_url( '/css/owl.carousel.css',  __FILE__) );
    wp_enqueue_style( 'awavcl.owl.carousel' );

    wp_register_style( 'awavcl.owl.transitions', plugins_url( '/css/owl.transitions.css',  __FILE__) );
    wp_enqueue_style( 'awavcl.owl.transitions' );

    wp_register_style( 'awavcl.owl.theme', plugins_url( '/css/owl.theme.css',  __FILE__) );
    wp_enqueue_style( 'awavcl.owl.theme' );



    wp_register_script('adv.owl.carousel.min', plugins_url('/js/owl.carousel.min.js', __FILE__), array('jquery'));
    wp_enqueue_script('adv.owl.carousel.min');

    wp_register_script('adv-main.js', plugins_url('/js/main.js', __FILE__), array('jquery'));
    wp_enqueue_script('adv-main.js');

    //$image_url = wp_get_attachment_url( $image, 'full' );
    //$image = aq_resize( $image_url, 296, 289, false ); //resize & crop the image
    //var_dump($image);
    $slide = rand(99,99999);
    $list_html = '';
    $html = '';
    $blog_query = '';





$args = array(
                    'post_type' => array( 'post' ),'category_name' => ''.$advc_cat.'','posts_per_page' => ''.$post_count.'',);

                $q = new WP_Query( $args );


            $html .= '<div id="advc-blog_'.$slide.'"  class="adts_'.$slide.' advc-blog_'.$slide.' adv-owl-carousel owl-theme '.$el_class.'"  style="padding:px; margin-bottom:70px;">';


        if( $q->have_posts() ){
            while( $q->have_posts() ): $q->the_post();

                $categories = get_the_category();

                if($advc_blog_style == 'blog_style_1') {
                 $add_class = rand(99,99999);


                           //The loop
                                 $html .= '

                    <div class="item">
                    <style>
            .ttl_'.$add_class.':hover{color:'.$ttl_clr_hvr.'!important;} .bd'.$add_class.':hover{color:'.$btn_clr_hvr.'!important;} .advb1_'.$add_class.' .post-excerpt{height:270px;}
        </style>
                                 <div class="mg-col-md-12 mg-col-sm-12 mg-col-xs-12" style="padding:15px; ">

                                    <div class="advb1_'.$add_class.'  blog-grid advc_vc_ad" > <!-- must take this class name blog-grid  -->
                                        <div class="blog-grid-post">   <!-- must take this class name blog-grid  -->
                                            <div class="post-thumb""> <a href="'.get_post_permalink().'"><i class="fa fa-link" style="color:'.$btn_clr_hvr.';"></i></a>
                                                <img src="'.get_the_post_thumbnail_url().'" alt="" style="height:'.$img_hite.'px;width:'.$img_wid.'px:;" />
                                            </div>
                                            <div class="post-excerpt">
                                                <strong class="date" style="text-transform:capitalize;color:'.$ttl_clr_hvr.'!important;">'.get_the_author().' / '.get_the_date('M d,Y').' || <a style="color:'.$ttl_clr_hvr.'!important;" href="'.get_category_link( $categories[0]->term_id ).'">'.$categories[0]->cat_name.'</a></strong>

                                                <h4> <a href="'.get_post_permalink().'" class="ttl_'.$add_class.'" style="color:'.$ttl_clr.'; font-size:'.$ttl_size.'px; font-style:'.$ttl_style.'; font-weight:'.$ttl_wt.';">'.get_the_title().'</a> </h4>

                                                <p  style="color:'.$desc_clr.'; font-size:'.$desc_size.'px; font-style:'.$desc_style.';" >'.wp_trim_words( get_the_content(),20).'</p>

                                                <a href="'.get_post_permalink().'" class="bd bd'.$add_class.'" style="color:'.$btn_text_clr.'; font-size:'.$btn_text_size.'px; background-color:'.$btn_bg_color.';">'.$btn_text.' <i class="fa fa-angle-double-right"></i></a>
                                            </div>
                                            <ul class="post-meta">
                                                <li  style="color:'.$desc_clr.'; font-size:'.$desc_size.'px; font-style:'.$desc_style.';" ><i class="fa fa-comment"></i>'.get_comments_number().'</li>
                                            </ul>
                                        </div>
                                    </div>

                                 </div>
                            </div>
                ';
                        }

                $html .= '';

                if($advc_blog_style == 'blog_style_2') {
                 $add_class = (rand(99,99999));

                           //The loop
                                 $html .= '


                <div class="blog-grid advc_blog_v2 advb_'.$add_class.'" style="padding:15px;">
                <style>
                    .advb_'.$add_class.' .post-content .ttl_'.$add_class.':hover {color: '.$ttl_clr_hvr.'!important;}.advb_'.$add_class.' .post-category li a:hover{background: '.$ttl_clr_hvr.'!important;}.advb_'.$add_class.'.advc_blog_v2 .blog-grid .post-media::before {background: '.$ttl_clr.'!important;} .bd'.$add_class.':hover{color:'.$btn_clr_hvr.'!important;}  .advb_'.$add_class.' .post-content{height:230px;}.advb_'.$add_class.' .post-media img {border: 1px solid #ebebeb;}
                    </style>
                    <article class="blog-post post-entry">
                                                <div class="blog-grid">
                                                    <div class="content-wrapper">
                                                        <div class="post-media">
                                                            <a href="'.get_post_permalink().'"><img src="'.get_the_post_thumbnail_url().'" alt="" style="height:'.$img_hite.'px;width:'.$img_wid.'px:;"></a>
                                                        </div>
                                                        <div class="post-content">
                                                            <ul class="post-category">
                                                                <li><a  href="'.get_category_link( $categories[0]->term_id ).'" style="background:'.$ttl_clr.'">'.$categories[0]->cat_name.'</a></li>
                                                            </ul>
                                                            <h3 class="post-title"><a href="'.get_post_permalink().'" class="ttl_'.$add_class.'" style="color:'.$ttl_clr.'; font-size:'.$ttl_size.'px; font-style:'.$ttl_style.'; font-weight:'.$ttl_wt.';">'.get_the_title().'</a></h3>

                                                            <p  style="color:'.$desc_clr.'; font-size:'.$desc_size.'px; font-style:'.$desc_style.';" >'.wp_trim_words( get_the_content(),20).'</p>

                                                        </div>
                                                        <div class="post-footer">
                                                            <div class="post-meta">
                                                                <ul>
                                                                    <li style="color:'.$desc_clr.'; font-size:'.$desc_size.'px; font-style:'.$desc_style.';">'.get_the_date('M d,Y').'</li>
                                                                    <li  style="color:'.$desc_clr.'; font-size:'.$desc_size.'px; font-style:'.$desc_style.';" ><i class=""></i>'.get_comments_number().' Comments</li>
                                                                </ul>
                                                            </div>
                                                            <div class="post-more">
                                                                <a href="'.get_post_permalink().'" class="bd bd'.$add_class.'" style="color:'.$btn_text_clr.'; font-size:'.$btn_text_size.'px; background-color:'.$btn_bg_color.';">'.$btn_text.' <i class="fa fa-angle-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end of blog-grid -->
                                            </article>
                </div>





                           ';
                        }

                if($advc_blog_style == 'blog_style_3') {
                                 $add_class = (rand(99,99999));

                        $get_author_id = get_the_author_meta('ID');
                        $get_author_gravatar = get_avatar_url($get_author_id, array('size' => 450));
                                           //The loop
                                                 $html .= '


                <div class="item advb4_'.$add_class.'" style="padding:15px;">
                <style>
                    .advb4_'.$add_class.' .ttl_'.$add_class.':hover,.advb4_'.$add_class.' .post-cat a:hover,.advb4_'.$add_class.' .post-meta-fav a:hover,.advb4_'.$add_class.' .post-meta-fav .fa-comment:hover {color:'.$ttl_clr_hvr.'!important;} .bd'.$add_class.':hover{color:'.$btn_clr_hvr.'!important;} .post-list.style2 .post-body{height:300px}.advb4_'.$add_class.' .entry-header {height: 230px;}        </style>
                    <div class="post-list style2">
                        <div class="post-media">
                            <a href="'.get_post_permalink().'" ><img style="height:'.$img_hite.'px;width:'.$img_wid.'px;" draggable="false" src="'.get_the_post_thumbnail_url().'" alt="blog grid image">  </a>
                            <div class="entry-meta">
                                <div class="post-meta-date" style="background:'.$date_clr.';">
                                    <span class="day" style="font-size:28px;">'.get_the_date('d').'</span>
                                    <span class="month" style="font-size:'.$desc_size.'px;">'.get_the_date('M, Y').'</span>
                                </div>
                            </div>
                        </div><!-- .post-media END -->
                        <div class="post-body">
                            <div class="post-meta-top">
                                <div class="entry-meta">
                                    <span class="post-cat">
                                        <a  href="'.get_category_link( $categories[0]->term_id ).'" style="color:'.$desc_clr.';font-size:'.$desc_size.'px;"><i style="color:'.$desc_clr.'" class="fa fa-folder"></i> '.$categories[0]->cat_name.'</a>
                                    </span>
                                    <span class="post-meta-fav">
                                        <a href="" style="color:'.$desc_clr.';font-size:'.$desc_size.'px;">'.get_comments_number().'  <i style="color:'.$desc_clr.'!important" class="fa fa-comment "></i></a>
                                    </span>
                                </div><!-- .post-meta END -->
                            </div>
                            <div class="entry-header">
                                <div class="post-meta">
                                    <span class="advb4_post-author">
                                        <img draggable="false" src="'.$get_author_gravatar.'" alt="">
                                        <a style="text-transform: capitalize;color:'.$desc_clr.';"href="'.get_the_author_link().'">'.get_the_author().'</a>
                                    </span>
                                </div><!-- .post-meta END -->
                                <h2 class="entry-title">
                                    <a href="'.get_post_permalink().'" class="ttl_'.$add_class.'" style="color:'.$ttl_clr.'; font-size:'.$ttl_size.'px; font-style:'.$ttl_style.'; font-weight:'.$ttl_wt.';">'.get_the_title().'</a>
                                </h2><!-- .entry-title END -->
                                <div class="entry-content">
                                    <p  style="color:'.$desc_clr.'; font-size:'.$desc_size.'px; font-style:'.$desc_style.';" >'.wp_trim_words( get_the_content(),20).'</p>
                                </div><!-- .entry-content END -->
                            </div><!-- .entry-header END -->
                        </div><!-- .post-body END -->
                    </div>
                </div>

                           ';
                        }



                        endwhile;
                        wp_reset_postdata();


                 $html .= '</div>
                <style>
                        #advc-blog_'.$slide.' .owl-buttons .fa{font-size:'.$nav_size.'px!important;color:'.$nav_clr.'!important;}#advc-blog_'.$slide.' .owl-page.active > span,#advc-blog_'.$slide.' .owl-page > span{background-color:'.$nav_clr.'!important;}';
                    if($nav_type == 'nav'){
                        $html .= ' #advc-blog_'.$slide.' .owl-pagination{display:none!important}';
                    }
                    if($nav_type == 'btn'){
                        $html .= ' #advc-blog_'.$slide.' .owl-buttons{display:none!important}';
                    }
                $html .= '
                 </style>

                 <script>

    jQuery(document).ready(function($) {
                  $("#advc-blog_'.$slide.'").owlCarousel({
                      items:'.$advb_col.',
                    itemsDesktop:[1000,'.$advb_col.'],
                    itemsDesktopSmall:[979,'.$advb_col.'],
                    itemsTablet:[768,2],
                    itemsMobile:[650,1],
                    pagination:true,
                    navigation:true,
                    navigationText:["",""],
                    autoPlay:true,
                    autoWidth:true,
                    rewind:true,
                     navigation : true, // Show next and prev buttons
                       navigationText: ["<i class=\'fa fa-angle-left\'></i>", "<i class=\'fa fa-angle-right\'></i>"],

      });
    });
             </script>';

    }


    return $html;
}

add_shortcode("awavc_blog_slider", "awavc_blog_slider_shortcode");