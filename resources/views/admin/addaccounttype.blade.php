<?php
if (Auth('admin')->User()->dashboard_style == 'light') {
$text = 'dark';
} else {
$text = 'light';
} ?>
@extends('layouts.app')
@section('manage-admins', 'active')
@section('add-admin', 'active')
@section('content')
    @include('admin.topmenu')
    @include('admin.sidebar')
    <div class="main-panel bg-{{ Auth('admin')->User()->dashboard_style }}">
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
                <div class="row mb-5">
                    <div class="col-lg-8 offset-lg-2 card p-3 bg-{{ Auth('admin')->User()->dashboard_style }} shadow">
                        <form action="{{ route('addaccounttype') }}" method="post">
                            @csrf

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-md-3">
                                <h5 class="text-{{ $text }}">Name</h5>
                                <div>
                                    <input style="padding:5px;"
                                        class="form-control text-{{ $text }} bg-{{ Auth('admin')->User()->dashboard_style }}"
                                        placeholder="Enter name" type="text" name="name" value="{{ old('name') }}"
                                        required>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <br />

                            <div class="form-group{{ $errors->has('cost') ? ' has-error' : '' }} col-md-3">
                                <h5 class="text-{{ $text }}">Cost</h5>
                                <div>
                                    <input style="padding:5px;"
                                        class="form-control text-{{ $text }} bg-{{ Auth('admin')->User()->dashboard_style }}"
                                        placeholder="Enter cost" type="text" name="cost" value="{{ old('cost') }}"
                                        required>

                                    @if ($errors->has('cost'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('cost') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <br />
                            </div>

                            <div class="form-group{{ $errors->has('min_deposit') ? ' has-error' : '' }} col-md-3">
                                <h5 class="text-{{ $text }}">Minimum deposit</h5>
                                <div>
                                    <input style="padding:5px;"
                                        class="form-control text-{{ $text }} bg-{{ Auth('admin')->User()->dashboard_style }}"
                                        placeholder="Enter Minimum deposit" type="text" name="min_deposit"
                                        value="{{ old('min_deposit') }}" required>

                                    @if ($errors->has('min_deposit'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('min_deposit') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <br />
                            </div>

                            <div class="form-group{{ $errors->has('max_leverage') ? ' has-error' : '' }} col-md-3">
                                <h5 class="text-{{ $text }}">Max Leverage</h5>
                                <div>
                                    <input style="padding:5px;"
                                        class="form-control text-{{ $text }} bg-{{ Auth('admin')->User()->dashboard_style }}"
                                        placeholder="Enter Max Leverage" type="text" name="max_leverage"
                                        value="{{ old('max_leverage') }}" required>

                                    @if ($errors->has('max_leverage'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('max_leverage') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <br />
                            </div>

                            <div class="form-group{{ $errors->has('min_trade_size') ? ' has-error' : '' }} col-md-3">
                                <h5 class="text-{{ $text }}">Minimum Trade Size</h5>
                                <div>
                                    <input style="padding:5px;"
                                        class="form-control text-{{ $text }} bg-{{ Auth('admin')->User()->dashboard_style }}"
                                        placeholder="Enter min trade size" type="text" name="min_trade_size"
                                        value="{{ old('min_trade_size') }}" required>

                                    @if ($errors->has('min_trade_size'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('min_trade_size') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <br />
                            </div>

                            <div class="form-group{{ $errors->has('max_trade_size') ? ' has-error' : '' }} col-md-3">
                                <h5 class="text-{{ $text }}">Maximum Trade Size</h5>
                                <div>
                                    <input style="padding:5px;"
                                        class="form-control text-{{ $text }} bg-{{ Auth('admin')->User()->dashboard_style }}"
                                        placeholder="Enter max trade size" type="text" name="max_trade_size"
                                        value="{{ old('max_trade_size') }}" required>

                                    @if ($errors->has('max_trade_size'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('max_trade_size') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <br />

                            <div class="form-group{{ $errors->has('swaps') ? ' has-error' : '' }} col-md-3">
                                <h5 class="text-{{ $text }}">Swaps</h5>
                                <div>
                                    <select name="swaps">
                                        <option selected disabled>Choose Availability</option>
                                        <option @if (old('swaps') == 1) selected @endif value="1">Yes
                                        </option>
                                        <option @if (old('swaps') == 0) selected @endif value="0">No
                                        </option>
                                    </select>

                                    @if ($errors->has('swaps'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('swaps') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <br />

                            <div class="form-group{{ $errors->has('fx_commission') ? ' has-error' : '' }} col-md-3">
                                <h5 class="text-{{ $text }}">Forex Commissions</h5>
                                <div>
                                    <input style="padding:5px;"
                                        class="form-control text-{{ $text }} bg-{{ Auth('admin')->User()->dashboard_style }}"
                                        placeholder="Enter forex commision" type="text" name="fx_commission"
                                        value="{{ old('fx_commission') }}" required>

                                    @if ($errors->has('fx_commission'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('fx_commission') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <br />

                            <div class="form-group{{ $errors->has('num_fx_pairs') ? ' has-error' : '' }} col-md-3">
                                <h5 class="text-{{ $text }}">Number of Forex Pairs </h5>
                                <div>
                                    <input style="padding:5px;"
                                        class="form-control text-{{ $text }} bg-{{ Auth('admin')->User()->dashboard_style }}"
                                        placeholder="Enter forex pairs" type="text" name="num_fx_pairs"
                                        value="{{ old('num_fx_pairs') }}" required>

                                    @if ($errors->has('num_fx_pairs'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('num_fx_pairs') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <br />

                            <div
                                class="form-group{{ $errors->has('num_commodities_pairs') ? ' has-error' : '' }} col-md-3">
                                <h5 class="text-{{ $text }}">Number of Commodities
                                    Pairs</h5>
                                <div>
                                    <input style="padding:5px;"
                                        class="form-control text-{{ $text }} bg-{{ Auth('admin')->User()->dashboard_style }}"
                                        placeholder="Enter commodities pairs" type="text" name="num_commodities_pairs"
                                        value="{{ old('num_commodities_pairs') }}" required>

                                    @if ($errors->has('num_commodities_pairs'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('num_commodities_pairs') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <br />

                            <div class="form-group{{ $errors->has('num_indices_pairs') ? ' has-error' : '' }} col-md-3">
                                <h5 class="text-{{ $text }}">Number of Indices
                                    Pairs
                                </h5>
                                <div>
                                    <input style="padding:5px;"
                                        class="form-control text-{{ $text }} bg-{{ Auth('admin')->User()->dashboard_style }}"
                                        placeholder="Enter indices pairs" type="text" name="num_indices_pairs"
                                        value="{{ old('num_indices_pairs') }}" required>
                                    @if ($errors->has('num_indices_pairs'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('num_indices_pairs') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <br />

                            <div class="form-group{{ $errors->has('trading_platforms') ? ' has-error' : '' }} col-md-3">
                                <h5 class="text-{{ $text }}">Trading Platforms</h5>
                                <div>
                                    <input style="padding:5px;"
                                        class="form-control text-{{ $text }} bg-{{ Auth('admin')->User()->dashboard_style }}"
                                        placeholder="Enter trading platforms" type="text" name="trading_platforms"
                                        value="{{ old('trading_platforms') }}" required>
                                    @if ($errors->has('trading_platforms'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('trading_platforms') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <br />

                            <div class="form-group{{ $errors->has('trading_model') ? ' has-error' : '' }} col-md-3">
                                <h5 class="text-{{ $text }}">Trading Model</h5>
                                <div>
                                    <input style="padding:5px;"
                                        class="form-control text-{{ $text }} bg-{{ Auth('admin')->User()->dashboard_style }}"
                                        placeholder="Enter trading model" type="text" name="trading_model"
                                        value="{{ old('trading_model') }}" required>
                                    @if ($errors->has('trading_model'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('trading_model') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <br />

                            <div class="form-group{{ $errors->has('typical_spread') ? ' has-error' : '' }} col-md-3">
                                <h5 class="text-{{ $text }}">Typical Spread</h5>
                                <div>
                                    <input style="padding:5px;"
                                        class="form-control text-{{ $text }} bg-{{ Auth('admin')->User()->dashboard_style }}"
                                        placeholder="Enter Typical Spread" type="text" name="typical_spread"
                                        value="{{ old('typical_spread') }}" required>
                                    @if ($errors->has('typical_spread'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('typical_spread') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <br />

                            <div class="form-group{{ $errors->has('execution_type') ? ' has-error' : '' }} col-md-3">
                                <h5 class="text-{{ $text }}">Execution Type</h5>
                                <div>
                                    <input style="padding:5px;"
                                        class="form-control text-{{ $text }} bg-{{ Auth('admin')->User()->dashboard_style }}"
                                        placeholder="Enter Execution Type" type="text" name="execution_type"
                                        value="{{ old('execution_type') }}" required>
                                    @if ($errors->has('execution_type'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('execution_type') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <br />

                            <div class="form-group{{ $errors->has('requotes') ? ' has-error' : '' }} col-md-3">
                                <h5 class="text-{{ $text }}">Requotes</h5>
                                <div>
                                    <input style="padding:5px;"
                                        class="form-control text-{{ $text }} bg-{{ Auth('admin')->User()->dashboard_style }}"
                                        placeholder="Enter Requotes" type="text" name="requotes"
                                        value="{{ old('requotes') }}" required>
                                    @if ($errors->has('requotes'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('requotes') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <br />

                            <div
                                class="form-group{{ $errors->has('available_instruments') ? ' has-error' : '' }} col-md-3">
                                <h5 class="text-{{ $text }}">Available Instruments
                                </h5>
                                <div>
                                    <input style="padding:5px;"
                                        class="form-control text-{{ $text }} bg-{{ Auth('admin')->User()->dashboard_style }}"
                                        placeholder="Enter Available Instruments" type="text" name="available_instruments"
                                        value="{{ old('available_instruments') }}" required>
                                    @if ($errors->has('available_instruments'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('available_instruments') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <br />

                            <div
                                class="form-group{{ $errors->has('educational_material') ? ' has-error' : '' }} col-md-3">
                                <h5 class="text-{{ $text }}">Educational Material
                                </h5>
                                <div>
                                    <select name="educational_material">
                                        <option selected disabled>Choose Availability</option>
                                        <option @if (old('educational_material') == 1) selected @endif value="1">Yes
                                        </option>
                                        <option @if (old('educational_material') == 0) selected @endif value="0">No
                                        </option>
                                    </select>
                                    @if ($errors->has('educational_material'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('educational_material') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <br />

                            <div class="form-group{{ $errors->has('active') ? ' has-error' : '' }} col-md-3">
                                <h5 class="text-{{ $text }}">Active/Disable
                                </h5>
                                <div>
                                    <select name="active">
                                        <option selected disabled>Choose Availability</option>
                                        <option @if (old('active') == 1) selected @endif value="1">Yes
                                        </option>
                                        <option @if (old('active') == 0) selected @endif value="0">No
                                        </option>
                                    </select>
                                    @if ($errors->has('active'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('active') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <br />

                            <div class="form-group">
                                <div>
                                    <button type="submit" class="btn btn-primary btn-lg px-3">
                                        <i class="fa fa-plus"></i> Add
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection