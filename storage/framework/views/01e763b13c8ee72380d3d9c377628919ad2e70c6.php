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
					<h1 class="title1 text-<?php echo e($text); ?>"> <?php echo e($user->name); ?> Investment Plans</h1>
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
					<div class="mb-5 row">
						<div class="col card p-3 shadow bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
							<div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table"> 
								<span style="margin:3px;">
								<table id="ShipTable" class="table table-hover text-<?php echo e($text); ?>"> 
									<thead> 
										<tr> 
											<th>Client name</th>
											<th>Plan</th>
											<th>Amount</th>
											<th>Active</th>
											<th>Duration</th>
											<th>Created on</th> 
											<th>Expire on</th>
										</tr> 
									</thead> 
									<tbody> 
										<?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr> 
											<td><?php echo e($plan->duser->name); ?></td>
											<td><?php echo e($plan->dplan->name); ?></td> 
											<td><?php echo e($plan->amount); ?></td> 
											<td><?php echo e($plan->active); ?></td> 
											<td><?php echo e($plan->inv_duration); ?></td> 
											<td><?php echo e(\Carbon\Carbon::parse($plan->created_at)->toDayDateTimeString()); ?></td> 
											<td><?php echo e(\Carbon\Carbon::parse($plan->expire_date)->toDayDateTimeString()); ?></td> 
										</tr> 
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</tbody> 
								</table>
							</div>
						</div>
					</div>
				</div>	
			</div>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadingaleonardngonga/Downloads/online-trade-06-04-2021/resources/views/admin/user_plans.blade.php ENDPATH**/ ?>