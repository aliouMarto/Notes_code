
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div>
	<section>
		<h2><?php the_title(); ?></h2>
		<div> <?php the_content(); ?></div>
	</section>
	<aside>
		<?php get_sidebar(); ?>
	</aside>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>