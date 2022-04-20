<?php $__env->startSection('title', 'ChargeMoney Payment'); ?>

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
                            <div class="col p-2 d-flex justify-content-center">
                                <div class="d-flex justify-content-center">
                                    <div class="col-md-10">
                                        <div class="text-center">
                                            <h3 class="">Pay
                                                <strong><?php echo e(\App\Models\Setting::getValue('currency')); ?><?php echo e($amount); ?>

                                                    USD</strong>
                                            </h3>
                                        </div>
                                        <div class="card shadow">
                                            <div class="card-body">
                                                <div id="virtualpay" class="d-flex justify-content-center col-xs-12">
                                                    

                                                    <form id="payment" action="https://uat.evirtualpay.com/vpcheckout/index.php" method="POST">
                                                        <input type="hidden" name="MID"  value="<?php echo e(config('virtualpay.demo_mid')); ?>">
                                                        <input type="hidden" name="API_KEY" value="<?php echo e(config('virtualpay.demo_api_key')); ?>">
                                                        <input type="hidden" name="PRIVATE_KEY" value="<?php echo e(config('virtualpay.private_key')); ?>">
                                                        <input type="hidden" name="REDIRECT_URL" value="<?php echo e(route('startvirtualpaycharge')); ?>">
                                                        <input type="hidden" name="NOTIFICATION_URL" value="<?php echo e(route('verifyvirtualpaycharge')); ?>">
                                                        <input type="hidden" name="FIRST_NAME" value="<?php echo e(Auth::user()->name); ?>">
                                                        <input type="hidden" name="LAST_NAME" value="<?php echo e(Auth::user()->name); ?>">
                                                        <input type="text" name="REQUESTID" value="<?php echo e(Auth::user()->id . time()); ?>">
                                                        <input type="hidden" name="MOBILE" value="<?php echo e(Auth::user()->phone); ?>">
                                                        <input type="hidden" name="EMAIL" value="<?php echo e(Auth::user()->email); ?>">
                                                        <input type="hidden" name="ID" value="<?php echo e(Auth::user()->id . time()); ?>">
                                                        <input type="hidden" name="CITY" value="<?php echo e(Auth::user()->town); ?>">
                                                        <input type="hidden" name="COUNTRY" value="<?php echo e(strtoupper(Auth::user()->country->code)); ?>">
                                                        <input type="hidden" name="AMOUNT" value="<?php echo e($amount); ?>">
                                                        <input type="hidden" name="CURRENCY" value="USD">
                                                        <input type="hidden" name="DESCRIPTION" value="Account <?php echo e(Auth::user()->id); ?> pay <?php echo e($amount); ?>usd">
                                                        <input type="hidden" name="POSTAL CODE" value="<?php echo e(Auth::user()->zip_code); ?>">
                                                        <input type="hidden" name="STATE CODE" value="<?php echo e(Auth::user()->state); ?>">
                                                        <br>
                                                        <input type='submit' name='submit' value='Submit' /><br>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadleo/Documents/Projects/axeprogroup/axepro/resources/views/user/virtualpay.blade.php ENDPATH**/ ?>