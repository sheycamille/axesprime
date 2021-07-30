<?php
if (Auth('admin')->User()->dashboard_style == 'light') {
$text = 'dark';
} else {
$text = 'light';
} ?>
@extends('layouts.app')
@section('content')
    <div class="main-panel">
        <div class="content bg-{{ Auth('admin')->User()->dashboard_style }}">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h1 class="title1 text-{{ $text }} text-center">{{ $title }}</h1>
                </div>

                <div class="mb-5 row">
                    <div class="col shadow card p-4 bg-{{ Auth('admin')->User()->dashboard_style }}">
                        <div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table">

                            <table id="ShipTable" class="table table-hover text-{{ $text }}">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Client Name</th>
                                        <th>Date of Registration </th>
                                        <th>First Deposit</th>
                                        <th>Date of Deposit </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        @php
                                            $dp = $user
                                                ->dp()
                                                ->where('status', 'Processed')
                                                ->first();
                                        @endphp
                                        <tr>
                                            <th scope="row">{{ $user->id }}</th>
                                            <td>{{ $user->name }}</td>
                                            <td> {{ \Carbon\Carbon::parse($user->created_at)->toDayDateTimeString() }}
                                            </td>
                                            <td>{{ $dp->amount }}</td>
                                            <td>
                                                @if ($dp->amount > 0)
                                                    {{ \Carbon\Carbon::parse($dp->date_created)->toDayDateTimeString() }}
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
