
<section class="slider clearfix" style="position:relative">

  <?php if ( !(is_page('15') || $post->post_parent=="15") ) : ?>
    
    <!-- Promo Badge On Slider -->
    <a class="seasonal-offer-banner-link" href="http://www.gliffaeshotel.com/summer-offer/">
      <img style="width:80%" src="http://www.gliffaeshotel.com/dev/wp-content/uploads/2015/04/summer-badge.png" alt="">
    </a>
    <!-- End Promo -->

  <?php endif ; ?>



  <div class="flexslider clearfix">
    <ul class="slides clearfix">
      <?php while(has_sub_field('slider')) { ?>
        <li>
          <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('alt'); ?>"/>
        </li>
       <?php } ?>
    </ul>
  </div>

</section>
