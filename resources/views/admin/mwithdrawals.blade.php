<?php
if (Auth('admin')->User()->dashboard_style == 'light') {
    $text = 'dark';
} else {
    $text = 'light';
} ?>
@extends('layouts.app')
@section('manage-dw', 'active')
@section('withdrawals', 'active')
@section('content')
    @include('admin.topmenu')
    @include('admin.sidebar')
    <div class="main-panel">
        <div class="content bg-{{ Auth('admin')->User()->dashboard_style }}">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h1 class="title1 text-{{ $text }} text-center">Clients Withdrawals</h1>
                </div>
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
                {{-- <div class="mb-5 row">
						<div class="col">
							<form class="form-inline" role="form" method="post" action="{{action('Admin\HomeController@searchWt')}}">
                        <a class="btn btn-{{$text}} m-2" href="{{ url('admin/dashboard/mwithdrawals') }}">Show all</a>
                        <input placeholder="Search by user ID, Status, Payment mode, Amount" class="form-control shadow-sm bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" type="text" name="wtquery" required>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="m-2 btn btn-{{$text}}" value="Search">
                        </form>
                    </div>
                </div> --}}

                <div class="mb-5 row">
                    <div class="col card p-3 shadow bg-{{ Auth('admin')->User()->dashboard_style }}">
                        <div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table">
                            <div style="margin:3px;">
                                <table id="ShipTable" class="table table-hover text-{{ $text }}">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Client name</th>
                                            <th>Amount requested</th>
                                            <th>Amount + charges</th>
                                            <th>MT5 Account</th>
                                            <th>Payment mode</th>
                                            <th>Receiver's email</th>
                                            <th>Status</th>
                                            <th>Date created</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($withdrawals as $withdrawal)
                                            <tr>
                                                <th scope="row">{{ $withdrawal->id }}</th>
                                                <td>{{ $withdrawal->duser->name }}</td>
                                                <td>{{ $withdrawal->amount }}</td>
                                                <td>{{ $withdrawal->to_deduct }}</td>
                                                <td>{{ $withdrawal->mt5->login }}</td>
                                                <td>{{ $withdrawal->payment_mode }}</td>
                                                <td>{{ $withdrawal->duser->email }}</td>
                                                <td>{{ $withdrawal->status }}</td>
                                                <td>{{ \Carbon\Carbon::parse($withdrawal->created_at)->toDayDateTimeString() }}
                                                </td>
                                                <td>

                                                    <a href="#" class="m-1 btn btn-info btn-sm" data-toggle="modal"
                                                        data-target="#viewModal{{ $withdrawal->id }}"><i
                                                            class="fa fa-eye"></i> View</a>
                                                    @if ($withdrawal->status == 'Processed' || $withdrawal->status == 'Rejected')
                                                        <a class="btn btn-success btn-sm"
                                                            href="#">{{ $withdrawal->status }}</a>
                                                    @else
                                                        <a class="m-1 btn btn-primary btn-sm"
                                                            href="{{ url('admin/dashboard/pwithdrawal') }}/{{ $withdrawal->id }}">Process</a>
                                                        <a class="m-1 btn btn-primary btn-sm" data-toggle="modal"
                                                            data-target="#rejctModal{{ $withdrawal->id }}"
                                                            href="#">Reject</a>
                                                    @endif

                                                </td>
                                            </tr>
                                            <!-- View info modal-->
                                            <div id="rejctModal{{ $withdrawal->id }}" class="modal fade"
                                                role="dialog">
                                                <div class="modal-dialog">
                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div
                                                            class="modal-header bg-{{ Auth('admin')->User()->dashboard_style }} ">
                                                            <h4 class="modal-title text-{{ $text }}">Reason For
                                                                Rejection.</strong></h4>
                                                            <button type="button" class="close text-{{ $text }}"
                                                                data-dismiss="modal">&times;</button>
                                                        </div>
                                                        <div
                                                            class="modal-body bg-{{ Auth('admin')->User()->dashboard_style }}">
                                                            <form action="{{ route('rejectwithdrawal') }}" method="POST">
                                                                @csrf
                                                                <textarea
                                                                    class="bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }} mb-2 form-control"
                                                                    row="3" placeholder="Type in here"
                                                                    name="reason"></textarea>
                                                                <input type="hidden" name="id"
                                                                    value="{{ $withdrawal->id }}">
                                                                <input type="submit" class="btn btn-warning" value="Done">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End View info modal-->
                                            <!-- View info modal-->
                                            <div id="viewModal{{ $withdrawal->id }}" class="modal fade"
                                                role="dialog">
                                                <div class="modal-dialog">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div
                                                            class="modal-header bg-{{ Auth('admin')->User()->dashboard_style }} ">
                                                            <h4 class="modal-title text-{{ $text }}">
                                                                {{ $withdrawal->duser->name }} withdrawal
                                                                details.</strong>
                                                            </h4>
                                                            <button type="button" class="close text-{{ $text }}"
                                                                data-dismiss="modal">&times;</button>
                                                        </div>
                                                        <div
                                                            class="modal-body bg-{{ Auth('admin')->User()->dashboard_style }}">
                                                            @if ($withdrawal->payment_mode == 'Bitcoin')
                                                                <h3 class="text-{{ $text }}">BTC Wallet:</h3>
                                                                <h4 class="text-{{ $text }}">
                                                                    {{ $withdrawal->duser->btc_address }}</h4><br>
                                                            @elseif($withdrawal->payment_mode=='Ethereum')
                                                                <h3 class="text-{{ $text }}">ETH Wallet:</h3>
                                                                <h4 class="text-{{ $text }}">
                                                                    {{ $withdrawal->duser->eth_address }}</h4><br>
                                                            @elseif($withdrawal->payment_mode=='Litecoin')
                                                                <h3 class="text-{{ $text }}">LTC Wallet:</h3>
                                                                <h4 class="text-{{ $text }}">
                                                                    {{ $withdrawal->duser->ltc_address }}</h4><br>
                                                            @elseif($withdrawal->payment_mode=='USDT')
                                                                <h3 class="text-{{ $text }}">USDT Wallet:</h3>
                                                                <h4 class="text-{{ $text }}">
                                                                    {{ $withdrawal->duser->usdt_address }}</h4><br>
                                                            @elseif($withdrawal->payment_mode=='XRP')
                                                                <h3 class="text-{{ $text }}">XRP Wallet:</h3>
                                                                <h4 class="text-{{ $text }}">
                                                                    {{ $withdrawal->duser->xrp_address }}</h4><br>
                                                            @elseif($withdrawal->payment_mode=='BNB')
                                                                <h3 class="text-{{ $text }}">BNB Wallet:</h3>
                                                                <h4 class="text-{{ $text }}">
                                                                    {{ $withdrawal->duser->bnb_address }}</h4><br>
                                                            @elseif($withdrawal->payment_mode=='Bitcoin Cash')
                                                                <h3 class="text-{{ $text }}">BCH Wallet:</h3>
                                                                <h4 class="text-{{ $text }}">
                                                                    {{ $withdrawal->duser->usdt_address }}</h4><br>
                                                            @elseif($withdrawal->payment_mode=='Interac')
                                                                <h3 class="text-{{ $text }}">Interac Email:</h3>
                                                                <h4 class="text-{{ $text }}">
                                                                    {{ $withdrawal->duser->interac }}</h4><br>
                                                            @elseif($withdrawal->payment_mode=='PayPal')
                                                                <h3 class="text-{{ $text }}">PayPal Email:</h3>
                                                                <h4 class="text-{{ $text }}">
                                                                    {{ $withdrawal->duser->paypal_email }}</h4><br>
                                                            @elseif($withdrawal->payment_mode=='Bank transfer')
                                                                <h4 class="text-{{ $text }}">Bank name:
                                                                    {{ $withdrawal->duser->bank_name }}</h4><br>
                                                                <h4 class="text-{{ $text }}">Account name:
                                                                    {{ $withdrawal->duser->account_name }}</h4><br>
                                                                <h4 class="text-{{ $text }}">Account number:
                                                                    {{ $withdrawal->duser->account_no }}</h4>
                                                            @else
                                                                <h4 class="text-{{ $text }}">Get in touch with
                                                                    client. <br><br>{{ $withdrawal->duser->email }}</h4>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--End View info modal-->
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.includes.modals')
    @endsection
