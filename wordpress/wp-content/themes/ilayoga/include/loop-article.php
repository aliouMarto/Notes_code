<article class="clear">
                <a href="<?php the_permalink(); ?>"><h2 class="item-title"><?php the_title();?></h2></a>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', array('class' => 'left'));?></a>
               <p><?php the_excerpt(); ?></p>
   </article>
   