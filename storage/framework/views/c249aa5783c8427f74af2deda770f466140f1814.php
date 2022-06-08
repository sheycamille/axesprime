<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $__env->yieldContent('title'); ?> | <?php echo e(\App\Models\Setting::getValue('site_name')); ?></title>

    <meta name="description"
        content="<?php echo e(\App\Models\Setting::getValue('site_description')); ?> AxePro offers CFDs on currency pairs and five other asset classes. Start trading forex online with the world’s best forex broker.">
    <meta name="keywords"
        content="forex, exchange, broker, crypto, trading, indices, shares, stocks, bonds, cryptocurrencies, futures, energies">
    <meta name="author" content="axeprogroup">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f2f3f5" />

    <link rel="icon" href="<?php echo e(asset('front/favicon.png')); ?>" type="image/png" />

    <!-- Critical preload -->
    <link rel="preload" href="<?php echo e(asset('front/js/vendors/uikit.min.js')); ?>" as="script">
    <link rel="preload" href="<?php echo e(asset('front/css/vendors/uikit.min.css')); ?>" as="style">
    <link rel="preload" href="<?php echo e(asset('front/css/style.css')); ?>" as="style">

    <!-- Icon preload -->
    <link rel="preload" href="<?php echo e(asset('front/fonts/fa-brands-400.woff2')); ?>" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?php echo e(asset('front/fonts/fa-solid-900.woff2')); ?>" as="font" type="font/woff2" crossorigin>

    <!-- Font preload -->
    <link rel="preload" href="<?php echo e(asset('front/fonts/inter-v2-latin-regular.woff2')); ?>" as="font" type="font/woff2"
        crossorigin>
    <link rel="preload" href="<?php echo e(asset('front/fonts/inter-v2-latin-500.woff2')); ?>" as="font" type="font/woff2"
        crossorigin>
    <link rel="preload" href="<?php echo e(asset('front/fonts/inter-v2-latin-700.woff2')); ?>" as="font" type="font/woff2"
        crossorigin>

    <!-- Libraries CSS Files -->
    <link href="<?php echo e(asset('front/css/vendors/uikit.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('front/css/style.css')); ?>" rel="stylesheet">

</head>

