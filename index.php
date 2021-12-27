<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NoonPost
 */

get_header();
?>

<!--mansory-layout-->
<section class="masonry-layout col2-layout mt-120">
	<div class="container-fluid">
		<div class="row">
			<div class="<?php if (is_active_sidebar('sidebar-1')) : ?>col-lg-8 <?php else : ?> col-lg-12 <?php endif; ?>mt--10 ">
				<!--cards-->
				<div class="card-columns">
					<?php
					get_template_part('/template-parts/post-excerpt');
					?>
				</div>



				<!--pagination-->
				<div class="pagination mt-30">
					<?php the_posts_pagination(
						[
							'screen_reader_text' => ' ',
							'prev_text' => '<span class="arrow_carrot-2left"></span>',
							'next_text' => '<span class="arrow_carrot-2right"></span>',
							'class' => ''
						]
					);
					?>
				</div>
			</div>
			<?php if (is_active_sidebar('sidebar-1')) : ?>
				<div class="col-lg-4 max-width">
					<?php get_sidebar(); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
<!--/-->

<?php get_footer() ?>