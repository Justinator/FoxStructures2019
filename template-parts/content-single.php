<?php
/**
 * @package foxStructuresResponsive
 */
?>
<div class="postWrapper singlePost">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="postHeader">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta">
					<?php
					foxStructuresresponsive_posted_on();
					foxStructuresresponsive_posted_by();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->
		<?php get_the_title();?>
		<div class="thumbnailWrapper">
			<?php foxStructuresresponsive_post_thumbnail(); ?>
		</div>
		<div class="entry-content">
			<?php
				the_content();
			?>
		</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->
</div>
