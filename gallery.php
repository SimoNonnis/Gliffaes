<?php 
/*Template Name: Gallery Template*/
	get_header(); 
	$images = get_field('gallery'); 
?>

<div <?php post_class('clearfix'); ?> >
	<div id="content-inner" role="main">
	
				<section class="page-content page-sidebar sidebar-content clearfix">
					<div class="page-sidebar-inner clearfix">
						<?php get_template_part('partials/gallery-sidebar'); ?>
						<div class="page-sidebar-article">

							<div  class="gallery-content" role="main">

								<?php echo get_the_content();?>
								
                				<?php if( $images ): ?>
            						<div class="gallery">
                						<?php foreach( $images as $image ): ?>

                        					<a href="<?php echo $image['sizes']['large']; ?>" title="<?php echo $image['caption']; ?>" alt="<?php echo $image['alt']; ?>" >
                                	<img class="border-radius" src="<?php echo $image['sizes']['ignite-thumb-210']; ?>" alt="<?php echo $image['alt']; ?>" />
                            				</a>

                            			<?php endforeach; ?>
                					</div>
            					<?php endif; ?>
        					</div>
							
						<?php get_template_part('partials/availability'); ?>
						</div>
				    </div>
				</section> <!-- end article section -->

			

	</div><!-- .content-inner -->
</div><!-- .content -->

<?php get_footer(); ?>