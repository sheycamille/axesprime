<?php $__env->startSection('topbar'); ?>
<header class="c-header c-header-light c-header-fixed c-header-with-subheader">
    <button class="c-header-toggler c-class-toggler d-lg-none mr-auto" type="button" data-target="#sidebar"
        data-class="c-sidebar-show"><span class="c-header-toggler-icon"></span></button><a
        class="c-header-brand d-sm-none" href="/"><img class="c-header-brand" src="<?php echo e(asset('front/favicon.png')); ?>"
            width="97" height="46" alt="AxePro Logo"></a>
    <button class="c-header-toggler c-class-toggler ml-3 d-md-down-none" type="button" data-target="#sidebar"
        data-class="c-sidebar-lg-show" responsive="true"><span class="c-header-toggler-icon"></span></button>

    <ul class="c-header-nav ml-auto mr-4">
        <li class="c-header-nav-item dropdown">
            <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">
                <i class="fas fa-recycle"></i>
                <strong>KYC</strong>
            </a>
            <div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
                <div class="quick-actions-header">
                    <?php if(Auth::user()->account_verify == 'yes'): ?>
                    <span class="subtitle op-8">
                        <a href="#" class="p-0 col-12">
                            KYC Status: Account verified
                        </a>
                    </span>
                    <?php else: ?>
                    <span class="subtitle op-8"><a>KYC status:
                            <?php echo e(Auth::user()->account_verify); ?></a></span>
                    <?php endif; ?>
                </div>
                <div class="quick-actions-scroll scrollbar-outer">
                    <div class="quick-actions-items">
                        <div class="m-0 row">
                            <?php if(Auth::user()->account_verify != 'yes'): ?>
                            <a href="<?php echo e(route('account.verify')); ?>" class="btn btn-success">Verify
                                Account </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </li>

        <li class="c-header-nav-link">
            <a class="nav-link" href="<?php echo e(route('refreshaccounts')); ?>" aria-expanded="false">
                <strong><?php echo app('translator')->get('message.topmenu.refresh'); ?> </strong>
            </a>
        </li>

        <li class="c-header-nav-item dropdown">
            <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">
                <div class="">
                <?php echo app('translator')->get('message.topmenu.hi'); ?> <?php echo e(Auth::user()->name); ?>

                    <svg class="c-icon mr-2">
                        <use xlink:href="<?php echo e(url('admin/icons/sprites/free.svg#cil-menu')); ?>"></use>
                    </svg>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right pt-0">
                <a class="dropdown-item" href="<?php echo e(url('dashboard/changepassword')); ?>"><?php echo app('translator')->get('message.topmenu.chg_pss'); ?></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo e(url('dashboard/profile')); ?>"><?php echo app('translator')->get('message.topmenu.act_set'); ?></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <?php echo app('translator')->get('message.topmenu.log'); ?>
                </a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo e(csrf_field()); ?>

                </form>
            </div>
        </li>
    </ul>

    <div class="c-subheader px-3">
        <ol class="breadcrumb border-0 m-0">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <?php $segments = ''; ?>
            <?php for($i = 1; $i <= count(Request::segments()); $i++): ?> <?php $segments .='/' . Request::segment($i); ?>
                <?php if($i < count(Request::segments())): ?> <li class="breadcrumb-item"><?php echo e(ucfirst(Request::segment($i))); ?>

                    </li>
                    <?php else: ?>
                    <li class="breadcrumb-item active"><?php echo e(ucfirst(Request::segment($i))); ?></li>
                    <?php endif; ?>
                    <?php endfor; ?>
        </ol>
    </div>
</header>
<?php $__env->stopSection(); ?>
<?php /**PATH /Users/wadingaleonardngonga/Documents/Projects/axesprime/resources/views/user/topmenu.blade.php ENDPATH**/ ?>