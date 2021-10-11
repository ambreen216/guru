<?php

vc_map( array(
    "name"        => __( "Advanced Flip Box 3D", 'awavcl' ),
    "base"        => "awavc_flipbox",
    "icon"        => "advc_flipbox_icon",
    "description"	=> "Box with 3d effects on Hover",
    "category" => __('Advanced Elements', 'js_composer'),
    //'description' => __('Info text box', 'js_composer'),
    "params"      => array(
                            
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("Direction:", "awavcl"),
            "param_name" => "ddd_direction",
            "value" => array(
                __("Verticle","awavcl") => "flip-up",
                __("Horizontal","awavcl") => "alternative",
            ),
            "group" => "General",
            "std" => "",
        ), 
        array(
            'type' => 'dropdown',
            'heading' => __( 'Display as:', 'awavcl' ),
            'param_name' => 'display_as',
            "value" => array(
                "Content" => "content",
                "Image" => "image",
            ),
            "std" => "content",
            "group" => "Front"
        ),                    
        array(
            "type" => "attach_image",
            "heading" => __("Image", "awavcl"),
            "param_name" => "front_image",
            "value" => "",
            "dependency" => array('element' => "display_as", 'value' => 'image'),
            "description" => __("Select image from media library.", "awavcl"),
            "group" => "Front"
        ),
        
        array(
            "type"        => "colorpicker",
            "class"       => "",
            "heading"     => __( "Box color", "awavcl" ),
            "param_name"  => "front_box_color",
            "description" => __( "Choose flipbox color", "awavcl" ),
            "group" => "Front"
        ),                     
        
        array(
            'type' => 'dropdown',
            'heading' => __( 'Display Icon:', 'awavcl' ),
            'param_name' => 'display_icon',
            "value" => array(
                "Icon" => "icon",
                "No Icon" => "noicons",
            ),
            "std" => "icon",
            'dependency' => array(
                'element' => 'display_as',
                'value' => 'content',
            ),
            "group" => "Front"
        ),                    
                           
        array(
            'type' => 'iconpicker',
            'heading' => __( 'Icon', 'js_composer' ),
            'param_name' => 'icon_fontawesome',
            'value' => '', // default value to backend editor admin_label
            'settings' => array(
                'emptyIcon' => false, // default true, display an "EMPTY" icon?
                'iconsPerPage' => 100, // default 100, how many icons per/page to display, we use (big prime_slider) to display all icons in single page
            ),
            'dependency' => array(
                'element' => 'display_as',
                'value' => 'content',
            ),
            'description' => __( 'Select icon from library.', 'js_composer' ),
            "group" => "Front"
        ),
                           
        array(
            "type" => "prime_slider",
            "class" => "",
            "heading" => __("Icon Size", "awavcl"),
            "param_name" => "icon_size",
            "value" => 20,
            "min" => 16,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
            "description" => __("Provide icon size", "awavcl"),
            'dependency' => array(
                'element' => 'display_as',
                'value' => 'content',
            ),
            "group" => "Front"
        ),
        
        array(
            "type"        => "colorpicker",
            "class"       => "",
            "heading"     => __( "Icon Color", "awavcl" ),
            "param_name"  => "icon_color",
            "value"       => "#343434",
            "description" => __( "Choose icon color", "awavcl" ),
            'dependency' => array(
                'element' => 'display_as',
                'value' => 'content',
            ),
            "group" => "Front"
        ),                    
                         
        array(
            "type"        => "textfield",
            "class"       => "",
            "heading"     => __( "Title", 'awavcl' ),
            "param_name"  => "title",
            "admin_label" => true,
            "value"       => "",
            'dependency' => array(
                'element' => 'display_as',
                'value' => 'content',
            ),
            "group" => "Front"
            
        ),
        array(
            "type" => "textarea",
            "class" => "",
            "heading" => __("Description", "awavcl"),
            "param_name" => "front_desc",
            "value" => "",
            "description" => __("Provide the description for the front.", "awavcl"),
            'dependency' => array(
                'element' => 'display_as',
                'value' => 'content',
            ),
            "group" => "Front"
        ),                  

        array(
            "type" => "textfield",
            "heading" => __("Extra class name", "awavcl"),
            "param_name" => "extraclass",
            "value" => "",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "awavcl"),
            "group" => "General"
        ),
        
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Title Font Size', 'awavcl' ),
            'param_name'       => 'title_f_size',
            "value" => 18,
            "min" => 10,
            "max" => 50,
            "step" => 1,
            "unit" => "px",
            "description" => __("Chose Title Font Size as Pixel. Default is 18px", "awavcl"),
            'dependency' => array(
                'element' => 'display_as',
                'value' => 'content',
            ),
            "group" => "Front"
        ),
        // Description Font Size Field
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Description Font Size', 'awavcl' ),
            'param_name'       => 'desc_f_size',
            "value" => 14,
            "min" => 10,
            "max" => 50,
            "step" => 1,
            "unit" => "px",
            "description" => __("Chose Description Font Size as Pixel. Default is 14px", "awavcl"),
            'dependency' => array(
                'element' => 'display_as',
                'value' => 'content',
            ),
            "group" => "Front"
        ),

        array(
            "type"        => "colorpicker",
            "class"       => "",
            "heading"     => __( "Title color", "awavcl" ),
            "param_name"  => "title_color",
            "description" => __( "Choose text color", "awavcl" ),
            'dependency' => array(
                'element' => 'display_as',
                'value' => 'content',
            ),
            "group" => "Front"
        ),
        array(
            "type"        => "colorpicker",
            "class"       => "",
            "heading"     => __( "Description color", "awavcl" ),
            "param_name"  => "descr_color",
            "description" => __( "Choose text color", "awavcl" ),
            'dependency' => array(
                'element' => 'display_as',
                'value' => 'content',
            ),
            "group" => "Front"
        ),
        
        array(
            'type' => 'dropdown',
            'heading' => __( 'Display as:', 'awavcl' ),
            'param_name' => 'back_display_as',
            "value" => array(
                "Content" => "content",
                "Image" => "image",
            ),
            "std" => "content",
            "group" => "Back"
        ),                    
        array(
            "type" => "attach_image",
            "heading" => __("Image", "awavcl"),
            "param_name" => "back_image",
            "value" => "",
            "dependency" => array('element' => "back_display_as", 'value' => 'image'),
            "description" => __("Select image from media library.", "awavcl"),
            "group" => "Back"
        ),
        
        array(
            "type"        => "colorpicker",
            "class"       => "",
            "heading"     => __( "Box color", "awavcl" ),
            "param_name"  => "back_box_color",
            "description" => __( "Choose flipbox color", "awavcl" ),
            'dependency' => array(
                'element' => 'back_display_as',
                'value' => 'content',
            ),
            "group" => "Back"
        ),
  
        array(
            "type"        => "textfield",
            "class"       => "",
            "heading"     => __( "Title", 'awavcl' ),
            "param_name"  => "back_title",
            "admin_label" => true,
            "value"       => "",
            "description" => __("leave empty if you don't want.", "awavcl"),
            'dependency' => array(
                'element' => 'back_display_as',
                'value' => 'content',
            ),
            "group" => "Back"
        ),
        array(
            "type" => "textarea",
            "class" => "",
            "heading" => __("Description", "awavcl"),
            "param_name" => "back_desc",
            "value" => "",
            "description" => __("Provide the description for the back.", "awavcl"),
            'dependency' => array(
                'element' => 'back_display_as',
                'value' => 'content',
            ),
            "group" => "Back"
        ),                   
        
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Title Font Size', 'awavcl' ),
            'param_name'       => 'back_title_f_size',
            "value" => 18,
            "min" => 10,
            "max" => 50,
            "step" => 1,
            "unit" => "px",
            "description" => __("Chose Title Font Size as Pixel. Default is 18px", "awavcl"),
            'dependency' => array(
                'element' => 'back_display_as',
                'value' => 'content',
            ),
            "group" => "Back"
        ),
        // Description Font Size Field
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Description Font Size', 'awavcl' ),
            'param_name'       => 'back_desc_f_size',
            "value" => 14,
            "min" => 10,
            "max" => 50,
            "step" => 1,
            "unit" => "px",
            "description" => __("Chose Description Font Size as Pixel. Default is 14px", "awavcl"),
            'dependency' => array(
                'element' => 'back_display_as',
                'value' => 'content',
            ),
            "group" => "Back"
        ),

        array(
            "type"        => "colorpicker",
            "class"       => "",
            "heading"     => __( "Title color", "awavcl" ),
            "param_name"  => "back_title_color",
            "description" => __( "Choose text color", "awavcl" ),
            'dependency' => array(
                'element' => 'back_display_as',
                'value' => 'content',
            ),
            "group" => "Back"
        ),
        array(
            "type"        => "colorpicker",
            "class"       => "",
            "heading"     => __( "Description color", "awavcl" ),
            "param_name"  => "back_descr_color",
            "description" => __( "Choose text color", "awavcl" ),
            'dependency' => array(
                'element' => 'back_display_as',
                'value' => 'content',
            ),
            "group" => "Back"
        ),                    
            
        array(
            "type" => "dropdown",
            "class" => "",
            "heading" => __("On Click:", "awavcl"),
            "param_name" => "on_click",
            "value" => array(
                __("No Link","awavcl") => "none",
                __("Complete Box","awavcl") => "box",
            ),
            "group" => "Link"
        ),

        array(
            "type" => "vc_link",
            "class" => "",
            "heading" => __("Add Link", "awavcl"),
            "param_name" => "link",
            "value" => "",
            "description" => __("Add a custom link or select existing page. You can remove existing link as well.", "awavcl"),
            'dependency' => array(
                'element' => 'on_click',
                'value' => 'box',
            ),
            "group" => "Link"
        ),                                        
        
        array(
            'type' => 'css_editor',
            'heading' => __( 'Css', 'awavcl' ),
            'param_name' => 'css_flip_box',
            'group' => __( 'Design ', 'awavcl' ),
            'edit_field_class' => 'advc-info-box advc-info-box-2 feature',
        ),                    

        
        
    )
) );

