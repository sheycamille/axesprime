

<?php $__env->startSection('title', 'Manage FTDs'); ?>

<?php $__env->startSection('maccounts', 'c-show'); ?>
<?php $__env->startSection('ftds', 'c-active'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container-fluid">
    <div class="fade-in">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header fw-bolder">
                    <?php echo e($title); ?>

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
                        <div class="col p-4">
                            <div class="bs-example table-responsive" data-example-id="hoverable-table">

                                <table id="ShipTable" class="table table-bordered table-striped table-responsive-sm yajra-datatable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Client Name</th>
                                            <th>First Deposit</th>
                                            <th>Date of Deposit </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <th scope="row"><?php echo e($user->id); ?></th>
                                            <td><?php echo e($user->name); ?></td>
                                            <?php
                                            $dp = $user
                                            ->dp()
                                            ->where('status', 'Processed')
                                            ->first();
                                            ?>
                                            <td><?php echo e($dp->amount); ?></td>
                                            <td> <?php echo e(\Carbon\Carbon::parse($dp->date_created)->toDayDateTimeString()); ?>

                                            </td>
                                        </tr>
                                        <?php echo $__env->make('admin.users_actions', $user, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
          ajax: "<?php echo e(route('fetchftd')); ?>",
          columns: [
              {data: 'id', name: 'id'},
              {data: 'client name', name: 'client name'},
              {data: 'first deposit',name: 'first deposit'},
              {
                  data: 'date_created',
                  name: 'date_created'
                  
              },
          ]
      });

    });
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\axesprime\resources\views/admin/mftds.blade.php ENDPATH**/ ?>