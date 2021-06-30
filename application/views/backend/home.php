<div class="container-fluid mt-5">
<div class="row">
    
       <div class="col-md-4">
                        <div class="card mb-3" align="center">
                            <div class="card-body wallet-bal">
                                <h6 class="card-title" style="text-transform:uppercase;" >My mobileairtimeng Wallet balance</h6>
                                <h5 class="card-text">₦ <?php echo $request; ?>


   </h5>

                                
                            </div>
                        </div>
                    </div> 
    
       <div class="col-md-4">
                        <div class="card mb-3" align="center">
                            <div class="card-body wallet-bal">
                                <h6 class="card-title" style="text-transform:uppercase;" >All my registered customer</h6>
                                <h5 class="card-text"><?php echo $allusers; ?>


   </h5>

                                
                            </div>
                        </div>
                    </div> 

      <div class="col-md-4">
                        <div class="card mb-3" align="center">
                            <div class="card-body wallet-bal">
                                <h6 class="card-title" style="text-transform:uppercase;" ><a href="<?php echo base_url();?>admin/trans" class="text-dark">All Transaction</a></h6>
                                <h5 class="card-text"><?php echo $allt; ?>


   </h5>

                                
                            </div>
                            
                            
                        </div>
                    </div> 
   
   






</div>

  <div class="mat-card"> 
<ul>
<li>Members total wallet balance:₦ <?php echo $total; ?>
<li>My mobileng balance - members total balance: ₦ <?php echo $request - $total; ?></li>

<li style="color:red;list-style:none;"><b>Caution:<?php if($total > $request ){ ?> your customers balance is currently greater than your mobile ng balance pls try to fund wallet in other not to run into serious issues with your customers </li><?php } ?></b></ul>
</div>
</div>

