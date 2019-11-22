<?php
/**
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
					<img src="https://foxstructures.com/wp-content/uploads/2019/03/foxStructuresEmployeeOnJob3-1.jpg" class="image">
					<p>View some of featured projects below, or try going back to the <a href="<?=site_url()?>" class="primaryLink">homepage</a></p>
				</div><!-- .page-content -->
				<?php get_template_part("/inc/projects/featured-projects"); ?>
			</section><!-- .error-404 -->
		</div>
	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
