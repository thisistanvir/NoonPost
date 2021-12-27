<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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

<?php
get_footer();
