<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->yieldContent('loadPaypal'); ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $__env->yieldContent('title'); ?> | <?php echo e(\App\Models\Setting::getValue('site_name')); ?></title>

    <meta name="description"
        content="<?php echo e(\App\Models\Setting::getValue('site_description')); ?> AxePro offers CFDs on currency pairs and five other asset classes. Start trading forex online with the world’s best forex broker.">
    <meta name="keywords"
        content="forex, exchange, broker, crypto, trading, indices, shares, stocks, bonds, cryptocurrencies, futures, energies">
    <meta name="author" content="axeprogroup">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f2f3f5" />

    <link rel="icon" href="<?php echo e(asset('front/favicon.png')); ?>" type="image/png" />

    <!-- Icons-->
    <link href="<?php echo e(asset('admin/css/free.min.css')); ?>" rel="stylesheet"> <!-- icons -->

    
    <!-- Main styles for this application-->
    <link href="<?php echo e(asset('admin/css/style.css')); ?>" rel="stylesheet">

    <?php echo $__env->yieldContent('css'); ?>
</head>

<body class="c-app">

    <?php echo $__env->yieldContent('sidebar'); ?>

    <div class="c-wrapper">

        <?php echo $__env->yieldContent('topbar'); ?>

        <div class="c-body">

            <main class="c-main">

                <?php echo $__env->yieldContent('content'); ?>

            </main>

            <footer class="c-footer">
                <div><a href="https://axeprogroup.com">AxePro Group</a> &copy; 2022.</div>
                <div class="ml-auto">Powered by&nbsp;<a href="https://axeprogroup.com/">AxePro Group</a></div>
            </footer>
        </div>
    </div>

    <!-- AxePro and necessary plugins-->
    <script src="<?php echo e(asset('admin/js/coreui.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/coreui-utils.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/jquery.min.js')); ?>"></script>
    <?php echo $__env->yieldContent('javascript'); ?>

</body>

</html>
<?php /**PATH C:\laragon\www\axesprime\resources\views/layouts/app.blade.php ENDPATH**/ ?>