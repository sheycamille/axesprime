<?php
if (Auth::user()->dashboard_style == 'light') {
$bg = 'light';
$text = 'dark';
} else {
$bg = 'dark';
$text = 'light';
} ?>

<?php $__env->startSection('deposits-and-withdrawals', 'active'); ?>
<?php $__env->startSection('deposits', 'active'); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('user.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('user.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-panel bg-<?php echo e($bg); ?>">
        <div class="content bg-<?php echo e($bg); ?>">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h1 class="title1 text-<?php echo e($text); ?> text-center"><?php echo e($title); ?></h1>
                </div>

                <?php if(Session::has('message')): ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <i class="fa fa-info-circle"></i>
                                <p class="alert-message"><?php echo Session::get('message'); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if(count($errors) > 0): ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <i class="fa fa-warning"></i> <?php echo e($error); ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="row">
                    <div class="col card bg-<?php echo e($bg); ?> p-2">
                        <div class="p-3 text-center">
                            <h3 class="text-<?php echo e($text); ?>">You are sending
                                <strong><?php echo e(\App\Models\Setting::getValue('currency')); ?><?php echo e($amount); ?> USD</strong>
                            </h3>
                        </div>
                        <div class="row justify-content-center m-3">
                            <div class="col-lg-4">
                                <div class="card bg-<?php echo e($bg); ?> shadow text-<?php echo e($text); ?>">
                                    <div class="card-body">
                                        <h3 class="text-<?php echo e($text); ?>">
                                            <a style="text-decoration:none;" class="collapsed" data-toggle="collapse"
                                                data-parent="#accordion" href="#paypal">
                                                <strong>PayPal</strong> <img src="<?php echo e(asset('home/images/pp.png')); ?>"
                                                    width="40px;" height="40px;">
                                            </a>
                                        </h3>
                                        <div id="paypal" class="panel-collapse">
                                            <h4 class="text-<?php echo e($text); ?>">
                                                <?php echo $__env->make('includes.paypal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br> <br>

                        
                    </div>
                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadingaleonardngonga/Documents/Projects/axesprime/resources/views/user/paypal.blade.php ENDPATH**/ ?>