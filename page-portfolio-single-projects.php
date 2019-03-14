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

		<div id="simpleProject" class="pageWidth paddedSection limitPortfolioWidth">

			<div class="centerText">

				<h1 class="portfolioTitle"><?php echo esc_html( get_the_title() ); ?></h1>

				<div class="centerUnderline"></div>

			</div>

			<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', 'page' );
				endwhile; // End of the loop.
			?>

			<?php get_template_part("/inc/projects/featured-projects"); ?>

		</div>

	</main><!-- #main -->

</div><!-- #primary -->

<script>
filterSelection("all");
</script>

<?php

get_footer();
