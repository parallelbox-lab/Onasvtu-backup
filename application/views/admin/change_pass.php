
<br>
<div class="col">

<div class="card">
<div class="container">

<?php echo @$error; ?>
<h5>Change Password</h5>
    <?php echo form_open('dashboard/change_pass', array('id' => 'passwordForm'))?>
            <div class="form-group">
                <input type="password" name="oldpass" id="oldpass" class="custom-select" placeholder="Old Password" />
                <?php echo form_error('oldpass', '<div class="error" style="color:red">', '</div>')?>
            </div>
            <div class="form-group">
                <input type="password" name="newpass" id="newpass" class="custom-select" placeholder="New Password" />
                <?php echo form_error('newpass', '<div class="error" style="color:red">', '</div>')?>
            </div>
            <div class="form-group">
                <input type="password" name="passconf" id="passconf" class="custom-select" placeholder="Confirm Password" />
                <?php echo form_error('passconf', '<div class="error" style="color:red">', '</div>')?>
            </div>
            <div class="form-group">
                <button type="submit" class="bt" name="change_pass">Change Password</button>
            </div>
        <?php echo form_close(); ?>
</div>
</div>
</div>