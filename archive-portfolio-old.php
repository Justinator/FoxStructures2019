<?php
/**
* The template for displaying archive pages
* Template Name: Portfolio Archive
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package changeCatalystResponsive
*/
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<section>
			<div class="mediumHero portfolioHero">
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
						<div class="blockText">
							<p>
								Exemplary finished projects and satisfied customers are our greatest reward. Take a look at just
								some of our completed projects and see why over 80% of our business today comes from repeat clients.
							</p>
							<p>
								Browse some of the unique projects we’ve built in the past. Then <a href="/contact/" class="primaryLink">contact us</a>
								and see how <em><strong>we build with you in mind</strong></em> !
							</p>
						</div>
					</div>
				</div>
			</section>
			<section id="featuredProjects">
				<div class="pageWidth centerText">
					<h3 class="noMargin">Featured Building Projects</h3>
					<div class="centerUnderline"></div>
				</div>
        <?php
					// check if the flexible content field has rows of data
					if( have_rows('featured_projects_content') ):
            // loop through the rows of data
  			    while ( have_rows('featured_projects_content') ) : the_row();
  						// Vars
  						$image = get_sub_field('project_featured_image', 'option');
  						$imageFull = get_sub_field('full_width_image', 'option');
  						$imageFirstHalf = get_sub_field('image_first_half', 'option');
  						$imageSecondHalf = get_sub_field('image_second_half', 'option');
  						$imageTop = get_sub_field('image_top', 'option');
  						$imageBottom = get_sub_field('image_bottom', 'option');
  						$imageLeft = get_sub_field('image_left', 'option');
              if( get_row_layout() == 'image_double_stacked' ):
                ?>
                  <div id="featuredThree" class="pageWidth flex-container centerAlignedContainer">
                    <div class="col50 smallMarginRight removeBottomMarginMobile">
                      <a href="<?php echo get_sub_field('project_1_url', 'option') ?> "><span class="screen-reader-text"><?php echo get_sub_field('project_1_screen_reader_text', 'option') ?></span>
                        <div class="portFeaturedProjectWrapper">
                          <div class="featuredProjectOverlay"></div>
                          <div class="featuredProjectContent">
                            <?php
                            $imageID = $imageLeft['ID'];
                            echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
                            ?>
                            <h4 class="featuredProjectTitle"><span class="projectTitleSpan"><?php echo get_sub_field('project_1_title', 'option') ?></span></h4>
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="col50 smallMarginLeft">
                      <div class="outerWrapper">
                        <a href="<?php echo get_sub_field('project_2_url', 'option') ?>"><span class="screen-reader-text"><?php echo get_sub_field('project_2_screen_reader_text', 'option') ?></span>
                          <div class="portFeaturedProjectWrapper">
                            <div class="featuredProjectOverlay"></div>
                            <div class="featuredProjectContent">
                              <?php
                              $imageID = $imageTop['ID'];
                              echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
                              ?>
                              <h4 class="featuredProjectTitle"><span class="projectTitleSpan"><?php echo get_sub_field('project_2_title', 'option') ?></span></h4>
                            </div>
                          </div>
                          </a>
                        </div>
                        <div class="outerWrapper">
                          <a href="<?php echo get_sub_field('project_3_url', 'option') ?>"><span class="screen-reader-text"><?php echo get_sub_field('project_3_screen_reader_text', 'option') ?></span>
                            <div class="portFeaturedProjectWrapper">
                              <div class="featuredProjectOverlay"></div>
                              <div class="featuredProjectContent">
                                <?php
                                $imageID = $imageBottom['ID'];
                                echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
                                ?>
                                <h4 class="featuredProjectTitle"><span class="projectTitleSpan"><?php echo get_sub_field('project_3_title', 'option') ?></span></h4>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  <?php
                endif;
             endwhile;
           endif;?>
			</section>
			<section class="portfolio paddedSection">
				<div class="pageWidth">
					<h4>Filter by project type</h4>
					<div id="myBtnContainer">
						<button class="filterButton active" onclick="filterSelection('all')"> All</button><span class="screen-reader-text">View all projects</span>
					  <button class="filterButton" onclick="filterSelection('agricultural')"> Agricultural</button><span class="screen-reader-text">Filter Agricultural Projects</span>
						<button class="filterButton" onclick="filterSelection('commercial')"> Commercial</button><span class="screen-reader-text">Filter Commercial Projects</span>
					  <button class="filterButton" onclick="filterSelection('equestrian')"> Equestrian</button><span class="screen-reader-text">Filter Equestrian Projects</span>
					  <button class="filterButton" onclick="filterSelection('residential')"> Residential</button><span class="screen-reader-text">Filter Residential Projects</span>
						<button class="filterButton" onclick="filterSelection('storage')"> Storage</button><span class="screen-reader-text">Filter Storage Projects</span>
						<!--<button class="filterButton" onclick="filterSelection('welding')"> Welding</button>-->
					</div>
				</div>
				<div id="portfolioWrapper" class="pageWidth portfolioWrapper">
          <?php
          query_posts(array(
            'post_type' => 'portfolio',
            'order' => 'DESC'
          )); ?>
          <?php
          while (have_posts()) : the_post(); ?>
          <?php
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
  				?>
  				<?php endif; ?>
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
        <?php endwhile; ?>
				</div>
			</section>
		</section>
	</main>
</div>
<?php
get_footer();
