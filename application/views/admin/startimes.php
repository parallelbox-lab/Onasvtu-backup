
              
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
        <h5 class="text-center">STARTIMES RECHARGE</h5>

        <div class="row">
        <!-- Mobile Recharge -->
        <?php $this->load->view('templates/flash'); ?>
                <div class="col    mb-4 mb-lg-0">
<form id="startimes" name="startimes"  method="post">
<div class="form-group">

<label class="control-label text-dark" for="txtAmount">Smart Card no</label>
    <input type="text" class="in-md" value id="ssmart" name="ssmart"  placeholder="input smart Card no" onchange="restme('startimes')" required>
</div>
<div class="form-group">

<label class="control-label text-dark" for="txtAmount"> Please confirm customer information before recharging.</label>
<div id="cust-startimes" style=" background-color:#FFFFCC; padding: 5px"></div>

<input type="button" value="Customer Check" onclick="gocustomer('startimes',document.getElementById('ssmart').value)" style="border-collapse: collapse;
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

    <select name="samt" id="samt" class="custom-select">
                <option>-- Select one---</option>

  	<option value="900.00">Nova - 900 Naira - 1 Month</option>
  	<option value="1300.00">Basic - 1,300 Naira - 1 Month</option>
  		<option value="1900.00">Smart - 1,900 Naira - 1 Month</option>
<option value="1900.00">Classic - 1,900 Naira - 1 Month- Promo</option>
  			<option value="3800.00">Super - 3,800 Naira - 1 Month</option>
  								<option value="300.00">Nova - 300 Naira - 1 Week</option>
  								<option value="450.00">Basic - 450 Naira - 1 Week</option>
  								<option value="600.00">Smart - 600 Naira - 1 Week</option>
  								<option value="900.00">Classic - 900 Naira - 1 Week - Promo </option>
  								<option value="1300.00">Super - 1,300 Naira - 1 Week</option>
  								<option value="90.00">Nova - 90 Naira - 1 Day</option>
  								<option value="120.00">Basic - 120 Naira - 1 Day</option>
  								<option value="180.00">Smart - 180 Naira - 1 Day</option>
  								<option value="240.00">Classic - 240 Naira - 1 Day - Promo </option>
  								<option value="360.00">Super - 360 Naira - 1 Day</option>		
			
    </select>
</div>
<div class="form-group">

    <label for="sphone text-dark">Phone</label>
     <input type="text" value="" id="gphone" name="gphone" placeholder="input phone number" class="in-md" required>      
</div>	
<div class="form-group">

    <label for="sphone">Wallet Charge</label>
     <input readonly="true" type="text" value="" id="charges" name="charges" placeholder="Wallet charge" class="custom-select" required>      
</div>
								 <input type="hidden" value="" id="confstar" name="confstar">

        <input type="button" onclick="gopaystar()" value="Recharge" class="bt btn-primary btn-block ">
    </form>

</div>
<!-- End Mobile Recharge -->

</div>

</section>

<script language="javascript">
document.getElementById("samt").oninput = () => {
  const input = document.getElementById('samt');
  const output = document.getElementById('charges');

  // Trying to insert text into 'output'.
  output.value  = +	input.value  + 50;
};



function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;

    if (charCode > 31 && (charCode < 48 || charCode > 57)) {

        return false;

    }
    return true;
}

function selectbill(b){
if(b=='none'){
	document.getElementById('startimes').style.display='none';
	document.getElementById('gotv').style.display='none';
	document.getElementById('dstv').style.display='none';
}
else if(b=='startimes'){
	document.getElementById('startimes').style.display='block';
	document.getElementById('gotv').style.display='none';
	document.getElementById('dstv').style.display='none';
}
else if(b=='gotv'){
	document.getElementById('startimes').style.display='none';
	document.getElementById('gotv').style.display='block';
	document.getElementById('dstv').style.display='none';
}
else if(b=='dstv'){
	document.getElementById('startimes').style.display='none';
	document.getElementById('gotv').style.display='none';
	document.getElementById('dstv').style.display='block';
} 

}


function gopaystar(){

var amt=document.getElementById('samt');
var smartno=document.getElementById('ssmart').value;

var txt=amt.options[ amt.selectedIndex ].text;

if(!IsNumeric(smartno)){
		//navigator.notification.alert('Invalid smart card no!');
		alert('Invalid smart card no');
		exit;
	}

if(confirmed==0){
	alert('Please check customer details!');
	exit;
}


var conf=confirm("Recharge Startimes ("+smartno+") with "+txt+"?");
if(conf==0){
	exit;
}
document.startimes.submit();
 
  
}

function IsNumeric(strString)

   //  check for valid numeric strings	

   {

   var strValidChars = "0123456789.-";

   var strChar;

   var blnResult = true;



   if (strString.length == 0) return false;

   for (i = 0; i < strString.length && blnResult == true; i++)

      {

      strChar = strString.charAt(i);

      if (strValidChars.indexOf(strChar) == -1)

         {

         blnResult = false;

         }

      }

   return blnResult;

   }



var ajx;
var ajxbool;

try{
	ajx=new XMLHttpRequest();
	ajxbool=true;
} catch(e){
	ajx=new ActiveXObject("Microsoft.XMLHTTP");
	ajxbool=true;
}

var confirmed=0;

function gocustomer(a,b){
	var did;
	if(b==''){		
		exit;
	}
	if(a=='startimes'){
		did='cust-startimes';
	}
	else if(a=='gotv'){
		did='cust-gotv';
	}
	else if(a=='dstv'){
		did='cust-dstv';
	}
	
	confirmed=0;
	document.getElementById(did).innerHTML="checking...";
	if (ajxbool==true){		
		ajx.onreadystatechange=function(){
			if(ajx.readyState==4){	
				//slert("CXX");
				var resp=ajx.responseText;
				//alert (resp);
				var res = resp.split("|"); 
				if(res[0]!="100"){
					document.getElementById(did).innerHTML="Error loading details!";
					confirmed=0;
				}
				else{						
					var rname=res[1];							
					var rbal=res[2];
					var combo="<b>Name:</b> " + rname + "<br><b>Balance:</b> " + rbal;
					document.getElementById(did).innerHTML=combo;
					confirmed=1;				
				}
			}
		}
		var code="?bill=" + a + "&smartno="+b +"&userid=07038884094&pass=0009efb3568b77b5f2d9" ;
		//var pga="httpapi/billcustomer_check.php" + code;
		var pga="https://mobileairtimeng.com/httpapi/customercheck.php" + code;
		ajx.open ("GET",pga,true);
		ajx.send(null);
	}	
	
}

function restme(a){
	if(a=='startimes'){
		did='cust-startimes';
	}
	else if(a=='gotv'){
		did='cust-gotv';
	}
	else if(a=='dstv'){
		did='cust-dstv';
	}
	
	document.getElementById(did).innerHTML="";
	confirmed=0;
}

</script>
