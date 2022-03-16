<?php $__env->startSection('title', 'PayPal Payment'); ?>

<?php $__env->startSection('deposits-and-withdrawals', 'c-show'); ?>
<?php $__env->startSection('deposits', 'c-active'); ?>

<?php $__env->startSection('loadPaypal'); ?>
<script src="https://www.paypal.com/sdk/js?client-id=<?php echo e(\App\Models\Setting::getValue('pp_ci ')); ?>&currency=USD"></script>
<?php $__env->stopSection(); ?>

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
                                <div class="alert alert-info alert-dismissable">
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
                                <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <i class="fa fa-warning"></i> <?php echo e($error); ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>

                        <div class="row">
                            <div class="col p-2">
                                <div class="p-3 text-center">
                                    <h3 class="">You are sending
                                        <strong><?php echo e(\App\Models\Setting::getValue('currency')); ?><?php echo e($amount); ?>

                                            USD</strong>
                                    </h3>
                                </div>
                                <div class="row justify-content-center m-3">
                                    <div class="col-lg-4">
                                        <div class="card shadow">
                                            <div class="card-body">
                                                <h3 class="">
                                                    <a style="text-decoration:none;" class="collapsed"
                                                        data-toggle="collapse" data-parent="#accordion" href="#paypal">
                                                        <strong>PayPal</strong> <img
                                                            src="<?php echo e(asset('home/images/pp.png')); ?>" width="40px;"
                                                            height="40px;">
                                                    </a>
                                                </h3>
                                                <div id="paypal" class="panel-collapse">
                                                    <h4 class="">
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
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadleo/Documents/Projects/axeprogroup/axepro/resources/views/user/paypal.blade.php ENDPATH**/ ?>