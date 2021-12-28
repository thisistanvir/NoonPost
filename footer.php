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
$options = get_option('noonpost_options');
$socials = $options['socials'];
$enable_newsletter = $options['enable_newsletter'];
$shortcode = $options['subscribe_shortcode'];
?>

<?php if ($enable_newsletter == true) : ?>
	<!--newslettre-->
	<section class="newslettre">
		<div class="container-fluid">
			<div class="newslettre-width text-center">
				<div class="newslettre-info">
					<h5><?php echo esc_html__($options['newsletter_title'], 'noonpost'); ?></h5>
					<p> <?php echo esc_html__($options['newsletter_subtitle'], 'noonpost'); ?> </p>
				</div>
				<div class="newslettre-form">
					<?php echo do_shortcode($shortcode); ?>
				</div>
				<div class="social-icones">
					<ul class="list-inline">
						<?php
						if (!empty($socials)) :
							foreach ($socials as $social) :
						?>
								<li>
									<a href="<?php echo esc_url($social['link']); ?>" target="<?php echo esc_attr($social['link_target']); ?>">
										<i class="<?php echo esc_attr($social['icon']) ?>"></i><?php echo esc_html__($social['social_text']) ?></a>
								</li>
						<?php endforeach;
						endif; ?>

					</ul>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

<!--footer-->
<footer class="footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="copyright">
					<p><?php echo $options['copyright']; ?></p>
				</div>

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