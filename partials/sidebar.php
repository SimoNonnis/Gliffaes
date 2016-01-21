<div class="sidebar clearfix">


  <?php if ( is_page('15') || $post->post_parent=="15" ) : ?>
  
    <h3><a href="<?php echo esc_url( $permalink = get_permalink( 15 ) ); ?>"><?php echo get_the_title( 15 ); ?></a></h3>
    <?php ignite_weddings_sidebar(); // Defined in functions.php ?>

  <?php else : ?>

    <?php
    if($post->post_parent):
      $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&depth=1&echo=0&sort_column=menu_order&ID");
    else :
      $children = wp_list_pages("title_li=&child_of=".$post->ID."&depth=1&echo=0&sort_column=menu_order&ID");
    endif;

    if ($children) : ?>
    <h3><a href="<?php echo esc_url( get_permalink($post->post_parent)); ?>"><?php echo get_the_title($post->post_parent);?></a></h3>
      <ul class="sidebar-menu clearfix">
        <?php echo $children; ?>
      </ul>
    <?php endif; ?>

  <?php endif; ?>

  
  



  <?php 
    if( get_field('promo_img') && get_field('promo_title') && get_field('promo_link')): 
      get_template_part('partials/sidebar-box'); 
    endif; 
  ?>
  

</div>














