<?php
	if ( wp_is_mobile() ) {
		$bookOnline = get_field('book_online_mobile', 'option');	
	} else {
		$bookOnline = get_field('book_online', 'option');
	} 
?>

<div class="availab">
	<div class="availab-inner">
		<a  class="border-radius" target="_blank" href="<?php echo $bookOnline; ?>"><span>check availability & rates</span><i class=" icon-calendar"></i></a>
	</div>
</div>