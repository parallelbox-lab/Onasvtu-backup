

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
            <div class="container-fluid">
                                <h4 class="text-center">Transactions</h4>

                <div class="table-responsive">

<table border="1" cellpadding="2" cellspacing="0" class="table mt-5"><tbody><tr><th>DATE/TIME</th><th>SERVICE</th><th>DESTINATION</th><th>AMOUNT</th><th>status</th></tr>
    <?php  foreach($transaction as $trans) : ?>
<tr>
										  <td> <?php if (($trans->date) == null) {
	echo "date not available";
} else {
    echo ($trans->date);
}

?></td>
										   <td> <?php if (($trans->service) == null) {
	echo "service not available";
} else {
    echo ($trans->service);
}
?></td>
										 
										   <td>										   <?php if (($trans->number) == null) {
	echo "number not available";
} else {
    echo ($trans->number);
}

?>
</td>
										  <td>   
										  <?php if (($trans->total_amount) == null) {
	echo "price not available";
} else {
    echo ($trans->total_amount);
}

?>
</td> 
								  <td>   
										  <?php if (($trans->status) == null) {
	echo "status not available";
} else {
    echo ($trans->status);
}

?>
</td> 			

										</tr><tr>
										    										  <?php endforeach; ?>

										 </tbody></table></div></div>
<div class="pagination-links text-center" style="">
		<?php echo $links; ?>
</div>
