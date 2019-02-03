<?php get_header(); ?>
<div class="container">
<section class="contain">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
   include('include/loop-article.php');
   endwhile;
   endif;
 ?>
</section>
 <aside>
 	<?php get_sidebar(); ?>
 	
 </aside>
</div> 
<?php get_footer(); ?>