<main>
  

    <section class="slider" id="slider">
        <div class="container">
            <div class="content">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6">
                        <div class="left">
                            <h1 style="font-weight: bold;">The Better Way   For an easy living</h1>
                            <p class="text-dark" style="">Airtime,data bundle, Utility Bills -  All your daily needs in one place. shop with one of the biggest nigeria enterprise Today.</p>
                            <?php if($this->session->userdata('user_id'))
                    {?>
                                                <a href="<?= base_url();?>dashboard" class="bt">My Account</a>

             <?php    } else{ ?>
                            <a href="<?= base_url();?>account/login" class="bt">Login</a>
                                <a href="<?= base_url();?>account/Create-account" class="bt">Register</a>
                <?php }?>
                                                        </div>
                    </div>
                    <!-- Right-->
                    <div class="col-md-6">
                        <div class="right">
                            <img src="<?php echo base_url();?>asset/images/net/benjamin-dada-Pao6YVk4s7U-unsplash.png" alt="slider-img" class="img-fluid wow fadeInRight im" data-wow-offset="1" style="visibility: visible; animation-name: fadeInRight;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    

         
    <div class="rate-table" style=" background-color:#fff; ">
        <div class="container">
           <h4 class="text-center text-dark">Our Partners</h4>
           <div class="" >   
            <div class="row">
           
                <div class="col-md-3 col-sm-4 col-6">
                    <div class="rate-counter-block">
                        <div class="icon rate-icon  "> 
                            <img src="<?php echo base_url();?>asset/images/net/mtn.png" alt="mtn" class="icon-svg-1x">
                        </div>                        
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-6">
                    <div class="rate-counter-block">
                        <div class="icon rate-icon  ">
                            <img src="<?php echo base_url();?>asset/images/net/glo.png" alt="glo" class="icon-svg-1x">
                        </div>                        
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-6">
                    <div class="rate-counter-block">
                        <div class="icon rate-icon  ">
                            <img src="<?php echo base_url();?>asset/images/net/etisalat.png" alt="etisalat" class="icon-svg-1x">
                        </div>                        
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-6">
                    <div class="rate-counter-block">
                        <div class="icon rate-icon  ">
                            <img src="<?php echo base_url();?>asset/images/net/airtel.png" alt="airtel" class="icon-svg-1x">
                        </div>                        
                    </div>
                </div>
              
            </div>
            </div>
        </div>
    </div>
    <section class="features" id="features">
        <div class="container text-center">
            <div class="heading">
                <h2 style="font-size:22px;">Virtual Top Up</h2>
                <h5 style="font-size:19px;">Electronic vending of data ,airtime,  Tv subscriptions and lots more</h5>
            </div>
            <div class="line"></div>
            <div class="row">
                <!-- Box-1 -->
                <div class="col-md-3">
                    <div class="box">
                        <img src="<?php echo base_url();?>asset/images/net/feature-2.png"alt="feature-1" class="img">
                        <h3><a href="<?php echo base_url();?>dashboard/databundles" class="smoothscroll">Buy Data bundle</a></h3>
                        <p class="text-dark">Buy cheap mobile data at an affordable rate.</p>
                    </div>
                </div>
                <!-- Box-2 -->
                <div class="col-md-3">
                    <div class="box">
                        <img src="<?php echo base_url();?>asset/images/net/feature-2.png" alt="feature-1">
                        <h3><a href="<?php echo base_url();?>dashboard/airtime">Buy Airtime</a></h3>
                        <p class="text-dark">Buy airtime without leaving your home.</p>
                    </div>
                </div>
                <!-- Box-3 -->
                <div class="col-md-3">
                    <div class="box">
                        <img src="<?php echo base_url();?>asset/images/net/feature-3.png" alt="feature-1" class="img">
                        <h3><a href="<?php echo base_url();?>dashboard/TV-Cables-Subscriptions">Tv subscription</a></h3>
                        <p class="text-dark">Purchase  tv subscription at a faster and affordable rate .</p>
                    </div>
                </div>
                <!-- Box-4 -->
                <div class="col-md-3">
                    <div class="box">
                        <img src="<?php echo base_url();?>asset/images/net/feature-3.png" alt="feature-1" class="img">
                        <h3><a href="<?php echo base_url();?>dashboard/Buy-electricity">Pay Electricity Bill</a></h3>
                        <p class="text-dark">Pay Electricity bill at a fast means .</p>
                    </div>
                </div>
            </div>
            <br>
    
        </div>
    </section>
    
    
      <section class="contact" id="contact">
        <div class="container">
            <div class="heading text-center">
                <h2>Keep In Touch</h2>
            </div>
    
            <div class="row">
                <div class="col-md-5">
                    <div class="title">
                        <h3>Contact Us :</h3>
                        <p>Please, feel free to contact us, if you have any issue or complaints.</p>
                    </div>
                    <div class="contents">
                        <!-- Info-1 -->
                        <div class="info">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <h4 class="d-inline-block">PHONE :
                                <br>
                                <span><a href="tel:(+234) 07038884094">(+234) 07038884094</a></span></h4>
                        </div>
                        <!-- Info-2 -->
                        <div class="info d-flex align-items-start">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <h4 class="d-inline-block">EMAIL :
                                <br>
                                <span>seunemma2018@gmail.com</span></h4>
                        </div>
                        <!-- Info-3 -->
                        <div class="info d-flex align-items-start">
                            <i class="fa fa-street-view" aria-hidden="true"></i>
                            <h4 class="d-inline-block">ADDRESS :<br>
                                <span>Ekiti state,</span></h4>
                        </div>
                    </div>
                </div>
    
                                     <div class="col-md-7 n">
                                    <div id="success_msg" class="alert alert-success" style="display: none;">Message Sent. Please Check your mail later to get our response</div>
				<div id="error_msg" class="alert alert-danger" style="display: none;">Sorry, Message Not Sent. Try again later.</div>
                    <form  method="POST" id="form" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" name="name" class="form-control" placeholder="Name" id="name" required="">
                            </div>
                            <div class="col-sm-6">
                                <input type="email" name="email" class="form-control" placeholder="Email"  id="email" required="">
                            </div>
    
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5"  placeholder="Message" id="message" required=""></textarea>
                        </div>
                       
                        <button class="btn-block submit" type="">Contact us  <img src="<?php echo base_url();?>asset/images/msg_loader.gif" class="img-responsive msg-loader" style="width: 40px; height: 40px;display:none;" alt="loader">
</button>

                      
                    </form>
           
                </div>
            </div>
        </div>
    </section>
    
    <br/>