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
			<div class="col30">
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
			<div class="col70">
				<div class="blogText">
					<div class="entry-content">
						<?php
							the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" class="blogTitleLink">', '</a></h2>' );
							the_excerpt();
						?>
					</div><!-- .entry-content -->
					<div class="continue-reading">
						<?php
						$read_more_link = sprintf(
							/* translators: %s: Name of current post. */
							wp_kses( __( 'Continue Reading %s', 'foxStructuresResponsive' ), array( 'span' => array( 'class' => array() ) ) ),
							the_title( '<span class="screen-reader-text">"', '"</span>', false )
						);
						?>
						<a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark" class="primaryButton"><?php echo $read_more_link; ?></a>
					</div>
				</div>
			</div>
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->
</div>
