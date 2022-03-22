@extends('layouts.app')

@section('title', 'My Profile')

@section('my-account', 'c-show')
@section('my-profile', 'c-active')

@section('content')

@include('user.topmenu')

@include('user.sidebar')

<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header fw-bolder">
                        {{ $title }}
                    </div>
                    <div class="card-body">

                        @if (Session::has('message'))
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="alert alert-info alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>
                                    <i class="fa fa-info-circle"></i>
                                    <p class="alert-message">{{ Session::get('message') }}</p>
                                </div>
                            </div>
                        </div>
                        @endif

                        @if (count($errors) > 0)
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="alert alert-danger alert-dismissable" role="alert">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>
                                    @foreach ($errors->all() as $error)
                                    <i class="fa fa-warning"></i> {{ $error }}
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endif

                        <div class="container-fluid">
                            <div class="fade-in">
                                <div class="row">
                                    <div class="p-2 col-md-8 offset-md-2">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <h1 class="title1 text-center">@lang('message.body.acnt') </h1>
                                                    <p class="text-capitalize">
                                                        @lang('message.body.type')
                                                        <label class="">{{ Auth::user()->accounttype->name }}</label>
                                                    </p>
                                                </div>

                                                <form action="{{ route('userprofile') }}" method="POST">
                                                    @csrf

                                                    <div class="form-group">
                                                        <label for="email">@lang('message.body.email') </label>
                                                        <input class="form-control" id="email" type="text" name="email"
                                                            placeholder="@lang('message.body.enter_email')"
                                                            value="{{ Auth::user()->email }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="name">@lang('message.body.full_name')</label>
                                                        <input class="form-control" id="name" type="text" name="name"
                                                            placeholder="@lang('message.body.enter_full')"
                                                            value="{{ Auth::user()->name }}">
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-8">
                                                            <label for="phone">@lang('message.body.phone')</label>
                                                            <input class="form-control" id="phone" type="text"
                                                                name="phone"
                                                                placeholder="@lang('message.body.enter_phone')"
                                                                value="{{ Auth::user()->phone }}">
                                                        </div>

                                                        <div class="form-group col-sm-4">
                                                            <label for="postal-code">@lang('message.body.zip')</label>
                                                            <input class="form-control" id="postal-code" type="text"
                                                                placeholder="Zip Code"
                                                                value="{{ Auth::user()->zip_code }}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <select class="form-control" name="country" id="country"
                                                            required>
                                                            <option selected disabled>@lang('message.body.country')
                                                            </option>
                                                            @foreach ($countries as $country)
                                                            <option @if (Auth::user()->country_id == $country->id ||
                                                                Auth::user()->country_id == $name)
                                                                selected @endif value="{{ $country->id }}">
                                                                {{ ucfirst($country->name) }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-6">
                                                            <label for="state">@lang('message.register.state')</label>
                                                            <input type="text" class="form-control" name="state" value="{{ Auth::user()->state }}"
                                                                id="state" placeholder="@lang('message.register.enter_stt')">
                                                        </div>

                                                        <div class="form-group col-sm-6">
                                                            <label for="city">@lang('message.body.city')</label>
                                                            <input type="text" class="form-control" name="town" value="{{ Auth::user()->town }}"
                                                                id="town" placeholder="@lang('message.register.town')">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <button class="btn btn-sm btn-primary" type="submit">
                                                            @lang('message.body.submit')</button>
                                                        <button class="btn btn-sm btn-danger" type="reset">
                                                            @lang('message.body.reset')</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- @section('javascript')
<script type="text/javascript">
    $('#country').change(function () {
        var countryID = $(this).val();
        if (countryID) {
            $.get( "{{url('/get-state-list')}}?country_id=" + countryID, function( data ) {
                $("#state").empty();
                $("#state").append('<option>Select</option>');
                $.each(data, function (key, state) {
                    $("#state").append('<option value="' + state.id + '">' + state.name + '</option>');
                });
            });
        } else {
            $("#state").empty();
            $("#town").empty();
        }
    });

    $('#state').on('change', function () {
        var stateID = $(this).val();
        if (stateID) {
            $.get( "{{url('/get-town-list')}}?state_id=" + stateID, function( data ) {
                $("#town").empty();
                $("#town").append('<option>Select</option>');
                $.each(data, function (key, town) {
                    $("#town").append('<option value="' + town.id + '">' + town.name + '</option>');
                });
            });
        } else {
            $("#town").empty();
        }
    });
</script>
@endsection --}}
