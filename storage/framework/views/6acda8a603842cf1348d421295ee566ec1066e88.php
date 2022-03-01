<?php $__env->startSection('title', 'My Downloads'); ?>

<?php $__env->startSection("downloads", 'c-active'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('user.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('user.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-lg-12">
                <div class="card text-center">
                    <div class="card-header">
                        <h1>METATRADER 5</h1>
                        <p class="text-center">Download MetaTrader&nbsp;5 For PC, smartphones, and&nbsp;tablets.</p>
                    </div>
                    <div class="card-body">
                        <a href="<?php echo e(asset('downloads/axeprogroupmt55setup.exe')); ?>" class="btn btn-primary">Download For
                            Windows</a>
                        <a href="https://download.mql5.com/cdn/mobile/mt5/android?server=AxesPrimeLtd-Demo,AxesPrimeLtd-Live"
                            class="btn btn-primary">Andriod Download</a>
                        <a href="https://download.mql5.com/cdn/mobile/mt5/ios?server=AxesPrimeLtd-Demo,AxesPrimeLtd-Live"
                            class="btn btn-primary">iphone Download</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadleo/Documents/Projects/axeprogroup/axepro/resources/views/user/downloads.blade.php ENDPATH**/ ?>