function awavc_flipbox_shortcode_function( $atts, $content = null, $tag ) {
    extract( shortcode_atts( array(
        'ddd_direction'    => 'flip-up',
        'display_as'    => '',
        'front_image'       => '',
        'display_icon'      => 'icon',
        'icon_fontawesome'   => 'fa fa-camera',
        'front_box_color'   => '#789e13',
        'back_box_color'     => '#9bcc18',
        'icon_size'            => '',
        'icon_color'      => '#fff',
        'title'         => 'Title',
        'front_desc'      => 'Awesome way to show your features inside wpbakery page builder.',
        'title_f_size'      => '',
        'desc_f_size'      => '',
        'title_color'      => '',
        'descr_color'      => '',
        'back_display_as'  => '',
        'back_image'      => '',
        'back_title'      => 'Title',
        'back_desc'      => 'Awesome way to show your features inside wpbakery page builder Back.',
        'back_title_f_size'  => '',
        'back_desc_f_size'  => '',
        'back_title_color'   => '',
        'back_descr_color'   => '',
        'on_click'      => '',
        'link'      => '',
        'css_flip_box'      => '',
        'extraclass' => '',
        
    ), $atts ) );


    wp_register_style( 'flipbox-css', plugins_url( '/css/flipbox-box.css',  __FILE__) );
    wp_enqueue_style( 'flipbox-css' );
    wp_register_script('flipbox-modernizr', plugins_url('js/modernizr_2.6.3-custom.js', __FILE__), array("jquery"));
    wp_enqueue_script('flipbox-modernizr');
    
    
    $content = wpb_js_remove_wpautop( $content ); // fix unclosed/unwanted paragraph tags in $content
    $front_image = wp_get_attachment_image_src( $front_image, 'full' );
    $back_image = wp_get_attachment_image_src( $back_image, 'full' );
    $link   = vc_build_link( $link );
    
    $output ='';

        
        if ( $on_click == 'box' ) {
            $output .='<a class="href" href="'.$link['url'].'" title="'.$link['title'].'" target="'.$link['target'].'">';      }
        
        $output .='<div class="advc-flip-box '.$ddd_direction.' '.$extraclass.'">';

        $output .='<div class="object">
                        <div class="front" style="background-color:'.$front_box_color.' ">';
        
        if ( $display_as !== 'image' ) {
        $output .='<div class="flip-content">
                    <h3 style="font-size:'.$title_f_size.'px; color:'.$title_color.'; "><i style="font-size:'.$icon_size.'px; color:'.$icon_color.'; padding-right: 5px;" class="'.$icon_fontawesome.' "></i>'.$title.'</h3>
                    <p style="font-size:'.$desc_f_size.'px; color:'.$descr_color.'; ">'.$front_desc.'</p>
                </div>';
        }else{
            $output .='<img width="300" height="200" src="'.$front_image[0].'">';
        }        
                
                
        $output .='</div>';
        
        $output .='<div class="back" style="background-color:'.$back_box_color.' ">';
        
        
        if ( $back_display_as !== 'image' ) {
        $output .='<div class="flip-content">
                    <h3 style="font-size:'.$back_title_f_size.'px; color:'.$back_title_color.';">'.$back_title.'</h3>
                    <p style="font-size:'.$back_desc_f_size.'px; color:'.$back_descr_color.';">'.$back_desc.'</p>
                </div>';
        }else{
            $output .='<img width="300" height="200" src="'.$back_image[0].'">';
        } 
                        
        $output .='</div>';
        
        $output .='<div class="flank" style="background-color:'.$front_box_color.' "></div>';
         
        $output .='</div>
                    </div>';
                    
        if ( $on_click == 'box' ) {
            $output .='</a>';
        }
        
        if ( $display_icon == 'noicons' ) {
            $output .='<style>
                .advc-flip-box h3 i {
                  display:none;
                }
            </style>';
        }         
    



    return $output;
}


add_shortcode( 'awavc_flipbox', 'awavc_flipbox_shortcode_function' );