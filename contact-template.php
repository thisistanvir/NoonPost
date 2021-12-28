<?php

/**
 * Template Name: Contact Template
 */
get_header();

$options = get_option('noonpost_options');
$contact_map = $options['contact_map'];
$shortcode = $options['contact_shortcode'];
?>

<!--contact us-->
<section class="section pt-50">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="section-title">
               <h5><?php the_title(); ?></h5>
            </div>
         </div>
      </div>

      <div class="row mb-20">
         <div class="col-lg-8 mt-30">
            <div class="contact">
               <div class="google-map">
                  <iframe src="https://maps.google.com/maps?q=<?php echo $contact_map['latitude']; ?>,<?php echo $contact_map['longitude']; ?>&hl=es;z=<?php echo $contact_map['zoom']; ?>&amp;output=embed"></iframe>
               </div>
               <div class="widget-form contact_form" id="main_contact_form">
                  <?php echo do_shortcode($shortcode); ?>
               </div>
            </div>
         </div>
         <div class="col-lg-4 max-width">
            <?php get_sidebar(); ?>
         </div>
      </div>

   </div>
</section>
<!--footer-->
<?php
get_footer();
