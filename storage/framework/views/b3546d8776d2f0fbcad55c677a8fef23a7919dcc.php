<?php
if (Auth('admin')->User()->dashboard_style == "light") {
    $text = "dark";
} else {
    $text = "light";
}
?>

    <?php $__env->startSection('content'); ?>
        <?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="main-panel">
			<div class="content bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
				<div class="page-inner">
					<div class="mt-2 mb-4">
					<h1 class="title1 text-<?php echo e($text); ?>"><?php echo e(\App\Models\Setting::getValue('site_name')); ?> users list</h1>
					</div>
					<?php if(Session::has('message')): ?>
					<div class="row">
						<div class="col-lg-12">
							<div class="alert alert-info alert-dismissable">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<i class="fa fa-info-circle"></i> <?php echo e(Session::get('message')); ?>

							</div>
						</div>
					</div>
					<?php endif; ?>

					<?php if(count($errors) > 0): ?>
					<div class="row">
						<div class="col-lg-12">
							<div class="alert alert-danger alert-dismissable" role="alert" >
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<i class="fa fa-warning"></i> <?php echo e($error); ?>

								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
						</div>
					</div>
					<?php endif; ?>
					<div class="row">
						<div class="col">
							<a href="#" data-toggle="modal" data-target="#sendmailModal" class="btn btn-primary btn-lg" style="margin:10px;">Message all</a>
							<?php if(\App\Models\Setting::getValue('enable_kyc') =="yes"): ?>
							<a href="<?php echo e(url('admin/dashboard/kyc')); ?>" class="btn btn-warning btn-lg">KYC</a>
							<?php endif; ?>

						</div>
					</div>
					<div class="mb-5 row">
						<div class="col shadow card p-4 bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
							<div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table">

								<table id="ShipTable" class="table table-hover text-<?php echo e($text); ?>">
									<thead>
										<tr>
											<th>ID</th>
											<th>Balance</th>
											<th>Client Name</th>
											<th>Email</th>
											<th>Phone</th>
											<th>Inv. plan</th>
											<th>Status</th>
											<th>Date registered</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr>
											<th scope="row"><?php echo e($list->id); ?></th>
											<td><?php echo e(\App\Models\Setting::getValue('currency')); ?><?php echo e($list->account_bal); ?></td>
											<td><?php echo e($list->name); ?></td>
											<td><?php echo e($list->email); ?></td>
											<td><?php echo e($list->phone); ?></td>
											<td><a class="m-1 btn btn-warning btn-sm" href="<?php echo e(url('admin/dashboard/user-plans')); ?>/<?php echo e($list->id); ?>">Inv. plans</a></td>
											<td><?php echo e($list->status); ?></td>
											<td><?php echo e(\Carbon\Carbon::parse($list->created_at)->toDayDateTimeString()); ?></td>
											<td>
												<div class="dropdown">
													<a class="btn btn-secondary btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													Actions
													</a>
												<div class="dropdown-menu bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>" aria-labelledby="dropdownMenuLink">
													<a class="m-1 btn btn-info btn-sm" href="<?php echo e(url('admin/dashboard/user-wallet')); ?>/<?php echo e($list->id); ?>">See Wallet</a>

													<?php if($list->status==NULL || $list->status=='blocked'): ?>
													<a class="m-1 btn btn-primary btn-sm" href="<?php echo e(url('admin/dashboard/uunblock')); ?>/<?php echo e($list->id); ?>">Unblock</a>
													<?php else: ?>
													<a class="m-1 btn btn-danger btn-sm" href="<?php echo e(url('admin/dashboard/uublock')); ?>/<?php echo e($list->id); ?>">Block</a>
													<?php endif; ?>
													<?php if($list->trade_mode=='on'): ?>
													<a class="m-1 btn btn-danger btn-sm" href="<?php echo e(url('admin/dashboard/usertrademode')); ?>/<?php echo e($list->id); ?>/off">Turn off trade</a>
													<?php else: ?>
													<a class="m-1 btn btn-primary btn-sm" href="<?php echo e(url('admin/dashboard/usertrademode')); ?>/<?php echo e($list->id); ?>/on">Turn on trade</a>
													<?php endif; ?>
														<a href="#"  data-toggle="modal" data-target="#topupModal<?php echo e($list->id); ?>" class="m-1 btn btn-dark btn-sm">Credit/Debit</a>
														<a href="#" data-toggle="modal" data-target="#resetpswdModal<?php echo e($list->id); ?>"  class="m-1 btn btn-warning btn-sm">Reset Password</a>
														<a href="#" data-toggle="modal" data-target="#clearacctModal<?php echo e($list->id); ?>" class="m-1 btn btn-warning btn-sm">Clear Account</a>
														<a href="#" data-toggle="modal" data-target="#TradingModal<?php echo e($list->id); ?>" class="m-1 btn btn-secondary btn-sm">Add Trading History</a>
														<a href="#" data-toggle="modal" data-target="#deleteModal<?php echo e($list->id); ?>" class="m-1 btn btn-danger btn-sm">Delete</a>
														<a href="#" data-toggle="modal" data-target="#edituser<?php echo e($list->id); ?>" class="m-1 btn btn-secondary btn-sm">Edit</a>
														<a href="#" data-toggle="modal" data-target="#sendmailtooneuserModal<?php echo e($list->id); ?>" class="m-1 btn btn-info btn-sm">Send Message</a>
														<a href="#" data-toggle="modal" data-target="#switchuserModal<?php echo e($list->id); ?>"  class="m-2 btn btn-success btn-sm">Get access</a>
													</div>
												</div>
											</td>
										</tr>
										<?php echo $__env->make('admin.users_actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadingaleonardngonga/Downloads/online-trade-06-04-2021/resources/views/admin/users.blade.php ENDPATH**/ ?>