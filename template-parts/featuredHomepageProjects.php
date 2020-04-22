<section class="featuredProjects paddedSection">
  <div class="pageWidth centerText">
    <h3 class="noMargin">Featured Building Projects</h3>
    <div class="centerUnderline"></div>
  </div>
  <div class="fullWidth wrappedFlexContainer marginTop">
    <div class="featuredProjectWrapper">
      <a href="<?php the_field('featured_project_url_1'); ?>">
        <div class="featuredProjectOverlay"></div>
        <div class="featuredProjectContent">
          <?php
          $image = get_field('project_square_cover_image_1');
          $imageID = $image['ID'];
          echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'featuredProjectImage', 'data-sizes' => 'auto' ) );
          ?>
          <h5 class="featuredProjectTitle"><span class="projectTitleSpan"><?php the_field('featured_project_title_1'); ?></span></h5>
        </div>
      </a>
    </div>
    <div class="featuredProjectWrapper">
      <a href="<?php the_field('featured_project_url_2'); ?>">
        <div class="featuredProjectOverlay"></div>
        <div class="featuredProjectContent">
          <?php
          $image = get_field('project_square_cover_image_2');
          $imageID = $image['ID'];
          echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'featuredProjectImage', 'data-sizes' => 'auto' ) );
          ?>
          <h5 class="featuredProjectTitle"><span class="projectTitleSpan"><?php the_field('featured_project_title_2'); ?></span></h5>
        </div>
      </a>
    </div>
    <div class="featuredProjectWrapper">
      <a href="<?php the_field('featured_project_url_3'); ?>">
        <div class="featuredProjectOverlay"></div>
        <div class="featuredProjectContent">
          <?php
          $image = get_field('project_square_cover_image_3');
          $imageID = $image['ID'];
          echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'featuredProjectImage', 'data-sizes' => 'auto' ) );
          ?>
          <h5 class="featuredProjectTitle"><span class="projectTitleSpan"><?php the_field('featured_project_title_3'); ?></span></h5>
        </div>
      </a>
    </div>
    <div class="featuredProjectWrapper">
      <a href="<?php the_field('featured_project_url_4'); ?>">
        <div class="featuredProjectOverlay"></div>
        <div class="featuredProjectContent">
          <?php
          $image = get_field('project_square_cover_image_4');
          $imageID = $image['ID'];
          echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'featuredProjectImage', 'data-sizes' => 'auto' ) );
          ?>
          <h5 class="featuredProjectTitle"><span class="projectTitleSpan"><?php the_field('featured_project_title_4'); ?></span></h5>
        </div>
      </a>
    </div>
  </div>
  <div class="pageWidth buttonWrapper">
    <div class="centerButton">
      <a href="/portfolio/" class="primaryButton">View all building projects</a>
    </div>
  </div>
</section>
