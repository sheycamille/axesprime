@extends('layouts.front')
@section('content')
<main id="main">

    <!--========================== Intro Section ============================-->
    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators"> </ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active">
                        <div class="carousel-background"><img src="{{ asset('storage/photos/'.$content->getImage('57VnOE','img_path'))}}" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>{{$content->getContent('toe3Ew', 'title')}}</h2>
                                <p>{{$content->getContent('toe3Ew', 'description')}}</p>
                                <a href="{{route('register')}}" class="btn-get-started scrollto">Get Started</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="{{ asset('storage/photos/'.$content->getImage('dC6ZaA','img_path'))}}" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>{{$content->getContent('jJwh78','title')}}</h2>
                                <p>{{$content->getContent('jJwh78','description')}}</p>
                                <a href="{{route('register')}}" class="btn-get-started scrollto">Get Started</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="{{ asset('storage/photos/'.$content->getImage('9kHash','img_path'))}}" alt="">
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2>{{$content->getContent('SLxaB2','title')}}</h2>
                                    <p>{{$content->getContent('SLxaB2','description')}}</p>
                                    <a href="{{route('register')}}" class="btn-get-started scrollto">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="{{ asset('storage/photos/'.$content->getImage('CcW52g','img_path'))}}" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>{{$content->getContent('BkP8pH','title')}}</h2>
                                <p>{{$content->getContent('BkP8pH','description')}}</p>
                                <a href="{{route('register')}}" class="btn-get-started scrollto">Get Started</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="{{asset('storage/photos/'.$content->getImage('96i7xH','img_path'))}}" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>{{$content->getContent('W6gTBN','title')}}</h2>
                                <p>{{$content->getContent('W6gTBN','description')}}</p>
                                <a href="{{route('register')}}" class="btn-get-started scrollto">Get Started</a>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section><!-- #intro end -->

    <!--========================== About Us Section ============================-->
    <section id="about">
        <div class="container">

            <header class="section-header">
                <h3>{{$content->getContent('anvs8c','title')}} {{\App\Models\Setting::getValue('site_name')}}</h3>
                <p>{{$content->getContent('anvs8c','description')}}</p>
            </header>

            <div class="text-center row about-cols">

                <div class="col-lg-3 col-md-4 wow fadeInUp">
                    <div class="about-col">
                        <div class="img">
                            <img src="{{ asset ('front/img/about/innovate.png')}}" alt="" class="mt-4 w-25">

                        </div>
                        <h2 class="title"><a href="#">{{$content->getContent('epJ4LI','title')}}</a></h2>
                        <p>{{$content->getContent('epJ4LI','description')}}</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-col">
                        <div class="img">
                            <img src="{{ asset ('front/img/about/secure.png')}}" alt="" class="mt-4 w-25">

                        </div>
                        <h2 class="title"><a href="#">{{$content->getContent('5hbB6X','title')}}</a></h2>
                        <p>{{$content->getContent('5hbB6X','description')}}</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="about-col">
                        <div class="img">
                            <img src="{{ asset ('front/img/about/prof.png')}}" alt="" class="mt-4 w-25">

                        </div>
                        <h2 class="title"><a href="#">{{$content->getContent('Zrhm3I','title')}}</a></h2>
                        <p>{{$content->getContent('Zrhm3I','description')}}</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="about-col">
                        <div class="img">
                            <img src="{{ asset ('front/img/about/invest.png')}}" alt="" class="mt-4 w-25">

                        </div>
                        <h2 class="title"><a href="#">{{$content->getContent('yTKhlt','title')}}</a></h2>
                        <p>{{$content->getContent('yTKhlt','description')}}</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #about -->

    <!--========================== Services Section ============================-->
    <section id="services">
        <div class="container">

            <header class="section-header wow fadeInUp">
                <h3>{{$content->getContent('u0Ervr','title')}}</h3>
                <p>{{$content->getContent('u0Ervr','description')}}</p>
            </header>

            <div class="row">

                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon">
                            <svg class="svg">
                                <use xlink:href="{{ asset ('front/img/sprite.svg#icon-stable')}}"></use>
                            </svg>
                        </div>
                        <h3 class="title">{{$content->getContent('Dwu6Bv','title')}}</h3>
                        <p class="description">{{$content->getContent('Dwu6Bv','description')}}</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon">
                            <svg class="svg">
                                <use xlink:href="{{ asset ('front/img/sprite.svg#icon-payment')}}"></use>
                            </svg>
                        </div>
                        <h3 class="title">{{$content->getContent('eMo1d2','title')}}</h3>
                        <p class="description">{{$content->getContent('eMo1d2','description')}}</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon">
                            <svg class="svg">
                                <use xlink:href="{{ asset ('front/img/sprite.svg#icon-referral')}}"></use>
                            </svg>
                        </div>
                        <h3 class="title">{{$content->getContent('kEJPm3','title')}}</h3>
                        <p class="description">{{$content->getContent('kEJPm3','description')}}</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon">
                            <svg class="svg">
                                <use xlink:href="{{ asset ('front/img/sprite.svg#icon-dollar')}}"></use>
                            </svg>
                        </div>
                        <h3 class="title">{{$content->getContent('bBSnFV','title')}}</h3>
                        <p class="description">{{$content->getContent('bBSnFV','description')}}</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon">
                            <svg class="svg">
                                <use xlink:href="{{ asset ('front/img/sprite.svg#icon-support')}}"></use>
                            </svg>
                        </div>
                        <h3 class="title">{{$content->getContent('DUK9pc','title')}}</h3>
                        <p class="description">{{$content->getContent('DUK9pc','description')}}</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon">
                            <svg class="svg">
                                <use xlink:href="{{ asset ('front/img/sprite.svg#icon-shield')}}"></use>
                            </svg>
                        </div>
                        <h3 class="title">{{$content->getContent('VaeiMW','title')}}</h3>
                        <p class="description">{{$content->getContent('VaeiMW','description')}}</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #services -->

    <!--========================== Pricing Section ============================-->
    {{-- <section id="pricing" class="wow fadeInUp section-bg">

            <div class="container">

                <header class="section-header">
                    <h3>{{$content->getContent('vr6Xw0','title')}}</h3>
    <p>{{$content->getContent('vr6Xw0','description')}}</p>
    </header>

    <div class="row flex-items-xs-middle flex-items-xs-center">



        @foreach ($plans as $plan)
        <!-- Basic Plan  -->
        <div class="col-lg-4 col-md-6">
            <div class="pricing-box">
                <h3>{{$plan->name}}</h3>
                <div class="cur">
                    <span>{{\App\Models\Setting::getValue('currency')}}</span>
                    <h2>{{$plan->price}}</h2>
                    <h6>{{\App\Models\Setting::getValue('s_currency')}}</h6>
                </div>
                <div class="price-list">
                    <ul class="list-unstyled">
                        <li class="list-item"><i class="bx bx-check"></i>Min. Possible deposit: {{\App\Models\Setting::getValue('currency')}}{{$plan->min_price}}</li>
                        <li class="list-item"><i class="bx bx-check"></i>Max. Possible deposit: {{\App\Models\Setting::getValue('currency')}}{{$plan->max_price}}</li>
                        <li class="list-item"><i class="bx bx-check"></i>{{\App\Models\Setting::getValue('currency')}}{{$plan->minr}} Minimum return</li>
                        <li class="list-item"><i class="bx bx-check"></i>{{\App\Models\Setting::getValue('currency')}}{{$plan->maxr}} Maximum return</li>
                        <li class="list-item"><i class="bx bx-check"></i>{{\App\Models\Setting::getValue('currency')}}{{$plan->gift}} Gift Bonus</li>
                    </ul>
                </div>
                <div class="pricing-button">
                    <a href="" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        </div>

        @endforeach
    </div>
    </div>

    </section><!-- #pricing --> --}}

    <!--========================== Testimonials Sections ============================-->

    {{-- <section id="testimonials">
            <div class="container">

                <header class="section-header">
                    <h3>{{$content->getContent('SMsJr1','title')}}</h3>
    <p>{{$content->getContent('SMsJr1','description')}}</p>
    </header>

    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">
                @foreach ($test as $testimony)
                <div class="testimonial-item">
                    <img src="{{ asset('storage/photos/'.$testimony->picture)}}" class="testimonial-img" alt="">
                    <h3>{{$testimony->name}}</h3>
                    <h4>{{$testimony->position}}</h4>
                    <p>
                        {{$testimony->what_is_said}}
                    </p>
                </div>
                @endforeach

            </div>
        </div>
    </div>


    </div>
    </section><!-- #testimonials --> --}}

    <!--========================== Transactions Sections ============================-->

    {{-- <section id="transaction" class="transaction">
            <div class="container">

                <header class="section-header">
                    <h3>{{$content->getContent('OtEicb','title')}}</h3>
    <p>{{$content->getContent('OtEicb','description')}}</p>
    </header>
    <div class="row">
        <div class="col-lg-12 col-md-6"></div>
        <div class="transaction-box">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#tab1" data-toggle="tab">Withdrawal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tab2" data-toggle="tab">Deposit</a>
                </li>
            </ul>

            <div class="clearfix tab-content">
                <div id="tab1" class="tab-pane active">
                    <div class="shadow table-responsive">
                        <table class="table table-striped">
                            <thead class="bg-light">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">amount</th>
                                    <th scope="col">Mode</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($withdrawals as $deposit)
                                <tr>
                                    <th scope="row">{{$deposit->duser->name}}</th>
                                    <td>{{$deposit->created_at}}</td>
                                    <td>{{\App\Models\Setting::getValue('currency')}}{{$deposit->amount}}</td>
                                    <td>{{$deposit->payment_mode}}</td>
                                    <td>{{$deposit->status}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="tab2" class="tab-pane">
                    <div class="shadow table-responsive">
                        <table class="table table-striped">
                            <thead class="bg-light">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">amount</th>
                                    <th scope="col">Mode</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($deposits as $deposit)
                                <tr>
                                    <th scope="row">{{$deposit->duser->name}}</th>
                                    <td>{{$deposit->created_at}}</td>
                                    <td>{{\App\Models\Setting::getValue('currency')}}{{$deposit->amount}}</td>
                                    <td>{{$deposit->payment_mode}}</td>
                                    <td>{{$deposit->status}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>
    </section> --}}
    <!-- End transaction -->

    <!--========================== Frequently Ask questions ============================-->
    <section id="faq">
        <div class="container">
            <div class="section-header">
                <h3 class="section-title">{{$content->getContent('OLZt1I','title')}}</h3>
                <p>{{$content->getContent('OLZt1I','description')}}</p>
                <span class="section-divider"></span>
            </div>

            <ul id="faq-list" class="wow fadeInUp">
                @foreach ($faqs as $item)
                <li>
                    <a data-toggle="collapse" class="collapsed" href="#faq{{$item->id}}">{{$item->question}} <i class="ion-android-remove"></i></a>
                    <div id="faq{{$item->id}}" class="collapse" data-parent="#faq{{$item->id}}">
                        <p>
                            {{$item->answer}}
                        </p>
                    </div>
                </li>
                @endforeach
            </ul>

        </div>
    </section> <!-- #faq  ends-->

    <!--========================== Payments Sections ============================-->
    <section id="payments" class="wow fadeInUp">
        <div class="container">

            <header class="section-header">
                <h3>{{$content->getContent('U7zpEj','title')}}</h3>
            </header>

            <div class="owl-carousel payments-carousel">
                {{-- <img src="{{ asset('front/img/payments/payment-1.png')}}" alt="">
                <img src="{{ asset('front/img/payments/payment-2.png')}}" alt=""> --}}
                {{-- <img src="{{ asset('front/img/payments/payment-3.png')}}" alt=""> --}}
                <img src="{{ asset('front/img/payments/payment-mastercard.png')}}" alt="">
                <img src="{{ asset('front/img/payments/payment-visa.png')}}" alt="">
                <img src="{{ asset('front/img/payments/payment-btc.png')}}" alt="">
                <img src="{{ asset('front/img/payments/payment-ether.png')}}" alt="">
                {{-- <img src="{{ asset('front/img/payments/payment-7.png')}}" alt=""> --}}
                {{-- <img src="{{ asset('front/img/payments/payment-8.png')}}" alt=""> --}}
            </div>

        </div>
    </section><!-- #Payments ends -->

    <!--========================== Contact Section ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
        <div class="container">

            <div class="section-header">
                <h3>{{$content->getContent('9sNF7G','title')}}</h3>
                <p>{{$content->getContent('9sNF7G','description')}}</p>

            </div>

            <div class="row contact-info">

                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3>{{$content->getContent('52GPRA','title')}}</h3>
                        <p>{{$content->getContent('52GPRA','description')}}</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>{{$content->getContent('0EXbji','title')}}</h3>
                        <p><a href="tel: {{$content->getContent('0EXbji','description')}}"> {{$content->getContent('0EXbji','description')}}</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>EMAIL</h3>
                        <p><a href="{{\App\Models\Setting::getValue('contact_email')}}">{{\App\Models\Setting::getValue('contact_email')}}</a> </p>
                    </div>
                </div>

            </div>

            <div class="form">

                @if(Session::has('message'))
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ Session::get('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                @endif

                <form action="{{route('enquiry')}}" method="POST" role="form" class="contactForm">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" id="form3" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="form2" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="form8" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" required></textarea>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="validation"></div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>
    </section><!-- #contact -->

</main>
@endsection
