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
@section("downloads", 'active')
@section('content')
@include('user.topmenu')
@include('user.sidebar')
<div class="main-panel bg-{{$bg}}">
    <div class="content bg-{{$bg}}">
        <div class="page-inner">
            @if(Session::has('message'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <i class="fa fa-info-circle"></i> {{Session::get('message')}}
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

            <div class="mb-5 row p-md-3 ">
                <div class="shadow col-12 p-md-2">
                    <div class="col-12 text-center bg-{{$bg}} p-3">
                        <h1 class="title1 text-{{$text}} text-center">{{ $title }}</h1>
                    </div>
                    <div class="col-md-8 offset-md-2 p-5">
                        <div class="box">
                            <h3 class="text-{{ $text }} text-center">METATRADER 5</h3>
                            <p class="text-{{ $text }} text-center">Download MetaTrader&nbsp;5 For PC, smartphones, and&nbsp;tablets</p>
                            <div class="row p-5">
                                <div class="col-4 text-center">
                                    <a class="text-center" href="{{ asset('downloads/axesprimeltd5setup.exe') }}">
                                        <img class="col-md-6" src="{{ asset ('dash/images/windows.png')}}" alt="MT5" tilte="MT5" height="100" />
                                        <br>
                                        <span>Download Now</span>
                                    </a>
                                </div>
                                <div class="col-4 text-center d-flex justify-content-center align-items-center">
                                    <a class="text-center" href="https://download.mql5.com/cdn/mobile/mt5/android?server=AxesPrimeLtd-Demo,AxesPrimeLtd-Live" target="_blank">
                                        <img class="" src="{{ asset ('front/img/about/google_play_badge.png')}}" alt="Andriod Download" tilte="Andriod Download" height="66" />
                                        <br><br>
                                        <span>Download Now</span>
                                    </a>
                                </div>
                                <div class="col-4 text-center d-flex justify-content-center align-items-center">
                                    <a class="text-center" href="https://download.mql5.com/cdn/mobile/mt5/ios?server=AxesPrimeLtd-Demo,AxesPrimeLtd-Live" target="_blank">
                                        <img src="{{ asset ('front/img/about/app-store-en.png')}}" alt="iPhone Download" tilte="iPhone Download" height="66" />
                                        <br><br>
                                        <span>Download Now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endsection
