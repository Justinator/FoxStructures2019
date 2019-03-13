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

			<h1 class="centerText portfolioTitle">Clean Water Center/Clean Water Testing</h1>

			<img src="/wp-content/uploads/2019/03/CleanWaterTestingExteriorLarge.jpg" class="image portfolioFeaturedImage">

			<p>
				A divison of Water-Right, Inc., located in Appleton, WI. This building features a combination split
				faced CMU and prefinished metal panel exterior, internal lab/testing facilities, customer service areas,
				corporate offices, and product storage.
			</p>

		</section>

		<section id="pageContent" class="limitPortfolioWidth">

			<section id="oaksProject">

				<div class="fullWidth flex-container">

					<div class="col50">

						<h4 class="noMargin">Date Completed</h4>

						<div class="underline"></div>

						<p>2003</p>

					</div>

					<div class="col50">

						<h4 class="noMargin">Location</h4>

						<div class="underline"></div>

						<p>1900 Prospect Ct.<br>
            Appleton, WI 54914</p>

					</div>

				</div>

				<div class="tinyPaddedSection paddedSideWrapper">

					<img src="/wp-content/uploads/2019/03/CleanWaterTestingExteriorLarge-2.jpg" class="image">

				</div>

				<div class="flex-container paddedWrapper">

					<div class="col50 smallMarginRight">

						<img src="/wp-content/uploads/2019/03/CleanWaterTestingExteriorMedium.jpg" class="image">

					</div>

					<div class="col50 smallMarginLeft">

						<img src="/wp-content/uploads/2019/03/CleanWaterTestingExteriorMedium-2.jpg" class="image">

					</div>

				</div>

			</section>

			<section class="moreFeaturedProjects smallPaddedSection">

				<div class="pageWidth">

					<h3 class="centerText noMargin">More Featured Projects</h3>

					<div class="centerUnderline"></div>

				</div>

				<div class="moreFeaturedProjectsWrapper">

					<?php get_template_part("/inc/water-right"); ?>

					<?php get_template_part("/inc/rosendale-dairy"); ?>

					<?php get_template_part("/inc/the-oaks"); ?>

				</div>

			</section>

		</section>

	</main>

</div>

<script>
filterSelection("all");
</script>

<?php

get_footer();
