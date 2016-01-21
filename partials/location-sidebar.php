<div class="sidebar clearfix">

  <h3>Easy to get to</h3>
  <ul class="sidebar-menu clearfix">
     <li><a href="#by-road">By Road</a></li>
     <li><a href="#by-rail">By Rail</a></li>
     <li><a href="#by-air">By Air</a></li>
  </ul>

  <?php if( get_field('promo_img') && get_field('promo_title') && get_field('promo_link')): ?>
    <?php get_template_part('partials/sidebar-box'); ?>
  <?php endif; ?>

  
  
</div>