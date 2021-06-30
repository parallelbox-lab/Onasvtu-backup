<footer class="v-footer" dir="ltr" style="height: auto;">
<div class="container footer copyright-row">
    <div class="layout rows wrap ">
<div class="flex caption  xs12 md6"><a class="text-center" href="https://wa.me/2348035213980?text=Hello%2C%20 I will be in need of your services ">Developed By <span  style="color:red;font-size:16px;"> parallelboxng </span></a> <br/><span><br/>&copy; 2020 onasvtu - All Rights Reserved</span></div></div></div></footer>
<script src="<?php echo base_url();?>asset/js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?php echo base_url();?>asset/js/popper.min.js"></script>
<script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>asset/js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url();?>asset/js/jquery.stellar.min.js"></script>
<script src="<?php echo base_url();?>asset/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url();?>asset/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url();?>asset/js/aos.js"></script>
<script src="<?php echo base_url();?>asset/js/jquery.animateNumber.min.js"></script>
<script src="<?php echo base_url();?>asset/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url();?>asset/js/jquery.timepicker.min.js"></script>
<script src="<?php echo base_url();?>asset/js/scrollax.min.js"></script>
<script src="<?php echo base_url();?>asset/js/jquery.sticky.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="<?php echo base_url();?>asset/js/google-map.js"></script>
<script src="<?php echo base_url();?>asset/js/va.js"></script>
<script src="<?php echo base_url();?>asset/js/main.js"></script>
<script>
            jQuery(document).ready(function(){
				jQuery("#success_msg").hide();
				jQuery("#error_msg").hide();
                jQuery("#form").on("submit", function(e){
                    //Stop the form from submitting itself to the server.
                    e.preventDefault();

					var data = {};
                    var name = jQuery("#name").val();
                    var email = jQuery("#email").val();
                    var message = jQuery("#message").val();
                   
					
					
					
                    jQuery.ajax({
                        type: "POST",
						dataType: "json",
						  beforeSend: function(){
							jQuery(".msg-loader").css("display", "inline");
						  },
                        url: "<?php echo base_url();?>message",
                        data: {name: name,email:email,message:message},
						complete: function(){
							jQuery("#form")[0].reset();
							jQuery(".msg-loader").css("display", "none");
						  },
                        success: function(data){
                          jQuery("#success_msg").show();
						  jQuery("html, body").animate({
        scrollTop: jQuery("#success_msg").offset().top - 200}, 2000);
                        },	
						error: function(data){
                          jQuery("#error_msg").show();
						  jQuery("html, body").animate({
        scrollTop: jQuery("#error_msg").offset().top - 200}, 2000);
						  },
					  
                    });
                });
            });
        </script>	
</body>
</html>
