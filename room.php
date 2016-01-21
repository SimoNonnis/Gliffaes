<?php 

/*Template Name: Room*/

get_header(); ?>

<div <?php post_class('clearfix'); ?> >
	<div id="content-inner" role="main">
	
				
				<section class="page-content page-sidebar clearfix" id="page-sidebar">
					<div class="page-sidebar-inner clearfix">
						<?php get_template_part('partials/sidebar'); ?>
						<div class="page-sidebar-article">
							<?php get_template_part('partials/loop'); ?>
						</div>
				    </div>
				</section> <!-- end article section -->

			

	</div><!-- .content-inner -->
</div><!-- .content -->

<?php get_footer(); ?>