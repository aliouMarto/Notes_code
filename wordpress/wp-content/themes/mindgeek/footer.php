<?php $arg_fond = array(
       'post_type' => 'fond',
       'posts_per_page' =>  1,
      );

      $req_fond = new WP_Query($arg_fond);
    ?>
<footer>
     <nav>
      <ul>
        <li><h4><a href="">Accueil</a></h4></li>
        <li><h4><a href="">Serveur Mutualisé</a></h4></li>
        <li><h4><a href="">Serveur Dédié</a></h4></li>
        <li><h4><a href="">Solution "cloud"</a></h4></li>
        <li><h4><a href="">Contact</a></h4></li>
        <li><h4><a href="">Se connecter</a></h4></li>
      </ul>
      <img src="img/index.jpeg" alt="logo footer">
     </nav>
     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

     <div class="fond_contain">
      <?php if ($req_fond->have_posts()): ?>
      <?php while ($req_fond->have_posts()): $req_fond->the_post(); 
       $thumbnail_html= wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'front-slider');
       $thumbnail_src=$thumbnail_html['0'];
      ?>
      <div class="fond">
        <img class="" src="<?php echo $thumbnail_src; ?>" alt="First slide">
        <p><?php the_content(); ?></p>
      </div>
      <?php endwhile; ?>
      <?php
       else : echo "pas de resultat";

       endif;
      ?>
       
     </div>
   </footer>
   