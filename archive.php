<?php get_header(); ?>

<div <?php post_class('clearfix'); ?> >
	<div id="content-inner" role="main">
	
				<section class="page-content page-sidebar sidebar-content clearfix">
					<div class="page-sidebar-inner clearfix">
						<?php get_template_part('partials/blog-sidebar'); ?>
						<div class="page-sidebar-article">
						<div class="sidebar-page-article">
							<div class="inner-sidebar-page-article">
							

							<h1>Archive <?php the_time('Y'); ?></h1>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<article class="clearfix post post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">
                <a class="link-to-post" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                    <?php the_post_thumbnail('ignite-thumb-210'); ?>
                </a>
                <div class="post_inner">
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
								<div class="navigation clearfix">
									<?php wp_pagenavi(); ?>
								</div>
							<?php endif; ?>

							</div>
						</div>
						</div>
				    </div>
				</section> <!-- end article section -->

			

	</div><!-- .content-inner -->
</div><!-- .content -->

<?php get_footer(); ?>