

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


            <section class="container">
    <div class="rounded p-4">
        <?php $this->load->view('templates/flash'); ?>

   <?php if(isset($message)){
       echo "<p style='font-size:19px;text-align:center;'>$message</p>"; ?>
   
       <?php   }
?>
        <div class="row">
        <!-- Mobile Recharge -->

                <div class="col    mb-4 mb-lg-0">
                <h2 class=" mb-3 text-center">Buy DataBundle</h2>

                <form id="form1" name="form1" method="post">
                    <div class="form-group">
                        <label class="text-dark"> Select network </label>
				              <select name="cboMobileNetwork" id="cboMobileNetwork"   onchange="GetAmount()" onmouseup="GetAmount()" class="custom-select">
							  <option value="none" selected="">Select</option>
							  <option value="15">MTN</option>
		                                   
		                                    <option value="6">GLO</option>		                                    
		                                	<option value="2">9mobile</option>
                            </select>
                </div>
                            
                            <div class="form-group">

						<label class="text-dark">	Data Bundle/Price </label>
							<select name="cboDataBundle" id="cboDataBundle" tabindex="3" onchange="GetAmount2();" onmouseup="GetAmount2()" class="custom-select">
							<option value="0" selected="">Select</option>
                            </select>
                </div>
                <div class="form-group">

					 	<label class="text-dark">	Phone Number </label>
                          <input type="text" name="phone" id="phone" class="form-control in-md" placeholder="Enter Phone number" minlength="11" maxlength="11">
						  
				</div>  
				 <input type="hidden" value="<?php echo $balance['balance']; ?>" name="bal">
				<div class="form-group">
		                                <label class="control-label" for="txtAmount">Amount to pay</label>
		                                <input readonly="true" name="price" id="txtAmount" type="text" value="" placeholder="Amount" class="form-control in-md">
									</div>
									<input name="sub" type="submit" class="bt btn-block" id="tbut" onclick="topup()" value="Top up">

	    			  </form>
        </div>
    <!-- End Mobile Recharge -->

</div>

</section>

<br/><div class="" style="overflow: auto;">
    <div class="panel panel-default card rounded" style="margin:20px;">
               			<div class="panel-body">
               				<div class="panel-content">
               					<!--
               					<p>
               						Our internet/mobile data plan works with all devices e.g Andriod, Iphone, Blackberry(OS 10), computers, modems e.t.c. Data rollover if you re-subscribe before expiry of current plan.
               					</p>
               					-->
               					<p align="center" style="padding:5px;">
					                To check your data balance<br>
					                MTN &gt;&gt; *461*4# (SME)<br>
					                MTN &gt;&gt; *131*4# (direct)<br>
					                Etisalat &gt;&gt; *228#<br>
					                GLO &gt;&gt; *127*0#<br>
					                AirTel &gt;&gt; *140#
               					</p>
               				</div>
               			</div>
                       </div>
