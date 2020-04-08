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
			<?php get_template_part("/inc/leadership"); ?>
			<?php get_template_part("/inc/ag-team"); ?>
			<section class="navWidth paddedSection">
				<?php get_template_part('inc/CTA')?>
			</section>
		</section>
	</main>
</div>
<?php
get_footer();
