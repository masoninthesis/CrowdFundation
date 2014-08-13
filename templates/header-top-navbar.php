<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><img src="http://masonlawlor.com//crowdfundationdotcom/wp-content/themes/CrowdFundation/assets/img/CrowdFundation_weblogo.png" alt="logo-nav" width="auto" height="48px" /></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
    <button type="button" class="pull-right btn btn-default security-btn">Apply Now</button>
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</header>

<div class="wrap container">
  <div class="col-sm-8 col-sm-offset-2"><!-- Video -->
	  <div class="row"> 
	    <center>
	      <iframe onClick="ga('send', 'event', 'video', 'play', 'main video');" src="//fast.wistia.net/embed/iframe/ayvzkgovfs?videoFoam=true" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="668" height="376"></iframe>
	      <script src='//fast.wistia.com/static/iframe-api-v1.js'></script>
	    </center>
    </div>
  </div> <!-- /Video -->
    
  <div class="alert-header col-sm-10 col-sm-offset-1"><!-- Optin -->
      <div class="row">
        <h4 class="optin-h4">Learn how to crowd fund from the pros.</h4>
      </div>
	  <div class="row">
	      <div class="top-optin col-sm-offset-4">
	      
	      <!-- Mailchimp -->
			<form class="form-inline" id="before_header" action="//howdareyou.us8.list-manage.com/subscribe/post?u=4c05f20503bc3a9d84d1a63c9&amp;id=488afa7633" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<input type="email" value="" name="EMAIL" class="form-control email" id="mce-EMAIL" placeholder="Email address.." required>
			<button id="header-optin-click" name="submit" onClick="ga('send', 'event', 'optin', 'subscribe', 'header optin');" class="submit btn btn-primary btn-lg" type="submit" value="Submit" tabindex="501">Subscribe</button>
			
			</form> <!-- /Mailchimp -->
	      </div>
      </div>
    </div>
  </div>
</div>
<br />
<hr>
