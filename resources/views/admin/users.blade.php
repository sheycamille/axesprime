@extends('layouts.app')

@section('title', 'Manage Users')

@section('manage-users', 'c-show')
@section('users', 'c-active')

@section('content')

@include('admin.topmenu')
@include('admin.sidebar')

<div class="container-fluid">
    <div class="fade-in">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header fw-bolder">
                    {{ \App\Models\Setting::getValue('site_name') }} Users
                </div>
                <div class="card-body">

                    @if (Session::has('message'))
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert"
                                    aria-hidden="true">&times;</button>
                                <i class="fa fa-info-circle"></i>
                                <p class="alert-message">{!! Session::get('message') !!}</p>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if (count($errors) > 0)
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-danger alert-dismissable" role="alert">
                                <button type="button" class="close" data-dismiss="alert"
                                    aria-hidden="true">&times;</button>
                                @foreach ($errors->all() as $error)
                                <i class="fa fa-warning"></i> {{ $error }}
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif

                    <div class="row">
                        <div class="col">
                            <a href="#" data-toggle="modal" data-target="#sendmailModal"
                                class="btn btn-primary btn-lg mb-2">Message all</a>

                            @if (\App\Models\Setting::getValue('enable_kyc') == 'yes')
                            <a href="{{ url('admin/dashboard/kyc') }}" class="btn btn-warning btn-lg">KYC</a>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table">
                            <table id="ShipTable" class="table table-bordered table-striped table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Client Name</th>
                                        <th>Phone/Email</th>
                                        <th>Balance</th>
                                        <th>Bonus</th>
                                        <th>No. of Accounts</th>
                                        <th>Status</th>
                                        <th>Date Registered</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <th scope="row">{{ $user->id }}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->phone }} | {{ $user->email }}</td>
                                        <td>{{ $user->totalBalance() }}</td>
                                        <td>{{ $user->totalBonus() }}</td>
                                        @php $numAccs = count($user->accounts()) @endphp
                                        <td>{{ $numAccs }}</td>
                                        <td>{{ $user->status }}</td>
                                        <td>{{
                                            \Carbon\Carbon::parse($user->created_at)->toDayDateTimeString()
                                            }}
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-secondary btn-sm dropdown-toggle" href="#"
                                                    role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    Actions
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"
                                                    style="z-index: 999;">
                                                    <a class="m-1 btn btn-info btn-sm"
                                                        href="{{ url('admin/dashboard/user-wallet') }}/{{ $user->id }}">See
                                                        Wallet</a>

                                                    @if ($user->status == null || $user->status == 'blocked')
                                                    <a class="m-1 btn btn-primary btn-sm"
                                                        href="{{ url('admin/dashboard/uunblock') }}/{{ $user->id }}">Unblock</a>
                                                    @else
                                                    <a class="m-1 btn btn-danger btn-sm"
                                                        href="{{ url('admin/dashboard/uublock') }}/{{ $user->id }}">Block</a>
                                                    @endif

                                                    <a href="#" data-toggle="modal"
                                                        data-target="#topupModal{{ $user->id }}"
                                                        class="m-1 btn btn-dark btn-xs">Credit/Debit</a>
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#resetpswdModal{{ $user->id }}"
                                                        class="m-1 btn btn-warning btn-xs">Reset Password</a>

                                                    <a href="#" data-toggle="modal"
                                                        data-target="#deleteModal{{ $user->id }}"
                                                        class="m-1 btn btn-danger btn-xs">Delete</a>

                                                    <a href="#" data-toggle="modal"
                                                        data-target="#edituser{{ $user->id }}"
                                                        class="m-1 btn btn-secondary btn-xs">Edit</a>

                                                    @if ($numAccs > 1)
                                                    <a href="#" data-toggle="modal"
                                                        data-target="#liveaccounts{{ $user->id }}"
                                                        class="m-1 btn btn-danger btn-xs">Delete
                                                        Extra Accounts</a>
                                                    @endif

                                                    <a href="#" data-toggle="modal"
                                                        data-target="#sendmailtooneuserModal{{ $user->id }}"
                                                        class="m-1 btn btn-info btn-xs">Send Message</a>

                                                    <a href="#" data-toggle="modal"
                                                        data-target="#switchuserModal{{ $user->id }}"
                                                        class="m-2 btn btn-success btn-xs">Get access</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @include('admin.users_actions', $user)
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.includes.modals')
@endsection
