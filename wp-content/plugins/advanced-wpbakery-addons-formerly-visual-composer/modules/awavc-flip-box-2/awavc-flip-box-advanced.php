<?php
vc_map(array(
    "name" 			=> "Advanced Flip Box 2",
    "category" 		=> 'Advanced Elements',
    "description"	=> "Flip box with 2 sides",
    "base" 			=> "awavc_flipbox_advanced",
    "class" 		=> "",
    "icon" 			=> "advc_flipbox_icon_adv",
    
    "params" 	=> array(
        /* Front */
        array(
            "type"			=> "mgt_separator",
            "param_name"	=> 'gbp8',
            "heading"		=> "Front content",
        ),
    		array(
            "type"			=> "textfield",
            //"holder"		=> "div",
            "class" 		=> "hide_in_vc_editor",
            "admin_label" 	=> true,
            "heading"		=> "Header text",
            "description"	=> "",
            "param_name"	=> "header_text_front",
            "std"			=> "",
        ),
        array(
            "type"			=> "textarea",
            //"holder"		=> "div",
            "class" 		=> "hide_in_vc_editor",
            "admin_label" 	=> true,
            "heading"		=> "Description",
            "description"	=> "HTML tags allowed for formatting.",
            "param_name"	=> "description_text_front",
            "std"			=> "",
        ),
        array(
            "type"			=> "colorpicker",
            //"holder"		=> "div",
            "class" 		=> "hide_in_vc_editor",
            "admin_label" 	=> false,
            "heading"		=> "Header text color",
            "param_name"	=> "header_color_front",
            "std"			=> "",
            "edit_field_class" => "vc_col-xs-6",
        ),
        array(
            "type"			=> "colorpicker",
            //"holder"		=> "div",
            "class" 		=> "hide_in_vc_editor",
            "admin_label" 	=> false,
            "heading"		=> "Description text color",
            "param_name"	=> "description_color_front",
            "std"			=> "",
            "edit_field_class" => "vc_col-xs-6",
        ),
        array(
            "type"			=> "colorpicker",
            //"holder"		=> "div",
            "class" 		=> "hide_in_vc_editor",
            "admin_label" 	=> false,
            "heading"		=> "Background color",
            "param_name"	=> "background_color_front",
            "std"			=> "",
            "edit_field_class" => "vc_col-xs-6",
        ),
        array(
            "type"			=> "attach_image",
            //"holder"		=> "div",
            "class" 		=> "hide_in_vc_editor",
            "admin_label" 	=> false,
            "heading"		=> "Background image",
            "param_name"	=> "background_image_front",
            "std"			=> "",
            "edit_field_class" => "vc_col-xs-6",
        ),
        /// Block border
        array(
            'type' => 'checkbox',
            'heading' => __( 'Add block border?', 'awavcl' ),
            'param_name' => 'block_border_front',
            "description"	=> "Use this to add border to block.",
        ),
        array(
            "type"			=> "textfield",
            //"holder"		=> "div",
            "class" 		=> "hide_in_vc_editor",
            "admin_label" 	=> false,
            "heading"		=> "Block border width (in pixels)",
            "description"	=> "Add border width here, for example: 3",
            "param_name"	=> "block_border_front_width",
            "std"			=> "1",
            'dependency' => array(
                'element' => 'block_border_front',
                'value' => 'true',
            ),
            "edit_field_class" => "vc_col-xs-6",
        ),
        array(
            "type"			=> "dropdown",
            //"holder"		=> "div",
            "class" 		=> "hide_in_vc_editor",
            "admin_label" 	=> false,
            "heading"		=> "Block border style",
            "description"	=> "Select block border style.",
            "param_name"	=> "block_border_front_style",
            "value"			=> array(
                "Solid"	=> "solid",
                "Dashed"	=> "dashed",
                "Dotted"	=> "dotted",
                "Double"	=> "double",
                "Groove"	=> "groove",
                "Ridge"	=> "ridge",
                "Inset"	=> "inset",
                "Outset"	=> "outset",
            ),
            "std"			=> "solid",
            'dependency' => array(
                'element' => 'block_border_front',
                'value' => 'true',
            ),
            "edit_field_class" => "vc_col-xs-6",
        ),
        array(
            "type"			=> "colorpicker",
            //"holder"		=> "div",
            "class" 		=> "hide_in_vc_editor",
            "admin_label" 	=> false,
            "heading"		=> "Block border color",
            "param_name"	=> "block_border_front_color",
            "description"	=> "Select block border color.",
            "std"			=> "",
            'dependency' => array(
                'element' => 'block_border_front',
                'value' => 'true',
            ),
            "edit_field_class" => "vc_col-xs-6",
        ),
        /* Flipbox icon */
        array(
            'type' => 'checkbox',
            'heading' => __( 'Add icon to flipbox front side?', 'awavcl' ),
            'param_name' => 'front_icon',
        ),
        array(
            "type"			=> "colorpicker",
            //"holder"		=> "div",
            "class" 		=> "hide_in_vc_editor",
            "admin_label" 	=> false,
            "heading"		=> "Icon color",
            "param_name"	=> "front_icon_color",
            "description"	=> "",
            "std"			=> "",
            'dependency' => array(
                'element' => 'front_icon',
                'value' => 'true',
            ),
        ),
        array(
            'type' => 'dropdown',
            'heading' => __( 'Icon library', 'awavcl' ),
            'value' => array(
                __( 'Font Awesome', 'awavcl' ) => 'fontawesome',
                __( 'Open Iconic', 'awavcl' ) => 'openiconic',
                __( 'Typicons', 'awavcl' ) => 'typicons',
                __( 'Entypo', 'awavcl' ) => 'entypo',
                __( 'Linecons', 'awavcl' ) => 'linecons',
                __( 'Mono Social', 'awavcl' ) => 'monosocial',
                __( 'Material', 'awavcl' ) => 'material',
                __( 'Pe7 Stroke', 'awavcl' ) => 'pe7stroke',
            ),
            'dependency' => array(
                'element' => 'front_icon',
                'value' => 'true',
            ),
            'admin_label' => true,
            'param_name' => 'front_icon_type',
            'description' => __( 'Select icon library.', 'awavcl' ),
            "std"		=> "fontawesome",
        ),
        array(
            'type' => 'iconpicker',
            'heading' => __( 'Icon', 'awavcl' ),
            'param_name' => 'front_icon_fontawesome',
            'value' => 'fa fa-adjust',
            // default value to backend editor admin_label
            'settings' => array(
                'emptyIcon' => false,
                // default true, display an "EMPTY" icon?
                'iconsPerPage' => 4000,
                // default 100, how many icons per/page to display, we use (big number) to display all icons in single page
                'type' => 'fontawesome',
            ),
            'dependency' => array(
                'element' => 'front_icon_type',
                'value' => 'fontawesome',
            ),
            'description' => __( 'Select icon from library.', 'awavcl' ),
        ),
        array(
            'type' => 'iconpicker',
            'heading' => __( 'Icon', 'awavcl' ),
            'param_name' => 'front_icon_pe7stroke',
            'value' => 'pe-7s-album',
            // default value to backend editor admin_label
            'settings' => array(
                'emptyIcon' => false,
                // default true, display an "EMPTY" icon?
                'iconsPerPage' => 4000,
                'type' => 'pe7stroke',
                // default 100, how many icons per/page to display, we use (big number) to display all icons in single page
            ),
            'dependency' => array(
                'element' => 'front_icon_type',
                'value' => 'pe7stroke',
            ),
            'description' => __( 'Select icon from library.', 'awavcl' ),
        ),
        array(
            'type' => 'iconpicker',
            'heading' => __( 'Icon', 'awavcl' ),
            'param_name' => 'front_icon_openiconic',
            'value' => 'vc-oi vc-oi-dial',
            // default value to backend editor admin_label
            'settings' => array(
                'emptyIcon' => false,
                // default true, display an "EMPTY" icon?
                'type' => 'openiconic',
                'iconsPerPage' => 4000,
                // default 100, how many icons per/page to display
            ),
            'dependency' => array(
                'element' => 'front_icon_type',
                'value' => 'openiconic',
            ),
            'description' => __( 'Select icon from library.', 'awavcl' ),
        ),
        array(
            'type' => 'iconpicker',
            'heading' => __( 'Icon', 'awavcl' ),
            'param_name' => 'front_icon_typicons',
            'value' => 'typcn typcn-adjust-brightness',
            // default value to backend editor admin_label
            'settings' => array(
                'emptyIcon' => false,
                // default true, display an "EMPTY" icon?
                'type' => 'typicons',
                'iconsPerPage' => 4000,
                // default 100, how many icons per/page to display
            ),
            'dependency' => array(
                'element' => 'front_icon_type',
                'value' => 'typicons',
            ),
            'description' => __( 'Select icon from library.', 'awavcl' ),
        ),
        array(
            'type' => 'iconpicker',
            'heading' => __( 'Icon', 'awavcl' ),
            'param_name' => 'front_icon_entypo',
            'value' => 'entypo-icon entypo-icon-note',
            // default value to backend editor admin_label
            'settings' => array(
                'emptyIcon' => false,
                // default true, display an "EMPTY" icon?
                'type' => 'entypo',
                'iconsPerPage' => 4000,
                // default 100, how many icons per/page to display
            ),
            'dependency' => array(
                'element' => 'front_icon_type',
                'value' => 'entypo',
            ),
            'description' => __( 'Select icon from library.', 'awavcl' ),
        ),
        array(
            'type' => 'iconpicker',
            'heading' => __( 'Icon', 'awavcl' ),
            'param_name' => 'front_icon_linecons',
            'value' => 'vc_li vc_li-heart',
            // default value to backend editor admin_label
            'settings' => array(
                'emptyIcon' => false,
                // default true, display an "EMPTY" icon?
                'type' => 'linecons',
                'iconsPerPage' => 4000,
                // default 100, how many icons per/page to display
            ),
            'dependency' => array(
                'element' => 'front_icon_type',
                'value' => 'linecons',
            ),
            'description' => __( 'Select icon from library.', 'awavcl' ),
        ),
        array(
            'type' => 'iconpicker',
            'heading' => __( 'Icon', 'awavcl' ),
            'param_name' => 'front_icon_monosocial',
            'value' => 'vc-mono vc-mono-fivehundredpx',
            // default value to backend editor admin_label
            'settings' => array(
                'emptyIcon' => false,
                // default true, display an "EMPTY" icon?
                'type' => 'monosocial',
                'iconsPerPage' => 4000,
                // default 100, how many icons per/page to display
            ),
            'dependency' => array(
                'element' => 'front_icon_type',
                'value' => 'monosocial',
            ),
            'description' => __( 'Select icon from library.', 'awavcl' ),
        ),
        array(
            'type' => 'iconpicker',
            'heading' => __( 'Icon', 'awavcl' ),
            'param_name' => 'front_icon_material',
            'value' => 'vc-material vc-material-cake',
            // default value to backend editor admin_label
            'settings' => array(
                'emptyIcon' => false,
                // default true, display an "EMPTY" icon?
                'type' => 'material',
                'iconsPerPage' => 4000,
                // default 100, how many icons per/page to display
            ),
            'dependency' => array(
                'element' => 'front_icon_type',
                'value' => 'material',
            ),
            'description' => __( 'Select icon from library.', 'awavcl' ),
        ),
        /* END Subheader icon */
        /* Back */
        array(
            "type"			=> "mgt_separator",
            "param_name"	=> 'gbp7',
            "heading"		=> "Back content",
        ),
    		array(
            "type"			=> "textfield",
            //"holder"		=> "div",
            "class" 		=> "hide_in_vc_editor",
            "admin_label" 	=> true,
            "heading"		=> "Header text",
            "description"	=> "",
            "param_name"	=> "header_text_back",
            "std"			=> "",
        ),
        array(
            "type"			=> "textarea",
            //"holder"		=> "div",
            "class" 		=> "hide_in_vc_editor",
            "admin_label" 	=> true,
            "heading"		=> "Description",
            "description"	=> "HTML tags allowed for formatting.",
            "param_name"	=> "description_text_back",
            "std"			=> "",
        ),
        array(
            "type"			=> "colorpicker",
            //"holder"		=> "div",
            "class" 		=> "hide_in_vc_editor",
            "admin_label" 	=> false,
            "heading"		=> "Header text color",
            "param_name"	=> "header_color_back",
            "std"			=> "",
            "edit_field_class" => "vc_col-xs-6",
        ),
        array(
            "type"			=> "colorpicker",
            //"holder"		=> "div",
            "class" 		=> "hide_in_vc_editor",
            "admin_label" 	=> false,
            "heading"		=> "Description text color",
            "param_name"	=> "description_color_back",
            "std"			=> "",
            "edit_field_class" => "vc_col-xs-6",
        ),
        array(
            "type"			=> "colorpicker",
            //"holder"		=> "div",
            "class" 		=> "hide_in_vc_editor",
            "admin_label" 	=> false,
            "heading"		=> "Background color",
            "param_name"	=> "background_color_back",
            "std"			=> "",
            "edit_field_class" => "vc_col-xs-6",
        ),
        array(
            "type"			=> "attach_image",
            //"holder"		=> "div",
            "class" 		=> "hide_in_vc_editor",
            "admin_label" 	=> false,
            "heading"		=> "Background image",
            "param_name"	=> "background_image_back",
            "std"			=> "",
            "edit_field_class" => "vc_col-xs-6",
        ),
        /// Block border
        array(
            'type' => 'checkbox',
            'heading' => __( 'Add block border?', 'awavcl' ),
            'param_name' => 'block_border_back',
            "description"	=> "Use this to add border to block.",
        ),
        array(
            "type"			=> "textfield",
            //"holder"		=> "div",
            "class" 		=> "hide_in_vc_editor",
            "admin_label" 	=> false,
            "heading"		=> "Block border width (in pixels)",
            "description"	=> "Add border width here, for example: 3",
            "param_name"	=> "block_border_back_width",
            "std"			=> "1",
            'dependency' => array(
                'element' => 'block_border_back',
                'value' => 'true',
            ),
            "edit_field_class" => "vc_col-xs-6",
        ),
        array(
            "type"			=> "dropdown",
            //"holder"		=> "div",
            "class" 		=> "hide_in_vc_editor",
            "admin_label" 	=> false,
            "heading"		=> "Block border style",
            "description"	=> "Select block border style.",
            "param_name"	=> "block_border_back_style",
            "value"			=> array(
                "Solid"	=> "solid",
                "Dashed"	=> "dashed",
                "Dotted"	=> "dotted",
                "Double"	=> "double",
                "Groove"	=> "groove",
                "Ridge"	=> "ridge",
                "Inset"	=> "inset",
                "Outset"	=> "outset",
            ),
            "std"			=> "solid",
            'dependency' => array(
                'element' => 'block_border_back',
                'value' => 'true',
            ),
            "edit_field_class" => "vc_col-xs-6",
        ),
        array(
            "type"			=> "colorpicker",
            //"holder"		=> "div",
            "class" 		=> "hide_in_vc_editor",
            "admin_label" 	=> false,
            "heading"		=> "Block border color",
            "param_name"	=> "block_border_back_color",
            "description"	=> "Select block border color.",
            "std"			=> "",
            'dependency' => array(
                'element' => 'block_border_back',
                'value' => 'true',
            ),
            "edit_field_class" => "vc_col-xs-6",
        ),
        /* Styles */
    		array(
            "type"			=> "mgt_separator",
            "param_name"	=> 'gbp6',
            "heading"		=> "Styles and effects settings",
        ),
        array(
            "type"			=> "dropdown",
            //"holder"		=> "div",
            "class" 		=> "hide_in_vc_editor",
            "admin_label" 	=> false,
            "heading"		=> "Flipbox animation",
            "param_name"	=> "flipbox_animation",
            "value"			=> array(
                "Horizontal"	=> "horizontal",
                "Vertical"	=> "vertical",
            ),
            "description"	=> "Change flipbox animation.",
            "std"			=> "horizontal",
            "edit_field_class" => "vc_col-xs-6",
        ),
        array(
            "type"			=> "textfield",
            //"holder"		=> "div",
            "class" 		=> "hide_in_vc_editor",
            "admin_label" 	=> false,
            "heading"		=> "Flipbox height (px)",
            "description"	=> "For example: 300px",
            "param_name"	=> "block_height",
            "edit_field_class" => "vc_col-xs-6",
            "std"			=> "",
        ),
        array(
            "type"			=> "dropdown",
            //"holder"		=> "div",
            "class" 		=> "hide_in_vc_editor",
            "admin_label" 	=> false,
            "heading"		=> "Flipbox round edges",
            "param_name"	=> "flipbox_round_edges",
            "value"			=> array(
                "Disable"	=> "disable",
                "Small"	=> "small",
                "Medium"	=> "medium",
                "Large"	=> "large",
                "Full"	=> "full"
            ),
            "description"	=> "Change flipbox border radius (round edges).",
            "std"			=> "disable",
            "edit_field_class" => "vc_col-xs-6",
        ),
        // CSS Animations
        vc_map_add_css_animation( true ),
        /* Button */
        array(
            "type"			=> "mgt_separator",
            "param_name"	=> 'gbp5',
            "heading"		=> "Button settings",
            "group"			=> "Button",
        ),
        array(
            "type"			=> "vc_link",
            //"holder"		=> "div",
            "class" 		=> "hide_in_vc_editor",
            "admin_label" 	=> false,
            "heading"		=> "Add A Link",
            "description"	=> "Leave empty if you don't need button. Button will be added to flipbox back side.",
            "param_name"	=> "button_url",
            "std"			=> "",
            "group"			=> "Button",
        ),
        
        array(
            "type"			=> "textfield",
            //"holder"		=> "div",
            "class" 		=> "hide_in_vc_editor",
            "admin_label" 	=> false,
            "heading"		=> "Button text size",
            "param_name"	=> "button_text_size",
            "value"			=> "12",
            "description"	=> "Dont include px/em",
            "std"			=> "12",
            "group"			=> "Button",
        ),
        array(
            "type"			=> "dropdown",
            //"holder"		=> "div",
            "class" 		=> "hide_in_vc_editor",
            "admin_label" 	=> false,
            "heading"		=> "Button text transform",
            "param_name"	=> "button_text_transform",
            "value"			=> array(
                "None"	=> "none",
                "UPPERCASE"	=> "uppercase"
            ),
            "description"	=> "",
            "std"			=> "none",
            "group"			=> "Button",
            "edit_field_class" => "vc_col-xs-6",
        ),
        // Button icon
        array(
            "type"			=> "mgt_separator",
            "param_name"	=> 'gbp4',
            "heading"		=> "Button icon settings",
            "group"			=> "Button",
        ),
        array(
            'type' => 'checkbox',
            'heading' => __( 'Add icon?', 'awavcl' ),
            'param_name' => 'button_icon',
            "group"			=> "Button",
            "edit_field_class" => "vc_col-xs-6",
        ),
        array(
            'type' => 'checkbox',
            'heading' => __( 'Add icon separator line?', 'awavcl' ),
            'param_name' => 'button_icon_separator',
            'dependency' => array(
                'element' => 'button_icon',
                'value' => 'true',
            ),
            "group"			=> "Button",
            "edit_field_class" => "vc_col-xs-6",
        ),
        array(
            "type"			=> "dropdown",
            //"holder"		=> "div",
            "class" 		=> "hide_in_vc_editor",
            "admin_label" 	=> false,
            "heading"		=> "Button icon alignment",
            "param_name"	=> "button_icon_position",
            "value"			=> array(
                "Left"	=> "left",
                "Right"	=> "right"
            ),
            "description"	=> "",
            "std"			=> "left",
            'dependency' => array(
                'element' => 'button_icon',
                'value' => 'true',
            ),
            "group"			=> "Button",
        ),
        array(
            'type' => 'dropdown',
            'heading' => __( 'Icon library', 'awavcl' ),
            'value' => array(
                __( 'Font Awesome', 'awavcl' ) => 'fontawesome',
                __( 'Open Iconic', 'awavcl' ) => 'openiconic',
                __( 'Typicons', 'awavcl' ) => 'typicons',
                __( 'Entypo', 'awavcl' ) => 'entypo',
                __( 'Linecons', 'awavcl' ) => 'linecons',
                __( 'Mono Social', 'awavcl' ) => 'monosocial',
                __( 'Material', 'awavcl' ) => 'material',
                __( 'Pe7 Stroke', 'awavcl' ) => 'pe7stroke',
            ),
            'dependency' => array(
                'element' => 'button_icon',
                'value' => 'true',
            ),
            'admin_label' => true,
            'param_name' => 'icon_type',
            'description' => __( 'Select icon library.', 'awavcl' ),
            "std"		=> "fontawesome",
            "group"			=> "Button",
        ),
        /* Format options */
        array(
            "type"			=> "mgt_separator",
            "param_name"	=> 'gbp1',
            "heading"		=> "Override block content elements styles",
            "group"			=> "Format",
        ),
        array(
            "type"			=> "textfield",
            //"holder"		=> "div",
            "class" 		=> "hide_in_vc_editor",
            "admin_label" 	=> false,
            "heading"		=> "Content padding",
            "description"	=> "For ex.: 50px 40px",
            "param_name"	=> "format_content_padding",
            "group"			=> "Format",
            "std"			=> "",
        ),
        array(
            "type"			=> "textfield",
            //"holder"		=> "div",
            "class" 		=> "hide_in_vc_editor",
            "admin_label" 	=> false,
            "heading"		=> "Header font size",
            "description"	=> "For ex.: 25px",
            "param_name"	=> "format_header_fontsize",
            "group"			=> "Format",
            "std"			=> "",
            "edit_field_class" => "vc_col-xs-6",
        ),
        array(
            "type"			=> "textfield",
            //"holder"		=> "div",
            "class" 		=> "hide_in_vc_editor",
            "admin_label" 	=> false,
            "heading"		=> "Header padding",
            "description"	=> "For ex.: 0 0 30px 0",
            "param_name"	=> "format_header_padding",
            "group"			=> "Format",
            "std"			=> "",
            "edit_field_class" => "vc_col-xs-6",
        ),
        array(
            "type"			=> "textfield",
            //"holder"		=> "div",
            "class" 		=> "hide_in_vc_editor",
            "admin_label" 	=> false,
            "heading"		=> "Description font size",
            "description"	=> "For ex.: 20px",
            "param_name"	=> "format_description_fontsize",
            "group"			=> "Format",
            "std"			=> "",
            "edit_field_class" => "vc_col-xs-6",
        ),
        array(
            "type"			=> "textfield",
            //"holder"		=> "div",
            "class" 		=> "hide_in_vc_editor",
            "admin_label" 	=> false,
            "heading"		=> "Description padding",
            "description"	=> "For ex.: 0 0 20px 0",
            "param_name"	=> "format_description_padding",
            "group"			=> "Format",
            "std"			=> "",
            "edit_field_class" => "vc_col-xs-6",
        ),
        array(
            "type"			=> "textfield",
            //"holder"		=> "div",
            "class" 		=> "hide_in_vc_editor",
            "admin_label" 	=> false,
            "heading"		=> "Icon font size",
            "description"	=> "For ex.: 50px",
            "param_name"	=> "format_icon_fontsize",
            "group"			=> "Format",
            "std"			=> "",
            "edit_field_class" => "vc_col-xs-6",
        ),
        array(
            'type' => 'css_editor',
            'heading' => __( 'Css' ),
            'param_name' => 'css',
            'group' => __( 'Content Design options' ),
        ),
        array(
            "type" => "textfield",
            "heading" => esc_attr__("Extra class name", 'awavcl'),
            "param_name" => "el_class",
            "group"			=> "Format",
            "description" => esc_attr__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", 'awavcl')
        ),        
    )

    
));




