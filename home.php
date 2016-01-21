<?php get_header(); ?>

<div <?php post_class('clearfix'); ?> >
	<div id="content-inner" role="main">
	
				
				<section class="page-content page-sidebar sidebar-content clearfix">
					<div class="page-sidebar-inner clearfix">
						<?php get_template_part('partials/blog-sidebar'); ?>
						<div class="page-sidebar-article">
							<div class="sidebar-page-article">
  								<div class="inner-sidebar-page-article">

  								<?php global $wp_query, $paged; $paged = (get_query_var('paged')); if ($paged < 2) : ?>

    <h1 id="blog-h1">Blog</h1>
    <p>Keep up to date with our latest news, <a href="http://www.gliffaeshotel.com/blog/press-reviews/">read reviews</a> and
    find <a href="http://www.gliffaeshotel.com/blog/press-reviews/">local walks and bike rides in the area</a>
    </p>

    <?php //Loop1
    $i = 1;
    $temp = $wp_query; 
    $wp_query = null; 
    $wp_query = new WP_Query(array( 'posts_per_page' => 3,'paged' => $paged, 'category__not_in' => 110 ));

    while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>

    <?php if ($i == 1) { ?>
      <article class="featured clearfix post post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">
                <a class="link-to-post" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                    <?php the_post_thumbnail('ignite-thumb-400'); ?>
                </a>
                <div class="post_inner">
                    <header class="post_header">
                        <a class="link-to-post" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                            <h1 class="post_title" itemprop="headline"><?php the_title(); ?></h1>
                        </a>
                    </header>
                    <section class="post_content" itemprop="articleBody">
                        <?php the_excerpt(); ?>
                    </section>
                </div>
            </article>
        
      <?php } else { ?>
           
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

        <?php } ?>

    <?php $i++; ?>
    <?php endwhile; ?>

    

   

<?php  else : ?>

    <?php //Loop2
    

    while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>

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

     <?php 
    $wp_query = null; 
    $wp_query = $temp;
    wp_reset_postdata();  // Reset
    ?>

<?php endif; ?>

  								 

  								</div>
							</div>
						</div>
				    </div>
				</section> <!-- end article section -->

			

	</div><!-- .content-inner -->
</div><!-- .content -->

<?php get_footer(); ?>