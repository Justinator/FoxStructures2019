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

			<div class="mediumHero portfolioHero">

				<div class="fullWidth heroHeadingContainer">

					<div class="heroHeadingWrapper">

						<div class="heroHeading">

							<h1 class="noMargin">See our Successful Projects for Yourself.</h1>

						</div>

					</div>

				</div>


			</div>

		</section>

		<section id="pageContent">

			<section id ="foxStructuresIntro" class="paddedSection">

				<div class="fullWidth flex-container centerAlignedContainer">

					<div class="limitWidth">

						<div class="blockText">

							<p>
								Exemplary finished projects and satisfied customers are our greatest reward. Take a look at just
								some of our completed projects and see why over 80% of our business today comes from repeat clients.
							</p>
							<p>
								Browse some of the unique projects we’ve built in the past. Then <a href="/contact/" class="primaryLink">contact us</a>
								and see how <em><strong>we build with you in mind</strong></em> !
							</p>

						</div>

					</div>

				</div>

			</section>

			<section id="featuredProjects">

				<div class="pageWidth centerText">

					<h3 class="noMargin">Featured Building Projects</h3>

					<div class="centerUnderline"></div>

				</div>

				<div class="pageWidth flex-container centerAlignedContainer">

					<div class="col50 paddedWrapper">

						<a href="/portfolio/forest-brook-farms/"><span class="screen-reader-text">View the Forest Brook Farms Project</span>

							<div class="portFeaturedProjectWrapper">

								<div class="featuredProjectOverlay"></div>

								<div class="featuredProjectContent">

									<img src="/wp-content/uploads/2019/03/forestBrookFarmsExteriorSquareLarge.jpg" class="featuredProjectImage">

									<h4 class="featuredProjectTitle"><span class="projectTitleSpan">Forest Brook Farms</span></h4>

								</div>

							</div>

						</a>

					</div>

					<div class="col50 paddedWrapper">

						<div class="outerWrapper">

							<a href="/portfolio/the-oaks-golf-club/"><span class="screen-reader-text">View the Oaks Golf Course Project</span>

								<div class="portFeaturedProjectWrapper">

									<div class="featuredProjectOverlay"></div>

									<div class="featuredProjectContent">

										<img src="/wp-content/uploads/2019/03/OaksIntExtStillsMediumCropped.jpg" class="featuredProjectImage">

										<h4 class="featuredProjectTitle"><span class="projectTitleSpan">The Oaks Golf Course</span></h4>

									</div>

								</div>

							</a>

						</div>

						<div class="outerWrapper">

							<a href="/portfolio/water-right/"><span class="screen-reader-text">View the Water Right Project</span>

								<div class="portFeaturedProjectWrapper">

									<div class="featuredProjectOverlay"></div>

									<div class="featuredProjectContent">

										<img src="/wp-content/uploads/2019/03/waterRightExteriorFrontViewCropped.jpg" class="featuredProjectImage">

										<h4 class="featuredProjectTitle"><span class="projectTitleSpan">Water Right, Inc.</span></h4>

									</div>

								</div>

							</a>

						</div>

					</div>

				</div>

			</section>

			<section class="portfolio paddedSection">

				<div class="pageWidth">

					<h4>Filter by project type</h4>

					<div id="myBtnContainer">

						<button class="filterButton active" onclick="filterSelection('all')"> All</button><span class="screen-reader-text">View all projects</span>
					  <button class="filterButton" onclick="filterSelection('agricultural')"> Agricultural</button><span class="screen-reader-text">Filter Agricultural Projects</span>
						<button class="filterButton" onclick="filterSelection('commercial')"> Commercial</button><span class="screen-reader-text">Filter Commercial Projects</span>
					  <button class="filterButton" onclick="filterSelection('equestrian')"> Equestrian</button><span class="screen-reader-text">Filter Equestrian Projects</span>
					  <button class="filterButton" onclick="filterSelection('residential')"> Residential</button><span class="screen-reader-text">Filter Residential Projects</span>
						<button class="filterButton" onclick="filterSelection('storage')"> Storage</button><span class="screen-reader-text">Filter Storage Projects</span>
						<!--<button class="filterButton" onclick="filterSelection('welding')"> Welding</button>-->

					</div>

				</div>

				<div id="portfolioWrapper" class="pageWidth portfolioWrapper">

					<?php get_template_part("/inc/projects/commercial/N.E.W.Printing"); ?>

					<?php get_template_part("/inc/projects/agricultural/grotegut"); ?>

					<?php get_template_part("/inc/projects/equestrian/vlach-horse-barn"); ?>

					<?php get_template_part("/inc/projects/agricultural/shiloh"); ?>

					<?php get_template_part("/inc/projects/storage/apple-storage"); ?>

					<?php get_template_part("/inc/projects/commercial/milksource"); ?>

					<?php get_template_part("/inc/projects/equestrian/steve-firsch"); ?>

					<?php get_template_part("/inc/projects/agricultural/tidy-view"); ?>

					<?php get_template_part("/inc/projects/commercial/clean-water"); ?>

					<?php get_template_part("/inc/projects/agricultural/seven-oaks"); ?>

					<?php get_template_part("/inc/projects/agricultural/schuh-view"); ?>

					<!-- Hide the rest of the projects on first load -->

					<?php get_template_part("/inc/projects/commercial/gillett"); ?>

					<?php get_template_part("/inc/projects/equestrian/gordy"); ?>

					<?php get_template_part("/inc/projects/residential/hartzheim-shed"); ?>

					<?php get_template_part("/inc/projects/storage/appleton-northest"); ?>

					<?php get_template_part("/inc/projects/agricultural/bill-kocourek"); ?>

					<?php get_template_part("/inc/projects/agricultural/brickstead"); ?>

					<?php get_template_part("/inc/projects/commercial/greenville"); ?>

					<?php get_template_part("/inc/projects/equestrian/john-keri-vosters"); ?>

					<?php get_template_part("/inc/projects/residential/hobby-storage"); ?>

					<?php get_template_part("/inc/projects/storage/badgerland"); ?>

					<?php get_template_part("/inc/projects/agricultural/conard"); ?>

					<?php get_template_part("/inc/projects/agricultural/fitzpine"); ?>

					<?php get_template_part("/inc/projects/agricultural/grandview"); ?>

					<?php get_template_part("/inc/projects/commercial/schmidt"); ?>

					<?php get_template_part("/inc/projects/residential/larson-cottage"); ?>

					<?php get_template_part("/inc/projects/storage/salm-storage"); ?>

					<?php get_template_part("/inc/projects/agricultural/larry-becker"); ?>

					<?php get_template_part("/inc/projects/agricultural/rieden"); ?>

					<?php get_template_part("/inc/projects/residential/reiter-shed"); ?>

					<?php get_template_part("/inc/projects/agricultural/scott-seward"); ?>

					<?php get_template_part("/inc/projects/storage/mini-warehouse"); ?>

					<?php get_template_part("/inc/projects/agricultural/siemers"); ?>

					<?php get_template_part("/inc/projects/agricultural/tidy-view"); ?>

					<?php get_template_part("/inc/projects/agricultural/tinedale"); ?>

					<?php get_template_part("/inc/projects/agricultural/vogel"); ?>

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
