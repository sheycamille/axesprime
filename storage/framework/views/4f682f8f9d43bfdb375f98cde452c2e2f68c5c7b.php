<?php $__env->startSection('title', 'Manage Admins'); ?>

<?php $__env->startSection("manage-admins", 'c-show'); ?>
<?php $__env->startSection("admins", 'c-active'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container-fluid">
    <div class="fade-in">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header fw-bolder">
                    Managers
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
                        <div class="col p-4">
                            <div class="table-responsive" data-example-id="hoverable-table">
                                <table id="ShipTable" class="table table-bordered table-striped table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>USER ID</th>
                                            <th>FIRSTNAME</th>
                                            <th>LASTNAME</th>
                                            <th>EMAIL</th>
                                            <th>PHONE</th>
                                            <th>TYPE</th>
                                            <th>STATUS</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td><?php echo e($admin->id); ?></td>
                                            <td><?php echo e($admin->firstName); ?></td>
                                            <td><?php echo e($admin->lastName); ?></td>
                                            <td><?php echo e($admin->email); ?></td>
                                            <td><?php echo e($admin->phone); ?></td>
                                            <td><?php echo e($admin->type); ?></td>
                                            <td><?php echo e($admin->acnt_type_active); ?></td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-secondary btn-sm dropdown-toggle" href="#"
                                                        role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        Actions
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                                                        <?php if($admin->acnt_type_active==NULL ||
                                                        $admin->acnt_type_active=='blocked'): ?>
                                                        <a class="m-1 btn btn-primary btn-sm"
                                                            href="<?php echo e(url('admin/dashboard/unblock')); ?>/<?php echo e($admin->id); ?>">Unblock</a>
                                                        <?php else: ?>
                                                        <a class="m-1 btn btn-danger btn-sm"
                                                            href="<?php echo e(url('admin/dashboard/ublock')); ?>/<?php echo e($admin->id); ?>">Block</a>
                                                        <?php endif; ?>
                                                        <a href="#" data-toggle="modal"
                                                            data-target="#resetpswdModal<?php echo e($admin->id); ?>"
                                                            class="m-1 btn btn-warning btn-sm">Reset Password</a>

                                                        <a href="#" data-toggle="modal"
                                                            data-target="#deleteModal<?php echo e($admin->id); ?>"
                                                            class="m-1 btn btn-danger btn-sm">Delete</a>
                                                        <a href="#" data-toggle="modal"
                                                            data-target="#edituser<?php echo e($admin->id); ?>"
                                                            class="m-1 btn btn-secondary btn-sm">Edit</a>
                                                        <a href="#" data-toggle="modal"
                                                            data-target="#sendmailModal<?php echo e($admin->id); ?>"
                                                            class="m-1 btn btn-info btn-sm">Send Email</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>


                                        <!-- Reset user password Modal -->
                                        <div id="resetpswdModal<?php echo e($admin->id); ?>" class="modal fade" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header ">

                                                        <h4 class="modal-title ">Reset Password</strong></h4>
                                                        <button type="button" class="close "
                                                            data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body p-3">
                                                        <p class="">Are you sure you want to reset password for
                                                            <?php echo e($admin->firstName); ?> to <span
                                                                class="text-primary font-weight-bolder">admin01236</span>
                                                        </p>
                                                        <a class="btn btn-danger"
                                                            href="<?php echo e(url('admin/dashboard/resetadpwd')); ?>/<?php echo e($admin->id); ?>">Reset
                                                            Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Reset user password Modal -->

                                        <!-- Delete user Modal -->
                                        <div id="deleteModal<?php echo e($admin->id); ?>" class="modal fade" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">

                                                        <h4 class="modal-title ">Delete Manager</strong></h4>
                                                        <button type="button" class="close "
                                                            data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body p-3">
                                                        <p class="">Are you sure you want to delete
                                                            <?php echo e($admin->firstName); ?></p>
                                                        <a class="btn btn-danger"
                                                            href="<?php echo e(url('admin/dashboard/deluser')); ?>/<?php echo e($admin->id); ?>">Yes
                                                            i'm sure</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Delete user Modal -->

                                        <!-- Edit user Modal -->
                                        <div id="edituser<?php echo e($admin->id); ?>" class="modal fade" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">

                                                        <h4 class="modal-title ">Edit user details.</strong></h4>
                                                        <button type="button" class="close "
                                                            data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form style="padding:3px;" role="form" method="post"
                                                            action="<?php echo e(route('editadmin')); ?>">
                                                            <h5 class=" ">Firstname</h5>
                                                            <input style="padding:5px;" class="form-control "
                                                                value="<?php echo e($admin->firstName); ?>" type="text" name="fname"
                                                                required><br />
                                                            <h5 class=" ">Lastname</h5>
                                                            <input style="padding:5px;" class="form-control "
                                                                value="<?php echo e($admin->lastName); ?>" type="text" name="l_name"
                                                                required><br />
                                                            <h5 class=" ">Email</h5>
                                                            <input style="padding:5px;" class="form-control "
                                                                value="<?php echo e($admin->email); ?>" type="email" name="email"
                                                                required><br />
                                                            <h5 class=" ">Phone Number</h5>
                                                            <input style="padding:5px;" class="form-control "
                                                                value="<?php echo e($admin->phone); ?>" type="text" name="phone"
                                                                required>
                                                            <br>
                                                            <h5 class=" ">Type</h5>
                                                            <select class="form-control " name="type">
                                                                <option><?php echo e($admin->type); ?></option>
                                                                <option>Super Admin</option>
                                                                <option>Admin</option>
                                                            </select><br>
                                                            <input type="hidden" name="_token"
                                                                value="<?php echo e(csrf_token()); ?>">
                                                            <input type="hidden" name="user_id" value="<?php echo e($admin->id); ?>">
                                                            <input type="submit" class="btn btn-info"
                                                                value="Update account">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Edit user Modal -->

                                        <!-- send a single user email Modal-->
                                        <div id="sendmailModal<?php echo e($admin->id); ?>" class="modal fade" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title ">Send Email Message</h4>
                                                        <button type="button" class="close "
                                                            data-dismiss="modal">&times;</button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <p class="">This message will be sent to <?php echo e($admin->firstName); ?>

                                                            <?php echo e($admin->lastName); ?> </p>
                                                        <form role="form" method="post" action="<?php echo e(route('sendmail')); ?>">

                                                            <input type="hidden" name="user_id" value="<?php echo e($admin->id); ?>">
                                                            <textarea class="form-control " name="message " row="3"
                                                                placeholder="Type your message here"
                                                                required></textarea><br />

                                                            <input type="hidden" name="_token"
                                                                value="<?php echo e(csrf_token()); ?>">
                                                            <input type="submit" class="btn btn-primary" value="Send">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="10">No data available</td>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadleo/Documents/Projects/axeprogroup/axepro/resources/views/admin/madmin.blade.php ENDPATH**/ ?>