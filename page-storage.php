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

			<div class="mediumHero storageHero">

				<div class="fullWidth heroHeadingContainer">

					<div class="heroHeadingWrapper">

						<div class="heroHeading">

							<h1 class="noMargin">Storage</h1>

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

							<h2 class="noMargin">We’re Quality Storage and Mini Warehouse Specialists.</h2>

							<div class="underline"></div>

							<p>
								The team at Fox Structures specializes in building warehouse facilities of all
								sizes for a variety of purposes. To get the best possible result, we work with
								you on every step of the process to design and build a custom solution that exactly
								meets your needs. And we bring our attention to detail to each project—overseeing
								the installation of all doors and outside lighting—and finishing the drive area.
							</p>
							<p>
								Count on us for site design and comprehensive design/build services for steel and wood
								structures featuring all siding and roofing options, plus general contractor
								support—including all concrete work and coordination of sub contractors. The highest quality
								at a very competitive price—these are the hallmarks of Fox Structures mini warehouses
								and commercial storage facilities.
							</p>

							<p>
								<a href="/contact/" class="primaryLink">Contact us</a> and see why our building success starts with you!
							</p>

						</div>

					</div>

				</div>

			</section>

			<section class="serviceProjects greyBlock paddedSection">

				<div class="pageWidth">

					<h3 class="noMargin">Storage Projects</h3>

					<div class="underline"></div>

				</div>

				<div id="portfolioWrapper" class="pageWidth portfolioWrapper">

					<?php get_template_part("/inc/projects/storage/apple-storage"); ?>

					<?php get_template_part("/inc/projects/storage/appleton-northest"); ?>

					<?php get_template_part("/inc/projects/storage/badgerland"); ?>

					<?php get_template_part("/inc/projects/storage/salm-storage"); ?>

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
