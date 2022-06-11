

<?php $__env->startSection('title', 'Manage Withdrawals'); ?>

<?php $__env->startSection('manage-dw', 'c-show'); ?>
<?php $__env->startSection('withdrawals', 'c-active'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container-fluid">
    <div class="fade-in">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header fw-bolder">
                    Client Withdrawals
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

                    <div class="mb-5 row">
                        <div class="col p-3">
                            <div class="bs-example table-responsive" data-example-id="hoverable-table">
                                <div style="margin:3px;">
                                    <table id="ShipTable"
                                        class="table table-bordered table-striped table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Client name</th>
                                                <th>Amount requested</th>
                                                <th>Amount + charges</th>
                                                <th>MT5 Account</th>
                                                <th>Payment mode</th>
                                                <th>Receiver's email</th>
                                                <th>Status</th>
                                                <th>Date created</th>
                                                <th>Option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__empty_1 = true; $__currentLoopData = $withdrawals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $withdrawal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr>
                                                <th scope="row"><?php echo e($withdrawal->id); ?></th>
                                                <td><?php echo e($withdrawal->duser->name); ?></td>
                                                <td><?php echo e($withdrawal->amount); ?></td>
                                                <td><?php echo e($withdrawal->to_deduct); ?></td>
                                                <td><?php echo e($withdrawal->mt5->login); ?></td>
                                                <td><?php echo e($withdrawal->payment_mode); ?></td>
                                                <td><?php echo e($withdrawal->duser->email); ?></td>
                                                <td><?php echo e($withdrawal->status); ?></td>
                                                <td><?php echo e(\Carbon\Carbon::parse($withdrawal->created_at)->toDayDateTimeString()); ?>

                                                </td>
                                                <td>
                                                    <a href="#" class="m-1 btn btn-info btn-sm" data-toggle="modal"
                                                        data-target="#viewModal<?php echo e($withdrawal->id); ?>"><i
                                                            class="fa fa-eye"></i>
                                                        View</a>
                                                    <?php if($withdrawal->status == 'Processed' || $withdrawal->status ==
                                                    'Rejected'): ?>
                                                    <a class="<?php if($withdrawal->status == 'Processed'): ?> btn-success <?php else: ?> btn-danger <?php endif; ?> btn-sm"
                                                        href="#"><?php echo e($withdrawal->status); ?></a>
                                                    <?php else: ?>
                                                    <?php if(auth('admin')->user()->hasPermissionTo('mwithdrawal-process', 'admin')): ?>
                                                    <a class="m-1 btn btn-primary btn-sm"
                                                        href="<?php echo e(route('pwithdrawal', $withdrawal->id)); ?>">Process</a>
                                                    <?php endif; ?>
                                                    <?php if(auth('admin')->user()->hasPermissionTo('mwithdrawal-process', 'admin')): ?>
                                                    <a class="m-1 btn btn-primary btn-sm" data-toggle="modal"
                                                        data-target="#rejctModal<?php echo e($withdrawal->id); ?>"
                                                        href="#">Reject</a>
                                                    <?php endif; ?>
                                                    <?php endif; ?>

                                                </td>
                                            </tr>

                                            <!-- View info modal-->
                                            <div id="rejctModal<?php echo e($withdrawal->id); ?>" class="modal fade" role="dialog">
                                                <div class="modal-dialog">
                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header ">
                                                            <h4 class="modal-title">Reason For
                                                                Rejection.</strong></h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="<?php echo e(route('rejectwithdrawal')); ?>"
                                                                method="POST">
                                                                <?php echo csrf_field(); ?>
                                                                <textarea class="mb-2 form-control" row="3"
                                                                    placeholder="Type in here" name="reason"></textarea>
                                                                <input type="hidden" name="id"
                                                                    value="<?php echo e($withdrawal->id); ?>">
                                                                <input type="submit" class="btn btn-warning"
                                                                    value="Done">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End View info modal-->

                                            <!-- View info modal-->
                                            <div id="viewModal<?php echo e($withdrawal->id); ?>" class="modal fade" role="dialog">
                                                <div class="modal-dialog">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header ">
                                                            <h4 class="modal-title">
                                                                <?php echo e($withdrawal->duser->name); ?> withdrawal
                                                                details.</strong>
                                                            </h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal">&times;</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <?php if($withdrawal->payment_mode == 'Bitcoin'): ?>
                                                            <h3 class="">BTC Wallet:</h3>
                                                            <h4 class="">
                                                                <?php echo e($withdrawal->duser->btc_address); ?></h4><br>
                                                            <?php elseif($withdrawal->payment_mode=='Ethereum'): ?>
                                                            <h3 class="">ETH Wallet:</h3>
                                                            <h4 class="">
                                                                <?php echo e($withdrawal->duser->eth_address); ?></h4><br>
                                                            <?php elseif($withdrawal->payment_mode=='Litecoin'): ?>
                                                            <h3 class="">LTC Wallet:</h3>
                                                            <h4 class="">
                                                                <?php echo e($withdrawal->duser->ltc_address); ?></h4><br>
                                                            <?php elseif($withdrawal->payment_mode=='USDT'): ?>
                                                            <h3 class="">USDT Wallet:</h3>
                                                            <h4 class="">
                                                                <?php echo e($withdrawal->duser->usdt_address); ?></h4><br>
                                                            <?php elseif($withdrawal->payment_mode=='XRP'): ?>
                                                            <h3 class="">XRP Wallet:</h3>
                                                            <h4 class="">
                                                                <?php echo e($withdrawal->duser->xrp_address); ?></h4><br>
                                                            <?php elseif($withdrawal->payment_mode=='BNB'): ?>
                                                            <h3 class="">BNB Wallet:</h3>
                                                            <h4 class="">
                                                                <?php echo e($withdrawal->duser->bnb_address); ?></h4><br>
                                                            <?php elseif($withdrawal->payment_mode=='Bitcoin Cash'): ?>
                                                            <h3 class="">BCH Wallet:</h3>
                                                            <h4 class="">
                                                                <?php echo e($withdrawal->duser->usdt_address); ?></h4><br>
                                                            <?php elseif($withdrawal->payment_mode=='Interac'): ?>
                                                            <h3 class="">Interac Email:</h3>
                                                            <h4 class="">
                                                                <?php echo e($withdrawal->duser->interac); ?></h4><br>
                                                            <?php elseif($withdrawal->payment_mode=='PayPal'): ?>
                                                            <h3 class="">PayPal Email:</h3>
                                                            <h4 class="">
                                                                <?php echo e($withdrawal->duser->paypal_email); ?></h4><br>
                                                            <?php elseif($withdrawal->payment_mode=='Bank transfer'): ?>
                                                            <h4 class="">Bank name:
                                                                <?php echo e($withdrawal->duser->bank_name); ?></h4><br>
                                                            <h4 class="">Account name:
                                                                <?php echo e($withdrawal->duser->account_name); ?></h4><br>
                                                            <h4 class="">Account number:
                                                                <?php echo e($withdrawal->duser->account_no); ?></h4>
                                                            <?php else: ?>
                                                            <h4 class="">Get in touch with
                                                                client. <br><br><?php echo e($withdrawal->duser->email); ?></h4>
                                                            <?php endif; ?>
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
</div>

<?php echo $__env->make('admin.includes.modals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\axesprime\resources\views/admin/mwithdrawals.blade.php ENDPATH**/ ?>