<?php $__env->startSection("manage-users", 'c-show'); ?>
<?php $__env->startSection("add-user", 'c-active'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container-fluid">
    <div class="fade-in">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header fw-bolder">
                    Add A New User to <?php echo e(\App\Models\Setting::getValue('site_name')); ?> Community
                </div>
                <div class="card-body">

                    <?php if(Session::has('message')): ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert"
                                    aria-hidden="true">&times;</button>
                                <i class="fa fa-info-circle"></i> <?php echo e(Session::get('message')); ?>

                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if(count($errors) > 0): ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-danger alert-dismissable" role="alert">
                                <button type="button" class="close" data-dismiss="alert"
                                    aria-hidden="true">&times;</button>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <i class="fa fa-warning"></i> <?php echo e($error); ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="mb-5 row">
                        <div class="col-lg-8 offset-lg-2 card p-3">
                            <form method="POST" action="<?php echo e(url('admin/dashboard/saveuser')); ?>">
                                <?php echo e(csrf_field()); ?>


                                <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                                    <h4 class="">FullName</h4>
                                    <div>
                                        <input id="name" type="text"
                                            class="form-control"
                                            name="name" value="<?php echo e(old('name')); ?>" required>
                                        <?php if($errors->has('name')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('name')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">

                                    <h4 class="">E-Mail Address</h4>
                                    <div>
                                        <input id="email" type="email"
                                            class="form-control"
                                            name="email" value="<?php echo e(old('email')); ?>" required>

                                        <?php if($errors->has('email')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('email')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">

                                    <h4 class="">Phone number</h4>
                                    <div>
                                        <input id="phone" type="number"
                                            class="form-control"
                                            name="phone" value="<?php echo e(old('phone')); ?>" required>

                                        <?php if($errors->has('phone')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('phone')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">

                                    <h4 class="">Password</h4>
                                    <div>
                                        <input id="password" type="password"
                                            class="form-control"
                                            name="password" required>

                                        <?php if($errors->has('password')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('password')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                                    <h4 class="">Confirm Password</h4>

                                    <div>
                                        <input id="password-confirm" type="password"
                                            class="form-control"
                                            name="password_confirmation" required>

                                        <?php if($errors->has('password_confirmation')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div>
                                        <button type="submit" class="px-5 btn btn-primary btn-lg">
                                            <i class="fa fa-btn fa-user"></i> Save User
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadleo/Documents/Projects/axeprogroup/axepro/resources/views/admin/referuser.blade.php ENDPATH**/ ?>