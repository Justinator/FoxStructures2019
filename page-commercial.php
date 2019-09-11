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
			<div class="mediumHero commercialHero">
				<div class="fullWidth heroHeadingContainer">
					<div class="heroHeadingWrapper">
						<div class="heroHeading">
							<h1 class="noMargin">Commercial</h1>
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
							<h2 class="noMargin">Quality Commercial Construction is Our Business.</h2>
							<div class="underline"></div>
							<p>
								From retail storefronts to light industrial buildings to specialized structures,
								we know that your needs are unique. That’s why Fox Structures works with you at each
								stage of the building process to determine the best solution for your company’s needs.
								From aesthetics and space planning to exterior colors and selecting materials utilizing
								the latest design technology—we do it all to ensure your finished project works for you.
								We also assist with local and state approvals, building code reviews, site design and permitting.
								Our dedication to detail and years of experience make your move to a new facility—or the
								upgrade of your existing facility—as efficient and hassle free as possible.
							</p>
							<ul>
								<li>Light Manufacturing</li>
								<li>Corporate Offices</li>
								<li>Retail</li>
								<li>Convenience Stores</li>
								<li>Auto Service Stations</li>
								<li>Restaurants & Eateries</li>
								<li>Laboratory/Research</li>
								<li>Animal Boarding</li>
								<li>Golf Clubhouses</li>
							</ul>
							<p>
								<a href="/contact/" class="primaryLink">Contact us</a> and see how <em><strong>we build with you in mind</strong></em> !
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="serviceProjects greyBlock paddedSection">
				<div class="pageWidth">
					<h3 class="noMargin">Commercial Projects</h3>
					<div class="underline"></div>
				</div>
				<div id="portfolioWrapper" class="pageWidth portfolioWrapper">
					<?php get_template_part("/inc/projects/commercial/temmes-waterfront-workshop"); ?>
					<?php get_template_part("/inc/projects/commercial/the-oaks"); ?>
					<?php get_template_part("/inc/projects/commercial/appleton-yacht-club"); ?>
					<?php get_template_part("/inc/projects/commercial/clean-water"); ?>
					<?php get_template_part("/inc/projects/commercial/water-right"); ?>
					<?php get_template_part("/inc/projects/commercial/milksource"); ?>
					<?php get_template_part("/inc/projects/commercial/gillett"); ?>
					<?php get_template_part("/inc/projects/commercial/greenville"); ?>
					<?php get_template_part("/inc/projects/commercial/schmidt"); ?>
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
