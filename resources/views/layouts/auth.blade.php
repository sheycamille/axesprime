<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | {{\App\Models\Setting::getValue('site_name')}}</title>

   <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
    <!-- Bootstrap CSS File -->
    <link href="{{ asset ('front/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="{{ asset ('front/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{ asset ('front/lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{ asset ('front/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
        <link href="{{ asset ('front/lib/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset ('front/lib/icofont/icofont.min.css')}}" rel="stylesheet">
        <link href="{{ asset ('front/lib/jquery/magnific-popup.css')}}" rel="stylesheet">
        <link href="{{ asset ('front/lib/aos/aos.css')}}" rel="stylesheet">
        <link href="{{ asset ('front/lib/venobox/venobox.css')}}" rel="stylesheet">
        <link href="{{ asset ('front/lib/icofont/icofont.min.css')}}" rel="stylesheet">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <link href="{{asset('front/css/frontend_style_blue.css')}}" rel="stylesheet">

        <!-- JavaScript Libraries -->

        <script src="{{ asset('front/lib/jquery/jquery.min.js')}}"></script>
        <script src="{{ asset('front/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('front/lib/jquery.easing/jquery.easing.min.js')}}"></script>
        {{-- <script src="{{ asset('front/lib/php-email-form/validate.js')}}"></script> --}}
        <script src="{{ asset('front/lib/waypoints/jquery.waypoints.min.js')}}"></script>
        <script src="{{ asset('front/lib/counterup/counterup.min.js')}}"></script>
        <script src="{{ asset('front/lib/isotope-layout/isotope.pkgd.min.js')}}"></script>
        <script src="{{ asset('front/lib/venobox/venobox.min.js')}}"></script>
        <script src="{{ asset('front/lib/owl.carousel/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('front/lib/aos/aos.js')}}"></script>

        <!-- Template Main Javascript File -->
        <script src="{{ asset('front/js/main.js')}}"></script>

</head>
@yield('content')
