        <?php $this->load->view('templates/flash'); ?>

<div class="container">
<p><?php if(isset($res)){
       echo "<div class='alert  alert-dismissable '>
<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>  
$res</div>";

        }else {
            redirect('dashboard/buy-data');

        } ?></p>
        <div class="row">
            <div class="col">
                <a href="<?php base_url();?>buy-data">buy again</a>
            </div>
            
              <div class="col">
                <a href="<?php base_url();?>">Go to home</a>
            </div>
            </div>
        </div>