<body>
    <!-- preloader begin -->
    <div class="in-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- preloader end -->

    <header>
        <!-- header content begin -->
        <div class="uk-section uk-padding-remove-vertical">
            <nav class="uk-navbar-container" data-uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">
                <div class="uk-container" data-uk-navbar>
                    <div class="uk-navbar-left">
                        <div class="uk-navbar-item">
                            <!-- logo begin -->
                            <a class="uk-logo" href="/">
                                <img src="<?php echo e(asset('front/img/axepro-group-logo.png')); ?>"
                                    data-src="<?php echo e(asset('front/img/axepro-group-logo.png')); ?>" alt="logo" width="160"
                                    height="34" data-uk-img>
                            </a>
                            <!-- logo end -->
                            <!-- navigation begin -->
                            <ul class="uk-navbar-nav uk-visible@m">
                                <li><a href="#"><?php echo app('translator')->get('message.markets'); ?><i class="fas fa-chevron-down"></i></a>
                                    <div class="uk-navbar-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li><a href="<?php echo e(route('forex')); ?>"><?php echo app('translator')->get('message.frex'); ?></a></li>
                                            <li><a href="<?php echo e(route('futures')); ?>"><?php echo app('translator')->get('message.fts'); ?></a></li>
                                            <li><a href="<?php echo e(route('indices')); ?>"><?php echo app('translator')->get('message.idc'); ?></a></li>
                                            <li><a href="<?php echo e(route('shares')); ?>"><?php echo app('translator')->get('message.shr'); ?></a></li>
                                            <li><a href="<?php echo e(route('metals')); ?>"><?php echo app('translator')->get('message.mtl'); ?></a></li>
                                            <li><a href="<?php echo e(route('energies')); ?>"><?php echo app('translator')->get('message.egy'); ?></a></li>
                                            <li><a href="<?php echo e(route('crypto')); ?>"><?php echo app('translator')->get('message.cryptocurrencies'); ?></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li><a href="#"><?php echo app('translator')->get('message.tools'); ?><i class="fas fa-chevron-down"></i></a>
                                    <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                                        <div class="uk-navbar-dropdown-grid uk-child-width-1-2" data-uk-grid>
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li>
                                                    <h3><?php echo app('translator')->get('message.pfm'); ?></h3>
                                                </li>
                                                <li><a href="<?php echo e(route('webtrader')); ?>"><?php echo app('translator')->get('message.wtd'); ?></a></li>
                                                <li><a href="<?php echo e(route('metatrader')); ?>"><?php echo app('translator')->get('message.mtd'); ?></a></li>
                                                <br>
                                                <br>
                                                <li>
                                                    <h6><?php echo app('translator')->get('message.policies'); ?></h6>
                                                </li>
                                                <li><a href="<?php echo e(route('privacy')); ?>"><?php echo app('translator')->get('message.pri_pol'); ?></a>
                                                </li>
                                                <li><a href="<?php echo e(route('terms-of-serv')); ?>"><?php echo app('translator')->get('message.trms'); ?>
                                                    </a></li>
                                                <li><a href="<?php echo e(route('order-execution')); ?>"><?php echo app('translator')->get('message.ordr'); ?>
                                                    </a></li>
                                                <li><a
                                                        href="<?php echo e(route('risk-disclosure')); ?>"><?php echo app('translator')->get('message.risk_dis'); ?></a>
                                                </li>
                                            </ul>

                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li>
                                                    <h3><?php echo app('translator')->get('message.trading_tools'); ?></h3>
                                                </li>
                                                <li><a href="<?php echo e(route('calender')); ?>"><?php echo app('translator')->get('message.ecn_cal'); ?></a>
                                                </li>
                                                <li><a href="<?php echo e(route('news')); ?>"><?php echo app('translator')->get('message.frx_nws_page'); ?></a>
                                                </li>
                                                <li><a href="<?php echo e(route('calculator')); ?>"><?php echo app('translator')->get('message.calc'); ?></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li><a href="<?php echo e(route('about')); ?>"><?php echo app('translator')->get('message.company'); ?><i
                                            class="fas fa-chevron-down"></i></a>
                                    <div class="uk-navbar-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li><a href="<?php echo e(route('about')); ?>"><?php echo app('translator')->get('message.abt'); ?></a></li>
                                            <li><a href="<?php echo e(route('credit-score')); ?>"><?php echo app('translator')->get('message.cdt'); ?></a></li>
                                            <li><a href="<?php echo e(route('security')); ?>"><?php echo app('translator')->get('message.sec'); ?></a></li>
                                        </ul>
                                    </div>
                                </li>

                                <li><a href="<?php echo e(route('contact')); ?>"><?php echo app('translator')->get('message.ctc'); ?></a></li>

                                <li><a href="#"><?php echo e(strtoupper(App::getLocale())); ?><i
                                            class="fas fa-chevron-down"></i></a>
                                    <div class="uk-navbar-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <?php if(App::getLocale() == 'en'): ?>
                                            <li><a href="<?php echo e(route('switchlang', 'fr')); ?>">FR</a></li>
                                            <?php else: ?>
                                            <li><a href="<?php echo e(route('switchlang', 'en')); ?>">EN</a></li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <!-- navigation end -->
                        </div>
                    </div>
                    <div class="uk-navbar-right">
                        <div class="uk-navbar-item uk-visible@m in-optional-nav">
                            <a href="<?php echo e(route('register')); ?>" class="uk-button uk-button-primary uk-border-rounded"
                                style="margin-right: 10px;"><?php echo app('translator')->get('message.crt_acnt'); ?></a>
                            <a href="<?php echo e(route('login')); ?>"
                                class="uk-button uk-button-primary uk-border-rounded"><?php echo app('translator')->get('message.log'); ?><i
                                    class="fas fa-user-circle"></i></a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- header content end -->
    </header>

    <div>
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <footer>
        <!-- footer content begin -->
        <div class="uk-section uk-section-secondary in-footer-feature uk-margin-medium-top">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-5-6@m">
                        <div class="uk-grid uk-child-width-1-3@s" data-uk-grid>
                            <div class="uk-flex uk-flex-middle">
                                <div class="uk-margin-right">
                                    <i class="fas fa-history in-icon-wrap"></i>
                                </div>
                                <div>
                                    <h6 class="uk-margin-remove"><?php echo app('translator')->get('message.excellence'); ?></h6>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-middle uk-flex-center@m">
                                <div class="uk-margin-right">
                                    <i class="fas fa-trophy in-icon-wrap"></i>
                                </div>
                                <div>
                                    <h6 class="uk-margin-remove"><?php echo app('translator')->get('message.gbl_awd'); ?></h6>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-middle uk-flex-right@m">
                                <div class="uk-margin-right">
                                    <i class="fas fa-phone-alt in-icon-wrap"></i>
                                </div>
                                <div>
                                    <h6 class="uk-margin-remove"><?php echo app('translator')->get('message.cus_sup'); ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="uk-section uk-background-secondary uk-light">
            <div class="uk-container uk-text-small">
                <div class="uk-child-width-1-2@m" data-uk-grid>
                    <div class="in-footer-logo">
                        <img src="<?php echo e(asset('front/img/in-lazy.gif')); ?>"
                            data-src="<?php echo e(asset('front/img/axepro-group-logo.png')); ?>" alt="logo" width="127" height="27"
                            data-uk-img>
                    </div>
                </div>

                <div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-margin-large-top" data-uk-grid>
                    <div>
                        <h5><?php echo app('translator')->get('message.markets'); ?></h5>
                        <ul class="uk-list uk-link-text">
                            <li><a href="<?php echo e(route('forex')); ?>"><?php echo app('translator')->get('message.frex'); ?></a></li>
                            <li><a href="<?php echo e(route('futures')); ?>"><?php echo app('translator')->get('message.fts'); ?></a></li>
                            <li><a href="<?php echo e(route('indices')); ?>"><?php echo app('translator')->get('message.idc'); ?></a></li>
                            <li><a href="<?php echo e(route('shares')); ?>"><?php echo app('translator')->get('message.shr'); ?></a></li>
                            <li><a href="<?php echo e(route('metals')); ?>"><?php echo app('translator')->get('message.mtl'); ?></a></li>
                            <li><a href="<?php echo e(route('energies')); ?>"><?php echo app('translator')->get('message.egy'); ?></a></li>
                            <li><a href="<?php echo e(route('crypto')); ?>"><?php echo app('translator')->get('message.cryptocurrencies'); ?></a></li>
                        </ul>
                    </div>

                    <div>
                        <h5><?php echo app('translator')->get('message.pfm'); ?></h5>
                        <ul class="uk-list uk-link-text">
                            <li><a href="<?php echo e(route('webtrader')); ?>"><?php echo app('translator')->get('message.wtd'); ?></a></li>
                            <li><a href="<?php echo e(route('metatrader')); ?>"><?php echo app('translator')->get('message.mtd'); ?></a></li>
                        </ul>

                        <div>
                            <h5><?php echo app('translator')->get('message.policies'); ?></h5>
                            <ul class="uk-list uk-link-text">
                                <li><a href="<?php echo e(route('privacy')); ?>"><?php echo app('translator')->get('message.pri_pol'); ?></a>
                                </li>
                                <li><a href="<?php echo e(route('terms-of-serv')); ?>"><?php echo app('translator')->get('message.trms'); ?>
                                    </a></li>
                                <li><a href="<?php echo e(route('order-execution')); ?>"><?php echo app('translator')->get('message.ordr'); ?>
                                    </a></li>
                                <li><a href="<?php echo e(route('risk-disclosure')); ?>"><?php echo app('translator')->get('message.risk_dis'); ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div>
                        <h5><?php echo app('translator')->get('message.trading_tools'); ?></h5>
                        <ul class="uk-list uk-link-text">
                            <li><a href="<?php echo e(route('calender')); ?>"><?php echo app('translator')->get('message.ecn_cal'); ?></a></li>
                            <li><a href="<?php echo e(route('news')); ?>"><?php echo app('translator')->get('message.frx_nws_page'); ?></a></li>
                            <li><a href="<?php echo e(route('calculator')); ?>"><?php echo app('translator')->get('message.calc'); ?></a></li>
                        </ul>
                    </div>

                    <div>
                        <h5><?php echo app('translator')->get('message.company'); ?></h5>
                        <ul class="uk-list uk-link-text">
                            <li><a href="<?php echo e(route('about')); ?>"><?php echo app('translator')->get('message.abt'); ?></a></li>
                            <li><a href="<?php echo e(route('contact')); ?>"><?php echo app('translator')->get('message.ctc'); ?></a></li>
                            <li><a href="<?php echo e(route('credit-score')); ?>"><?php echo app('translator')->get('message.cdt'); ?></a></li>
                            <li><a href="<?php echo e(route('security')); ?>"><?php echo app('translator')->get('message.sec'); ?></a></li>
                        </ul>
                    </div>
                </div>

                <div class="uk-grid uk-margin-large-top">
                    <div class="uk-width-1-1">
                        <p class="uk-heading-line uk-margin-large-bottom"><span><?php echo app('translator')->get('message.copyright'); ?>.</span></p>
                        <p class="in-trading-risk"><?php echo app('translator')->get('message.copyright_2'); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer content end -->

        <!-- totop begin -->
        <div class="uk-visible@m">
            <a href="#" class="in-totop fas fa-chevron-up" data-uk-scroll></a>
        </div>
        <!-- totop end -->
    </footer>

    <!-- Javascript -->
    <script src="<?php echo e(asset('front/js/vendors/uikit.min.js')); ?>"></script>
    <script src="<?php echo e(asset('front/js/vendors/blockit.min.js')); ?>"></script>
    <script src="<?php echo e(asset('front/js/config-theme.js')); ?>"></script>
</body>

</html>
<?php /**PATH /Users/wadingaleonardngonga/Documents/Projects/axesprime/resources/views/layouts/index.blade.php ENDPATH**/ ?>