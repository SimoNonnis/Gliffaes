    <footer class="footer clearfix" role="contentinfo">
      <div class="footer-inner">
        
        <div class="footer-links-wrap clearfix">
          
          <div class="footer-add-mobile">
            <div class="footer-gmap-address">
              <div class="footer-gmap-address-inner">
              <a href="<?php echo get_permalink(18); ?>">
                <span class="centeringspan">
                  <i class="icon-location-compass"></i>
                  <span>Gliffaes Country House Hotel</span>
                  <span>Crickhowell Powys, NP8 1RH</span>
                </span>
              </a>
              </div>
            </div>
            <div class="footer-phone">
              <div class="footer-phone-inner">
              <a  href="tel://<?php the_field('phone_number', 'option'); ?>">
                <span class="centeringspan">
                  <i class="icon-mobile-phone"></i>
                  <span><?php the_field('phone_number', 'option'); ?></span>
                </span>
              </a>
              </div>
            </div>
          </div><!-- End Mobile Address Box-->

          <div class="footer-address-dktop clearfix">
            <div class="footer-address-dktop-inner">
              <p>Gliffaes Country House Hotel</p>
              <p>Crickhowell Powys</p>
              <p>NP8 1RH</p>
              <p><?php the_field('phone_number', 'option'); ?></p>
            </div>
          </div>

          <nav class="footer-nav" role="navigation">
            <?php ignite_footer_links(); ?>
          </nav>


          

          
          <!-- New Badges -->
          <div class="badgebox clearfix">
            <div class="badgebox-inner">
              
              <div class="[ NewBadgeContainer ]">
                <a class="[ AurGold ]" href="http://www.visitwales.com/accommodation-search/accommodation-search-results/accommodation-search-details?id=221474" target="_blank" alt="aur-gold"></a>
                <a class="[ SignPost ]" href="http://www.signpost.co.uk/hotel-details/id/304/gliffaes-country-house-hotel/powys/wales" target="_blank" alt="signpost"></a>
                <a class="[ BestLoved ]" href="http://www.bestloved.com/item/gliffaes-country-house-hotel.html" target="_blank" alt="best-loved"></a>
                <a class="[ HotelGuide ]" href="http://www.goodhotelguide.com/CRICKHOWELL/Hotel/Gliffaes" target="_blank" alt="hotel-guide"></a>
                <a class="[ BritFinest ]" href="http://www.britainsfinest.co.uk/hotels/hotels.cfm/searchazref/75002160GLIA" target="_blank" alt="britfinest"></a>
                <a class="[ HotelGuru ]" href="http://www.thehotelguru.com/hotel/gliffaes-hotel-wales-south-and-mid" target="_blank" alt="hotel-guru"></a>
                <a class="[ SawDays ]" href="http://www.sawdays.co.uk/britain/wales/powys/gliffaes-hotel" target="_blank" alt="sawdays"></a>
              </div>
            
            </div>
          </div>
          <!-- / New Badges -->



        



        </div><!--  / .footer-links-wrap -->

        <div class="socialandcopy clearfix">
          <div class="socialandcopy-inner clearfix">
            <div class="footer-social">
              <ul class="footer-social-ul clearfix">
                <li><a href="<?php echo get_permalink(452); ?>"><i class="icon-email-circle"></i><span class="visuallyhidden">Mail</span></a></li>
                <li><a target="_blank" href="<?php the_field('twitter_link', 'option'); ?>"><i class="icon-twitter-circle"></i><span class="visuallyhidden">Twitter</span></a></li>
                <li><a target="_blank" href="<?php the_field('facebook_link', 'option'); ?>"><i class="icon-facebook-circle"></i><span class="visuallyhidden">Facebook</span></a></li>
                <li><a target="_blank" href="<?php the_field('google+_link', 'option'); ?>"><i class="icon-google-plus-circle"></i><span class="visuallyhidden">Google Plus</span></a></li>
                <li><a target="_blank" href="<?php the_field('tripadvisor_link', 'option'); ?>"><i class="icon-tripadvisor-circle"></i><span class="visuallyhidden">Trip Advisor</span></a></li>
              </ul>
            </div>

            <div class="copy-div">
              <p class="byignite"><a target="_blank" href="http://www.ignitehospitality.com/"><span>A site by Ignite Hospitality Marketing</span><i class="icon-ignite-flame"></i></a></p>
              <p class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
            </div>
          </div>
        </div>
        
        <p class="bktop"><a href="#"><span>Back to Top</span><i class="icon-back-to-top"></i></a></p>
      
      

      </div><!-- end footer-inner -->
    </footer><!-- end footer -->

  </div><!-- end #container -->

    <?php wp_footer(); ?>

<script type='text/javascript' src='<?php bloginfo('stylesheet_directory'); ?>/js/plugins2.js'></script>







</body>
</html>

