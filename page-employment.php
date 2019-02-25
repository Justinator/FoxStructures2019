<?php
/**
 * Template Name: Employment
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

										<h2 id="aboutFCR" class="smallHeading aboutFCR">About Family and Childcare<br>Resources of N.E.W.</h2>

										<h1 class="mediumHeading">Employment</h1>

									</div>

								</div>

							</div>

						</div>

					</div>

				</section>

				<?php get_template_part('inc/about-sub-nav'); ?>

					<section id="pageContent">

						<section id ="aboutfoxStructures" class="marginContainer">

							<div class="fullWidth blueBlock paddedContainer">

								<div class="centerText">

									<h2 class="whiteText">Current Openings</h2>

								</div>

								<div class="pageWidth flex-container">

									<div class="col50">

										<div class="jobPostWrapper">

											<a href="/about/employment/parent-educator-2-positions-one-ft-one-pt-posted-12-12-18/">

												<div class="jobPostContent">

													<p>Full time exempt/Half time</p>

													<h4 class="removeHeaderMargin">Parent Educator</h4>

												</div>

											</a>

										</div>

									</div>

									<div class="col50">

										<div class="jobPostWrapper">

											<a href="/about/employment/event-coordinator-intern-unpaid-internship-for-credit/">

												<div class="jobPostContent">

													<p>Unpaid Internship</p>

													<h4 class="removeHeaderMargin">Event Coordinator Intern</h4>

												</div>

											</a>

										</div>

									</div>

								</div>

								<div class="pageWidth flex-container">

									<div class="col50">

										<div class="jobPostWrapper">

											<a href="/about/employment/childcare-provider/">

												<div class="jobPostContent">

													<p>Hourly/Part-time</p>

													<h4 class="removeHeaderMargin">Childcare Provider</h4>

												</div>

											</a>

										</div>

									</div>

									<div class="col50">

									</div>

								</div>

							</div>

						</section>

						<section id="FCRvalue" class="marginContainer">

							<div class="fullWidth centerText">

								<h2><span class="underlinedHeading">OUR VALUES</span></h2>

							</div>

							<div class="fullWidth flex-container-reverse centerAlignedContainer greyBlock">

								<div class="col50 removeBottomMargin">

									<img src="/wp-content/uploads/2019/02/familyPlayTime.jpg" class="image">

								</div>

								<div class="col50">

									<div class="blockText">

										<ul>

											<li><strong>Support:</strong> We engage the whole family and early childhood professionals dynamically with
												evidence-based and evidence-informed solutions.  Our highly trained professional team have extensive
												experience in working with children and families.</li>

											<li><strong>Empower:</strong> Our goal is to empower individuals, families, corporate partners and providers
												with best practices and fresh ideas to help protect children in our service delivery areas.</li>

											<li><strong>Educate:</strong> Our team of professionals provide numerous trainings and workshops and
												works with other nonprofit and county agencies in early child development, parenting classes,
												obesity prevention, and strengthening families.</li>

											<li><strong>Connect:</strong> A high priority for the agency staff, leadership and board is the connections
												between various members of the community and the connections that we instill in our families.</li>

										</ul>

									</div>

								</div>

							</div>

						</section>

						<?php get_template_part('inc/newsletter-signup'); ?>

					</section>

				</main>

			</div>

	</div>

</div>

<?php

get_footer();
