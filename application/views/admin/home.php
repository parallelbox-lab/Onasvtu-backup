

<section class="au-breadcrumbs m-t-75" style="background: #F1FEF4;padding:20px;">
                <div class="section__content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">

                                    </div>

                                    <a href="<?php echo base_url();?>dashboard/fund-wallet" class="bt">
                                        <i class="fa fa-bank"></i>Fund wallet</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br/>
            <section class="container-fluid wrap bg-white">
    <div>       <div class="card  mb-1" align="center">
            <div class="card-body">
            <h5 class="card-title text-dark" style="margin-bottom: 5px;"><?php
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
        echo "Good evening";
    }
    ?> <?php echo $account['username']; ?></h5>
            <h6 class="card-text" style="margin-bottom: 5px;">Referral link: <a href="<?php echo base_url();?>dashboard" target="" class="text-danger card-link" style="font-size: .8em;">Coming soon referral program </a> <br>Share and Earn... </h6>

        </div>
    </div>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-3" align="center">
                            <div class="card-body wallet-bal">
                                <h6 class="card-title" style="text-transform:uppercase;" >Wallet balance</h6>
                                <h5 class="card-text">₦ <?php if (number_format($balance['balance']) == null) {
	echo "0.00";
} else {
    echo number_format($balance['balance']);
}

?>
   </h5>

                                <a href="<?php echo base_url();?>dashboard/fund-wallet" class="text-danger card-link" style="text-transform:uppercase;" >Fund</a>
                            </div>
                        </div>
                    </div>

                                    <div class="col-md-4">
                        <div class="card  mb-3 " align="center">
                            <div class="card-body">
                                <h6 class="card-title" style="text-transform:uppercase;">My Referral Earnings</h6>
                                <h4 class="card-text">0</h4>
                                <a href="<?php echo base_url();?>dashboard" class="text-danger card-link" style="text-transform:uppercase;" >Coming soon </a>
                            </div>
                        </div>
                    </div>





                                        <div class="col-md-4">
                        <div class="card     mb-3" align="center">
                            <div class="card-body">
                                <h6 class="card-title" style="text-transform:uppercase;"><a href="profile&amp;r" class="text-dark">All my Transactions</a></h6>
                                <h4 class="card-text text-dark"><a class="text-dark"><?php if ($alltransaction == null) {
	echo "0";
} else {
    echo $alltransaction;
}

?></a></h4>
                                <a href="<?php echo base_url();?>dashboard/transaction" class="text-danger card-link" style="text-transform:uppercase;" >See all transactions</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<br/>

                          
                            <div class="container-fluid">
                            <div class="alert alert-success">
                                    <p></p>
									Pay DStv, GOtv &amp; StarTimes Subscription - instant activation &gt;&gt; <a  href="<?php echo base_url();?>dashboard/TV-Cables-Subscriptions">CLICK HERE</a>
									  <p></p>
									Buy Data share bundle(Mtn sme) <a  href="<?php echo base_url();?>dashboard/sme-data">CLICK HERE</a>
                                    <p></p>
                                    	Buy Databundle(all) <a  href="<?php echo base_url();?>dashboard/databundles">CLICK HERE</a>
                                    <p></p>
									Electricity Bill Payment e.g EKEDC, IKEDC, AEDC,
									PHEDC e.t.c - instant activation &gt;&gt; <a  href="<?php echo base_url();?>dashboard/Buy-electricity">
									CLICK HERE</a>
                                    <p></p>
                                    Buy Airtime &gt;&gt; <a  href="<?php echo base_url();?>dashboard/airtime">CLICK HERE</a>
                                    <p></p>

 <p></p>



<p align="center"><a   href="<?php echo base_url();?>dashboard/edit-profile"><font size="3">Edit Profile</font></a> &lt;&gt; <a href="<?php echo base_url();?>dashboard/changepassword"><font size="3">Change Password</font></a></p>


<p></p>

										<div class="row visible-sm visible-xs">
                                        	<div class="col-sm-12 col-xs-12">

											</div>
										</div>

										<div class="row visible-lg visible-md">
                                        	<div class="col-lg-12 col-md-12">



											</div>
										</div>

                                    </div>
