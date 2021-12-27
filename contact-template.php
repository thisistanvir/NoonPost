<?php

/**
 * Template Name: Contact Template
 */
get_header();
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
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3104.5761533072873!2d-78.19644468515456!3d38.91080675375955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b5c5dc680d0b2b%3A0x1e9ff0b6bb7a2f87!2s1000%20Proctor%20Ln%2C%20Front%20Royal%2C%20VA%2022630%2C%20%C3%89tats-Unis!5e0!3m2!1sfr!2sma!4v1578068093888!5m2!1sfr!2sma" allowfullscreen="">
                  </iframe>
               </div>
               <div class="widget-form contact_form" id="main_contact_form">
                  <?php echo do_shortcode('[contact-form-7 id="78" title="Contact Form"]') ?>
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
