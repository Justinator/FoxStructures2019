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
			<section id ="serviceIntro" class="paddedSection">
				<div class="limitWidth flex-container">
					<div class="col20">
						<?php get_sidebar(); ?>
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
					<?php
					$the_query = new WP_Query( array(
						'post_type' => 'Portfolio',
						'tax_query' => array(
							array (
	  					'taxonomy' => 'Project Categories',
  					'field' => 'slug',
	  			'terms' => 'commercial',
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
