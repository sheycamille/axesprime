<?php
if (Auth::user()->dashboard_style == 'light') {
$bg = 'light';
$text = 'dark';
} else {
$bg = 'dark';
$text = 'light';
} ?>
@extends('layouts.app')
@section('deposits-and-withdrawals', 'active')
@section('deposits', 'active')
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
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                @foreach ($errors->all() as $error)
                                    <i class="fa fa-warning"></i> {{ $error }}
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif

                <div class="row">
                    <div class="col card bg-{{ $bg }} p-2">
                        <div class="p-3 text-center">
                            <h3 class="text-{{ $text }}">You are sending
                                <strong>{{ \App\Models\Setting::getValue('currency') }}{{ $amount }} USD</strong> to
                                the bank details below
                            </h3>
                        </div>
                        <div class="row justify-content-center m-3">
                            <div class="col-lg-4">
                                <div class="card bg-{{ $bg }} shadow text-{{ $text }}">
                                    <div class="card-body">
                                        <h3>
                                            <a style="text-decoration:none;" class="collapsed" data-toggle="collapse"
                                                data-parent="#accordion" href="#bank">
                                                <strong>Bank Details </strong>
                                            </a>
                                        </h3>
                                        <div id="bank" class="panel-collapse">
                                            <div class="">
                                                <h4 class="text-{{ $text }}"><strong>Bank name:</strong>
                                                    {{ \App\Models\Setting::getValue('bank_name') }}.</h4>
                                                <h4 class="text-{{ $text }}"><strong>Bank Address:</strong>
                                                    {{ \App\Models\Setting::getValue('bank_address') }}.</h4>
                                                {{-- <h4 class="text-{{$text}}"><strong>Swift Code:</strong> {{\App\Models\Setting::getValue('swift_code')}}.</h4> --}}
                                                <h4 class="text-{{ $text }}"><strong>Account name:</strong>
                                                    {{ \App\Models\Setting::getValue('account_name') }}.</h4>
                                                <h4 class="text-{{ $text }}"><strong>Account number:</strong>
                                                    {{ \App\Models\Setting::getValue('account_number') }}.</h4>
                                            </div>
                                        </div>
                                        @if (\App\Models\Setting::getValue('account2_number'))
                                            <h3>
                                                <a style="text-decoration:none;" class="collapsed" data-toggle="collapse"
                                                    data-parent="#accordion" href="#bank2">
                                                    <strong>Second Bank Details </strong>
                                                </a>
                                            </h3>
                                            <div id="bank2" class="panel-collapse">
                                                <div class="">
                                                    <h4 class="text-{{ $text }}"><strong>Bank name:</strong>
                                                        {{ \App\Models\Setting::getValue('bank2_name') }}.</h4>
                                                    <h4 class="text-{{ $text }}"><strong>Bank Address:</strong>
                                                        {{ \App\Models\Setting::getValue('bank2_address') }}.</h4>
                                                    {{-- <h4 class="text-{{$text}}"><strong>Swift Code:</strong> {{\App\Models\Setting::getValue('swift2_code')}}.</h4> --}}
                                                    <h4 class="text-{{ $text }}"><strong>Account name:</strong>
                                                        {{ \App\Models\Setting::getValue('account2_name') }}.</h4>
                                                    <h4 class="text-{{ $text }}"><strong>Account number:</strong>
                                                        {{ \App\Models\Setting::getValue('account2_number') }}.</h4>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <form class="col-md-4" method="post" action="{{ route('savedeposit') }}"
                                enctype="multipart/form-data">
                                <h3 class="text-{{ $text }}">Upload payment proof after payment.</h3>
                                <input type="file" name="proof"
                                    class="form-control bg-{{ $bg }} text-{{ $text }}" required>
                                <br>

                                <h5 class="text-{{ $text }}">Payment Mode Used:</h5>
                                <select name="payment_mode"
                                    class="form-control bg-{{ $bg }} text-{{ $text }}" required>
                                    @foreach ($dmethods as $dmethod)
                                        @if ($dmethod->exchange_symbol == $exchange_symbol)
                                            <option value="{{ $dmethod->name }}">{{ $dmethod->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <br>
                                <input type="hidden" name="amount" value="{{ $amount }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="btn btn-{{ $text }}" value="Submit Proof">
                            </form>
                        </div>
                        <br> <br>
                    </div>
                </div>
            </div>
        </div>
    @endsection
