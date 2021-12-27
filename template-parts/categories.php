<?php

/**
 * Template part for displaying categories
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NoonPost
 */

function categories_list()
{

   if ('post' === get_post_type()) {
      $categories_list = get_the_category_list(__(', ', 'noonpost'));

      if ($categories_list) {
         echo '<span class="categorie">' . $categories_list . '</span>';
      }
   }
}
