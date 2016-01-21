

        <?php 
			$wp_query = new WP_Query(array( 'posts_per_page' => 3,'cat' => 111));
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
        <?php wp_reset_postdata(); ?>