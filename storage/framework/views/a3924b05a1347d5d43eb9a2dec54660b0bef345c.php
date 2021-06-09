<?php
	if (Auth::user()->dashboard_style == "light") {
		$bgmenu="blue";
    $bg="light";
    $text = "dark";
} else {
    $bgmenu="dark";
    $bg="dark";
    $text = "light";
}
?>

<?php $__env->startSection("support", 'active'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('user.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('user.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="main-panel bg-<?php echo e($bg); ?>">
    <div class="content bg-<?php echo e($bg); ?>">
        <div class="page-inner">
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
            <div class="mb-5 row p-md-3 ">
                <div class="shadow col-12 p-md-2">
                    <div class="col-12 text-center bg-<?php echo e($bg); ?> p-3">
                        <h1 class="title1 text-<?php echo e($text); ?>"><?php echo e(\App\Models\Setting::getValue('site_name')); ?> Support</h1>
                        <div class="sign-up-row widget-shadow text-<?php echo e($text); ?>">
                            <h4 class="text-<?php echo e($text); ?>">For inquiries, suggestions or complains. Mail us at</h4>
                            <h5 class="text-<?php echo e($text); ?> mt-3"><?php echo e(\App\Models\Setting::getValue('contact_email')); ?>

                        </div>
                    </div>
                    <div class="col-md-8 offset-md-2">
                        <form method="post" action="<?php echo e(route('enquiry')); ?>">
                            <input type="hidden" name="name" value="<?php echo e(Auth::user()->name); ?>" />
                            <div class="form-group">
                                <input type="hidden" name="email" value="<?php echo e(Auth::user()->email); ?>">
                            </div>
                            <div class="form-group">
                                <h5 for="" class="text-<?php echo e($text); ?>">Subject <span class=" text-danger">*</span></h5>
                                <input type="text" name="subject" class="form-control text-<?php echo e($text); ?> bg-<?php echo e($bg); ?>" required>
                            </div>
                            <div class="form-group">
                                <h5 for="" class="text-<?php echo e($text); ?>">Message<span class=" text-danger">*</span></h5>
                                <textarea name="message" class="form-control text-<?php echo e($text); ?> bg-<?php echo e($bg); ?>" rows="5"></textarea>
                            </div>
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                            <div class="">
                                <input type="submit" class="py-2 btn btn-primary btn-block" value="Send">
                            </div>


                            <input type="hidden" name="id" value="<?php echo e(Auth::user()->id); ?>">
                            <input type="hidden" name="current_password" value="<?php echo e(Auth::user()->password); ?>">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"><br />
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadingaleonardngonga/Downloads/online-trade-06-04-2021/resources/views/user/support.blade.php ENDPATH**/ ?>