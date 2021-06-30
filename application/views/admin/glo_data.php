
              
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
      
      
 
<?php if(isset($res)){ 
    
    ?>
    <div class="alert alert-danger alert-dismissable">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>  

<div><?php echo $res;?></div>


</div>
</div>

<div class="col-md-6">
<a href="<?php echo base_url();?>dashboard/mtn-data" class="btn btn-success btn-block"> BUY AGAIN </a>
</div> 
<?php } else {?>
    <?php $this->load->view('templates/flash'); ?>

            <section class="container">
    <div class="rounded p-4">
        <div class="row">
        <!-- Mobile Recharge -->

                <div class="col    mb-4 mb-lg-0">
                <h2 class=" mb-3 text-center">Buy Glo DataBundle</h2>
                                    <br/>
                            <form action="<?php echo base_url();?>dashboard/mtn-data" method="post" id="form1" name="form1">
       
            <div class="form-group">
            <label class="control-label" for="txtAmount">Data plan</label>
                <select class="custom-select" name="id" id="network" required="">
                <option> -- Select Dataplan -- </option>    
                <?php foreach($datas as $dat): ?>
                                            <option value="<?php echo $dat['id'];?>-<?php echo $dat['bundle-code'];?>"><?php echo $dat['network'];?></option>
                <?php endforeach; ?>

                
                </select>
            </div>
            <div class="form-group">
            <label class="control-label" for="txtAmount">Mobile number</label>
                <input type="number" class="form-control in-md" name="number" minlength="11" maxlength="11  " required="" id="mobile" placeholder="Enter Mobile Number">
            </div>
            <div class="form-group">
                    <label>price</label>
                    <select class="custom-select" id="price" name="price" required>
                        <option>No Selected</option>
 
                    </select>
                  </div>

<input type="hidden" value="<?php echo $balance['balance']; ?>" name="bal">

    <button class="bt btn-primary btn-block" onclick="sharedata()" id="sbut" type="submit">Buy Data</button>

    
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
                <?php } ?>