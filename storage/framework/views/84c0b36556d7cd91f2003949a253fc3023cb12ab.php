<?php $__env->startComponent('mail::message'); ?>
    # Greetings!

    <?php echo $demo->message; ?>



    <?php if(isset($demo->link)): ?>
        <?php echo("\r If you can click on the link or button above, copy and paste this link below into a browser. \r \n") ?>

        <?php echo $demo->link; ?>


    <?php endif; ?>


    <?php echo("\r We are here to serve you. Happy trading! \r\n") ?>


    <?php echo("\r Kind regards") ?>,
    <?php echo e("\r " . $demo->sender); ?>, <?php echo("your reputable financial broker.\r\n") ?>.

<?php if (isset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d)): ?>
<?php $component = $__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d; ?>
<?php unset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH /Users/wadingaleonardngonga/Documents/Projects/axesprime/resources/views/emails/NewNotification.blade.php ENDPATH**/ ?>