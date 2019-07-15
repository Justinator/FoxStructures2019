<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package foxStructuresResponsive
 */
get_header();

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<section>
			<div class="mediumHero aboutHero">
				<div class="fullWidth heroHeadingContainer">
					<div class="heroHeadingWrapper">
						<div class="heroHeading">
							<h1 class="noMargin">Fox Structures—Experts at Building Success.</h1>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="pageContent">
			<?php get_template_part("/inc/leadership"); ?>
			<section class="navWidth paddedSection">
				<?php get_template_part('inc/CTA')?>
			</section>
		</section>
	</main>
</div>
<?php
get_footer();
