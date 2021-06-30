
    <div class="mat-card mt-2">
        <div class="container ">

                <?php $this->load->view('templates/flash'); ?>

   <?php if(isset($message)){
       echo "<p style='font-size:19px;'>$message</p>";
   }
?>
       </p>
        <div class="row">
            <div class="col">
                <a href="<?php base_url();?>sme-buy" class="btn btn-success">buy again</a>
            </div>
            
              <div class="col">
                <a href="<?php base_url();?>">Go to home</a>
            </div>
            </div>
            </div>
        </div>
