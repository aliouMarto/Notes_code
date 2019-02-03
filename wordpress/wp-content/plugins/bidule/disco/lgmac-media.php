<?php

add_action('init', 'my_exemple_init');
function my_exemple_init()
{
   register_post_type(
  'discotheque',
  array(
    'label' => 'discotheque',
    'labels' => array(
      'name' => 'discotheque',
      'singular_name' => 'discotheque',
      'all_items' => 'Toutes les discotheques',
      'add_new_item' => 'Ajouter une discotheque',
      'edit_item' => 'Éditer une discotheque',
      'new_item' => 'Nouvelle discotheque',
      'view_item' => 'Voir une discotheque',
      'search_items' => 'Rechercher parmi les discotheque',
      'not_found' => 'Pas de discotheque trouvé',
      'not_found_in_trash'=> 'Pas de discotheque dans la corbeille'
      ),
    'public' => true,
    'exclude_from_search'=> false,
    'rewrite'=> array( 'slug'=> 'disc'),
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


function lgmac_media_register_meta_box(){

	add_meta_box('lgmac_media_meta','references du CD','lgmac_media_meta_building','discotheque','normal','high');
}

function lgmac_media_meta_building($post){
  
  $lgmac_meta_an   = get_post_meta($post->ID, '_media_meta_an',    true);
  $lgmac_years= array();
  $lgmac_years[0]='compil';
  for($i=1970; $i<2001; $i++) { $lgmac_years[] = $i; }


  echo '<div>';
  echo '<p> <label for="media_detail_an"> Année -&gt;</label>';
  echo '<select id="media_detail_an" name="media_detail_an">';
  foreach($lgmac_years as $lgmac_year):
 echo '<option value="'  . $lgmac_year . '"' . selected($lgmac_meta_an, $lgmac_year, false) .'>' . $lgmac_year .'</option>';
  endforeach;
  echo '</select></p>';
  echo '</div>';
}

add_action('add_meta_boxes','lgmac_media_register_meta_box');



function lgmac_media_save_meta_box($post_id){
  
  if(get_post_type($post_id)== 'lgmac_media' && isset($_POST['media_detail_an'])){

  	update_post_meta($post_id, '_media_meta_an',  sanitize_text_field($_POST['media_detail_an']));
  }

}




add_action('save_post','lgmac_media_save_meta_box');