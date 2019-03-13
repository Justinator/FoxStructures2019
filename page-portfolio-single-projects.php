<?php
/**
 * The template for displaying all pages
 *
 * Template Name: Single Projects
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package foxStructuresResponsive
 */
get_header();
?>

<div id="primary" class="content-area">

	<main id="main" class="site-main">

		<div class="pageWidth defaultPadding">

			<div class="centerText">

				<h1><?php echo esc_html( get_the_title() ); ?></h1>

			</div>

			<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', 'page' );
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				endwhile; // End of the loop.
			?>

			<?php get_template_part("/inc/featured-projects"); ?>

		</div>

	</main><!-- #main -->

</div><!-- #primary -->

<?php

get_footer();
