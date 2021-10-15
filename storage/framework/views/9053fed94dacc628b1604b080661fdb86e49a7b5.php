<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?> | <?php echo e(\App\Models\Setting::getValue('site_name')); ?></title>
    <link rel="icon" href="<?php echo e(asset('storage/photos/' . \App\Models\Setting::getValue('favicon'))); ?>"
        type="image/png" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <!-- Bootstrap CSS File -->
    <link href="<?php echo e(asset('front/lib/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="<?php echo e(asset('front/lib/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('front/lib/animate/animate.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('front/lib/ionicons/css/ionicons.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('front/lib/owl.carousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('front/lib/icofont/icofont.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('front/lib/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('front/lib/jquery/magnific-popup.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('front/lib/aos/aos.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('front/lib/venobox/venobox.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('front/lib/icofont/icofont.min.css')); ?>" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="<?php echo e(asset('front/css/frontend_style_blue.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('front/css/custom.css')); ?>" rel="stylesheet">

</head>

<body>

    <!--Start of Tawk.to Script-->
    

    <!--========================== Header ============================-->
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-xl-11 d-flex align-items-center">
                    <a href="#intro" class="mr-auto logo"><img
                            src="<?php echo e(asset('storage/photos/' . \App\Models\Setting::getValue('logo'))); ?>"
                            alt="<?php echo e(\App\Models\Setting::getValue('site_name')); ?>" title="" class="img-fluid" /></a>

                    <nav class="nav-menu d-none d-lg-block">
                        <ul>
                            <li><a class="nav-link <?php echo $__env->yieldContent('home-menu-item'); ?>" href="/">Home</a></li>
                            <li><a class="nav-link <?php echo $__env->yieldContent('about-menu-item'); ?>" href="/about-us">About</a></li>
                            <li><a class="nav-link <?php echo $__env->yieldContent('products-menu-item'); ?>" href="/products">Products</a></li>
                            <li><a class="nav-link <?php echo $__env->yieldContent('accounts-types-menu-item'); ?>" href="/account-types">Account
                                    Types</a>
                            </li>
                            <li>
                                <a class="nav-link <?php echo $__env->yieldContent('platforms-menu-item'); ?>" href="/trading-platforms">Trading
                                    Platforms</a>
                            </li>
                            
                            <li><a class="nav-link <?php echo $__env->yieldContent('calender-menu-item'); ?>" href="/economic-calender">Economic
                                    Calender</a>
                            </li>
                            
                            </li>
                            <li><a class="nav-link <?php echo $__env->yieldContent('contact-menu-item'); ?>" href="/contact-us">Contact us</a></li>

                            <?php if(\App\Models\Setting::getValue('googlet') == 'yes'): ?>
                                <li class="nav-item dropdown hidden-caret">
                                    <div id="google_translate_element"></div>
                                </li>
                            <?php endif; ?>

                            <?php if(auth()->guard()->guest()): ?>
                                <li><a class="nav-link" href="<?php echo e(route('login')); ?>" class="">Sign In</a></li>
                                <li><a class="nav-link" href="<?php echo e(route('register')); ?>" class="btn-log ">Open An
                                        Account</a></li>
                            <?php else: ?>
                                <li class="nav-item dropdown avatar">
                                    <a id="navbarDropdownMenuLink-55" class="nav-link dropdown-toggle" href="#"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                        v-pre>
                                        <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="navbarDropdown">
                                        <a href="dashboard" class="dropdown-item text-dark">Dashboard</a><br>
                                        <a href="<?php echo e(route('logout')); ?>" class="dropdown-item text-dark"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                            style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </div>
                                </li>
                            <?php endif; ?>

                        </ul>
                    </nav>
                </div>
            </div>

        </div>
    </header>
    <!-- End Header -->

    <div class="content">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!--========================== Footer Sections ============================-->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 footer-info">
                        <h3><?php echo e(\App\Models\Setting::getValue('site_name')); ?></h3>
                        <p><?php echo \App\Models\Setting::getValue('description'); ?></p>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="ion-ios-arrow-right scrollto"></i> <a href="/#intro">Home</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="/about-us">About us</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a target="_blank"
                                    href="/PrivacyPolicyOnPrivacyProtection.pdf">Privacy Policy</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a target="_blank"
                                    href="/TermsAndConditions.pdf">Terms of service</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a target="_blank"
                                    href="/PolicyForTheExecutionOfOrders.pdf">Order Execution Policy</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a target="_blank"
                                    href="/RiskDisclosurePolicy.pdf">Risk Disclosure</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-contact">

                        <h4>Contact Us</h4>
                        <p>
                            <?php echo $content->getContent('52GPRA', 'description'); ?> <br>
                            <a href="#" class="text-white">Phone: <strong><?php echo $content->getContent('0EXbji', 'description'); ?></a><br>
                            <a href="#" class="text-white">Email:
                                <strong><?php echo e(\App\Models\Setting::getValue('contact_email')); ?></strong></a><br>
                        </p>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            
                            
                        </div>

                    </div>


                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <?php echo e(date('Y')); ?> &nbsp;<strong> <?php echo e(\App\Models\Setting::getValue('site_name')); ?>

                    &nbsp;</strong> All Rights Reserved. Designed and Built by <a href="https://afrik-smart.com"
                    target="_top"> Afrik-Smart</a>
            </div>
        </div>
    </footer><!-- #footer ends -->

    <!-- Back to top -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="<?php echo e(asset('front/lib/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('front/lib/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('front/lib/jquery.easing/jquery.easing.min.js')); ?>"></script>
    
    <script src="<?php echo e(asset('front/lib/waypoints/jquery.waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('front/lib/counterup/counterup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('front/lib/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('front/lib/venobox/venobox.min.js')); ?>"></script>
    <script src="<?php echo e(asset('front/lib/owl.carousel/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('front/lib/aos/aos.js')); ?>"></script>

    <!-- Template Main Javascript File -->
    <script src="<?php echo e(asset('front/js/main.js')); ?>"></script>


    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: 'en,fr',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
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
                for (var a = window, c = 0; c < b.length; ++c) a.hasOwnProperty ? a.hasOwnProperty(b[c]) ? a = a[b[c]] :
                    a = a[b[c]] = {} : a = a[b[c]] || (a[b[c]] = {});
                return a
            }
            window.addEventListener && "undefined" == typeof document.readyState && window.addEventListener(
                "DOMContentLoaded",
                function() {
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
                c._ctkk = eval(
                    '((function(){var a\x3d814543065;var b\x3d2873925779;return 414629+\x27.\x27+(a+b)})())');
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
<?php /**PATH /Users/wadingaleonardngonga/Documents/Projects/axesprime/resources/views/layouts/front.blade.php ENDPATH**/ ?>