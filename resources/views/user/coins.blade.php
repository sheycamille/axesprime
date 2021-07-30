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
                    <div class="col card bg-{{ $bg }} p-2">
                        <div class="row justify-content-space-between">
                            <div class="col-md-4">
                                <div class="text-center">
                                    <h3 class="text-{{ $text }}">You are to send
                                        <strong>{{ \App\Models\Setting::getValue('currency') }}{{ $amount }}
                                            USD</strong>
                                        to the wallet address below
                                    </h3>
                                </div>
                                <div class="card bg-{{ $bg }} shadow text-{{ $text }}">
                                    <div class="card-body">
                                        <h3 class="text-{{ $text }} text-center pt-2 pb-3">
                                            Wallet Address:
                                            <a class="pt-5" style="text-decoration:none;" href="#paypal">
                                                {{ $wallet_address }}
                                            </a>
                                        </h3>
                                        <div id="paypal">
                                            <div class="text-center">
                                                {!! QrCode::size(250)->generate($wallet_address) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <h3 class="text-{{ $text }}">Check how many {{ $exchange_symbol }} you are to
                                    send.</h3>
                                <div>
                                    <iframe
                                        src="https://widget.coinlib.io/widget?type=converter&theme=dark&from=usd&to={{ $exchange_symbol }}&amount={{ $amount }}"
                                        width="300px" height="350px" scrolling="auto" marginwidth="0" marginheight="0"
                                        frameborder="0" border="0" style="border:0;margin:auto;padding:0;"></iframe>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <form method="post" action="{{ route('savedeposit') }}" enctype="multipart/form-data">
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
                        </div>
                        <br> <br>

                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <h3 class="text-center text-{{ $text }}">Markets to buy cryptocurrencies</h3>
                                <div class="row">
                                    <div class="col-6 text-center d-flex justify-content-center align-items-center">
                                        <a class="text-center" href="https://accounts.binance.me/en/register?ref=127286501"
                                            target="_blank">
                                            <img src="{{ asset('dash/images/binance.png') }}" alt="Buy on Binance"
                                                tilte="Buy on Binance" width="80%" />
                                            <br>
                                            <span>Buy Now</span>
                                        </a>
                                    </div>
                                    <div class="col-6 text-center d-flex justify-content-center align-items-center">
                                        <a class="text-center" href="https://crypto.com/" target="_blank">
                                            <img src="{{ asset('dash/images/crypto-com.png') }}" alt="Buy on Crypto.com"
                                                tilte="Buy on Crypto.com" width="80%" />
                                            <br>
                                            <span>Buy Now</span>
                                        </a>
                                    </div>
                                    <br><br><br><br><br><br><br><br><br>
                                    <div class="col-6 text-center d-flex justify-content-center align-items-center">
                                        <a class="text-center" href="https://www.coinbase.com/" target="_blank">
                                            <img src="{{ asset('dash/images/coinbase.png') }}" alt="Buy on Coinbase"
                                                tilte="Buy on Coinbase" width="80%" />
                                            <br>
                                            <span>Buy Now</span>
                                        </a>
                                    </div>
                                    <div class="col-6 text-center d-flex justify-content-center align-items-center">
                                        <a class="text-center" href="https://shakepay.com/" target="_blank">
                                            <img src="{{ asset('dash/images/shakepay.jpg') }}" alt="Buy on ShakePay"
                                                tilte="Buy on Blockchain" width="80%" />
                                            <br>
                                            <span>Buy Now</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
