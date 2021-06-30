
              
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
        <h5 class="text-center">DSTV RECHARGE</h5>
    <?php $this->load->view('templates/flash'); ?>
    <?php if(isset($message)){
       echo "<p style='font-size:19px;text-align:center;'>$message</p>"; ?>
   
       <?php   }
?>
        <div class="row">
        <!-- Mobile Recharge -->
    
                <div class="col    mb-4 mb-lg-0">
<form id="dstv" name="dstv" method="post">
<div class="form-group">

<label class="control-label text-dark" for="txtAmount">Smart Card no</label>
    <input type="text" class="in-md" value id="gsmart" name="gsmart" placeholder="input smart Card no" onchange="restme('dstv')" required>
</div>
<div class="form-group">

<label class="control-label text-dark" for="txtAmount"> Please confirm customer information before recharging.</label>
<div id="cust-gotv" style=" background-color:#FFFFCC; padding: 5px"></div>

<input type="button" value="Customer Check" onclick="gocustomer('dstv',document.getElementById('gsmart').value)" style="border-collapse: collapse;
width: 100%;
color: #FFFFFF;
padding: 14px 20px;
margin: 8px 0;
border: none;
border-radius: 4px;
cursor: pointer;
background-color: #0066FF;">
</div>
<div class="form-group">

<label class="control-label" for="txtAmount"> Recharge Type </label>
<input name="goname" id="goname" type="hidden" value="" > 
<input name="goinvoice" id="goinvoice" type="hidden" value="">
<input name="gocustno" id="gocustno" type="hidden" value="">
    <select name="samt" id="samt" class="custom-select">
        <option>-- Select one---</option>
   							<option value="6975">DStv Compact N6975</option>
   							<option value="10925">DStv Compact Plus N10925</option>
   							<option value="16200">DStv Premium N16200</option>
   							<option value="18150">DStv Premium Asia N18150</option>
   							<option value="5540">Asian Bouqet N5540</option>
   							<option value="2565">DStv Yanga Bouquet E36 N2565</option>
   							<option value="4615">DStv Confam Bouquet E36 N4615</option>
   							<option value="1850">Padi N1850</option>
   							<option value="1285">DStv Great Wall Standalone Bouquet N1285</option>			
		
    </select>
</div>
<div class="form-group">

    <label for="sphone text-dark">Phone</label>
     <input type="text" value="" id="gphone" name="gphone" placeholder="input phone number" class="in-md" required>      
</div>
<div class="form-group">

    <label for="sphone">Wallet Charge</label>
     <input readonly="true" type="text" value="" id="charges" name="gphone" placeholder="Wallet charges" class="custom-select" required>      
</div>
        <input type="submit" onclick="gopaygotv()" value="Recharge" class="bt btn-primary btn-block " name="sub">
    </form>

</div>
<!-- End Mobile Recharge -->

</div>

</section>

<script src="<?php echo base_url();?>asset/js/fed.js"></script>
</body></html>
