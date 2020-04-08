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
					<div id="introCopy" class="col80 limitWidth">
						<div class="blockText">
							<h2 class="noMargin">We’re Quality Storage and Mini Warehouse Specialists.</h2>
							<div class="underline"></div>
							<p>
								The team at Fox Structures specializes in building warehouse facilities of all
								sizes for a variety of purposes. To get the best possible result, we work with
								you on every step of the process to design and build a custom solution that exactly
								meets your needs. And we bring our attention to detail to each project—overseeing
								the installation of all doors and outside lighting—and finishing the drive area.
							</p>
							<p>
								Count on us for site design and comprehensive design/build services for steel and wood
								structures featuring all siding and roofing options, plus general contractor
								support—including all concrete work and coordination of sub contractors. The highest quality
								at a very competitive price—these are the hallmarks of Fox Structures mini warehouses
								and commercial storage facilities.
							</p>
							<p>
								<a href="/contact/" class="primaryLink">Contact us</a> and see how <em><strong>we build with you in mind</strong></em> !
							</p>
						</div>
					</div>
				</div>
			</section>
			<section class="serviceProjects greyBlock paddedSection">
				<div class="pageWidth">
					<h3 class="noMargin">Storage Projects</h3>
					<div class="underline"></div>
				</div>
				<div id="portfolioWrapper" class="pageWidth portfolioWrapper">
					<?php
					$the_query = new WP_Query( array(
						'post_type' => 'Portfolio',
						'tax_query' => array(
							array (
	  					'taxonomy' => 'Project Categories',
  					'field' => 'slug',
	  			'terms' => 'storage',
						)
					),
				) );
				while ( $the_query->have_posts() ) :
    		$the_query->the_post();
				////////////////////////////////
				// Get the category for the post
				////////////////////////////////
				$terms = get_the_terms( get_the_ID(), 'Project Categories' );
				if ( $terms && ! is_wp_error( $terms ) ) :
						$cat_links = array();
						foreach ( $terms as $term ) {
								$cat_links[] = $term->name;
						}
				$custom_cat = join( ", ", $cat_links );
				endif; ?>
					<a href="<?php the_permalink() ?>" class="column <?php echo $custom_cat ?>">
						<div class="featuredImageWrap">
							<div class="imageWrapper">
								<?php echo get_the_post_thumbnail( $post_id, 'full' ); ?><br>
								<?php get_template_part("/inc/portfolio-overlay"); ?>
							</div>
							<div class="projectInfo">
								<h5 class="employeeName"><span class="primaryText"><?php the_title(); ?></span></h5>
							</div>
						</div>
					</a>
					<?php endwhile;
				/* Restore original Post Data */
				wp_reset_postdata(); ?>
				</div>
			</section>
		</section>
	</main>
</div>
<?php
get_footer();
