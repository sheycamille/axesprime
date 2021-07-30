<?php
if (Auth::user()->dashboard_style == 'light') {
$bgmenu = 'blue';
$bg = 'light';
$text = 'dark';
} else {
$bgmenu = 'dark';
$bg = 'dark';
$text = 'light';
} ?>
@extends('layouts.app')
@section('accounts', 'active')
@section('live-accounts', 'active')
@section('content')
    @include('user.topmenu')
    @include('user.sidebar')
    <div class="main-panel bg-{{ $bg }}">
        <div class="content bg-{{ $bg }}">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h1 class="title1 text-{{ $text }} text-center">{{ $title }}</h1>
                </div>
                @if (Session::has('message'))
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
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
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                @foreach ($errors->all() as $error)
                                    <i class="fa fa-warning"></i> <span class="alert-message">{{ $error }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif

                <div class="row py-3 mb-4">
                    <div class="col">
                        <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#newLiveAccountModal"><i
                                class="fa fa-plus"></i> New Live Account</a>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col text-center card p-4 bg-{{ $bg }}">
                        <div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table">
                            <table class="UserTable table table-hover text-{{ $text }}">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Server</th>
                                        <th>Balance</th>
                                        {{-- <th>Bonus</th> --}}
                                        <th>Leverage</th>
                                        <th>Status</th>
                                        <th>Date created</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($accounts as $account)
                                        <tr>
                                            <th scope="row">{{ $account->login }}</th>
                                            <th scope="row">{{ $account->server }}</th>
                                            <td>{{ $account->balance }}{{ $account->currency }}</td>
                                            {{-- <td>{{ $account->bonus }}{{ $account->currency }}</td> --}}
                                            <td>1:{{ $account->leverage }}</td>
                                            <td>
                                            @if ($account->status) Active @else
                                                    Deactivated @endif
                                            </td>
                                            <td>{{ \Carbon\Carbon::parse($account->created_at)->toDayDateTimeString() }}
                                            </td>
                                            <td>
                                                <a class="btn btn-primary btn-xs" href="#" data-toggle="modal"
                                                    data-target="#accountDepositModal">Deposit</a>
                                                <div id="accountDepositModal" class="modal fade" role="dialog">
                                                    <div class="modal-dialog">

                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-{{ $bg }}">
                                                                <h4 class="modal-title text-{{ $text }}">Make new
                                                                    deposit</h4>
                                                                <button type="button"
                                                                    class="close text-{{ $text }}"
                                                                    data-dismiss="modal">&times;</button>
                                                            </div>
                                                            <div class="modal-body bg-{{ $bg }}">
                                                                <form style="padding:3px;" role="form" method="get"
                                                                    action="{{ route('selectpaymentmethod') }}">
                                                                    <input style="padding:5px;"
                                                                        class="form-control text-{{ $text }} bg-{{ $bg }}"
                                                                        placeholder="Enter amount here" type="number"
                                                                        name="amount"
                                                                        min="{{ \App\Models\Setting::getValue('min_dw') }}"
                                                                        required>
                                                                    <br />
                                                                    <input type="hidden" name="account_id"
                                                                        value="{{ $account->id }}">
                                                                    <input type="hidden" name="_token"
                                                                        value="{{ csrf_token() }}">
                                                                    <input type="submit"
                                                                        class="btn btn-{{ $text }}"
                                                                        value="Continue">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- <a href="#" data-toggle="modal" data-target="#newResetMT5PasswordModal" class="m-2 btn btn-danger btn-xs">Reset Password</a> --}}
                                            </td>
                                        </tr>

                                        <!-- Reset MT5 Account Password modal -->
                                        <div id="newResetMT5PasswordModal" class="modal fade" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header bg-{{ $bg }}">
                                                        <h4 class="modal-title text-left text-white">MT5 Reset Password</h4>
                                                        <button type="button" class="close text-left text-white"
                                                            data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body bg-{{ $bg }}">
                                                        <form role="form" method="post"
                                                            action="{{ route('account.resetmt5password', $account->id) }}">
                                                            @csrf
                                                            <h5 class="text-left text-white ">MT5 Password*:</h5>
                                                            <input style="padding:5px;"
                                                                class="form-control bg-{{ $bg }} text-left text-white"
                                                                type="text" name="password" required><br />
                                                            <h5 class="text-left text-white ">Confirm Password*:</h5>
                                                            <input style="padding:5px;"
                                                                class="form-control bg-{{ $bg }} text-left text-white"
                                                                type="text" name="confirm_password" required><br />

                                                            <div
                                                                class="d-flex justify-content-start align-content-start input-wrapper">
                                                                <input
                                                                    class="form-control bg-{{ $bg }} text-left checkbox"
                                                                    type="checkbox" name="master_password">
                                                                <label>Reset Investor Password</label>
                                                            </div>

                                                            <input type="submit" class="btn btn-primary" value="Submit">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Modal -->
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('user.modals')
    @endsection
