<?php 

/*Template Name: Only-Text Page*/

get_header(); ?>

<div <?php post_class('clearfix'); ?> >
	<div id="content-inner" role="main">
	
				<section class="page-content page-sidebar sidebar-content clearfix">
					<div class="page-sidebar-inner clearfix">
						<?php get_template_part('partials/only-text-sidebar'); ?>
						<div class="page-sidebar-article">
							<?php get_template_part('partials/only-text-loop'); ?>


						<div class="sidebar-page-article">
							<div class="inner-sidebar-page-article">

							<?php if (is_page('12')) : ?>
								<?php get_template_part('partials/offers-posts'); ?>
								<?php get_template_part('partials/more-button-offers'); ?>
							<?php elseif (is_page('31')) : ?>
								<?php get_template_part('partials/press-reviews-posts'); ?>
								<?php get_template_part('partials/more-button-pressreview'); ?>
							<?php endif; ?>

							</div>
						</div>
							
						</div>
				    </div>
				</section> <!-- end article section -->

			

	</div><!-- .content-inner -->
</div><!-- .content -->

<?php get_footer(); ?>