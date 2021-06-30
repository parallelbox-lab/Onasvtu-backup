<div class="container-fluid">
    <h4>Total registered users <?php echo $allusers; ?></h4>
                <div class="table-responsive">

<table border="1" style="width:100%" cellpadding="2" cellspacing="0" class="table mt-5 res"><tbody><tr><th>USERNAME</th><th>EMAIL</th><th>PHONE NUMBER</th></tr>
    <?php  foreach($users as $trans) : ?>
<tr>
    
					
										  <td> <?php if (($trans['username']) == null) {
	echo "date not available";
} else {
    echo ($trans['username']);
}

?></td>
				
									  <td> <?php if (($trans['email']) == null) {
	echo "date not available";
} else {
    echo ($trans['email']);
}

?></td>						   <td> <?php if (($trans['number']) == null) {
	echo "service not available";
} else {
    echo ($trans['number']);
}
?></td>
									

										</tr><tr>
										    										  <?php endforeach; ?>

										 </tbody></table></div></div>