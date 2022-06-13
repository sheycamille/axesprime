

<?php $__env->startSection('title', 'My Deposits'); ?>

<?php $__env->startSection('deposits-and-withdrawals', 'c-show'); ?>
<?php $__env->startSection('deposits', 'c-active'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('user.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('user.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                    <?php echo app('translator')->get('message.body.deposits'); ?>
                    </div>

                    <div class="card-body">

                        <?php if(Session::has('message')): ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="alert alert-success alert-dismissable">
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

                        <div class="row py-3 mb-4">
                            <div class="col">
                                
                                <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#depositModal"><i
                                        class="fa fa-plus"></i> <?php echo app('translator')->get('message.body.new_depo'); ?></a>
                            </div>
                        </div>

                        <table class="table table-bordered table-striped table-responsive-sm yajra-datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th><?php echo app('translator')->get('message.body.account'); ?></th>
                                    <th><?php echo app('translator')->get('message.body.amount'); ?></th>
                                    <th><?php echo app('translator')->get('message.body.pay_method'); ?></th>
                                    <th><?php echo app('translator')->get('message.body.status'); ?></th>
                                    <th><?php echo app('translator')->get('message.body.date_created'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $deposits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deposit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <th scope="row"><?php echo e($deposit->id); ?></th>
                                    <td><?php echo e($deposit->mt5->login); ?></td>
                                    <td><?php echo e(\App\Models\Setting::getValue('currency')); ?><?php echo e($deposit->amount); ?>

                                    </td>
                                    <td><?php echo e($deposit->payment_mode); ?></td>
                                    <td><?php echo e($deposit->status); ?></td>
                                    <td><?php echo e(\Carbon\Carbon::parse($deposit->created_at)->toDayDateTimeString()); ?>

                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="6"><?php echo app('translator')->get('message.body.no_data'); ?></td>
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

<?php echo $__env->make('user.modals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
          ajax: "<?php echo e(route('fetchdepo')); ?>",
          columns: [
              {data: 'id', name: 'Id'},
              {data: 'mt5', name: 'mt5'},
              {data: 'amount', name: 'amount'},
              {data: 'payment_mode', name: 'payment_mode'},
              {data: 'status', name: 'status'},
              {data: 'created_at', name: 'created_at'},
              
          ]
      });

    });
  </script>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\axesprime\resources\views/user/deposits.blade.php ENDPATH**/ ?>