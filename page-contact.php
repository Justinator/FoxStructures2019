<?php
/**
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

					<div class="mediumHero contactHero">

						<div class="navWidth smallHeroHeadingContainer">

							<div class="homeHeading flex-container">

								<div>

									<div class="heroHeading">

										<h1 class="largeHeading">Contact Us</h1>

									</div>

								</div>

							</div>

						</div>

					</div>

				</section>

				<section id ="contactContent">

					<div id="contactWrap">

						<div class="pageWidth flex-container">

							<div id="formWrap" class="col60">

								<div id="formWrapInner">

									<h4 class="redText">Contact</h4>

									<p>
									Have some questions that you still need help with? We're here to help.
									</p>

									<h3 class="redText">Call us at <a class="plainLink" href="tel:(920)432-8899">(920) 432-8899</a></h3>

									<p>Or fill out the form below and we'll get back to you as soon as we can!</p>

									<?php echo do_shortcode('[caldera_form id="CF5c536b3a57ba3"]'); ?>

								</div>

							</div>

							<div class="col40">

								<div class="smallMapWrapper">


								</div>

								<div>

									<div class="locationContent">

										<h5></h5>

										<a class="plainLink" target="_blank" href="http://bit.ly/2sXZA1Y">

										<p><br>

										</p></a>

										<a class="plainLink" href="tel:(920)432-8899"></a>

										<br>

									</div>

								</div>

							</div>

						</div>

					</div>

				</section>

		</main>

	</div>

</div>

</div>
<?php

get_footer();
