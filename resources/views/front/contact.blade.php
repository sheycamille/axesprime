@extends('layouts.front')

@section('title', 'Contact Us')

@section('contact-menu-item', 'active')

@section('content')
<main id="main" class="contact-us-page">

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

                <form action="{{route('sendcontactmessage')}}" method="POST" role="form" class="contactForm">
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

    <!--========================== Frequently Ask questions ============================-->
    {{-- <section id="faq">
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
    </section> <!-- #faq  ends--> --}}

</main>
@endsection
