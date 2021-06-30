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

<div class="container">
                <div class="col">
                                    <h4 class="text-4 mb-3 text-center">Electricity </h4>
                            <form method="post" id="frmelect" name="frmelect">
           <input type="hidden" name="stage" id="stage">
					  <input type="hidden" name="item" id="item">	
				   	   <br> 
            <div class="form-group">
                <label class="text-dark">Service</label>
            <select name="service" class="custom-select" id="service"><option value="BPE-NGEK-OR">Eko PHCN</option><option value="BPE-NGIE-OR">Ikeja Electric</option><option value="BPE-NGIB-OR">Ibadan Distribution</option><option value="BPE-NGEN-OR">Enugu Distribution</option><option value="BPE-NGCABIA-OR">Port Harcourt Prepaid</option><option value="BPE-NGCABIB-OR">Port Harcourt Postpaid</option><option value="BPE-NGCAAVB-OR">Kano Prepaid</option><option value="BPE-NGCAAVC-OR">Kano Postpaid</option><option value="BPE-NGCABABA-OR">Abuja Prepaid</option><option value="BPE-NGCABABB-OR">Abuja Postpaid</option><option value="BPE-NGKD-OR">Kaduna</option><option value="BPE-NGJO-OR">JOS</option></select>
            </div>
            <div class="form-group">
                <label class="text-dark">Meter No:</label>
                <input type="text" class="form-control in-md" id="meterno" name="phone_no" minlength="11" required="" placeholder="Enter Meter no">
            </div>
            <input type="hidden" value="<?php echo $balance['balance']; ?>" name="bal">
            <div class="form-group">
<label class="text-dark">Meter type:</label>
           <select name="mtype" class="custom-select"  id="mtype"><option value="1">Prepaid</option><option value="0">Postpaid</option></select
           </div>         
           <input class="bt btn-primary btn-block" type="button" id="tbut" value="Verify Meter" onclick="checkmeter()" >
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

function topupa(){
		
	var amt=parseInt(document.getElementById('amt').value);
	if(amt<500){
		alert("Minumum amount is 500.");
		exit;
	}
	
	var conf=confirm("Are you sure you want to proceed?");
	if(conf==0){
		exit;
	}
	
	document.getElementById('stage').value='2';
	document.getElementById('tbut2').value="Please wait...";
	document.frmelect.submit();
	document.getElementById('tbut2').style.disabled=true;
}

function checkmeter(){
	var meterno=document.getElementById('meterno').value;
	var element=document.getElementById('service');
	if(meterno==''){
		alert('Please enter meter no');
		exit;
	}
	
	document.getElementById('item').value = element.options[ element.selectedIndex ].text;
	document.getElementById('stage').value=1;
	document.getElementById('tbut').value="Please wait...";
	document.frmelect.submit();
}

function cancelit(){
	document.getElementById('stage').value=0;
	//document.getElementById('tbut').value="Please wait...";
	document.frmelect.submit();
}
</script>
