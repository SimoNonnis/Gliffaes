<?php /*Template Name: Offer*/ ?>

<!doctype html>

<html <?php language_attributes(); ?>>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php wp_title('|'); ?></title>

	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="apple-mobile-web-app-capable" content="yes">

	<!-- For third-generation iPad with high-resolution Retina display: -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo('stylesheet_directory'); ?>/apple-touch-icon-144x144-precomposed.png">
  <!-- For iPhone with high-resolution Retina display: -->
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('stylesheet_directory'); ?>/apple-touch-icon-114x114-precomposed.png">
  <!-- For first- and second-generation iPad: -->
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('stylesheet_directory'); ?>/apple-touch-icon-72x72-precomposed.png">
  <!-- For non-Retina iPhone, iPod Touch devices: -->
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php bloginfo('stylesheet_directory'); ?>/apple-touch-icon-57x57-precomposed.png">
  <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
  <link rel="apple-touch-icon-precomposed" href="<?php bloginfo('stylesheet_directory'); ?>/apple-touch-icon-precomposed.png">
	
		
	<!--[if lt IE 9]>
    <script src="<?php bloginfo('template_url'); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->

    <link href='http://fonts.googleapis.com/css?family=Sorts+Mill+Goudy:400,400italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>

	
<style type="text/css">

iframe { display: none; }

.childs-are-absolute {position:relative;}
.block {display: block;}



.offer-banner,.copy-shadow {position: absolute;}
.offer-banner {z-index: 3}
.offer-banner {top: 35%;left: 2%;}
.copy-shadow {top: 26%;left: 50%;margin-left: -488px;}

.intro-section .intro-section__title {color: #fff;position: relative;margin-top: -2.3em;background: #ac8d56;
									  font-size: 21px;font-size: 2.1rem;margin-bottom: 1.5em;border-radius: 7px;
									  padding: .5em;background: url("http://www.gliffaeshotel.com/dev/wp-content/uploads/2014/01/spring-offer-ribbon.png") no-repeat;
									  background-size:cover;background-position: center;
}


