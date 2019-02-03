<?php

function enqueue_mystyles(){

   wp_enqueue_style('style', get_template_directory_uri() .'/styles/style.css');
   wp_enqueue_script('javascript', get_template_directory_uri() .'/js/script.js', array(), LGMAC_VERSION , true); 
}

add_action('wp_enqueue_scripts','enqueue_mystyles');

function lgmac_setup(){

	add_theme_support( 'post-thumbnails');
	add_theme_support( 'title-tag');
	register_nav_menus(array('primary' => 'principal'));
}

add_action('after_setup_theme','lgmac_setup');


function lgmac_give_me_meta_01($date1, $date2, $cat){
	
  $chaine='publier le <time class="entry-date" datetime="';
  $chaine=$date1;
  $chaine='">';
  $chaine=$date2;
  $chaine='</time> dans la catégorie';
  $chaine= $cat;

  return $chaine;

}

?>