
<?php get_template_part('partials/google-maps'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="sidebar-page-article">
							<div class="inner-sidebar-page-article page-text">
						<?php the_content(); ?>
							</div>
						</div>
						<?php endwhile; // end of the loop. ?>
						<?php endif; ?>

