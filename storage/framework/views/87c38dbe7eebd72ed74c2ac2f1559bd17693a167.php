<?php $__env->startSection('title', 'Request a Withdrawal'); ?>

<?php $__env->startSection('deposits-and-withdrawals', 'c-show'); ?>
<?php $__env->startSection('withdrawals', 'c-active'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('user.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('user.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header fw-bolder">
                        Request for Withdrawal
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
                            <?php $__currentLoopData = $wmethods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $method): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-4 p-3 rounded card">
                                <div class="shadow card-body border-danger">
                                    <h2 class="card-title mb-3"><?php echo e($method->name); ?></h2>
                                    <h4 class="">Minimum amount: <strong style="float:right;">
                                            <?php echo e(\App\Models\Setting::getValue('currency')); ?><?php echo e($method->minimum); ?></strong>
                                    </h4>
                                    <br>

                                    <h4 class="">Maximum amount:<strong style="float:right;">
                                            <?php echo e(\App\Models\Setting::getValue('currency')); ?><?php echo e($method->maximum); ?></strong>
                                    </h4><br>

                                    <h4 class="">Charges (Fixed):<strong style="float:right;">
                                            <?php echo e(\App\Models\Setting::getValue('currency')); ?><?php echo e($method->charges_fixed); ?></strong>
                                    </h4><br>

                                    <h4 class="">Charges (%): <strong style="float:right;">
                                            <?php echo e($method->charges_percentage); ?>%</strong></h4><br>

                                    <h4 class="">Duration:<strong style="float:right;">
                                            <?php echo e($method->duration); ?></strong></h4><br>
                                    <div class="text-center">
                                        <?php if(\App\Models\Setting::getValue('enable_with') == 'true'): ?>
                                        <a class="btn btn-primary" href="#" data-toggle="modal"
                                            data-target="#withdrawdisabled"><i class="fa fa-plus"></i> Request
                                            withdrawal</a>
                                        <?php else: ?>
                                        <a class="btn btn-primary" href="#" data-toggle="modal"
                                            data-target="#withdrawalModal<?php echo e($method->id); ?>"><i class="fa fa-plus"></i>
                                            Request withdrawal</a>
                                        <?php endif; ?>

                                    </div>

                                </div>
                            </div>

                            <!-- Withdrawal Modal -->
                            <div id="withdrawalModal<?php echo e($method->id); ?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Payment will be sent through your
                                                selected method.</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <form style="padding:3px;" role="form" method="post"
                                                action="<?php echo e(route('withdrawal')); ?>">
                                                <input class="form-control" placeholder="Enter amount here" type="text"
                                                    name="amount" required><br />
                                                <input class="form-control " value="<?php echo e($method->name); ?>" type="text"
                                                    disabled><br />
                                                <select required class="form-control" name="account_id" id="account_id"
                                                    required>
                                                    <option value="" disabled selected>Choose Account</option>
                                                    <?php $__currentLoopData = Auth::user()->accounts(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($account->id); ?>"><?php echo e($account->login); ?> |
                                                        <?php echo e($account->server); ?> |
                                                        USD <?php echo e($account->balance); ?>

                                                    </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select> <br>
                                                <input value="<?php echo e($method->name); ?>" type="hidden" name="payment_mode">
                                                <input value="<?php echo e($method->id); ?>" type="hidden" name="method_id"><br />

                                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                                <input type="submit" class="btn btn-primary" value="Submit"
                                                    onclick="this.disabled = true; form.submit(); this.value='Please Wait ...';" />
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Withdrawal Modal -->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        <!-- Withdrawal Disabled Modal -->
                        <div id="withdrawdisabled" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Withdrawal Status</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <h4 class="">Withdrawal is disabled at this time, Please contact
                                            support for assistance.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Withdrawals Disabled Modal -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadleo/Documents/Projects/axeprogroup/axepro/resources/views/user/mwithdrawal.blade.php ENDPATH**/ ?>