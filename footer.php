<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NoonPost
 */

?>

<!--newslettre-->
<section class="newslettre">
	<div class="container-fluid">
		<div class="newslettre-width text-center">
			<div class="newslettre-info">
				<h5><?php esc_html_e('Subscribe to our Newslatter') ?></h5>
				<p> <?php esc_html_e('Sign up for free and be the first to get notified about new posts.') ?> </p>
			</div>
			<form action="#" class="newslettre-form">
				<div class="form-flex">
					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="Your email adress" required="required">
					</div>
					<button class="submit-btn" type="submit"><?php esc_html_e('Subscribe'); ?>
					</button>
				</div>
			</form>
			<div class="social-icones">
				<ul class="list-inline">
					<li>
						<a href="#">
							<i class="fab fa-facebook-f"></i>Facebook</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-twitter"></i>Twitter </a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-instagram"></i>Instagram </a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-youtube"></i>Youtube</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<!--footer-->
<footer class="footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<?php
				if (is_dynamic_sidebar('copyright')) {
					dynamic_sidebar('copyright');
				}
				?>
				<div class="back">
					<a href="#" class="back-top">
						<i class="arrow_up"></i>
					</a>
				</div>
				</>
			</div>
		</div>
</footer>

<!--Search-form-->
<?php get_template_part('/template-parts/search-popup'); ?>
<!--/-->

<?php wp_footer(); ?>

</body>

</html>