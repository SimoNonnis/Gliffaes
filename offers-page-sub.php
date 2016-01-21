<?php 

/*Template Name: Offers Sub Categories*/

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


								




								




								<?php //Featured
								if ( is_page( 3573 ) ) { ?>
									<?php get_template_part('partials/offers-featured-loop'); ?>
									


								<?php //Spring
								} elseif (is_page( 3574 )) { ?>
									
									<?php //Spring Offers loop
										$wp_query = new WP_Query(array( 'posts_per_page' => 8,'cat' => 120));
										while ($wp_query->have_posts()) : $wp_query->the_post();
									?>

										<?php get_template_part('partials/offers-offersloop'); ?>

									<?php endwhile; ?>
									<?php wp_reset_postdata(); ?>

								
								<?php //Summer
								} elseif (is_page( 3575 )) { ?>
									
									<?php //Summer Offers loop
										$wp_query = new WP_Query(array( 'posts_per_page' => 8,'cat' => 121));
										while ($wp_query->have_posts()) : $wp_query->the_post();
									?>

										<?php get_template_part('partials/offers-offersloop'); ?>

									<?php endwhile; ?>
									<?php wp_reset_postdata(); ?>


								<?php //Autumn
								} elseif (is_page( 3576 )) { ?>
									
									<?php //Autumn Offers loop
										$wp_query = new WP_Query(array( 'posts_per_page' => 8,'cat' => 122));
										while ($wp_query->have_posts()) : $wp_query->the_post();
									?>

										<?php get_template_part('partials/offers-offersloop'); ?>

									<?php endwhile; ?>
									<?php wp_reset_postdata(); ?>

								
								<?php //Winter
								} elseif (is_page( 3577 )) { ?>
									
									<?php //Winter Offers loop
										$wp_query = new WP_Query(array( 'posts_per_page' => 8,'cat' => 123));
										while ($wp_query->have_posts()) : $wp_query->the_post();
									?>

										<?php get_template_part('partials/offers-offersloop'); ?>

									<?php endwhile; ?>
									<?php wp_reset_postdata(); ?>

								<?php } else { ?>
									
									<article class="clearfix post n-offer" role="article" itemscope itemtype="http://schema.org/BlogPosting">
										<p>Ooops! You need to contact Ignite to add this!...easy job...;)</p>
									</article>

								<?php } ?>

								
								



								
								

							



							

							</div>
						</div>
							
						</div>
				  </div>
				</section> <!-- end article section -->

			

	</div><!-- .content-inner -->
</div><!-- .content -->

<?php get_footer(); ?>