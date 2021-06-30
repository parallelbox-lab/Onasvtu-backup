<?php



?>

<html>
<head>
    <title>Payment Successful</title>
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="<?php echo base_url();?>asset/css/css.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/ionicons.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/bootstra
</head>

<body>
<div>
   <div class="container">
    <div id="invoice-POS">
    
    <center id="top">
      <div class="logo"></div>
      <div class="info"> 
        <h2>onasvtu</h2>
      </div><!--End Info-->
    </center><!--End InvoiceTop-->
    
    <div id="mid">
    
    </div><!--End Invoice Mid-->
    
 

			

					<div id="legalcopy">
						<p class="legal"><strong>Thank you !
						</p>
					</div>
  <p>A payment of <strong>N<?php echo number_format($amount);?></strong> was successfully paid. </p>
    <hr>
  <a href="<?php echo base_url();?>dashboard/" class="btn-success">Go home</a>
    <p>
				</div><!--End InvoiceBot-->
  </div><!--End Invoice-->


  
      
    </p>
</div>
</body>
</html>

