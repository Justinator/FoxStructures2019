<?php
/**
 * @package foxStructuresResponsive
 */
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<section id="sitemapEntry">
			<div class="pageWidth">
				<h1 class="primaryText">Sitemap</h1>
			</div>
		</section>
		<div class="pageWidth">
			<h3>Pages</h3>
				<?php wp_list_pages(array('sort_column' => 'post_title', 'exclude' => '419,817,421', 'title_li' => ' ', 'depth' => 0)); ?>
			<h3>News</h3>
			<ul class="newsPosts">
				<?php wp_get_archives('type=alpha'); ?>
			</ul>
		</div>
	</main>
</div>
<?php
get_footer();
