<?php get_template_part('templates/head'); ?>
<body class="body-bottom" data-spy="scroll" data-target=".navbar">

  <!--[if lt IE 8]>
    <div class="alert alert-t4tg">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->
  
    <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar') && is_category(podcast) ) {
      get_template_part('templates/header-podcast');
    } else if (current_theme_supports('bootstrap-top-navbar') && !is_page(podcast) ) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>

  <section id="home" class="home jack-things">
    <div class="wrap container" role="document">
		  <div class="row">
			<div class="col-sm-4">
				<a href="http://howdareyou.io/wp-content/uploads/2014/08/300x2502.png"><img class="pros img-responsive" src="http://masonlawlor.com//crowdfundationdotcom/wp-content/themes/CrowdFundation/assets/img/Pete.png" alt="300x250" width="360" height="250" /></a>
			</div>
			<div class="col-sm-4">
				<a href="http://howdareyou.io/wp-content/uploads/2014/08/300x2502.png"><img class="pros img-responsive" src="http://masonlawlor.com//crowdfundationdotcom/wp-content/themes/CrowdFundation/assets/img/Dale.png" alt="300x250" width="360" height="250" /></a>
			</div>
			<div class="col-sm-4">
				<a href="http://howdareyou.io/wp-content/uploads/2014/08/300x2502.png"><img class="pros img-responsive" src="http://masonlawlor.com//crowdfundationdotcom/wp-content/themes/CrowdFundation/assets/img/Eskil.png" alt="300x250" width="360" height="250" /></a>
			</div>
		</div>
		<br><br>
		<div class="row">
			<div class="col-sm-4">
				<a href="http://howdareyou.io/wp-content/uploads/2014/08/300x2502.png"><img class="pros img-responsive" src="http://masonlawlor.com//crowdfundationdotcom/wp-content/themes/CrowdFundation/assets/img/Jordan.png" alt="300x250" width="360" height="250" /></a>
			</div>
			<div class="col-sm-4">
				<a href="http://howdareyou.io/wp-content/uploads/2014/08/300x2502.png"><img class="pros img-responsive" src="http://masonlawlor.com//crowdfundationdotcom/wp-content/themes/CrowdFundation/assets/img/Mike.png" alt="300x250" width="360" height="250" /></a>
			</div>
			<div class="col-sm-4">
				<a href="http://howdareyou.io/wp-content/uploads/2014/08/300x2502.png"><img class="pros img-responsive" src="http://masonlawlor.com//crowdfundationdotcom/wp-content/themes/CrowdFundation/assets/img/Gary.png" alt="300x250" width="360" height="250" /></a>
			</div>
		</div>
    </div><!-- /.wrap -->
  </section>

  <section id="energy" class="highlight home jack-things">
    <div class="wrap container" role="document">
      <div class="content row">
        <div class="col-sm-4"> <!-- Consulting -->
          <h2><img class="security-icon" src="http://masonlawlor.com/smartkit/assets/images/security.png" /> Consulting</h2>
		    <ul class="big-list">
	          <li><img class="icons" src="http://masonlawlor.com/smartkit/assets/images/1-design.png"/> Marketing</li>
	          <li><img class="icons" src="http://masonlawlor.com/smartkit/assets/images/2-dev.png"/> Branding</li>
	          <li><img class="icons" src="http://masonlawlor.com/smartkit/assets/images/3-conversions.png"/> Strategy</li>
	          <li><img class="icons" src="http://masonlawlor.com/smartkit/assets/images/4-templates.png"/> Advertising</li>
	        </ul>
          <div class="alert alert-t4tg">Starting at <span class="price-security">$999</span></div>
          <button class="btn btn-default btn-lg security-btn">Learn More <i class="fa fa-chevron-right"></i></button>
        </div><!-- /Consulting -->
        <div class="col-sm-4"> <!-- Design -->
          <h2><img class="energy-icon" src="http://masonlawlor.com/smartkit/assets/images/energy.png" /> Design</h2>
          <ul class="big-list">
	          <li><img class="icons" src="http://masonlawlor.com/smartkit/assets/images/1-design.png"/> Product Design</li>
	          <li><img class="icons" src="http://masonlawlor.com/smartkit/assets/images/2-dev.png"/> Video Production</li>
	          <li><img class="icons" src="http://masonlawlor.com/smartkit/assets/images/3-conversions.png"/> Web Design</li>
	          <li><img class="icons" src="http://masonlawlor.com/smartkit/assets/images/4-templates.png"/> Web Development</li>
	        </ul>
          <div class="alert alert-t4tg">Starting at <span class="price-energy">$4999</span></div>
          <button class="btn btn-default btn-lg energy-btn">Learn More <i class="fa fa-chevron-right"></i></button>
        </div><!-- /Design -->
        <div class="col-sm-4"> <!-- Marketing -->
          <h2><img class="auto-icon" src="http://masonlawlor.com/smartkit/assets/images/automation.png" /> Marketing</h2>
          <ul class="big-list">
	          <li><img class="icons" src="http://masonlawlor.com/smartkit/assets/images/1-design.png"/> Promotion</li>
	          <li><img class="icons" src="http://masonlawlor.com/smartkit/assets/images/3-conversions.png"/> Press</li>
	          <li><img class="icons" src="http://masonlawlor.com/smartkit/assets/images/3-conversions.png"/> PR</li>
	          <li><img class="icons" src="http://masonlawlor.com/smartkit/assets/images/4-templates.png"/> Advertising</li>
	        </ul>
          <div class="alert alert-t4tg">Starting at <span class="price-auto">$4999</span></div>
          <button class="btn btn-default btn-lg auto-btn">Learn More <i class="fa fa-chevron-right"></i></button>
        </div><!-- /Marketing -->
      </div><!-- /.content -->
    </div><!-- /.wrap -->
  </section>
  
  <section id="bottom-cta" class="home">
    <div class="wrap container" role="document">
      <div class="content row">
        <div class="col-sm-12">
	          <h1 class="footer-h1">Need funding? Apply below.</h1>
          <h3 class="footer-h3">If selected <span class="smart-home">Crowd Fundation</span> will spot you!</h3>
          <center><button type="button" class="btn btn-default security-btn">Apply Now</button></center>
          <center><a href="" data-toggle="modal" data-target="#myModal">How to improve your chances of getting picked.</a></center>
          
        </div>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
  </section>


  <?php get_template_part('templates/footer'); ?>
  
