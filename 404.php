<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package foxStructuresResponsive
 */

get_header();
?>

<div id="primary" class="content-area">

	<main id="main" class="site-main">

		<div class="limitWidth">

			<section class="error-404 not-found">

				<header class="page-header">

					<h1 class="fourOhFour centerText">404</h1>

					<h2 class="page-title">Oops! This page hasn't been built yet.</h2>

				</header><!-- .page-header -->

				<div class="page-content">

					<p>View some of featured projects below, or try a search?</p>

					<div class="centerText paddedSection">
						<?php
						get_search_form();
						?>
					</div>

				</div><!-- .page-content -->

				<?php get_template_part("/inc/projects/featured-projects"); ?>

			</section><!-- .error-404 -->

		</div>

	</main><!-- #main -->

</div><!-- #primary -->

<script>
filterSelection("all");
</script>

<?php
get_footer();
