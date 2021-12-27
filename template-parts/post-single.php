<?php

/**
 * Template part for displaying posts single
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NoonPost
 */
?>
<?php if (have_posts()) :
   while (have_posts()) : the_post();
?>
      <section class="section pt-55 ">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-8 mb-20">
                  <!--Post-single-->
                  <div class="post-single">
                     <div class="post-single-image">
                        <?php the_post_thumbnail(); ?>
                     </div>
                     <div class="post-single-content">
                        <?php categories_list(); ?>
                        <h4><?php the_title(); ?></h4>
                        <div class="post-single-info">
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
                              <li class="dot"></li>
                              <li><?php echo get_comments_number(get_the_ID()); ?></li>
                           </ul>
                        </div>
                     </div>

                     <div class="post-single-body">
                        <?php the_content(); ?>
                     </div>

                     <div class="post-single-footer">
                        <div class="tags">
                           <?php tags_list(); ?>
                        </div>
                        <div class="social-media">
                           <ul class="list-inline">
                              <li>
                                 <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank" class="color-facebook">
                                    <i class="fab fa-facebook"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title() ?>&hashtags=simplesharebuttons" target="_blank" class="color-twitter">
                                    <i class="fab fa-twitter"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>" target="_blank" class="color-twitter">
                                    <i class="fab fa-linkedin-in"></i>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <!--/-->

                  <!--next & previous-posts-->
                  <div class="row">

                     <?php
                     $prevPost = get_previous_post(true);
                     $nextPost = get_next_post(true);
                     if ($prevPost) :
                     ?>
                        <div class="col-md-6">
                           <div class="widget">
                              <div class="widget-next-post">
                                 <div class="small-post">
                                    <div class="image">
                                       <?php if ($prevPost) {
                                          $prevthumbnail = get_the_post_thumbnail($prevPost->ID);
                                          previous_post_link('%link', "$prevthumbnail", TRUE);
                                       } ?>
                                    </div>
                                    <div class="content">
                                       <div class="link">
                                          <?php if ($prevPost) {
                                             previous_post_link('%link', "<i class='arrow_left'></i>Preview post");
                                          } ?>
                                       </div>
                                       <?php if ($prevPost) {
                                          previous_post_link('%link', '%title');
                                       } ?>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- nextpost -->
                     <?php endif;
                     if ($nextPost) : ?>
                        <div class="col-md-6">
                           <div class="widget">
                              <div class="widget-previous-post">
                                 <div class="small-post">
                                    <div class="image">
                                       <?php if ($nextPost) {
                                          $nextthumbnail = get_the_post_thumbnail($nextPost->ID);
                                          next_post_link('%link', "$nextthumbnail", TRUE);
                                       } ?>
                                    </div>
                                    <div class="content">
                                       <div class="link">
                                          <?php if ($nextPost) {
                                             next_post_link('%link', "Next post<i class='arrow_right'></i>");
                                          } ?>
                                       </div>
                                       <?php if ($nextPost) {
                                          next_post_link('%link', '%title');
                                       } ?>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     <?php endif; ?>
                  </div>
                  <!--/-->

                  <!--widget-comments-->
                  <div class="widget mb-50 widget-form">
                     <?php
                     if ((is_single() || is_page()) && (comments_open() || get_comments_number()) && !post_password_required()) {
                        comments_template();
                     }
                     ?>
                  </div>
               </div>
               <div class="col-lg-4 max-width">
                  <?php get_sidebar(); ?>
               </div>
            </div>
         </div>
      </section>
<?php endwhile;
else :
   get_template_part('template-parts/content', 'none');
endif;
?>