<!-- pop-up modal -->
<script language="JavaScript">
  <!--
    function _submit_form(frm){
      var email = frm.email.value;
      var valid_email = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
      
      if( valid_email.test( email ) ){
        document.getElementById('before').style.display = 'none';
        document.getElementById('after').style.display = 'block';
        return true;
      } else {
        alert("Invalid email address");
      }
      return false;
    }
//-->
</script>

<script type="text/javascript"
        src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.3.1/jquery.cookie.min.js"></script>
  <script type="text/javascript">
    function showPopup() {
      $('#myModal').modal('show');
    }

    function timeOut() {
      if ($.cookie('foreverjobless') !== '1') {
        setTimeout(function() {
          showPopup();
          jQuery.cookie('foreverjobless', '1', { expires: 7 });
        }, 4000);
      }
    }

    $(document).ready(function () {
      timeOut();
      stickyElement();
    });

</script>

   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <!--<button type="button" class="close" style="margin-right: 10px;margin-top: 5px;" data-dismiss="modal" aria-hidden="true">&times;</button>-->
          <div class="modal-body">
    			
    			<div class="col-sm-10 col-sm-offset-1 modal-video"><!-- Video -->
				 	<div class="row"> 
					 	<center>
					 		<iframe src="//fast.wistia.net/embed/iframe/6y2igsba97?videoFoam=true" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="640" height="360"></iframe><script src="//fast.wistia.net/assets/external/iframe-api-v1.js"></script>
					 		<script src='//fast.wistia.com/static/iframe-api-v1.js'></script>
					 	</center>
					</div>
				</div> <!-- /Video -->
    		</div>
    	<br>	
        <h4 class="optin-h4">Learn how to crowdfund from the pros.</h4><!-- optin -->
	  <div class="row">
	      <div class="top-optin col-sm-offset-3">
	      
	      <!-- Mailchimp -->
			<form class="form-inline" id="before_header" action="//crowdfundation.us8.list-manage.com/subscribe/post?u=b5ab0ee8523c581e9a88b3e27&amp;id=14d13d7b64" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<input type="email" value="" name="EMAIL" class="form-control email" id="mce-EMAIL" placeholder="Email address.." required>
			<button id="header-optin-click" name="submit" onClick="ga('send', 'event', 'optin', 'subscribe', 'header optin');" class="submit btn btn-primary btn-lg" type="submit" value="Submit" tabindex="501">Subscribe</button>
			
			</form> <!-- /Mailchimp -->
	      </div><!-- /optin -->
		  <br><br>
          </div>
        </div>
      </div>
    </div>  
<!-- /pop-up modal -->
    
	
	</body>
</html>
