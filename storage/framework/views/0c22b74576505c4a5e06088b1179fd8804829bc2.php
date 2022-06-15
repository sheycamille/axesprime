

<?php $__env->startSection("manage-admins", 'c-show'); ?>
<?php $__env->startSection("roles", 'c-active'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container-fluid">
    <div class="fade-in">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header fw-bolder">
                    Add New Role
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
                                <button type="button" class="close" data-dismiss="alert"
                                    aria-hidden="true">&times;</button>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <i class="fa fa-warning"></i> <?php echo e($error); ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <div class="row mb-5">
                        <div class="col-lg-8 offset-lg-2 card p-3">
                            <form method="POST" action="<?php echo e(route('updaterole', $role->id)); ?>">
                                <?php echo e(csrf_field()); ?>


                                <div class="form-group">
                                    <h4 class=""> Name:</h4>
                                    <input placeholder="Name" class="form-control" name="name" type="text"
                                        value="<?php echo e($role->name); ?>">
                                </div>
                                <div class="form-group">
                                    <h4>Permission:</h4>
                                    <br />
                                    <?php $__currentLoopData = $permission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $perm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <label>
                                        <?php echo e(Form::checkbox('permissions[]', $perm->id, in_array($perm->id,
                                        $rolePermissions) ? true : false, array('class' => 'name'))); ?>

                                        <?php echo e($perm->name); ?>

                                    </label>
                                    <br />
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>

                                <div class="form-group">
                                    <div>
                                        <button type="submit" class="btn btn-primary btn-md px-3">
                                            <i class="fa fa-plus"></i> Update Role
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\axesprime\resources\views/admin/roles/edit.blade.php ENDPATH**/ ?>