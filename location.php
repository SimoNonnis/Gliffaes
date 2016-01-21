<?php 

/*Template Name: Location Page*/

get_header(); ?>

<div <?php post_class('clearfix'); ?> >
	<div id="content-inner" role="main">
	
	<?php get_template_part('partials/slider'); ?>
				
				
				<section class="page-content page-sidebar clearfix" id="page-sidebar">
					<div class="page-sidebar-inner clearfix">
						<?php get_template_part('partials/location-sidebar'); ?>
						<div class="page-sidebar-article">
							<?php get_template_part('partials/location-loop'); ?>
						</div>
						
				    </div>
				</section> <!-- end article section -->

			

	</div><!-- .content-inner -->
</div><!-- .content -->

<?php get_footer(); ?>