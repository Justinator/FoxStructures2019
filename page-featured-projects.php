<?php
/**
 * Template Name: Featured Case Study Projects
 *
 * @package foxStructuresResponsive
 */
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<section class="pageWidth paddedSection limitPortfolioWidth project">
			<div class="centerText">
				<h1 class="centerText portfolioTitle"><?php the_title(); ?></h1>
				<div class="centerUnderline"></div>
				<a href="/services/<?php the_field('project_category'); ?>/" class="primaryLink projectCategory"><?php the_field('project_category'); ?></a>
			</div>
			<?php
				// check if the flexible content field has rows of data
				if( have_rows('featured_projects_content') ):
				     // loop through the rows of data
				    while ( have_rows('featured_projects_content') ) : the_row();
							// Vars
							$image = get_sub_field('project_featured_image');
							$imageFull = get_sub_field('full_width_image');
							$imageFirstHalf = get_sub_field('image_first_half');
							$imageSecondHalf = get_sub_field('image_second_half');
							$imageTop = get_sub_field('image_top');
							$imageBottom = get_sub_field('image_bottom');
							$imageRight = get_sub_field('image_right');
				        if( get_row_layout() == 'intro_content' ):
					        $imageID = $image['ID'];
					        echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image portfolioFeaturedImage', 'data-sizes' => 'auto' ) );
									echo get_sub_field('project_description');
									echo '<div class="fullWidth flex-container">';
									if (get_sub_field('project_features')):
										echo '<div class="col30">' . '<h4 class="noMargin">Project Features</h4>';
										echo '<div class="underline"></div>';
										echo get_sub_field('project_features');
										echo '</div>';
									endif;
									if (get_sub_field('specs')):
										echo '<div class="col30">' . '<h4 class="noMargin">Specs</h4>';
										echo '<div class="underline"></div>';
										echo get_sub_field('specs');
										echo '</div>';
									endif;
									if (get_sub_field('location')):
										echo '<div class="col30">' . '<h4 class="noMargin">Location</h4>';
										echo '<div class="underline"></div>';
										echo get_sub_field('location');
										echo '</div>';
									endif;
									echo '</div>';
								elseif( get_row_layout() == 'testimonial' ):
									echo '<div class="fullWidth centerText greyBlock smallPaddedSection testimonialWrapper">';
									echo '<div class="testimonial">';
									echo '<p>' . get_sub_field('client_testimonial') . '</p>';
									echo '<h5 class="noMargin">';
									echo get_sub_field('testminonial_author');
									echo '</h5>';
									echo '<div class="centerUnderline"></div>';
									echo '<p>' . get_sub_field('author_title') . '</p>';
									echo '</div>';
									echo '</div>';
								elseif( get_row_layout() == 'image_full_width' ):
									echo '<div>';
									$imageID = $imageFull['ID'];
									echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
									echo '</div>';
								elseif( get_row_layout() == 'image_half_width' ):
									echo '<div class="flex-container">';
									echo '<div class="col50 smallMarginRight">';
									$imageID = $imageFirstHalf['ID'];
									echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
									echo '</div>';
									echo '<div class="col50 smallMarginLeft">';
									$imageID = $imageSecondHalf['ID'];
									echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
									echo '</div>';
									echo '</div>';
								elseif( get_row_layout() == 'image_double_stacked' ):
									echo '<div class="flex-container centerAlignedContainer">';
									echo '<div class="col50 smallMarginRight">';
									$imageID = $imageTop['ID'];
									echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
									$imageID = $imageBottom['ID'];
									echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
									echo '</div>';
									echo '<div class="col50 smallMarginLeft removeBottomMarginMobile">';
									$imageID = $imageRight['ID'];
									echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
									echo '</div>';
									echo '</div>';
								elseif( get_row_layout() == 'video_container' ):
									echo '<div class="videoWrapper">';
									// get iframe HTML
									$iframe = get_sub_field('video');
									// use preg_match to find iframe src
									preg_match('/src="(.+?)"/', $iframe, $matches);
									$src = $matches[1];
									// add extra params to iframe src
									$params = array(
									    'controls'    => 0,
									    'hd'        => 1,
									    'autohide'    => 1
									);
									$new_src = add_query_arg($params, $src);
									$iframe = str_replace($src, $new_src, $iframe);
									// add extra attributes to iframe html
									$attributes = 'frameborder="0"';
									$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
									// echo $iframe
									echo $iframe;
									echo '</div>';
				        endif;
				    endwhile;
				else :
				    // no layouts found
				endif;
			?>
		</section>
		<section class="limitPortfolioWidth moreFeaturedProjects smallPaddedSection">
			<div class="pageWidth">
				<h3 class="centerText noMargin">More Featured Projects</h3>
				<div class="centerUnderline"></div>
			</div>
			<div class="moreFeaturedProjectsWrapper">
				<?php get_template_part("/inc/projects/commercial/clean-water-center-remodel"); ?>
				<?php get_template_part("/inc/projects/agricultural/kesler-family-farm"); ?>
				<?php get_template_part("/inc/projects/commercial/temmes-waterfront-workshop"); ?>
			</div>
		</section>
	</main>
</div>
<script>
filterSelection("all");
</script>
<?php
get_footer();
