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
            <a class="c-sidebar-nav-link" href="{{ url('/dashboard') }}">
                <i class="cil-speedometer c-sidebar-nav-icon"></i>
                @lang('message.dashboard.dash')
            </a>
        </li>

        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle @yield('my-account')" href="#">
                <i class="cil-wallet c-sidebar-nav-icon"></i>
                @lang('message.dashboard.my_act')
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link @yield('my-profile')" href="{{ url('dashboard/profile') }}">
                    @lang('message.dashboard.my_pfl')
                    </a>
                </li>
                @if (\App\Models\Setting::getValue('enable_kyc') == 'yes')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link @yield('kyc')" href="{{ url('dashboard/verify-account') }}">
                        <span class="link-collapse">@lang('message.dashboard.kyc')</span>
                    </a>
                </li>
                @endif
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link @yield('security')"
                        href="{{ url('dashboard/manage-account-security') }}">
                        <span class="sub-item">@lang('message.dashboard.sec')</span>
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link @yield('withdrawal-info')"
                        href="{{ url('dashboard/withdrawaldetails') }}">
                        <span class="sub-item">@lang('message.dashboard.with_info')</span>
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link @yield('notifications')" href="{{ url('dashboard/notifications') }}">
                        <span class="sub-item">@lang('message.dashboard.notif')</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle @yield('accounts')" href="#">
                <i class="cil-window-restore c-sidebar-nav-icon"></i>
                @lang('message.dashboard.trade')
            </a>

            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link @yield('live-accounts')" href="/dashboard/live-accounts">
                        <span class="sub-item">@lang('message.dashboard.live')</span>
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link @yield('demo-accounts')" href="/dashboard/demo-accounts">
                        <span class="sub-item">@lang('message.dashboard.demo')</span>
                    </a>
                </li>
            </ul>
        </li>

        {{-- <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link @yield('transactions')" href="{{ url('dashboard/accounthistory') }}">
                <i class="cil-history c-sidebar-nav-icon"></i>
                @lang('message.dashboard.trans')
            </a>
        </li> --}}

        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle @yield('deposits-and-withdrawals')"
                href="#">
                <i class="cil-money c-sidebar-nav-icon"></i>
                @lang('message.dashboard.deposits')
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link @yield('deposits')" href="{{ url('dashboard/deposits') }}">
                        <span class="sub-item">@lang('message.dashboard.depo')</span>
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link @yield('withdrawals')" href="{{ url('dashboard/withdrawals') }}">
                        <span class="sub-item">@lang('message.dashboard.with')</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link @yield('downloads')" href="{{ url('dashboard/downloads') }}">
                <i class="cil-cloud-download c-sidebar-nav-icon"></i>
                @lang('message.dashboard.down')
            </a>
        </li>

        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link @yield('support')" href="{{ url('dashboard/support') }}">
                <i class="cil-headphones c-sidebar-nav-icon"></i>
                @lang('message.dashboard.sup')
            </a>
        </li>
    </ul>
</div>
@endsection
