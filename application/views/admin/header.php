<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard 2</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url();?>asset/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>asset/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>asset/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>asset/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url();?>asset/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url();?>asset/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>asset/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>asset/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>asset/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>asset/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>asset/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>asset/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>asset/vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url();?>asset/css/theme.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>asset/css/css.css" rel="stylesheet" media="all">

</head>

<body class="animsition" style="background:#ddd;">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo bg-white">
                <a href="#">
                    <img src="<?php echo base_url();?>asset/images/logo.jpg " alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1" >
                <div class="account2">
                  
                <h4 class="name"><?php
    /* This sets the $time variable to the current hour in the 24 hour clock format */
    $time = date("H");
    /* Set the $timezone variable to become the current timezone */
    $timezone = date("e");
    /* If the time is less than 1200 hours, show good morning */
    if ($time < "12") {
        echo "Good morning";
    } else
    /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
    if ($time >= "12" && $time < "17") {
        echo "Good afternoon";
    } else
    /* Should the time be between or equal to 1700 and 1900 hours, show good evening */
    if ($time >= "17" && $time < "19") {
        echo "Good evening";
    } else
    /* Finally, show good night if the time is greater than or equal to 1900 hours */
    if ($time >= "19") {
        echo "Good night";
    }
    ?> <?=$this->session->userdata['username']?> </h4>
                    <p class="names">Wallet balance (NGN 500) </p>
<br/>
                        <a href="#" class="btn btn-success text-white   "><i class="zmdi zmdi-power"></i> Sign out</a>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                      <li>
                            <a href="inbox.html">
                                Buy data bundle</a>
                            
                        </li>
                        <li>
                            <a href="#">
                          Buy airtime</a>
                        </li>
                       
                        <li>
                            <a href="#">
                            Cable tv subscription</a>
                        </li>
                        <li>
                            <a href="#">
                                Electricity Payments</a>
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-container2">
        <header class="header-desktop2" style="background:#fff;">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <img src="<?php echo base_url();?>asset/images/logo.jpg" alt="logo" width="140px">
                                </a>
                            </div>
                            <div class="header-button2">
                                <div class="header-button-item js-item-menu     ">
                                    <i class="zmdi zmdi-search text-dark"></i>
                                    <div class="search-dropdown js-dropdown show-dropdown">
                                        <form action="">
                                            <input class="au-input au-input--full au-input--h65" type="text" placeholder="Search for datas &amp; reports...">
                                            <span class="search-dropdown__icon">
                                                <i class="zmdi zmdi-search"></i>
                                            </span>
                                        </form>
                                    </div>
                                </div>
                                
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu text-dark"></i>
                                </div>
                                <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                                        </div>
                                    </div>
                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                <div class="logo">
                    <a href="#">
                        <img src="images/icon/logo-white.png" alt="Cool Admin" />
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar2">
                    <div class="account2">
                     
                    <h4 class="name"><?php
    /* This sets the $time variable to the current hour in the 24 hour clock format */
    $time = date("H");
    /* Set the $timezone variable to become the current timezone */
    $timezone = date("e");
    /* If the time is less than 1200 hours, show good morning */
    if ($time < "12") {
        echo "Good morning";
    } else
    /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
    if ($time >= "12" && $time < "17") {
        echo "Good afternoon";
    } else
    /* Should the time be between or equal to 1700 and 1900 hours, show good evening */
    if ($time >= "17" && $time < "19") {
        echo "Good evening";
    } else
    /* Finally, show good night if the time is greater than or equal to 1900 hours */
    if ($time >= "19") {
        echo "Good night";
    }
    ?> <?=$this->session->userdata['username']?> </h4>
                    <p class="names">Wallet balance (NGN 500) </p>
<br/>
                        <a href="#" class="btn btn-success text-white   "><i class="zmdi zmdi-power"></i> Sign out</a>
                    </div>
                    <nav class="navbar-sidebar2">
                        <ul class="list-unstyled navbar__list">
                           
                            
                        <li>
                            <a href="inbox.html">
                                Buy data bundle</a>
                            
                        </li>
                        <li>
                            <a href="#">
                          Buy airtime</a>
                        </li>
                       
                        <li>
                            <a href="#">
                            Cable tv subscription</a>
                        </li>
                        <li>
                            <a href="#">
                                Electricity Payments</a>
                        </li>
                            
                           
                        </ul>
                    </nav>
                </div>
            </aside>