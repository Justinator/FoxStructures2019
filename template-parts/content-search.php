<?php
/**
 * @package foxStructuresResponsive
 */
?>
<div class="postWrapper">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			<?php if ( 'post' === get_post_type() || 'portfolio' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php
				foxStructuresresponsive_posted_on();
				foxStructuresresponsive_posted_by();
				?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->
		<?php foxStructuresresponsive_post_thumbnail(); ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<footer class="entry-footer">
			<?php foxStructuresresponsive_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-<?php the_ID(); ?> -->
</div>
