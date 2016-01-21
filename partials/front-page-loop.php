
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<div class="page-article">
							<div class="inner-page-article page-text">
						<?php the_content(); ?>
							</div>
						</div>
						<?php endwhile; // end of the loop. ?>
						<?php endif; ?>