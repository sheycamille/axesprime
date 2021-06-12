@extends('layouts.front')

@section('title', 'About Us')

@section('about-menu-item', 'active')

@section('content')
<main id="main" class="about-us-page">

    <!--========================== About Section ============================-->
    <section id="about" class="section-bg wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h1 class="text-center">{{$content->getContent('RyigFH', 'title')}}</h1>
            </div>

        </div>
    </section>


    <!--========================== Our Mission Section ============================-->
    <section id="getstarted" class="section-bg wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h3 class="text-left">{{$content->getContent('MDY58B', 'title')}}</h3>
                <p class="text-left">{{$content->getContent('MDY58B', 'description')}}</p>
            </div>

        </div>
    </section>


    <!--========================== Our Reliable Trading Solution Section ============================-->
    <section id="getstarted" class="section-bg wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h3 class="text-left">{{$content->getContent('3y2b3j', 'title')}}</h3>
                <p class="text-left">{{$content->getContent('3y2b3j', 'description')}}</p>
            </div>

        </div>
    </section>


    <!--========================== Our Superb Trading Conditions Section ============================-->
    <section id="getstarted" class="section-bg wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h3 class="text-left">{{$content->getContent('ro9o3r', 'title')}}</h3>
                <p class="text-left">{{$content->getContent('ro9o3r', 'description')}}</p>
            </div>
        </div>
    </section>


    <!--========================== Get Started ============================-->
    <section id="getstarted">
        <div class="container">
            <div class="col-md-12">
                <div class="section-header">
                    <h3 class="text-center">How to Get Started</h3>
                    <div class="text-center">
                        <p>Access one of the largest and most liquid markets in the world! Enter the world of Forex and CFD online trading in just a few steps and start trading more than <em class="cbc_content">1000</em> instruments on our world-leading trading platforms.</p>
                    </div>
                </div>
                <div class="howtosteps-block d-flex">
                    <div class="col-md-3 col-sm-6 col-xs-12 item active">
                        <span class="ch_img"><img data-src="{{ asset ('front/img/about/icon_register.png')}}" alt="Register" tilte="Register" src="{{ asset ('front/img/about/icon_register.png')}}"></span><br><br>
                        <h5>Register</h5>
                        <span>
                            <p>Sign up and upload your documents to verify your account.</p>
                        </span>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 item active">
                        <span class="ch_img"><img data-src="{{ asset ('front/img/about/ICONS_2-01.png')}}" alt="Fund" tilte="Fund" src="{{ asset ('front/img/about/ICONS_2-01.png')}}"></span><br><br>
                        <h5>Fund</h5>
                        <span>
                            <p>Once you understand all the benefits and risks involved, you may fund your account.</p>
                        </span>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 item active">
                        <span class="ch_img"><img data-src="{{ asset ('front/img/about/ICONS_3-01.png')}}" alt="Trade" tilte="Trade" src="{{ asset ('front/img/about/ICONS_3-01.png')}}"></span><br><br>
                        <h5>Trade</h5>
                        <span>
                            <p>Start trading on our WebTrader, Desktop or Mobile Platforms.</p>
                        </span>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 item active">
                        <span class="ch_img"><img data-src="{{ asset ('front/img/about/ICONS_4-01.png')}}" alt="Withdraw" tilte="Withdraw" src="{{ asset ('front/img/about/ICONS_4-01.png')}}"></span><br><br>
                        <h5>Withdraw</h5>
                        <span>
                            <p>Withdraw any profits or your entire account balance at any time!</p>
                        </span>
                    </div>
                </div>
                <div class="text-center">
                    <a class="btn-get-started" href="{{ route('register') }}">Open an Account</a><br>
                </div>
            </div>
            <div class="hw_disclaimer"></div>
        </div>
    </section> <!-- #get started  ends-->

</main>
@endsection
