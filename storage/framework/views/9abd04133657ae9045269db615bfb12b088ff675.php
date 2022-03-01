<?php $__env->startSection('title', 'Interac Payment'); ?>

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
                            <div class="col card p-2">
                                <div class="p-3 text-center">
                                    <h3 class="">You are sending
                                        <strong><?php echo e(\App\Models\Setting::getValue('currency')); ?><?php echo e($amount); ?>

                                            USD</strong> to
                                        the Interac details below
                                    </h3>
                                </div>
                                <div class="row justify-content-center m-3">
                                    <div class="col-lg-4">
                                        <div class="card shadow">
                                            <div class="card-body">
                                                <h3>
                                                    <a style="text-decoration:none;" class="collapsed"
                                                        data-toggle="collapse" data-parent="#accordion" href="#interac">
                                                        <strong>Interac Details </strong>
                                                    </a>
                                                </h3>
                                                <div id="interac" class="panel-collapse">
                                                    <div class="">
                                                        <?php if(\App\Models\Setting::getValue('interac_name')): ?>
                                                        <h4 class=""><strong>Name:</strong>
                                                            <?php echo e(\App\Models\Setting::getValue('interac_name')); ?></h4>
                                                        <?php endif; ?>
                                                        <?php if(\App\Models\Setting::getValue('interac_email')): ?>
                                                        <h4 class=""><strong>Email:</strong>
                                                            <?php echo e(\App\Models\Setting::getValue('interac_email')); ?></h4>
                                                        <?php endif; ?>
                                                        <?php if(\App\Models\Setting::getValue('interac_phone')): ?>
                                                        <h4 class=""><strong>Phone
                                                                Number:</strong>
                                                            <?php echo e(\App\Models\Setting::getValue('interac_phone')); ?></h4>
                                                        <?php endif; ?>
                                                        <h4 class=""><strong>Message:</strong>
                                                            <?php echo e(\App\Models\Setting::getValue('interac_message')); ?></h4>
                                                        <h4 class=""><strong>Question:</strong>
                                                            <?php echo e(\App\Models\Setting::getValue('interac_question')); ?></h4>
                                                        <h4 class=""><strong>Answer:</strong>
                                                            <?php echo e(\App\Models\Setting::getValue('interac_answer')); ?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <form class="col-md-4" method="post" action="<?php echo e(route('savedeposit')); ?>"
                                        enctype="multipart/form-data">
                                        <h3 class="">Upload proof of payment.</h3>
                                        <input type="file" name="proof" class="form-control" required>
                                        <br>

                                        <h5 class="">Payment Mode Used:</h5>
                                        <select name="payment_mode" class="form-control" required>
                                            <option value="<?php echo e($dmethod->name); ?>"><?php echo e($dmethod->name); ?></option>
                                        </select>
                                        <br>
                                        <input type="hidden" name="amount" value="<?php echo e($amount); ?>">
                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <input type="submit" class="btn btn-primary" value="Submit Proof">
                                    </form>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadleo/Documents/Projects/axeprogroup/axepro/resources/views/user/interac.blade.php ENDPATH**/ ?>