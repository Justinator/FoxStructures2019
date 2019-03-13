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

			<h1 class="centerText portfolioTitle">The Oaks Golf Club</h1>

			<img src="/wp-content/uploads/2019/03/OaksGolfClubExteriorLarge.jpg" class="image portfolioFeaturedImage">

			<p>
				Located in the Madison, WI area, the Oaks Clubhouse features a pro shop and restaurant.
			</p>

		</section>

		<section id="pageContent" class="limitPortfolioWidth">

			<section id="oaksProject">

				<div class="fullWidth flex-container">

					<div class="col50">

						<h4 class="noMargin">Date Completed</h4>

						<div class="underline"></div>

						<p>2007</p>

					</div>

					<div class="col50">

						<h4 class="noMargin">Location</h4>

						<div class="underline"></div>

						<p>4740 Pierceville Road<br>
							Cottage Grove, WI 53527</p>

					</div>

				</div>

				<div class="flex-container centerAlignedContainer">

					<div class="col50 paddedWrapper">

						<div class="outerWrapper">

							<img src="/wp-content/uploads/2019/03/oaks-clubhouse-1-cropped-3.jpg" class="featuredProjectImage">

						</div>

						<div class="outerWrapper">

							<img src="/wp-content/uploads/2019/03/oaks-clubhouse-cropped.jpg" class="featuredProjectImage">

						</div>

					</div>

					<div class="col50 paddedWrapper">

						<img src="/wp-content/uploads/2019/03/OaksGolfClubDroneShotsSquare.jpg" class="featuredProjectImage">

					</div>

				</div>

				<div id="largeDroneImage" class="tinyPaddedSection paddedSideWrapper">

					<img src="/wp-content/uploads/2019/03/OaksDroneShotsLarge.jpg" class="image">

				</div>

				<div class="flex-container paddedWrapper">

					<div class="col50 smallMarginRight">

						<img src="/wp-content/uploads/2018/12/OaksIntExtStills3Medium.jpg" class="image">

					</div>

					<div class="col50 smallMarginLeft">

						<img src="/wp-content/uploads/2018/12/OaksIntExtStills2Medium.jpg" class="image">

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

					<?php get_template_part("/inc/clean-water"); ?>

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
