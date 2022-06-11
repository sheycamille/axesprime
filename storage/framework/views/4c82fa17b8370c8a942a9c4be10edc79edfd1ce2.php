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

            <li class="c-sidebar-nav-dropdown <?php echo $__env->yieldContent('manage-users'); ?>">
                <a class="c-sidebar-nav-dropdown-toggle" href="<?php echo e(route('manageusers')); ?>">
                    <i class="cil-user c-sidebar-nav-icon"></i>
                    Manage Users
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <?php if(auth('admin')->user()->hasPermissionTo('muser-list', 'admin')): ?>
                        <li class="c-sidebar-nav-item">
                            <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('users'); ?>" href="<?php echo e(route('manageusers')); ?>">
                                All Users</a>
                        </li>
                    <?php endif; ?>

                    <?php if(\App\Models\Setting::getValue('enable_kyc') == 'yes' &&
    auth('admin')->user()->hasPermissionTo('mkyc-list', 'admin')): ?>
                        <li class="c-sidebar-nav-item">
                            <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('kyc'); ?>" href="<?php echo e(route('kyc')); ?>">
                                KYC
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>

            <li class="c-sidebar-nav-dropdown <?php echo $__env->yieldContent('manage-dw'); ?>">
                <a class="c-sidebar-nav-dropdown-toggle" data-toggle="collapse" href="#mdw">
                    <i class="cil-money c-sidebar-nav-icon"></i>
                    Manage D/W
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <?php if(auth('admin')->user()->hasPermissionTo('mdeposit-list', 'admin')): ?>
                        <li class="c-sidebar-nav-item">
                            <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('deposits'); ?>" href="<?php echo e(route('mdeposits')); ?>">
                                Manage Deposits
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if(auth('admin')->user()->hasPermissionTo('mwithdrawal-list', 'admin')): ?>
                        <li class="c-sidebar-nav-item">
                            <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('withdrawals'); ?>" href="<?php echo e(route('mwithdrawals')); ?>">
                                Manage Withdrawals
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>

            <li class="c-sidebar-nav-dropdown <?php echo $__env->yieldContent('maccounts'); ?>">
                <a class="c-sidebar-nav-dropdown-toggle" data-toggle="collapse" href="#macc">
                    <i class="cil-monitor c-sidebar-nav-icon"></i>
                    MT5 Accounts
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <?php if(auth('admin')->user()->hasPermissionTo('mftd-list', 'admin')): ?>
                        <li class="c-sidebar-nav-item">
                            <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('ftds'); ?>" href="<?php echo e(route('mftds')); ?>">
                                FTDs
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if(auth('admin')->user()->hasPermissionTo('macctype-list', 'admin')): ?>
                        <li class="c-sidebar-nav-item">
                            <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('accounttypes'); ?>" href="<?php echo e(route('accounttypes')); ?>">
                                Account Types
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if(auth('admin')->user()->hasPermissionTo('macctype-create', 'admin')): ?>
                        <li class="c-sidebar-nav-item">
                            <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('addaccounttype'); ?>"
                                href="<?php echo e(route('showaddaccounttype')); ?>">
                                Add Account Type
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>

            <li class="c-sidebar-nav-dropdown <?php echo $__env->yieldContent('manage-admins'); ?>">
                <a class="c-sidebar-nav-dropdown-toggle" data-toggle="collapse" href="#adm">
                    <i class="cil-user-unfollow c-sidebar-nav-icon"></i>
                    Administrator(s)
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <?php if(auth('admin')->user()->hasPermissionTo('madmin-list', 'admin')): ?>
                        <li class="c-sidebar-nav-item">
                            <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('admins'); ?>" href="<?php echo e(route('madmins')); ?>">
                                Manage Administrator(s)
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if(auth('admin')->user()->hasPermissionTo('mrole-list', 'admin')): ?>
                        <li class="c-sidebar-nav-item">
                            <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('roles'); ?>" href="<?php echo e(route('manageroles')); ?>">
                                Manage Role(s)
                            </a>
                    <?php endif; ?>
            </li>
            <?php if(auth('admin')->user()->hasPermissionTo('mperm-list', 'admin')): ?>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('perms'); ?>" href="<?php echo e(route('manageperms')); ?>">
                        Manage Permission(s)
                    </a>
                </li>
            <?php endif; ?>
        </ul>
        </li>

        

        <?php if(auth('admin')->user()->hasPermissionTo('msetting-list', 'admin')): ?>
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle <?php echo $__env->yieldContent('settings'); ?>" data-toggle="collapse">
                    <i class="cil-settings c-sidebar-nav-icon"></i>
                    Settings
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('siteinfo'); ?>" href="<?php echo e(route('settings')); ?>">
                            Site Information
                        </a>
                    </li>
                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('sitepref'); ?>" href="<?php echo e(route('preferencesettings')); ?>">
                            Site Preferences
                        </a>
                    </li>
                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link <?php echo $__env->yieldContent('sitepay'); ?>" href="<?php echo e(route('paymentsettings')); ?>">
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
<?php /**PATH C:\laragon\www\axesprime\resources\views/admin/sidebar.blade.php ENDPATH**/ ?>