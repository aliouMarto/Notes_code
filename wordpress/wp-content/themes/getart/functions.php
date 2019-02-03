<?php
function style_getart(){
   wp_enqueue_style('style', get_template_directory_uri() .'/style.css');
   
}

add_action('wp_enqueue_scripts','style_getart');

add_theme_support( 'post-thumbnails' );

add_image_size('mag',200, 200, true);