<?php
global $post;
$parentid = $post->post_parent;
$featuredImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
$postid = get_the_ID();
if ( $postid == '62' ) {
  ?>
  <section id="services">
    <div class="mediumHero" style="background-image: url('<?php echo $featuredImg[0]; ?>'); background-repeat: no-repeat; background-size: cover; background-position:center;">
      <div class="fullWidth heroHeadingContainer">
        <div class="heroHeadingWrapper">
          <div class="heroHeading">
            <h1 class="noMargin">Fox Structures is a Full-service Agricultural, Commercial and Residential Contractor.</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
} elseif ( $postid == '6' ) {
  ?>
  <section id="aboutHero">
    <div class="mediumHero" style="background: url('<?php echo $featuredImg[0]; ?>') no-repeat; background-size: cover; background-position:center;">
      <div class="fullWidth heroHeadingContainer">
        <div class="heroHeadingWrapper">
          <div class="heroHeading">
            <h1 class="noMargin">Fox Structures—Experts at Building Success.</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
} elseif ( $postid == '10' || $parentid == '10' ) {
  ?>
  <section>
    <div class="mediumHero" style="background: url('<?php echo $featuredImg[0]; ?>') no-repeat; background-size: cover; background-position:center;">
      <div class="fullWidth heroHeadingContainer">
        <div class="heroHeadingWrapper">
          <div class="heroHeading">
            <h1>Careers</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
} else {
  ?>
  <section>
    <div class="mediumHero" style="background-image: url('<?php echo $featuredImg[0]; ?>'); background-repeat: no-repeat; background-size: cover; background-position:center;">
      <div class="fullWidth heroHeadingContainer">
        <div class="heroHeadingWrapper">
          <div class="heroHeading">
            <h1 class="noMargin"><?php echo get_the_title(); ?></h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
}
?>
