<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package foxStructuresResponsive
 */

get_header();
?>

<section>
	<div class="mediumHero blueprintHero">
		<div class="fullWidth heroHeadingContainer">
			<div class="heroHeadingWrapper">
				<div class="heroHeading">
					<h1 class="noMargin">Fox Structures News</h1>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="pageWidth limitWidth">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php
		if ( have_posts() ) :
			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', get_post_type() );
			endwhile;
			the_posts_navigation();
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
get_footer();
