<?php
/**
 * @package foxStructuresResponsive
 */
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php get_template_part("/inc/hero"); ?>
		<section id="pageContent">
			<section id ="serviceIntro" class="paddedSection">
				<div class="limitWidth flex-container">
					<div class="col20">
						<?php get_sidebar(); ?>
					</div>
					<div class="col80 limitWidth">
						<div id="introCopy">
							<div class="blockText">
								<?php
								while ( have_posts() ) :
									the_post();
									get_template_part( 'template-parts/content', 'page' );
								endwhile; // End of the loop.
								?>
							</div>
						</div>
					</div>
			</div>
			</section>
			<?php get_template_part("/inc/services-overview"); ?>
		</section>
	</main>
</div>
<?php
get_footer();
