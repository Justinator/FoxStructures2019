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

							<h1 class="noMargin">Agricultural</h1>

						</div>

					</div>

				</div>


			</div>

		</section>

		<section id="pageContent">

			<section id ="serviceIntro" class="paddedSection">

				<div class="limitWidth flex-container">

					<div class="col20">

						<?php get_template_part("/inc/services-sidebar"); ?>

					</div>

					<div id="introCopy" class="col80 limitWidth">

						<div class="blockText">

							<h2 class="noMargin">Our Agricultural Construction Success Keeps Growing.</h2>

							<div class="underline"></div>

							<p>
								Fox Structures designs and builds unique agricultural facilities for customers in Northeast Wisconsin.
								Our significant experience means we understand the specialized challenges facing the agricultural industry.
							</p>
							<p>
								From 100,000-sq.-ft. freestall barns to utility buildings to curtain installation, each structure
								we build is designed and tailored to your operation and herd management needs. Ask around, Fox
								Structures provides complete design/build services and project management for steel and wood frame
								structures, performs all erection and concrete work, addresses details like doors and lighting and
								guarantees the highest quality work with competitive pricing.
							</p>

							<ul>
								<li>Freestall Barns</li>
								<li>Milking Parlors</li>
								<li>Youngstock Facilities</li>
								<li>Maintenance Facilities</li>
								<li>Commodity Buildings</li>
								<li>Utility/Storage Buildings</li>
								<li>Special Needs Buildings</li>
								<li>Equestrian Facilities</li>
								<li>Maintenance/Curtain Repair</li>
							</ul>

							<p>
								<a href="/contact/" class="primaryLink">Contact us</a> and see why our building success starts with you!
							</p>

						</div>

					</div>

				</div>

			</section>

			<section class="serviceProjects greyBlock paddedSection">

				<div class="pageWidth">

					<h3 class="noMargin">Agricultural Projects</h3>

					<div class="underline"></div>

				</div>

				<div id="portfolioWrapper" class="pageWidth portfolioWrapper">

					<?php get_template_part("/inc/projects/agricultural/rosendale-dairy"); ?>

					<?php get_template_part("/inc/projects/agricultural/bill-kocourek"); ?>

					<?php get_template_part("/inc/projects/agricultural/brickstead"); ?>

					<?php get_template_part("/inc/projects/agricultural/conard"); ?>

					<?php get_template_part("/inc/projects/agricultural/fitzpine"); ?>

					<?php get_template_part("/inc/projects/agricultural/grandview"); ?>

					<?php get_template_part("/inc/projects/agricultural/grotegut"); ?>

					<?php get_template_part("/inc/projects/agricultural/larry-becker"); ?>

					<?php get_template_part("/inc/projects/agricultural/schuh-view"); ?>

					<?php get_template_part("/inc/projects/agricultural/scott-seward"); ?>

					<?php get_template_part("/inc/projects/agricultural/seven-oaks"); ?>

					<?php get_template_part("/inc/projects/agricultural/shiloh"); ?>

					<?php get_template_part("/inc/projects/agricultural/siemers"); ?>

					<?php get_template_part("/inc/projects/agricultural/soaring-eagle"); ?>

					<?php get_template_part("/inc/projects/agricultural/tidy-view"); ?>

					<?php get_template_part("/inc/projects/agricultural/tinedale"); ?>

					<?php get_template_part("/inc/projects/agricultural/vogel"); ?>

					<?php get_template_part("/inc/projects/residential/rieden"); ?>

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
