<?php
/**
 * @package foxStructuresResponsive
 */
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php get_template_part("/template-parts/hero"); ?>
		<section id="pageContent">
			<section id="serviceIntro" class="paddedSection">
				<div class="limitWidth flex-container">
					<div class="col20">
						<?php get_sidebar(); ?>
					</div>
					<div id="introCopy" class="col80 limitWidth">
						<div class="blockText">
							<h2 class="noMargin">Our Agricultural Expertise can Help You Grow.</h2>
							<div class="underline"></div>
							<p>
								Fox Structures designs and builds unique agricultural facilities for customers in northeast Wisconsin.
								Our significant experience means we understand the specialized challenges facing the agricultural industry.
							</p>
							<p>
								From 100,000-sq.-ft. freestall barns to utility buildings to curtain installation, each structure
								we build is designed and tailored to your operation and herd management needs. Ask around, Fox
								Structures provides complete design/build services and project management for steel and wood frame
								structures, performs all erection and concrete work, addresses details like doors and lighting and
								guarantees the highest quality work with competitive pricing.
							</p>
							<ul>
								<li>Freestall Barns</li>
								<li>Milking Parlors</li>
								<li>Youngstock Facilities</li>
								<li>Maintenance Facilities</li>
								<li>Commodity Buildings</li>
								<li>Utility/Storage Buildings</li>
								<li>Special Needs Buildings</li>
								<li>Equestrian Facilities</li>
								<li>Maintenance/Curtain Repair</li>
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
					<h3 class="noMargin">Agricultural Projects</h3>
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
		  				'terms' => 'agricultural',
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
