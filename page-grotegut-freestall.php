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

		<section class="pageWidth paddedSection limitPortfolioWidth">

			<div class="centerText">

				<h1 class="centerText portfolioTitle">Grotegut Freestall</h1>

				<div class="centerUnderline"></div>

				<a href="/services/agricultural/" class="primaryLink">Agricultural</a>

			</div>

			<img src="/wp-content/uploads/2019/03/GrotegutGates13-1.jpg" class="image portfolioFeaturedImage">

		</section>

		<section id="pageContent" class="limitPortfolioWidth">

			<section class="project">

				<div class="flex-container centerAlignedContainer">

					<div class="col50 paddedWrapper">

						<div class="outerWrapper">

							<img src="/wp-content/uploads/2019/03/GrotegutGatesExteriorSmall-1.jpg" class="featuredProjectImage">

						</div>

						<div class="outerWrapper">

							<img src="/wp-content/uploads/2019/03/grotegut-freestall-e1553433457665.jpg" class="featuredProjectImage">

						</div>

					</div>

					<div class="col50 paddedWrapper">

						<img src="/wp-content/uploads/2019/03/GrotegutGates17SquareMedium-1.jpg" class="featuredProjectImage">

					</div>

				</div>

				<div class="tinyPaddedSection paddedSideWrapper">

					<img src="/wp-content/uploads/2019/03/GrotegutGates1LargeMedium-1.jpg" class="image largePortfolioImage">

				</div>

				<div class="flex-container paddedWrapper doubleImageWrapper removeBottomMargin">

					<div class="col50 smallMarginRight">

						<img src="/wp-content/uploads/2019/03/GrotegutGates8-1-1.jpg" class="image">

					</div>

					<div class="col50 smallMarginLeft">

						<img src="/wp-content/uploads/2019/03/GrotegutGates6-1.jpg" class="image">

					</div>

				</div>

				<div class="flex-container paddedWrapper doubleImageWrapper2">

					<div class="col50 smallMarginRight">

						<img src="/wp-content/uploads/2019/03/GrotegutGates9-1.jpg" class="image">

					</div>

					<div class="col50 smallMarginLeft">

						<img src="/wp-content/uploads/2019/03/GrotegutGates10-1.jpg" class="image">

					</div>

				</div>

			</section>

			<?php get_template_part("/inc/projects/featured-projects"); ?>

		</section>

	</main>

</div>

<script>
filterSelection("all");
</script>

<?php

get_footer();
