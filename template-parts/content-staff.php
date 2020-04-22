<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package foxStructuresResponsive
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<div class="imageWrap">
		<?php foxStructuresresponsive_post_thumbnail(); ?>
	</div>
	<?php $jobTitle = get_field('position_title'); ?>
	<div class="leaderInfo centerText">
		<h5 class="employeeName"><span class="primaryText"><?php the_title(); ?></span></h5>
		<div class="centerUnderline"></div>
		<h6><?php echo $jobTitle; ?></h6>
	</div>
	<div class="entry-content">
		<?php
		the_content();
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'foxStructuresresponsive' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
	<div class="videoWrapper">
	<?php
	// get iframe HTML
	$iframe = get_field('video');
	// use preg_match to find iframe src
	preg_match('/src="(.+?)"/', $iframe, $matches);
	$src = $matches[1];
	// add extra params to iframe src
	$params = array(
			'controls'    => 0,
			'hd'        => 1,
			'autohide'    => 1
	);
	$new_src = add_query_arg($params, $src);
	$iframe = str_replace($src, $new_src, $iframe);
	// add extra attributes to iframe html
	$attributes = 'frameborder="0"';
	$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
	// echo $iframe
	echo $iframe;
	?>
	</div>
	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'foxStructuresresponsive' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
