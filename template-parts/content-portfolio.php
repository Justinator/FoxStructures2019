<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package foxStructuresResponsive
 */
?>
<div class="postWrapper">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
		<div class="flex-container">
			<header class="entry-header">
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
			<?php foxStructuresresponsive_post_thumbnail(); ?>
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->
</div>
