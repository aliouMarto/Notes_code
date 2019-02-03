<!DOCTYPE html>
<html>
<head>
  <title>getart frappe</title>
  <?php wp_head(); ?>
</head>
<body>
  <header>
    <div class="logo">
       <img src="<?= get_template_directory_uri();?>/logo.png">
    </div><!--
     --><nav>
       <ul>
         <li><a href="">Accueil</a></li>
         <li><a href="">Articles</a></li>
         <li><a href="">Accueil</a></li>
         <li><a href="">Articles</a></li>
       </ul>
    </nav>
  </header>
  <main>
    <section>
    <?php
    $posts = get_field('rangement');

    if($posts): 
    ?>
    <?php 
     foreach( $posts as $poste):
     setup_postdata($poste); 
    ?>

    <article>
        <p><?php the_title(); ?></p>
        <?php the_post_thumbnail('thumbnail');?>
        <p><?php the_content(); ?></p>
        <a href="<?php the_permalink(); ?>">Victory</a>
    </article>

  <?php endforeach; ?>

<?php 
    wp_reset_postdata();
    else: ; 

?>
   <?php if (have_posts()): ?> 
     <?php while (have_posts()): the_post(); ?>
      <article>
        <p><?php the_title(); ?></p>
        <?php the_post_thumbnail('thumbnail');?>
        <p><?php the_content(); ?></p>
        <a href="<?php the_permalink(); ?>">Victory</a>
      </article>
      <?php endwhile; ?>
      <?php
      else : echo "pas de resultat";

      endif;
     ?>
     <?php

      endif;
     ?>
    </section>
  </main>

  <footer>
    <p>FOOTER</p>
  </footer>
</body>
</html>
