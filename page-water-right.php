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

			<h1 class="portfolioTitle centerText">Water Right, Inc.</h1>

			<div class="centerUnderline"></div>

			<img src="/wp-content/uploads/2017/09/water-right-inc.jpg" class="image portfolioFeaturedImage">

			<p>
				During June of 2013 Fox Structures broke ground on a 31,000 sq. ft. addition to Water Right of Appleton.
				The building features a two story office with increased office and administration space, conference and
				training facilities, testing lab, product assembly and storage areas, and a unique underground storm water
				retention system.
			</p>

		</section>

		<section id="pageContent" class="limitPortfolioWidth">

			<section id="oaksProject">

				<div class="fullWidth flex-container">

					<div class="col50">

						<h4 class="noMargin">Date Completed</h4>

						<div class="underline"></div>

						<p>2014</p>

					</div>

					<div class="col50">

						<h4 class="noMargin">Location</h4>

						<div class="underline"></div>

						<p>1900 Prospect Ct.<br>
            Appleton, WI 54914</p>

					</div>

				</div>

				<div class="tinyPaddedSection paddedSideWrapper">

					<img src="/wp-content/uploads/2019/03/waterRightExteriorLarge.jpg" class="image">

				</div>

			</section>

			<section class="moreFeaturedProjects smallPaddedSection">

				<div class="pageWidth">

					<h3 class="centerText noMargin">More Featured Projects</h3>

					<div class="centerUnderline"></div>

				</div>

				<div class="moreFeaturedProjectsWrapper ">

					<?php get_template_part("/inc/projects/commercial/the-oaks"); ?>

					<?php get_template_part("/inc/projects/agricultural/rosendale-dairy"); ?>

					<?php get_template_part("/inc/projects/commercial/clean-water"); ?>

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
