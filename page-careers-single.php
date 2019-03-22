<?php
/**
 * This is the template for all individual careers posts
 *
 * Template Name: Careers Single Page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package foxStructuresResponsive
 */
get_header();

?>

<div id="primary" class="content-area">

	<main id="main" class="site-main">

		<section>

			<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

			<div class="mediumHero" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover; background-position:center;">

				<div class="fullWidth heroHeadingContainer">

					<div class="heroHeadingWrapper">

						<div class="heroHeading">

							<h1>Careers</h1>

						</div>

					</div>

				</div>


			</div>

		</section>

		<section id="pageContent">

			<section id ="serviceIntro" class="paddedSection">

				<div class="limitWidth flex-container">

					<div class="col20">

						<?php get_template_part("/inc/careers-sidebar"); ?>

					</div>

					<div id="introCopy" class="col80 limitWidth">

						<div class="blockText">

							<?php
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content', 'careers' );
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						endwhile; // End of the loop.
						?>

						</div>

					</div>

				</div>

			</section>

		</section>

	</main>

</div>

<?php

get_footer();
