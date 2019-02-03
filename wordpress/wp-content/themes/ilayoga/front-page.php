<?php get_header(); ?>
<section class="about">
<?php

$args = array
(
'post_type' => 'post',
'posts_per_page' => 2,
'order' => 'DESC'
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) : ?>
   
       <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <?php include('include/loop-article.php')?>;
       <?php endwhile; else : ?>

       <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
   
<?php endif; ?>

</section>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   <section class="container">
       <?php the_content(); ?>
   </section>
   <section class="description">
      <article>
        <h2>Nos cours</h2>
        <img src="<?= get_template_directory_uri();?>/img/home/1.png">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
      </article><!--
      --><article>
        <h2>Nos professeurs</h2>
         <img src="<?= get_template_directory_uri();?>/img/home/2.png">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
      </article><!--
      --><article>
        <h2>Nos tarifs</h2>
        <img src="<?= get_template_directory_uri();?>/img/home/3.png">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
      </article>
    </section>
   <?php endwhile; else : ?>
   <p>
       <?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
   </p>
<?php endif; ?>

<?php get_footer(); ?>