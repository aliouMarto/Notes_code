<?php get_header(); ?>
<body>
	<!--MAIN CONTENT-->
	<main>
		<?php if (have_posts()): ?>
		<article>
			<?php while (have_posts()): the_post(); ?>
			<h2> <?php the_title(); ?></h2>
			<?php the_post_thumbnail('thumbnail'); ?>
			<?php the_content(); ?>
			<div class="clear"></div>
		</article>
		<?php endwhile; ?>
    <?php
      else : echo "pas de resultat";

      endif;
     ?>
     <?php comments_template(); ?>
        
	</main>
	<?php get_footer(); ?>
</body>
</html>
