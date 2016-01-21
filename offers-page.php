<?php 

/*Template Name: Offers Page*/

get_header(); ?>

<div <?php post_class('clearfix'); ?> >
	<div id="content-inner" role="main">

				<?php get_template_part('partials/slider'); ?>
	
				<section class="page-content page-sidebar clearfix" id="page-sidebar">
					<div class="page-sidebar-inner clearfix">
						
							<?php get_template_part('partials/offers-sidebar'); ?>

						<div class="page-sidebar-article">
							
							<?php get_template_part('partials/only-text-loop'); ?>


						<div class="sidebar-page-article">
							<div class="inner-sidebar-page-article">

								
								<?php get_template_part('partials/offers-featured-loop'); ?>



								<?php //Offers Loop
								$wp_query = new WP_Query(array( 'posts_per_page' => 8,'cat' => 110, 'category__not_in' => 119 ));
								while ($wp_query->have_posts()) : $wp_query->the_post();
								?>

									<?php get_template_part('partials/offers-offersloop'); ?>

								<?php endwhile; ?>
								<?php wp_reset_postdata(); ?>


							
							</div>
						</div>
							
						</div>
				  </div>
				</section> <!-- end article section -->

			

	</div><!-- .content-inner -->
</div><!-- .content -->

<?php get_footer(); ?>