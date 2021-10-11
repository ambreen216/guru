<?php

vc_map(

array(
    "name" => __( "Advanced Hover Effects", "awavcl" ),
    "base" => "awavc_hover_effects",
    "class" => "",
    "icon"        => "advc_hover_effects_icon",
    "category" => __( "Advanced Elements", "awavcl"),
    "description" => __( "Image on hover effects", "awavcl"),
    "params" => array(
    
    array(
        "type"              => "dropdown",
        "heading"           => __( "Select Style", "awavcl" ),
        "param_name"        => "advc_style",
        "value"             => array(
            __( 'Style 1', "awavcl" )        => "style-one",
            __( 'Style 2', "awavcl" )        => "style-two",
            __( 'Style 3', "awavcl" )        => "style-four",
            __( 'Style 4', "awavcl" )        => "style-five",
            __( 'Style 5', "awavcl" )        => "style-six",
            __( 'Style 6', "awavcl" )        => "style-eight",
            __( 'Style 7', "awavcl" )        => "style-nine",
            __( 'Style 8', "awavcl" )        => "style-eleven",
            __( 'Style 9', "awavcl" )        => "style-twelve",
            __( 'Style 10', "awavcl" )        => "style-Thirteen",
            __( 'Style 11(Circle)', "awavcl" )        => "style-cr-11",
            __( 'Style 12(Circle)', "awavcl" )        => "style-cr-12",
            __( 'Style 13(Circle)', "awavcl" )        => "style-cr-13",/*
            __( 'Style 14(Circle)', "awavcl" )        => "style-cr-14",
            __( 'Style 15(Circle)', "awavcl" )        => "style-cr-15",
            __( 'Style 16(Circle)', "awavcl" )        => "style-cr-16",
            __( 'Style 17(Circle)', "awavcl" )        => "style-cr-17",
            __( 'Style 18(Circle)', "awavcl" )        => "style-cr-18",
            __( 'Style 19(Circle)', "awavcl" )        => "style-cr-19",
            __( 'Style 20(Circle)', "awavcl" )        => "style-cr-20",*/


        ),
        "admin_label"        => true,
    ),
    
    array(
        "type" => "attach_image",
        "heading" => __("Image", "awavcl"),
        "param_name" => "advc_image",
        "value" => "",
        "description" => __("select image", "awavcl"),
        "group" => __("Image", "awavcl")
    ),
    array(
        'type'             => 'prime_slider',
        'heading'          => __( 'Image Width', 'awavcl' ),
        'param_name'       => 'img_wid',
        "value" => 300,
        "min" => 5,
        "max" => 1500,
        "step" => 1,
        "unit" => "px",
        "description" => __("For getting best view give width as column width", "awavcl"),
        "group" => __("Image", 'awavcl'),
     ),
    array(
        'type'             => 'prime_slider',
        'heading'          => __( 'Image Height', 'awavcl' ),
        'param_name'       => 'img_hite',
        "value" => 300,
        "min" => 5,
        "max" => 1500,
        "step" => 1,
        "unit" => "px",
        "description" => __("You may need to fix the height for make image fully circle", "awavcl"),
        "group" => __("Image", 'awavcl'),
     ), 
         array(
        "type"              => "dropdown",
        "heading"           => __( "Image Responsive", "awavcl" ),
        "param_name"        => "img_respo",
        "value"             => array(
            __( 'Smae Size On All Device', "awavcl" )   => "same",
            __( 'Different Size On Mobile And Tab', "awavcl" )  => "not_same",

        ),
        "group"             => "Image",
    ),
    array(
        'type'             => 'prime_slider',
        'heading'          => __( 'Image Width On Tab', 'awavcl' ),
        'param_name'       => 'img_wid_tab',
        "value" => 250,
        "min" => 5,
        "max" => 1500,
        "step" => 1,
        "unit" => "px",
        "description" => __("", "awavcl"),
        "group" => __("Image", 'awavcl'),
        "dependency"    => array( 'element' => "img_respo", 'value' => array('not_same') ),
     ),
    array(
        'type'             => 'prime_slider',
        'heading'          => __( 'Image Height On Tab', 'awavcl' ),
        'param_name'       => 'img_hite_tab',
        "value" => 250,
        "min" => 5,
        "max" => 1500,
        "step" => 1,
        "unit" => "px",
        "description" => __("You may need to fix the height for make image fully circle", "awavcl"),
        "group" => __("Image", 'awavcl'),
        "dependency"    => array( 'element' => "img_respo", 'value' => array('not_same') ),
     ), 
    
    array(
        'type'             => 'prime_slider',
        'heading'          => __( 'Image Width On Mobile', 'awavcl' ),
        'param_name'       => 'img_wid_mob',
        "value" => 200,
        "min" => 5,
        "max" => 1500,
        "step" => 1,
        "unit" => "px",
        "description" => __("Check your site responsiveness here https://www.responsinator.com/", "awavcl"),
        "group" => __("Image", 'awavcl'),
        "dependency"    => array( 'element' => "img_respo", 'value' => array('not_same') ),
    ),
    array(
        'type'             => 'prime_slider',
        'heading'          => __( 'Image Height On Mobile', 'awavcl' ),
        'param_name'       => 'img_hite_mob',
        "value" => 200,
        "min" => 5,
        "max" => 1500,
        "step" => 1,
        "unit" => "px",
        "description" => __("You may need to fix the height for make image fully circle", "awavcl"),
        "group" => __("Image", 'awavcl'),
        "dependency"    => array( 'element' => "img_respo", 'value' => array('not_same')),
     ), 
    
     
            
    array(
        "type" => "textfield",
        "heading" => __("Title", "awavcl"),
        "param_name" => "advc_ttl",
        "value" => "John Doe",
    ),
    array(
        "type"          => "textarea_html",
        "heading"       => __("Description", "awavcl"),
        "param_name"    => "content",
        "value"         => "<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>",
        "dependency"    => array( 'element' => "advc_style", 'value' => array('style-two', 'style-four','style-five','style-six','style-eleven','style-cr-11','style-cr-12','style-cr-13','style-cr-14','style-cr-15','style-cr-16','style-cr-17','style-cr-18','style-cr-19','style-cr-20') ),
    ),
    array(
        'type' => 'iconpicker',
        'heading' => __( 'Icon', 'awavcl' ),
        'param_name' => 'advc_icon',
        'value' => 'fa fa-check-square',
        // default value to backend editor admin_label
        'settings' => array(
        'emptyIcon' => false,
        // default true, display an "EMPTY" icon?
        'iconsPerPage' => 4000,
        // default 100, how many icons per/page to display, we use (big number) to display all icons in single page
        'type' => 'fontawesome',
                    ),
        'description' => __( 'Select icon from library.', 'awavcl' ),
        "dependency"    => array( 'element' => "advc_style", 'value' => array('style','style-eight') ),
        ),
    array(
        'type'             => 'prime_slider',
        'heading'          => __( 'Icon Size', 'awavcl' ),
        'param_name'       => 'advc_icon_size',
        "value" => 18,
        "min" => 5,
        "max" => 100,
        "step" => 1,
        "unit" => "px",
        "description" => __("", "awavcl"),
        "group" => __("Settings", 'awavcl'),
        "dependency"    => array( 'element' => "advc_style", 'value' => array('style','style-eight') ),
        ),

    array(
        "type"              => "colorpicker",
        "heading"           => __( "Icon Color", "awavcl" ),
        "param_name"        => "advc_icon_color",
        "value"             => '',
        "group"             => "Settings",
        "description" => __("This is also title hover color", "awavcl"),
        "dependency"    => array( 'element' => "advc_style", 'value' => array('style','style-eight') ),
        ),
    array(
        'type' => 'vc_link',
        'heading' => __( 'Add a Link', 'awavcl' ),
        'param_name' => 'image_link',
        'description' => __( 'If dont want to link,just leave it empty', 'awavcl' ),
        'value' => '#',
        "dependency"    => array( 'element' => "advc_style", 'value' => array('style-one', 'style-four','style-five','style-four','style-six','style-nine','style-eleven','style-Thirteen','style-cr-11','style-cr-12','style-cr-13') ),
        "group"             => "Link"
        ),
        
        


    // Social Group
    array(
            'type' => 'param_group',
            'heading' => __( 'Social Links', 'awavcl' ),
            'param_name' => 'advc_social_links',
            "dependency"    => array( 'element' => "advc_style", 'value' => array('style-two', 'style-three','style-eleven') ),

            'params' => array(
                array(
                    'type' => 'vc_link',
                    'heading' => __( 'Social Link URL', 'awavcl' ),
                    'param_name' => 'social_link_url',
                    'description' => __( '', 'awavcl' ),
                    'value' => 'https://www.facebook.com/',
                ),
                array(
                    'type' => 'iconpicker',
                    'heading' => __( 'Social icon', 'awavcl' ),
                    'param_name' => 'social_icon',
                    'value' => 'fa fa-check-square',
                    // default value to backend editor admin_label
                    'settings' => array(
                        'emptyIcon' => false,
                        // default true, display an "EMPTY" icon?
                        'iconsPerPage' => 4000,
                        // default 100, how many icons per/page to display, we use (big number) to display all icons in single page
                        'type' => 'fontawesome',
                    ),
                    'description' => __( 'Select icon from library.', 'awavcl' ),
                ),

                array(
                    'type'             => 'prime_slider',
                    'heading'          => __( 'Social icon Size', 'awavcl' ),
                    'param_name'       => 'social_icon_size',
                    "value" => 16,
                    "min" => 5,
                    "max" => 100,
                    "step" => 1,
                    "unit" => "px",
                    "description" => __("", "awavcl"),
                ),
                array(
                    "type"              => "colorpicker",
                    "heading"           => __( "Icon Color", "awavcl" ),
                    "param_name"        => "sc_icon_color",
                    "value"             => '',
                    "description" => __("default color is #ffffff", "awavcl"),
                ),
                ),
        ),
    array(
            'type' => 'param_group',
            'heading' => __( 'Links', 'awavcl' ),
            'param_name' => 'advc_custom_links',
            "dependency"    => array( 'element' => "advc_style", 'value' => array('style-twelve','style-Thirteen') ),

            'params' => array(
                array(
                    'type' => 'textfield',
                    'heading' => __( 'Link Text', 'awavcl' ),
                    'param_name' => 'link_txt',
                    'description' => __( '', 'awavcl' ),
                    'value' => 'Learn More',

                ),

                array(
                    'type' => 'textfield',
                    'heading' => __( 'Link URL', 'awavcl' ),
                    'param_name' => 'link_url',
                    'description' => __( '', 'awavcl' ),
                    'value' => '#',
                ),
                array(
                    "type"              => "dropdown",
                    "heading"           => __( "Link Open In ", "awavcl" ),
                    "param_name"        => "advc_target",
                    "value"             => array(
                        __( 'Same Window', "awavcl" )   => "",
                        __( 'New Window', "awavcl" )  => "_target",

                    ),
                ),

            ),
        ),
    array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Title Font Size', 'awavcl' ),
            'param_name'       => 'advc_ttl_font_size',
            "value" => 21,
            "min" => 5,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "description" => __("", "awavcl"),
            "group" => __("Settings", 'awavcl'),
        ),
    array(
        "type"              => "colorpicker",
        "heading"           => __( "Title Color", "awavcl" ),
        "param_name"        => "advc_ttl_color",
        "value"             => '',
        "group"             => "Color",
    ),

    array(
        "type"              => "dropdown",
        "heading"           => __( "Title to be <em>italic</em>", "awavcl" ),
        "param_name"        => "advc_ttl_italic",
        "value"             => array(
            __( 'No', "awavcl" )   => "no",
            __( 'Yes', "awavcl" )  => "italic",

        ),
        "group"             => "Settings",
    ),

    /* Description Elements Here *//* Description Elements Here *//* Description Elements Here *//* Description Elements Here */
    
                                            /* Description Elements Here */
    
    /* Description Elements Here *//* Description Elements Here *//* Description Elements Here *//* Description Elements Here */
    
    array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Description Font Size', 'awavcl' ),
            'param_name'       => 'advc_desc_font_size',
            "value" => 14,
            "min" => 5,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "description" => __("", "awavcl"),
            "group" => __("Settings", 'awavcl'),
            "dependency"    => array( 'element' => "advc_style", 'value' => array('style-two','style-four','style-five','style-six','style-eleven','style-cr-11','style-cr-12','style-cr-13','style-cr-14','style-cr-15','style-cr-16','style-cr-17','style-cr-18','style-cr-19','style-cr-20',) ),
        ),
    array(
        "type"              => "colorpicker",
        "heading"           => __( "Description Color", "awavcl" ),
        "param_name"        => "advc_desc_color",
        "value"             => '',
        //"description" => __("default color is #ffffff", "awavcl"),
        "group"             => "Color",
        "dependency"    => array( 'element' => "advc_style", 'value' => array('style-two','style-four','style-five','style-six','style-eleven','style-cr-11','style-cr-12','style-cr-12','style-cr-13','style-cr-14','style-cr-15','style-cr-16','style-cr-17','style-cr-18','style-cr-19','style-cr-20',) ),
    ),
    array(
        "type"              => "dropdown",
        "heading"           => __( "Description  to be <em>italic</em>", "awavcl" ),
        "param_name"        => "advc_desc_italic",
        "value"             => array(
            __( 'No', "awavcl" )   => "no",
            __( 'Yes', "awavcl" )  => "italic",

        ),
        "group"             => "Settings",
        "dependency"    => array( 'element' => "advc_style", 'value' => array('style-two','style-four','style-five','style-six','style-eleven','style-cr-11','style-cr-12','style-cr-13','style-cr-14','style-cr-15','style-cr-16','style-cr-17','style-cr-18','style-cr-19','style-cr-20',) ),
    ),
    /* Description Elements Here *//* Description Elements Here *//* Description Elements Here *//* Description Elements Here */
    
                                            /* Description Elements Here */
    
    /* Link Elements Here *//* Link Elements Here *//* Link Elements Here *//* Link Elements Here */
    /* Link Elements Here *//* Link Elements Here *//* Link Elements Here *//* Link Elements Here */
    /* Link Elements Here *//* Link Elements Here *//* Link Elements Here *//* Link Elements Here */

    array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Link Text Font Size', 'awavcl' ),
            'param_name'       => 'advc_link_font_size',
            "value" => 21,
            "min" => 5,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "description" => __("", "awavcl"),
            "group"             => "Link",
            "dependency"    => array( 'element' => "advc_style", 'value' => array('style-twelve','style-Thirteen','style-cr-11') ),
        ),
    array(
        "type"              => "colorpicker",
        "heading"           => __( "Link Text Background", "awavcl" ),
        "param_name"        => "advc_link_bg",
        "value"             => '',
        //"description" => __("default color is #ffffff", "advc_cr"),
        "group"             => "Link",
        "dependency"    => array( 'element' => "advc_style", 'value' => array('style-twelve','style-Thirteen','style-cr-11') ),
    ),
    array(
        "type"              => "colorpicker",
        "heading"           => __( "Link Text Color", "awavcl" ),
        "param_name"        => "advc_link_color",
        "value"             => '',
        //"description" => __("default color is #ffffff", "advc_cr"),
        "group"             => "Link",
        "dependency"    => array( 'element' => "advc_style", 'value' => array('style-twelve','style-Thirteen','style-cr-11') ),
    ),
    array(
        "type"              => "colorpicker",
        "heading"           => __( "Link Text Color on Hover", "awavcl" ),
        "param_name"        => "link_hvr_clr",
        "value"             => '',
        //"description" => __("default color is #ffffff", "advc_cr"),
        "group"             => "Link",
        "dependency"    => array( 'element' => "advc_style", 'value' => array('style-twelve','style-Thirteen','style-cr-11') ),
    ),
    array(
        "type"              => "dropdown",
        "heading"           => __( "Link Text To Be <em>Italic</em>", "awavcl" ),
        "param_name"        => "advc_link_italic",
        "value"             => array(
            __( 'No', "awavcl" )   => "no",
            __( 'Yes', "awavcl" )  => "italic",

        ),
        "group"             => "Link",
        "dependency"    => array( 'element' => "advc_style", 'value' => array('style-twelve','style-Thirteen','style-cr-11') ),
    ),
    /* Link Elements Here *//* Link Elements Here *//* Link Elements Here *//* Link Elements Here */ 
    /* Link Elements Here *//* Link Elements Here *//* Link Elements Here *//* Link Elements Here */ 
    /* Link Elements Here *//* Link Elements Here *//* Link Elements Here *//* Link Elements Here */ 
    /* Link Elements Here *//* Link Elements Here *//* Link Elements Here *//* Link Elements Here */ 
    
    array(
        "type"              => "colorpicker",
        "heading"           => __( "Background Color", "awavcl" ),
        "param_name"        => "advc_bg_color",
        "value"             => '',
        "group"             => "Color",
        "dependency"    => array( 'element' => "advc_style", 'value' => array('style-one','style-four','style-eight','style-nine') ),
    ),
    array(
        "type"              => "colorpicker",
        "heading"           => __( "Overlay Color", "awavcl" ),
        "param_name"        => "advc_ovrlay_color",
        "value"             => '',
        "description"       => __("Overlay background/border/ color Ps: give some transparency to the color", "awavcl"),
        //"description" => __("default color is #ffffff", "awavcl"),
        "group"             => "Color",
        "dependency"    => array( 'element' => "advc_style", 'value' => array('style-two','style-four','style-five','style-six','style-nine','style-eleven','style-twelve','style-cr-11','style-cr-12','style-cr-13','style-cr-14','style-cr-15','style-cr-16','style-cr-17','style-cr-18','style-cr-19','style-cr-20') ),
    ),

    array(
        "type"              => "colorpicker",
        "heading"           => __( "Overlay Color 2", "awavcl" ),
        "param_name"        => "advc_ovrlay_color_1",
        "value"             => '',
        //"description" => __("default color is #ffffff", "advc_cr"),
        "group"             => "Color",
        "dependency"    => array( 'element' => "advc_style", 'value' => array('style-three','style-Thirteen') ),
    ),
    array(
        "type"              => "colorpicker",
        "heading"           => __( "Overlay Graddient Color 1", "awavcl" ),
        "param_name"        => "advc_ovrlay_grd_1",
        "value"             => '',
        //"description" => __("default color is #ffffff", "awavcl"),
        "group"             => "Color",
        "dependency"    => array( 'element' => "advc_style", 'value' => array('style-four','style-Thirteen') ),
    ),
    array(
        "type"              => "colorpicker",
        "heading"           => __( "Overlay Graddient Color 2", "awavcl" ),
        "param_name"        => "advc_ovrlay_grd_2",
        "value"             => '',
        //"description" => __("default color is #ffffff", "advc"),
        "group"             => "Color",
        "dependency"    => array( 'element' => "advc_style", 'value' => array('style-four','style-Thirteen') ),
    ),
    
    
    array(
        "type"              => "colorpicker",
        "heading"           => __( "Border Color", "awavcl" ),
        "param_name"        => "brdr_clr",
        "value"             => '',
        //"description" => __("default color is #ffffff", "advc"),
        "group"             => "Color",
        "dependency"    => array( 'element' => "advc_style", 'value' => array('style-cr-11','style-cr-12','style-cr-13','style-cr-14','style-cr-15') ),
    ),
    array(
        "type"              => "colorpicker",
        "heading"           => __( "Border Color on Hover", "awavcl" ),
        "param_name"        => "brdr_clr_hvr",
        "value"             => '',
        //"description" => __("default color is #ffffff", "advc"),
        "group"             => "Color",
        "dependency"    => array( 'element' => "advc_style", 'value' => array('style-cr-11','style-cr-12','style-cr-13','style-cr-14','style-cr-15',) ),
    ),
        array(
        "type"              => "colorpicker",
        "heading"           => __( "Title Under Line Color", "awavcl" ),
        "param_name"        => "underline_clr",
        "value"             => '',
        //"description" => __("default color is #ffffff", "advc"),
        "group"             => "Color",
        "dependency"    => array( 'element' => "advc_style", 'value' => array('style-cr-12','style-cr-13') ),
        "description" => __("Leaving it empty:border color will replace it . If dont want any line then make it transparent ", "awavcl"),
    ),       
    array(
        "type"              => "textfield",
        "heading"           => __( "Custom CSS Class", "awavcl" ),
        "param_name"        => "advc_css_class",
        "value"             => '',
        "description" => __("using custom class you can customize styles.", "awavcl"),
        "group"             => "",
    ),




    )
)

);


