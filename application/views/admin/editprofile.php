<div class="col">

                   <section class="card" style="margin-top:15px;">   
                       <div class="container">  
                           <br/>                   
<h4 class="mb-4">Personal Information</h4>
                                            <form id="personalInformation" method="post" action="<?php echo base_url();?>dashboard/edit-profile">
                                            <?php if($error){echo '<div style="color:red;margin-top:0px;border-radius:11px;font-size:14px;" class=" text-center" >'.$error.'</div>'; }?>
    
                                                <div class="form-group">
                                                    <label for="fullName">Username</label>
                                                    <input type="text" name="username" value="<?php echo set_value('username');if(set_value('username')==''){echo $account['username'];} ?>" class="custom-select" required="" placeholder="Full Name">
                                                </div>
                                            
                                            
                                                <h4 class="mb-4">Account Information</h4>
                                                <div class="form-group">
                                                    <label for="mobileNumber">Mobile Number</label>
                                                    <input type="text" name="number" value="<?php echo set_value('number');if(set_value('number')==''){echo $account['number'];} ?>" class="custom-select" minlength="11" maxlength="11"  required="" placeholder="Mobile Number">
                                                </div>
                                                <div class="form-group">
                                                    <label for="emailID">Email ID</label>
                                                    <input type="text" name="email" value="<?php echo set_value('email');if(set_value('email')==''){echo $account['email'];} ?>" class="custom-select"  required="" placeholder="Email ID">
                                                </div>
                                                <div class="form-group">
                                                <button class="bt custom-select" type="submit" style="background:green;color:#fff;">Update personal details</button>
 
                                                </div>
                                              
                                                                                                    <br/>
                                                                                            </form>
                                                
                                                                                    </div>
                                            </div>
                                            </section>