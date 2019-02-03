 <?php 

    $args = array(
      'post_type'=> 'slider',
      'posts_per_page'=> -1,
      'orderby'=>'menu_order',
      'order'=> 'ASC'
    );

    $slider_query= new WP_Query($args);

    if($slider_query->have_posts()) :
   
  ?>

  
  
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
     <?php
     $indicator_index=0;
         while ($slider_query->have_posts()): $slider_query->the_post();
         echo '<li data-target="#carouselExampleIndicators" data-slide-to="'  .$indicator_index  .'" class="'.($indicator_index == 0 ? "active" : "").'"></li>';
     ?>
     <?php 
       $indicator_index++;
      endwhile; ?>
      <?php
      else : echo "pas de resultat";

      endif;
     ?>
    <!-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
  </ol>
  <?php rewind_posts(); ?>
  <div class="carousel-inner">
    <?php $active_test=true; 
    while ($slider_query->have_posts()): $slider_query->the_post();
      $thumbnail_html= wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'front-slider');
      $thumbnail_src=$thumbnail_html['0'];
       if($active_test) {
          $theclass=" active";
       }else{
          $theclass="";
       }
    ?>
    <div class="carousel-item <?php echo $theclass; ?>">
      <img class="d-block w-100" src="<?php echo $thumbnail_src; ?>" alt="First slide">
    </div>
    <?php $active_test=false; 
    endwhile; wp_reset_postdata(); ?>
    <!-- <div class="carousel-item">
      <img class="d-block w-100" src="<?= get_template_directory_uri();?>/img/2.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= get_template_directory_uri();?>/img/3.jpg" alt="First slide">
    </div> -->
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  