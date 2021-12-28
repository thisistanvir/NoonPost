<?php if (!defined('ABSPATH')) {
   die;
} // Cannot access directly.

/**
 * Template part for displaying a Theme Options
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NoonPost
 */

// Control core classes for avoid errors
if (class_exists('CSF')) {

   //
   // Set a unique slug-like ID
   $prefix = 'noonpost_options';

   //
   // Create options
   CSF::createOptions($prefix, array(
      'menu_title'      => __('Theme Options', 'noonpost'),
      'menu_type'       => 'submenu',
      'menu_parent'     => 'themes.php',
      'menu_slug'       => 'noonpost-theme-options',
      'framework_title' => 'NoonPost Theme <small>by iTanvir</small>',
   ));


   // ----------------------------------------
   // Social Options
   // ----------------------------------------
   CSF::createSection($prefix, array(
      'id'    => 'social_links',
      'title' => __('Social', 'noonpost'),
      'icon'  => 'fas fa-share-alt',
   )); // end: Social Option
   CSF::createSection($prefix, array(
      'parent' => 'social_links',
      'title'  => __('Social Links', 'noonpost'),
      'icon'   => 'fas fa-arrow-circle-right',

      // begin: Fields
      'fields' => array(

         // begin: Social group
         array(
            'id'           => 'socials',
            'type'         => 'group',
            'title'        => __('Social Links', 'noonpost'),
            'button_title' => __('Add New Link', 'noonpost'),
            'subtitle'     => __('Add New Social Link', 'noonpost'),
            'fields'       => array(
               array(
                  'id'    => 'social_text',
                  'type'  => 'text',
                  'title' => __('Social Text', 'noonpost'),
               ),
               array(
                  'id'    => 'link',
                  'type'  => 'text',
                  'title' => __('Link', 'noonpost'),
               ),
               array(
                  'id'    => 'icon',
                  'type'  => 'icon',
                  'title' => __('Link Icon', 'noonpost'),
               ),
               array(
                  'id'      => 'link_target',
                  'type'    => 'select',
                  'title'   => __('Link Target', 'noonpost'),
                  'default' => '_blank',
                  'options' => array(
                     '_self'  => __('Open in Same Tab', 'noonpost'),
                     '_blank' => __('Open in New Tab', 'noonpost'),
                  ),
               ),
            ),
            'default'      => array(
               array(
                  'social_text' => __('Facebook', 'noonpost'),
                  'link'        => '#',
                  'icon'        => 'fab fa-facebook-f',
               ),
               array(
                  'social_text' => __('Instagram', 'noonpost'),
                  'link'        => '#',
                  'icon'        => 'fab fa-instagram',
               ),
               array(
                  'social_text' => __('Twitter', 'noonpost'),
                  'link'        => '#',
                  'icon'        => 'fab fa-twitter',
               ),
               array(
                  'social_text' => __('Linkedin', 'noonpost'),
                  'link'        => '#',
                  'icon'        => 'fab fa-linkedin-in',
               ),
               array(
                  'social_text' => __('Google+', 'noonpost'),
                  'link'        => '#',
                  'icon'        => 'fab fa-google-plus-g',
               ),
            ),
         ), // end: Social Group
      ), // end: Fields
   )); // end: Social Options


   // ----------------------------------------
   // News Letter Options
   // ----------------------------------------
   CSF::createSection($prefix, array(
      'id'    => 'news_letter',
      'title' => __('News Letter', 'noonpost'),
      'icon'  => 'fas fa-newspaper',
   ));
   CSF::createSection($prefix, array(
      'parent' => 'news_letter',
      'title'  => __('News Letter Content', 'noonpost'),
      'icon'   => 'fas fa-arrow-circle-right',

      // begin: Fields
      'fields' => array(

         // begin: NewsLetter Enabling Area
         array(
            'id'       => 'enable_newsletter',
            'type'     => 'switcher',
            'title'    => __('Enable NewsLetter?', 'noonpost'),
            'label'    => __('You want to Enable this section?', 'noonpost'),
            'subtitle' => __('If you want to enable this area, switch ON', 'noonpost'),
            'default'  => true,
         ), // end: NewsLetter Enabling Area

         // title
         array(
            'id'      => 'newsletter_title',
            'type'    => 'text',
            'title'   => __('NewsLetter Title', 'noonpost'),
            'desc'    => __('Write Section Title Here.', 'noonpost'),
            'default' => __('Subscribe to our Newslatter', 'noonpost'),
            'dependency'   => array('enable_newsletter', '==', 'true')
         ),
         array(
            'id'      => 'newsletter_subtitle',
            'type'    => 'text',
            'title'   => __('NewsLetter Subtitle', 'noonpost'),
            'desc'    => __('Write Section Subtitle Here.', 'noonpost'),
            'default' => __('Sign up for free and be the first to get notified about new posts.', 'noonpost'),
            'dependency'   => array('enable_newsletter', '==', 'true')
         ),
         array(
            'id'      => 'subscribe_shortcode',
            'type'    => 'text',
            'title'   => __('Subscribe Shortcode', 'noonpost'),
            'desc'    => __('Write/Paste Shortcode Here.', 'noonpost'),
            'default' => __('[contact-form-7 id="81" title="Subscribe Form"]', 'noonpost'),
            'dependency'   => array('enable_newsletter', '==', 'true')
         ),

      ), // end: Fields
   )); // end: News Letter Options


   // ----------------------------------------
   // Copyright Text
   // ----------------------------------------
   CSF::createSection($prefix, array(
      'id'    => 'copyright_text',
      'title' => __('Copyright Area', 'noonpost'),
      'icon'  => 'far fa-copyright',
   ));
   CSF::createSection($prefix, array(
      'parent' => 'copyright_text',
      'title'  => __('Copyright Text', 'noonpost'),
      'icon'   => 'fas fa-arrow-circle-right',

      // begin: Fields
      'fields' => array(

         // begin: NewsLetter Enabling Area
         array(
            'id'       => 'copyright',
            'type'     => 'wp_editor',
            'title'    => __('Copyright Text', 'noonpost'),
            'label'    => __('Type copyright text here.', 'noonpost'),
            'default'  => __('© Copyright 2021 iTanvir, All rights reserved.', 'noonpost')
         ), // end: NewsLetter Enabling Area

      ), // end: Fields
   )); // end: Copyright Text



   // ----------------------------------------
   // About Options
   // ----------------------------------------
   CSF::createSection($prefix, array(
      'id'    => 'about_area',
      'title' => __('About Area', 'noonpost'),
      'icon'  => 'fas fa-eject',
   ));
   CSF::createSection($prefix, array(
      'parent' => 'about_area',
      'title'  => __('About Content', 'noonpost'),
      'icon'   => 'fas fa-arrow-circle-right',

      // begin: Fields
      'fields' => array(

         array(
            'id'      => 'about_content',
            'type'    => 'wp_editor',
            'title'   => __('About Content', 'noonpost'),
            'desc'    => __('Type text Here.', 'noonpost'),
            'default' => __('<div class="description">
            <h6>Thank you for checking out our blog website.</h6>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus facere, nemo dignissimos, in labore nostrum provident
               perferendis minima accusamus aliquam reprehenderit autem
            </p>
            <p>
               praesentium sunt beatae libero non totam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus facere, nemo dignissimos, in labore nostrum provident
               perferendis minima accusamus aliquam reprehenderit autem praesentium sunt beatae libero non totam.
            </p>
            <div class="quote">
                                <div>
                                    <i class="icon_quotations_alt"></i>
                                </div>
                                <p>
                                     "My website’s kind of fun for me. I get to do drawings on that. 
                                     It’s kind of fun.”
                                </p>
                                <small>Jeff Bridges.</small>
                            </div>
            <p>
               Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur malesuada malesuada metus ut placerat. Cras a porttitor
               quam, eget ornare sapien. In sit amet vulputate metus. Nullam eget rutrum nisl. Sed tincidunt lorem sed maximus interdum.
               Interdum malesuada fames ante ipsum primis in faucibus. Aenean scelerisque efficitur mauris nec tincidunt. cursus leo ultricies
               magna faucibus id.
            </p>
         </div>', 'noonpost'),
         ),

      ), // end: Fields
   )); // end: About Options



   // ----------------------------------------
   // Contact Options
   // ----------------------------------------
   CSF::createSection($prefix, array(
      'id'    => 'contact_area',
      'title' => __('Contact Area', 'noonpost'),
      'icon'  => 'fas fa-id-card',
   ));
   CSF::createSection($prefix, array(
      'parent' => 'contact_area',
      'title'  => __('Contact Content', 'noonpost'),
      'icon'   => 'fas fa-arrow-circle-right',

      // begin: Fields
      'fields' => array(

         // Contact Map
         array(
            'id'       => 'contact_map',
            'type'     => 'map',
            'title'    => __('Contact Map', 'noonpost'),
            'subtitle' => __('Search and save the location.', 'noonpost'),
            'default'  => array(
               'latitude'  => '23.768518049999997',
               'longitude' => '90.42564111722365',
               'zoom'      => '16',
            ),
         ),
         array(
            'id'      => 'contact_shortcode',
            'type'    => 'text',
            'title'   => __('Contact Form Shortcode', 'noonpost'),
            'desc'    => __('Write/Paste Shortcode Here.', 'noonpost'),
            'default' => __('[contact-form-7 id="78" title="Contact Form"]', 'noonpost'),
         ),

      ), // end: Fields
   )); // end: Contact Options
}
