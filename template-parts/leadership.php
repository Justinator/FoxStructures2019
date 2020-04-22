<section id="pageContent" class="leadership paddedSection removeBottomPadding">
  <div class="centerText">
    <h3 class="noMargin">Meet Our Leadership Team</h3>
    <div class="centerUnderline"></div>
  </div>
  <div class="navWidth leadershipWrapper">
    <?php
    $staff = new WP_Query( array(
      'post_type' => 'staff',
      'tax_query' => array(
        array (
        'taxonomy' => 'Staff Categories',
        'field' => 'slug',
        'terms' => 'leadership-team',
        )
      ),
      'orderby' => 'title',
      'order' => 'ASC',
      'posts_per_page' => -1,
      )
    );
    while ( $staff->have_posts() ) :
    $staff->the_post();
    $background = get_the_post_thumbnail_url( $post_id, 'full' );
    $jobTitle = get_field('position_title');
    ?>
    <a href="<?php the_permalink(); ?>">
      <div class="leaderWrap">
        <div class="imageWrapper">
          <?php the_post_thumbnail(); ?>
          <div class="leaderImageOverlay"></div>
        </div>
        <div class="leaderInfo centerText">
          <h5 class="employeeName"><span class="primaryText"><?php the_title(); ?></span></h5>
          <div class="centerUnderline"></div>
          <h6><?php echo $jobTitle; ?></h6>
        </div>
      </div>
    </a>
    <?php endwhile;
    wp_reset_postdata();
    ?>
  </div>
</section>
<section class="employeeVideoWrapper paddedSection removeBottomPadding">
  <div class="centerText">
    <h3 class="noMargin">Meet Our Agricultural Team</h3>
    <div class="centerUnderline"></div>
  </div>
  <div class="navWidth leadershipWrapper">
    <?php
    $staff = new WP_Query( array(
      'post_type' => 'staff',
      'tax_query' => array(
        array (
        'taxonomy' => 'Staff Categories',
        'field' => 'slug',
        'terms' => 'agricultural-team',
        )
      ),
      'order' => 'ASC',
      'posts_per_page' => -1,
      )
    );
    while ( $staff->have_posts() ) :
    $staff->the_post();
    $background = get_the_post_thumbnail_url( $post_id, 'full' );
    $jobTitle = get_field('position_title');
    ?>
    <a href="<?php the_permalink(); ?>">
      <div class="leaderWrap">
        <div class="imageWrapper">
          <?php the_post_thumbnail(); ?>
          <div class="leaderImageOverlay"></div>
        </div>
        <div class="leaderInfo centerText">
          <h5 class="employeeName"><span class="primaryText"><?php the_title(); ?></span></h5>
          <div class="centerUnderline"></div>
          <h6><?php echo $jobTitle; ?></h6>
        </div>
      </div>
    </a>
    <?php endwhile;
    wp_reset_postdata();
    ?>
  </div>
</section>
