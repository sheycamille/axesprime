@section('sidebar')
<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand">
        <a href="/">
            <img class="c-sidebar-brand-full" src="{{ asset('front/img/axepro-group-logo.png') }}" width="100"
                height="46" alt="AxePro Logo">
            <img class="c-sidebar-brand-minimized" src="{{ asset('front/favicon.png') }}" width="40" height="46"
                alt="AxePro Logo">
        </a>
    </div>
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link @yield('dashboard')" href="{{ route('admin.dashboard') }}">
                <i class="cil-speedometer c-sidebar-nav-icon"></i>
                Dashboard
            </a>
        </li>

        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle @yield('manage-users')" href="{{ route('manageusers') }}">
                <i class="cil-user c-sidebar-nav-icon"></i>
                Manage Users
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link @yield('users')" href="{{ route('manageusers') }}">
                        All Users</a>
                </li>
                @if (\App\Models\Setting::getValue('enable_kyc') == 'yes')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link @yield('kyc')" href="{{ route('kyc') }}">
                        KYC
                    </a>
                </li>
                @endif
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link @yield('add-user')" href="{{ url('/admin/dashboard/adduser') }}">
                        Add User
                    </a>
                </li>
            </ul>
        </li>

        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle @yield('manage-dw')" data-toggle="collapse" href="#mdw">
                <i class="cil-money c-sidebar-nav-icon"></i>
                Manage D/W
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link @yield('deposits')" href="{{ url('/admin/dashboard/mdeposits') }}">
                        Manage Deposits
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link @yield('withdrawals')" href="{{ url('/admin/dashboard/mwithdrawals') }}">
                        Manage Withdrawals
                    </a>
                </li>
            </ul>
        </li>

        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle @yield('maccounts')" data-toggle="collapse" href="#macc">
                <i class="cil-monitor c-sidebar-nav-icon"></i>
                MT5 Accounts
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link @yield('ftds')" href="{{ url('/admin/dashboard/ftds') }}">
                        FTDs
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link @yield('accounttypes')"
                        href="{{ url('/admin/dashboard/accounttypes') }}">
                        Account Types
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link @yield('addaccounttype')"
                        href="{{ url('/admin/dashboard/addaccounttype') }}">
                        Add Account Type
                    </a>
                </li>
            </ul>
        </li>

        @if (Auth('admin')->User()->type == 'Super Admin')
        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle @yield('manage-admins')" data-toggle="collapse" href="#adm">
                <i class="cil-user-unfollow c-sidebar-nav-icon"></i>
                Administrator(s)
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link @yield('admins')" href="{{ url('/admin/dashboard/madmin') }}">
                        Manage Administrator(s)
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link @yield('add-admin')" href="{{ url('/admin/dashboard/addmanager') }}">
                        Add Admin
                    </a>
                </li>
            </ul>
        </li>

        {{-- <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link @yield('frontend-control')" href="{{ url('/admin/dashboard/frontpage') }}">
                <i class="fa fa-sitemap" aria-hidden="true"></i>
                <p>Front-end control</p>
            </a>
        </li> --}}

        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle @yield('settings')" data-toggle="collapse">
                <i class="cil-settings c-sidebar-nav-icon"></i>
                Settings
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link @yield('siteinfo')" href="{{ url('/admin/dashboard/settings') }}">
                        Site Information
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link @yield('sitepref')" href="{{ url('/admin/dashboard/preferences') }}">
                        Site Preferences
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link @yield('sitepay')" href="{{ url('/admin/dashboard/payments') }}">
                        Payment Settings
                    </a>
                </li>
            </ul>
        </li>
        @endif
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
        data-class="c-sidebar-minimized"></button>
</div>

@endsection
