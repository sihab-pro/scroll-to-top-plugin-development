<?php

/*

Plugin Name: Scroll to Header
Author: Sihab Uddin
Author URI: https://www.upwork.com/freelancers/sihab
description: Simple and Straightforward scroll to top Plugin by Developer Sihab
tags: scroll to top, scroll to head, scroll to header, Go to header
version:1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html

*/


add_action('wp_footer', 'scroll_to_header_function');


function scroll_to_header_function(){

    ?>

  <div class="scroll-to-header">

  <a href="#">
  <i class="fa-solid fa-angles-up"></i>

  </a>

  </div>

    <?php
}


add_action('wp_enqueue_scripts', 'our_plugin_scripts');

function our_plugin_scripts(){
    wp_enqueue_style('font-awesome', PLUGINS_URL('css/all.min.css', __FILE__));
    wp_enqueue_style('my_css', PLUGINS_URL('css/custom.css', __FILE__));
    wp_enqueue_script('our-custom-js', PLUGINS_URL('scripts/custom.js', __FILE__), array('jquery'), '', false);
}



?>