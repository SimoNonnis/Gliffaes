<?php
    // Get the ID of a given category
    $category_id = get_cat_ID( 'offers' );

    // Get the URL of this category
    $category_link = get_category_link( $category_id );
?>


<div class="availab">
	<div class="availab-inner">
		<a class="border-radius" href="<?php echo esc_url( $category_link ); ?>"><span>view more</span><i class=" icon-spyglass"></i></a>
	</div>
</div>

