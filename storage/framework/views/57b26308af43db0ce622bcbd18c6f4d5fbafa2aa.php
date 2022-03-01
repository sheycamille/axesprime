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
            <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('dashboard'); ?>" href="<?php echo e(route('admin.dashboard')); ?>">
                <i class="cil-speedometer c-sidebar-nav-icon"></i>
                Dashboard
            </a>
        </li>

        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle <?php echo $__env->yieldContent('manage-users'); ?>" href="<?php echo e(route('manageusers')); ?>">
                <i class="cil-user c-sidebar-nav-icon"></i>
                Manage Users
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('users'); ?>" href="<?php echo e(route('manageusers')); ?>">
                        All Users</a>
                </li>
                <?php if(\App\Models\Setting::getValue('enable_kyc') == 'yes'): ?>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('kyc'); ?>" href="<?php echo e(route('kyc')); ?>">
                        KYC
                    </a>
                </li>
                <?php endif; ?>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('add-user'); ?>" href="<?php echo e(url('/admin/dashboard/adduser')); ?>">
                        Add User
                    </a>
                </li>
            </ul>
        </li>

        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle <?php echo $__env->yieldContent('manage-dw'); ?>" data-toggle="collapse" href="#mdw">
                <i class="cil-money c-sidebar-nav-icon"></i>
                Manage D/W
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('deposits'); ?>" href="<?php echo e(url('/admin/dashboard/mdeposits')); ?>">
                        Manage Deposits
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('withdrawals'); ?>" href="<?php echo e(url('/admin/dashboard/mwithdrawals')); ?>">
                        Manage Withdrawals
                    </a>
                </li>
            </ul>
        </li>

        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle <?php echo $__env->yieldContent('maccounts'); ?>" data-toggle="collapse" href="#macc">
                <i class="cil-monitor c-sidebar-nav-icon"></i>
                MT5 Accounts
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('ftds'); ?>" href="<?php echo e(url('/admin/dashboard/ftds')); ?>">
                        FTDs
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('accounttypes'); ?>"
                        href="<?php echo e(url('/admin/dashboard/accounttypes')); ?>">
                        Account Types
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('addaccounttype'); ?>"
                        href="<?php echo e(url('/admin/dashboard/addaccounttype')); ?>">
                        Add Account Type
                    </a>
                </li>
            </ul>
        </li>

        <?php if(Auth('admin')->User()->type == 'Super Admin'): ?>
        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle <?php echo $__env->yieldContent('manage-admins'); ?>" data-toggle="collapse" href="#adm">
                <i class="cil-user-unfollow c-sidebar-nav-icon"></i>
                Administrator(s)
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('admins'); ?>" href="<?php echo e(url('/admin/dashboard/madmin')); ?>">
                        Manage Administrator(s)
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('add-admin'); ?>" href="<?php echo e(url('/admin/dashboard/addmanager')); ?>">
                        Add Admin
                    </a>
                </li>
            </ul>
        </li>

        

        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle <?php echo $__env->yieldContent('settings'); ?>" data-toggle="collapse">
                <i class="cil-settings c-sidebar-nav-icon"></i>
                Settings
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('siteinfo'); ?>" href="<?php echo e(url('/admin/dashboard/settings')); ?>">
                        Site Information
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('sitepref'); ?>" href="<?php echo e(url('/admin/dashboard/preferences')); ?>">
                        Site Preferences
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('sitepay'); ?>" href="<?php echo e(url('/admin/dashboard/payments')); ?>">
                        Payment Settings
                    </a>
                </li>
            </ul>
        </li>
        <?php endif; ?>
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
        data-class="c-sidebar-minimized"></button>
</div>

<?php $__env->stopSection(); ?>
<?php /**PATH /Users/wadleo/Documents/Projects/axeprogroup/axepro/resources/views/admin/sidebar.blade.php ENDPATH**/ ?>