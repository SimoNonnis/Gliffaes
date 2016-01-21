<div class="sidebar clearfix">
<?php

  if($post->post_parent)
  $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&depth=1&echo=0&sort_column=menu_order&ID");
  else
  $children = wp_list_pages("title_li=&child_of=".$post->ID."&depth=1&echo=0&sort_column=menu_order&ID");
  if ($children) { ?>
  <h3>Galleries</h3>
  <ul class="sidebar-menu clearfix">
  <?php echo $children; ?>
  </ul>
  <?php } ?>

  
  
</div>














