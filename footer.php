<?php
/**
 * @package foxStructuresResponsive
 */
?>
</div><!-- #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info navWidth">
			<div class="col20">
				<a href="<?=site_url()?>" class="footerLogo">
					<?php get_template_part("/inc/svg-icons/fox-structures-logo"); ?>
					<span class="screen-reader-text">Go back to the homepage</span></a>
			</div>
			<div class="col80">
				<?php wp_nav_menu( array( 'theme_location' => 'footerNav', 'menu_id' => 'footer-menu' ) ); ?>
			</div>
		</div><!-- .site-info -->
		<?php get_template_part('/inc/footer/contact'); ?>
		<div id="copyright">
			<div class="copyrightContentWrap navWidth">
				<div id="copyrightWrap">
					<div id="copyrightContent">
						<?php get_template_part("/inc/svg-icons/copyright"); ?>
						<p>&nbsp;<script>document.write(new Date().getFullYear());</script> Fox Structures, Inc.</p>
					</div>
					<div id="closingLinks">
						<nav role="navigation" aria-label="Sub Footer Links">
							<a href="/privacy-policy/" class="borderRight" role="menuitem">Privacy Policy</a> |
							<a href="/sitemap/" class="borderRight" role="menuitem">Sitemap</a> |
							<a href="/contact/" class="borderRight" role="menuitem">Contact Us</a> |
						</nav>
							<a href="https://insightcreative.com" target="_blank">Website by Insight Creative, Inc.</a>
					</div>
				</div>
				<?php get_template_part("/inc/socialNav"); ?>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<script>
filterSelection("all");
</script>
<?php wp_footer(); ?>
</body>
</html>
