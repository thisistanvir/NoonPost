<?php

/**
 * Template part for displaying tags
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NoonPost
 */


function tags_list()
{

   if ('post' === get_post_type()) {
      $tags_list = get_the_tag_list(' ', __(' ', 'noonpost'));

      if ($tags_list && !is_wp_error($tags_list)) {
         echo '<span class="tags-link">' . $tags_list . '</span>';
      }
   }
}
