<?php


vc_map(array(
    "name" 			=> "Advanced Blog Post",
    "category" 		=> 'Advanced Elements',
    "description"	=> "Simple but stylish blog layouts",
    "base" 			=> "awavc_blog_two",
    "class" 		=> "",
    "icon" 			=> "advc_blog_ico",

    "params" 	=> array(

            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => __("Team Box Style:", "awavcl"),
                "param_name" => "advc_blog_style",
                
                "value" => array(
                    __("Style 1","awavcl") => 'blog_style_1',
                    __("Style 2","awavcl") => 'blog_style_2',
                    __("Style 3","awavcl") => 'blog_style_3',
                    __("Style 4","awavcl") => 'blog_style_4',
                    __("Style 5","awavcl") => 'blog_style_5',
                    __("Style 6","awavcl") => 'blog_style_6',
                    __("Style 7","awavcl") => 'blog_style_7',
                    __("Style 8","awavcl") => 'blog_style_8',
                    __("Style 9","awavcl") => 'blog_style_9',
                ),
                "admin_label"        => true,
                "description" => __("Important Note: Please define content box (title/desc box ) height from setting",'awavcl')
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => __("Category",'awavcl'),
                "param_name" => "advc_cat",
                "value" => awavc_dropdown_cats(),
                "description" => __("type the item category.",'awavcl')
                ),
            array(
                "type" => "dropdown",
                "holder" => "",
                "class" => "",
                "heading" => __("Column",'awavcl'),
                "param_name" => "advb_col",
                "value" => array(
                        __("One Column","awavcl") => 12,
                        __("Two Column","awavcl") => 6,
                        __("Three Column","awavcl") => 4,
                        __("Four Column","awavcl") => 3,
                        __("Six Column","awavcl") => 2,
                    ),
                "description" => __("Select How many post in one row.",'awavcl'),
                "std" => "4",


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
                'type'             => 'prime_slider',
                'heading'          => __( 'Content Height', 'awavcl' ),
                'param_name'       => 'content_hite',
                "value" => 250,
                "min" => 100,
                "max" => 1000,
                "step" => 1,
                "unit" => "px",
                "description" => __("Note:Content box height should be ", "awavcl"),
                "group" => __("Settings", 'awavcl'),
            ),
            array(
                'type'             => 'prime_slider',
                'heading'          => __( 'Image Height', 'awavcl' ),
                'param_name'       => 'img_hite',
                "value" => 250,
                "min" => 100,
                "max" => 1000,
                "step" => 1,
                "unit" => "px",
                "description" => __("Note:specify a height and Width wheen you are using different size featured image for post", "awavcl"),
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
                "type" => "textfield",
                "heading" => __('Description/Exerpt Word to Show', 'awavcl'),
                "param_name" => "exp_count",
                "description" => __("Default is 20", 'awavcl'),
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
                'type'             => 'prime_slider',
                'heading'          => __( 'Margin Buttom', 'awavcl' ),
                'param_name'       => 'pd_btm',
                "value" => 50,
                "min" => 5,
                "max" => 100,
                "step" => 1,
                "unit" => "px",
                "description" => __("Gap between rows", "awavcl"),
                "group" => __("Settings", 'awavcl'),
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
                "heading" => __("Meta Tag Background", 'awavcl'),
                "param_name" => "meta_bg",
                "value" => "",
                "group" => __("Color", 'awavcl'),
                "dependency"    => array( 'element' => "advc_blog_style", 'value' => array('blog_style_8',) ),
            ),
            
            array(
                "type" => "colorpicker",
                "heading" => __("Meta Tag Color", 'awavcl'),
                "param_name" => "meta_clr",
                "value" => "",
                "group" => __("Color", 'awavcl'),
                "dependency"    => array( 'element' => "advc_blog_style", 'value' => array('blog_style_8',) ),
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
                "heading" => __('Extra Class', 'awavcl'),
                "param_name" => "el_class",
                "description" => __("give a extra class to style if need", 'awavcl'),
            ),
        
    )

));
function awavc_dropdown_cats( ) {
    $categories_obj = get_categories('hide_empty=0');
    $categories = array();
    foreach ($categories_obj as $pn_cat){
        $categories[$pn_cat->cat_name] = $pn_cat->category_nicename;
    }
    $categories=array("All Categories"=>"") + $categories;
    return $categories;
    print_r($categories);
}


