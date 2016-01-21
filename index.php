<?php get_header(); ?>

<div <?php post_class('clearfix'); ?> >
	<div id="content-inner" role="main">
	
				<section class="page-content page-sidebar sidebar-content clearfix">
					<div class="page-sidebar-inner clearfix">
						<?php get_template_part('partials/only-text-sidebar'); ?>
						<div class="page-sidebar-article not-found">
							<h1>Oh Dear, We Can’t Find The Page You’re Looking For (404)</h1>
							<p>It must be lost. Maybe it’s lost in the woods. Oops. We’re sorry, why not go back to our 
								<a href="/" title="Home">Home Page</a></p>
						</div>
				    </div>
				</section> <!-- end article section -->

			

	</div><!-- .content-inner -->
</div><!-- .content -->


			
<?php get_footer(); ?>