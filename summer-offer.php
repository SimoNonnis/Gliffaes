<?php 

/*Template Name: Summer Offer Page*/

get_header(); 

?>



<div <?php post_class('clearfix'); ?> >
  <div id="content-inner" role="main">

          <?php //get_template_part('partials/slider'); ?>

          <?php if( wp_is_mobile() ): ?>
            <img class="summer-offer-top-img" src="<?php echo get_bloginfo('template_directory');?>/img/summer-offer/summer-offer.jpg" alt="Summer Offer">
          <?php else: ?>
            <img class="summer-offer-top-img" src="<?php echo get_bloginfo('template_directory');?>/img/summer-offer/summer-offer.gif" alt="Summer Offer">
          <?php endif; ?>
        
        
        <section class="page-content clearfix">
          <div class="page-content-inner clearfix">
            <?php get_template_part('partials/front-page-loop'); ?>

            <div class="rooms-section">
              
              <!-- Room 1 -->
              <div class="room-promo">
                <h3 class="room-promo__title text-left">Standard Doubles</h3>
                <p class="room-promo__prize">£208*</p>
                
                <a  target="_blank" href="http://fe.avvio.com/convert/site/Gliffaes%20Country%20House%20Hotel/rate_group/14556.html" class="block">
                <img src="http://www.gliffaeshotel.com/dev/wp-content/uploads/2014/12/standard-room.png" alt="">
                </a>

                <a  target="_blank" href="http://fe.avvio.com/convert/site/Gliffaes%20Country%20House%20Hotel/rate_group/14556.html" class="block promo-button">Book Room With Offer</a>
              </div>

              <!-- Room 2 -->
              <div class="room-promo">
                <h3 class="room-promo__title text-left">Large Doubles with Garden View</h3>
                <p class="room-promo__prize">£236*</p>
                
                <a  target="_blank" href="http://fe.avvio.com/convert/site/Gliffaes%20Country%20House%20Hotel/rate_group/14556.html" class="block">
                <img src="http://www.gliffaeshotel.com/dev/wp-content/uploads/2014/12/garden-view-room.png" alt="">
                </a>

                <a  target="_blank" href="http://fe.avvio.com/convert/site/Gliffaes%20Country%20House%20Hotel/rate_group/14556.html" class="block promo-button">Book Room With Offer</a>
              </div>

              <!-- Room 3 -->
              <div class="room-promo">
                <h3 class="room-promo__title text-left">Large Doubles with River View</h3>
                <p class="room-promo__prize"> £271*  </p>

                <a  target="_blank" href="http://fe.avvio.com/convert/site/Gliffaes%20Country%20House%20Hotel/rate_group/14556.html" class="block">
                <img src="http://www.gliffaeshotel.com/dev/wp-content/uploads/2014/12/river-view-room.png" alt="">
                </a>

                <a  target="_blank" href="http://fe.avvio.com/convert/site/Gliffaes%20Country%20House%20Hotel/rate_group/14556.html" class="block promo-button">Book Room With Offer</a>
              </div>

              <!-- Room 4 -->
              <div class="room-promo">
                <h3 class="room-promo__title text-left"> Four Poster with Garden View </h3>
                <p class="room-promo__prize"> £271*  </p>

                <a  target="_blank" href="http://fe.avvio.com/convert/site/Gliffaes%20Country%20House%20Hotel/rate_group/14556.html" class="block">
                <img src="http://www.gliffaeshotel.com/dev/wp-content/uploads/2015/04/4poster.png" alt="">
                </a>

                <a  target="_blank" href="http://fe.avvio.com/convert/site/Gliffaes%20Country%20House%20Hotel/rate_group/14556.html" class="block promo-button">Book Room With Offer</a>
              </div>
              
              <!-- Room 5 -->
              <div class="room-promo">
                <h3 class="room-promo__title text-left">Luxury Doubles with River View</h3>
                <p class="room-promo__prize"> £297*  </p>

                <a  target="_blank" href="http://fe.avvio.com/convert/site/Gliffaes%20Country%20House%20Hotel/rate_group/14556.html" class="block">
                <img src="http://www.gliffaeshotel.com/dev/wp-content/uploads/2014/12/luxury-view-room.png" alt="">
                </a>

                <a  target="_blank" href="http://fe.avvio.com/convert/site/Gliffaes%20Country%20House%20Hotel/rate_group/14556.html" class="block promo-button">Book Room With Offer</a>
              </div>

              <p class="room-section-bottom-text">
              *Price per room per night.
              </p>
            </div>  <!-- .rooms-section -->
            
            <section class="summer-days">
              
              <!-- Day1 -->
              <div class="day day1 clearfix">
                <h2 class="summer-days__title">Day 1 – check in and get your bearings</h2>
                <p class="summer-days__copy">
                  Arrive in time for a bar lunch or slightly later for afternoon tea on the terrace and get into 
                  the holiday mood with a glass wine.  Suitably relaxed, collect a map from reception and explore 
                  the magnificent gardens and trees as well as taking a stroll along the river below the hotel. 
                </p>
                <footer class="summer-days__footer"><span>Dinner in the hotel</span></footer>
              </div>
              <!-- End Day1 -->


              <!-- Day2 -->
              <div class="day day2 clearfix">
                <h2 class="summer-days__title">Day 2 – explore the local environs</h2>
                
                <div class="clearfix">
                  <article class="summer-days__option">
                    <h3 class="summer-days-option__title">By bike</h3>
                    <img class="summer-days-option__icon" src="<?php echo get_bloginfo('template_directory');?>/img/summer-offer/svgs/day2-1bike.svg" alt="">
                    <div class="summer-days-option__copy">
                      <p>
                        Take an electric bike and find the bird hide at <a href="http://46.254.200.236/llangorse-lake" target="_blank">Llangorse Lake</a>, 
                        <a href="http://www.talgarthmill.com/" target="_blank">The Mill in Talgarth</a>, 
                        <a href="http://www.blackmountainsgliding.co.uk/" target="_blank">gliding club</a> and the amazingly resorted 
                        <a href="http://cadw.wales.gov.uk/daysout/tretowercourtandcastle/?lang=en" target="_blank">medieval manor</a> 
                        in Tretower just a mile from the hotel.
                      </p> 
                    </div>
                  </article>
                  <article class="summer-days__option">
                    <h3 class="summer-days-option__title">In the car</h3>
                    <img class="summer-days-option__icon" src="<?php echo get_bloginfo('template_directory');?>/img/summer-offer/svgs/day2-2car.svg" alt="">
                    <div class="summer-days-option__copy">
                      <p>
                        A circular 50 mile route through one of the most picturesque valleys 
                        in Wales; the Llanthony Valley, stopping off to see the ruins 
                        of the <a href="http://cadw.wales.gov.uk/daysout/tretowercourtandcastle/?lang=en" target="_blank">medieval priory</a>. 
                      </p> 
                    </div>
                  </article>
                  <article class="summer-days__option">
                    <h3 class="summer-days-option__title">On Foot</h3>
                    <img class="summer-days-option__icon" src="<?php echo get_bloginfo('template_directory');?>/img/summer-offer/svgs/day2-3boots.svg" alt="">
                    <div class="summer-days-option__copy">
                      <p>
                        One of the best walks in the area to soak up the 
                        scenery of the Black Mountains and the Brecon Beacons 
                        is the <a href="http://www.gliffaeshotel.com/2010/03/best-walk-near-gliffaes/" target="_blank">11 mile circuit of Myndd Llangorse</a>. 
                      </p>
                    </div>
                  </article>
                </div>

                <footer class="summer-days__footer"><span>Suggested restaurant for dinner, <a href="http://www.eatdrinksleep.ltd.uk/" target="_blank">The Felin Fach Griffin</a></span></footer>
              </div>
              <!-- End Day2 -->
              


              <!-- Day3 -->
              <div class="day day3 clearfix">
                <h2 class="summer-days__title">Day 3– trips further afield</h2>
                
                <div class="clearfix">
                  <article class="summer-days__option">
                    <h3 class="summer-days-option__title">Magnificent gardens</h3>
                    <img class="summer-days-option__icon" src="<?php echo get_bloginfo('template_directory');?>/img/summer-offer/svgs/day3-1garden.svg" alt="">
                    <div class="summer-days-option__copy">
                      <p>
                      Just over an hour’s drive due west of Gliffaes are two spectacular gardens and a National Trust property. First stop should be <a href="http://www.gardenofwales.org.uk/" target="_blank">The National Botanic Garden of Wales</a> or the more romantic <a href="http://www.aberglasney.org/">Aberglasney</a>.
                      </p>
                    </div>
                  </article>
                  <article class="summer-days__option">
                    <h3 class="summer-days-option__title">Canoe the river Wye</h3>
                    <img class="summer-days-option__icon" src="<?php echo get_bloginfo('template_directory');?>/img/summer-offer/svgs/day3-2paddle.svg" alt="">
                    <div class="summer-days-option__copy">
                      <p>
                        <a href="http://www.wyevalleycanoes.co.uk/canoehire.htm" target="_blank">Wye Valley canoes</a> at Glasbury 
                        will hire out canoes for either 
                        a lazy full day’s paddling down the river Wye or a half-day 
                        trip with transport back to the start point. 
                      </p> 
                    </div>
                  </article>
                  <article class="summer-days__option">
                    <h3 class="summer-days-option__title">Explore Waterfall country on foot</h3>
                    <img class="summer-days-option__icon" src="<?php echo get_bloginfo('template_directory');?>/img/summer-offer/svgs/day2-3boots.svg" alt="">
                    <div class="summer-days-option__copy">
                      <p>
                        Nestled into the southern slopes of the Fforest Fawr massif, 
                        west of Merthyr Tydfil, <a href="http://46.254.200.236/waterfall-country" target="_blank">Waterfall Country</a>  is one of the most beautiful 
                        and popular parts of the Brecon Beacons National Park.
                      </p>
                    </div>
                  </article>
                </div>

                <footer class="summer-days__footer"><span>Dinner in the hotel</span></footer>
              </div>
              <!-- End Day3 -->




              <!-- Day4 -->
              <div class="day day4 clearfix">
                <h2 class="summer-days__title">Day 4 – Still plenty to see and do</h2>
                
                <div class="clearfix">
                  <article class="summer-days__option">
                    <h3 class="summer-days-option__title">Industrial Heritage</h3>
                    <img class="summer-days-option__icon" src="<?php echo get_bloginfo('template_directory');?>/img/summer-offer/svgs/day4-1factory.svg" alt="">
                    <div class="summer-days-option__copy">
                      <p>
                        Just the other side of the mountain from Gliffaes lies the birth place of the industrial revolution.
                      </p>
                      <p>
                        Your first stop should be the award 
                        winning <a href="http://www.museumwales.ac.uk/bigpit/" target="_blank">Big Pit National Coal Museum</a>
                      </p>
                    </div>
                  </article>
                  <article class="summer-days__option">
                    <h3 class="summer-days-option__title">Explore the canal – by bike or on foot</h3>
                    <img class="summer-days-option__icon" src="<?php echo get_bloginfo('template_directory');?>/img/summer-offer/svgs/day4-2canal.svg" alt="">
                    <div class="summer-days-option__copy">
                      <p>
                        <a href="http://46.254.200.236/monmouthshire-brecon-canal-history" target="_blank">The Monmouth & Brecon Canal</a> 
                        was dug over 200 years ago as an important transport link. It begins in Brecon and follows the line of the river Usk, right pass Gliffaes and on to Newport. 
                      </p>
                    </div>
                  </article>
                  <article class="summer-days__option">
                    <h3 class="summer-days-option__title">Climb the highest peak in South wales</h3>
                    <img class="summer-days-option__icon" src="<?php echo get_bloginfo('template_directory');?>/img/summer-offer/svgs/day4-3peak.svg" alt="">
                    <div class="summer-days-option__copy">
                      <p>
                        The highest peak in the Brecon Beacons at 886 meters is Pen y Fan. 
                        Don’t be daunted by the fact that this hill is used to weed out 
                        volunteers for the Special Forces! 
                      </p>
                    </div>
                  </article>
                </div>

                <footer class="summer-days__footer"><span>Suggested restaurants for dinner, <a href="http://www.bearhotel.co.uk/" target="_blank">The Bear Hotel in Crickhowell</a> or <a href="http://www.thehardwick.co.uk/" target="_blank">The Hardwick</a>, Abergavenny</span></footer>
              </div>
              <!-- End Day4 -->
              




              <!-- Day5 --> 
              <div class="day day5 clearfix">
                <h2 class="summer-days__title">Day 5 – Time to go home</h2>
                <p class="summer-days__copy">
                  There is no need to rush off on our account. Have one last stroll along the river, 
                  a cup of coffee on the terrace and then perhaps wend you way. You might even consider 
                  making a longer trip in Wales and head for Pembrokshire or Snowdonia. 
                </p>
              </div>
              <!-- End Day5 -->


              <!-- Pdf Button -->
              <div class="availab summer-offer-pdf">
                <div class="availab-inner">
                  <a class="border-radius" href="<?php echo get_bloginfo('template_directory');?>/img/summer-offer/summer-offer-itinerary.pdf" target="_blank">See Full Guide</a>
                </div>
              </div>
              <!-- End Pdf Button -->
              
            </section>
            
            

            



          </div>
        </section> <!-- end article section -->

      

  </div><!-- .content-inner -->
</div><!-- .content -->

<?php get_footer(); ?>



