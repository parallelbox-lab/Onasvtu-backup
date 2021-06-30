
              
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

            <?php if(isset($res)){ 
    
    ?>
    <div class="alert alert-danger alert-dismissable">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>  

<div><?php echo $res;?>me</div>
            <?php } ?>