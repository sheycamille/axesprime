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
                                <strong>{{ \App\Models\Setting::getValue('currency') }}{{ $amount }} USD</strong>
                            </h3>
                        </div>
                        <div class="row justify-content-center m-3">
                            <div class="col-lg-4">
                                <div class="card bg-{{ $bg }} shadow text-{{ $text }}">
                                    <div class="card-body">
                                        <h3 class="text-{{ $text }}">
                                            <a style="text-decoration:none;" class="collapsed" data-toggle="collapse"
                                                data-parent="#accordion" href="#paypal">
                                                <strong>PayPal</strong> <img src="{{ asset('home/images/pp.png') }}"
                                                    width="40px;" height="40px;">
                                            </a>
                                        </h3>
                                        <div id="paypal" class="panel-collapse">
                                            <h4 class="text-{{ $text }}">
                                                @include('includes.paypal')
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br> <br>

                        {{-- <div class="row justify-content-center">
                        <form method="post" action="{{route('savedeposit')}}" enctype="multipart/form-data">
                    <h3 class="text-{{$text}}">Upload Payment proof after payment.</h3>
                    <input type="file" name="proof" class="form-control bg-{{$bg}} text-{{$text}}">
                    <br>

                    <h5 class="text-{{$text}}">Payment Mode Used:</h5>
                    <select name="payment_mode" class="form-control bg-{{$bg}} text-{{$text}}" required>
                        <option>Bank transfer</option>
                        <option>Ethereum</option>
                        <option>Bitcoin</option>
                        <option>Litecoin</option>
                    </select>
                    <br> <br>
                    <input type="hidden" name="amount" value="{{$amount}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div>
                        <input type="submit" class="btn btn-{{$text}}" value="Submit payment">
                    </div>
                    </form>
                </div> --}}
                    </div>
                </div>
            </div>
        </div>
    @endsection
