<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package foxStructuresResponsive
 */
get_header();

?>

<div id="primary" class="content-area">

	<main id="main" class="site-main">

		<section id ="contactContent">

			<div id="contactWrap">

				<div class="pageWidth flex-container">

					<div id="formWrap" class="col60">

						<div id="formWrapInner">

							<h4 class="noMargin">Contact Us to Discuss Your Project.</h4>

							<div class="underline"></div>

							<img src="/wp-content/uploads/2018/12/Fox_GuyGroupMedium.jpg" class="image" alt="Group photo of the Fox Structures Team on Owners">

							<h5 class="noMargin">Fox Structures, Inc.</h5>
							<div class="underline"></div>

							<p>2201 Eastline Line Rd<br>
							Kaukauna,WI 54130</p>

							<hr>

							<p>
							Fox Structures is located in the Kaukauna Industrial Park, near U.S. 41 between Hwy 55 and County Road J.
							</p>
							<p>
							From the 55 exit: Take 55 south to the first four-way stop and turn left (east)
							on Hwy 00 (Hyland Ave). Go ¾ mile to Badger Road on the left—you’ll see Fox Structures
							straight ahead at 2201 Eastline Road.
							</p>
							<p>
							From the J exit: Take J south to the first four-way stop at Hwy 00
							(Hyland Ave) and turn right (west). Go ¼ mile to Badger Road on the
							right—you’ll see Fox Structures straight ahead at 2201 Eastline Road.
							</p>

							<p>
								Phone: <a class="primaryLink" href="tel:(800)236-1369">(800) 236-1369</a>
								<br>
								Local: <a class="primaryLink" href="tel:(920)766-9305">(920) 766-9305</a>
								<br>
								Fax: 920-766-9354
							</p>
							<p>E-mail: <a href="mailto:info@foxstructures.com" class="primaryLink">info@foxstructures.com</a>

							<p>Normal office hours:<br>
							Monday – Friday<br>
							7:00 am – 5:00 pm</p>

						</div>

					</div>

					<div class="col40">

						<div class="smallMapWrapper">

							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5710.910572353124!2d-88.256114!3d44.30059000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x14c92b8c9918bf5!2sFox+Structures+Inc!5e0!3m2!1sen!2sus!4v1552668590157" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

						</div>

						<div class="formWrapper">

							<?php echo do_shortcode('[caldera_form id="CF5c8bd79285229"]'); ?>

						</div>

					</div>

				</div>

			</div>

		</section>

	</main>

</div>

<?php

get_footer();
