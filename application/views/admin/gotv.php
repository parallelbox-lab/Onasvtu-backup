
              
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
        <h5 class="text-center">GOTV RECHARGE</h5>
<?php $this->load->view('templates/flash'); ?>
        <?php if(isset($message)){
       echo "<p style='font-size:19px;text-align:center;'>$message</p>"; ?>
   
       <?php   }
?>
        <div class="row">
        <!-- Mobile Recharge -->
        
                <div class="col    mb-4 mb-lg-0">
<form id="gotv" name="gotv" method="post">
<div class="form-group">

<label class="control-label text-dark" for="txtAmount">Smart Card no</label>
    <input type="text" class="in-md" value id="gsmart" name="gsmart" placeholder="input smart Card no" onchange="restme('gotv')">
</div>
<div class="form-group">

<label class="control-label text-dark" for="txtAmount"> Please confirm customer information before recharging.</label>
<div id="cust-gotv" style=" background-color:#FFFFCC; padding: 5px"></div>

<input type="button" value="Customer Check" onclick="gocustomer('gotv',document.getElementById('gsmart').value)" style="border-collapse: collapse;
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
        <option value="none">--- Select one ---</option>
    <option value="3280">GOtv Max N3280</option>
    <option value="1640">GOtv Jinja Bouquet N1640</option>
    <option value="2460">GOtv Jolli Bouquet N2460</option>
    <option value="410">GOtv Lite N410</option>			
    </select>
</div>
<div class="form-group">

    <label for="sphone text-dark">Phone</label>
     <input type="text" value="" id="gphone" name="gphone" placeholder="input phone number" class="in-md">      
</div>	
   <input type="hidden" value="<?php echo $balance['balance']; ?>" name="bal">
<div class="form-group">

    <label for="sphone">Wallet Charge</label>
     <input readonly="true" type="text" value="" id="charges" name="charges" placeholder="Wallet charges" class="custom-select">      
</div>
        <input type="submit" onclick="gopaygotv()" value="Recharge" class="bt btn-primary btn-block " name="sub">
        
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


function gopaygotv(){
var phone=document.getElementById('gphone').value;
var smartno=document.getElementById('gsmart').value;
var amt=document.getElementById('samt').value;

if(!IsNumeric(smartno)){
		//navigator.notification.alert('Invalid smart card no!');
		alert('Invalid smart card no');
		exit;
	}


if(phone.length<11 || phone.length>11){
	//navigator.notification.alert("Incorrect Phone number.");
	alert('Incorrect phone number');
	exit;
}
if(!IsNumeric(phone)){
		//navigator.notification.alert('Unrecognized Phone Number.');
		alert('Unrecognized phone number');
		exit;
	}

if(amt<0){
		//navigator.notification.alert('Minimun amount is N600 and maximun is N3,600');
		alert('Select amount!');
		exit;
	}

if(confirmed==0){
	alert('Please check customer details!');
	exit;
}

var conf=confirm("Recharge Gotv ("+smartno+") with N"+amt+"?");
if(conf==0){
	exit;
}
document.gotv.submit();
 
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
				if(resp=="108|failed"){
				    					confirmed=0;

					document.getElementById(did).innerHTML="Cannot load details!";
				}
				else{														
					if(a=='gotv' || a=='dstv'){
						var res = resp.split("|");
						var info=res[1];
						
						if(a=='gotv'){
							document.getElementById('goname').value=res[1];
							document.getElementById('goinvoice').value=res[2];
							document.getElementById('gocustno').value=res[3];
						}
						else if(a=='dstv'){
							document.getElementById('dsname').value=res[1];
							document.getElementById('dsinvoice').value=res[2];
							document.getElementById('dscustno').value=res[3];
						}
						
						document.getElementById(did).innerHTML=info;
					}
					else{
						document.getElementById(did).innerHTML=resp;
					}
							
					confirmed=1;				
				}
			}
		}
		var code="?bill=" + a + "&smartno="+b +"&userid=07038884094&pass=0009efb3568b77b5f2d9" ;
		var pga="https://mobileairtimeng.com/httpapi/customercheck" + code;
		ajx.open ("GET",pga,true);
		ajx.send(null);
	}else{
		alert('Not connected!');
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