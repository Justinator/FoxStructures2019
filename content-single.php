<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package familyAndChildcareResponsive
 */

?>

<div id="barba-wrapper">

	<div class="barba-container">

		<div class="postWrapper">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
							familyandchildcareresponsive_posted_on();
							familyandchildcareresponsive_posted_by();
							?>
						</div><!-- .entry-meta -->
					<?php endif; ?>
				</header><!-- .entry-header -->

				<?php familyandchildcareresponsive_post_thumbnail(); ?>

				<div class="entry-content">
					<?php
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" class="blogTitleLink">', '</a></h2>' );

						familyandchildcareresponsive_posted_on();
						familyandchildcareresponsive_posted_by();

						the_excerpt();
					?>
				</div><!-- .entry-content -->

				<div class="continue-reading">

					<?php
					$read_more_link = sprintf(
						/* translators: %s: Name of current post. */
						wp_kses( __( 'Continue Reading %s', 'familyAndChildcareResponsive' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					);
					?>

					<a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark" class="primaryButtonReverse"><?php echo $read_more_link; ?>

						<svg class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

							<defs>

								<symbol id="icon-chevron-right" viewBox="0 0 19 28">

									<title>chevron-right</title>

									<path d="M17.297 13.703l-11.594 11.594c-0.391 0.391-1.016 0.391-1.406 0l-2.594-2.594c-0.391-0.391-0.391-1.016 0-1.406l8.297-8.297-8.297-8.297c-0.391-0.391-0.391-1.016 0-1.406l2.594-2.594c0.391-0.391 1.016-0.391 1.406 0l11.594 11.594c0.391 0.391 0.391 1.016 0 1.406z"></path>

								</symbol>

							</defs>

						</svg>

						<svg class="blueIcon icon-chevron-right"><use xlink:href="#icon-chevron-right"></use></svg>

					</a>

				</div>

			</article><!-- #post-<?php the_ID(); ?> -->

		</div>

	</div>

</div>
