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
							<h2 class="noMargin">Fox Structures Brings Quality Construction Home.</h2>
							<div class="underline"></div>
							<p>
								When it comes to residential construction, the choices and decisions may seem endless.
								One choice that’s easy is Fox Structures! We take the time to learn your needs and
								expectations such as space for your hobbies, a cozy lake retreat or an attractive storage
								shed. Put Fox Structures’ years of experience, attention to detail and craftsmanship to
								work on your next residential project.
							</p>
							<ul>
								<li>Cottages</li>
								<li>Garages</li>
								<li>Residential Storage Buildings</li>
								<li>Hobby Buildings</li>
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
					<h3 class="noMargin">Residential Projects</h3>
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
	  			'terms' => 'residential',
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
