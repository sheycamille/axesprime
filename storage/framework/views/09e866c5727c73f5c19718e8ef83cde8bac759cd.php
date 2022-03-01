<?php $__env->startSection('title', 'Payment Method Selection'); ?>

<?php $__env->startSection('deposits-and-withdrawals', 'c-show'); ?>
<?php $__env->startSection('deposits', 'c-active'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('user.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('user.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header fw-bolder">
                        <?php echo e($title); ?>

                    </div>
                    <div class="card-body">

                        <?php if(Session::has('message')): ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>
                                    <i class="fa fa-info-circle"></i>
                                    <p class="alert-message"><?php echo Session::get('message'); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>

                        <?php if(count($errors) > 0): ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="alert alert-danger alert-dismissable" role="alert">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <i class="fa fa-warning"></i> <?php echo e($error); ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>

                        <div class="mb-5">
                            <div class="row text-center d-flex p-4">
                                
                                    <?php $__empty_1 = true; $__currentLoopData = $pmethods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pmethod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <div class="col-lg-4 p-4">
                                        <div class="pricing-table purple border">
                                            <h2 class=""><?php echo e($pmethod->name); ?></h2>
                                            <div class="pricing-features">
                                                <div class="feature">
                                                <?php echo app('translator')->get('message.body.min'); ?>: <span class=""><?php echo e(\App\Models\Setting::getValue('currency')); ?><?php echo e($pmethod->minimum); ?></span>
                                                </div>
                                                <div class="feature"><?php echo app('translator')->get('message.body.mex'); ?>:
                                                    <span class=""><?php echo e(\App\Models\Setting::getValue('currency')); ?><?php echo e($pmethod->maximum); ?></span>
                                                </div>
                                                <div class="feature">
                                                <?php echo app('translator')->get('message.body.dur'); ?>: <span class=""><?php echo e($pmethod->duration); ?></span>
                                                </div>
                                            </div> <br>
                                            <div class="">
                                                <a class="btn btn-block pricing-action btn-primary nav-pills"
                                                    href="<?php echo e(route('startpayment', [$account->id, $pmethod->id])); ?>"><?php echo app('translator')->get('message.body.dp'); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <p class=""><?php echo app('translator')->get('message.body.suite'); ?> .</p>
                                    <?php endif; ?>
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $__env->make('user.modals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadleo/Documents/Projects/axeprogroup/axepro/resources/views/user/paymentmethods.blade.php ENDPATH**/ ?>