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
		<section class="pageWidth paddedSection limitPortfolioWidth">
			<div class="centerText">
				<h1 class="centerText portfolioTitle">The Oaks Golf Club</h1>
				<div class="centerUnderline"></div>
				<a href="/services/commercial/" class="primaryLink">Commercial</a>
			</div>
			<img src="/wp-content/uploads/2019/03/OaksGolfClubExteriorLarge.jpg" class="image portfolioFeaturedImage">
			<p>
			Fox Structures collaborated with the owners of The Oaks Golf Course in Cottage Grove to convert their existing retail space into a new office and basement storage area. The remodel also included an approximate 1,500-square-foot addition to the clubhouse Fox Structures built in 2004. As the builders of the original clubhouse, they were able to perfectly match all materials for a beautiful, seamless interior and exterior appearance. Fox Structures kept the work site clean and professional so the clubhouse could remain open for business during construction.
			</p>
		</section>
		<section id="pageContent" class="limitPortfolioWidth">
			<section class="project">
				<div class="fullWidth flex-container">
					<div class="col30">
						<h4 class="noMargin">Project Features</h4>
						<div class="underline"></div>
						<ul>
							<li>Space-saving Amish barn doors</li>
							<li>Pre-cast concrete flooring for storage</li>
							<li>Standing seam metal roof with asphalt shingles</li>
						</ul>
					</div>
					<div class="col30">
						<h4 class="noMargin">Specs</h4>
						<div class="underline"></div>
						<ul>
							<li>1,536 sq. foot remodel of 6,517 sq. foot building</li>
							<li>780 sq. foot Pro Shop addition</li>
						</ul>
					</div>
					<div class="col30">
						<h4 class="noMargin">Location</h4>
						<div class="underline"></div>
						<p>
							4740 Pierceville Rd<br>
							Cottage Grove, WI 53527
						</p>
					</div>
				</div>
				<div class="fullWidth centerText greyBlock smallPaddedSection">
					<div class="testimonial">
						<p>
							“We have used Fox Structures for other projects in the past, and they have always produced quality work. They were the original builders of our clubhouse, and have always stood behind their work, so it seemed like a no-brainer to bring them on for our addition. Everyone at Fox Structures was always available and quick to answer questions and handle changes or issues with the job. They are so easy to work with—we have already called them for another small project. I would absolutely recommend them to others.”
						</p>
						<h5 class="noMargin">
						Jessica Blaska-Grady
						</h5>
						<div class="centerUnderline"></div>
						<p>
						Manager, The Oaks Golf Course
						</p>
					</div>
				</div>
				<div class="flex-container centerAlignedContainer">
					<div class="col50 paddedWrapper">
						<div class="outerWrapper">
							<img src="/wp-content/uploads/2019/03/oaks-clubhouse-1-cropped-3.jpg" class="featuredProjectImage">
						</div>
						<div class="outerWrapper">
							<img src="/wp-content/uploads/2019/03/oaks-clubhouse-cropped.jpg" class="featuredProjectImage">
						</div>
					</div>
					<div class="col50 paddedWrapper removeBottomMarginMobile">
						<img src="/wp-content/uploads/2019/03/OaksGolfClubDroneShotsSquare.jpg" class="featuredProjectImage">
					</div>
				</div>
				<div id="largeDroneImage" class="tinyPaddedSection paddedSideWrapper">
					<img src="/wp-content/uploads/2019/03/OaksDroneShotsLarge.jpg" class="image largePortfolioImage">
				</div>
				<div class="flex-container paddedWrapper">
					<div class="col50 smallMarginRight">
						<img src="/wp-content/uploads/2018/12/OaksIntExtStills3Medium.jpg" class="image">
					</div>
					<div class="col50 smallMarginLeft">
						<img src="/wp-content/uploads/2018/12/OaksIntExtStills2Medium.jpg" class="image">
					</div>
				</div>
			</section>
			<section class="moreFeaturedProjects smallPaddedSection">
				<div class="pageWidth">
					<h3 class="centerText noMargin">More Featured Projects</h3>
					<div class="centerUnderline"></div>
				</div>
				<div class="moreFeaturedProjectsWrapper">
					<?php get_template_part("/inc/projects/commercial/water-right"); ?>
					<?php get_template_part("/inc/projects/commercial/hidden-hollow"); ?>
					<?php get_template_part("/inc/projects/agricultural/forest-brook-farms"); ?>
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
