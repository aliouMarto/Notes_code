<?php get_header(); ?>
<?php the_field('note_de_jeux'); ?> / 20
Prix : <?php the_field('prix'); ?>€
Date de sortie : <?php the_field('date_de_sortie'); ?>


<br />
<div class="appreciations">
  

<br />
<div class="plus">

<br />
<h3>Les Plus</h3>
<p>

    <?php the_field('les_plus'); ?>
</div>
<p>



<br />
<div class="moins">

<br />
<h3>Les Moins</h3>
<p>

    <?php the_field('les_moins'); ?>
</div>
<p>


</div>

<p> <?php the_field('liste'); ?></p>
<p>
<?php
  $image = get_field('pochette');
  $size = 'pochette'; // (thumbnail, medium, large)
  if( $image ) {
  echo wp_get_attachment_image( $image, $size );
  }
?>
<?php get_footer(); ?>