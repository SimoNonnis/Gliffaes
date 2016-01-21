
	<?php 
		$image = get_field('promo_img');
 	?>

	

	<?php if ( is_page('15') || $post->post_parent=="15" ) : ?>
		<!-- Wedding Pages -->
		<div class="sidebar-box border-radius">
			<a href="<?php the_field('promo_link'); ?>" class="border-radius sepia" target="_blank"> <!-- Wedding Pages  -->
				<img src="<?php echo $image['sizes']['ignite-thumb-210']; ?>" alt="<?php echo $image['alt']; ?>" class="border-radius" />
				<p class="sidebar-box-title b-border-radius"><?php the_field('promo_title'); ?></p>
			</a>
	</div>
	<?php else : ?>
		<div class="sidebar-box border-radius">
			<a href="<?php the_field('promo_link'); ?>" class="border-radius sepia">
				<img src="<?php echo $image['sizes']['ignite-thumb-210']; ?>" alt="<?php echo $image['alt']; ?>" class="border-radius" />
				<p class="sidebar-box-title b-border-radius"><?php the_field('promo_title'); ?></p>
			</a>
		</div>
	<?php endif; ?>
								