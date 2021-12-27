<?php

/**
 * The template for displaying the search popup
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NoonPost
 */

?>

<div class="search">
   <div class="container-fluid">
      <div class="search-width  text-center">
         <button type="button" class="close">
            <i class="icon_close"></i>
         </button>
         <form class="search-form">
            <input type="search" name="s" value="" placeholder="What are you looking for?">
            <button type="submit" class="search-btn"><?php esc_html_e('search') ?></button>
         </form>
      </div>
   </div>
</div>