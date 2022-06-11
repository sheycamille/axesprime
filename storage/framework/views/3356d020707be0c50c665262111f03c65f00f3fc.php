

<?php $__env->startSection('title', 'Manage Deposits'); ?>

<?php $__env->startSection('manage-dw', 'c-show'); ?>
<?php $__env->startSection('deposits', 'c-active'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container-fluid">
    <div class="fade-in">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header fw-bolder">
                    Client Depposits
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
                        <div class="col-12 p-4">
                            <div class="table-responsive" data-example-id="hoverable-table">
                                <table id="ShipTable" class="table table-bordered table-striped table-responsive-sm">
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
                                        <?php $__empty_1 = true; $__currentLoopData = $deposits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deposit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
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
                                                <a href="#" class="btn btn-primary btn-sm m-1" data-toggle="modal"
                                                    data-target="#popModal<?php echo e($deposit->id); ?>"
                                                    title="View payment proof">
                                                    Proof
                                                </a>

                                                <a href="#" class="btn btn-primary btn-sm m-1" data-toggle="modal"
                                                    data-target="#sendMessageModal<?php echo e($deposit->id); ?>"
                                                    title="Send Message">
                                                    Message
                                                </a>

                                                <?php if($deposit->status == 'Processed' || $deposit->status == 'Rejected'): ?>
                                                <a class="btn btn-sm <?php if($deposit->status == 'Processed'): ?> btn-success <?php else: ?> btn-danger <?php endif; ?> btn-xs"
                                                    href="#"><?php echo e($deposit->status); ?></a>
                                                <?php else: ?>
                                                <?php if(auth('admin')->user()->hasPermissionTo('mdeposit-process', 'admin')): ?>
                                                <a class="btn btn-primary btn-sm"
                                                    href="<?php echo e(route('pdeposit', $deposit->id)); ?>">Process</a>
                                                <?php endif; ?>
                                                <a class="m-1 btn btn-primary btn-sm" data-toggle="modal"
                                                    data-target="#rejctModal<?php echo e($deposit->id); ?>" href="#">Reject</a>
                                                <?php endif; ?>
                                            </td>
                                        </tr>

                                        <!-- View info modal-->
                                        <div id="rejctModal<?php echo e($deposit->id); ?>" class="modal fade" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-heade ">
                                                        <h4 class="modal-title">Reason For
                                                            Rejection.</strong></h4>
                                                        <button type="button" class="close"
                                                            data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="<?php echo e(route('rejectdeposit', $deposit->id)); ?>"
                                                            method="POST">
                                                            <?php echo csrf_field(); ?>
                                                            <textarea
                                                                class="bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> mb-2 form-control"
                                                                row="3" placeholder="Type in here"
                                                                name="reason"></textarea>
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
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">
                                                            <?php echo e($deposit->duser->name); ?> proof of payment</h4>
                                                        <button type="button" class="close"
                                                            data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <?php if($deposit->payment_mode == 'Credit Card' || $deposit->payment_mode == 'Express Deposit' ||
                                                        $deposit->payment_mode == 'CoinPayments'): ?>
                                                        <h4 class=">This Payment was either
                                                    made with credit/debit card, admin topup or automatic crypto
                                                    payment hence no proof of payment provided</h4>
                                                <?php else: ?>
                                                <?php if(\App\Models\Setting::getValue('location') == 'Email'): ?>
                                                <h3 class=">Check your email with
                                                            the deposit that has an attachment name of
                                                            <span class="text-danger"><?php echo e($deposit->proof); ?></span>
                                                            </h3>
                                                            <?php elseif(\App\Models\Setting::getValue('location') ==
                                                            "Local"): ?>
                                                            <img src="<?php echo e(asset('storage/photos/' . $deposit->proof)); ?>"
                                                                alt="Payment proof" title="" class="img-fluid" />
                                                            <?php else: ?>
                                                            <?php
                                                            $ppath = 'storage/' . $deposit->proof;
                                                            if (Storage::disk('s3')->exists($ppath)) {
                                                            $passurl = 'https://s3.' . env('AWS_DEFAULT_REGION') .
                                                            '.amazonaws.com/'
                                                            . env('AWS_BUCKET') . '/';
                                                            $passfile = Storage::disk('s3')->get($ppath);
                                                            $psrc = $passurl . $passfile;
                                                            } else {
                                                            $psrc = '';
                                                            }
                                                            ?>
                                                            <img src="<?php echo e($psrc); ?>" alt="Proof of Payment" title=""
                                                                class="img-fluid" />

                                                            <?php endif; ?>
                                                            <?php endif; ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /POP Modal -->

                                        <!-- Send Message Modal -->
                                        <div id="sendMessageModal<?php echo e($deposit->id); ?>" class="modal fade" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title"> Send Deposit
                                                            Email
                                                            <?php echo e($deposit->duser->name); ?></h4>
                                                        <button type="button" class="close"
                                                            data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4 class="">
                                                            This message will be sent to <?php echo e($deposit->duser->name); ?>

                                                            <?php echo e($deposit->duser->l_name); ?>

                                                        </h4>
                                                        <form style="padding:3px;" role="form" method="post"
                                                            action="<?php echo e(route('sendmailtooneuser')); ?>">
                                                            <input type="hidden" name="user_id"
                                                                value="<?php echo e($deposit->duser->id); ?>">
                                                            <textarea class="form-control" name="message" row="3"
                                                                required>This is to inform you that your deposit of <?php echo e(\App\Models\Setting::getValue('currency')); ?><?php echo e($deposit->amount); ?> has been received and processed. You can now check your MT5 account.</textarea>
                                                            <br />
                                                            <input type="hidden" name="_token"
                                                                value="<?php echo e(csrf_token()); ?>">
                                                            <input type="hidden" name="type" value="deposit">
                                                            <input type="submit" class="btn btn-primary"
                                                                value="Send">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Send Message Modal -->
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

<?php echo $__env->make('admin.includes.modals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
<script src="<?php echo e(asset('admin/js/jquery.validate.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/js/dataTables.bootstrap4.min.js')); ?>"></script>
<script type="text/javascript">
    $(function () {

      var table = $('.yajra-datatable').DataTable({
          processing: true,
          serverSide: true,
          ajax: "<?php echo e(route('fetchdeposits')); ?>",
          columns: [
              {data: 'id', name: 'ID'},
              {data: 'txn_id', name: 'Txn. ID'},
              {data: 'user', name: 'User'},
              {data: 'uname', name: 'Uname'},
              {data: 'amount', name: 'Amount'},
              {data: 'payment_mode', name: 'Payment Mode'},
              {data: 'purpose', name: 'Purpose'},
              {data: 'status', name: 'Status'},
              {data: 'proof', name: 'Proof'},
              {
                  data: 'action',
                  name: 'action',
                  orderable: true,
                  searchable: true
              },
          ]
      });

    });
  </script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\axesprime\resources\views/admin/mdeposits.blade.php ENDPATH**/ ?>