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

			<div class="mediumHero careersHero">

				<div class="fullWidth heroHeadingContainer">

					<div class="heroHeadingWrapper">

						<div class="heroHeading">

							<h1 class="noMargin">Careers</h1>

						</div>

					</div>

				</div>


			</div>

		</section>

		<section id="pageContent">

			<section id ="serviceIntro" class="paddedSection">

				<div class="limitWidth flex-container-reverse">

					<div class="col20">

						<?php get_template_part("/inc/careers-sidebar"); ?>

					</div>

					<div id="introCopy" class="col80 limitWidth">

						<div class="blockText">

							<h2 class="noMargin">Join the Fox Structures Team!</h2>

							<div class="underline"></div>

							<p>
								Our employees are the backbone of our success. Our field and office staff represent the
								best in their respective fields. We offer benefits such as health insurance, vacation
								pay, holiday pay, 401(k), life insurance, short term disability, and profit sharing. We
								are experiencing growth and are looking for dependable, self-motivated team members.
							</p>
							<p>
								To be considered for this position please e-mail your resume in Microsoft Word or PDF
								format to <a href="mailto:info@foxstructures.com" class="primaryLink">info@foxstructures.com</a>.
								Please include the job title for which you are applying for in the subject line of the
								email. You can also visit our offices, at 2201 Eastline Road Kaukauna, WI to complete an employment
								application or
								<a href="https://fs10.formsite.com/InsightCreative/form41/index.html" class="primaryLink">click here
								<span class="screen-reader-text">Opens in a new tab to fill out a job application</span></a>.
							</p>
							<p>
								All inquiries will be kept strictly confidential. Fox Structures Inc. does not discriminate
								in hiring or employment on the basis of race, color, religion, national origin, age, gender,
								sexual orientation, disability, military service, or any other basis on which discrimination
								is prohibited by federal, state or local laws. Women and minorities are strongly encouraged
								to apply.
							</p>

						</div>

					</div>

				</div>

			</section>

		</section>

	</main>

</div>

<?php

get_footer();
