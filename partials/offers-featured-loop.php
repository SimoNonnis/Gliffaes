<?php //Featured Loop
$wp_query = new WP_Query(array( 'posts_per_page' => 8,'cat' => 119));
while ($wp_query->have_posts()) : $wp_query->the_post();
?>

	<article class="clearfix post post-<?php the_ID(); ?> featured-offer border-radius" role="article" itemscope itemtype="http://schema.org/BlogPosting">
		
		
		<a class="link-to-post featured-offer__link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
			<span class="featured-offer__img"><?php the_post_thumbnail('ignite-thumb-400'); ?></span>
		</a>
		<div class="post_inner featured-offer__inner">
			<header class="post_header">
				<a class="link-to-post" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
					<h1 class="post_title featured-offer__title" itemprop="headline"><?php the_title(); ?></h1>
				</a>
			</header>
			<section class="post_content" itemprop="articleBody">
				<?php the_excerpt(); ?>
			</section>
		</div>
		<div class="featured-offer__buttonGroup">
			<a href="<?php the_permalink(); ?>" class="border-radius">Find Out More</a>
			<a href="<?php the_field('book_this_offer_link'); ?>" class="border-radius" target="_blank">Book This Offer</a>
		</div>
		
		
	</article>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>