function awavc_hvr_effects_shortcode( $atts, $content = null, $tag ) {
    extract(shortcode_atts(array(

            "advc_style"     => 'style-one',
            "advc_image"     => '',
            "img_hite"     => '',
            "img_wid"     => '',
            "img_hite_tab"     => '',
            "img_wid_tab"     => '',
            "img_hite_mob"     => '',
            "img_wid_mob"     => '',
            "advc_ttl"      => 'Title',
            "image_link"      => '',
            "advc_icon"      => 'fa fa-atom',
            "advc_icon_size"      => '',
            "advc_icon_color"      => '',
            "advc_icon_color_hvr"      => '',
            "advc_open_window"      => '',
            "advc_social_links" => '',
            "advc_custom_links" => '',
            "advc_ovrlay_color" => '',
            "advc_opacity" => '',
            "advc_ovrlay_color_1" => '',
            "advc_ovrlay_grd_1" => '',
            "advc_ovrlay_grd_2" => '',
            "advc_ttl_font_size" => '',
            "advc_ttl_color" => '',
            "advc_ttl_italic" => '',
            "advc_desc_font_size" => '',
            "advc_desc_color" => '',
            "advc_desc_italic" => '',
            "advc_link_font_size" => '',
            "advc_link_color" => '',
            "advc_link_bg" => '',
            "link_hvr_clr" => '',
            "advc_link_italic" => '',
            "advc_bg_color" => '',
            "brdr_clr" => '',
            "brdr_clr_hvr" => '',
            "underline_clr" => '',
            "advc_css_class" => '',

    ), $atts));
        

    wp_register_style('advc_style_flowerx', plugins_url( 'css/style-flowerx.css' , __FILE__ ) );
    wp_enqueue_style( 'advc_style_flowerx' );

    $image = wp_get_attachment_image_src( $advc_image, 'full' );

    $image_link   = vc_build_link( $image_link);
    $image_url   =  $image_link['url'];
    $image_target   =  $image_link['target'];
    $image_title   =  $image_link['title'];
    $output ='';
    //$output .= '<style>@import url(https://fonts.googleapis.com/css?family='.$font.');</style>';
    $image_linking ='';
    $cr_link       ='';
    If($image_url !== ''){
               $image_linking ='<a href="'.$image_url.'" target="'.$image_target.'"></a>';

    }
    
    If($image_url !== '' || $advc_style =='style-cr-11' ){
               $cr_link ='<a style="background:'.$advc_link_bg.';font-size:'.$advc_link_font_size.'px;color:'.$advc_link_color.';font-style:'.$advc_link_italic.';border-color:'.$brdr_clr_hvr.'!important;" href="'.$image_url.'" target="'.$image_target.'">'.$image_title.'</a>';

    }

    $advc_social_links = vc_param_group_parse_atts($advc_social_links);


    if($advc_style =='style-two'||$advc_style =='style-eleven'){
        $advc_social_links_html ='';
            $advc_social_links_html .= '<div class="icons">';
            foreach ($advc_social_links as $advc_social_link) {
                $social_icon = '';
                $social_icon_size = '';
                $sc_icon_color = '';
                $sc_icon_color_hvr = '';
                $sc_icon_color_bg = '';
                $sc_icon_color_bg_hvr = '';


                $social_link = $advc_social_link['social_link_url'];
                $social_linked   = vc_build_link( $social_link);
                $social_url  = $social_linked['url'];
                $social_target  = $social_linked['target'];
                if(!empty($advc_social_link['social_icon'])){$social_icon = $advc_social_link['social_icon'];}
                if(!empty($advc_social_link['social_icon_size'])){$social_icon_size = $advc_social_link['social_icon_size'];}
                if(!empty($advc_social_link['sc_icon_color'])){$sc_icon_color = $advc_social_link['sc_icon_color'];}
                if(!empty($advc_social_link['sc_icon_color_hvr'])){$sc_icon_color_hvr = $advc_social_link['sc_icon_color_hvr'];}
                if(!empty($advc_social_link['sc_icon_color_bg'])){$sc_icon_color_bg = $advc_social_link['sc_icon_color_bg'];}
                if(!empty($advc_social_link['sc_icon_color_bg_hvr'])){$sc_icon_color_bg_hvr = $advc_social_link['sc_icon_color_bg_hvr'];}

                    $advc_social_links_html .= '
                    <style>
                          li{list-style:none;}

                    </style>

                    <a href="'.$social_url.'" target="'.$social_target.'" ><i class="'.$social_icon.' puku" style="color:'.$sc_icon_color.'!important; font-size:'.$social_icon_size.'px;"></i></a> ';
            }
            $advc_social_links_html  .='</div>';

    }
$advc_custom_links = vc_param_group_parse_atts($advc_custom_links);


    if($advc_style == 'style-twelve'|| $advc_style == 'style-Thirteen'){
        $advc_custom_links_html ='';
            $advc_custom_links_html .= '<div class="links">';
            foreach ($advc_custom_links as $advc_custom_link) {

                $link_txt = '';
                $link_url = '';
                $advc_target = '';
                if(!empty($advc_custom_link['link_txt'])){$link_txt = $advc_custom_link['link_txt'];}
                if(!empty($advc_custom_link['link_url'])){$link_url = $advc_custom_link['link_url'];}
                if(!empty($advc_custom_link['advc_target'])){$advc_target = $advc_custom_link['advc_target'];}


                    $advc_custom_links_html .= '
                    <style>


                    </style>

                    <li> <a href="'.$link_url.'" target="'.$advc_target.'" style="color:'.$advc_link_color.'; font-size:'.$advc_link_font_size.'px; font-style:'.$advc_link_italic.';">'.$link_txt.'></a></li> ';
            }
            $advc_custom_links_html  .='</div>';

    }

    if ( $advc_style =='style-one' ){
             $add_class =  (rand(99,99999));
        $output .='
                     <style>
                               .at1_'.$add_class.'{background:'.$advc_bg_color.'!important;}
                                @media (min-width: 481px) and (max-width: 768px) {.at1_'.$add_class.' img{height:'.$img_hite_tab.'px!important;width:'.$img_wid_tab.'px!important;}}@media (min-width: 319px) and (max-width: 480px) {.at1_'.$add_class.' img{height:'.$img_hite_mob.'px!important;width:'.$img_wid_mob.'px!important;}}
                     </style>

        <figure class="at1_'.$add_class.' style-one '.$advc_css_class.' ">
                            <img style="height:'.$img_hite.'px;width:'.$img_wid.'px;" src="'.$image[0].'" alt="'.$advc_ttl.'" />
                            <figcaption>
                                <h3 class="st1_ttl" style="color:'.$advc_ttl_color.'; font-size:'.$advc_ttl_font_size.'px; font-style:'.$advc_ttl_italic.';">'.$advc_ttl.'</h3>
                            </figcaption>
                            '.$image_linking.'
                        </figure>';

    }
    if ( $advc_style =='style-two' ){
               $add_class =  (rand(99,99999));
               if(empty($advc_ttl_color)){$advc_ttl_color ='#fff';}
        $output .='

        <style>

        .at2_'.$add_class.'.style-two::after, .at2_'.$add_class.'.style-two::before, .at2_'.$add_class.'.style-two figcaption::after, .at2_'.$add_class.'.style-two figcaption::before{background:'.$advc_ovrlay_color.'!important;}   .at2_'.$add_class.'.style-two p { color: #fff; }
        @media (min-width: 481px) and (max-width: 768px) {.at2_'.$add_class.' img{height:'.$img_hite_tab.'px!important;width:'.$img_wid_tab.'px!important;}}@media (min-width: 319px) and (max-width: 480px) {.at2_'.$add_class.' img{height:'.$img_hite_mob.'px!important;width:'.$img_wid_mob.'px!important;}}
}
        </style>

        <figure class="at2_'.$add_class.' style-two '.$advc_css_class.' ">
            <img style="height:'.$img_hite.'px;width:'.$img_wid.'px;" src="'.$image[0].'" alt="'.$advc_ttl.'" />
            <figcaption>
              <h2  style="color:'.$advc_ttl_color.'; font-size:'.$advc_ttl_font_size.'px; font-style:'.$advc_ttl_italic.';">'.$advc_ttl.'</h2>
              <p style="color:'.$advc_desc_color.'; font-size:'.$advc_desc_font_size.'px; font-style:'.$advc_desc_italic.';">'.$content.'</p>

              '.$advc_social_links_html.'
            </figcaption>
           </figure>
           '.$image_linking.'
           ';
    }
    if ( $advc_style =='style-four' ){      //style3
                  $add_class =  (rand(99,99999));
        $output .='

        <style>
        .st3_'.$add_class.':hover .st3_ttl{color:red;}.st3_'.$add_class.'.style-four {background: '.$advc_ovrlay_color.' linear-gradient(to right, '.$advc_ovrlay_grd_1.', '.$advc_ovrlay_grd_2.') repeat scroll 0 0!important;}  .st3_'.$add_class.' .st3_desc {background:'.$advc_bg_color.'!important;}

            @media (min-width: 481px) and (max-width: 768px) {.st3_'.$add_class.' img{height:'.$img_hite_tab.'px!important;width:'.$img_wid_tab.'px!important;}}@media (min-width: 319px) and (max-width: 480px) {.st3_'.$add_class.' img{height:'.$img_hite_mob.'px!important;width:'.$img_wid_mob.'px!important;}}
        </style>

        <figure class="st3_'.$add_class.' style-four '.$advc_css_class.' ">
            <img style="height:'.$img_hite.'px;width:'.$img_wid.'px;" src="'.$image[0].'" alt="'.$advc_ttl.'" />
            <figcaption>
                <div>
                  <h2 class="st3_ttl" style="color:'.$advc_ttl_color.'; font-size:'.$advc_ttl_font_size.'px; font-style:'.$advc_ttl_italic.';">'.$advc_ttl.'</h2>
                  <h4 class="st3_desc"  style="color:'.$advc_desc_color.'; font-size:'.$advc_desc_font_size.'px; font-style:'.$advc_desc_italic.';">'.$content.'</h4>
                </div>

            </figcaption>
           </figure>';
    }
    if ( $advc_style =='style-five' ){     //style4
                $add_class =  (rand(99,99999));
        $output .='

        <style>
            .st4_'.$add_class.'.style-five:hover .puku{color: '.$advc_icon_color.'!important}.st4_'.$add_class.'.style-five::before,.style-five figcaption {background-color: '.$advc_ovrlay_color.'!important;content:"'.$content.'";color:'.$advc_desc_color.'; font-size:'.$advc_desc_font_size.'px; font-style:'.$advc_desc_italic.';padding:12px}@media (min-width: 481px) and (max-width: 768px) {.st4_'.$add_class.' img{height:'.$img_hite_tab.'px!important;width:'.$img_wid_tab.'px!important;}}@media (min-width: 319px) and (max-width: 480px) {.st4_'.$add_class.' img{height:'.$img_hite_mob.'px!important;width:'.$img_wid_mob.'px!important;}}
        </style>

                        <figure class="st4_'.$add_class.' style-five '.$advc_css_class.' ">
                            <img style="height:'.$img_hite.'px;width:'.$img_wid.'px;" src="'.$image[0].'" alt="'.$advc_ttl.'" />
                            <figcaption>
                                <h3  class="puku" style="color:'.$advc_ttl_color.'; font-size:'.$advc_ttl_font_size.'px; font-style:'.$advc_ttl_italic.';">'.$advc_ttl.'</h3>

                            </figcaption><i class="'.$advc_icon.'" style="color:'.$advc_icon_color.'; font-size:'.$advc_icon_size.'px;"></i>
                            '.$image_linking.'
                        </figure>';
    }
    if ( $advc_style =='style-six' ){     //style5
                   $add_class =  (rand(99,99999));
        $output .='

        <style>
                .st5_'.$add_class.'.style-six figcaption {background-color: '.$advc_ovrlay_color.'!important;}.st5_'.$add_class.'.style-six::before, .style-six::after {border: 1px solid '.$advc_ovrlay_color.'!important;}@media (min-width: 481px) and (max-width: 768px) {.st5_'.$add_class.' img{height:'.$img_hite_tab.'px!important;width:'.$img_wid_tab.'px!important;}}@media (min-width: 319px) and (max-width: 480px) {.st5_'.$add_class.' img{height:'.$img_hite_mob.'px!important;width:'.$img_wid_mob.'px!important;}}
        </style>

                        <figure class="st5_'.$add_class.' style-six  '.$advc_css_class.'">
                                <img style="height:'.$img_hite.'px;width:'.$img_wid.'px;" src="'.$image[0].'" alt="'.$advc_ttl.'" />
                                <figcaption>
                                    <h3 style="color:'.$advc_ttl_color.'; font-size:'.$advc_ttl_font_size.'px; font-style:'.$advc_ttl_italic.';">'.$advc_ttl.'</h3>
                                    <p  style="color:'.$advc_desc_color.'; font-size:'.$advc_desc_font_size.'px; font-style:'.$advc_desc_italic.';text-align:center;">'.$content.'</p>
                                </figcaption>
                                '.$image_linking.'

                        </figure>'

                        ;
    }

    if ( $advc_style =='style-eight' ){      //style6
            $add_class =  (rand(99,99999));
        $output .='

        <style>
               .st6_'.$add_class.'.style-eight figcaption{background-color: '.$advc_bg_color.'!important;}.st6_'.$add_class.' h4{color:#fff;}
               @media (min-width: 481px) and (max-width: 768px) {.st6_'.$add_class.' img{height:'.$img_hite_tab.'px!important;width:'.$img_wid_tab.'px!important;}}@media (min-width: 319px) and (max-width: 480px) {.st6_'.$add_class.' img{height:'.$img_hite_mob.'px!important;width:'.$img_wid_mob.'px!important;}}
        </style>

                    <figure class="st6_'.$add_class.' style-eight '.$advc_css_class.'">
                        <div class="image">
                            <img style="height:'.$img_hite.'px;width:'.$img_wid.'px;" src="'.$image[0].'" alt="'.$advc_ttl.'" />
                        <figcaption>
                            <h4  style="color:'.$advc_ttl_color.'!important; font-size:'.$advc_ttl_font_size.'px; font-style:'.$advc_ttl_italic.';">'.$advc_ttl.'</h4>
                            <i class="'.$advc_icon.'" style="color:'.$advc_icon_color.'; font-size:'.$advc_icon_size.'px;"></i>
                        </figcaption>
                        '.$image_linking.'
                    </figure>';
    }

    if ( $advc_style =='style-nine' ){  //style7
                $add_class =  (rand(99,99999));
        $output .='

        <style>

               .st7_'.$add_class.'.style-nine{background:'.$advc_bg_color.';}.st7_'.$add_class.'.style-nine::after{border:8px solid '.$advc_ovrlay_color.'!important;} .st7_'.$add_class.' h3{color:#fff;}
                @media (min-width: 481px) and (max-width: 768px) {.st7_'.$add_class.' img{height:'.$img_hite_tab.'px!important;width:'.$img_wid_tab.'px!important;}}@media (min-width: 319px) and (max-width: 480px) {.st7_'.$add_class.' img{height:'.$img_hite_mob.'px!important;width:'.$img_wid_mob.'px!important;}}
        </style>

                    <figure class="st7_'.$add_class.' style-nine '.$advc_css_class.'">
                            <img style="height:'.$img_hite.'px;width:'.$img_wid.'px;" src="'.$image[0].'" alt="'.$advc_ttl.'" />
                                <figcaption>
                                    <h3 style="color:'.$advc_ttl_color.'!important; font-size:'.$advc_ttl_font_size.'px; font-style:'.$advc_ttl_italic.';">'.$advc_ttl.'</h3>
                                </figcaption>
                                '.$image_linking.'
                        </figure>';
    }

    if ( $advc_style =='style-eleven' ){   //style8
                 $add_class =  (rand(99,99999));
        $output .='

        <style>

               .st8_'.$add_class.'.style-eleven::after, .style-eleven::before, .style-eleven figcaption::after, .style-eleven figcaption::before {background: '.$advc_ovrlay_color.'!important;}.st8_'.$add_class.' h2,.st8_'.$add_class.' p{color:#fff;}
                @media (min-width: 481px) and (max-width: 768px) {.st8_'.$add_class.' img{height:'.$img_hite_tab.'px!important;width:'.$img_wid_tab.'px!important;}}@media (min-width: 319px) and (max-width: 480px) {.st8_'.$add_class.' img{height:'.$img_hite_mob.'px!important;width:'.$img_wid_mob.'px!important;}}
        </style>

                    <figure class="st8_'.$add_class.' style-eleven '.$advc_css_class.'">
                      <img style="height:'.$img_hite.'px;width:'.$img_wid.'px;" src="'.$image[0].'" alt="'.$advc_ttl.'" />
                      <figcaption>
                        <h2 style="color:'.$advc_ttl_color.'; font-size:'.$advc_ttl_font_size.'px; font-style:'.$advc_ttl_italic.';">'.$advc_ttl.'</h2>
                        <p style="color:'.$advc_desc_color.'; font-size:'.$advc_desc_font_size.'px; font-style:'.$advc_desc_italic.';">'.$content.'</p>
                       '.$advc_social_links_html.'
              </figcaption>
            </figure>';
    }

    if ( $advc_style =='style-twelve' ){  //style9
                  $add_class =  (rand(99,99999));
        $output .='

        <style>

               .st9_'.$add_class.'.style-twelve::after {background-color: '.$advc_ovrlay_color.'!important;opacity:.8;}.st9_'.$add_class.' h3{color:#fff;}.style-twelve {background-color: '.$advc_ovrlay_color.'!important;}
                @media (min-width: 481px) and (max-width: 768px) {.st9_'.$add_class.' img{height:'.$img_hite_tab.'px!important;width:'.$img_wid_tab.'px!important;}}@media (min-width: 319px) and (max-width: 480px) {.st9_'.$add_class.' img{height:'.$img_hite_mob.'px!important;width:'.$img_wid_mob.'px!important;}}
        </style>

                    <figure class="st9_'.$add_class.' style-twelve '.$advc_css_class.'">
                         <img style="height:'.$img_hite.'px;width:'.$img_wid.'px;" src="'.$image[0].'" alt="'.$advc_ttl.'" />
                        <figcaption>
                            <h3 style="color:'.$advc_ttl_color.'; font-size:'.$advc_ttl_font_size.'px; font-style:'.$advc_ttl_italic.';">'.$advc_ttl.'</h3>
                            '.$advc_custom_links_html.'
                        </figcaption>
                    </figure>';
    }

    if ( $advc_style =='style-Thirteen' ){
                   $add_class =  (rand(99,99999));
        $output .='

        <style>
                .st10_'.$add_class.'.style-Thirteen {background-color: '.$advc_ovrlay_color_1.'!important;;}
                .st10_'.$add_class.'.style-Thirteen::after {background: rgba(0, 0, 0, 0) linear-gradient(to right, '.$advc_ovrlay_color_1.', '.$advc_ovrlay_grd_1.' , '.$advc_ovrlay_grd_2.') repeat scroll 0 0!important;opacity:.8;} .st10_'.$add_class.' h3{color:#fff}
                @media (min-width: 481px) and (max-width: 768px) {.st10_'.$add_class.' img{height:'.$img_hite_tab.'px!important;width:'.$img_wid_tab.'px!important;}}@media (min-width: 319px) and (max-width: 480px) {.st10_'.$add_class.' img{height:'.$img_hite_mob.'px!important;width:'.$img_wid_mob.'px!important;}}
                </style>

                    <figure class="st10_'.$add_class.' style-Thirteen '.$advc_css_class.'">
                        <img style="height:'.$img_hite.'px;width:'.$img_wid.'px;" src="'.$image[0].'" alt="'.$advc_ttl.'" />
                        <figcaption>
                            <h3 style="color:'.$advc_ttl_color.'; font-size:'.$advc_ttl_font_size.'px; font-style:'.$advc_ttl_italic.';">'.$advc_ttl.'</h3>
                            '.$advc_custom_links_html.'
                        </figcaption>
                    </figure>';
    }

    if ( $advc_style =='style-cr-11' ){
                   $add_class =  (rand(99,99999));
        $output .='

        <style>
                @media (min-width: 481px) and (max-width: 768px) {.st11_'.$add_class.' img{height:'.$img_hite_tab.'px!important;width:'.$img_wid_tab.'px!important;}}@media (min-width: 319px) and (max-width: 480px) {.st11_'.$add_class.' img{height:'.$img_hite_mob.'px!important;width:'.$img_wid_mob.'px!important;}}.st11_'.$add_class.'.ih-c2-orange figcaption::before, .st11_'.$add_class.'.ih-c2-orange span::before{background: '.$advc_ovrlay_color.';}.st11_'.$add_class.'.ih-c2-orange figcaption:after{border-color: '.$brdr_clr_hvr.';}.st11_'.$add_class.'::after{border-color: '.$brdr_clr.'!important;}.st11_'.$add_class.' a:hover{color:'.$link_hvr_clr.'!important;}
                </style>

                    <figure class="ih-eff1 ih-c2-orange st11_'.$add_class.' '.$advc_css_class.'">
                        <a href="'.$image_url.'"><img style="height:'.$img_hite.'px;width:'.$img_wid.'px;" src="'.$image[0].'" alt="'.$advc_ttl.'" /></a>
                        <figcaption data-ih="details">
                          <h2 style="color:'.$advc_ttl_color.'; font-size:'.$advc_ttl_font_size.'px; font-style:'.$advc_ttl_italic.';">'.$advc_ttl.'</h2>
                          <hr>
                          <p style="color:'.$advc_desc_color.'; font-size:'.$advc_desc_font_size.'px; font-style:'.$advc_desc_italic.';">'.$content.'</p>
                          <span></span>
                          
                          '.$cr_link.'
                          
                        
                          
                        </figcaption>            
                    </figure>';
    }
    if ( $advc_style =='style-cr-12' ){
                   $add_class =  (rand(99,99999));
        $output .='

        <style>
                @media (min-width: 481px) and (max-width: 768px) {.st12_'.$add_class.' img{height:'.$img_hite_tab.'px!important;width:'.$img_wid_tab.'px!important;}}@media (min-width: 319px) and (max-width: 480px) {.st12_'.$add_class.' img{height:'.$img_hite_mob.'px!important;width:'.$img_wid_mob.'px!important;}}.st12_'.$add_class.'.ih-c2-blue figcaption::before, .st12_'.$add_class.'.ih-c2-blue span::before{background: '.$advc_ovrlay_color.';}.st12_'.$add_class.'.ih-c2-orange figcaption:after{border-color: '.$brdr_clr_hvr.';}.st12_'.$add_class.'::after{border-color: '.$brdr_clr.'!important;}.st12_'.$add_class.' a:hover{color:'.$link_hvr_clr.'!important;}.st12_'.$add_class.' hr{border-color:'.$underline_clr.'!important;}
                </style>

                    <figure class="ih-eff2 ih-c2-blue st12_'.$add_class.' '.$advc_css_class.'">
                            <a href="'.$image_url.'"><img style="height:'.$img_hite.'px;width:'.$img_wid.'px;" src="'.$image[0].'" alt="'.$advc_ttl.'" /></a>
                            <figcaption>
                                <h2 style="color:'.$advc_ttl_color.'; font-size:'.$advc_ttl_font_size.'px; font-style:'.$advc_ttl_italic.';">'.$advc_ttl.'</h2>
                                <hr>
                                <p style="color:'.$advc_desc_color.'; font-size:'.$advc_desc_font_size.'px; font-style:'.$advc_desc_italic.';">'.$content.'</p>
                                <span></span>
                            </figcaption>			
                    </figure>';
    }

    if ( $advc_style =='style-cr-13' ){
                   $add_class =  (rand(99,99999));
        $output .='

        <style>
                @media (min-width: 481px) and (max-width: 768px) {.st13_'.$add_class.' img{height:'.$img_hite_tab.'px!important;width:'.$img_wid_tab.'px!important;}}@media (min-width: 319px) and (max-width: 480px) {.st13_'.$add_class.' img{height:'.$img_hite_mob.'px!important;width:'.$img_wid_mob.'px!important;}}.st13_'.$add_class.'.ih-c2-purple figcaption::before, .st13_'.$add_class.'.ih-c2-purple span::before{background: '.$advc_ovrlay_color.';}.st13_'.$add_class.'.ih-c2-purple figcaption:after{border-color: '.$brdr_clr_hvr.';}.st13_'.$add_class.'::after{border-color: '.$brdr_clr.'!important;}.st13_'.$add_class.' a:hover{color:'.$link_hvr_clr.'!important;}.st13_'.$add_class.' hr{border-color:'.$underline_clr.'!important;}
                </style>

                    <figure class="ih-eff3 ih-c2-purple st13_'.$add_class.' '.$advc_css_class.'">
                            <a href="'.$image_url.'"><img style="height:'.$img_hite.'px;width:'.$img_wid.'px;" src="'.$image[0].'" alt="'.$advc_ttl.'" /></a>
                            <figcaption>
                                <h2 style="color:'.$advc_ttl_color.'; font-size:'.$advc_ttl_font_size.'px; font-style:'.$advc_ttl_italic.';">'.$advc_ttl.'</h2>
                                <hr>
                                <p style="color:'.$advc_desc_color.'; font-size:'.$advc_desc_font_size.'px; font-style:'.$advc_desc_italic.';">'.$content.'</p>
                                <span></span>	
                            </figcaption>
                                		
                    </figure>';
    }
    /*if ( $advc_style =='style-cr-14' ){
                   $add_class =  (rand(99,99999));
        $output .='

        <style>
                @media (min-width: 481px) and (max-width: 768px) {.st14_'.$add_class.' img{height:'.$img_hite_tab.'px!important;width:'.$img_wid_tab.'px!important;}}@media (min-width: 319px) and (max-width: 480px) {.st14_'.$add_class.' img{height:'.$img_hite_mob.'px!important;width:'.$img_wid_mob.'px!important;}}.st14_'.$add_class.'.ih-c2-purple figcaption::before, .st14_'.$add_class.'.ih-c2-purple span::before{background: '.$advc_ovrlay_color.';}.st14_'.$add_class.'.ih-c2-purple figcaption:after{border-color: '.$brdr_clr_hvr.';}.st14_'.$add_class.'::after{border-color: '.$brdr_clr.'!important;}.st14_'.$add_class.' a:hover{color:'.$link_hvr_clr.'!important;}.st14_'.$add_class.' hr{border-color:'.$underline_clr.'!important;}
                </style>

                    <figure class="ih-eff4 ih-c1-red">
                        <a href="'.$image_url.'"><img style="height:'.$img_hite.'px;width:'.$img_wid.'px;" src="'.$image[0].'" alt="'.$advc_ttl.'" /></a>
                        <figcaption data-ih="details">
                            <h2 style="color:'.$advc_ttl_color.'; font-size:'.$advc_ttl_font_size.'px; font-style:'.$advc_ttl_italic.';">'.$advc_ttl.'</h2>
                            <hr>
                            <p style="color:'.$advc_desc_color.'; font-size:'.$advc_desc_font_size.'px; font-style:'.$advc_desc_italic.';">'.$content.'</p>
                            <span></span>
                            <a href="#">Read More</a>
                        </figcaption>			
                    </figure>';
    }*/

    return $output;
    wp_reset_postdata();



}

add_shortcode('awavc_hover_effects', 'awavc_hvr_effects_shortcode');
