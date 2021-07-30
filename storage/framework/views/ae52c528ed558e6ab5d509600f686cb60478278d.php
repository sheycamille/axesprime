<div class="sidebar sidebar-style-3" data-background-color="<?php echo e($bg); ?>">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            <?php echo e(Auth::user()->name); ?>

                            
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li class="<?php echo $__env->yieldContent('my-profile'); ?>">
                                <a href="<?php echo e(url('dashboard/profile')); ?>">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li class="<?php echo $__env->yieldContent('kyc'); ?>">
                                <a href="<?php echo e(url('dashboard/verify-account')); ?>">
                                    <span class="link-collapse">My KYC</span>
                                </a>
                            </li>
                            <li class="<?php echo $__env->yieldContent('security'); ?> pt-2 pb-2">
                                <a href="<?php echo e(url('dashboard/manage-account-security')); ?>">
                                    <span class="sub-item">Account Security</span>
                                </a>
                            </li>
                            <li class="<?php echo $__env->yieldContent('withdrawal-info'); ?> pt-2 pb-2">
                                <a href="<?php echo e(url('dashboard/accountdetails')); ?>">
                                    <span class="sub-item">Withdrawal Info</span>
                                </a>
                            </li>
                            <li class="<?php echo $__env->yieldContent('notifications'); ?> pt-2 pb-2">
                                <a href="<?php echo e(url('dashboard/notifications')); ?>">
                                    <span class="sub-item">Notifications</span>
                                </a>
                            </li>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item <?php echo $__env->yieldContent('dashboard'); ?>">
                    <a href="<?php echo e(url('/dashboard')); ?>">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item <?php echo $__env->yieldContent('accounts'); ?>">
                    <a data-toggle="collapse" href="#bases">
                        <i class="fas fa-user"></i>
                        <p>Accounts</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="bases">
                        <ul class="nav nav-collapse">
                            <li class="<?php echo $__env->yieldContent('live-accounts'); ?>">
                                <a href="/dashboard/live-accounts">
                                    <span class="sub-item">Live Accounts</span>
                                </a>
                            </li>
                            <li class="<?php echo $__env->yieldContent('demo-accounts'); ?>">
                                <a href="/dashboard/demo-accounts">
                                    <span class="sub-item">Demo Accounts</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                
                <li class="nav-item <?php echo $__env->yieldContent('transactions'); ?>">
                    <a href="<?php echo e(url('dashboard/accounthistory')); ?>">
                        <i class="fa fa-briefcase " aria-hidden="true"></i>
                        <p>Transactions History</p>
                    </a>
                </li>
                <li class="nav-item <?php echo $__env->yieldContent('deposits-and-withdrawals'); ?>">
                    <a data-toggle="collapse" href="#dept">
                        <i class="fas fa-credit-card"></i>
                        <p>Deposit/Withdrawal</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="dept">
                        <ul class="nav nav-collapse">
                            <li class="<?php echo $__env->yieldContent('deposits'); ?>">
                                <a href="<?php echo e(url('dashboard/deposits')); ?>">
                                    <span class="sub-item">Deposits</span>
                                </a>
                            </li>
                            <li class="<?php echo $__env->yieldContent('withdrawals'); ?>">
                                <a href="<?php echo e(url('dashboard/withdrawals')); ?>">
                                    <span class="sub-item">Withdrawals</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item <?php echo $__env->yieldContent('downloads'); ?>">
                    <a href="<?php echo e(url('dashboard/downloads')); ?>">
                        <i class="fa fa-download" aria-hidden="true"></i>
                        <p>Downloads</p>
                    </a>
                </li>
                <li class="nav-item <?php echo $__env->yieldContent('support'); ?>">
                    <a href="<?php echo e(url('dashboard/support')); ?>">
                        <i class="fa fa-life-ring" aria-hidden="true"></i>
                        <p>Support</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
<?php /**PATH /Users/wadingaleonardngonga/Documents/Projects/axesprime/resources/views/user/sidebar.blade.php ENDPATH**/ ?>