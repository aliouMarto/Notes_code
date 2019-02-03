<?php get_header(); ?>
<body>
<section>
	<?php if (have_posts()): ?>
		<div class="container">
		  <?php while (have_posts()): the_post(); ?>
		  	<div class="image">
		  		<?php the_post_thumbnail('thumbnail'); ?>
		  	</div>
		  	<article>
		  		<h1> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		  		
		  		
		  		<p>
		  			<?php echo lgmac_give_me_meta_01(
                                         esc_attr(get_the_date('c')),
                                         esc_html(get_the_date()),
                                         get_the_category_list(', ')
		  			   );
		  			?>
		  		</p>
		  		<?php the_content(); ?>
		  	</article>
		</div>
	<?php endwhile; ?>
    <?php
      else : echo "pas de resultat";

      endif;
     ?>

</section>

<?php get_footer(); ?>
</body>
</html>