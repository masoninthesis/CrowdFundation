<header class="banner navbar navbar-default navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><img src="http://www.jackalopemedia.com/t4tg/logo-nav.png" alt="logo-nav" width="58" height="auto" /></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
    <button type="button" class="pull-right btn btn-default navbar-btn navbar-btn">30 Day Free Trial</button>
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
      
    </nav>
  </div>
</header>
