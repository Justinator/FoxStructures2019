<div id="site-navigation" class="main-navigation">
  <nav role="navigation" aria-label="primary navigation">
    <div class="navWidth menuLinkWrap">
      <a href="<?=site_url()?>" class="logoWrap">
        <?php get_template_part("/inc/svg-icons/fox-structures-logo"); ?><span class="screen-reader-text">Go back to the homepage</span>
      </a>
      <div class="menu-main-menu-container-outer" role="menu" aria-label="Main Menu">
        <?php wp_nav_menu( array( 'theme_location' => 'Primary', 'menu_id' => 'primary-menu' ) ); ?>
        <div class = "menuButtonWrap" aria-label="mobile menu toggle button" tabindex="0">
          <div class = "menuTextWrap">
            <span class = "menuText">MENU</span>
            <button class="hamburger hamburger--collapse" type="button" aria-label="Mobile menu button" aria-expanded="false">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
          </div>
        </div>
        <div id="searchWrap">
          <button id="search" aria-label="site-search">
            <?php get_template_part("/inc/svg-icons/search"); ?>
            <?php get_template_part("/inc/svg-icons/close"); ?>
          </button>
        </div>
      </div>
    </div>
  </nav>
</div><!-- #site-navigation -->
