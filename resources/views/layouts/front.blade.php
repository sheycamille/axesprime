<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | {{\App\Models\Setting::getValue('site_name')}}</title>
    <link rel="icon" href="{{ asset('storage/photos/'.\App\Models\Setting::getValue('favicon'))}}" type="image/png" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS File -->
    <link href="{{ asset ('front/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ asset ('front/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset ('front/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset ('front/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset ('front/lib/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset ('front/lib/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{ asset ('front/lib/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset ('front/lib/jquery/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{ asset ('front/lib/aos/aos.css')}}" rel="stylesheet">
    <link href="{{ asset ('front/lib/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{ asset ('front/lib/icofont/icofont.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('front/css/frontend_style_blue.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/custom.css')}}" rel="stylesheet">

</head>
<body>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        {
            !!\App\ Models\ Setting::getValue('tawk_to') !!
        }

    </script>

    <!--========================== Header ============================-->
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-xl-11 d-flex align-items-center">
                    <a href="#intro" class="mr-auto logo"><img src="{{ asset('storage/photos/'.\App\Models\Setting::getValue('logo'))}}" alt="{{\App\Models\Setting::getValue('site_name')}}" title="" class="img-fluid" /></a>

                    <nav class="nav-menu d-none d-lg-block">
                        <ul>
                            <li class="@yield('home-menu-item')"><a href="/">Home</a></li>
                            <li class="@yield('about-menu-item')"><a href="/about-us">About</a></li>
                            {{-- <li><a href="/#testimonials">Testimonials</a></li> --}}
                            </li>
                            <li class="@yield('contact-menu-item')"><a href="/contact-us">Contact us</a></li>

                            @if(\App\Models\Setting::getValue('googlet') == 'yes')
                            <li class="nav-item dropdown hidden-caret">
                                <div id="google_translate_element"></div>
                            </li>
                            @endif

                            @if(\App\Models\Setting::getValue('site_preference') =="Web dashboard only")
                            @guest
                            <li><a href="login" class="">Sign In</a></li>
                            <li><a href="register" class="btn-log ">Get started</a></li>
                            @else
                            <li class="nav-item dropdown avatar">
                                <a id="navbarDropdownMenuLink-55" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="navbarDropdown">
                                    <a href="dashboard" class="dropdown-item text-dark">Dashboard</a><br>
                                    <a href="{{ route('logout') }}" class="dropdown-item text-dark" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>
                            @endguest
                            @else

                            <li><a href="/login" class="btn-log ">Get started</a></li>
                            @endif

                        </ul>
                    </nav><!-- nav-menu- -->
                </div>
            </div>

        </div>
    </header><!-- End Header -->

    <div class="content">
        @yield('content')
    </div>

    <!--========================== Footer Sections ============================-->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 footer-info">
                        <h3>{{\App\Models\Setting::getValue('site_name')}}</h3>
                        <p>{!! \App\Models\Setting::getValue('description') !!}</p>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="ion-ios-arrow-right scrollto"></i> <a href="/#intro">Home</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="/about-us">About us</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a target="_blank" href="/PrivacyPolicyOnPrivacyProtection.pdf">Privacy Policy</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a target="_blank" href="/TermsAndConditions.pdf">Terms of service</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a target="_blank" href="/PolicyForTheExecutionOfOrders.pdf">Order Execution Policy</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a target="_blank" href="/RiskDisclosurePolicy.pdf">Risk Disclosure</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-contact">

                        <h4>Contact Us</h4>
                        <p>
                            {{$content->getContent('52GPRA','description')}} <br>
                            <a href="#" class="text-white"><strong>Phone:</strong> {{$content->getContent('0EXbji','description')}}<br></a>
                            <a href="#" class="text-white"><strong>Email:</strong> {{\App\Models\Setting::getValue('contact_email')}}<br></a>
                        </p>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            {{-- <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a> --}}
                            {{-- <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a> --}}
                        </div>

                    </div>


                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright {{date('Y')}} &nbsp;<strong> {{\App\Models\Setting::getValue('site_name')}} &nbsp;</strong> All Rights Reserved.
            </div>
        </div>
    </footer><!-- #footer ends -->

    <!-- Back to top -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


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


    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
                , layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }

        (function() {
            var gtConstEvalStartTime = new Date();

            function d(b) {
                var a = document.getElementsByTagName("head")[0];
                a || (a = document.body.parentNode.appendChild(document.createElement("head")));
                a.appendChild(b)
            }

            function _loadJs(b) {
                var a = document.createElement("script");
                a.type = "text/javascript";
                a.charset = "UTF-8";
                a.src = b;
                d(a)
            }

            function _loadCss(b) {
                var a = document.createElement("link");
                a.type = "text/css";
                a.rel = "stylesheet";
                a.charset = "UTF-8";
                a.href = b;
                d(a)
            }

            function _isNS(b) {
                b = b.split(".");
                for (var a = window, c = 0; c < b.length; ++c)
                    if (!(a = a[b[c]])) return !1;
                return !0
            }

            function _setupNS(b) {
                b = b.split(".");
                for (var a = window, c = 0; c < b.length; ++c) a.hasOwnProperty ? a.hasOwnProperty(b[c]) ? a = a[b[c]] : a = a[b[c]] = {} : a = a[b[c]] || (a[b[c]] = {});
                return a
            }
            window.addEventListener && "undefined" == typeof document.readyState && window.addEventListener("DOMContentLoaded", function() {
                document.readyState = "complete"
            }, !1);
            if (_isNS('google.translate.Element')) {
                return
            }(function() {
                var c = _setupNS('google.translate._const');
                c._cest = gtConstEvalStartTime;
                gtConstEvalStartTime = undefined;
                c._cl = 'en';
                c._cuc = 'googleTranslateElementInit';
                c._cac = '';
                c._cam = '';
                c._ctkk = eval('((function(){var a\x3d814543065;var b\x3d2873925779;return 414629+\x27.\x27+(a+b)})())');
                var h = 'translate.googleapis.com';
                var s = (true ? 'https' : window.location.protocol == 'https:' ? 'https' : 'http') + '://';
                var b = s + h;
                c._pah = h;
                c._pas = s;
                c._pbi = b + '/translate_static/img/te_bk.gif';
                c._pci = b + '/translate_static/img/te_ctrl3.gif';
                c._pli = b + '/translate_static/img/loading.gif';
                c._plla = h + '/translate_a/l';
                c._pmi = b + '/translate_static/img/mini_google.png';
                c._ps = b + '/translate_static/css/translateelement.css';
                c._puh = 'translate.google.com';
                _loadCss(c._ps);
                _loadJs(b + '/translate_static/js/element/main.js');
            })();
        })();

    </script>

</body>
</html>
