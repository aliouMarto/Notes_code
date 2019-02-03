<!DOCTYPE html>
<html lang="FR">
<head>
  <title>home</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body>
   <header>

      <nav>
          <div class="logo">
          <a href="#"><img src="<?= get_template_directory_uri();?>/img/logo.png"></a>
         </div>
          <!-- <li><h4><a href="mutuelle.html" class="vise"><i class="fas fa-server"></i>Serveur Mutualisé</a></h4></li>
          <li><h4><a href="dedie.html"><i class="fas fa-user"></i>Serveur Dédié</a></h4></li>
          <li><h4><a href="cloud.html"><i class="fas fa-cloud"></i>Solution "cloud"</a></h4></li>
          <li><h4><a href="contact.html"><i class="fas fa-envelope"></i>Contact</a></h4></li> -->
           <?php
          

           wp_nav_menu( array( 
           'items_wrap' => '%3$s',
           'theme_location' => 'top_menu',
           'container' => 'false',
           'menu_class' => 'false',
           'menu_id' => 'false',
           'before'  => '<h4>',
           'after' => '</h4>'
           ) 
           );

           ?>
      </nav>
   </header>