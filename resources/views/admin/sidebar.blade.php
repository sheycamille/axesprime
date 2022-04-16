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

        <li class="c-sidebar-nav-dropdown @yield('manage-users')">
            <a class="c-sidebar-nav-dropdown-toggle" href="{{ route('manageusers') }}">
                <i class="cil-user c-sidebar-nav-icon"></i>
                Manage Users
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                @if(auth('admin')->user()->hasPermissionTo('musers-list', 'admin'))
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link @yield('users')" href="{{ route('manageusers') }}">
                        All Users</a>
                </li>
                @endif


                @if(auth('admin')->user()->hasPermissionTo('mkyc-list', 'admin'))
                @if (\App\Models\Setting::getValue('enable_kyc') == 'yes')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link @yield('kyc')" href="{{ route('kyc') }}">
                        KYC
                    </a>
                </li>
                @endif
                @endif
            </ul>
        </li>

        <li class="c-sidebar-nav-dropdown @yield('manage-dw')">
            <a class="c-sidebar-nav-dropdown-toggle" data-toggle="collapse" href="#mdw">
                <i class="cil-money c-sidebar-nav-icon"></i>
                Manage D/W
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                @if(auth('admin')->user()->hasPermissionTo('mdeposits-list', 'admin'))
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link @yield('deposits')" href="{{ route('mdeposits') }}">
                        Manage Deposits
                    </a>
                </li>
                @endif
                @if(auth('admin')->user()->hasPermissionTo('mwithdrawals-list', 'admin'))
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link @yield('withdrawals')" href="{{ route('mwithdrawals') }}">
                        Manage Withdrawals
                    </a>
                </li>
                @endif
            </ul>
        </li>

        <li class="c-sidebar-nav-dropdown @yield('maccounts')">
            <a class="c-sidebar-nav-dropdown-toggle" data-toggle="collapse" href="#macc">
                <i class="cil-monitor c-sidebar-nav-icon"></i>
                MT5 Accounts
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                @if(auth('admin')->user()->hasPermissionTo('ftds-list', 'admin'))
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link @yield('ftds')" href="{{ route('mftds') }}">
                        FTDs
                    </a>
                </li>
                @endif
                @if(auth('admin')->user()->hasPermissionTo('macctypes-list', 'admin'))
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link @yield('accounttypes')"
                        href="{{ route('accounttypes') }}">
                        Account Types
                    </a>
                </li>
                @endif
                @if(auth('admin')->user()->hasPermissionTo('macctypes-add', 'admin'))
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link @yield('addaccounttype')"
                        href="{{ route('addaccounttype') }}">
                        Add Account Type
                    </a>
                </li>
                @endif
            </ul>
        </li>

        <li class="c-sidebar-nav-dropdown @yield('manage-admins')">
            <a class="c-sidebar-nav-dropdown-toggle" data-toggle="collapse" href="#adm">
                <i class="cil-user-unfollow c-sidebar-nav-icon"></i>
                Administrator(s)
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                @if(auth('admin')->user()->hasPermissionTo('madmin-list', 'admin'))
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link @yield('admins')" href="{{ route('madmins') }}">
                        Manage Administrator(s)
                    </a>
                </li>
                @endif
                @if(auth('admin')->user()->hasPermissionTo('mrole-list', 'admin'))
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link @yield('roles')" href="{{ route('manageroles') }}">
                        Manage Role(s)
                    </a>
                 @endif
                </li>
                @if(auth('admin')->user()->hasPermissionTo('mperms-list', 'admin'))
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link @yield('perms')" href="{{ route('manageperms') }}">
                        Manage Permission(s)
                    </a>
                </li>
                @endif
            </ul>
        </li>

        {{-- <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link @yield('frontend-control')" href="{{ route('frontpage') }}">
                <i class="fa fa-sitemap" aria-hidden="true"></i>
                <p>Front-end control</p>
            </a>
        </li> --}}

        @if(auth('admin')->user()->hasPermissionTo('msettings-list', 'admin'))
        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle @yield('settings')" data-toggle="collapse">
                <i class="cil-settings c-sidebar-nav-icon"></i>
                Settings
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link @yield('siteinfo')" href="{{ route('settings') }}">
                        Site Information
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link @yield('sitepref')" href="{{ route('preferencesettings') }}">
                        Site Preferences
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link @yield('sitepay')" href="{{ route('paymentsettings') }}">
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
