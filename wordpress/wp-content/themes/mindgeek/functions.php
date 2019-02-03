<?php
function style_geek(){
   wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
   wp_enqueue_style('gfont', '//fonts.googleapis.com/css?family=Open+Sans');
   wp_enqueue_style('gfont2', '//fonts.googleapis.com/css?family=Candal');
   wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' );
   wp_enqueue_script( 'bootstrap', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', array());
   wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array());
   wp_enqueue_script( 'track', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array());
   wp_enqueue_style('normalize', get_template_directory_uri() .'/css/normalize.css');
   wp_enqueue_style('style', get_template_directory_uri() .'/css/style.css');
   
}

add_action('wp_enqueue_scripts','style_geek');

register_nav_menu( 'top_menu', 'geek_menu');

add_theme_support( 'post-thumbnails' );

function theme_set(){
  
  // CREATION DE FORMAT DIMAGE

  add_image_size('front-slider',1140, 420, true);

}
add_image_size ( 'pochette', 200, 80, false );

add_action('after_setup_theme','theme_set');

add_action('init', 'my_custom_init');
function my_custom_init()
{
   register_post_type(
  'projet',
  array(
    'label' => 'Projets',
    'labels' => array(
      'name' => 'Projets',
      'singular_name' => 'Projet',
      'all_items' => 'Tous les projets',
      'add_new_item' => 'Ajouter un projet',
      'edit_item' => 'Éditer le projet',
      'new_item' => 'Nouveau projet',
      'view_item' => 'Voir le projet',
      'search_items' => 'Rechercher parmi les projets',
      'not_found' => 'Pas de projet trouvé',
      'not_found_in_trash'=> 'Pas de projet dans la corbeille'
      ),
    'public' => true,
    'capability_type' => 'post',
    'supports' => array(
      'title',
      'editor',
      'thumbnail'
    ),
    'has_archive' => true
  )
 );
    register_post_type(
  'hebergement',
  array(
    'label' => 'Hebergements',
    'labels' => array(
      'name' => 'Hebergements',
      'singular_name' => 'Hebergement',
      'all_items' => 'Tous les Hebergements',
      'add_new_item' => 'Ajouter un Hebergement',
      'edit_item' => 'Éditer un Hebergement',
      'new_item' => 'Nouveau Hebergement',
      'view_item' => 'Voir Hebergement',
      'search_items' => 'Rechercher parmi les Hebergements',
      'not_found' => 'Pas de Hebergements',
      'not_found_in_trash'=> 'Pas de Hebergements dans la corbeille'
      ),
    'public' => true,
    'capability_type' => 'post',
    'supports' => array(
      'title',
      'custom-fields',
      'editor',
      'thumbnail'
    ),
    'has_archive' => true
  )
 );
  register_post_type(
  'slider',
  array(
    'label' => 'slider frontal',
    'labels' => array(
      'name' => 'slider frontal',
      'singular_name' => 'slider',
      'all_items' => 'Tous les sliders',
      'add_new_item' => 'Ajouter un slide',
      'edit_item' => 'Éditer un slide',
      'new_item' => 'Nouveau slider',
      'view_item' => 'Voir slider',
      'search_items' => 'Rechercher parmi les slider',
      'not_found' => 'Pas de slider',
      'not_found_in_trash'=> 'Pas de slider dans la corbeille'
      ),
    'public' => true,
    'menu_icon' => get_stylesheet_directory_uri() . '/img/camera.png',
    'capability_type' => 'post',
    'supports' => array(
      'title',
      'editor',
      'page-attributes',
      'thumbnail'
    ),
    'has_archive' => true
  )
 );
  register_post_type(
  'fond',
  array(
    'label' => 'image fond',
    'labels' => array(
      'name' => 'image fond',
      'singular_name' => 'fond',
      'all_items' => 'Toutes les image fond',
      'add_new_item' => 'Ajouter une image fond',
      'edit_item' => 'Éditer une image fond',
      'new_item' => 'Nouvelle image fond',
      'view_item' => 'Voir une image fond',
      'search_items' => 'Rechercher parmi les image fond',
      'not_found' => 'Pas dimage fond',
      'not_found_in_trash'=> 'Pas de image fond dans la corbeille'
      ),
    'public' => true,
    'capability_type' => 'post',
    'supports' => array(
      'title',
      'editor',
      'thumbnail'
    ),
    'has_archive' => true
  )
 );
}

// function geekpress_create_post_type() {

//   $labels = array(
//     'name' => 'Entreprises',
//     'all_items' => 'Entreprises',  // affiché dans le sous menu
//     'singular_name' => 'Entreprise',
//     'add_new_item' => 'Ajouter une entreprise',
//     'edit_item' => 'Modifier',
//     'menu_name' => 'Entreprises'
//   );

//   $args = array(
//     'labels' => $labels,
//     'public' => true,
//     'has_archive' => true,
//     'supports' => array('title', 'editor','thumbnail'),
//     'menu_position' => 5,
//     'menu_icon' => 'dashicons-store',
//   );

add_filter('manage_edit-fond_columns', 'fond_col_change');

   function fond_col_change($columns){

   $columns['image'] = "image de fond";

    return $columns;
  }


  function fond_content_show($column, $post_id){
  
    global $post;
    if($column =='image'){

      echo the_post_thumbnail(array(100,100));
    }
}
add_action('manage_fond_posts_custom_column', 'fond_content_show', 10, 2 );




   // CREER DES COLONNES

   add_filter('manage_edit-slider_columns', 'lgmac_col_change');

   function lgmac_col_change($columns){

   $columns['slider_image_order'] = "ordre";
   $columns['slider_image'] = "image affichée";

    return $columns;
  }

  // RAJOUTER DU CONTENU DANS NOS COLONNES

  function lgmac_content_show($column, $post_id){
  
    global $post;
    if($column =='slider_image'){

      echo the_post_thumbnail(array(100,100));
    }
   if($column=='slider_image_order'){

      echo $post->menu_order;
   } 
}
add_action('manage_slider_posts_custom_column', 'lgmac_content_show', 10, 2 );


// CHANGER LORDRE DES IMAGES

function lgmac_change_slides_order($query){
  
    global $post_type, $pagenow;

    if($pagenow =='edit.php' && $post_type == 'slider'){
      
      $query->query_vars['orderby'] = 'menu_order';
      $query->query_vars['order'] = 'menu_asc';
    }
}
add_action('pre_get_posts','lgmac_change_slides_order');
