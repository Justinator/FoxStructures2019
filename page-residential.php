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

							<h1 class="noMargin">Residential</h1>

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

							<h2 class="noMargin">Fox Structures Brings Quality Construction Home.</h2>

							<div class="underline"></div>

							<p>
								When it comes to residential construction, the choices and decisions may seem endless.
								One choice that’s easy is Fox Structures! We take the time to learn your needs and
								expectations—such as space for your hobbies, a cozy lake retreat or an attractive storage
								shed. Put Fox Structures’ years of knowledge, attention to detail and craftsmanship to
								work on your next residential project.
							</p>

							<ul>
								<li>Cottages</li>
								<li>Garages</li>
								<li>Residential Storage Buildings</li>
								<li>Hobby Buildings</li>
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

					<h3 class="noMargin">Residential Projects</h3>

					<div class="underline"></div>

				</div>

				<div id="portfolioWrapper" class="pageWidth portfolioWrapper">

					<?php get_template_part("/inc/projects/residential/larson-cottage"); ?>

					<?php get_template_part("/inc/projects/residential/hartzheim-shed"); ?>

					<?php get_template_part("/inc/projects/residential/hobby-storage"); ?>

					<?php get_template_part("/inc/projects/residential/reiter-shed"); ?>

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
