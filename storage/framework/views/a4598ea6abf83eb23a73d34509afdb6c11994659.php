<?php
	if (Auth::user()->dashboard_style == "light") {
		$bg="light";
		$text = "dark";
	} else {
		$bg="dark";
		$text = "light";
	}
?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('user.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('user.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="main-panel bg-<?php echo e($bg); ?>">
    <div class="content bg-<?php echo e($bg); ?>">
        <div class="page-inner">
            <div class="mt-2 mb-5">
                <h1 class="title1 text-<?php echo e($text); ?>">Account Verification</h1> <br> <br>
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


            <?php if(\App\Models\Setting::getValue('enable_kyc') =="yes"): ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-5 row">
                        <div class="col-lg-8 offset-lg-2 card p-4 shadow-lg bg-<?php echo e($bg); ?>">
                            <h1 class="nav-link text-<?php echo e($text); ?>" data-toggle="dropdown" href="#" aria-expanded="false">
                                KYC
                            </h1>
                            <div class="quick-actions-header">
                                <?php if(Auth::user()->account_verify=='yes'): ?>
                                <h4 class="ml-3 text-<?php echo e($text); ?>">
                                    <a href="#" class="p-0 col-12"><i class="glyphicon glyphicon-ok"></i> KYC status: Account verified</a>
                                </h4>
                                <?php else: ?>
                                <h4 class="ml-3 text-<?php echo e($text); ?>"><a>KYC status: <?php echo e(Auth::user()->account_verify); ?></a></h4>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <?php if(count($errors) > 0): ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-danger alert-dismissable" role="alert">
                        <button type="button" clsass="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <i class="fa fa-warning"></i> <?php echo e($error); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <div class="mb-5 row">

                <div class="col-lg-8 offset-lg-2 card p-4 shadow-lg bg-<?php echo e($bg); ?>">
                    <div class="py-3">
                        <h5 class="text-<?php echo e($text); ?>">KYC verification - Upload documents below to get verified.</h5>
                    </div>
                    <form role="form" method="post" action="<?php echo e(route('kycsubmit')); ?>" enctype="multipart/form-data">
                        <h5 class="text-<?php echo e($text); ?>">Valid identity card. (e.g. Drivers licence, international passport or any government approved document).</h5>
                        <input type="file" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" name="idcard" required><br>
                        <img src="<?php echo e(asset('storage/photos/'.Auth::user()->id_card)); ?>" width="100">
                        <h5 class="text-<?php echo e($text); ?>">Address Document</h5>
                        <input type="file" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" name="address_document" required><br>
                        <img src="<?php echo e(asset('storage/photos/'.Auth::user()->passport)); ?>" width="100">
                        <h5 class="text-<?php echo e($text); ?>">Passport photogragh</h5>
                        <input type="file" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" name="passport" required><br>
                        <img src="<?php echo e(asset('storage/photos/'.Auth::user()->address_document)); ?>">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" width="100">
                        <input type="submit" class="btn btn-<?php echo e($text); ?>" value="Submit documents">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadingaleonardngonga/Documents/Projects/axesprime/resources/views/user/verify.blade.php ENDPATH**/ ?>