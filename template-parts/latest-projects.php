<div class="relatedposts">
  <?php
    $the_query = new WP_Query( array(
      'post_type' => 'Portfolio',
      'order' => 'DESC',
      'posts_per_page' => 3,
      )
    );?>
  <div class="pageWidth">
    <h3 class="centerText noMargin">Featured Projects</h3>
    <div class="centerUnderline"></div>
  </div>
  <section id="relatedProjects" class="limitPortfolioWidth moreFeaturedProjects smallPaddedSection">
    <div class="moreFeaturedProjectsWrapper">
      <?php
      while ( $the_query->have_posts() ) :
      $the_query->the_post();
      ?>
      <div class="relatedPostWrap">
        <a href="<?php echo get_permalink(); ?>">
          <div class="featuredImageWrap">
            <div class="imageWrapper">
              <?php echo get_the_post_thumbnail( $post_id, 'full' ); ?><br />
              <?php get_template_part("/inc/portfolio-overlay"); ?>
            </div>
            <div class="projectInfo">
              <h5 class="employeeName"><?php echo get_the_title(); ?></h5>
            </div>
          </div>
        </a>
      </div>
    <?php endwhile; ?>
    </div>
  </section>
</div>