.first-p {font-size: 21px;font-size: 2.1rem;line-height: 1.3;}
.intro-section ul {font-size: 16px;font-size: 1.6rem;}
.intro-section li:before {content: "\2022";color:#83733D;margin-right:1em}

.rooms-section {text-align: center;}
	.room-promo {display: inline-block;margin: 1em 2em 3em;}
	.room-promo__title {margin: 0;font-size: 20px;font-size: 2rem;}
	.room-promo__prize {margin-bottom:0;font-size: 23px;font-size: 2.3rem;}
	.promo-button {	background: #8E847C;color: #F5F2EA;padding: 1em 2.5em;font-family: 'Special Elite', cursive;
				font-weight: 400;font-size: 14px;font-size: 1.4rem;text-decoration: none;border-radius: 7px;text-transform: capitalize;
				margin-top: .5em;white-space: pre;
	}

	.promo-button:hover,.promo-button:focus {background: #746B64;color: #F5F2EA;text-decoration: none;}
	.rooms-section .room-section-bottom-text {font-size: 16px;font-size: 1.6rem;line-height: 1.5;padding:2em 0 4em 0;
											  border-bottom: 2px dotted #DAD6D3;
	}

.bottom-section {text-align: center;width: 45%;margin:auto;position: relative;margin-top: -2.4em;background: url("http://www.gliffaeshotel.com/dev/wp-content/themes/gliffaes/img/content-background.png") repeat;}
.bottom-section p { margin: 0; }

/*Media queries*/
@media only screen and (max-width: 75.2em) {
.copy-shadow {top: 15%;left: 5%;margin-left: 0;}
}

@media only screen and (max-width: 63.2em) {
.offer-banner {display: none;}
.copy-shadow {top: 0;left: 0;}
.call-us-block {display: inline-block;}

.intro-section .intro-section__title {background-image: none;background: #ac8d56;}
}

@media only screen and (max-width: 48.5em) {

.call-us-block {margin-top: 1em;}

}

@media only screen and (max-width: 38.5em) {

.intro-section ul {font-size: 14px;font-size: 1.4rem;padding-left: 1em;}

}

@media only screen and (max-width: 31.25em) {

.intro-section .intro-section__title {font-size: 17px;font-size: 1.7rem;}
.room-promo { margin: 1em 1em 3em;}
.room-promo__title {font-size: 17px;font-size: 1.7rem;}
.text-left {text-align: left;}

}

@media only screen and (max-width: 25em) {

.bottom-section { width: 60%; }
.feb-april-block {display: block;}

}

@media only screen and (min-width: 48.6em) {
	.bottom-section { margin-bottom: 1em; }
}




</style>

	
<!-- Facebook Conversion Code for Check Availabilities &amp; Rates -->
<script>(function() {
var _fbq = window._fbq || (window._fbq = []);
if (!_fbq.loaded) {
var fbds = document.createElement('script');
fbds.async = true;
fbds.src = '//connect.facebook.net/en_US/fbds.js';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(fbds, s);
_fbq.loaded = true;
}
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6033100054820', {'value':'0.00','currency':'GBP'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6033100054820&amp;cd[value]=0.00&amp;cd[currency]=GBP&amp;noscript=1" /></noscript>
<!-- End Facebook Conversion Code for Check Availabilities &amp; Rates -->	

		
</head>

<body <?php body_class(); ?>>
<!--[if lt IE 9]><p class="chromeframe">You are using an <strong>outdated Browser</strong>.Please <a href="http://browsehappy.com/"><strong>upgrade your browser</strong></a> to improve your experience.</p>
<![endif]-->


<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TSFN85"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TSFN85');</script>
<!-- End Google Tag Manager -->

    <div id="container">

		<header class="header" role="banner">

			<nav class="nav-wrap clearfix" role="navigation" id="nav">
				<?php ignite_main_nav(); ?>	
			</nav>

			<div class="logo-wrap">
				<div class="logo-inner clearfix">

					<div class="logo">
						<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>" /></a></h1>
					</div>

					<div class="div-menu-btn">
						<p id="toggle" class="closed"><span>Navigation</span><i class="icon-navigation"></i></p>
					</div>

    			</div><!-- end logo-nav-inner -->
			</div><!-- end logo-nav -->

			

			<div class="header-info">
				<div class="header-info-inner clearfix">
					
					<div class="info1 clearfix">
						<p class="newsletter"><a href="<?php echo get_permalink(452); ?>"><i class="icon-newsletter"></i><span>Receive Our Newsletter</span></a></p>
						<p class="location"><a href="<?php echo get_permalink(18); ?>"><i class="icon-location-compass"></i><span>Our Location</span></a></p>
					</div>
					<div class="info2 clearfix">
						<p class="mob-tel"><a href="tel://<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a></p>
						<p class="dktop-tel"><?php the_field('phone_number', 'option'); ?></p>
						<div class="top-social clearfix">
							<ul class="top-social-ul clearfix">
								<li><a  target="_blank" href="<?php the_field('twitter_link', 'option'); ?>"><i class="icon-twitter-circle"></i><span class="visuallyhidden">Twitter</span></a></li>
								<li><a  target="_blank" href="<?php the_field('facebook_link', 'option'); ?>"><i class="icon-facebook-circle"></i><span class="visuallyhidden">Facebook</span></a></li>
								<li><a  target="_blank" href="<?php the_field('google+_link', 'option'); ?>"><i class="icon-google-plus-circle"></i><span class="visuallyhidden">Google Plus</span></a></li>
								<li><a  target="_blank" href="<?php the_field('tripadvisor_link', 'option'); ?>"><i class="icon-tripadvisor-circle"></i><span class="visuallyhidden">Trip Advisor</span></a></li>
							</ul>
						</div>
					</div>

				</div><!-- end header-info-inner -->
			</div><!-- end header-info -->

			
			
			
			
		</header> <!-- end header -->

<div <?php post_class('clearfix'); ?> >
	<div id="content-inner" role="main">

		<section class="top-pics-box childs-are-absolute clearfix">
        
            <img src="http://www.gliffaeshotel.com/dev/wp-content/uploads/2014/12/header-spring-2015.jpg" alt="Gliffaes Spring Offer"/>
            
            <!-- .offer-banner  -->
            <!-- <div class="offer-banner">
            	<img src="http://www.gliffaeshotel.com/dev/wp-content/uploads/2014/01/spring-offer-banner.png" alt="Spring Offer Banner"/>
        		</div> -->	
						
						<!-- .copy-shadow -->
            <!-- <div class="copy-shadow">
            	<img src="http://www.gliffaeshotel.com/dev/wp-content/uploads/2014/01/copy-shadow.png" alt="Luxury Two Night Break"/>
            </div> --> 

            

  	    </section> <!-- top-pic -->

		<section class="page-content clearfix"> <!-- text -->
			<div class="page-content-inner clearfix">
				<div class="page-article">
					<div class="inner-page-article ">
						<div class="intro-section">

						<h1 class="intro-section__title"><span class="visuallyhidden"></span>
							Available from 1st February - 1st April 2015*	<span class="feb-april-block"></span></h1>

						<p class="first-p">Nothing is so beautiful as spring - a time of joyous surprise after 
						the dull predictability of winter, with bright colour and the scent of newness and rejuvenation. 
						What better way to celebrate the coming of this new season than with a luxury two-night stay 
						at Gliffaes Country House Hotel in South Wales?
						</p>

						<p>Discover the glorious Black Mountains, enjoy a riverside walk or take 
						a ramble through the woods before coming back to a warm welcome and fine 
						dining at our restaurant in the heart of the Brecon Beacons.
						</p>

						
						<div style="text-align: center;margin: 5em auto;">
							<img src="http://www.gliffaeshotel.com/dev/wp-content/uploads/2014/12/dinnerBedBreakfast.png" alt="">
						</div>
						

						</div> <!-- .intro-section -->

						<div class="rooms-section">
							
							<!-- Room 1 -->
							<div class="room-promo">
								<h3 class="room-promo__title text-left">Standard Room</h3>
								<p class="room-promo__prize">£208</p>
								
								<a  target="_blank" href="http://fe.avvio.com/convert/site/Gliffaes%20Country%20House%20Hotel/en/rate/35091.html" class="block">
								<img src="http://www.gliffaeshotel.com/dev/wp-content/uploads/2014/12/standard-room.png" alt="">
								</a>

								<a  target="_blank" href="http://fe.avvio.com/convert/site/Gliffaes%20Country%20House%20Hotel/en/rate/35091.html" class="block promo-button">Book Room With Offer</a>
							</div>

							<!-- Room 2 -->
							<div class="room-promo">
								<h3 class="room-promo__title text-left"> Garden View Room	</h3>
								<p class="room-promo__prize">£239</p>
								
								<a  target="_blank" href="http://fe.avvio.com/convert/site/Gliffaes%20Country%20House%20Hotel/en/rate/35091.html" class="block">
								<img src="http://www.gliffaeshotel.com/dev/wp-content/uploads/2014/12/garden-view-room.png" alt="">
								</a>

								<a  target="_blank" href="http://fe.avvio.com/convert/site/Gliffaes%20Country%20House%20Hotel/en/rate/35091.html" class="block promo-button">Book Room With Offer</a>
							</div>

							<!-- Room 3 -->
							<div class="room-promo">
								<h3 class="room-promo__title text-left"> River View Room	</h3>
								<p class="room-promo__prize"> £255	</p>

								<a  target="_blank" href="http://fe.avvio.com/convert/site/Gliffaes%20Country%20House%20Hotel/en/rate/35091.html" class="block">
								<img src="http://www.gliffaeshotel.com/dev/wp-content/uploads/2014/12/river-view-room.png" alt="">
								</a>

								<a  target="_blank" href="http://fe.avvio.com/convert/site/Gliffaes%20Country%20House%20Hotel/en/rate/35091.html" class="block promo-button">Book Room With Offer</a>
							</div>

							<!-- Room 4 -->
							<div class="room-promo">
								<h3 class="room-promo__title text-left"> Luxury View Room	</h3>
								<p class="room-promo__prize"> £289	</p>

								<a  target="_blank" href="http://fe.avvio.com/convert/site/Gliffaes%20Country%20House%20Hotel/en/rate/35091.html" class="block">
								<img src="http://www.gliffaeshotel.com/dev/wp-content/uploads/2014/12/luxury-view-room.png" alt="">
								</a>

								<a  target="_blank" href="http://fe.avvio.com/convert/site/Gliffaes%20Country%20House%20Hotel/en/rate/35091.html" class="block promo-button">Book Room With Offer</a>
							</div>
							

						<p class="room-section-bottom-text">
						* Available from 1st February until 1st April 2015.<br> 
						Prices are per room per night based on two people sharing a twin or double accomodation for a minimum of two nights.<br> 
						Subject to availability.
						</p>

						</div>	<!-- .rooms-section -->

						<div class="bottom-section">

							<p><a  target="_blank" href="http://fe.avvio.com/convert/site/Gliffaes%20Country%20House%20Hotel/en/rate/35091.html" class="promo-button">Book Offer</a> <span class="call-us-block">or call us on 01874 730371</span></p>

						</div>	<!-- .bottom-section -->
					</div>
				</div>
			</div>
		</section>
				

			

	</div><!-- .content-inner -->
</div><!-- .content -->

<?php get_footer(); ?>