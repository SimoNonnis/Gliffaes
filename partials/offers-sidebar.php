<div class="sidebar clearfix">

  <h3><a href="<?php echo esc_url( $permalink = get_permalink( 12 ) ); ?>"><?php echo get_the_title( 12 ); ?></a></h3>
  

  <?php ignite_offers_sidebar(); // Defined in functions.php ?>  
  
  
  <?php //Promo on Sidebar
  if( get_field('promo_img') && get_field('promo_title') && get_field('promo_link')): 
    get_template_part('partials/sidebar-box'); 
  endif; 
  ?>

</div>