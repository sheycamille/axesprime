<?php $__env->startSection('topbar'); ?>
<header class="c-header c-header-light c-header-fixed c-header-with-subheader">
    <button class="c-header-toggler c-class-toggler d-lg-none mr-auto" type="button" data-target="#sidebar"
        data-class="c-sidebar-show"><span class="c-header-toggler-icon"></span></button><a
        class="c-header-brand d-sm-none" href="/"><img class="c-header-brand" src="<?php echo e(asset('front/favicon.png')); ?>"
            width="97" height="46" alt="AxePro Logo"></a>
    <button class="c-header-toggler c-class-toggler ml-3 d-md-down-none" type="button" data-target="#sidebar"
        data-class="c-sidebar-lg-show" responsive="true"><span class="c-header-toggler-icon"></span></button>

    <ul class="c-header-nav ml-auto mr-4">
        <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#"
                role="button" aria-haspopup="true" aria-expanded="false">
                <div class="">
                    Hi <?php echo e(Auth('admin')->User()->firstName); ?>

                    <svg class="c-icon mr-2">
                        <use xlink:href="<?php echo e(url('admin/icons/sprites/free.svg#cil-menu')); ?>"></use>
                    </svg>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right pt-0">
                <a class="dropdown-item" href="<?php echo e(route('adminchangepass')); ?>">Change
                    Password
                </a>
                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('logoutform').submit();">

                    <svg class="c-icon mr-2">
                        <use xlink:href="<?php echo e(url('admin/icons/sprites/free.svg#cil-account-logout')); ?>"></use>
                    </svg>
                    Logout
                    <form id="logoutform" action="<?php echo e(route('adminlogout')); ?>" method="POST" style="display: none;">
                        <?php echo e(csrf_field()); ?>

                    </form>
                </a>
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
<?php /**PATH C:\laragon\www\axesprime\resources\views/admin/topmenu.blade.php ENDPATH**/ ?>