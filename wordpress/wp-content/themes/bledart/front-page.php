<?php get_header(); ?>

<!-- <?php get_template_part('slider', 'home'); ?> -->

<?php $arg_blog = array(
   'post_type' => 'post',
   'posts_per_page' => 2
);

  $req_blog = new WP_Query($arg_blog);
?>

<body>
	<!--MAIN CONTENT-->
	<main>
		<?php if ($req_blog->have_posts()): ?>
		<article>
			<?php while ($req_blog->have_posts()): $req_blog->the_post(); ?>
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
     <div class="totowed"><?php dynamic_sidebar('my_custom_zone');?></div>

     <section>
     	<?php if (have_posts()): ?>
			<?php while (have_posts()): the_post(); ?>
				<div>
					<?php the_title('<h1>','</h1>'); ?>
				  <?php the_content(); ?>
				</div>
		<?php endwhile; ?>
    <?php
      else : echo "pas de resultat";

      endif;
     ?>
     </section>
	</main>
	<?php get_footer(); ?>
</body>
</html>
