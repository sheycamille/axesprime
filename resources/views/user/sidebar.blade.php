<div class="sidebar sidebar-style-3" data-background-color="{{ $bg }}">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ Auth::user()->name }}
                            {{-- <span class="user-level">{{\App\Models\Setting::getValue('site_name') }} User</span> --}}
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li class="@yield('my-profile')">
                                <a href="{{ url('dashboard/profile') }}">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li class="@yield('kyc')">
                                <a href="{{ url('dashboard/verify-account') }}">
                                    <span class="link-collapse">My KYC</span>
                                </a>
                            </li>
                            <li class="@yield('security') pt-2 pb-2">
                                <a href="{{ url('dashboard/manage-account-security') }}">
                                    <span class="sub-item">Account Security</span>
                                </a>
                            </li>
                            <li class="@yield('withdrawal-info') pt-2 pb-2">
                                <a href="{{ url('dashboard/accountdetails') }}">
                                    <span class="sub-item">Withdrawal Info</span>
                                </a>
                            </li>
                            <li class="@yield('notifications') pt-2 pb-2">
                                <a href="{{ url('dashboard/notifications') }}">
                                    <span class="sub-item">Notifications</span>
                                </a>
                            </li>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item @yield('dashboard')">
                    <a href="{{ url('/dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item @yield('accounts')">
                    <a data-toggle="collapse" href="#bases">
                        <i class="fas fa-user"></i>
                        <p>Accounts</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="bases">
                        <ul class="nav nav-collapse">
                            <li class="@yield('live-accounts')">
                                <a href="/dashboard/live-accounts">
                                    <span class="sub-item">Live Accounts</span>
                                </a>
                            </li>
                            <li class="@yield('demo-accounts')">
                                <a href="/dashboard/demo-accounts">
                                    <span class="sub-item">Demo Accounts</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ url('dashboard/tradinghistory') }}">
                <i class="fa fa-signal " aria-hidden="true"></i>
                <p>P/L record</p>
                </a>
                </li> --}}
                <li class="nav-item @yield('transactions')">
                    <a href="{{ url('dashboard/accounthistory') }}">
                        <i class="fa fa-briefcase " aria-hidden="true"></i>
                        <p>Transactions History</p>
                    </a>
                </li>
                <li class="nav-item @yield('deposits-and-withdrawals')">
                    <a data-toggle="collapse" href="#dept">
                        <i class="fas fa-credit-card"></i>
                        <p>Deposit/Withdrawal</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="dept">
                        <ul class="nav nav-collapse">
                            <li class="@yield('deposits')">
                                <a href="{{ url('dashboard/deposits') }}">
                                    <span class="sub-item">Deposits</span>
                                </a>
                            </li>
                            <li class="@yield('withdrawals')">
                                <a href="{{ url('dashboard/withdrawals') }}">
                                    <span class="sub-item">Withdrawals</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item @yield('downloads')">
                    <a href="{{ url('dashboard/downloads') }}">
                        <i class="fa fa-download" aria-hidden="true"></i>
                        <p>Downloads</p>
                    </a>
                </li>
                <li class="nav-item @yield('support')">
                    <a href="{{ url('dashboard/support') }}">
                        <i class="fa fa-life-ring" aria-hidden="true"></i>
                        <p>Support</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
