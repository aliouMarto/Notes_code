<?php
function mesStyles(){
   wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
   wp_enqueue_style('gfont', '//fonts.googleapis.com/css?family=Kaushan+Script|Playfair+Display');
   wp_enqueue_style('boot', get_template_directory_uri() .'/bootstrap/css/bootstrap.min.css');
   wp_enqueue_script('bootjs', get_template_directory_uri() .'/bootstrap/js/bootstrap.min.js');
   wp_enqueue_style('style', get_template_directory_uri() .'/css/style.css');
   wp_enqueue_script('java', get_template_directory_uri() .'/java/bled.js', array('jquery'));

}

add_action('wp_enqueue_scripts','mesStyles');

register_nav_menu( 'haut', 'bled menu');

add_theme_support( 'post-thumbnails' );

add_action('widgets_init','zero_add_sidebar');
function zero_add_sidebar()
{
    register_sidebar(array(
        'id' => 'my_custom_zone',
        'name' => 'Zone supérieure',
        'description' => 'Apparait en haut du site',
        'before_widget' => '<aside>',
        'after_widget' => '</aside>',
        'before_title' => '<h1>',
        'after_title' => '</h1>'
    ));
}


function my_custom_init()
{
  register_post_type(
  'lolo', array(
    'label' => 'projet',
    'labels' => array(
      'name' => 'projets',
      'singular_name' => 'projet',
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

  register_taxonomy(
  'type',
  'lolo',
  array(
    'label' => 'Types',
    'labels' => array(
    'name' => 'Types',
    'singular_name' => 'Type',
    'all_items' => 'Tous les types',
    'edit_item' => 'Éditer le type',
    'view_item' => 'Voir le type',
    'update_item' => 'Mettre à jour le type',
    'add_new_item' => 'Ajouter un type',
    'new_item_name' => 'Nouveau type',
    'search_items' => 'Rechercher parmi les types',
    'popular_items' => 'Types les plus utilisés'
  ),
  'hierarchical' => true
  )
);
register_taxonomy(
  'couleur',
  'lolo',
  array(
    'label' => 'Couleurs',
    'labels' => array(
    'name' => 'Couleurs',
    'singular_name' => 'Couleur',
    'all_items' => 'Toutes les couleurs',
    'edit_item' => 'Éditer la couleur',
    'view_item' => 'Voir la couleur',
    'update_item' => 'Mettre à jour la couleur',
    'add_new_item' => 'Ajouter une couleur',
    'new_item_name' => 'Nouvelle couleur',
    'search_items' => 'Rechercher parmi les couleurs',
    'popular_items' => 'Couleurs les plus utilisées'
  ),
  'hierarchical' => false
  )
);
register_taxonomy_for_object_type( 'type', 'lolo' );
register_taxonomy_for_object_type( 'couleur', 'lolo' );
}

add_action('init', 'my_custom_init');

?>

