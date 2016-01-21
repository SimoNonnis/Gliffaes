<div class="sidebar clearfix">

	<h3><a href="<?php echo get_permalink(45); ?>">Categories</a></h3>
  		<ul class="sidebar-menu clearfix">
     		<?php wp_list_categories('orderby=ID&hide_empty=0&depth=1&exclude=110,117&title_li='); ?> 
  		</ul>

  	<div class="archive-list">	
	<h3>Archive</h3>
		<ul>
			<?php wp_get_archives(array( 'type' => 'yearly')); ?> 
		</ul>
	</div>

  
</div>

