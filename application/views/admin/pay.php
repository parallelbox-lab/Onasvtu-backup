
    <div class="container">
    <div class=" mat-card    mt-5" >
    <h5 class="text-center mt-2">Verify your payment <?php echo $account['username']; ?> </h5>

        <?php if(isset($amount)){
         echo "<div class='text-center text-dark'>amount to be deposited in wallet:NGN$amount</div><br/>";

        }else {
            redirect('dashboard/fund-wallet');

        } ?>
        <form >
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <button type="button" onclick="payWithPaystack()" style="display:block;margin:0px auto;border:0px;background:green;color:#fff;width:80px;"> Pay </button> 
  </form>
</div></div>
  <script>
    function payWithPaystack(){
      var handler = PaystackPop.setup({
        key: 'pk_live_4fba1a1ada5824ae90bc41529e3ec528657afd8b',

        email: '<?php echo $account['email']; ?>',
        amount: <?php echo $amount; ?>*100,
        currency: "NGN",
        number: "<?php echo $account['number']; ?>",

        ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
        metadata: {
           custom_fields: [
              {
                  display_name: "<?php echo $account['username']; ?>",
                  variable_name: "<?php echo $account['username']; ?>",
                  value: "<?php echo $account['number']; ?>"
              }
           ]
        },
        callback: function(response){
                    window.location.replace("<?php echo base_url().'dashboard/verify_payment/'; ?>"+response.reference);
        },
        onClose: function(){
        alert('Payment Cancelled !!!!');
        }
      });
      handler.openIframe();
    }
  </script>