
<div class="social-button-container">
<h3>Share this story:</h3>
<div class="SocialCustomMenu">

	<!--<a class="scmemail" target="_blank" href="mailto:?subject=I%20wanted%20to%20share%20this%20post%20with%20you%20from%20<?php bloginfo('name'); ?>&body=<?php the_title('','',true); ?>&#32;&#32;<?php the_permalink(); ?>"
	title="Share by Email!">
		<i class="icon-email-circle"></i><span class="visuallyhidden">Mail</span>
	</a>-->


	<a class="scmTwitter" target="_blank" href="http://twitter.com/home/?status=<?php the_title();?> - <?php echo wp_get_shortlink();?>"
	title="Share on Twitter!">
		<i class="icon-twitter-circle"></i><span class="visuallyhidden">Twitter</span>
	</a>

	<a class="scmFacebook" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?> - <?php echo wp_get_shortlink();?> "
	title="Share on Facebook!">
		<i class="icon-facebook-circle"></i><span class="visuallyhidden">Facebook</span>
	</a>

	<a class="scmGoogleplus" target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"onclick="javascript:window.open(this.href,
  	'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false; "
  	title="Share on Google +!">
  		<i class="icon-google-plus-circle"></i><span class="visuallyhidden">Google Plus</span>
  	</a>


</div>
</div>
