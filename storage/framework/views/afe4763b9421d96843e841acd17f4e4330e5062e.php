<?php
if (Auth::user()->dashboard_style == 'light') {
$bgmenu = 'blue';
$bg = 'light';
$text = 'dark';
} else {
$bgmenu = 'dark';
$bg = 'dark';
$text = 'light';
} ?>

<?php $__env->startSection('accounts', 'active'); ?>
<?php $__env->startSection('demo-accounts', 'active'); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('user.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('user.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-panel bg-<?php echo e($bg); ?>">
        <div class="content bg-<?php echo e($bg); ?>">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h1 class="title1 text-<?php echo e($text); ?> text-center"><?php echo e($title); ?></h1>
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

                <?php if(count($errors) > 0): ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-danger alert-dismissable" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <i class="fa fa-warning"></i>
                                    <span class="alert-message"><?php echo e($error); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="row py-3 mb-4">
                    <div class="col">
                        <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#newDemoAccountModal"><i
                                class="fa fa-plus"></i> New Demo Account</a>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col text-center card p-4 bg-<?php echo e($bg); ?>">
                        <div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table">
                            <table class="UserTable table table-hover text-<?php echo e($text); ?>">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Server</th>
                                        <th>Balance</th>
                                        
                                        <th>Leverage</th>
                                        <th>Status</th>
                                        <th>Date created</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <th scope="row"><?php echo e($account->login); ?></th>
                                            <th scope="row"><?php echo e($account->server); ?></th>
                                            <td><?php echo e($account->balance); ?><?php echo e($account->currency); ?></td>
                                            
                                            <td>1:<?php echo e($account->leverage); ?></td>
                                            <td>
                                            <?php if($account->status): ?> Active <?php else: ?>
                                                    Deactivated <?php endif; ?>
                                            </td>
                                            <td><?php echo e(\Carbon\Carbon::parse($account->created_at)->toDayDateTimeString()); ?>

                                            </td>
                                            <td>
                                                <a href="<?php echo e(route('account.demotopup', $account->id)); ?>"
                                                    class="m-2 btn btn-primary btn-xs">Topup</a>
                                                
                                            </td>
                                        </tr>

                                        <!-- Reset MT5 Account Password modal -->
                                        <div id="newResetMT5PasswordModal<?php echo e($account->id); ?>" class="modal fade" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content -->
                                                <div class="modal-content">
                                                    <div class="modal-header bg-<?php echo e($bg); ?>">
                                                        <h4 class="modal-title text-left text-white">MT5 Reset Password</h4>
                                                        <button type="button" class="close text-left text-white"
                                                            data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body bg-<?php echo e($bg); ?>">
                                                        <form role="form" method="post"
                                                            action="<?php echo e(route('account.resetmt5password', $account->id)); ?>">
                                                            <?php echo csrf_field(); ?>
                                                            <h5 class="text-left text-white ">MT5 Password*:</h5>
                                                            <input style="padding:5px;"
                                                                class="form-control bg-<?php echo e($bg); ?> text-left text-white"
                                                                type="text" name="password" required><br />
                                                            <h5 class="text-left text-white ">Confirm Password*:</h5>
                                                            <input style="padding:5px;"
                                                                class="form-control bg-<?php echo e($bg); ?> text-left text-white"
                                                                type="text" name="confirm_password" required><br />

                                                            <div
                                                                class="d-flex justify-content-start align-content-start input-wrapper">
                                                                <input
                                                                    class="form-control bg-<?php echo e($bg); ?> text-left checkbox"
                                                                    type="checkbox" name="master_password">
                                                                <label>Reset Investor Password</label>
                                                            </div>

                                                            <input type="submit" class="btn btn-primary" value="Submit">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Modal -->
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php echo $__env->make('user.modals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadingaleonardngonga/Documents/Projects/axesprime/resources/views/user/demoaccounts.blade.php ENDPATH**/ ?>