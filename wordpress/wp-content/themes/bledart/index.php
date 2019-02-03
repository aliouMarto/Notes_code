<?php get_header(); ?>
<body>
	<!--MAIN CONTENT-->
	<main>
		<?php if (have_posts()): ?>
		<article>
			<?php while (have_posts()): the_post(); ?>
			<h2> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_post_thumbnail('thumbnail'); ?>
			<?php the_content(); ?>
			<a href="<?php the_permalink(); ?>">Read more</a>
			<div class="clear"></div>
		</article>
		<?php endwhile; ?>
    <?php
      else : echo "pas de resultat";

      endif;
     ?>
	</main>
	<?php get_footer(); ?>
</body>
</html>
