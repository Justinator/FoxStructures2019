<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package foxStructuresResponsive
 */
?>
 <div class="sidebar">
   <div class="sidebarWrapper">
     <?php
       global $post;
       $postid = get_the_ID();
       $parentid = $post->post_parent;
       if ( $postid == '10' || $parentid == '10' ) {
       ?>
         <h2 class="noMargin">Careers</h2>
       <?php
		 } elseif ( $postid == '62' || $parentid == '62' ) {
       ?>
       <h2 class="noMargin">Services</h2>
       <?php
		 	}
       ?>
     <div class="underline"></div>
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
   </div>
 </div>
