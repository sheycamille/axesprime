<?php
if (Auth('admin')->User()->dashboard_style == 'light') {
$text = 'dark';
} else {
$text = 'light';
} ?>

<?php $__env->startSection('content'); ?>
    <div class="main-panel">
        <div class="content bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h1 class="title1 text-<?php echo e($text); ?> text-center"><?php echo e($title); ?></h1>
                </div>

                <div class="mb-5 row">
                    <div class="col shadow card p-4 bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                        <div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table">

                            <table id="ShipTable" class="table table-hover text-<?php echo e($text); ?>">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Client Name</th>
                                        <th>Date of Registration </th>
                                        <th>First Deposit</th>
                                        <th>Date of Deposit </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $dp = $user
                                                ->dp()
                                                ->where('status', 'Processed')
                                                ->first();
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo e($user->id); ?></th>
                                            <td><?php echo e($user->name); ?></td>
                                            <td> <?php echo e(\Carbon\Carbon::parse($user->created_at)->toDayDateTimeString()); ?>

                                            </td>
                                            <td><?php echo e($dp->amount); ?></td>
                                            <td>
                                                <?php if($dp->amount > 0): ?>
                                                    <?php echo e(\Carbon\Carbon::parse($dp->date_created)->toDayDateTimeString()); ?>

                                                <?php endif; ?>
                                            </td>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadingaleonardngonga/Documents/Projects/axesprime/resources/views/front/ftds.blade.php ENDPATH**/ ?>