<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('dashboard', 'c-active'); ?>

<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('admin/css/coreui-chartjs.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('user.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('user.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-left"><?php echo app('translator')->get('message.body.welcome'); ?>, <?php echo e(Auth::user()->name); ?>!</h1>
                    </div>

                    <div class="card-body">
                        <?php if(Session::has('getAnouc') && Session::get('getAnouc') == 'true'): ?>
                        <?php if(\App\Models\Setting::getValue('enable_annoc') == 'on'): ?>
                        <h5 id="ann" class="op-7 mb-4">
                            <?php echo e(\App\Models\Setting::getValue('newupdate')); ?></h5>
                        <script type="text/javascript">
                            var announment = $("#ann").html();
                                console.log(announment);
                                swal({
                                    title: "Annoucement!",
                                    text: announment,
                                    icon: "info",
                                    buttons: {
                                        confirm: {
                                            text: "Okay",
                                            value: true,
                                            visible: true,
                                            className: "btn btn-info",
                                            closeModal: true
                                        }
                                    }
                                });
                        </script>
                        <?php endif; ?>
                        <?php echo e(session()->forget('getAnouc')); ?>

                        <?php endif; ?>

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

                        <div class="d-flex justify-content-stretch flex-row pb-5 pt-5">
                            <div class="col-3 text-center">
                                <a class="btn btn-primary" href="<?php echo e(route('account.deposits')); ?>">
                                <?php echo app('translator')->get('message.body.depo'); ?>
                                </a>
                            </div>
                            <div class="col-3 text-center">
                                <a class="btn btn-primary" href="<?php echo e(route('account.withdrawals')); ?>">
                                <?php echo app('translator')->get('message.body.withdraw_funds'); ?>
                                </a>
                            </div>
                            <div class="col-3 text-center">
                                <a class="btn btn-primary" href="<?php echo e(route('account.liveaccounts')); ?>">
                                <?php echo app('translator')->get('message.body.open'); ?>
                                </a>
                            </div>
                            <div class="col-3 text-center">
                                <a class="btn btn-primary" href="<?php echo e(route('account.downloads')); ?>">
                                <?php echo app('translator')->get('message.body.downloads'); ?>
                                </a>
                            </div>
                        </div>

                        <!-- Beginning of Dashboard Stats  -->
                        <div class="row">

                            <div class="col-sm-6 col-md-4">
                                <div class="card text-white bg-primary">
                                    <div class="card-body">
                                        <div class="text-muted text-right mb-4">
                                            <i class="c-icon c-icon-2xl cil-money c-sidebar-nav-icon"></i>
                                        </div>
                                        <div class="text-value-lg">
                                            <?php if(!empty($deposited)): ?>
                                            <?php echo e(\App\Models\Setting::getValue('currency')); ?><?php echo e($deposited); ?>

                                            <?php else: ?>
                                            <?php echo e(\App\Models\Setting::getValue('currency')); ?>0.00
                                            <?php endif; ?>
                                        </div>
                                        <small class="text-muted text-uppercase font-weight-bold"><?php echo app('translator')->get('message.body.deposited'); ?> </small>
                                        <div class="progress progress-white progress-xs mt-3">
                                            <div class="progress-bar" role="progressbar" style="width: 25%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <div class="card text-white bg-success">
                                    <div class="card-body">
                                        <div class="text-muted text-right mb-4">
                                            <i class="c-icon c-icon-2xl cil-money c-sidebar-nav-icon"></i>
                                        </div>
                                        <div class="text-value-lg">
                                            <?php echo e(\App\Models\Setting::getValue('currency')); ?><?php echo e(number_format($total_balance, 2, '.', ',')); ?>

                                        </div>
                                        <small class="text-muted text-uppercase font-weight-bold"><?php echo app('translator')->get('message.body.balance'); ?> </small>
                                        <div class="progress progress-white progress-xs mt-3">
                                            <div class="progress-bar" role="progressbar" style="width: 25%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <div class="card text-white bg-info">
                                    <div class="card-body">
                                        <div class="text-muted text-right mb-4">
                                            <i class="c-icon c-icon-2xl cil-money c-sidebar-nav-icon"></i>
                                        </div>
                                        <div class="text-value-lg">
                                            <?php echo e(\App\Models\Setting::getValue('currency')); ?>

                                            <?php echo e(number_format($total_bonus, 2, '.', ',')); ?>

                                        </div>
                                        <small class="text-muted text-uppercase font-weight-bold"><?php echo app('translator')->get('message.body.bonus'); ?> </small>
                                        <div class="progress progress-white progress-xs mt-3">
                                            <div class="progress-bar" role="progressbar" style="width: 25%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3><?php echo app('translator')->get('message.body.personal_chart'); ?> </h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="pt-1 col-12">
                                <?php echo $__env->make('includes.chart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadingaleonardngonga/Documents/Projects/axesprime/resources/views/user/dashboard.blade.php ENDPATH**/ ?>