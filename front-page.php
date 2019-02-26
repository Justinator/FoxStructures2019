<?php
/**
 * Template Name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package foxStructuresResponsive
 */
get_header();

?>

<div id="barba-wrapper">

	<div class="barba-container">

		<div id="primary" class="content-area">

			<main id="main" class="site-main">

				<section>

					<div class="hero homeHero">

						<div class="fullWidth heroHeadingContainer">

							<div class="col50 heroHeadingWrapper">

								<div class="heroHeading">

									<h1 class="noMargin">Premier Design/Build Agricultural and Commercial Construction Company</h1>

								</div>

							</div>

							<div class="col50">

							</div>

							<div id="heroSwooshWrapper" class="fullWidth">

								<img src="/wp-content/uploads/2019/02/bottomSmallCurve2-1.png" class="image">

							</div>

							<div class="heroCTA fullWidth">

								<div class="heroCTAContent pageWidth">

									<h3 class="noMargin">Contact Us to Discuss Your Project</h3>

									<a href="/contact/" class="heroCTAButton" role="link"><span>Contact Us</span></a>

								</div>

							</div>

						</div>


					</div>

				</section>

				<section id="pageContent">

					<section id ="foxStructuresIntro" class="paddedSection">

						<div class="fullWidth flex-container-reverse centerAlignedContainer">

							<div id="introCopy" class="col50">

								<div class="blockText">

									<h2 class="noMargin">Our Building Success Starts with You.</h2>

									<div class="underline"></div>

									<p>Fox Structures is known throughout northeast Wisconsin as a premier
										design/build agricultural and commercial construction company. For over
										thirty years our design savvy, construction expertise and commitment to
										quality have been matched only by our high level of customer satisfaction.
										That’s why we are so proud that 80% of our business comes from satisfied
										repeat clients.
									</p>

									<p>
										Browse some of the unique <a href="/services/agricultural/" class="primaryLink">agricultural</a>
										and <a href="/services/commercial/" class="primaryLink">commercial</a> construction
										projects we’ve built in the past. Then <a href="/services/agricultural/" class="primaryLink">contact us</a>
										and see why we build with you in mind!
									</p>

								</div>

							</div>

							<div id="introImage" class="col50">

								<img src="/wp-content/uploads/2019/02/foxStructuresCustomBuild.jpg" class="image" role="image"
								alt="A Custom built garage by Fox Structures">

							</div>

						</div>

					</section>

					<section class="featuredProjects">

						<div class="pageWidth centerText">

							<h3 class="noMargin">Featured Building Projects</h3>

							<div class="centerUnderline"></div>

						</div>

						<div class="fullWidth flex-container">

							<div class="col25 featuredProjectWrapper">

								<div class="featuredProjectOverlay"></div>

								<div class="featuredProjectContent">

									<img src="/wp-content/uploads/2019/02/OaksIntExtStillsMediumSquare.jpg" class="featuredProjectImage">

									<h4 class="featuredProjectTitle"><span class="projectTitleSpan">The Oaks Golf Course</span></h4>

								</div>

							</div>

							<div class="col25 featuredProjectWrapper">

								<div class="featuredProjectOverlay"></div>

								<div class="featuredProjectContent">

									<img src="/wp-content/uploads/2019/02/virClarFarmsSquare.jpg" class="featuredProjectImage">

									<h4 class="featuredProjectTitle"><span class="projectTitleSpan">Vir-Clar Farms</span></h4>

								</div>

							</div>

							<div class="col25 featuredProjectWrapper">

								<div class="featuredProjectOverlay"></div>

								<div class="featuredProjectContent">

									<img src="/wp-content/uploads/2019/02/waterRightSquare.jpg" class="featuredProjectImage">

									<h4 class="featuredProjectTitle"><span class="projectTitleSpan">Water Right</span></h4>

								</div>

							</div>

							<div class="col25 featuredProjectWrapper">

								<div class="featuredProjectOverlay"></div>

								<div class="featuredProjectContent">

									<img src="/wp-content/uploads/2019/02/randomWeldingProjectSquare.jpg" class="featuredProjectImage">

									<h4 class="featuredProjectTitle"><span class="projectTitleSpan">Future Welding Project</span></h4>

								</div>

							</div>

						</div>

						<div class="pageWidth buttonWrapper">

							<div class="centerButton">

								<a href="/portfolio/" class="primaryButton">View all building projects</a>

							</div>

						</div>

					</section>

					<section class="servicesOverview greyBlock">

						<div class="fullWidth centerText paddedSection">

							<h3 class="noMargin">Agricultural and Commercial Construction Services</h3>

							<div class="centerUnderline"></div>

						</div>

						<div class="navWidth"></div>

					</section>

				</section>

			</main>

		</div>

	</div>

</div>

<?php

get_footer();
