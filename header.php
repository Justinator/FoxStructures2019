<?php
/**
 * @package foxStructuresResponsive
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="/wp-content/uploads/2019/03/favicon.png" rel="shortcut icon">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="  crossorigin="anonymous"></script>
	<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-13074741-46"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-13074741-46');
	</script>
</head>
<body <?php body_class(); ?>>
<a class="screenReaderSkipToContent" href="#primary" tabindex="0">Skip to main content</a>
<nav role="navigation" aria-label="mobile navigation">
	<div class="mobile-menu">
		<?php wp_nav_menu( array( 'theme_location' => 'mobileNav', 'menu_id' => 'mobile-menu' ) ); ?>
	</div>
</nav>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
		<div id="searchFormWrap" class="pageWidth">
		  <?php get_search_form(); ?>
		</div>
		<?php get_template_part('/inc/header/secondary'); ?>
		<?php get_template_part('/inc/header/primary'); ?>
	</header><!-- #masthead -->
	<div id="content" class="site-content">
