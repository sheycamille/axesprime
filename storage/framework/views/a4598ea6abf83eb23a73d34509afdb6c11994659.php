<?php
if (Auth::user()->dashboard_style == 'light') {
    $bg = 'light';
    $text = 'dark';
} else {
    $bg = 'dark';
    $text = 'light';
} ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('user.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('user.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-panel bg-<?php echo e($bg); ?>">
        <div class="content bg-<?php echo e($bg); ?>">
            <div class="page-inner">
                <div class="mt-2 mb-5">
                    <h1 class="title1 text-<?php echo e($text); ?> text-center">Account Verification</h1> <br> <br>
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


                <?php if(\App\Models\Setting::getValue('enable_kyc') == 'yes'): ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-5 row">
                                <div class="col-lg-8 offset-lg-2 card p-4 shadow-lg bg-<?php echo e($bg); ?>">
                                    <h1 class="nav-link text-<?php echo e($text); ?>" data-toggle="dropdown" href="#"
                                        aria-expanded="false">
                                        KYC
                                    </h1>
                                    <div class="quick-actions-header">
                                        <?php if(Auth::user()->account_verify == ''): ?>
                                            <h4 class="ml-3 text-<?php echo e($text); ?>">
                                                <a href="#" class="p-0 col-12"><i class="glyphicon glyphicon-ok"></i> KYC
                                                    Status: Not Verified</a>
                                            </h4>
                                        <?php else: ?>
                                            <h4 class="ml-3 text-<?php echo e($text); ?>">
                                                <a> KYC Status: <?php echo e(Auth::user()->account_verify); ?></a>
                                            </h4>
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
                                <button type="button" clsass="close" data-dismiss="alert"
                                    aria-hidden="true">&times;</button>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <i class="fa fa-warning"></i> <?php echo e($error); ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if(\App\Models\Setting::getValue('enable_kyc') == 'yes' && Auth::user()->account_verify != 'Verified'): ?>
                    <div class="mb-5 row">

                        <div class="col-lg-8 offset-lg-2 card p-4 shadow-lg bg-<?php echo e($bg); ?>">
                            <div class="py-3">
                                <h3 class="text-<?php echo e($text); ?>">KYC verification - Upload documents below to get
                                    verified(ensure all the four corners of the document are visible for verification
                                    purposes).
                                </h3>
                            </div>
                            <form role="form" method="post" action="<?php echo e(route('kycsubmit')); ?>"
                                enctype="multipart/form-data">
                                <h5 class="text-<?php echo e($text); ?>">Identity Document. (e.g. Drivers licence,
                                    international
                                    passport or any government approved document).</h5>
                                <input type="file" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>"
                                    name="idcard" <?php if(!Auth::user()->id_card): ?> required <?php endif; ?> value="<?php echo e(asset('storage/photos/' . Auth::user()->id_card)); ?>">
                                <?php if(Auth::user()->id_card): ?>
                                    <img src="<?php echo e(asset('storage/photos/' . Auth::user()->id_card)); ?>" width="100">
                                <?php endif; ?>
                                <br><br>

                                <h5 class="text-<?php echo e($text); ?>">Back of Identity Document.</h5>
                                <input type="file" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>"
                                    name="idcard_back" <?php if(!Auth::user()->id_card_back): ?> required <?php endif; ?>
                                    value="<?php echo e(asset('storage/photos/' . Auth::user()->id_card_back)); ?>">
                                <?php if(Auth::user()->id_card_back): ?>
                                    <img src="<?php echo e(asset('storage/photos/' . Auth::user()->id_card_back)); ?>" width="100">
                                <?php endif; ?>
                                <br><br>

                                <h5 class="text-<?php echo e($text); ?>">Address Document</h5>
                                <input type="file" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>"
                                    name="address_document" <?php if(!Auth::user()->address_document): ?> required <?php endif; ?>
                                    value="<?php echo e(asset('storage/photos/' . Auth::user()->address_document)); ?>">
                                <?php if(Auth::user()->address_document): ?>
                                    <img src="<?php echo e(asset('storage/photos/' . Auth::user()->address_document)); ?>"
                                        width="100">>
                                <?php endif; ?>
                                <br><br>

                                <h5 class="text-<?php echo e($text); ?>">Selfie with ID Card</h5>
                                <input type="file" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>"
                                    name="passport" <?php if(!Auth::user()->passport): ?> required <?php endif; ?>
                                    value="<?php echo e(asset('storage/photos/' . Auth::user()->passport)); ?>">
                                <?php if(Auth::user()->passport): ?>
                                    <img src="<?php echo e(asset('storage/photos/' . Auth::user()->passport)); ?>" width="100">
                                <?php endif; ?>
                                <br><br>

                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <input type="submit" class="btn btn-<?php echo e($text); ?>" value="Submit documents">
                            </form>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadingaleonardngonga/Documents/Projects/axesprime/resources/views/user/verify.blade.php ENDPATH**/ ?>