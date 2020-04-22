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
		<?php get_template_part("/template-parts/hero"); ?>
		<?php get_template_part('/template-parts/leadership'); ?>
		<section class="navWidth paddedSection">
			<?php get_template_part('template-parts/cta')?>
		</section>
	</main>
</div>
<?php
get_footer();
