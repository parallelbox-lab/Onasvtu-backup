
              
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
        <div class="row">
        <!-- Mobile Recharge -->
   
                <div class="col    mb-4 mb-lg-0">
                <h2 class=" mb-3 text-center">Buy MTN(Sme Bundle)</h2>
                                    <br/>
                                                         <?php $this->load->view('templates/flash'); ?>

   <?php if(isset($message)){
       echo "<p style='font-size:19px;text-align:center;'>$message</p>";
   }
?>
                            <form  method="post" id="form1" name="form1">
       
            <div class="form-group">
            <label class="control-label" for="txtAmount">Data plan</label>
                <select class="custom-select" name="id" id="network" required="">
                <option> -- Select Dataplan -- </option>    
                <?php foreach($datas as $dat): ?>
                <option value="<?php echo $dat['id'];?>"><?php echo $dat['network'];?></option>
                <?php endforeach; ?>

                
                </select>
            </div>
            <div class="form-group">
            <label class="control-label" for="txtAmount">Mobile number</label>
                <input type="number" class="form-control in-md" name="number" minlength="11" maxlength="11  " required="" id="mobile" placeholder="Enter Mobile Number">
            </div>
            <div class="form-group">
                    <label>price</label>
                    <select class="custom-select" id="price" name="amount" required>
                        <option>No Selected</option>
 
                    </select>
                  </div>

<input type="hidden" value="<?php echo $balance['balance']; ?>" name="bal">

                     							
                  <button type="submit" class="bt btn-success btn-block" name="sub">Buy data </button>
    
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
<script type="text/javascript">
        $(document).ready(function(){

            $('#network').change(function(){
                var id=$(this).val();
                $.ajax({
                    url : "<?php echo site_url('dashboard/fetch_price');?>",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){

                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].price+'>'+data[i].price+'</option>';
                        }
                        $('#price').html(html);

                    }
                });
                return false;
            });

        });
    </script>