@extends('layouts.front')

@section('title', 'Contact Us')

@section('about-menu-item', 'active')

@section('content')
<main id="main" class="about-us-page">

    <!--========================== About Section ============================-->
    <section id="about" class="section-bg wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h3>{{$content->getContent('RyigFH', 'title')}}</h3>
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
            <div class="section-header">
                <h3 class="text-left">{{$content->getContent('p5pwyr', 'title')}}</h3>
            </div>
            <div class="d-flex">
                <p class="text-left col-md-9">{{$content->getContent('p5pwyr', 'description')}}</p>
                <div class="col-md-3 text-right"><a href="/login" class="btn-get-started">Get Started</a></div>
            </div>
        </div>
    </section> <!-- #get started  ends-->

</main>
@endsection
