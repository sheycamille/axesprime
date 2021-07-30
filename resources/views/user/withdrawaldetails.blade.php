<?php
if (Auth::user()->dashboard_style == 'light') {
$bgmenu = 'blue';
$bg = 'light';
$text = 'dark';
} else {
$bgmenu = 'dark';
$bg = 'dark';
$text = 'light';
} ?>
@extends('layouts.app')
@section('accounts', 'active')
@section('withdrawal-info', 'active')
@section('content')
    @include('user.topmenu')
    @include('user.sidebar')
    <div class="main-panel bg-{{ $bg }}">
        <div class="content bg-{{ $bg }}">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h1 class="text-{{ $text }} text-center">My Withdrawal Info</h1>
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
                <div class="mb-4 row">
                    <div class="col card p-3 shadow-lg bg-{{ $bg }}">
                        <div class="accordion accordion-{{ $text }} ">
                            <form method="post" action="{{ route('updatewithdrawaldetails') }}">
                                <!--............................... collapse one -->
                                <div class="card">
                                    <div class="card-header bg-{{ $bgmenu }}" id="headingOne" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <div class="span-icon">
                                            <div class="fa fa-clone"></div>
                                        </div>
                                        <div class="span-title text-{{ $text }}">
                                            Bank transfer
                                        </div>
                                        <div class="span-mode"></div>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordion">
                                        <div class="card-body bg-{{ $bg }} shadow">
                                            <div class="form-group">
                                                <h5 class="text-{{ $text }}">Bank Name</h5>
                                                <input type="text" name="bank_name" value="{{ Auth::user()->bank_name }}"
                                                    class="form-control text-{{ $text }} bg-{{ $bg }}"
                                                    placeholder="Enter bank name">
                                            </div>
                                            <div class="form-group">
                                                <h5 class="text-{{ $text }}">Bank Address</h5>
                                                <input type="text" name="bank_address"
                                                    value="{{ Auth::user()->bank_address }}"
                                                    class="form-control text-{{ $text }} bg-{{ $bg }}"
                                                    placeholder="Enter bank name">
                                            </div>
                                            <div class="form-group">
                                                <h5 class="text-{{ $text }}">Swift Code</h5>
                                                <input type="text" name="swift_code"
                                                    value="{{ Auth::user()->swift_code }}"
                                                    class="form-control text-{{ $text }} bg-{{ $bg }}"
                                                    placeholder="Enter bank Swift Code">
                                            </div>
                                            <div class="form-group">
                                                <h5 class="text-{{ $text }}">Account Name</h5>
                                                <input type="text" name="account_name"
                                                    value="{{ Auth::user()->account_name }}"
                                                    class="form-control  text-{{ $text }} bg-{{ $bg }}"
                                                    placeholder="Enter Account name">
                                            </div>
                                            <div class="form-group">
                                                <h5 class="text-{{ $text }}">Account Number</h5>
                                                <input type="text" name="account_no"
                                                    value="{{ Auth::user()->account_number }}"
                                                    class="form-control text-{{ $text }} bg-{{ $bg }}"
                                                    placeholder="Enter Account Number">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--............................... collapse two -->
                                <div class="card">
                                    <div class="card-header bg-{{ $bgmenu }}" id="headingTwo" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        <div class="span-icon">
                                            <div class="fa fa-clone"></div>
                                        </div>
                                        <div class="span-title text-{{ $text }}">
                                            Bitcoin
                                        </div>
                                        <div class="span-mode"></div>
                                    </div>
                                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                                        data-parent="#accordion">
                                        <div class="card-body bg-{{ $bg }} shadow">
                                            <div class="form-group">
                                                <h5 class="text-{{ $text }}">BTC ADDRESS</h5>
                                                <input type="text" name="btc_address"
                                                    value="{{ Auth::user()->btc_address }}"
                                                    class="form-control text-{{ $text }} bg-{{ $bg }}"
                                                    placeholder="Enter Bitcoin Address">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--............................... collapse three -->
                                <div class="card">
                                    <div class="card-header bg-{{ $bg }}" id="headingThree"
                                        data-toggle="collapse" data-target="#collapseThree" aria-expanded="true"
                                        aria-controls="collapseThree">
                                        <div class="span-icon">
                                            <div class="fa fa-clone"></div>
                                        </div>
                                        <div class="span-title text-{{ $text }}">
                                            Ethereum
                                        </div>
                                        <div class="span-mode"></div>
                                    </div>
                                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree"
                                        data-parent="#accordion">
                                        <div class="card-body bg-{{ $bg }} shadow">
                                            <div class="form-group">
                                                <h5 class="text-{{ $text }}">ETH ADDRESS</h5>
                                                <input type="text" name="eth_address"
                                                    value="{{ Auth::user()->eth_address }}"
                                                    class="form-control text-{{ $text }} bg-{{ $bg }}"
                                                    placeholder="Enter Etherium Address">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--............................... collapse four -->
                                <div class="card">
                                    <div class="card-header bg-{{ $bgmenu }}" id="headingFour" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                        <div class="span-icon">
                                            <div class="fa fa-clone"></div>
                                        </div>
                                        <div class="span-title text-{{ $text }}">
                                            Litcoin
                                        </div>
                                        <div class="span-mode"></div>
                                    </div>
                                    <div id="collapseFour" class="collapse show" aria-labelledby="headingFour"
                                        data-parent="#accordion">
                                        <div class="card-body bg-{{ $bg }} shadow">
                                            <div class="form-group">
                                                <h5 class="text-{{ $text }} bg-{{ $bg }}">LTC ADDRESS
                                                </h5>
                                                <input type="text" name="ltc_address"
                                                    value="{{ Auth::user()->ltc_address }}"
                                                    class="form-control text-{{ $text }} bg-{{ $bg }}"
                                                    placeholder="Enter Litcoin Address">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header bg-{{ $bgmenu }}" id="headingFour" data-toggle="collapse"
                                        data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                        <div class="span-icon">
                                            <div class="fa fa-clone"></div>
                                        </div>
                                        <div class="span-title text-{{ $text }}">
                                            USDT
                                        </div>
                                        <div class="span-mode"></div>
                                    </div>
                                    <div id="collapseFive" class="collapse show" aria-labelledby="headingFour"
                                        data-parent="#accordion">
                                        <div class="card-body bg-{{ $bg }} shadow">
                                            <div class="form-group">
                                                <h5 class="text-{{ $text }} bg-{{ $bg }}">USDT Address
                                                </h5>
                                                <input type="text" name="ltc_address"
                                                    value="{{ Auth::user()->usdt_address }}"
                                                    class="form-control text-{{ $text }} bg-{{ $bg }}"
                                                    placeholder="Enter USDT Address">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header bg-{{ $bgmenu }}" id="headingFour" data-toggle="collapse"
                                        data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                        <div class="span-icon">
                                            <div class="fa fa-clone"></div>
                                        </div>
                                        <div class="span-title text-{{ $text }}">
                                            XRP
                                        </div>
                                        <div class="span-mode"></div>
                                    </div>
                                    <div id="collapseSix" class="collapse show" aria-labelledby="headingFour"
                                        data-parent="#accordion">
                                        <div class="card-body bg-{{ $bg }} shadow">
                                            <div class="form-group">
                                                <h5 class="text-{{ $text }} bg-{{ $bg }}">XRP Address
                                                </h5>
                                                <input type="text" name="ltc_address"
                                                    value="{{ Auth::user()->xrp_address }}"
                                                    class="form-control text-{{ $text }} bg-{{ $bg }}"
                                                    placeholder="Enter XRP Address">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="card">
                                    <div class="card-header bg-{{ $bgmenu }}" id="headingFour" data-toggle="collapse"
                                        data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                        <div class="span-icon">
                                            <div class="fa fa-clone"></div>
                                        </div>
                                        <div class="span-title text-{{ $text }}">
                                            BNB
                                        </div>
                                        <div class="span-mode"></div>
                                    </div>
                                    <div id="collapseSeven" class="collapse show" aria-labelledby="headingFour"
                                        data-parent="#accordion">
                                        <div class="card-body bg-{{ $bg }} shadow">
                                            <div class="form-group">
                                                <h5 class="text-{{ $text }} bg-{{ $bg }}">BNB Address
                                                </h5>
                                                <input type="text" name="ltc_address"
                                                    value="{{ Auth::user()->bnb_address }}"
                                                    class="form-control text-{{ $text }} bg-{{ $bg }}"
                                                    placeholder="Enter BNB Address">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="card">
                                    <div class="card-header bg-{{ $bgmenu }}" id="headingFour" data-toggle="collapse"
                                        data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                        <div class="span-icon">
                                            <div class="fa fa-clone"></div>
                                        </div>
                                        <div class="span-title text-{{ $text }}">
                                            Bitcoin Cash
                                        </div>
                                        <div class="span-mode"></div>
                                    </div>
                                    <div id="collapseEight" class="collapse show" aria-labelledby="headingFour"
                                        data-parent="#accordion">
                                        <div class="card-body bg-{{ $bg }} shadow">
                                            <div class="form-group">
                                                <h5 class="text-{{ $text }} bg-{{ $bg }}">BCH Address
                                                </h5>
                                                <input type="text" name="ltc_address"
                                                    value="{{ Auth::user()->bch_address }}"
                                                    class="form-control text-{{ $text }} bg-{{ $bg }}"
                                                    placeholder="Enter Bitcoin Cash Address">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--......................... end of collaps four -->
                                <input type="submit" class="btn btn-primary" value="Submit"> &nbsp; &nbsp;
                                {{-- <a href="{{ url('dashboard/skip_account') }}" style="color:red;">Skip</a> --}}
                                <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
