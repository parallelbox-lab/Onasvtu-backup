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

var conf=confirm("Recharge Dstv ("+smartno+") with N"+amt+"?");
if(conf==0){
	exit;
}
document.dstv.submit();
 
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
	else if(a=='gotv' || a=='dstv' ){
		did='cust-gotv';
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
					document.getElementById(did).innerHTML="Cannot load details!";
					confirmed=0;
				}
				else{														
					if(a=='gotv' || a=='dstv'){
						var res = resp.split("|");
						var info=res[1];
						
						if(a=='gotv' || a=='dstv' ){
							document.getElementById('goname').value=res[1];
							document.getElementById('goinvoice').value=res[4];
							document.getElementById('gocustno').value=res[5];
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
		var code="?&bill=" + a + "&smartno="+b +"&userid=07038884094&pass=0009efb3568b77b5f2d9" ;
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
	confirmed=1;
}

