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
                        <p class="text-center"><?php echo app('translator')->get('message.body.metatrader'); ?></p>
                    </div>
                    <div class="card-body">
                        <a href="<?php echo e(asset('downloads/axeprogroupmt5setup.exe.zip')); ?>" class="btn btn-primary"><?php echo app('translator')->get('message.body.windows'); ?></a>
                        <a href="https://download.mql5.com/cdn/mobile/mt5/android?server=AxesPrimeLtd-Demo,AxesPrimeLtd-Live"
                            class="btn btn-primary" target="_blank"><?php echo app('translator')->get('message.body.android'); ?> </a>
                        <a href="https://download.mql5.com/cdn/mobile/mt5/ios?server=AxesPrimeLtd-Demo,AxesPrimeLtd-Live"
                            class="btn btn-primary" target="_blank"><?php echo app('translator')->get('message.body.iphone'); ?></a>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-header">
                        <h1>METATRADER 4</h1>
                        <p class="text-center"><?php echo app('translator')->get('message.body.metatrader'); ?></p>
                    </div>
                    <div class="card-body">
                        <a href="<?php echo e(asset('downloads/axepromt4setup.exe.zip')); ?>" class="btn btn-primary"><?php echo app('translator')->get('message.body.windows'); ?></a>
                        <a href="https://download.mql5.com/cdn/mobile/mt4/android?server=AxesPrimeLtd-Demo,AxesPrimeLtd-Live"
                            class="btn btn-primary" target="_blank"><?php echo app('translator')->get('message.body.android'); ?> </a>
                        <a href="https://download.mql5.com/cdn/mobile/mt4/ios?server=AxesPrimeLtd-Demo,AxesPrimeLtd-Live"
                            class="btn btn-primary" target="_blank"><?php echo app('translator')->get('message.body.iphone'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadingaleonardngonga/Documents/Projects/axesprime/resources/views/user/downloads.blade.php ENDPATH**/ ?>