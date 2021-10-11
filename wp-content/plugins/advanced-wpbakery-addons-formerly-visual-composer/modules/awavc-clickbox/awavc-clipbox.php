<?php
vc_map(array(
    "name" 			=> "Advanced ClickBoard",
    "category" 		=> 'Advanced Elements',
    "description"	=> "Clink and Copy",
    "base" 			=> "awavc_clipboard",
    "class" 		=> "",
    "icon" 			=> "copy_clipboard_icon",

    "params" 	=> array(


        array(
            "type" => "textfield",
            "heading" => __("Code or Text to Copy", 'awavcl'),
            "param_name" => "title",
            "description" => __("", 'awavcl'),
            "value" => __("Lorem ipsum is placeholder text commonly used", 'awavcl'),
        ),
        array(
            "type" => "textfield",
            "heading" => __("Copy Button Text", 'awavcl'),
            "param_name" => "copy_btn",
            "description" => __("", 'awavcl'),
            "value" => __("Copy The Code", 'awavcl'),
        ),
        array(
            'type'             => 'prime_slider',
            'heading'          => __( 'Button Text Size', 'awavcl' ),
            'param_name'       => 'txt_siz',
            "value" => 12,
            "min" => 5,
            "max" => 60,
            "step" => 1,
            "unit" => "px",
            "description" => __("", "awavcl"),
            "group" => __("", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Background Color", 'awavcl'),
            "param_name" => "bg_color",
            "value" => "",
            "group" => __("", 'awavcl'),
        ),

        array(
            "type" => "colorpicker",
            "heading" => __("Text Color", 'awavcl'),
            "param_name" => "txt_color",
            "value" => "",
            "group" => __("", 'awavcl'),
        ),
        array(
            "type" => "colorpicker",
            "heading" => __("Background Color on Hover", 'awavcl'),
            "param_name" => "bg_clr_hvr",
            "value" => "",
            "group" => __("", 'awavcl'),
        ),

    )

));

function awavc_clipboard_shortcode($atts, $content = null) {
    extract(shortcode_atts(array(

                //'show_btnnnn' => 'Yes',
                'title' => 'myTitle',
                'copy_btn' => 'copy',
                'txt_siz' => '',
                'bg_color' => '',
                'txt_color' => '',
                'bg_clr_hvr' => '',
    ), $atts));



    //$image_url = wp_get_attachment_url( $image, 'full' );
    //$image = aq_resize( $image_url, 296, 289, false ); //resize & crop the image
    //var_dump($image);

    $id= rand(99,9999);

    $html = '
                <style>#id_'.$id.' button:hover{background:'.$bg_clr_hvr.';} </style>
           <!-- The text field -->
<input type="text" value="'.$title.'" id="id_'.$id.'">

<!-- The button used to copy the text -->
<button onclick="myFunction_'.$id.'()" style="text-size:'.$txt_siz.';background-color:'.$bg_color.';color:'.$txt_color.';">'.$copy_btn.'</button>

<script>
function myFunction_'.$id.'() {
    /* Get the text field */
    var copyText = document.getElementById("id_'.$id.'");

    /* Select the text field */
    copyText.select();

    /* Copy the text inside the text field */
    document.execCommand("copy");

    /* Alert the copied text */
    alert("Copied: " + copyText.value);
}
</script>
';











    return $html;

}

add_shortcode("awavc_clipboard", "awavc_clipboard_shortcode");