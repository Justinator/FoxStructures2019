<div id="site-navigation" class="main-navigation">
  <nav role="navigation" aria-label="primary navigation">
    <div class="navWidth menuLinkWrap">
      <a href="<?=site_url()?>">
        <img src="/wp-content/uploads/2019/01/FoxStructuresLogo-REV.png" class="siteLogo" alt="Fox Structures Logo"><span class="screen-reader-text">Go back to the homepage</span>
      </a>
      <div class="menu-main-menu-container-outer">
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
          <button id="search">
            <svg class="smallIcon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <defs>
                <symbol id="icon-search" viewBox="0 0 26 28">
                  <title>search</title>
                  <path d="M18 13c0-3.859-3.141-7-7-7s-7 3.141-7 7 3.141 7 7 7 7-3.141 7-7zM26 26c0 1.094-0.906 2-2 2-0.531 0-1.047-0.219-1.406-0.594l-5.359-5.344c-1.828 1.266-4.016 1.937-6.234 1.937-6.078 0-11-4.922-11-11s4.922-11 11-11 11 4.922 11 11c0 2.219-0.672 4.406-1.937 6.234l5.359 5.359c0.359 0.359 0.578 0.875 0.578 1.406z"></path>
                </symbol>
              </defs>
            </svg>
            <svg class="whiteIcon icon-search"><use xlink:href="#icon-search"></use></svg>
            <svg class="smallIcon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <defs>
                <symbol id="icon-close" viewBox="0 0 22 28">
                  <title>close</title>
                  <path d="M20.281 20.656c0 0.391-0.156 0.781-0.438 1.062l-2.125 2.125c-0.281 0.281-0.672 0.438-1.062 0.438s-0.781-0.156-1.062-0.438l-4.594-4.594-4.594 4.594c-0.281 0.281-0.672 0.438-1.062 0.438s-0.781-0.156-1.062-0.438l-2.125-2.125c-0.281-0.281-0.438-0.672-0.438-1.062s0.156-0.781 0.438-1.062l4.594-4.594-4.594-4.594c-0.281-0.281-0.438-0.672-0.438-1.062s0.156-0.781 0.438-1.062l2.125-2.125c0.281-0.281 0.672-0.438 1.062-0.438s0.781 0.156 1.062 0.438l4.594 4.594 4.594-4.594c0.281-0.281 0.672-0.438 1.062-0.438s0.781 0.156 1.062 0.438l2.125 2.125c0.281 0.281 0.438 0.672 0.438 1.062s-0.156 0.781-0.438 1.062l-4.594 4.594 4.594 4.594c0.281 0.281 0.438 0.672 0.438 1.062z"></path>
                </symbol>
              </defs>
            </svg>
            <svg class="whiteIcon icon-close"><use xlink:href="#icon-close"></use></svg>
          </button>
        </div>
      </div>
    </div>
  </nav>
</div><!-- #site-navigation -->
