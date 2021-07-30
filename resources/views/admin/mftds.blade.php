<?php
if (Auth('admin')->User()->dashboard_style == 'light') {
$text = 'dark';
} else {
$text = 'light';
} ?>
@extends('layouts.app')
@section('maccounts', 'active')
@section('ftds', 'active')
@section('content')
    @include('admin.topmenu')
    @include('admin.sidebar')
    <div class="main-panel">
        <div class="content bg-{{ Auth('admin')->User()->dashboard_style }}">
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
                                    <i class="fa fa-warning"></i> {{ $error }}
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif

                <div class="mb-5 row">
                    <div class="col shadow card p-4 bg-{{ Auth('admin')->User()->dashboard_style }}">
                        <div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table">

                            <table id="ShipTable" class="table table-hover text-{{ $text }}">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Client Name</th>
                                        <th>First Deposit</th>
                                        <th>Date of Deposit </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <th scope="row">{{ $user->id }}</th>
                                            <td>{{ $user->name }}</td>
                                            @php
                                                $dp = $user
                                                    ->dp()
                                                    ->where('status', 'Processed')
                                                    ->first();
                                            @endphp
                                            <td>{{ $dp->amount }}</td>
                                            <td> {{ \Carbon\Carbon::parse($dp->date_created)->toDayDateTimeString() }}
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
        @include('admin.includes.modals')
    @endsection
