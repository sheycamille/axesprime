<?php $__env->startComponent('mail::message'); ?>
    # Greetings!

    <?php echo $demo->message; ?>



    <?php if(isset($demo->link)): ?>
        <?php echo("\r If you can click on the link or button above, copy and paste this link below into a browser. \r \n") ?>

        <?php echo $demo->link; ?>


    <?php endif; ?>


    <?php echo("\r We are here to serve you. Have a great day! \r\n") ?>


    <?php echo("\r Kind regards") ?>,
    <?php echo e("\r " . $demo->sender); ?>, <?php echo("Your #1 Multi-Asset Broker.\r\n") ?>.

<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\laragon\www\axesprime\resources\views/emails/NewNotification.blade.php ENDPATH**/ ?>