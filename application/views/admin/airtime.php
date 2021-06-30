
              
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
<?php $this->load->view('templates/flash'); ?>

   <?php if(isset($message)){
       echo "<p style='font-size:19px;text-align:center;'>$message</p>"; ?>
   
       <?php   }
?>
<div class="container">
                <div class="col">
                                    <h4 class="text-4 mb-3 text-center">Instant Airtime Recharge</h4>
                            <form method="post" class="form-prevent-multiple-submits"  id="form1" name="form1" >
          
 
            <div class="form-group">
                <select class="custom-select" name="id" id="network" required="true" autocomplete="off">
                    <option>Mobile Network</option>
                    <option value="15">MTN NG</option><option value="6">GLO NG</option><option value="1">AIRTEL NG</option><option value="2">9Mobile NG</option>        
                    </select>
            </div>
            <div class="form-group">
                <input type="number" class="form-control in-md" id="phone" name="phone_no" minlength="11" required="" placeholder="Enter Mobile Number">
            </div>
            <input type="hidden" value="<?php echo $balance['balance']; ?>" name="bal">

            <div class="form-group">
                <input class="form-control in-md" id="amt" name="amount" placeholder="Enter Amount" required="" type="number">
            </div>
                            
                                				
                                							
                  <button type="submit" class="bt btn-success btn-block" name="sub"> topup </button>
    </form>
        </div>
</div>
<script language="javascript">
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;

    if (charCode > 31 && (charCode < 48 || charCode > 57)) {

        return false;

    }
    return true;
}

function topup(){
var phone=document.getElementById('phone').value;
var amt=document.getElementById('amt').value;
var element=document.getElementById('network');


if(network.value==''){
	alert("Select network.");
	exit;
}

phone = phone.replace(/\s+/g, '');

if(phone.length<11 || phone.length>11){
	alert("Please enter phone number.");
	exit;
}

if(isNaN(phone)){
	alert("Please enter phone number.");
	exit;
}

document.getElementById('phone').value=phone;


if(network.value=='20' && amt<2000){
	//alert("Minimum recharge on MTN Premium is 2,000 at 4.2% discount.");
	//exit;
}
if(network.value=='25' && amt<10){
	//alert("Minimum recharge on MTN VTU wallet is 2,000 at 5% discount.");
	//exit;
}

if(network.value=='30' && (amt<50 || amt>10000 )){
	alert("Minimum recharge is N50.");
	exit;
}

var dnet = element.options[ element.selectedIndex ].text;
var conf=confirm("Top up "+ phone + " with "+ dnet+ " N"+amt +"?");
if(conf==0){
	exit;
}

document.getElementById('tbut').value="Please wait...";
document.form1.submit();
}


</script>
  
