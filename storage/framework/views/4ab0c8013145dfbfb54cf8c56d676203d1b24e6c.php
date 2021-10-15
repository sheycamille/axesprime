<?php
if (Auth('admin')->User()->dashboard_style == 'light') {
    $text = 'dark';
} else {
    $text = 'light';
} ?>

<?php $__env->startSection('manage-dw', 'active'); ?>
<?php $__env->startSection('deposits', 'active'); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-panel">
        <div class="content bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> ">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h1 class="title1 text-<?php echo e($text); ?> text-center">Clients Deposits</h1>
                </div>
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
                    <div class="col-12">
                        <small class="text-<?php echo e($text); ?>">if you can't see the image, try switching your uploaded
                            location to another option from your admin settings page.</small>
                    </div>
                    <div class="col-12 card shadow p-4 bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                        <div class="table-responsive" data-example-id="hoverable-table">
                            <table id="ShipTable" class="table table-hover text-<?php echo e($text); ?>">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Client name</th>
                                        <th>Client email</th>
                                        <th>MT5 Account</th>
                                        <th>Amount</th>
                                        <th>Payment mode</th>
                                        <th>Status</th>
                                        <th>Date created</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $deposits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deposit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <th scope="row"><?php echo e($deposit->id); ?></th>
                                            <td><?php echo e($deposit->duser->name); ?></td>
                                            <td><?php echo e($deposit->duser->email); ?></td>
                                            <td><?php echo e($deposit->mt5->login); ?></td>
                                            <td><?php echo e(\App\Models\Setting::getValue('currency')); ?><?php echo e($deposit->amount); ?>

                                            </td>
                                            <td><?php echo e($deposit->payment_mode); ?></td>
                                            <td><?php echo e($deposit->status); ?></td>
                                            <td><?php echo e(\Carbon\Carbon::parse($deposit->created_at)->toDayDateTimeString()); ?>

                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-<?php echo e($text); ?> btn-sm m-1"
                                                    data-toggle="modal" data-target="#popModal<?php echo e($deposit->id); ?>"
                                                    title="View payment proof">
                                                    <i class="fa fa-eye"></i>
                                                </a>

                                                <a href="#" class="btn btn-<?php echo e($text); ?> btn-sm m-1"
                                                    data-toggle="modal" data-target="#sendMessageModal<?php echo e($deposit->id); ?>"
                                                    title="Send Message">
                                                    <i class="fa fa-envelope"></i>
                                                </a>

                                                <?php if($deposit->status == 'Processed' || $deposit->status == 'Rejected'): ?>
                                                    <a class="<?php if($deposit->status == 'Processed'): ?> btn-success <?php else: ?> btn-danger <?php endif; ?> btn-xs"
                                                        href="#"><?php echo e($deposit->status); ?></a>
                                                <?php else: ?>
                                                    <a class="btn btn-primary btn-xs"
                                                        href="<?php echo e(url('admin/dashboard/pdeposit')); ?>/<?php echo e($deposit->id); ?>">Process</a>
                                                    <a class="m-1 btn btn-primary btn-xs" data-toggle="modal"
                                                        data-target="#rejctModal<?php echo e($deposit->id); ?>" href="#">Reject</a>
                                                <?php endif; ?>
                                            </td>
                                        </tr>

                                        <!-- View info modal-->
                                        <div id="rejctModal<?php echo e($deposit->id); ?>" class="modal fade" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div
                                                        class="modal-header bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> ">
                                                        <h4 class="modal-title text-<?php echo e($text); ?>">Reason For
                                                            Rejection.</strong></h4>
                                                        <button type="button" class="close text-<?php echo e($text); ?>"
                                                            data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div
                                                        class="modal-body bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                                                        <form action="<?php echo e(route('rejectdeposit', $deposit->id)); ?>"
                                                            method="POST">
                                                            <?php echo csrf_field(); ?>
                                                            <textarea
                                                                class="bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?> mb-2 form-control"
                                                                row="3" placeholder="Type in here" name="reason"></textarea>
                                                            <input type="hidden" name="id" value="<?php echo e($deposit->id); ?>">
                                                            <input type="submit" class="btn btn-warning" value="Done">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End View info modal-->

                                        <!-- POP Modal -->
                                        <div id="popModal<?php echo e($deposit->id); ?>" class="modal fade" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div
                                                        class="modal-header bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                                                        <h4 class="modal-title text-<?php echo e($text); ?>">
                                                            <?php echo e($deposit->duser->name); ?> proof of payment</h4>
                                                        <button type="button" class="close text-<?php echo e($text); ?>"
                                                            data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div
                                                        class="modal-body bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                                                        <?php if($deposit->payment_mode == 'Credit Card' || $deposit->payment_mode == 'Paystack' || $deposit->payment_mode == 'Express Deposit' || $deposit->payment_mode == 'CoinPayments'): ?>
                                                            <h4 class="text-<?php echo e($text); ?>">This Payment was either
                                                                made with credit/debit card, admin topup or automatic crypto
                                                                payment hence no proof of payment provided</h4>
                                                        <?php else: ?>
                                                            <?php if(\App\Models\Setting::getValue('location') == 'Email'): ?>
                                                                <h3 class="text-<?php echo e($text); ?>">Check your email with
                                                                    the deposit that has an attachment name of
                                                                    <span
                                                                        class="text-danger"><?php echo e($deposit->proof); ?></span>
                                                                </h3>
                                                            <?php elseif(\App\Models\Setting::getValue('location') ==
                                                                "Local"): ?>
                                                                <img src="<?php echo e(asset('storage/photos/' . $deposit->proof)); ?>"
                                                                    alt="Payment proof" title="" class="img-fluid" />
                                                            <?php else: ?>
                                                                <?php
                                                                    $ppath = 'storage/' . $deposit->proof;
                                                                    if (Storage::disk('s3')->exists($ppath)) {
                                                                        $passurl = 'https://s3.' . env('AWS_DEFAULT_REGION') . '.amazonaws.com/' . env('AWS_BUCKET') . '/';
                                                                        $passfile = Storage::disk('s3')->get($ppath);
                                                                        $psrc = $passurl . $passfile;
                                                                    } else {
                                                                        $psrc = '';
                                                                    }
                                                                ?>
                                                                <img src="<?php echo e($psrc); ?>" alt="Proof of Payment"
                                                                    title="" class="img-fluid" />

                                                            <?php endif; ?>
                                                        <?php endif; ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /POP Modal -->

                                        <!-- Send Message Modal -->
                                        <div id="sendMessageModal<?php echo e($deposit->id); ?>" class="modal fade"
                                            role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div
                                                        class="modal-header bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                                                        <h4 class="modal-title text-<?php echo e($text); ?>"> Send Deposit
                                                            Email
                                                            <?php echo e($deposit->duser->name); ?></h4>
                                                        <button type="button" class="close text-<?php echo e($text); ?>"
                                                            data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div
                                                        class="modal-body bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                                                        <h4 class="text-<?php echo e($text); ?>">
                                                            This message will be sent to <?php echo e($deposit->duser->name); ?>

                                                            <?php echo e($deposit->duser->l_name); ?>

                                                        </h4>
                                                        <form style="padding:3px;" role="form" method="post"
                                                            action="<?php echo e(route('sendmailtooneuser')); ?>">
                                                            <input type="hidden" name="user_id"
                                                                value="<?php echo e($deposit->duser->id); ?>">
                                                            <textarea
                                                                class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>"
                                                                name="message" row="3"
                                                                required>This is to inform you that your deposit of <?php echo e(\App\Models\Setting::getValue('currency')); ?><?php echo e($deposit->amount); ?> has been received and processed. You can now check your MT5 account.</textarea>
                                                            <br />
                                                            <input type="hidden" name="_token"
                                                                value="<?php echo e(csrf_token()); ?>">
                                                            <input type="hidden" name="type" value="deposit">
                                                            <input type="submit" class="btn btn-<?php echo e($text); ?>"
                                                                value="Send">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Send Message Modal -->
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php echo $__env->make('admin.includes.modals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadingaleonardngonga/Documents/Projects/axesprime/resources/views/admin/mdeposits.blade.php ENDPATH**/ ?>