<!-- Stored in resources/views/child.blade.php -->

<!-- Sidebar -->

<div class="sidebar sidebar-style-2" data-background-color="<?php echo e($bg); ?>">
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
                            <li>
                                <a href="<?php echo e(url('dashboard/profile')); ?>">
                                    <span class="link-collapse">Account Settings</span>
                                </a>
                            </li>
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
                        <p>Account</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="bases">
                        <ul class="nav nav-collapse">
                            <li class="<?php echo $__env->yieldContent('withdrawal-info'); ?>">
                                <a href="<?php echo e(url('dashboard/accountdetails')); ?>">
                                    <span class="sub-item">Withdrawal Info</span>
                                </a>
                            </li>
                            <li class="<?php echo $__env->yieldContent('notifications'); ?>">
                                <a href="<?php echo e(url('dashboard/notification')); ?>">
                                    <span class="sub-item">Notifications</span>
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
                                    <span class="sub-item">Withdrawal</span>
                                </a>
                            </li>
                        </ul>
                    </div>
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
<?php /**PATH /Users/wadingaleonardngonga/Downloads/online-trade-06-04-2021/resources/views/user/sidebar.blade.php ENDPATH**/ ?>