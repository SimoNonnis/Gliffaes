<?php 

/*Template Name: Slider, Sidebar, Content*/

get_header(); ?>

<div <?php post_class('clearfix'); ?> >
	<div id="content-inner" role="main">
	
	<?php get_template_part('partials/slider'); ?>
				
				
				<section class="page-content page-sidebar clearfix" id="page-sidebar">
					<div class="page-sidebar-inner clearfix">
						<?php get_template_part('partials/sidebar'); ?>
						<div class="page-sidebar-article">
							<?php if ($post->post_parent=="13") : ?>
								<?php if( get_field('menu-pdf') && get_field('menu-button-text')): ?>
									<?php get_template_part('partials/pdf-menu'); ?>
								<?php endif; ?>
								<?php if( get_field('menu-pdf2') && get_field('menu-button-text2')): ?>
									<?php get_template_part('partials/pdf-menu2'); ?>
								<?php endif; ?>
							<?php endif; ?>

							<?php get_template_part('partials/loop'); ?>

							<?php if (is_page('14') || $post->post_parent=="14" || is_page('13') || $post->post_parent=="13") : ?>
								<?php get_template_part('partials/get-in-touch'); ?>
							<?php elseif (is_page('15') || $post->post_parent=="15") : ?>
								<?php get_template_part('partials/view-wedding-gallery'); ?>
							<?php else : ?>
								<?php get_template_part('partials/availability'); ?>
							<?php endif; ?>

							<?php if (is_page('16') || $post->post_parent=="16") : ?>
								<?php get_template_part('partials/twitter'); ?>
							<?php endif; ?>
							
						<div class="latest-box">
							<div class="latest-box-inner">
								<div class="latest-box-content">

							<?php if (is_page('13') || $post->post_parent=="13") : ?>
								<?php get_template_part('partials/food-drink-posts'); ?>
							<?php elseif (is_page('14') || $post->post_parent=="14") : ?>
								<?php get_template_part('partials/events-posts'); ?>
							<?php elseif (is_page('16') || $post->post_parent=="16") : ?>
								<?php get_template_part('partials/fishing-posts'); ?>
							
							
							<?php endif; ?>

								</div>
							</div>
						</div>

						</div>
				    </div>
				</section> <!-- end article section -->

			

	</div><!-- .content-inner -->
</div><!-- .content -->

<?php get_footer(); ?>