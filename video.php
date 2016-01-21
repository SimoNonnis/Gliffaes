<?php 

/*Template Name: Video-Gallery*/

get_header(); ?>

<div <?php post_class('clearfix'); ?> >
	<div id="content-inner" role="main">
	
				<section class="page-content page-sidebar sidebar-content clearfix">
					<div class="page-sidebar-inner clearfix">
						<?php get_template_part('partials/gallery-sidebar'); ?>
						<div class="page-sidebar-article">
							<?php get_template_part('partials/only-text-loop'); ?>
							<?php get_template_part('partials/youtube'); ?>
						</div>
				    </div>
				</section> <!-- end article section -->

			

	</div><!-- .content-inner -->
</div><!-- .content -->

<?php get_footer(); ?>