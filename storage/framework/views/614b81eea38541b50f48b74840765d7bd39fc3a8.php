<!-- Stored in resources/views/child.blade.php -->

<!-- Sidebar -->
<div class="sidebar sidebar-style-2" data-background-color="<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            <?php echo e(Auth('admin')->User()->firstName); ?> <?php echo e(Auth('admin')->User()->lastName); ?>

                            <span class="user-level"> Admin</span>
                            
                        </span>
                    </a>
                </div>
            </div>

            <ul class="nav nav-primary">
                <li class="nav-item active">
                    <a href="<?php echo e(url('/admin/dashboard')); ?>">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <?php if(Auth('admin')->User()->type == "Super Admin" || Auth('admin')->User()->type == "Admin"): ?>

                

                <li class="nav-item">
                    <a data-toggle="collapse" href="#usersdp">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                        <p>Manage Users</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="usersdp">
                        <ul class="nav nav-collapse">
                            <li class="nav-item">
                                <a href="<?php echo e(url('/admin/dashboard/manageusers')); ?>">
                                    <i class="fa fa-user " aria-hidden="true"></i>
                                    <span class="sub-item">All Users</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(url('/admin/dashboard/adduser')); ?>">
                                    <i class="fa fa-recycle " aria-hidden="true"></i>
                                    <span class="sub-item">Add User</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a data-toggle="collapse" href="#mdw">
                        <i class="fas fa-credit-card"></i>
                        <p>Manage D/W</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="mdw">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="<?php echo e(url('/admin/dashboard/mdeposits')); ?>">
                                    <span class="sub-item">Manage Deposit</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/admin/dashboard/mwithdrawals')); ?>">
                                    <span class="sub-item">Manage Withdrawal</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                

                
                <?php endif; ?>

                <?php if(Auth('admin')->User()->type == "Super Admin"): ?>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#adm">
                        <i class="fa fa-user"></i>
                        <p>Administrator(s)</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="adm">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="<?php echo e(url('/admin/dashboard/addmanager')); ?>">
                                    <span class="sub-item">Add Manager</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/admin/dashboard/madmin')); ?>">
                                    <span class="sub-item">Manage Administrator(s)</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="<?php echo e(url('/admin/dashboard/frontpage')); ?>">
                        <i class="fa fa-sitemap" aria-hidden="true"></i>
                        <p>Front-end control</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo e(url('/admin/dashboard/settings')); ?>">
                        <i class=" fa fa-cog" aria-hidden="true"></i>
                        <p>Settings</p>
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
<?php /**PATH /Users/wadingaleonardngonga/Downloads/online-trade-06-04-2021/resources/views/admin/sidebar.blade.php ENDPATH**/ ?>