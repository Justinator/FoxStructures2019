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

							<h1 class="noMargin">Equestrian</h1>

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

							<h2 class="noMargin">We Build Winning Equestrian Facilities.</h2>

							<div class="underline"></div>

							<p>
								People and horses have a special bond. Your horse is an important part of your life and you
								want the best possible environment to help them thrive. When it comes to superior facilities
								to accommodate horses, we have years of experience building unique and functional riding arenas,
								stall barns, storage areas, run-in shelters and more. No matter what you are looking for in an
								equestrian facility, we’ll build on your vision to create an end product that meets your needs
								and exceeds your expectations.
							</p>

							<ul>
								<li>Tack Rooms</li>
								<li>Stall Barns</li>
								<li>Run-In Shelters</li>
								<li>Feed Storage</li>
								<li>Wash Stalls</li>
								<li>Riding Arenas</li>
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

					<h3 class="noMargin">Equestrian Projects</h3>

					<div class="underline"></div>

				</div>

				<div id="portfolioWrapper" class="pageWidth portfolioWrapper">

					<?php get_template_part("/inc/projects/equestrian/gordy"); ?>

					<?php get_template_part("/inc/projects/equestrian/john-keri-vosters"); ?>

					<?php get_template_part("/inc/projects/equestrian/peters-horse-barn"); ?>

					<?php get_template_part("/inc/projects/equestrian/steve-firsch"); ?>

					<?php get_template_part("/inc/projects/equestrian/vlach-horse-barn"); ?>

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
