<!-- Stored in resources/views/child.blade.php -->

<!-- Sidebar -->
<div class="sidebar sidebar-style-3" data-background-color="{{ Auth('admin')->User()->dashboard_style }}">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ Auth('admin')->User()->firstName }} {{ Auth('admin')->User()->lastName }}
                            <span class="user-level"> Admin</span>
                            {{-- <span class="caret"></span> --}}
                        </span>
                    </a>
                </div>
            </div>

            <ul class="nav nav-primary">
                <li class="nav-item @yield('dashboard')">
                    <a href="{{ url('/admin/dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                @if (Auth('admin')->User()->type == 'Super Admin' || Auth('admin')->User()->type == 'Admin')

                    <li class="nav-item @yield('manage-users')">
                        <a data-toggle="collapse" href="#usersdp">
                            <i class="fa fa-user-circle" aria-hidden="true"></i>
                            <p>Manage Users</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="usersdp">
                            <ul class="nav nav-collapse">
                                <li class="@yield('users')">
                                    <a href="{{ url('/admin/dashboard/manageusers') }}">
                                        <i class="fa fa-user " aria-hidden="true"></i>
                                        <span class="sub-item">All Users</span>
                                    </a>
                                </li>
                                <li class="@yield('kyc')">
                                    <a href="{{ url('/admin/dashboard/kyc') }}">
                                        <i class="fa fa-recycle " aria-hidden="true"></i>
                                        <span class="sub-item">KYC</span>
                                    </a>
                                </li>
                                <li class="@yield('add-user')">
                                    <a href="{{ url('/admin/dashboard/adduser') }}">
                                        <i class="fa fa-user-plus " aria-hidden="true"></i>
                                        <span class="sub-item">Add User</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item @yield('manage-dw')">
                        <a data-toggle="collapse" href="#mdw">
                            <i class="fas fa-credit-card"></i>
                            <p>Manage D/W</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="mdw">
                            <ul class="nav nav-collapse">
                                <li class="@yield('deposits')">
                                    <a href="{{ url('/admin/dashboard/mdeposits') }}">
                                        <span class="sub-item">Manage Deposits</span>
                                    </a>
                                </li>
                                <li class="@yield('withdrawals')">
                                    <a href="{{ url('/admin/dashboard/mwithdrawals') }}">
                                        <span class="sub-item">Manage Withdrawals</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item @yield('maccounts')">
                        <a data-toggle="collapse" href="#macc">
                            <i class="fas fa-address-card"></i>
                            <p>MT5 Accounts</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="macc">
                            <ul class="nav nav-collapse">
                                <li class="@yield('ftds')">
                                    <a href="{{ url('/admin/dashboard/ftds') }}">
                                        <span class="sub-item">FTDs</span>
                                    </a>
                                </li>
                                <li class="@yield('accounttypes')">
                                    <a href="{{ url('/admin/dashboard/accounttypes') }}">
                                        <span class="sub-item">Account Types</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endif

                @if (Auth('admin')->User()->type == 'Super Admin')
                    <li class="nav-item @yield('manage-admins')">
                        <a data-toggle="collapse" href="#adm">
                            <i class="fa fa-user"></i>
                            <p>Administrator(s)</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="adm">
                            <ul class="nav nav-collapse">
                                <li class="@yield('admins')">
                                    <a href="{{ url('/admin/dashboard/madmin') }}">
                                        <span class="sub-item">Manage Administrator(s)</span>
                                    </a>
                                </li>
                                <li class="@yield('add-admin')">
                                    <a href="{{ url('/admin/dashboard/addmanager') }}">
                                        <span class="sub-item">Add Admin</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item @yield('frontend-control')">
                        <a href="{{ url('/admin/dashboard/frontpage') }}">
                            <i class="fa fa-sitemap" aria-hidden="true"></i>
                            <p>Front-end control</p>
                        </a>
                    </li>

                    <li class="nav-item @yield('settings')">
                        <a href="{{ url('/admin/dashboard/settings') }}">
                            <i class="fa fa-cog" aria-hidden="true"></i>
                            <p>Settings</p>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
