<div class="col">

                   <section class="card" style="margin-top:15px;">   
                       <div class="container">  
                           <br/>                   
<h4 class="mb-4">Edit sme</h4>
                                         
                                         <?php if(isset($datas)) { foreach($datas as $row) {?> <form id="sme-data" method="post">
                                            <?php if($error){echo '<div style="color:red;margin-top:0px;border-radius:11px;font-size:14px;" class=" text-center" >'.$error.'</div>'; }?>
    
                                                <div class="form-group">
                                                    <label for="fullName">Data name</label>
                                                    <input type="text" name="name" value="<?php echo set_value($row->name);if(set_value($row->name)==''){echo $row->name;} ?>" class="custom-select" required="" placeholder="Data Name">
                                                                                <input type="hidden" value="<?php echo $_GET['id']?>" name="pid"> 
                                                </div>

        </div>    
                                            
                                                
                                                <div class="form-group">
                                                    <label for="price">price</label>
                                                    <input type="text" name="price" value="<?php echo set_value($row->price);if(set_value($row->price)==''){echo $row->price;} ?>" class="custom-select" maxlength="11"  required="" placeholder="price">
                                                </div>
                                               
                                                <div class="form-group">
                                                <button class="bt custom-select" type="submit" style="background:green;color:#fff;">Update sme data</button>
 
                                                </div>
                                              
                                                                                                    <br/>
                                                <?php } } else { ?>
                                                
                                                <?php } ?>                                             </form>
                                                
                                                                                    </div>
                                            </div>
                                            </section>