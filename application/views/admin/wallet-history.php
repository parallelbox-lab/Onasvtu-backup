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
                <div class="table-responsive">

<table border="1" style="width:100%" cellpadding="2" cellspacing="0" class="table mt-5 res"><tbody><tr><th>DATE/TIME</th><th>Deposit</th><th>CURRENT BALANCE</th></tr>
    <?php  foreach($transaction as $trans) : ?>
<tr>
										  <td> <?php if (($trans['date']) == null) {
	echo "date not available";
} else {
    echo ($trans['date']);
}

?></td>
						
										  <td>   
										  <?php if (($trans['deposit']) == null) {
	echo "price not available";
} else {
    echo number_format(($trans['deposit']));
}

?>
</td>
<td>
     <?php if (number_format($balance['balance']) == null) {
	echo "0.00";
} else {
    echo number_format($balance['balance']);
}

?>
</td>
						

										</tr><tr>
										    										  <?php endforeach; ?>

										 </tbody></table></div></div>