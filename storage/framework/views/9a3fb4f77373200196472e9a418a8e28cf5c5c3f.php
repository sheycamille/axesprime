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
                                    <div class="col-md-8">
                                        <div class="text-center">
                                            <h3 class="">Pay
                                                <strong><?php echo e(\App\Models\Setting::getValue('currency')); ?><?php echo e($amount); ?>

                                                    USD</strong>
                                            </h3>
                                        </div>
                                        <div class="card shadow">
                                            <div class="card-body">
                                                <div id="chargemoney" class="d-flex justify-content-center col-xs-12">
                                                    <form method="post" action="<?php echo e(route('startywallitpaycharge')); ?>"
                                                        enctype="multipart/form-data" class="form">

                                                        <div class="form-group d-flex justify-content-center col-xs-12">
                                                            <div class="col-md-6" style="display: inline-block;">
                                                                <h5 class="">Name on card*</h5>
                                                                <input type="text" name="owner"
                                                                    class="form-control"
                                                                    value="<?php echo e(Auth::user()->name); ?>" required>
                                                            </div>
                                                            <div class="col-md-6" style="display: inline-block;">
                                                                <h5 class="">Card No*</h5>
                                                                <input type="text" name="card_no" class="form-control"
                                                                    value="" required>
                                                            </div>
                                                        </div>

                                                        <div class="form-group d-flex justify-content-center col-xs-12">
                                                            <div class="col-md-4" style="display: inline-block;">
                                                                <h5 class="">CVV Number*</h5>
                                                                <input type="text" name="cvv" class="form-control"
                                                                    value="" required>
                                                            </div>
                                                            <div class="col-md-4" style="display: inline-block;">
                                                                <h5 class="">Expiry Month*</h5>
                                                                <input type="text" name="expMonth"
                                                                    class="form-control" value="" required>
                                                            </div>
                                                            <div class="col-md-4" style="display: inline-block;">
                                                                <h5 class="">Expiry Year*</h5>
                                                                <input type="text" name="expYear"
                                                                    class="form-control" value="" required>
                                                            </div>
                                                        </div>

                                                        <div class="form-group d-flex justify-content-start col-xs-12">
                                                            <div class="col-md-4" style="display: inline-block;">
                                                                <h5 class="">Currency*</h5>
                                                                <input type="text" name="currency" class="form-control"
                                                                    value="4" required>
                                                            </div>
                                                            <div class="col-md-4" style="display: inline-block;">
                                                                <h5 class="">Amount*</h5>
                                                                <input type="text" name="amount" class="form-control"
                                                                    value="<?php echo e($amount); ?>" required>
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="form-group d-flex justify-content-center col-xs-12 d-flex justify-content-center col-xs-12">
                                                            <input type="hidden" name="_token"
                                                                value="<?php echo e(csrf_token()); ?>">
                                                            <input type="submit" class="btn btn-primary" value="Submit">
                                                        </div>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadleo/Documents/Projects/axeprogroup/axepro/resources/views/user/authorizenet.blade.php ENDPATH**/ ?>