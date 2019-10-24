<?php
/**
 * @package foxStructuresResponsive
 */
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<section id="aboutHero">
			<div class="mediumHero aboutHero">
				<div class="fullWidth heroHeadingContainer">
					<div class="heroHeadingWrapper">
						<div class="heroHeading">
							<h1 class="noMargin">Fox Structures—Experts at Building Success.</h1>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="pageContent">
			<section id ="foxStructuresIntro" class="paddedSection">
				<div class="fullWidth flex-container centerAlignedContainerTop">
					<div id="introCopy" class="col50">
						<div class="blockText">
							<h2 class="noMargin">For expert design, welding and construction,
								count on Fox Structures.</h2>
							<div class="underline"></div>
							<p>
								Since 1982 Fox Structures has focused on two things: listening to customers and delivering what we promise.
								That’s a pretty simple business plan for a design/build contractor. But it’s one that works.
								From planning and design, through construction to your final walk-through, you’ll have our
								dedicated attention every step of the way. Fox Structures’ owners are even present on every job,
								ensuring we complete projects to our customer’s personal specifications, in the most cost-efficient
								manner, while always meeting our own demanding quality standards.
							</p>
						</div>
					</div>
					<div id="leadershipImage" class="col50">
						<img src="/wp-content/uploads/2018/12/Fox_MainGroupMedium.jpg" class="image"
						alt="Fox Structures Leadership Team">
					</div>
				</div>
			</section>
			<section class="">
				<div class="limitWidth">
					<div class="blockText">
						<p>
							Today Fox Structures provides design, welding and construction services for all types of agricultural, commercial,
							retail, light manufacturing and residential buildings. In addition, mini warehouses, storage facilities
							and special-use buildings have continued to fuel our growth and progress in northeast Wisconsin.
						</p>
						<p>
							Browse some of the <a href="/portfolio/" class="primaryLink">unique projects</a> we’ve built in the past.
							Then <a href="/contact/" class="primaryLink">contact us</a> and see how <em><strong>we build with you in mind</strong></em> !
						</p>
					</div>
				</div>
			</section>
			<?php get_template_part("/inc/leadership"); ?>
			<section class="navWidth paddedSection">
				<?php get_template_part('inc/CTA')?>
			</section>
		</section>
	</main>
</div>
<?php
get_footer();
