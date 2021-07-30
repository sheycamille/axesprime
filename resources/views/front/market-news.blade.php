@extends('layouts.front')

@section('title', 'Market News')

@section('news-menu-item', 'active')

@section('content')
<main id="main" class="about-us-page">

    <!--========================== Heading Section ============================-->
    <section id="about" class="section-bg wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h1 class="text-center">Market News</h1>
            </div>
        </div>
    </section>


    <!--========================== Market News Section ============================-->
    <section id="getstarted" class="section-bg wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-header">
                        <h3 class="text-left">Metatrader 5</h3>
                        <h4>The World’s Most Advanced Platform</h4>
                    </div>
                    <p class="text-left">
                        Enjoy more features with AXESPRIME’ MT5 trading platform. The AXESPRIME MT5 is the latest and most advanced MetaTrader platform that offers all the pioneering features of MT4, with the addition of more advanced trading tools and indicators that enable traders to maintain more control of their trades and make more informed decisions using cutting-edge analysis.
                    </p>
                    <div class="text-left">
                        <a class="btn-get-started" target="_blank" href="{{ asset('downloads/axesprimeltd5setup.exe') }}">Download Now</a><br>
                    </div>
                </div>
                <img class="col-md-6" src="{{ asset ('front/img/about/MT5-10.jpg')}}" alt="MT5" tilte="MT5" />
            </div>
        </div>
    </section>

</main>
@endsection
