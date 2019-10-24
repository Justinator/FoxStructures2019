<?php
/**
 * @package foxStructuresResponsive
 */
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<section id ="thankYou">
			<div class="pageWidth limitWidth">
				<img src="/wp-content/uploads/2018/12/Fox_GuyGroupMedium.jpg" class="image">
				<h2 class="noMargin">Thank You</h2>
				<div class="underline"></div>
				<p>
					Your message has been successfully sent. Thank you for your interest in our work!
				</p>
				<p>
					Follow us on social media
				</p>
				<?php get_template_part("/inc/socialNav"); ?>
				<?php get_template_part("/inc/projects/featured-projects"); ?>
			</div>
		</section>
	</main>
</div>
<script>
filterSelection("all");
</script>
<?php
get_footer();
