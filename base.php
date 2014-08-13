<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>
  <div class="blog-hero">
    <div class="wrap container">
    <div class="row">
      <div class="col-sm-2 col-sm-offset-1 t4tg-circle">
        <img src="/exp/wp-content/themes/jasontreu/assets/img/jasoncircle.png">
        <p>Ralph Waldo</p>
        <p>Socialite</p>
      </div>
      <div class="col-sm-8">
        <div class="header-optin">
          <h2>Learn How You Can Meet 100-200 People a Week:
          <a data-toggle="modal" data-target="#myModal" style="cursor:pointer;">The Art of Meeting People</a></h2>
          <button class="btn btn-default btn-lg t4tg-home-btn">Read Study  <i class="fa fa-chevron-right"></i></button>
        </div>
      </div>
    </div>
  </div>
  </div>

  <div class="wrap container" role="document">
    <div class="content row">
      <main class="main <?php echo roots_main_class(); ?>" role="main">
        <?php include roots_template_path(); ?>
      </main><!-- /.main -->
      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
