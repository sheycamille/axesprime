@extends('layouts.front')

@section('title', 'Economic Calender')

@section('calender-menu-item', 'active')

@section('content')
<main id="main" class="about-us-page">

    <!--========================== Heading Section ============================-->
    <section id="about" class="section-bg wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h1 class="text-center">Economic Calender</h1>
            </div>
        </div>
    </section>


    <!--========================== Calender Section ============================-->
    <section id="getstarted" class="section-bg wow fadeInUp">
        <div class="container">
            <div class="row">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    {{-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/currencies/economic-calendar/" rel="noopener" target="_blank"><span class="blue-text">Economic Calendar</span></a> by TradingView</div> --}}
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-events.js" async>
                        {
                            "width": "100%"
                            , "height": "1000"
                            , "colorTheme": "light"
                            , "isTransparent": false
                            , "locale": "en"
                            , "importanceFilter": "-1,0,1"
                        }

                    </script>
                </div>
                <!-- TradingView Widget END -->
            </div>
        </div>
    </section>

    <!--========================== Market News Section ============================-->
    <section id="getstarted" class="section-bg wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h1 class="text-center">Market News</h1>
            </div>
            <div class="row">
                <a class="fx-widget" data-widget="newsfeed" data-lang="en" data-post-date-color="#999" data-post-description-color="#333333" data-post-title-color="#333333" data-widget-bg-color="#FFF" data-show-image data-width="1000" data-height="855" data-show-date data-title-font-size="18" data-intro-font-size="16" data-show-upper-intro data-category="news" data-section="all" data-base-url="https://www.fxempire.com" data-url="//www.fxempire.com" href="https://www.fxempire.com" rel="nofollow" style="font-family:Helvetica;font-size:16px;line-height:1.5;text-decoration:none;"> <span style="color:#999999;display:inline-block;margin-top:10px;font-size:12px;">Powered By </span> <img style="width:87px; height:14px;" src="https://www.fxempire.com/logo-full.svg" alt="FX Empire logo" /> </a>
                <script async charset="utf-8" src="https://widgets.fxempire.com/widget.js"></script>
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
