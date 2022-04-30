<?php $__env->startSection('title', 'Manage Users'); ?>

<?php $__env->startSection('manage-users', 'c-show'); ?>
<?php $__env->startSection('users', 'c-active'); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container-fluid">
        <div class="fade-in">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header fw-bolder">
                        <?php echo e(\App\Models\Setting::getValue('site_name')); ?> Users
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

                        <div class="row">
                            <div class="col">
                                <?php if(auth('admin')->user()->hasPermissionTo('muser-messageall', 'admin')): ?>
                                    <a href="#" data-toggle="modal" data-target="#sendmailModal"
                                        class="btn btn-primary btn-md mb-2">Message all</a>
                                <?php endif; ?>

                                <?php if(\App\Models\Setting::getValue('enable_kyc') == 'yes' &&
    auth('admin')->user()->hasPermissionTo('mkyc-list', 'admin')): ?>
                                    <a href="<?php echo e(route('kyc')); ?>" class="btn btn-warning btn-md mb-2">KYC</a>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table">
                                <table id="ShipTable" class="table table-bordered table-striped table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Client Name</th>
                                            <th>Phone/Email</th>
                                            <th>Balance</th>
                                            <th>Bonus</th>
                                            <th>No. of Accounts</th>
                                            <th>Status</th>
                                            <th>Date Registered</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <th scope="row"><?php echo e($user->id); ?></th>
                                                <td><?php echo e($user->name); ?></td>
                                                <td><?php echo e($user->phone); ?> | <?php echo e($user->email); ?></td>
                                                <td><?php echo e($user->totalBalance()); ?></td>
                                                <td><?php echo e($user->totalBonus()); ?></td>
                                                <?php $numAccs = count($user->accounts()) ?>
                                                <td><?php echo e($numAccs); ?></td>
                                                <td><?php echo e($user->status); ?></td>
                                                <td><?php echo e(\Carbon\Carbon::parse($user->created_at)->toDayDateTimeString()); ?>

                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-start">
                                                        <a class="btn btn-secondary btn-sm dropdown-toggle" href="#"
                                                            role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            Actions
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"
                                                            style="z-index: 999;">
                                                            <?php if(auth('admin')->user()->hasPermissionTo('muser-access-wallet', 'admin')): ?>
                                                                <a class="m-1 btn btn-info btn-sm"
                                                                    href="<?php echo e(route('userwallet', $user->id)); ?>">See
                                                                    Wallet</a>
                                                            <?php endif; ?>
                                                            <?php if(auth('admin')->user()->hasPermissionTo('muser-block', 'admin')): ?>
                                                                <?php if($user->status == null || $user->status == 'blocked'): ?>
                                                                    <a class="m-1 btn btn-primary btn-sm"
                                                                        href="<?php echo e(route('userunblock', $user->id)); ?>">Unblock</a>
                                                                <?php else: ?>
                                                                    <a class="m-1 btn btn-danger btn-sm"
                                                                        href="<?php echo e(route('userublock', $user->id)); ?>">Block</a>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                            <?php if(auth('admin')->user()->hasPermissionTo('muser-credit-debit', 'admin')): ?>
                                                                <a href="#" data-toggle="modal"
                                                                    data-target="#topupModal<?php echo e($user->id); ?>"
                                                                    class="m-1 btn btn-dark btn-xs">Credit/Debit</a>
                                                            <?php endif; ?>
                                                            <a href="#" data-toggle="modal"
                                                                data-target="#resetpswdModal<?php echo e($user->id); ?>"
                                                                class="m-1 btn btn-warning btn-xs">Reset Password</a>
                                                            <?php if(auth('admin')->user()->hasPermissionTo('muser-delete', 'admin')): ?>
                                                                <a href="#" data-toggle="modal"
                                                                    data-target="#deleteModal<?php echo e($user->id); ?>"
                                                                    class="m-1 btn btn-danger btn-xs">Delete</a>
                                                            <?php endif; ?>
                                                            <?php if(auth('admin')->user()->hasPermissionTo('muser-edit', 'admin')): ?>
                                                                <a href="#" data-toggle="modal"
                                                                    data-target="#edituser<?php echo e($user->id); ?>"
                                                                    class="m-1 btn btn-secondary btn-xs">Edit</a>
                                                            <?php endif; ?>

                                                            <?php if($numAccs > 1): ?>
                                                                <a href="#" data-toggle="modal"
                                                                    data-target="#liveaccounts<?php echo e($user->id); ?>"
                                                                    class="m-1 btn btn-danger btn-xs">Delete
                                                                    Extra Accounts</a>
                                                            <?php endif; ?>

                                                            <?php if(auth('admin')->user()->hasPermissionTo('muser-messageall', 'admin')): ?>
                                                                <a href="#" data-toggle="modal"
                                                                    data-target="#sendmailtooneuserModal<?php echo e($user->id); ?>"
                                                                    class="m-1 btn btn-info btn-xs">Send Message</a>
                                                            <?php endif; ?>

                                                            <?php if(auth('admin')->user()->hasPermissionTo('muser-access-account', 'admin')): ?>
                                                                <a href="#" data-toggle="modal"
                                                                    data-target="#switchuserModal<?php echo e($user->id); ?>"
                                                                    class="m-2 btn btn-success btn-xs">Get access</a>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php echo $__env->make('admin.users_actions', $user, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <?php echo e($users->links('vendor.pagination.default')); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('admin.includes.modals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadleo/Documents/Projects/axeprogroup/axepro/resources/views/admin/users.blade.php ENDPATH**/ ?>