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

			<h1 class="portfolioTitle centerText">Rosendale Dairy, LLC</h1>

			<img src="/wp-content/uploads/2017/09/rosendale-dairy.jpg" class="image portfolioFeaturedImage">

			<p>
				Recently featured on the History Channel’s “Only in America” program with Larry the Cable Guy, the complex
				features two freestall barns servicing 8000 cows and a commodity storage shed.
			</p>
			<p>
				Dairy facility: freestall, vestibule, vet room, curtains, cool cells, cross ventilated, sand separator room,
				commodity building, cow pick up building, manure processing building.
			</p>

		</section>

		<section id="pageContent" class="limitPortfolioWidth">

			<section id="oaksProject">

				<div class="fullWidth flex-container">

					<div class="col50">

						<h4 class="noMargin">Date Completed</h4>

						<div class="underline"></div>

						<p>2009</p>

					</div>

					<div class="col50">

						<h4 class="noMargin">Location</h4>

						<div class="underline"></div>

						<p>N8997 County M<br>
							Pickett, WI 54964</p>

					</div>

				</div>

				<div class="tinyPaddedSection paddedSideWrapper">

					<img src="/wp-content/uploads/2017/09/rosendale-freestall.jpg" class="image">

				</div>

			</section>

			<section class="moreFeaturedProjects smallPaddedSection">

				<div class="pageWidth">

					<h3 class="centerText noMargin">More Featured Projects</h3>

					<div class="centerUnderline"></div>

				</div>

				<div class="moreFeaturedProjectsWrapper">

					<?php get_template_part("/inc/the-oaks"); ?>

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
