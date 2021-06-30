
              
<section class="au-breadcrumbs m-t-75" style="background: #F1FEF4;padding:20px;">
                <div class="section__content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                    
                                    </div>
                                    
                                    <a href="#" class="bt">
                                        <i class="fa fa-bank"></i>Fund wallet</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="container-fliud">
    <div class="rounded p-4">
        <div class="row">
        <!-- Mobile Recharge -->
                <div class="col-lg-4 mb-4 mb-lg-0">
                <h2 class=" mb-3 text-center">Buy DataBundle</h2>
                                    <br/>
                            <form>
       
            <div class="form-group">
            <label class="control-label" for="txtAmount">Mobile Network</label>
                <select class="custom-select" name="net" id="network" required="">
                <?php foreach($datas as $dat): ?>
                    
                    <option value="<?php echo $dat['id']; ?>"><?php echo $dat['network']; ?></option>
                <?php endforeach; ?>

                
                </select>
            </div>
            <div class="form-group">
            <label class="control-label" for="txtAmount">Data plan</label>
                <select class="custom-select" name="data" id="bundlename" required="">
              
                
                </select>
            </div>
            <div class="form-group">
            <label class="control-label" for="txtAmount">Mobile number</label>
                <input type="number" class="form-control in-md" data-bv-field="number" name="phone_no" minlength="11" required="" placeholder="Enter Mobile Number">
            </div>
            <div class="form-group">
		                                <label class="control-label" for="txtAmount">Amount to pay</label>
		                                <input readonly="true" name="txtAmount" id="txtAmount" type="text" value="" class="custom-select">
                            </div>
                                <button class="bt btn-primary btn-block" type="submit">Buy Airtime</button>
    </form>
        </div>
    <!-- End Mobile Recharge -->
    <div class="col-lg-8" style="overflow: auto;">
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
</div>
</section>
<br/>