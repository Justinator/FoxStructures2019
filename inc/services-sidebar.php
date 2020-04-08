<div class="servicesSidebar">
  <div class="servicesSidebarWrapper">
    <h2 class="noMargin">Services</h2>
    <div class="underline"></div>
    <ul class="servicesList">
      <li><a href="/services/agricultural/" class="subNavLink">Agricultural</a></li>
      <li><a href="/services/commercial/" class="subNavLink">Commercial</a></li>
      <li><a href="/services/equestrian/" class="subNavLink">Equestrian</a></li>
      <li><a href="/services/residential/" class="subNavLink">Residential</a></li>
      <li><a href="/services/storage/" class="subNavLink">Storage</a></li>
      <li><a href="/services/welding/" class="subNavLink">Welding</a></li>
    </ul>
  </div>
</div>
<?php
	if ($post->post_parent)	{
		$ancestors=get_post_ancestors($post->ID);
		$root=count($ancestors)-1;
		$parent = $ancestors[$root];
	} else {
		$parent = $post->ID;
	}
	if (is_page()) {
	  if ( $post->post_parent ) {
	    $children = wp_list_pages( array(
	      'title_li' => '',
	      'child_of' => $post->post_parent,
	      'echo'     => 0
	    ) );
	  } else {
	    $children = wp_list_pages( array(
	      'title_li' => '',
	      'child_of' => $post->ID,
	      'echo'     => 0
	    ) );
	  }
	  if ( $children ) : ?>
	  <ul>
	    <?php echo $children;	?>
	  </ul>
	  <?php endif;
	}
?>
