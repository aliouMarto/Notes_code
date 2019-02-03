<?php
function enqueue_mystyles(){
   wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
   wp_enqueue_style('gfont', '//fonts.googleapis.com/css?family=Kaushan+Script|Playfair+Display');
   wp_enqueue_style('normalize', get_template_directory_uri() .'/styles/normalize.css');
   wp_enqueue_style('style', get_template_directory_uri() .'/styles/style.css'); 
}

add_action('wp_enqueue_scripts','enqueue_mystyles');
register_nav_menu( 'header', 'Header Menu');

add_theme_support( 'post-thumbnails' );

function register_my_sidebars() 
{    register_sidebar( array(
      'name' => __( 'Blog Sidebar', 'wpb' ),
      'id' => 'sidebar-blog',
      'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s sidebar-item">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widget-title item-title">',
      'after_title' => '</h3>',
  ) );

  }

add_action( 'widgets_init', 'register_my_sidebars' );

function register_my_post_types() {
   $labels = array(
       'name'               => _x( 'Books', 'post type general name', 'your-plugin-textdomain' ),
       'singular_name'      => _x( 'Book', 'post type singular name', 'your-plugin-textdomain' ),
       'menu_name'          => _x( 'Books', 'admin menu', 'your-plugin-textdomain' ),
       'name_admin_bar'     => _x( 'Book', 'add new on admin bar', 'your-plugin-textdomain' ),
       'add_new'            => _x( 'Add New', 'book', 'your-plugin-textdomain' ),
       'add_new_item'       => __( 'Add New Book', 'your-plugin-textdomain' ),
       'new_item'           => __( 'New Book', 'your-plugin-textdomain' ),
       'edit_item'          => __( 'Edit Book', 'your-plugin-textdomain' ),
       'view_item'          => __( 'View Book', 'your-plugin-textdomain' ),
       'all_items'          => __( 'All Books', 'your-plugin-textdomain' ),
       'search_items'       => __( 'Search Books', 'your-plugin-textdomain' ),
       'parent_item_colon'  => __( 'Parent Books:', 'your-plugin-textdomain' ),
       'not_found'          => __( 'No books found.', 'your-plugin-textdomain' ),
       'not_found_in_trash' => __( 'No books found in Trash.', 'your-plugin-textdomain' )
   );

   $args = array(
       'labels'             => $labels,
              'description'        => __( 'Description.', 'your-plugin-textdomain' ),
       'public'             => true,
       'publicly_queryable' => true,
       'show_ui'            => true,
       'show_in_menu'       => true,
       'query_var'          => true,
       'rewrite'            => array( 'slug' => 'book' ),
       'capability_type'    => 'post',
       'has_archive'        => true,
       'hierarchical'       => false,
       'menu_position'      => null,
       'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
   );

   register_post_type( 'book', $args );
}
add_action( 'init', 'register_my_post_types' );
?>
