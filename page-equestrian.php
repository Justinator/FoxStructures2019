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
		<?php get_template_part("/template-parts/hero"); ?>
		<section id="pageContent">
			<section id ="serviceIntro" class="paddedSection">
				<div class="limitWidth flex-container">
					<div class="col20">
						<?php get_sidebar(); ?>
					</div>
					<div id="introCopy" class="col80 limitWidth">
						<div class="blockText">
							<h2 class="noMargin">We Build Winning Equestrian Facilities.</h2>
							<div class="underline"></div>
							<p>
								People and horses have a special bond. Your horse is an important part of your life and you
								want the best possible environment to help them thrive. When it comes to superior facilities
								to accommodate horses, we have years of experience building unique and functional riding arenas,
								stall barns, storage areas, run-in shelters and more. No matter what you are looking for in an
								equestrian facility, we’ll build on your vision to create an end product that meets your needs
								and exceeds your expectations.
							</p>
							<ul>
								<li>Tack Rooms</li>
								<li>Stall Barns</li>
								<li>Run-In Shelters</li>
								<li>Feed Storage</li>
								<li>Wash Stalls</li>
								<li>Riding Arenas</li>
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
					<h3 class="noMargin">Equestrian Projects</h3>
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
	  				'terms' => 'equestrian',
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
