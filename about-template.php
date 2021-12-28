<?php

/**
 * Template Name: About Template
 */
get_header();

$options = get_option('noonpost_options');
$about_content = $options['about_content'];
?>


<!--about-us-->
<section class="section pt-50">
   <div class="container-fluid">
      <div class="row ">
         <div class="col-lg-12">
            <div class="section-title">
               <h5><?php the_title(); ?></h5>
            </div>
         </div>
      </div>

      <div class="row ">
         <div class="col-lg-8 mt-30">
            <div class="about-us">
               <div class="about-us-image">
                  <?php
                  if (has_post_thumbnail()) :
                     the_post_thumbnail();
                  else :
                  ?>
                     <img src="<?php echo get_template_directory_uri() ?>/assets/img/about-us.jpg" alt="">
                  <?php endif; ?>
               </div>
               <!-- about content -->
               <?php echo $about_content; ?>
            </div>
         </div>
         <div class="col-lg-4 max-width">
            <?php get_sidebar(); ?>
         </div>
      </div>
   </div>
</section>

<?php
get_footer();
