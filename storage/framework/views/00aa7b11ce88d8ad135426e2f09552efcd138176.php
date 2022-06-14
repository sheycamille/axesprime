<?php $__env->startSection('title', 'Manage admins'); ?>

<?php $__env->startSection("manage-admins", 'c-show'); ?>
<?php $__env->startSection("perms", 'c-active'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container-fluid">
    <div class="fade-in">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header fw-bolder">
                    Permissions
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

                    <div class="row">
                        <div class="col">
                            <a class="btn btn-primary btn-md mb-2" href="#" data-toggle="modal"
                                data-target="#createpermissionmodal">Create New Permission</a>
                        </div>
                    </div>

                    <div class="mb-5 row">
                        <div class="col p-4">
                            <div class="table-responsive" data-example-id="hoverable-table">
                                <table id="ShipTable" class="table table-bordered table-striped table-responsive-sm">
                                    <thead>

                                        <tr>
                                            <th>ID</th>
                                            <th>PERMISSIONS</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $perm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td><?php echo e($perm->id); ?></td>
                                            <td><?php echo e($perm->name); ?></td>
                                            <td>
                                                <div class="d-flex justify-content-start">
                                                    <!--<a href="<?php echo e(route('editrole', $perm->id)); ?>" class="m-1 btn btn-secondary btn-sm">Edit</a>-->
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#deleteModal<?php echo e($perm->id); ?>"
                                                        class="m-1 btn btn-danger btn-sm">Delete</a>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Delete permission Modal -->
                                        <div id="deleteModal<?php echo e($perm->id); ?>" class="modal fade" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">

                                                        <h4 class="modal-title ">Delete Permission</strong></h4>
                                                        <button type="button" class="close "
                                                            data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body p-3">
                                                        <form action="<?php echo e(route('deleteperm', $perm->id)); ?>"
                                                            method="POST">
                                                            <?php echo csrf_field(); ?>
                                                            <p class="">Are you sure you want to delete permission
                                                                <?php echo e($perm->name); ?>?</p>
                                                            <button class="btn btn-danger btn-sm">Yes, I'm sure</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Delete permission Modal -->
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="4">No data available</td>
                                        </tr>
                                        <?php endif; ?>

                                        <!-- Create permission Modal -->
                                        <div id="createpermissionmodal" class="modal fade" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">

                                                        <h4 class="modal-title ">Add New Permission</strong></h4>
                                                        <button type="button" class="close "
                                                            data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body p-3">
                                                        <form style="" role="form" method="post"
                                                            action="<?php echo e(route('storeperm')); ?>">
                                                            <?php echo csrf_field(); ?>
                                                            <h5 class=" ">Permission Name</h5>
                                                            <input style="" class="form-control " type="text"
                                                                name="name">
                                                            <br>
                                                            <button class="btn btn-primary btn-sm">Save</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Create permission Modal -->
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadingaleonardngonga/Documents/Projects/axesprime/resources/views/admin/perms/index.blade.php ENDPATH**/ ?>