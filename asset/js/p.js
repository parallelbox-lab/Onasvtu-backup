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
        alert('Window Closed. Payment Cancelled !!!!');
        }
      });
      handler.openIframe();
    }