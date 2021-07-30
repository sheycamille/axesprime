@extends('layouts.auth')

@section('title', 'Register')

@section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <body class="d-flex flex-column h-100 auth-Page">
        <!-- ======= signup Section ======= -->
        <section class="auth ">
            <div class="container">
                <div class="row justify-content-center user-auth">
                    <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6">
                        <div class="mb-4 text-center">
                            <a href="{{ url('/') }}"><img
                                    src="{{ asset('storage/photos/' . \App\Models\Setting::getValue('logo')) }}"
                                    alt="{{ \App\Models\Setting::getValue('site_name') }}" title=""
                                    class="img-fluid auth__logo" /> </a>
                            @if (Session::has('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ Session::get('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                        </div>
                        <div class="card ">
                            <h1 class="mt-3 text-center"> Create an Account</h1>

                            <form method="POST" action="{{ route('register') }}" class="mt-5 card__form">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                        <label for="f_name">Full Name</label>
                                        <input type="text" class="mr-2 form-control" name="name" value="{{ old('name') }}"
                                            id="f_name" placeholder="Enter Full Name">
                                    </div>
                                </div>

                                <div class="form-group ">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                        id="email" placeholder="name@example.com">
                                </div>

                                {{-- <div class="form-group ">
                                @if ($errors->has('phone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                            @endif
                            <label for="phone">Phone Number</label>
                            <input type="mumber" class="form-control" name="phone" value="{{ old('phone') }}" id="phone" placeholder="Enter Phone number">
                    </div> --}}


                                <div class="d-flex">
                                    <div class="form-group col-md-6 pl-0">
                                        @if ($errors->has('phone'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                        <label for="phone">Phone Number</label>
                                        <input type="mumber" class="form-control" name="phone" value="{{ old('phone') }}"
                                            id="phone" placeholder="Enter Phone number">
                                    </div>

                                    <div class="form-group col-md-6 pr-0">
                                        @if ($errors->has('account_type'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('account_type') }}</strong>
                                            </span>
                                        @endif
                                        <label for="account_type">Account Type</label>
                                        <select class="form_control" name="account_type" id="account_type" required>
                                            <option disabled>Choose Account Type</option>
                                            @foreach ($account_types as $accType)
                                                <option @if ($accType->id == request()->get('account_type')) selected @endif value="{{ $accType->id }}">
                                                    {{ $accType->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group">
                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" name="address" value="{{ old('address') }}"
                                        id="address" placeholder="Enter address">
                                </div>

                                <div class="d-flex">
                                    <div class="form-group col-md-6 pl-0">
                                        @if ($errors->has('town'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('town') }}</strong>
                                            </span>
                                        @endif
                                        <label for="town">Town/City</label>
                                        <input type="text" class="form-control" name="town" value="{{ old('town') }}"
                                            id="town" placeholder="Enter town">
                                    </div>

                                    <div class="form-group col-md-6 pr-0">
                                        @if ($errors->has('state'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('state') }}</strong>
                                            </span>
                                        @endif
                                        <label for="state">State/Region</label>
                                        <input type="text" class="form-control" name="state" value="{{ old('state') }}"
                                            id="state" placeholder="Enter state">
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <div class="form-group col-md-6 pl-0">
                                        @if ($errors->has('zip_code'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('zip_code') }}</strong>
                                            </span>
                                        @endif
                                        <label for="zip_code">Zip Code</label>
                                        <input type="text" class="form-control" name="zip_code"
                                            value="{{ old('zip_code') }}" id="zip_code" placeholder="Enter zip code">
                                    </div>

                                    <div class="form-group col-md-6 pr-0">
                                        <label for="country" name="country">Country</label>
                                        <select class="form_control" name="country" id="country" required>
                                            <option disabled>Choose Country</option>
                                            @foreach ($countries as $code => $name)
                                                <option @if ($code == old('state')) selected @endif value="{{ $code }}">
                                                    {{ $name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                    <div class="form-group col-md-6">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" id="password"
                                            placeholder="Enter Password">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="confirm-password">Confirm Password</label>
                                        <input type="password" class="form-control" name="password_confirmation"
                                            value="{{ old('password_confirmation') }}" id="confirm-password"
                                            placeholder="Confirm Password">
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">Captcha</label>
                                    <div class="col-md-6">
                                        {!! NoCaptcha::display() !!}
                                        @if ($errors->has('g-recaptcha-response'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button class="mt-4 btn btn-primary" type="submit">Register</button>
                                </div>

                                <div class="mb-3 text-center">
                                    <small class="mb-2 text-center ">Already have an Account <a
                                            href="{{ route('login') }}">Login.</a> </small>

                                    <small class="text-center">&copy; Copyright {{ date('Y') }} &nbsp;
                                        {{ \App\Models\Setting::getValue('site_name') }} &nbsp; All Rights
                                        Reserved.</small>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- Wrapper Ends -->
    </body>

    </html>
@endsection
