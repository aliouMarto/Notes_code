<?php get_header(); ?>

<?php $arg_blog= array(
   'post_type'=>'post',
   'posts_per_page'=> 2
);
  $req_blog=new WP_Query($args_blog);
?>
<body>
<section>
	<?php if ($req_blog->have_posts()): ?>
		<div class="container">
		  <?php while ($req_blog->have_posts()): $req_blog->the_post(); ?>
		  	<div class="image">
		  		<?php the_post_thumbnail('thumbnail'); ?>
		  	</div>
		  	<article>
		  		<h1> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
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