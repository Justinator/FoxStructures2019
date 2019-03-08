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

							<h1 class="noMargin">See our Successful Projects for Yourself.</h1>

						</div>

					</div>

				</div>


			</div>

		</section>

		<section id="pageContent">

			<section id ="foxStructuresIntro" class="paddedSection">

				<div class="fullWidth flex-container centerAlignedContainer">

					<div class="limitWidth">

						<p>
							Exemplary finished projects and satisfied customers are our greatest reward. Take a look at just
							some of our completed projects and see why over 80% of our business today comes from repeat clients.
						</p>
						<p>
							Browse some of the unique projects we’ve built in the past. Then contact us and see why our
							building success starts with you!
						</p>

					</div>

				</div>

			</section>

			<section id="featuredProjects">

				<div class="pageWidth centerText">

					<h3 class="noMargin">Featured Building Projects</h3>

					<div class="centerUnderline"></div>

				</div>

				<div class="pageWidth flex-container">

					<div class="col50 paddedWrapper">

						<div class="portFeaturedProjectWrapper">

							<div class="featuredProjectOverlay"></div>

							<div class="featuredProjectContent">

								<img src="/wp-content/uploads/2019/02/OaksIntExtStillsMediumSquare.jpg" class="featuredProjectImage">

								<h4 class="featuredProjectTitle"><span class="projectTitleSpan">The Oaks Golf Course</span></h4>

							</div>

						</div>

					</div>

					<div class="col50 paddedWrapper">

						<div class="outerWrapper">

							<div class="portFeaturedProjectWrapper">

								<div class="featuredProjectOverlay"></div>

								<div class="featuredProjectContent">

									<img src="/wp-content/uploads/2017/09/tinedale-farms.jpg" class="featuredProjectImage">

									<h4 class="featuredProjectTitle"><span class="projectTitleSpan">Vir-Clar Farms</span></h4>

								</div>

							</div>

						</div>

						<div class="outerWrapper">

							<div class="portFeaturedProjectWrapper">

								<div class="featuredProjectOverlay"></div>

								<div class="featuredProjectContent">

									<img src="/wp-content/uploads/2017/09/ted-schott-calf-barn.jpg" class="featuredProjectImage">

									<h4 class="featuredProjectTitle"><span class="projectTitleSpan">Vir-Clar Farms</span></h4>

								</div>

							</div>

						</div>

					</div>

				</div>

			</section>

			<section class="portfolio paddedSection">

				<div class="pageWidth">

					<h4>Filter by project type</h4>

					<div id="myBtnContainer">

						<button class="primaryButton active" onclick="filterSelection('all')"> All</button>
					  <button class="primaryButton" onclick="filterSelection('agricultural')"> Agricultural</button>
						<button class="primaryButton" onclick="filterSelection('commercial')"> Commercial</button>
					  <button class="primaryButton" onclick="filterSelection('equestrian')"> Equestrian</button>
					  <button class="primaryButton" onclick="filterSelection('residential')"> Residential</button>
						<button class="primaryButton" onclick="filterSelection('storage')"> Storage</button>
						<button class="primaryButton" onclick="filterSelection('welding')"> Welding</button>

					</div>

				</div>

				<div class="pageWidth portfolioWrapper">

					<a href="/leadership/mark-mashlan/" class="column commercial">

						<div class="featuredImageWrap">

							<div class="imageWrapper">

								<img src="/wp-content/uploads/2018/12/OaksIntExtStillsMedium.jpg" class="image">

								<div class="ImageOverlay"></div>

							</div>

							<div class="projectInfo">

								<h5 class="employeeName"><span class="primaryText">The Oaks Golf Club</span></h5>

							</div>

						</div>

					</a>

					<a href="/leadership/mark-mashlan/" class="column commercial">

						<div class="featuredImageWrap">

							<div class="imageWrapper">

								<img src="/wp-content/uploads/2018/12/OaksIntExtStillsMedium.jpg" class="image">

								<div class="ImageOverlay"></div>

							</div>

							<div class="projectInfo">

								<h5 class="employeeName"><span class="primaryText">The Oaks Golf Club</span></h5>

							</div>

						</div>

					</a>

					<a href="/leadership/mark-mashlan/" class="column agricultural">

						<div class="featuredImageWrap">

							<div class="imageWrapper">

								<img src="/wp-content/uploads/2018/12/OaksIntExtStillsMedium.jpg" class="image">

								<div class="ImageOverlay"></div>

							</div>

							<div class="projectInfo">

								<h5 class="employeeName"><span class="primaryText">The Oaks Golf Club</span></h5>

							</div>

						</div>

					</a>

					<a href="/leadership/mark-mashlan/" class="column equestrian">

						<div class="featuredImageWrap">

							<div class="imageWrapper">

								<img src="/wp-content/uploads/2018/12/OaksIntExtStillsMedium.jpg" class="image">

								<div class="ImageOverlay"></div>

							</div>

							<div class="projectInfo">

								<h5 class="employeeName"><span class="primaryText">The Oaks Golf Club</span></h5>

							</div>

						</div>

					</a>

					<a href="/leadership/mark-mashlan/" class="column residential">

						<div class="featuredImageWrap">

							<div class="imageWrapper">

								<img src="/wp-content/uploads/2018/12/OaksIntExtStillsMedium.jpg" class="image">

								<div class="ImageOverlay"></div>

							</div>

							<div class="projectInfo">

								<h5 class="employeeName"><span class="primaryText">The Oaks Golf Club</span></h5>

							</div>

						</div>

					</a>

					<a href="/leadership/mark-mashlan/" class="column commercial">

						<div class="featuredImageWrap">

							<div class="imageWrapper">

								<img src="/wp-content/uploads/2018/12/OaksIntExtStillsMedium.jpg" class="image">

								<div class="ImageOverlay"></div>

							</div>

							<div class="projectInfo">

								<h5 class="employeeName"><span class="primaryText">The Oaks Golf Club</span></h5>

							</div>

						</div>

					</a>

					<a href="/leadership/mark-mashlan/" class="column storage">

						<div class="featuredImageWrap">

							<div class="imageWrapper">

								<img src="/wp-content/uploads/2018/12/OaksIntExtStillsMedium.jpg" class="image">

								<div class="ImageOverlay"></div>

							</div>

							<div class="projectInfo">

								<h5 class="employeeName"><span class="primaryText">The Oaks Golf Club</span></h5>

							</div>

						</div>

					</a>

					<a href="/leadership/mark-mashlan/" class="column agricultural">

						<div class="featuredImageWrap">

							<div class="imageWrapper">

								<img src="/wp-content/uploads/2018/12/OaksIntExtStillsMedium.jpg" class="image">

								<div class="ImageOverlay"></div>

							</div>

							<div class="projectInfo">

								<h5 class="employeeName"><span class="primaryText">The Oaks Golf Club</span></h5>

							</div>

						</div>

					</a>

				</div>

				<div class="pageWidth buttonWrapper">

					<div class="centerButton">

						<a href="/portfolio/" class="primaryButton">View more building projects</a>

					</div>

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
