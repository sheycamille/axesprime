<?php $__env->startSection('title', 'Change Password'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container-fluid">
    <div class="fade-in">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header fw-bolder">
                    <h1 class="title1 text-center">
                        Change my password
                    </h1>
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

                    <div class="mb-5 row">
                        <div class="col-lg-8 offset-lg-2 p-4">
                            <form method="post" action="<?php echo e(route('adminupdatepass')); ?>">
                                <div class="bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                                    <h5 class=" ">Old Password</h5>
                                    <input type="password" name="old_password" class="form-control" required>
                                </div>
                                <div class="bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                                    <h5 class=" ">New Password* </h5>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                                <div class="bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                                    <h5 class=" ">Confirm Password</h5>
                                    <input type="password" name="password_confirmation" class="form-control" required>
                                </div> <br>
                                <input type="submit" class="btn btn-primary" value="Submit">

                                <input type="hidden" name="id" value="<?php echo e(Auth('admin')->User()->id); ?>">
                                <input type="hidden" name="current_password"
                                    value="<?php echo e(Auth('admin')->User()->password); ?>">
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"><br />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadleo/Documents/Projects/axeprogroup/axepro/resources/views/admin/changepassword.blade.php ENDPATH**/ ?>