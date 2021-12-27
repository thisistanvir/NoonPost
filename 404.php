<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package NoonPost
 */

get_header();
?>

<!--Page404-->
<section class="section pt-55 mb-50">
	<div class="container-fluid">
		<div class="page404  widget">
			<div class="image">
				<img src="assets/img/404.html" alt="">
			</div>
			<div class="content">
				<h1><?php esc_html_e('404', 'noonpost') ?></h1>
				<h3><?php esc_html_e('Page Not Found.', 'noonpost') ?></h3>
				<p><?php esc_html_e('It looks like nothing was found at this location. ', 'noonpost') ?></p>
				<a href="<?php echo get_home_url(); ?>" class="btn-custom"><?php esc_html_e('Go back to Home', 'noonpost') ?></a>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
