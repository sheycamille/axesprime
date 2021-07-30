<?php
if (Auth::user()->dashboard_style == 'light') {
$bgmenu = 'blue';
$bg = 'light';
$text = 'dark';
} else {
$bgmenu = 'dark';
$bg = 'dark';
$text = 'light';
} ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('user.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('user.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-panel bg-<?php echo e($bg); ?>">
        <div class="content bg-<?php echo e($bg); ?>">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h1 class="title1 text-<?php echo e($text); ?> text-center">Account Profile Information</h1>
                    <p class="text-capitalize">
                        Account Type:
                        <span class="text-white"><?php echo e(Auth::user()->accounttype->name); ?></span>
                    </p>
                </div>
                <?php if(Session::has('message')): ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <i class="fa fa-info-circle"></i> <?php echo e(Session::get('message')); ?>

                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if(count($errors) > 0): ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-danger alert-dismissable" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <i class="fa fa-warning"></i> <?php echo e($error); ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="row profile">

                    <div class="p-2 col-md-8 offset-md-2">
                        <div class="card p-5 shadow-lg bg-<?php echo e($bg); ?>">

                            <form role="form" method="post" action="<?php echo e(route('userprofile')); ?>">
                                <h5 class="text-<?php echo e($text); ?>">Email</h5>
                                <input type="text" value="<?php echo e(Auth::user()->email); ?>"
                                    class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" readonly> <br>
                                <h5 class="text-<?php echo e($text); ?>">Full Name</h5>
                                <input type="text" name="name" value="<?php echo e(Auth::user()->name); ?>"
                                    class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>"> <br>
                                <h5 class="text-<?php echo e($text); ?>">Date of Birth</h5>
                                <input type="date" name="dob"
                                    class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>"
                                    value="<?php echo e(Auth::user()->dob); ?>"> <br>
                                <h5 class="text-<?php echo e($text); ?>">Phone Number</h5>
                                <input type="text" name="phone"
                                    class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>"
                                    value="<?php echo e(Auth::user()->phone); ?>"> <br>
                                <h5 class="text-<?php echo e($text); ?>">Address</h5>
                                <textarea class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>"
                                    placeholder="Address" name="address" row="3"
                                    value="<?php echo e(Auth::user()->address); ?>"><?php echo e(Auth::user()->address); ?></textarea><br />
                                <h5 class="text-<?php echo e($text); ?>">Town/City</h5>
                                <input type="text" value="<?php echo e(Auth::user()->town); ?>"
                                    class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" name="town"
                                    required> <br>
                                <h5 class="text-<?php echo e($text); ?>">State/Region</h5>
                                <input type="text" value="<?php echo e(Auth::user()->state); ?>"
                                    class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" name="state"
                                    required> <br>
                                <h5 class="text-<?php echo e($text); ?>">Zip Code</h5>
                                <input type="text" value="<?php echo e(Auth::user()->zip_code); ?>"
                                    class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" name="zip_code"
                                    required> <br>
                                <h5 class="text-<?php echo e($text); ?>">Country</h5>
                                
                                <select class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>"
                                    name="country" id="country" required>
                                    <option selected disabled>Choose Country</option>
                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php if(Auth::user()->country == $code): ?> selected <?php endif; ?> value="<?php echo e($code); ?>">
                                            <?php echo e($name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select> <br>
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <input type="submit" class="btn btn-primary" value="Save">
                            </form>

                            <div class="mt-3">
                                <a href="<?php echo e(route('twofa')); ?>"
                                    class="btn btn-primary"><?php echo e(__('Manage Account Security')); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadingaleonardngonga/Documents/Projects/axesprime/resources/views/user/profile.blade.php ENDPATH**/ ?>