function awavc_blog_shortcode($atts, $content = null) {
    extract(shortcode_atts(array(

                //'show_btnnnn' => 'Yes',
                'advc_blog_style' => 'blog_style_1',
                'advc_cat' => '',
                'advb_col' => '4',
                'post_count' => '',
                'btn_text' => 'Read More',
                'btn_text_size' => '',
                'btn_text_clr' => '',
                'btn_bg_color' => '',
                'btn_clr_hvr' => '',
                'img_hite' => '250',
                'exp_count' => '20',
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
                'pd_btm' => '',
                'content_hite' => '270',
                'meta_bg' => '',
                'meta_clr' => '',
                'el_class' => '',
    ), $atts));
    wp_register_style( 'blog-style', plugins_url( '/css/blog-css.css',  __FILE__) );
    wp_enqueue_style( 'blog-style' );
    wp_register_style( 'awavcl-bootstrapp.min', plugins_url( '/css/awavcl-bootstrap.min.css',  __FILE__) );
    wp_enqueue_style( 'awavcl-bootstrapp.min' );



    //$image_url = wp_get_attachment_url( $image, 'full' );
    //$image = aq_resize( $image_url, 296, 289, false ); //resize & crop the image
    //var_dump($image);
    $html = '';
    $html .= '  <div class="row">';
    $list_html = '';
    $blog_query = '';




                $args = array(
                    'post_type' => array( 'post' ),'category_name' => ''.$advc_cat.'','posts_per_page' => ''.$post_count.'',);

                $q = new WP_Query( $args );

    
        
                  

        if( $q->have_posts() ){
            while( $q->have_posts() ): $q->the_post();

                $categories = get_the_category();
                      
                if($advc_blog_style == 'blog_style_1') {
                 $add_class = (rand(99,99999));


                           //The loop
                                 $html .= '

        <style>
            .ttl_'.$add_class.':hover{color:'.$ttl_clr_hvr.'!important;} .bd'.$add_class.':hover{color:'.$btn_clr_hvr.'!important;} .advb1_'.$add_class.' .post-excerpt{height:'.$content_hite.'px;}
        </style>
                                 <div class="col-md-'.$advb_col.' col-sm-6 col-xs-12 clearfix '.$el_class.'" style="padding:px; margin-bottom:'.$pd_btm.'px;">

                                    <div class="advb1_'.$add_class.'  blog-grid advc_vc_ad" > <!-- must take this class name blog-grid  -->
                                        <div class="blog-grid-post">   <!-- must take this class name blog-grid  -->
                                            <div class="post-thumb""> <a href="'.get_post_permalink().'"><i class="fa fa-link" style="color:'.$btn_clr_hvr.';"></i></a> 
                                                <img src="'.get_the_post_thumbnail_url().'" alt="" style="height:'.$img_hite.'px;width:'.$img_wid.'px:;" />
                                            </div>
                                            <div class="post-excerpt">
                                                <strong class="date" style="text-transform:capitalize;color:'.$ttl_clr_hvr.'!important;">'.get_the_author().' / '.get_the_date('M d,Y').' || <a style="color:'.$ttl_clr_hvr.'!important;" href="'.get_category_link( $categories[0]->term_id ).'">'.$categories[0]->cat_name.'</a></strong>

                                                <h4> <a href="'.get_post_permalink().'" class="ttl_'.$add_class.'" style="color:'.$ttl_clr.'; font-size:'.$ttl_size.'px; font-style:'.$ttl_style.'; font-weight:'.$ttl_wt.';">'.get_the_title().'</a> </h4>

                                                <p  style="color:'.$desc_clr.'; font-size:'.$desc_size.'px; font-style:'.$desc_style.';" >'.wp_trim_words( get_the_content(),$exp_count).'</p>

                                                <a href="'.get_post_permalink().'" class="bd bd'.$add_class.'" style="color:'.$btn_text_clr.'; font-size:'.$btn_text_size.'px; background-color:'.$btn_bg_color.';">'.$btn_text.' <i class="fa fa-angle-double-right"></i></a>
                                            </div>
                                            <ul class="post-meta">
                                                <li  style="color:'.$desc_clr.'; font-size:'.$desc_size.'px; font-style:'.$desc_style.';" ><i class="fa fa-comment"></i>'.get_comments_number().'</li>
                                            </ul>
                                        </div>
                                    </div>

                                 </div>
                ';
                        }
                        
                if($advc_blog_style == 'blog_style_2') {
                 $add_class = (rand(99,99999));

                           //The loop
                                 $html .= '
                    <style>
                    .advb_'.$add_class.' .post-content .ttl_'.$add_class.':hover {color: '.$ttl_clr_hvr.'!important;}.advb_'.$add_class.' .post-category li a:hover{background: '.$ttl_clr_hvr.'!important;}.advb_'.$add_class.'.advc_blog_v2 .blog-grid .post-media::before {background: '.$ttl_clr.'!important;} .bd'.$add_class.':hover{color:'.$btn_clr_hvr.'!important;} .advb_'.$add_class.' .post-content{height:'.$content_hite.'px;}.advb_'.$add_class.' .post-media img {border: 1px solid #ebebeb;}
                    </style>

                <div class="col-md-'.$advb_col.' col-sm-6 blog-grid advc_blog_v2 advb_'.$add_class.' clearfix '.$el_class.'" style="padding:px; margin-bottom:'.$pd_btm.'px;">
                    <article class="blog-post post-entry">
                                                <div class="blog-grid">
                                                    <div class="content-wrapper">
                                                        <div class="post-media">
                                                            <a href="'.get_post_permalink().'"><img src="'.get_the_post_thumbnail_url().'" alt="" style="height:'.$img_hite.'px;width:'.$img_wid.'px:;"></a>
                                                        </div>
                                                        <div class="post-content">
                                                            <ul class="post-category">
                                                                <li><a  href="'.get_category_link( $categories[0]->term_id ).'" style="background:'.$desc_clr.'">'.$categories[0]->cat_name.'</a></li>
                                                            </ul>
                                                            <h3 class="post-title"><a href="'.get_post_permalink().'" class="ttl_'.$add_class.'" style="color:'.$ttl_clr.'; font-size:'.$ttl_size.'px; font-style:'.$ttl_style.'; font-weight:'.$ttl_wt.';">'.get_the_title().'</a></h3>

                                                            <p style="color:'.$desc_clr.'; font-size:'.$desc_size.'px; font-style:'.$desc_style.';">'.wp_trim_words( get_the_content(),$exp_count).'</p>

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
                                    <style>
                                    .advb4_'.$add_class.' .ttl_'.$add_class.':hover,.advb4_'.$add_class.' .post-cat a:hover,.advb4_'.$add_class.' .post-meta-fav a:hover,.advb4_'.$add_class.' .post-meta-fav .fa-comment:hover {color:'.$ttl_clr_hvr.'!important;} .bd'.$add_class.':hover{color:'.$btn_clr_hvr.'!important;}
.advb4_'.$add_class.' .entry-header {height:'.$content_hite.'px;}
                                    </style>

                <div class="col-md-'.$advb_col.' col-sm-6 advb4_'.$add_class.' clearfix '.$el_class.'" style="padding:px;margin-bottom:'.$pd_btm.'px;">
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
                                        <a  href="'.get_category_link( $categories[0]->term_id ).'" style="color:'.$desc_clr.';"><i style="color:'.$desc_clr.'" class="fa fa-folder"></i> '.$categories[0]->cat_name.'</a>
                                    </span>
                                    <span class="post-meta-fav">
                                        <a href="" style="color:'.$desc_clr.';">'.get_comments_number().'  <i style="color:'.$desc_clr.'!important" class="fa fa-comment "></i></a>
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
                                    <p  style="color:'.$desc_clr.'; font-size:'.$desc_size.'px; font-style:'.$desc_style.';" >'.wp_trim_words( get_the_content(),$exp_count).'</p>
                                </div><!-- .entry-content END -->
                            </div><!-- .entry-header END -->
                        </div><!-- .post-body END -->
                    </div>
                </div>

                           ';
                        }

                if($advc_blog_style == 'blog_style_4') {
                                 $add_class = (rand(99,99999));

                        $get_author_id = get_the_author_meta('ID');
                        $get_author_gravatar = get_avatar_url($get_author_id, array('size' => 450));
                                           //The loop
                                                 $html .= '
                                    <style>
                                        .advb4_'.$add_class.' .post-content{height:'.$content_hite.'px;} .advb4_'.$add_class.' .post-title a:hover{color:'.$ttl_clr_hvr.'!important;}.advb4_'.$add_class.' .awavc-post-item-1 .post-link li a:hover{background-color:'.$ttl_clr_hvr.'!important;}.advb4_'.$add_class.' .awavc-post-item-1 .read-more:hover{color:'.$btn_clr_hvr.'!important;}.advb4_'.$add_class.' .awavc-post-item-1 .read-more::after{border-color:'.$btn_clr_hvr.'!important;}
                                    </style>

                                    <div class="col-md-'.$advb_col.' col-sm-6 col-xs-12 clearfix advb4_'.$add_class.'  '.$el_class.'" style="padding:px;margin-bottom:'.$pd_btm.'px;">
                                        <div class="awavc-post-item-1">
                                            <div class="post-thumbnail">
                                                <img style="height:'.$img_hite.'px;width:'.$img_wid.'px;" src="'.get_the_post_thumbnail_url().'" alt="">
                                                <div class="hover">
                                                    <ul class="post-link">
                                                        <li>
                                                            <a href="'.get_post_permalink().'" class="fa fa-link"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="post-date">
                                                    <span class="date" style="background-color:'.$ttl_clr.'!important;color:'.$date_clr.'!important;">'.get_the_date('d').'</span>
                                                    <span class="month" style="background-color:'.$ttl_clr_hvr.'!important;color:'.$date_clr.'!important;">'.get_the_date('M').'</span>
                                                </div>
                                            </div>
                                            <div class="post-content" >
                                                <h3 class="post-title">
                                                    <a href="'.get_post_permalink().'"  style="color:'.$ttl_clr.'; font-size:'.$ttl_size.'px; font-style:'.$ttl_style.'; font-weight:'.$ttl_wt.';">'.get_the_title().'</a>
                                                </h3>
                                                <p class="post-description" style="color:'.$desc_clr.'; font-size:'.$desc_size.'px; font-style:'.$desc_style.';" >'.wp_trim_words( get_the_content(),$exp_count).'</p>
                                                <a href="'.get_post_permalink().'" class="read-more" style="color:'.$btn_text_clr.'; font-size:'.$btn_text_size.'px; background-color:'.$btn_bg_color.';">'.$btn_text.'</a>
                                            </div>
                                        </div>
                                    </div>

                           ';
                        }


                if($advc_blog_style == 'blog_style_5') {
                                 $add_class = (rand(99,99999));

                        $get_author_id = get_the_author_meta('ID');
                        $get_author_gravatar = get_avatar_url($get_author_id, array('size' => 450));
                                           //The loop
                                                 $html .= '
                                    <style>
                                        .advb5_'.$add_class.' .post-content{height:'.$content_hite.'px;} .advb5_'.$add_class.' .post-title a:hover{color:'.$ttl_clr_hvr.'!important;}.advb5_'.$add_class.' .awavc-post-item-2 .post-link li a:hover{background-color:'.$ttl_clr_hvr.'!important;}.advb5_'.$add_class.' .awavc-post-item-2 .read-more:hover{color:'.$btn_clr_hvr.'!important;}.advb5_'.$add_class.' .awavc-post-item-2 .read-more::after{border-color:'.$btn_clr_hvr.'!important;} .advb5_'.$add_class.' .awavc-post-item-2 .month::after{border-color:'.$date_clr.'!important;}.advb5_'.$add_class.' .awavc-post-item-2{border-bottom-color:'.$btn_clr_hvr.'!important;}
                                    </style>

                                    <div class="col-md-'.$advb_col.' col-sm-6 col-xs-12 clearfix advb5_'.$add_class.'  '.$el_class.'" style="padding:px;margin-bottom:'.$pd_btm.'px;">
                                        <div class="awavc-post-item-2">
                                            <img style="height:'.$img_hite.'px;width:'.$img_wid.'px;" src="'.get_the_post_thumbnail_url().'" alt="">
                                           <div class="post-content">
                                                 <div class="post-date" style="background-color:'.$btn_clr_hvr.'!important;">

                                                <span class="month" style="color:'.$date_clr.'!important;">'.get_the_date('M').'</span>

                                                <span class="date" style="color:'.$date_clr.'!important;">'.get_the_date('d').'</span>
                                                </div>

                                                <h3 class="post-title">

                                                    <a href="'.get_post_permalink().'"  style="color:'.$ttl_clr.'; font-size:'.$ttl_size.'px; font-style:'.$ttl_style.'; font-weight:'.$ttl_wt.';">'.get_the_title().'</a>
                                                </h3>

                                                <p class="post-description" style="color:'.$desc_clr.'; font-size:'.$desc_size.'px; font-style:'.$desc_style.';" >'.wp_trim_words( get_the_content(),$exp_count).'</p>

                                                <a href="'.get_post_permalink().'" class="read-more" style="color:'.$btn_text_clr.'; font-size:'.$btn_text_size.'px; background-color:'.$btn_bg_color.';">'.$btn_text.' <i class="fa fa-chevron-right"></i> </a>
                                               </div>

                                        </div>
                                    </div>

                           ';
                        }

                if($advc_blog_style == 'blog_style_6') {
                                 $add_class = (rand(99,99999));

                        $get_author_id = get_the_author_meta('ID');
                        $get_author_gravatar = get_avatar_url($get_author_id, array('size' => 450));
                                           //The loop
                                                 $html .= '
                                    <style>
                                        .advb6_'.$add_class.' .post-content{height:'.$content_hite.'px;} .advb6_'.$add_class.' .post-title a:hover{color:'.$ttl_clr_hvr.'!important;}.advb6_'.$add_class.' .awavc-post-item-3 .post-link li a:hover{background-color:'.$ttl_clr_hvr.'!important;}.advb6_'.$add_class.' .awavc-post-item-3 .read-more:hover{color:'.$btn_clr_hvr.'!important;}.advb6_'.$add_class.' .awavc-post-item-3 .read-more::after{border-color:'.$btn_clr_hvr.'!important;} .advb6_'.$add_class.' .awavc-post-item-3 .month::after{border-color:'.$date_clr.'!important;}
                                    </style>

                                    <div class="col-md-'.$advb_col.' col-sm-6 col-xs-12 clearfix advb6_'.$add_class.'  '.$el_class.'" style="padding:px;margin-bottom:'.$pd_btm.'px;">
                                        <div class="awavc-post-item-3">
                                            <div class="thumb">
                                                <img style="height:'.$img_hite.'px;width:'.$img_wid.'px;" src="'.get_the_post_thumbnail_url().'" alt="">
                                                <div class="post-date" style="background-color:'.$btn_clr_hvr.'!important;">
                                                
                                                    <span class="date" style="color:'.$date_clr.'!important;">'.get_the_date('d').'</span>
                                                    
                                                    <span class="month" style="color:'.$date_clr.'!important;">'.get_the_date('M').'</span>

                                               

                                                </div>
                                            </div>

                                            <div class="content">

                                                <h3 class="post-title">

                                                    <a href="'.get_post_permalink().'"  style="color:'.$ttl_clr.'; font-size:'.$ttl_size.'px; font-style:'.$ttl_style.'; font-weight:'.$ttl_wt.';">'.get_the_title().'</a>
                                                </h3>
                                                <div class="post-meta">
                                                    <ul>
                                                        <li>
                                                            <a  href="'.get_category_link( $categories[0]->term_id ).'" style="color:'.$desc_clr.';"><i style="color:'.$desc_clr.'" class="fa fa-tags"></i> '.$categories[0]->cat_name.'</a>
                                                        </li>
                                                        <li>
                                                            <a href="" style="color:'.$desc_clr.';"><i style="color:'.$desc_clr.'!important" class="fa fa-comment "> '.get_comments_number().'   Comments</i></a>
                                                           
                                                        </li>
                                                        
                                                        
                                                    </ul>
                                                </div>
                                                <p class="post-description" style="color:'.$desc_clr.'; font-size:'.$desc_size.'px; font-style:'.$desc_style.';" >'.wp_trim_words( get_the_content(),$exp_count).'</p>

                                                <a href="'.get_post_permalink().'" class="read-more" style="color:'.$btn_text_clr.'; font-size:'.$btn_text_size.'px; background-color:'.$btn_bg_color.';">'.$btn_text.' <i class="fa fa-chevron-right"></i> </a>
                                            </div>
                                        </div>
                                    </div>

                           ';
                        }

                if($advc_blog_style == 'blog_style_7') {
                                 $add_class = (rand(99,99999));

                        $get_author_id = get_the_author_meta('ID');
                        $get_author_gravatar = get_avatar_url($get_author_id, array('size' => 450));
                                           //The loop
                                                 $html .= '
                                    <style>
                                        .advb7_'.$add_class.' .post-content{height:'.$content_hite.'px;} .advb7_'.$add_class.' .post-title a:hover{color:'.$ttl_clr_hvr.'!important;}.advb7_'.$add_class.' .awavc-post-item-4 .post-link li a:hover{background-color:'.$ttl_clr_hvr.'!important;}.advb7_'.$add_class.' .awavc-post-item-4 .read-more:hover{color:'.$btn_clr_hvr.'!important;}.advb7_'.$add_class.' .awavc-post-item-4 .read-more::after{border-color:'.$btn_clr_hvr.'!important;} .advb7_'.$add_class.' .awavc-post-item-4 .month::after{border-color:'.$date_clr.'!important;}.advb7_'.$add_class.' .awavc-post-item-4 .post-date::after,.advb7_'.$add_class.'  .awavc-post-item-4 .post-date::before {background-color: '.$date_clr.'!important;}
                                    </style>

                                    <div class="col-md-'.$advb_col.' col-sm-6 col-xs-12 clearfix advb7_'.$add_class.'  '.$el_class.'" style="padding:px;margin-bottom:'.$pd_btm.'px;">
                                        <div class="awavc-post-item-4">
                                            <div class="thumb">
                                                <img style="height:'.$img_hite.'px;width:'.$img_wid.'px;" src="'.get_the_post_thumbnail_url().'" alt="">
                                            </div>
                                            <div class="content">
                                                <h3 class="post-title"><a href="'.get_post_permalink().'"  style="color:'.$ttl_clr.'; font-size:'.$ttl_size.'px; font-style:'.$ttl_style.'; font-weight:'.$ttl_wt.';">'.get_the_title().'</a></h3>
                                                <span class="post-date" style="color:'.$date_clr.'!important;">'.get_the_date('d,M,y').'</span>
                                                <p class="post-description" style="color:'.$desc_clr.'; font-size:'.$desc_size.'px; font-style:'.$desc_style.';" >'.wp_trim_words( get_the_content(),$exp_count).'</p>
                                                <a href="'.get_post_permalink().'" class="read-more" style="color:'.$btn_text_clr.'; font-size:'.$btn_text_size.'px; background-color:'.$btn_bg_color.';">'.$btn_text.' <i class="fa fa-chevron-right"></i> </a>
                                            </div>
                                        </div>
                                    </div>

                           ';
                        }



                if($advc_blog_style == 'blog_style_8') {
                                 $add_class = (rand(99,99999));

                        $get_author_id = get_the_author_meta('ID');
                        $get_author_gravatar = get_avatar_url($get_author_id, array('size' => 450));
                                           //The loop
                                                 $html .= '
                                    <style>
                                        .advb8_'.$add_class.' .post-content{height:'.$content_hite.'px;} .advb8_'.$add_class.' .post-title a:hover{color:'.$ttl_clr_hvr.'!important;}.advb8_'.$add_class.' .awavc-post-item-4 .post-link li a:hover{background-color:'.$ttl_clr_hvr.'!important;}.advb8_'.$add_class.' .awavc-post-item-4 .read-more:hover{color:'.$btn_clr_hvr.'!important;}.advb8_'.$add_class.' .awavc-post-item-4 .read-more::after{border-color:'.$btn_clr_hvr.'!important;} .advb8_'.$add_class.' .awavc-post-item-4 .month::after{border-color:'.$date_clr.'!important;}.advb8_'.$add_class.' .awavc-post-item-4 .post-date::after,.advb8_'.$add_class.'  .awavc-post-item-4 .post-date::before {background-color: '.$date_clr.'!important;}
                                    </style>

                                    <div class="col-md-'.$advb_col.' col-sm-6 col-xs-12 clearfix advb8_'.$add_class.'  '.$el_class.'" style="padding:px;margin-bottom:'.$pd_btm.'px;">
                                        <div class="awavc-post-item-5">
                                            <div class="thumb">
                                                <img style="height:'.$img_hite.'px;width:'.$img_wid.'px;" src="'.get_the_post_thumbnail_url().'" alt="">
                                                <div class="tags" style="background-color:'.$meta_bg.';"><a  href="'.get_category_link( $categories[0]->term_id ).'" style="color:'.$meta_clr.';"><i style="color:'.$meta_clr.'" class="fa fa-tags"></i> '.$categories[0]->cat_name.'</a></div>
                                            </div>
                                            <div class="content">
                                                <h3 class="post-title"><a href="'.get_post_permalink().'"  style="color:'.$ttl_clr.'; font-size:'.$ttl_size.'px; font-style:'.$ttl_style.'; font-weight:'.$ttl_wt.';">'.get_the_title().'</a></h3>
                                                <ul class="post-meta">
                                                    <li style="color:'.$desc_clr.';">by <a  style="color:'.$ttl_clr_hvr.';" href="'.get_author_posts_url( $get_author_id ) .'">'.get_author_name() .'</a> '.get_the_date('d,M,y').'</li>
                                                </ul>
                                                <p class="post-description" style="color:'.$desc_clr.'; font-size:'.$desc_size.'px; font-style:'.$desc_style.';" >'.wp_trim_words( get_the_content(),$exp_count).'</p>
                                            </div>
                                        </div>
                                    </div>

                           ';
                        }

                if($advc_blog_style == 'blog_style_9') {
                                 $add_class = (rand(99,99999));

                        $get_author_id = get_the_author_meta('ID');
                        $get_author_gravatar = get_avatar_url($get_author_id, array('size' => 450));
                                           //The loop
                                                 $html .= '
                                    <style>
                                        .advb9_'.$add_class.' .post-content{height:'.$content_hite.'px;} .advb9_'.$add_class.' .post-title a:hover{color:'.$ttl_clr_hvr.'!important;}.advb9_'.$add_class.' .awavc-post-item-6 .post-link li a:hover{background-color:'.$ttl_clr_hvr.'!important;}.advb9_'.$add_class.' .awavc-post-item-6 .read-more:hover{color:'.$btn_clr_hvr.'!important;}.advb9_'.$add_class.' .awavc-post-item-6 .read-more::after{border-color:'.$btn_clr_hvr.'!important;} .advb9_'.$add_class.' .awavc-post-item-6 .month::after{border-color:'.$date_clr.'!important;}.advb9_'.$add_class.' .awavc-post-item-6 .post-date::after,.advb9_'.$add_class.'  .awavc-post-item-6 .post-date::before {background-color: '.$date_clr.'!important;}
                                    </style>

                                    <div class="col-md-'.$advb_col.' col-sm-6 col-xs-12 clearfix advb9_'.$add_class.'  '.$el_class.'" style="padding:px;margin-bottom:'.$pd_btm.'px;">
                                        <div class="awavc-post-item-6">
                                            <div class="thumb">
                                                <img style="height:'.$img_hite.'px;width:'.$img_wid.'px;" src="'.get_the_post_thumbnail_url().'" alt="">
                                            </div>
                                            <div class="content">
                                                <ul class="post-meta">
                                                    <li style="color:'.$desc_clr.';">
                                                        <a  href="'.get_category_link( $categories[0]->term_id ).'" style="color:'.$meta_clr.';"><i style="color:'.$meta_clr.'" class="fa fa-tags"></i> '.$categories[0]->cat_name.'</a> /  '.get_the_date('d,M,y').'</li>

                                                </ul>
                                                <h3 class="post-title"><a href="'.get_post_permalink().'"  style="color:'.$ttl_clr.'; font-size:'.$ttl_size.'px; font-style:'.$ttl_style.'; font-weight:'.$ttl_wt.';">'.get_the_title().'</a></h3>

                                                <p class="post-description" style="color:'.$desc_clr.'; font-size:'.$desc_size.'px; font-style:'.$desc_style.';" >'.wp_trim_words( get_the_content(),$exp_count).'</p>

                                                <a href="'.get_post_permalink().'" class="read-more" style="color:'.$btn_text_clr.'; font-size:'.$btn_text_size.'px; background-color:'.$btn_bg_color.';">'.$btn_text.' <i class="fa fa-chevron-right"></i> </a>
                                            </div>
                                        </div>
                                    </div>

                           ';
                        }



                        endwhile;

                    
                 $html .= '</div> 
                 ';
    }


    return $html;
}

add_shortcode("awavc_blog_two", "awavc_blog_shortcode");