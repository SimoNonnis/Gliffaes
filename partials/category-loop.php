<div class="sidebar-page-article">
	<div class="inner-sidebar-page-article">

<?php if ( $paged < 2 ) : ?>


		<?php if (is_category('11')) : ?>
			<h1>News</h1>
		<?php elseif (is_category('110')) : ?>
			<h1>Offers</h1>
		<?php elseif (is_category('111')) : ?>
			<h1>Press & Reviews</h1>
		<?php elseif (is_category('112')) : ?>
			<h1>Food & Drink</h1>
		<?php elseif (is_category('113')) : ?>
			<h1>Events</h1>
		<?php elseif (is_category('114')) : ?>
			<h1>Fishing</h1>
		<?php elseif (is_category('115')) : ?>
			<h1>Walks & Bike Rides</h1>
		<?php elseif (is_category('116')) : ?>
			<h1>Days Out</h1>
		<?php elseif (is_category('117')) : ?>
			<h1>Expired Offers</h1>
		<?php else : ?>
			<h1>Blog</h1>
		<?php endif; ?>

		<?php //Loop1
		$i = 1;
		$current =  get_query_var('cat');
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$wp_query = new WP_Query(array( 'category__in' => $current,'posts_per_page' => 3,'paged' => $paged ));

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

		<div class="navigation clearfix">
			<?php wp_pagenavi(); ?>
		</div>

		<?php wp_reset_postdata(); ?>

<?php else : ?>

		<?php //Loop2
		$current =  get_query_var('cat');
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$wp_query = new WP_Query(array( 'category__in' => $current,'posts_per_page' => 3,'paged' => $paged ));

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

		<?php wp_reset_postdata(); ?>








<?php endif; ?>

	</div>
</div>