
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Onasenterprise - Homepage</title>
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

    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/css/mat.css">

      </head>

      <body>
<div class="container mt-5  ">
    <h4 class="text-center" style="text-transform:uppercase;">Admin-login</h4>
<form action="<?php echo base_url();?>admin/admin-login" method="post">
    <div class="mat-card bg-white">
    <?php
                    if($error)
                    {
                        echo '<div style="color:red" >Our system, could not recognize you. Please try again.</div>';
                    }?>
                     
<div class="form-group mt-2 ">
<span class="text-dark">Admin iD <i class="fa fa-user"></i> </span>
<input type="text" name="admin_id" class="form-control in-md" placeholder="Enter Your Admin ID">


</div>

<div class="form-group">
<span class="text-dark">password <i class="fa fa-lock"></i></span>
<input type="password" name="password" class="form-control in-md" placeholder="Enter Password">


</div>
<div class="form-group">
<button type="submit" class="in-md"style="background:#007bff;color:#fff;">Login </button>
</div>
</div>
</form>



</div>