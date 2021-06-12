<?php
	if (Auth::user()->dashboard_style == "light") {
		$bg="light";
		$text = "dark";
	} else {
		$bg="dark";
		$text = "light";
	}
?>
@extends('layouts.app')
@section('content')
@include('user.topmenu')
@include('user.sidebar')
<div class="main-panel bg-{{$bg}}">
    <div class="content bg-{{$bg}}">
        <div class="page-inner">
            <div class="mt-2 mb-5">
                <h1 class="title1 text-{{$text}}">Account Verification</h1> <br> <br>
            </div>
            @if(Session::has('message'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <i class="fa fa-info-circle"></i> {{ Session::get('message') }}
                    </div>
                </div>
            </div>
            @endif


            @if(\App\Models\Setting::getValue('enable_kyc') =="yes")
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-5 row">
                        <div class="col-lg-8 offset-lg-2 card p-4 shadow-lg bg-{{$bg}}">
                            <h1 class="nav-link text-{{$text}}" data-toggle="dropdown" href="#" aria-expanded="false">
                                KYC
                            </h1>
                            <div class="quick-actions-header">
                                @if(Auth::user()->account_verify=='yes')
                                <h4 class="ml-3 text-{{$text}}">
                                    <a href="#" class="p-0 col-12"><i class="glyphicon glyphicon-ok"></i> KYC status: Account verified</a>
                                </h4>
                                @else
                                <h4 class="ml-3 text-{{$text}}"><a>KYC status: {{Auth::user()->account_verify}}</a></h4>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            @if(count($errors) > 0)
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-danger alert-dismissable" role="alert">
                        <button type="button" clsass="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        @foreach ($errors->all() as $error)
                        <i class="fa fa-warning"></i> {{ $error }}
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
            <div class="mb-5 row">

                <div class="col-lg-8 offset-lg-2 card p-4 shadow-lg bg-{{$bg}}">
                    <div class="py-3">
                        <h5 class="text-{{$text}}">KYC verification - Upload documents below to get verified.</h5>
                    </div>
                    <form role="form" method="post" action="{{route('kycsubmit')}}" enctype="multipart/form-data">
                        <h5 class="text-{{$text}}">Valid identity card. (e.g. Drivers licence, international passport or any government approved document).</h5>
                        <input type="file" class="form-control bg-{{$bg}} text-{{$text}}" name="idcard" required><br>
                        <img src="{{ asset('storage/photos/'.Auth::user()->id_card) }}" width="100">
                        <h5 class="text-{{$text}}">Address Document</h5>
                        <input type="file" class="form-control bg-{{$bg}} text-{{$text}}" name="address_document" required><br>
                        <img src="{{ asset('storage/photos/'.Auth::user()->passport) }}" width="100">
                        <h5 class="text-{{$text}}">Passport photogragh</h5>
                        <input type="file" class="form-control bg-{{$bg}} text-{{$text}}" name="passport" required><br>
                        <img src="{{ asset('storage/photos/'.Auth::user()->address_document) }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" width="100">
                        <input type="submit" class="btn btn-{{$text}}" value="Submit documents">
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
