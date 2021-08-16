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
                <div class="mt-2 mb-5">
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
                    <div class="col card bg-<?php echo e($bg); ?> p-2 d-flex justify-content-center">
                        <div class="d-flex justify-content-center">
                            <div class="col-md-8">
                                <div class="text-center">
                                    <h3 class="text-<?php echo e($text); ?>">Pay
                                        <strong><?php echo e(\App\Models\Setting::getValue('currency')); ?><?php echo e($amount); ?>

                                            USD</strong>
                                    </h3>
                                </div>
                                <div class="card bg-<?php echo e($bg); ?> shadow text-<?php echo e($text); ?>">
                                    <div class="card-body">
                                        <div id="paypound" class="d-flex justify-content-center col-xs-12">
                                            <form method="post" action="<?php echo e(route('startpaypoundcharge')); ?>"
                                                enctype="multipart/form-data" class="form">
                                                <h3 class="text-<?php echo e($text); ?> text-center pt-5 pb-3">
                                                    Personal Details:
                                                    <a class="pt-5" style="text-decoration:none;" href="#paypound">
                                                        <?php echo e($wallet_address); ?>

                                                    </a>
                                                </h3>
                                                <div class="form-group d-flex justify-content-center col-xs-12">
                                                    <div class="col-md-5" style="display: inline-block;">
                                                        <h5 class="text-<?php echo e($text); ?>">First Name*</h5>
                                                        <input type="text" name="first_name"
                                                            class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>"
                                                            value="<?php echo e(Auth::user()->email); ?>" required>
                                                    </div>
                                                    <div class="col-md-5" style="display: inline-block;">
                                                        <h5 class="text-<?php echo e($text); ?>">Last Name*</h5>
                                                        <input type="text" name="last_name"
                                                            class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>"
                                                            value="<?php echo e(Auth::user()->name); ?>" required>
                                                    </div>
                                                </div>
                                                <div class="form-group d-flex justify-content-center col-xs-12">
                                                    <div class="col-md-5" style="display: inline-block;">
                                                        <h5 class="text-<?php echo e($text); ?>">Email*</h5>
                                                        <input type="text" name="email"
                                                            class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>"
                                                            value="<?php echo e(Auth::user()->email); ?>" required>
                                                    </div>
                                                    

                                                    <div class="col-md-5" style="display: inline-block;">
                                                        <h5 class="text-<?php echo e($text); ?>">Phone No*</h5>
                                                        <input type="text" name="phone_no"
                                                            class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>"
                                                            value="<?php echo e(Auth::user()->phone); ?>" required>
                                                    </div>
                                                </div>
                                                <div class="form-group d-flex justify-content-center col-xs-12">
                                                    <div class="col-md-5" style="display: inline-block;">
                                                        <h5 class="text-<?php echo e($text); ?>">Address*</h5>
                                                        <input type="text" name="address"
                                                            class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>"
                                                            value="<?php echo e(Auth::user()->address); ?>" required>
                                                    </div>
                                                    <div class="col-md-5" style="display: inline-block;">
                                                        <h5 class="text-<?php echo e($text); ?>">City*</h5>
                                                        <input type="text" name="city"
                                                            class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>"
                                                            value="<?php echo e(Auth::user()->town); ?>" required>
                                                    </div>
                                                </div>
                                                <div class="form-group d-flex justify-content-center col-xs-12">
                                                    <div class="col-md-5" style="display: inline-block;">
                                                        <h5 class="text-<?php echo e($text); ?>">State*</h5>
                                                        <input type="text" name="state"
                                                            class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>"
                                                            value="<?php echo e(Auth::user()->state); ?>" required>
                                                    </div>
                                                    <div class="col-md-2" style="display: inline-block;">
                                                        <h5 class="text-<?php echo e($text); ?>">Zip Code*</h5>
                                                        <input type="text" name="zip"
                                                            class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>"
                                                            value="<?php echo e(Auth::user()->zip_code); ?>" required>
                                                    </div>
                                                    <div class="col-md-3" style="display: inline-block;">
                                                        <h5 class="text-<?php echo e($text); ?>">Country*</h5>
                                                        
                                                        <select
                                                            class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>"
                                                            name="country" id="country" required>
                                                            <option selected disabled>Choose Country</option>
                                                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option <?php if(Auth::user()->country == $code || Auth::user()->country == $name): ?> selected <?php endif; ?>
                                                                    value="<?php echo e($code); ?>">
                                                                    <?php echo e($name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select> <br>
                                                    </div>
                                                </div>

                                                <h3 class="text-<?php echo e($text); ?> text-center pt-5 pb-3">
                                                    Card Details:
                                                    <a class="pt-5" style="text-decoration:none;" href="#paypound">
                                                        <?php echo e($wallet_address); ?>

                                                    </a>
                                                </h3>

                                                <div class="form-group d-flex justify-content-center col-xs-12">
                                                    <div class="col-md-4" style="display: inline-block;">
                                                        <h5 class="text-<?php echo e($text); ?>">Card No*</h5>
                                                        <input type="text" name="card_no"
                                                            class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>"
                                                            value="" required>
                                                    </div>
                                                    <div class="col-md-2" style="display: inline-block;">
                                                        <h5 class="text-<?php echo e($text); ?>">Expiry Month*</h5>
                                                        <input type="text" name="ccExpiryMonth"
                                                            class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>"
                                                            value="" required>
                                                    </div>
                                                    <div class="col-md-2" style="display: inline-block;">
                                                        <h5 class="text-<?php echo e($text); ?>">Expiry Year*</h5>
                                                        <input type="text" name="ccExpiryYear"
                                                            class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>"
                                                            value="" required>
                                                    </div>
                                                    <div class="col-md-2" style="display: inline-block;">
                                                        <h5 class="text-<?php echo e($text); ?>">CVV Number*</h5>
                                                        <input type="text" name="cvvNumber"
                                                            class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>"
                                                            value="" required>
                                                    </div>
                                                </div>

                                                <div class="form-group d-flex justify-content-center col-xs-12">
                                                    <div class="col-md-5" style="display: inline-block;">
                                                        <h5 class="text-<?php echo e($text); ?>">Currency*</h5>
                                                        <input type="text" name="currency"
                                                            class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>"
                                                            value="USD" required>
                                                    </div>
                                                    <div class="col-md-5" style="display: inline-block;">
                                                        <h5 class="text-<?php echo e($text); ?>">Amount*</h5>
                                                        <input type="text" name="amount"
                                                            class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>"
                                                            value="<?php echo e($amount); ?>" required>
                                                    </div>
                                                </div>

                                                <div
                                                    class="form-group d-flex justify-content-center col-xs-12 d-flex justify-content-center col-xs-12">
                                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                                    <input type="submit" class="btn btn-<?php echo e($text); ?>"
                                                        value="Submit">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadingaleonardngonga/Documents/Projects/axesprime/resources/views/user/paypound.blade.php ENDPATH**/ ?>