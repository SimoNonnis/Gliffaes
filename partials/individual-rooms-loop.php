<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="sidebar-page-article">
        <div class="inner-sidebar-page-article page-text">
            <?php the_content(); ?>


            <section class="individual-rooms clearfix">
            		<?php if(get_field('rooms')): ?>
 						<?php while(has_sub_field('rooms')): 
 							$image = get_sub_field('single-room-img');
 						?>
                        <article>
                        <div class="single-r-inner">
 						
                        <header>
            				<a class="pop" href="<?php echo $image['sizes']['large']; ?>">  
                                <img src="<?php echo $image['sizes']['ignite-thumb-400-110']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <i class="icon-spyglass"></i>
                            </a>
                        </header>
                       
                        <h2><?php the_sub_field('single-room-title'); ?></h2>
            			<div id="single-r-text">
            				<?php the_sub_field('single-room-content'); ?>
						</div>

                        </div>
                        </article>
 						<?php endwhile; ?>
 					<?php endif; ?>
			</section	


		</div>
    </div>
<?php endwhile; ?>
<?php endif; ?>




 
   
    







