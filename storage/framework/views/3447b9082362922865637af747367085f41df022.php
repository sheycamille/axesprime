<div id="paypal-button-container"></div>
<script>
    paypal.Buttons({
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: 0.5
                    }
                }]
            });
        },
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                console.log('details: ', details.purchase_units[0].amount.value)
                alert(
                    'We have successfully received your funds and are crediting your trading account. You are being redirected in the next 10seconds, if not, visit your live accounts and check the balance, if the account is not yet credited. Contact our live chat support. Thanks for your patience.'
                );
                //     Call your server to save the transaction
                //     return fetch('/dashboard/paypalverify/'+data.purchase_units.amount.value, {
                //         method: 'post',
                //         headers: {
                //             'content-type': 'application/json',
                //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                //         },
                //         body: JSON.stringify({
                //             orderID: data.orderID
                //         })
                //     }).then(data => {
                //         window.location.replace('<?php echo e(route('account.liveaccounts')); ?>');
                //     });
            });
        }
    }).render('#paypal-button-container');
</script>
<?php /**PATH /Users/wadingaleonardngonga/Documents/Projects/axesprime/resources/views/includes/paypal.blade.php ENDPATH**/ ?>