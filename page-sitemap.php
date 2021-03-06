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
			<div class="flex-container">
				<div class="col50">
					<h3>Pages</h3>
						<?php wp_list_pages(array('sort_column' => 'post_title', 'exclude' => '419,817,421', 'title_li' => ' ', 'depth' => 0)); ?>
					<h3>Staff</h3>
					<?php
					$staff = new WP_Query( array(
						'post_type' => 'staff',
						'order' => 'ASC',
						'orderby' => 'title',
						)
					);
					?>
					<ul>
					<?php
					while ( $staff->have_posts() ) :
		  		$staff->the_post();
					?>
						<li class="page_item">
							<a href="<?php the_permalink() ?>">
	            	<?php the_title(); ?>
	          	</a>
						</li>
					<?php endwhile;
					wp_reset_postdata();
					?>
					</ul>
					<h3>News</h3>
					<ul class="newsPosts">
						<?php wp_get_archives('type=alpha'); ?>
					</ul>
				</div>
				<div class="col50">
					<h3>Portfolio</h3>
					<?php
					$the_query = new WP_Query( array(
						'post_type' => 'Portfolio',
						'order' => 'ASC',
						'orderby' => 'title',
						)
					);
					?>
					<ul>
					<?php
					while ( $the_query->have_posts() ) :
		  		$the_query->the_post();
					?>
						<li class="page_item">
							<a href="<?php the_permalink() ?>">
	            	<?php the_title(); ?>
	          	</a>
						</li>
					<?php endwhile;
					wp_reset_postdata();
					?>
					</ul>
				</div>
			</div>
		</div>
	</main>
</div>
<?php
get_footer();
