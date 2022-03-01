@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<main id="main" class="crypto-page">
    <div class="uk-section in-liquid-6 in-offset-top-10">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-5-1@m uk-background-contain uk-background-center-center">
                    <div class="uk-text-center">
                        <div class="mb-4 text-center">
                            <a href="{{url('/')}}">
                                <img src="{{ asset('front/img/axepro-group-logo.png') }}"
                                    alt="{{\App\Models\Setting::getValue('site_name')}}" title=""
                                    class="img-fluid auth__logo" style="width: 15%;" />
                            </a>
                        </div>

                        <div class="mb-4 text-center">
                            @if(Session::has('status'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert"
                                style="margin: auto;">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="card">
                        <h1 class="mt-3 uk-text-center" style="font-size: 32px; margin-top: 10px;"> @lang('message.register.user_log')
                        </h1>

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <button type="button" class="text-white close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>

                        </div>
                        @endif
                        <br>

                        <form method="POST" action="{{ route('login') }}" class="mt-5 card__form">
                            @csrf
                            <div class="form-row">
                                <div class="form-group ">
                                    <label for="email">@lang('message.register.email')</label>
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                        id="email" placeholder="@lang('message.register.example')" required>
                                </div>
                            </div>
                            <br>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="password">@lang('message.register.pass')</label>
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="@lang('message.register.enter_pass')" required>
                                </div>
                                <div>
                                    <br>

                                    <div class="form-group" style="justify-content:center">
                                        <button class="uk-button uk-button-primary uk-border-rounded"
                                            type="submit">@lang('message.register.log')</button>
                                    </div>

                                    <div class="mb-3 text-center">
                                        <small class="mb-2 text-center ">@lang('message.register.forget_pass') <a
                                                href="{{ route('password.request') }}"
                                                class="ml-1 link">@lang('message.register.reset').</a> </small>
                                        <small class="text-center ">@lang('message.register.dont_have')<a
                                                href="{{route('register')}}"
                                                class="ml-1 link">@lang('message.register.sign_up').</a> </small>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
