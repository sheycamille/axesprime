<div id="paypal-button-container"></div>
<script src="<?php echo e(asset('admin/js/paypal.js')); ?>"></script>
<script defer>
    window.onload = function () {
        var amount = '<?php echo e($amount); ?>';
        var route = '<?php echo e(route('account.liveaccounts')); ?>';
        paypalFunc(amount, route);
    }
</script>
<?php /**PATH /Users/wadleo/Documents/Projects/axeprogroup/axepro/resources/views/includes/paypal.blade.php ENDPATH**/ ?>