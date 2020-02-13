<?php
/**
 * @package foxStructuresResponsive
 */
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<section id="welding">
			<div class="mediumHero weldHero">
				<div class="fullWidth heroHeadingContainer">
					<div class="heroHeadingWrapper">
						<div class="heroHeading">
							<h1 class="noMargin"><?php echo get_the_title(); ?></h1>
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
							<h2 class="noMargin">Our Welding Expertise Fuses Quality with Innovation.</h2>
							<div class="underline"></div>
							<p>
								From crafting blueprints to custom engineering, our full-service weld shop takes construction to the
								next level. Fox Welding and Fabrication, Inc. a division of Fox Structures, has over 35 years of
								experience and provides custom welding design/build services for all the finishing touches on
								commercial, agricultural, equestrian and residential projects.
							</p>
							<p>
								We also offer delivery, installation and mobile weld services for every project, big or small.
								At Fox Welding, we understand that even the smallest details are important to the overall build,
								and we commit to the highest quality work with competitive pricing.
							</p>
							<p>
								Services provided, but not limited to:
							</p>
							<h4 class="noMargin">Commercial</h4>
							<div class="underline"></div>
							<ul>
								<li>Custom engineered steel structures, beams, columns, headers and lintels</li>
								<li>Metal stairways and handrails</li>
								<li>Security gating and safety guardrails</li>
								<li>Outdoor billboards, signage and light poles</li>
							</ul>
							<h4 class="noMargin">Agricultural and Equestrian</h4>
							<div class="underline"></div>
							<ul>
								<li>Custom engineered steel structures, gating and fencing</li>
								<li>Freestalls and headlock systems</li>
								<li>Grating for floors, gutters and manure systems</li>
								<li>Specialized guarding for windows and fans</li>
							</ul>
							<h4 class="noMargin">Residential</h4>
							<div class="underline"></div>
							<ul>
								<li>Engineered structural beams and columns</li>
								<li>Stairways and handrails</li>
								<li>Masonry and concrete structural support systems</li>
							</ul>
							<p>
								<a href="/contact/" class="primaryLink">Contact us</a> and see how <em><strong>we build with you in mind</strong></em> !
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
