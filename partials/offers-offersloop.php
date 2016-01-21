

	<article class="clearfix post post-<?php the_ID(); ?> n-offer" role="article" itemscope itemtype="http://schema.org/BlogPosting">


		<a class="link-to-post n-offer__link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
			<span class="n-offer__img"><?php the_post_thumbnail('ignite-thumb-400'); ?></span>
			<p class="n-offer__title b-border-radius"><?php the_title(); ?></p>
		</a>
		<div class="post_inner n-offer__inner">
			<section class="post_content" itemprop="articleBody">
				<?php the_excerpt(); ?>
			</section>
		</div>

		
		<div class="n-offer__buttonGroup">
			<a href="<?php the_permalink(); ?>" class="border-radius">Find Out More</a>
			<a href="<?php the_field('book_this_offer_link'); ?>" class="border-radius" target="_blank">Book This Offer</a>
		</div>


	</article>

