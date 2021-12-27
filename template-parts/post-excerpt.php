<?php

/**
 * Template part for displaying posts excerpt
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NoonPost
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   <?php
   if (have_posts()) :
      while (have_posts()) : the_post(); ?>

         <div class="card">
            <div class="post-card">
               <div class="post-card-image">
                  <a href="<?php the_permalink(); ?>">
                     <?php the_post_thumbnail(); ?>
                  </a>
               </div>
               <div class="post-card-content">
                  <?php categories_list(); ?>
                  <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h5>
                  <?php the_excerpt(); ?>
                  <div class="post-card-info">
                     <ul class="list-inline">
                        <li>
                           <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                              <?php echo get_avatar(get_the_author_meta('ID'), 40); ?>
                           </a>
                        </li>
                        <li>
                           <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php echo get_the_author_meta('display_name') ?></a>
                        </li>
                        <li class="dot"></li>
                        <li><?php the_time('F j, Y'); ?></li>
                     </ul>
                  </div>
               </div>
            </div>
            <!--/-->
         </div>

   <?php endwhile;
   else :
      get_template_part('template-parts/content', 'none');
   endif;
   ?>
</article>