function awavc_shortcode_flipbox_wp($atts, $sc_content = null) {
    extract(shortcode_atts(array(
        /* Front side */
        'header_text_front' => 'Title',
        'description_text_front' => 'Awesome way to show your features inside wpbakery page builder.',
        'header_color_front' => '',
        'description_color_front' => '',
        'background_color_front' => '',
        'background_image_front' => '',
        'block_border_front' => false,
        'block_border_front_width' => '',
        'block_border_front_style' => 'solid',
        'block_border_front_color' => '',
        'front_icon' => false,
        'front_icon_color' => '',
        'front_icon_type' => 'fontawesome',
        'front_icon_fontawesome' => 'fa fa-adjust',
        'front_icon_pe7stroke' => 'pe-7s-album',
        'front_icon_openiconic' => 'vc-oi vc-oi-dial',
        'front_icon_typicons' => 'typcn typcn-adjust-brightness',
        'front_icon_entypo' => 'entypo-icon entypo-icon-note',
        'front_icon_linecons' => 'vc_li vc_li-heart',
        'front_icon_monosocial' => 'vc-mono vc-mono-fivehundredpx',
        'front_icon_material' => 'vc-material vc-material-cake',
        /* Back side */
        'header_text_back' => 'Title',
        'description_text_back' => 'Awesome way to show your features inside wpbakery page builder Back.',
        'header_color_back' => '',
        'description_color_back' => '',
        'background_color_back' => '',
        'background_image_back' => '',
        'block_border_back' => false,
        'block_border_back_width' => '',
        'block_border_back_style' => 'solid',
        'block_border_back_color' => '',
        /* Styles and effects */
        'flipbox_animation' => 'horizontal',
        'block_height' => '',
        'flipbox_round_edges' => 'disable',
        'css_animation' => 'none',
        /* Button - back side */
        'button_url' => '',
        'button_link_lightbox' => false,
        'button_style' => 'solid',
        'button_round_edges' => 'disable',
        'button_size' => 'normal',
        'button_align' => 'center',
        'button_text_size' => 'normal',
        'button_text_transform' => 'none',
        // Icon
        'button_icon' => false,
        'button_icon_position' => 'left',
        'button_icon_separator' => false,
        'icon_type' => 'fontawesome',
        'icon_fontawesome' => 'fa fa-adjust',
        'icon_pe7stroke' => 'pe-7s-album',
        'icon_openiconic' => 'vc-oi vc-oi-dial',
        'icon_typicons' => 'typcn typcn-adjust-brightness',
        'icon_entypo' => 'entypo-icon entypo-icon-note',
        'icon_linecons' => 'vc_li vc_li-heart',
        'icon_monosocial' => 'vc-mono vc-mono-fivehundredpx',
        'icon_material' => 'vc-material vc-material-cake',
        // Animation
        'hover_effect' => 'default',
        /* Button custom styles */
        'button_override' => false,
        'fontweight' => 'normal',
        'button_color_bg' => '',
        'button_bg_grad' => false,
        'button_color_bggrad' => '',
        'button_color_bghover' => '',
        'button_bghover_grad' => false,
        'button_color_bghovergrad' => '',
        'button_color_text' => '',
        'button_color_texthover' => '',
        'button_border' => false,
        'button_border_width' => 2,
        'button_color_border' => '',
        'button_color_borderhover' => '',
        /* Format */
        'format_header_fontsize' => '',
        'format_header_padding' => '',
        'format_description_fontsize' => '',
        'format_description_padding' => '',
        'format_icon_fontsize' => '',
        'format_content_padding' => '',
        /* CSS */
        'css' => '',
        'el_class' => '',
    ), $atts));

    wp_register_style( 'flip-box-advanced', plugins_url( 'css/flip-box-advanced.css',  __FILE__) );
    wp_enqueue_style( 'flip-box-advanced' );

    wp_register_script('flipbox-adv-js', plugins_url('/js/flip-box-advanced.js', __FILE__), array('jquery'),false);
    wp_enqueue_script('flipbox-adv-js');
    

    
    ob_start();

    $mgt_custom_css = '';
    $add_class = '';

    $style_front = '';
    $style_back = '';

    $add_class .= ' mgt-flipbox-animation-'.$flipbox_animation;
    $add_class .= ' mgt-flipbox-round-edges-'.$flipbox_round_edges;

    // Background image for front side
    $background_image_front_data = wp_get_attachment_image_src( $background_image_front, 'full' );

    if(trim($background_image_front_data[0]) !== '') {
        $style_front .= 'background-image: url('.$background_image_front_data[0].');';
    }

    // Background image for back side
    $background_image_back_data = wp_get_attachment_image_src( $background_image_back, 'full' );

    if(trim($background_image_back_data[0]) !== '') {
        $style_back .= 'background-image: url('.$background_image_back_data[0].');';
    }

    // Preparing content
    if($header_text_front !== '') {
        $header_text_front = '<h4 class="mgt-flipbox-header">'.$header_text_front.'</h4>';
    }

    if($header_text_back !== '') {
        $header_text_back = '<h4 class="mgt-flipbox-header">'.$header_text_back.'</h4>';
    }

    if($description_text_front !== '') {
        $description_text_front = '<div class="mgt-flipbox-description">'.$description_text_front.'</div>';
    }

    if($description_text_back !== '') {
        $description_text_back = '<div class="mgt-flipbox-description">'.$description_text_back.'</div>';
    }

    // Button
    $button_data = vc_build_link($button_url);
    $bt_url = $button_data['url'];
    $bt_ttl = $button_data['title'];
    $bt_target = $button_data['target'];
    
  

    $button_html = '';

    if($button_data['url'] !== '') {

        $button_html = '<a class="sale-banner btn" href="'.$bt_url.'" title="" target="'.$bt_target.'" style="color:'.$button_color_text.';font-size:'.$button_text_size.'px;">'.$bt_ttl.'</a>

        ';

    }

    // Custom CSS
    $unique_block_id = rand(1000000,90000000);

    $unique_class_name = 'mgt-flipbox-'.$unique_block_id;

    // FORMAT
    // Content
    if($format_content_padding !== '') {
        	$mgt_custom_css .= "
            .$unique_class_name.mgt-flipbox .mgt-flipbox-front-inner,
            .$unique_class_name.mgt-flipbox .mgt-flipbox-back-inner {
                padding: $format_content_padding!important;
            }
        ";
        }

    // Header 
        if($format_header_fontsize !== '') {
        	$mgt_custom_css .= "
            .$unique_class_name.mgt-flipbox h4.mgt-flipbox-header {
                font-size: $format_header_fontsize!important;
                line-height: normal!important;
            }
        ";
        }
        if($format_header_padding !== '') {
        	$mgt_custom_css .= "
            .$unique_class_name.mgt-flipbox h4.mgt-flipbox-header {
                padding: $format_header_padding!important;
            }
        ";
        }

        // Description
        if($format_description_fontsize !== '') {
        	$mgt_custom_css .= "
            .$unique_class_name.mgt-flipbox .mgt-flipbox-description {
                font-size: $format_description_fontsize!important;
            }
        ";
        }

        if($format_description_padding !== '') {
        	$mgt_custom_css .= "
            .$unique_class_name.mgt-flipbox .mgt-flipbox-description {
                padding: $format_description_padding!important;
            }
        ";
        }

        // Front
        if($header_color_front !== '') {
        	$mgt_custom_css .= "
            .$unique_class_name.mgt-flipbox .mgt-flipbox-front h4.mgt-flipbox-header {
                color: $header_color_front!important;
            }
        ";
        }

        if($description_color_front !== '') {
        	$mgt_custom_css .= "
            .$unique_class_name.mgt-flipbox .mgt-flipbox-front .mgt-flipbox-description {
                color: $description_color_front!important;
            }
        ";
        }

        if( !empty($background_color_front) ) {
        	$mgt_custom_css .= "
            .$unique_class_name.mgt-flipbox .mgt-flipbox-front-inner {
                background-color: $background_color_front!important;
            }
        ";
        }
        
        if( isset($background_image_front_data) ) {
        	$mgt_custom_css .= "
            .$unique_class_name.mgt-flipbox .mgt-flipbox-front-inner {
                background-color: rgba(0, 0, 0, 0.50);
            }
        ";
        }        

        if($block_border_front) {
        	$mgt_custom_css .= "
            .$unique_class_name.mgt-flipbox .mgt-flipbox-front {
                border: ".$block_border_front_width."px $block_border_front_style $block_border_front_color!important;
            }
        ";
        }

        // Back
        if($header_color_back !== '') {
        	$mgt_custom_css .= "
            .$unique_class_name.mgt-flipbox .mgt-flipbox-back h4.mgt-flipbox-header {
                color: $header_color_back!important;
            }
        ";
        }

        if( !empty($background_color_back) ) {
        	$mgt_custom_css .= "
            .$unique_class_name.mgt-flipbox .mgt-flipbox-back-inner {
                background-color: $background_color_back!important;
            }
        ";
        }
        
        if( isset($background_image_back_data) ) {
        	$mgt_custom_css .= "
            .$unique_class_name.mgt-flipbox .mgt-flipbox-back-inner {
                background-color: rgba(0, 0, 0, 0.50);
            }
        ";
        }        

        if($description_color_back !== '') {
        	$mgt_custom_css .= "
            .$unique_class_name.mgt-flipbox .mgt-flipbox-back .mgt-flipbox-description {
                color: $description_color_back!important;
            }
        ";
        }

        if($block_border_back) {
        	$mgt_custom_css .= "
            .$unique_class_name.mgt-flipbox .mgt-flipbox-back {
                border: ".$block_border_back_width."px $block_border_back_style $block_border_back_color!important;
            }
        ";
        }

        // Icon
        if($front_icon_color !== '') {
        	$mgt_custom_css .= "
            .$unique_class_name.mgt-flipbox .mgt-flipbox-front .mgt-flipbox-icon i {
                color: $front_icon_color!important;
            }
        ";
        }

        if($format_icon_fontsize !== '') {
        	$mgt_custom_css .= "
            .$unique_class_name.mgt-flipbox .mgt-flipbox-front .mgt-flipbox-icon i {
                font-size: $format_icon_fontsize!important;
            }
        ";
        }

        // Block height
        if($block_height !== '') {
        	$mgt_custom_css .= "
            .$unique_class_name.mgt-flipbox {
                height: $block_height!important;
            }
        ";
        }

        if($mgt_custom_css !== '') {
            $mgt_custom_css = str_replace(array("\r", "\n", "  ", "	"), '', $mgt_custom_css);
            echo "<style scoped='scoped'>$mgt_custom_css</style>"; // This variable contains user Custom CSS code and can't be escaped with WordPress functions.
        }

    $add_class .= ' '.$unique_class_name;

    $css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), '', $atts );

    // Subheader icon
    if($front_icon == true) {

        // Load VC icons libraries
        vc_iconpicker_editor_jscss();

        switch($front_icon_type) {
            case 'fontawesome':
                $front_icon_html = '<i class="'.$front_icon_fontawesome.'"></i>';
            break;
            case 'openiconic':
                $front_icon_html = '<i class="'.$front_icon_openiconic.'"></i>';
            break;
            case 'typicons':
                $front_icon_html = '<i class="'.$front_icon_typicons.'"></i>';
            break;
            case 'entypo':
                $front_icon_html = '<i class="'.$front_icon_entypo.'"></i>';
            break;
            case 'linecons':
                $front_icon_html = '<i class="'.$front_icon_linecons.'"></i>';
            break;
            case 'monosocial':
                $front_icon_html = '<i class="'.$front_icon_monosocial.'"></i>';
            break;
            case 'material':
                $front_icon_html = '<i class="'.$front_icon_material.'"></i>';
            break;
           case 'pe7stroke':
                $front_icon_html = '<i class="'.$front_icon_pe7stroke.'"></i>';
            break;
        }

        $front_icon_html = '<div class="mgt-flipbox-icon">'.$front_icon_html.'</div>';

    } else {
        $front_icon_html = '';
    }

    // CSS Animation
    if($css_animation !== 'none') {

        // Code from /wp-content/plugins/advc/include/classes/shortcodes/shortcodes.php:640, public function getCSSAnimation( $css_animation )
        $animation_css_class = ' wpb_animate_when_almost_visible wpb_'.$css_animation.' '.$css_animation;

        // Load animation JS
        wp_enqueue_script( 'waypoints' );
        wp_enqueue_style( 'animate-css' );

    } else {
        $animation_css_class = '';
    }

    // Show flipbox
    echo '<div class="mgt-flipbox'.esc_attr($add_class).' wpb_content_element'.esc_attr( $css_class ).esc_attr($animation_css_class).' '.$el_class.'">
              <div class="mgt-flipbox-front" data-style="'.esc_attr($style_front).'">
                <div class="mgt-flipbox-front-inner">
                    <div class="mgt-flipbox-content-wrapper">
                      '.wp_kses_post($front_icon_html).'
                      '.wp_kses_post($header_text_front).'
                      '.wp_kses_post($description_text_front).'
                    </div>
                </div>
              </div>
              <div class="mgt-flipbox-back" data-style="'.esc_attr($style_back).'">
                <div class="mgt-flipbox-back-inner">
                	<div class="mgt-flipbox-content-wrapper">
                  '.wp_kses_post($header_text_back).'
                  '.wp_kses_post($description_text_back).'
                  '.$button_html.'
                    </div>
                </div>
              </div>
                    </div>';

    $sc_content = ob_get_contents();
    ob_end_clean();
    return $sc_content;
}

add_shortcode("awavc_flipbox_advanced", "awavc_shortcode_flipbox_wp");

