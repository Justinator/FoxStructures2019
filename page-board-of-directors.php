<?php
/**
 * Template Name: Board
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

				<section class="marginedHero">

					<div class="mediumHero aboutHero">

						<div class="navWidth smallHeroHeadingContainer">

							<div class="homeHeading flex-container">

								<div>

									<div class="heroHeading">

										<h2 class="smallHeading aboutFCR">About Family and Childcare<br>Resources of N.E.W.</h2>

										<h1 class="mediumHeading">Board of Directors</h1>

									</div>

								</div>

							</div>

						</div>

					</div>

				</section>

				<?php get_template_part('inc/about-sub-nav'); ?>

					<section id="pageContent">

						<section id ="FCRAgency" class="marginContainer">

							<div class="pageWidth flex-container paddedContainer">

								<div class="col30 centerText">

									<div class="imageWrapper">

										<img src="/wp-content/uploads/2019/02/Blank_woman_placeholder.svg.png" class="image">

										<h5 class="employeeName"><span class="primaryText">Femi Cole</span></h5>

										<h6>BayCare Clinic, LLP – President</h6>

									</div>

								</div>

								<div class="col30 centerText">

									<div class="imageWrapper">

										<img src="/wp-content/uploads/2019/02/Blank_woman_placeholder.svg.png" class="image">

										<h5 class="employeeName"><span class="primaryText">Father Bill Ribbens</span></h5>

										<h6>St. Norbert Abbey – Vice President</h6>

									</div>

								</div>

								<div class="col30 centerText">

									<div class="imageWrapper">

										<img src="/wp-content/uploads/2019/02/Blank_woman_placeholder.svg.png" class="image">

										<h5 class="employeeName"><span class="primaryText">Scott Clark</span></h5>

										 <h6>Martin Systems, Inc. – Secretary</h6>

									</div>

								</div>

							</div>

							<div class="pageWidth flex-container paddedContainer">

								<div class="col30 centerText">

									<div class="imageWrapper">

										<img src="/wp-content/uploads/2019/02/Blank_woman_placeholder.svg.png" class="image">

										<h5 class="employeeName"><span class="primaryText">Nicole Rabas</span></h5>

										 <h6>CPA, Pomp’s Tire – Treasurer</h6>

									</div>

								</div>

								<div class="col30 centerText">

									<div class="imageWrapper">

										<img src="/wp-content/uploads/2019/02/Blank_woman_placeholder.svg.png" class="image">

										<h5 class="employeeName"><span class="primaryText">Tina Johnson</span></h5>

										<h6>Omni Resources, Inc. - Board Member, Past President</h6>

									</div>

								</div>

								<div class="col30 centerText">

									<div class="imageWrapper">

										<img src="/wp-content/uploads/2019/02/Blank_woman_placeholder.svg.png" class="image">

										<h5 class="employeeName"><span class="primaryText">Rob Lennon</span></h5>

										<h6>Unified School District of De Pere – Board Member</h6>

									</div>

								</div>

							</div>

							<div class="pageWidth flex-container paddedContainer">

								<div class="col30 centerText">

									<div class="imageWrapper">

										<img src="/wp-content/uploads/2019/02/Blank_woman_placeholder.svg.png" class="image">

										<h5 class="employeeName"><span class="primaryText">Greg Babcock</span></h5>

										<h6>Wanezek, Jaekels, Daul & Babcock – Board Member</h6>

									</div>

								</div>

								<div class="col30 centerText">

									<div class="imageWrapper">

										<img src="/wp-content/uploads/2019/02/Blank_woman_placeholder.svg.png" class="image">

										<h5 class="employeeName"><span class="primaryText">Mary Gichobi</span></h5>

										<h6>University of Wisconsin – Green Bay – Board Member</h6>

									</div>

								</div>

								<div class="col30 centerText">

									<div class="imageWrapper">

										<img src="/wp-content/uploads/2019/02/Blank_woman_placeholder.svg.png" class="image">

										<h5 class="employeeName"><span class="primaryText">André Jacque</span></h5>

										<h6>State Representative – Board Member</h6>

									</div>

								</div>

							</div>

						</section>

					</section>

				</main>

			</div>

	</div>

</div>

<?php

get_footer();
