<?php

/*---------------------------------
    REMOVE CF7 UNWANTED P TAG.
----------------------------------*/
add_filter('wpcf7_autop_or_not', '__return_false');