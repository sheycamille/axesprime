<?php $__env->startSection('sidebar'); ?>
<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand">
        <a href="/">
            <img class="c-sidebar-brand-full" src="<?php echo e(asset('front/img/axepro-group-logo.png')); ?>" width="100"
                height="46" alt="AxePro Logo">
            <img class="c-sidebar-brand-minimized" src="<?php echo e(asset('front/favicon.png')); ?>" width="40" height="46"
                alt="AxePro Logo">
        </a>
    </div>
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="<?php echo e(route('dashboard')); ?>">
                <i class="cil-speedometer c-sidebar-nav-icon"></i>
                <?php echo app('translator')->get('message.dashboard.dash'); ?>
            </a>
        </li>

        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle <?php echo $__env->yieldContent('my-account'); ?>" href="#">
                <i class="cil-wallet c-sidebar-nav-icon"></i>
                <?php echo app('translator')->get('message.dashboard.my_act'); ?>
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('my-profile'); ?>" href="<?php echo e(route('account.profile')); ?>">
                    <?php echo app('translator')->get('message.dashboard.my_pfl'); ?>
                    </a>
                </li>
                <?php if(\App\Models\Setting::getValue('enable_kyc') == 'yes'): ?>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('kyc'); ?>" href="<?php echo e(route('account.verify')); ?>">
                        <span class="link-collapse"><?php echo app('translator')->get('message.dashboard.kyc'); ?></span>
                    </a>
                </li>
                <?php endif; ?>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('security'); ?>"
                        href="<?php echo e(route('account.security')); ?>">
                        <span class="sub-item"><?php echo app('translator')->get('message.dashboard.sec'); ?></span>
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('withdrawal-info'); ?>"
                        href="<?php echo e(route('withdrawaldetails')); ?>">
                        <span class="sub-item"><?php echo app('translator')->get('message.dashboard.with_info'); ?></span>
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('notifications'); ?>" href="<?php echo e(route('notifications')); ?>">
                        <span class="sub-item"><?php echo app('translator')->get('message.dashboard.notif'); ?></span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle <?php echo $__env->yieldContent('accounts'); ?>" href="#">
                <i class="cil-window-restore c-sidebar-nav-icon"></i>
                <?php echo app('translator')->get('message.dashboard.trade'); ?>
            </a>

            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('live-accounts'); ?>" href="<?php echo e(route('account.liveaccounts')); ?>">
                        <span class="sub-item"><?php echo app('translator')->get('message.dashboard.live'); ?></span>
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('demo-accounts'); ?>" href="<?php echo e(route('account.demoaccounts')); ?>">
                        <span class="sub-item"><?php echo app('translator')->get('message.dashboard.demo'); ?></span>
                    </a>
                </li>
            </ul>
        </li>

        

        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle <?php echo $__env->yieldContent('deposits-and-withdrawals'); ?>"
                href="#">
                <i class="cil-money c-sidebar-nav-icon"></i>
                <?php echo app('translator')->get('message.dashboard.deposits'); ?>
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('deposits'); ?>" href="<?php echo e(route('account.deposits')); ?>">
                        <span class="sub-item"><?php echo app('translator')->get('message.dashboard.depo'); ?></span>
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('withdrawals'); ?>" href="<?php echo e(route('account.withdrawals')); ?>">
                        <span class="sub-item"><?php echo app('translator')->get('message.dashboard.with'); ?></span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('downloads'); ?>" href="<?php echo e(route('account.downloads')); ?>">
                <i class="cil-cloud-download c-sidebar-nav-icon"></i>
                <?php echo app('translator')->get('message.dashboard.down'); ?>
            </a>
        </li>

        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('support'); ?>" href="<?php echo e(route('account.support')); ?>">
                <i class="cil-headphones c-sidebar-nav-icon"></i>
                <?php echo app('translator')->get('message.dashboard.sup'); ?>
            </a>
        </li>
    </ul>
</div>
<?php $__env->stopSection(); ?>
<?php /**PATH C:\laragon\www\axesprime\resources\views/user/sidebar.blade.php ENDPATH**/ ?>