

<?php $__env->startSection('title', 'Manage admins'); ?>

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
                    Roles
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
                    <?php if(auth('admin')->user()->hasPermissionTo('mrole-create', 'admin')): ?>
                    <div class="row">
                        <div class="col">
                            <a href="<?php echo e(route('createrole')); ?>" class="btn btn-primary btn-sm mb-2">Create New Role</a>
                        </div>
                    </div>
                    <?php endif; ?>

                    <div class="mb-5 row">
                        <div class="col p-4">
                            <div class="table-responsive" data-example-id="hoverable-table">
                                <table id="ShipTable" class="table table-bordered table-striped table-responsive-sm">
                                    <thead>

                                        <tr>
                                            <th>ID</th>
                                            <th>NAME</th>
                                            <th>PERMISSION</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td><?php echo e($role->id); ?></td>
                                            <td><?php echo e($role->name); ?> </td>
                                            <td>
                                                <?php $__currentLoopData = $role->permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $perm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <label class="text-muted"><?php echo e($perm->name); ?></label>,
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </td>

                                            <td>
                                                <div class="d-flex justify-content-start">
                                                    <?php if(auth('admin')->user()->hasPermissionTo('mrole-edit', 'admin')): ?>
                                                    <a href="<?php echo e(route('editrole', $role->id)); ?>"
                                                        class="m-1 btn btn-secondary btn-sm">Edit</a>
                                                    <?php endif; ?>
                                                    <?php if(auth('admin')->user()->hasPermissionTo('mrole-delete', 'admin')): ?>
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#deleteModal<?php echo e($role->id); ?>"
                                                        class="m-1 btn btn-danger btn-sm">Delete</a>
                                                    <?php endif; ?>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Delete role Modal -->
                                        <div id="deleteModal<?php echo e($role->id); ?>" class="modal fade" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">

                                                        <h4 class="modal-title ">Delete Role</strong></h4>
                                                        <button type="button" class="close "
                                                            data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body p-3">
                                                        <form action="<?php echo e(route('deleterole', $role->id)); ?>"
                                                            method="POST">
                                                            <?php echo csrf_field(); ?>
                                                            <p class="">Are you sure you want to delete
                                                                <?php echo e($role->name); ?>?</p>
                                                            <button class="btn btn-danger btn-sm">Yes, I'm sure</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Delete role Modal -->
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="4">No data available</td>
                                        </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\axesprime\resources\views/admin/roles/index.blade.php ENDPATH**/ ?>