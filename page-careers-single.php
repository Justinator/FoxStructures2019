<?php
/**
 * Template Name: Careers Single Page
 * @package foxStructuresResponsive
 */
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php get_template_part("/template-parts/hero"); ?>
		<section id="pageContent">
			<section id ="serviceIntro" class="paddedSection">
				<div class="limitWidth flex-container-reverse">
					<div class="col20">
						<?php get_sidebar(); ?>
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
