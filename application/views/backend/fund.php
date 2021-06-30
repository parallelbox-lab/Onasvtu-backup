<div class="mat-cards mt-5">
<div class="container"><h3>Fund user wallet</h3>
	<span style="color:red;text-align:center">
			<?php echo $message;?>
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
        <label>Enter amount</label>
        <input type="number" name="amount" placeholder="Enter Amount" class="in-md form-control">
    </div>
    <div class="form-group">
        <input type="submit" value="fund wallet"  name="buttonSubmit" class="bt btn-block">
    </div>
</form>
<p class="text-dark">Pls beware of not funding the wrong user wallet</p>
</div>
</div> 