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

				<h1 class="centerText portfolioTitle">N.E.W. Printing</h1>

				<div class="centerUnderline"></div>

				<a href="/services/commercial/" class="primaryLink">Commercial</a>

			</div>

			<img src="/wp-content/uploads/2019/03/N.E.W.PrintingExteriorLargeMedium.jpg" class="image portfolioFeaturedImage">

		</section>

		<section id="pageContent" class="limitPortfolioWidth">

			<section class="project">

				<div class="fullWidth flex-container">

					<div class="col50">

						<h4 class="noMargin">Location</h4>

						<div class="underline"></div>

						<p>1718 E. Wisconsin Ave<br>
							Appleton, WI 54911</p>

					</div>

					<div class="col50">


					</div>

				</div>

				<div class="flex-container centerAlignedContainer">

					<div class="col50 paddedWrapper">

						<div class="outerWrapper">

							<img src="/wp-content/uploads/2019/03/N.E.W.PrintingExterior1Cropped.jpg" class="featuredProjectImage">

						</div>

						<div class="outerWrapper">

							<img src="/wp-content/uploads/2019/03/N.E.W.BackOfficeSpace.jpg" class="featuredProjectImage">

						</div>

					</div>

					<div class="col50 paddedWrapper">

						<img src="/wp-content/uploads/2019/03/N.E.W.FrontLobbyMedium.jpg" class="featuredProjectImage">

					</div>

				</div>

				<div class="flex-container paddedWrapper">

					<div class="col50 smallMarginRight">

						<img src="/wp-content/uploads/2019/03/N.E.W.BackOfficeMedium.jpg" class="image">

					</div>

					<div class="col50 smallMarginLeft">

						<img src="/wp-content/uploads/2019/03/N.E.W.BackOffice2Medium.jpg" class="image">

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
