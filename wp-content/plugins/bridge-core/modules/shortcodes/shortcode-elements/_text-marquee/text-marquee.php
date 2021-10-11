<?php
/* Text Marquee shortcode */
if (!function_exists('bridge_core_text_marquee')) {

    function bridge_core_text_marquee($atts, $content = null) {
        $args = array(
            "title"             => "",
            "title_color"       => "",
        );

        extract(shortcode_atts($args, $atts));

        //init variables
        $html  = "";
        $title_styles  = "";

        //generate styles
        if($title_color != "") {
            $title_styles .= "color: ".$title_color.";";
        }

        $html .= '<div class="qode-text-marquee">';
        $html .= '<div class="qode-text-marquee-wrapper">';
        $html .= '<span class="qode-text-marquee-title" style="'.$title_styles.'">'.$title.'</span>';
        $html .= '</div>';
        $html .= '</div>';

        return $html;
    }

    add_shortcode('text_marquee', 'bridge_core_text_marquee');
}