<?php $__env->startSection('title', 'User Wallet'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header">
                        <h1 class="text-left"><?php echo e($user); ?> Wallet Details!</h1>
                    </div>
                    <div class="card-body">
                        <!-- Beginning of Dashboard Stats  -->
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <div class="card text-white bg-primary">
                                    <div class="card-body pb-0">
                                        <div class="btn-group float-right">
                                            <button class="btn btn-transparent p-0" type="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <svg class="c-icon">
                                                    <use
                                                        xlink:href="admin/assets/icons/coreui/free-symbol-defs.svg#cui-settings">
                                                    </use>
                                                </svg>
                                            </button>
                                        </div>
                                        <?php if(!empty($deposited)): ?>
                                        <div class="text-value-lg"><?php echo e(\App\Models\Setting::getValue('currency')); ?> <?php echo e($deposited); ?></div>
                                        <?php else: ?>
                                        <div class="text-value-lg"><?php echo e(\App\Models\Setting::getValue('currency')); ?>0.00
                                        </div>
                                        <?php endif; ?>
                                        <div>Deposited</div>
                                    </div>
                                    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                                        <canvas class="chart" id="card-chart1" height="70"></canvas>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="card text-white bg-info">
                                    <div class="card-body pb-0">
                                        <button class="btn btn-transparent p-0 float-right" type="button">
                                            <svg class="c-icon">
                                                <use
                                                    xlink:href="admin/assets/icons/coreui/free-symbol-defs.svg#cui-location-pin">
                                                </use>
                                            </svg>
                                        </button>
                                        <div class="text-value-lg"><?php echo e(\App\Models\Setting::getValue('currency')); ?><?php echo e(number_format($account_bal, 2, '.', ',')); ?></div>
                                        <div>Balance</div>
                                    </div>
                                    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                                        <canvas class="chart" id="card-chart2" height="70"></canvas>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="card text-white bg-warning">
                                    <div class="card-body pb-0">
                                        <div class="btn-group float-right">
                                            <button class="btn btn-transparent p-0" type="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <svg class="c-icon">
                                                    <use
                                                        xlink:href="admin/assets/icons/coreui/free-symbol-defs.svg#cui-settings">
                                                    </use>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="text-value-lg"><?php echo e(\App\Models\Setting::getValue('currency')); ?>

                                            <?php echo e(number_format($bonus, 2, '.', ',')); ?></div>
                                        <div>Bonus</div>
                                    </div>
                                    <div class="c-chart-wrapper mt-3" style="height:70px;">
                                        <canvas class="chart" id="card-chart3" height="70"></canvas>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadingaleonardngonga/Documents/Projects/axesprime/resources/views/admin/user_wallet.blade.php ENDPATH**/ ?>