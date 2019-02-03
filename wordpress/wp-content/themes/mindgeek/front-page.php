 <?php get_header(); ?>
 
 <?php get_template_part('slider','home'); ?>
    <?php $arg_blog = array(
       'post_type' => 'projet',
       'posts_per_page' =>  3,
       'orderby' => 'title',
       'order' => 'DESC'
      );

      $req_blog = new WP_Query($arg_blog);
    ?>

   <div class="banniere">
     <h2>L'hébergement à prix libre</h2>
     <h4> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</h4>
   </div>
   <form>
      <input type="text" placeholder="QUE RECHERCHEZ-VOUS ?" name="search">
   </form>
   <main>
     <section class="flex-row">
      <h3>Notre solution en 3 points</h3>
      <?php if ($req_blog->have_posts()): ?>
      <?php while ($req_blog->have_posts()): $req_blog->the_post(); ?>
      <div class="config">
        <h4><i><?php the_post_thumbnail('thumbnail'); ?></i>
        <?php the_title(); ?></h4>
        <p><?php the_content(); ?></p>
      </div>
      <?php endwhile; ?>
    <?php
      else : echo "pas de resultat";

      endif;
     ?>
     </section>
     
      <?php $arg_heb = array(
       'post_type' => 'hebergement',
       'posts_per_page' =>  3,
       'orderby' => 'title',
       'order' => 'DESC'
      );

      $req_heb = new WP_Query($arg_heb);
    ?>

      <section class="flex-row">
      <h3>Choisissez votre style d'hébergement</h3>
      <?php if ($req_heb->have_posts()): ?>
      <?php while ($req_heb->have_posts()): $req_heb->the_post(); ?>
      <div class="config">
        <h4><i><?php the_post_thumbnail('thumbnail'); ?></i><?php the_title(); ?><span><?php get_post_custom_values(); ?></span></h4>
        <p><?php the_content(); ?></p>
      </div>
      <?php endwhile; ?>
      <?php
       else : echo "pas de resultat";

       endif;
      ?>
      <!-- <div class="config">
        <h4><i class="fas fa-user"></i>Serveur Dédié <span>39€ / mois</span></h4>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
      </div>
      <div class="config">
        <h4><i class="fas fa-cloud"></i>Service cloud <span>49€ / mois</span></h4>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
      </div> -->
     </section>
   </main>
   <?php get_footer(); ?>
</body>
</html>
