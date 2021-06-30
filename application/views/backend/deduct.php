<div class="mat-cards mt-5">
<div class="container"><h3>Deduct user wallet</h3>
	<span style="color:red;text-align:center">
	    
	    
			<?php
  if(isset($success)) {
			    	echo $success;
			}
		?>
		</span><br/>
<form method="post">
    <div class="form-group">
        <label>User Account name</label>
    <select name="user_id"  class="custom-select">
         

							<option>Select Account</option>
							<?php
							foreach($accounts as $account){
								echo '<option value="'.$account['user_id'].'" '.set_select('accountNo',$account['user_id'] ).'>'.$account['username'].'</option>';
							}
							?>
						</select>
    </div>
     <div class="form-group">
        <label>Phone number</label>
        <input type="number" name="phoneno" placeholder="Enter phone number" class="in-md form-control" required minlength="1">
                    <?php echo form_error('phoneno', '<div class="error mt-2" style="color:red;">', '</div>')?>
    </div>
   
     <div class="form-group">
        <label>Reason for deduction</label>
   <textarea class="in-md" placeholder="Reason for deduction" name="reason"></textarea>
               <?php echo form_error('reason', '<div class="error mt-2" style="color:red;">', '</div>')?>
    </div>
     <div class="form-group">
        <label>Enter Amount</label>
        <input type="number" name="amount" placeholder="Enter Amount" class="in-md form-control" required minlength="1">
                    <?php echo form_error('amount', '<div class="error mt-2" style="color:red;">', '</div>')?>
    </div>
    <div class="form-group">
        <input type="submit" value="deduct wallet"   class="bt btn-block">
    </div>
</form>
</div>
</div> 