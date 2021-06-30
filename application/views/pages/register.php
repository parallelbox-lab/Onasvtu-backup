<html lang="en">
  <head>
    <title>Onasenterprise - Create Account</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/animate.css">
    
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/ionicons.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/css.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/slick.css">
  </head>
  <style>
  .button{
	

  background:lightseagreen;
	border-radius:10px;
	display: inline-block;
	border-bottom:1px solid #ddd;
	font-size: 14px;
	font-weight: bold;
	min-width: 186px;
	padding: 13px 2px;
	
	text-transform: uppercase;
	
	color: #fff;
	line-height: 1.4;
	cursor: pointer;
	text-align: center;
}
  </style>
  
<body ng-controller="AppCtrl" class="ng-scope">
    <div id="toast-container" ng-class="[config.position, config.animation]" toaster-options="{&#39;close-button&#39;: true}" class="ng-scope toast-top-right"><!-- ngRepeat: toaster in toasters --></div>
    <!-- uiView:  --><div class="app ng-scope" id="app" ui-view=""><div class="access-screen ng-scope">
    <div class="access-screen-logo">
        <a href="#" title="Onasenterprise">
            <img src="<?php echo base_url();?>asset/images/mylogo.jpg" alt="onasvtu logo">
        </a>
    </div>
    <!-- uiView:  --><div ui-view="" class="ng-scope"><div class="access-wrap animated fadeIn ng-scope">
    <form action="<?php echo base_url();?>account/Create-account" method="post" class="access-box" name="loginForm">
        <h1 class="access-box-title text-center m-b-lg ng-binding">Create account</h1>
       
 <div class="form-group">
            <input type="text"  class="form-control i-text" placeholder="Enter name" name="username" required="" value="<?php echo set_value('username');?>">
            <?php echo form_error('username', '<div class="error mt-2" style="color:red">', '</div>')?>

        </div>
        <div class="form-group">
            <input type="number"  class="form-control i-text" placeholder="Enter Phone Number" name="number" value="<?php echo set_value('number');?>" required="">
            <?php echo form_error('number', '<div class="error mt-2" style="color:red;">', '</div>')?>

        </div>
        <div class="form-group">
            <input type="email"  class="form-control i-text" placeholder="Email address" name="email" value="<?php echo set_value('email');?>" required="">
            <?php echo form_error('email', '<div class="error mt-2" style="color:red;">', '</div>')?>

        </div>
        <div class="form-group">
            <input type="password"  class="form-control i-text" name="password" placeholder="Password" required="">
            <?php echo form_error('password', '<div class="error mt-2" style="color:red;">', '</div>')?>

        </div>
        <div class="form-group">
            <button class="btn-s"><span class="default-state">Create account</span></button>
        </div>
    </form>
    <div class="access-base">
        <div class="ng-b">Already a user? <a class="ng-binding" href="<?php echo base_url();?>account/login">Login</a></div>
    </div>
</div>

</div>
</div></div>

<script src="<?php echo base_url();?>asset/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>asset/js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?php echo base_url();?>asset/js/popper.min.js"></script>
<script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>asset/js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url();?>asset/js/jquery.stellar.min.js"></script>
<script src="<?php echo base_url();?>asset/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url();?>asset/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url();?>asset/js/aos.js"></script>
<script src="<?php echo base_url();?>asset/js/jquery.animateNumber.min.js"></script>
<script src="<?php echo base_url();?>asset/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url();?>asset/js/jquery.timepicker.min.js"></script>
<script src="<?php echo base_url();?>asset/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="<?php echo base_url();?>asset/js/google-map.js"></script>
<script src="<?php echo base_url();?>asset/load.js"></script>
<script src="<?php echo base_url();?>asset/js/main.js"></script>
<script>


  $('.slick-slider-clients').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    prevArrow: false,
    nextArrow: false,
    autoplaySpeed: 2000,
    infinite: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 2,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      }
    ]
});

</script>
</body>
</html>

