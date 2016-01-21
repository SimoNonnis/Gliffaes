<?php get_header(); ?>

<div <?php post_class('clearfix'); ?> >
	<div id="content-inner" role="main">

			    <?php get_template_part('partials/slider'); ?>
				
				
				<section class="page-content clearfix">
					<div class="page-content-inner clearfix">
						<?php get_template_part('partials/front-page-loop'); ?>
						
						<div class="latest-news latest">
						<div class="inner-latest-news clearfix">
						<div class="inner-latest-news-container">

							<h2>Latest News</h2>
		
						<?php 
							$wp_query = new WP_Query(array( 'posts_per_page' => 1));
							while ($wp_query->have_posts()) : $wp_query->the_post();
						?>
							<article class="clearfix post post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">
								<a class="link-to-post" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
            						<?php the_post_thumbnail('ignite-thumb-210'); ?>
            					</a>
            				<div>
                				<header class="post_header">
                					<a class="link-to-post" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                    					<h1 class="post_title" itemprop="headline"><?php the_title(); ?></h1>
                    				</a>
                    				<span class="entry-date"><?php echo get_the_date(); ?></span>
                				</header>
                				<section class="post_content" itemprop="articleBody">
                    				<?php the_excerpt(); ?>
                				</section>
            				</div>
        					</article>
        
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



