

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
                                <table id="ShipTable" class="table table-bordered table-striped table-responsive-sm yajra-datatable">
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
                                    </tbody>
                                </table>
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
          ajax: "<?php echo e(route('fetchusers')); ?>",
          columns: [
              {data: 'id', name: 'ID'},
              {data: 'name', name: 'Name'},
              {data: 'phone-email', name: 'Phone/Email'},
              {data: 'balance', name: 'Balance'},
              {data: 'bonus', name: 'Bonus'},
              {data: 'num_accounts', name: 'No. of Accounts'},
              {data: 'status', name: 'Status'},
              {data: 'date_registered', name: 'Date Registered'},
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


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\axesprime\resources\views/admin/users.blade.php ENDPATH**/ ?>