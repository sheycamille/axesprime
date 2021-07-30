<?php
	if (Auth::user()->dashboard_style == "light") {
		$bgmenu="blue";
    $bg="light";
    $text = "dark";
} else {
    $bgmenu="dark";
    $bg="dark";
    $text = "light";

}
?>
@extends('layouts.app')
@section("deposits-and-withdrawals", 'active')
@section("deposits", 'active')
@section('content')
@include('user.topmenu')
@include('user.sidebar')
<div class="main-panel bg-{{$bg}}">
    <div class="content bg-{{$bg}}">
        <div class="page-inner">
            <div class="mt-2 mb-4">
                <h1 class="title1 text-{{$text}} text-center">{{ $title }}</h1>
            </div>
            @if(Session::has('message'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <i class="fa fa-info-circle"></i>
                        <p class="alert-message">{!! Session::get('message') !!}</p>
                    </div>
                </div>
            </div>
            @endif

            @if(count($errors) > 0)
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-danger alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        @foreach ($errors->all() as $error)
                        <i class="fa fa-warning"></i> {{ $error }}
                        @endforeach
                    </div>
                </div>
            </div>
            @endif

            <div class="mb-5">
                <div class="row text-center d-flex p-4 bg-{{$bg}}">
                    {{-- <div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table"> --}}
                    @forelse($pmethods as $pmethod)
                    <div class="col-lg-4 p-4 card bg-{{$bg}} shadow-lg">
                        <div class="pricing-table purple border bg-{{$bg}} shadow-lg">
                            <h2 class="text-{{$text}}">{{$pmethod->name}}</h2>
                            <div class="pricing-features">
                                <div class="feature text-{{$text}}">
                                    Minimum Deposit: <span class="text-{{$text}}">{{ \App\Models\Setting::getValue('currency') }}{{ $pmethod->minimum }}</span>
                                </div>
                                <div class="feature text-{{$text}}">Maximum Deposit:
                                    <span class="text-{{$text}}">{{ \App\Models\Setting::getValue('currency') }}{{ $pmethod->maximum }}</span>
                                </div>
                                <div class="feature text-{{$text}}">
                                    Duration: <span class="text-{{$text}}">{{ $pmethod->duration }}</span>
                                </div>
                            </div> <br>
                            <div class="">
                                <a class="btn btn-block pricing-action btn-primary nav-pills" href="{{ route('startpayment', [$account->id, $pmethod->id]) }}">Deposit</a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <p class="text-{{ $text }}">No suitable payment method found, please contact admin.</p>
                    @endforelse
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </div>
    @include('user.modals')
    @endsection
