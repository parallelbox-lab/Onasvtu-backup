<div class="container-fluid">
                <div class="table-responsive">

<table border="1" style="width:100%" cellpadding="2" cellspacing="0" class="table mt-5 res"><tbody><tr><th>DATE/TIME</th><th>USERNAME</th><th>SERVICE</th><th>AMOUNT</th><th>status</th></tr>
    <?php  foreach($transaction as $trans) : ?>
<tr>
    
					
										  <td> <?php if (($trans['date']) == null) {
	echo "date not available";
} else {
    echo ($trans['date']);
}

?></td>
				
									  <td> <?php if (($trans['username']) == null) {
	echo "date not available";
} else {
    echo ($trans['username']);
}

?></td>						   <td> <?php if (($trans['service']) == null) {
	echo "service not available";
} else {
    echo ($trans['service']);
}
?></td>
										 
				
										  <td>   
										  <?php if (($trans['total_amount']) == null) {
	echo "price not available";
} else {
    echo ($trans['total_amount']);
}

?>
</td> 
								  <td>   
										  <?php if (($trans['status']) == null) {
	echo "status not available";
} else {
    echo ($trans['status']);
}

?>
</td> 			

										</tr><tr>
										    										  <?php endforeach; ?>

										 </tbody></table></div></div>