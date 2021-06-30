<div class="container-fluid">
    <h3>Edit Sme data </h3>
    <form method="post">
                <div class="table-responsive">

<table border="1" style="width:100%" cellpadding="2" cellspacing="0" class="table mt-5 res"><tbody><tr><th>s/n</th><th>Data</th><th>Amount</th><th>edit</th></tr>
    <?php  foreach($datas as $trans) : ?>
<tr>
    
										<td><?php echo $trans['pid'];?></td>					

										  <td><?php echo $trans['name']; ?></td>
				
						 <td><?php echo $trans['price']; ?>	</td>			 
										 
				<td><a href="<?php echo base_url()?>admin/edit?id=<?php echo $trans['pid']; ?>">edit</a></td>
										

										</tr><tr>
										    										  <?php endforeach; ?>

										 </tbody></table></div> 