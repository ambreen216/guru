<?php
require_once 'slider/slider-params.php';
//require_once 'switch/switch.php';

function __construct() {

vc_add_shortcode_param( 'awavc_notice', 'awavc_notice_filed_type' );
function hvc_notice_filed_type( $settings, $value ) {
   return '<div class="awavc_notice">
                
                <h1>Raju</h1>
                
            </div>';
    }

}