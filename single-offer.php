<?php
/*
Template Name Posts: Single Offer
*/
?>

<?php get_header(); ?>

<div <?php post_class('clearfix'); ?> >
	<div id="content-inner" role="main">
	
		<section class="page-content page-sidebar sidebar-content clearfix">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="page-sidebar-inner page-text clearfix">

						<?php get_template_part('partials/offers-sidebar'); ?>

					<div class="page-sidebar-article">
						<article class="clearfix post post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">
                
                			<div class="post_inner">
                    			<header class="post_header">
            						<h1 class="post_title" itemprop="headline"><?php the_title(); ?></h1>
                   				</header>
                   				<div class="single-post-big-img"><?php the_post_thumbnail('ignite-thumb-1700'); ?></div>
                    			<section class="post_content" itemprop="articleBody">
                        			<?php the_content(); ?>
                    			</section>
                			</div>

                		<?php get_template_part('partials/social-sharing'); ?>
                		
                		

										<div class="availab">
											<div class="availab-inner">
												<a  class="border-radius" target="_blank" href="<?php the_field('book_this_offer_link'); ?>"><span>Book This Offer</span><i class=" icon-calendar"></i></a>
											</div>
										</div>
                		

						<a href="<?php echo get_permalink( 12 ); ?>"><<  return to Offers</a>
                		

            			</article>
					</div>

				

			</div><!-- end page-sidebar-inner -->
			<?php endwhile; // end of the loop. ?>
				<?php endif; ?>
		</section><!-- end page-content -->

			

	</div><!-- .content-inner -->
</div><!-- .content -->




<?php get_footer(); ?>