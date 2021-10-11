<?php
/* Ordered List shortcode */
if (!function_exists('bridge_core_ordered_list')) {
    function bridge_core_ordered_list($atts, $content = null) {
        $html =  "<div class=ordered>" . $content . "</div>";
        return $html;
    }
    add_shortcode('ordered_list', 'bridge_core_ordered_list');
}