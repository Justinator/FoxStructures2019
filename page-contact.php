<?php
/**
 * Template Name: Contact
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

									<h4 class="redText">Contact Family & Childcare Resources of N.E.W.</h4>

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

									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d364875.7839881406!2d-88.52319203995803!3d44.40049514337188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8802fab7ec509b89%3A0x33d2e3312b97fd9a!2sFamily+%26+Childcare+Resources+of+N.E.W.!5e0!3m2!1sen!2sus!4v1548888903310" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

								</div>

								<div>

									<div class="locationContent">

										<h5>Family & Childcare Resources of N.E.W.</h5>

										<a class="plainLink" target="_blank" href="http://bit.ly/2sXZA1Y">

										<p>201 W. Walnut Street, Suite 100<br>

										Green Bay, WI 54303</p></a>

										<a class="plainLink" href="tel:(920)432-8899">(920) 432-8899</a>

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
