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

							<h1 class="noMargin">Fox Structures is a Full Service Agricultural, Commercial and Residential Contractor.</h1>

						</div>

					</div>

				</div>


			</div>

		</section>

		<section id="pageContent">

			<section id ="serviceIntro" class="paddedSection">

				<div class="limitWidth">

					<div id="introCopy">

						<div class="blockText">

							<p>
								From initial planning to follow-up service, Fox Structures offers all the critical services
								needed to complete your new construction or building addition project on time, within
								budget and to your satisfaction.
							</p>
							<p>
								Look through our site to review our similar <a href="/portfolio/" class="primaryLink">past projects</a>, than <a href="/contact/" class="primaryLink">contact us</a>
								to share plans or ideas and discuss options. You can count on us for:
							</p>
							<ul>
								<li>Complete design/build services including engineering and architectural support</li>
								<li>State plan approval</li>
								<li>General contracting and turnkey services</li>
									<ul>
										<li>Electrical</li>
										<li>Plumbing</li>
										<li>Painting</li>
										<li>Flooring</li>
										<li>Masonry</li>
										<li>Dry walling</li>
										<li>Insulating</li>
									</ul>
								<li>Self-performed concrete work</li>
								<li>Highest quality craftsmanship</li>
								<li>Hands-on management</li>
								<li>Realistic completion dates</li>
								<li>Successful completion within budget</li>
							</ul>
							<p>
								<a href="/contact/" class="primaryLink">Contact us</a> and see why our building success starts with you!
							</p>

						</div>

					</div>

				</div>

			</section>

			<?php get_template_part("/inc/services-overview"); ?>

		</section>

	</main>

</div>

<?php

get_footer();
