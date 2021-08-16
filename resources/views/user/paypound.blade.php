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
                <div class="mt-2 mb-5">
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
                    <div class="col card bg-{{ $bg }} p-2 d-flex justify-content-center">
                        <div class="d-flex justify-content-center">
                            <div class="col-md-8">
                                <div class="text-center">
                                    <h3 class="text-{{ $text }}">Pay
                                        <strong>{{ \App\Models\Setting::getValue('currency') }}{{ $amount }}
                                            USD</strong>
                                    </h3>
                                </div>
                                <div class="card bg-{{ $bg }} shadow text-{{ $text }}">
                                    <div class="card-body">
                                        <div id="paypound" class="d-flex justify-content-center col-xs-12">
                                            <form method="post" action="{{ route('startpaypoundcharge') }}"
                                                enctype="multipart/form-data" class="form">
                                                <h3 class="text-{{ $text }} text-center pt-5 pb-3">
                                                    Personal Details:
                                                    <a class="pt-5" style="text-decoration:none;" href="#paypound">
                                                        {{ $wallet_address }}
                                                    </a>
                                                </h3>
                                                <div class="form-group d-flex justify-content-center col-xs-12">
                                                    <div class="col-md-5" style="display: inline-block;">
                                                        <h5 class="text-{{ $text }}">First Name*</h5>
                                                        <input type="text" name="first_name"
                                                            class="form-control bg-{{ $bg }} text-{{ $text }}"
                                                            value="{{ Auth::user()->email }}" required>
                                                    </div>
                                                    <div class="col-md-5" style="display: inline-block;">
                                                        <h5 class="text-{{ $text }}">Last Name*</h5>
                                                        <input type="text" name="last_name"
                                                            class="form-control bg-{{ $bg }} text-{{ $text }}"
                                                            value="{{ Auth::user()->name }}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group d-flex justify-content-center col-xs-12">
                                                    <div class="col-md-5" style="display: inline-block;">
                                                        <h5 class="text-{{ $text }}">Email*</h5>
                                                        <input type="text" name="email"
                                                            class="form-control bg-{{ $bg }} text-{{ $text }}"
                                                            value="{{ Auth::user()->email }}" required>
                                                    </div>
                                                    {{-- </div>
                                                    <div class="form-group d-flex justify-content-center col-xs-12">
                                                    <div class="col-md-5" style="display: inline-block;">
                                                        <h5 class="text-{{ $text }}">Country Phone Code</h5>
                                                        <input type="text" name="country_code"
                                                            class="form-control bg-{{ $bg }} text-{{ $text }}"
                                                            value="">
                                                    </div> --}}

                                                    <div class="col-md-5" style="display: inline-block;">
                                                        <h5 class="text-{{ $text }}">Phone No*</h5>
                                                        <input type="text" name="phone_no"
                                                            class="form-control bg-{{ $bg }} text-{{ $text }}"
                                                            value="{{ Auth::user()->phone }}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group d-flex justify-content-center col-xs-12">
                                                    <div class="col-md-5" style="display: inline-block;">
                                                        <h5 class="text-{{ $text }}">Address*</h5>
                                                        <input type="text" name="address"
                                                            class="form-control bg-{{ $bg }} text-{{ $text }}"
                                                            value="{{ Auth::user()->address }}" required>
                                                    </div>
                                                    <div class="col-md-5" style="display: inline-block;">
                                                        <h5 class="text-{{ $text }}">City*</h5>
                                                        <input type="text" name="city"
                                                            class="form-control bg-{{ $bg }} text-{{ $text }}"
                                                            value="{{ Auth::user()->town }}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group d-flex justify-content-center col-xs-12">
                                                    <div class="col-md-5" style="display: inline-block;">
                                                        <h5 class="text-{{ $text }}">State*</h5>
                                                        <input type="text" name="state"
                                                            class="form-control bg-{{ $bg }} text-{{ $text }}"
                                                            value="{{ Auth::user()->state }}" required>
                                                    </div>
                                                    <div class="col-md-2" style="display: inline-block;">
                                                        <h5 class="text-{{ $text }}">Zip Code*</h5>
                                                        <input type="text" name="zip"
                                                            class="form-control bg-{{ $bg }} text-{{ $text }}"
                                                            value="{{ Auth::user()->zip_code }}" required>
                                                    </div>
                                                    <div class="col-md-3" style="display: inline-block;">
                                                        <h5 class="text-{{ $text }}">Country*</h5>
                                                        {{-- <input type="text" name="country"
                                                            class="form-control bg-{{ $bg }} text-{{ $text }}"
                                                            value="{{ Auth::user()->country }}" required> --}}
                                                        <select
                                                            class="form-control bg-{{ $bg }} text-{{ $text }}"
                                                            name="country" id="country" required>
                                                            <option selected disabled>Choose Country</option>
                                                            @foreach ($countries as $code => $name)
                                                                <option @if (Auth::user()->country == $code || Auth::user()->country == $name) selected @endif
                                                                    value="{{ $code }}">
                                                                    {{ $name }}</option>
                                                            @endforeach
                                                        </select> <br>
                                                    </div>
                                                </div>

                                                <h3 class="text-{{ $text }} text-center pt-5 pb-3">
                                                    Card Details:
                                                    <a class="pt-5" style="text-decoration:none;" href="#paypound">
                                                        {{ $wallet_address }}
                                                    </a>
                                                </h3>

                                                <div class="form-group d-flex justify-content-center col-xs-12">
                                                    <div class="col-md-4" style="display: inline-block;">
                                                        <h5 class="text-{{ $text }}">Card No*</h5>
                                                        <input type="text" name="card_no"
                                                            class="form-control bg-{{ $bg }} text-{{ $text }}"
                                                            value="" required>
                                                    </div>
                                                    <div class="col-md-2" style="display: inline-block;">
                                                        <h5 class="text-{{ $text }}">Expiry Month*</h5>
                                                        <input type="text" name="ccExpiryMonth"
                                                            class="form-control bg-{{ $bg }} text-{{ $text }}"
                                                            value="" required>
                                                    </div>
                                                    <div class="col-md-2" style="display: inline-block;">
                                                        <h5 class="text-{{ $text }}">Expiry Year*</h5>
                                                        <input type="text" name="ccExpiryYear"
                                                            class="form-control bg-{{ $bg }} text-{{ $text }}"
                                                            value="" required>
                                                    </div>
                                                    <div class="col-md-2" style="display: inline-block;">
                                                        <h5 class="text-{{ $text }}">CVV Number*</h5>
                                                        <input type="text" name="cvvNumber"
                                                            class="form-control bg-{{ $bg }} text-{{ $text }}"
                                                            value="" required>
                                                    </div>
                                                </div>

                                                <div class="form-group d-flex justify-content-center col-xs-12">
                                                    <div class="col-md-5" style="display: inline-block;">
                                                        <h5 class="text-{{ $text }}">Currency*</h5>
                                                        <input type="text" name="currency"
                                                            class="form-control bg-{{ $bg }} text-{{ $text }}"
                                                            value="USD" required>
                                                    </div>
                                                    <div class="col-md-5" style="display: inline-block;">
                                                        <h5 class="text-{{ $text }}">Amount*</h5>
                                                        <input type="text" name="amount"
                                                            class="form-control bg-{{ $bg }} text-{{ $text }}"
                                                            value="{{ $amount }}" required>
                                                    </div>
                                                </div>

                                                <div
                                                    class="form-group d-flex justify-content-center col-xs-12 d-flex justify-content-center col-xs-12">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-{{ $text }}"
                                                        value="Submit">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
