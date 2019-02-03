 <?php $size = 'pochette';?>
<h1><?php the_title(); ?></h1>
<?php the_post_thumbnail($size); ?>
<?php the_content(); ?>
<?php
	$posts = get_field('articles_similaires');

	if($posts): 
?>
<h3>Articles Similaires</h3>
<ul>
	<?php 
		foreach( $posts as $post): // ne pas changer $post IMPORTANT
			setup_postdata($post); 
	?>

	<li>
		<?php the_post_thumbnail($size); ?>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</li>

	<?php endforeach; ?>
</ul>

<?php 
		wp_reset_postdata(); // IMPORTANT - réinitialiser l'objet $post sur la requête principale
	endif; 
?>