<?php $__env->startSection('title', trans(\App\Models\Setting::getValue('site_title'))); ?>

<?php $__env->startSection('home-menu-item', 'uk-active'); ?>

<?php $__env->startSection('content'); ?>
    <main>

        <!-- top content begin -->
        <div class="uk-section uk-padding-remove-vertical">
            <div class="uk-light in-slideshow uk-background-cover uk-background-top-center" style="background-image: url(<?php echo e(asset('front/img/in-liquid-slide-bg.png')); ?>);">
                <div class="uk-container">
                    <div class="uk-grid-medium" data-uk-grid>
                        <div class="uk-width-1-2@s">
                            <div class="uk-overlay">
                                <h1><?php echo app('translator')->get('message.home.title_pt1'); ?><br><?php echo app('translator')->get('message.home.title_pt2'); ?>.</h1>
                                <p class="uk-text-lead uk-visible@m"><?php echo app('translator')->get('message.home.subtitle'); ?></p>
                                    <a href="#" class="uk-button uk-button-default uk-border-rounded uk-visible@s"><?php echo app('translator')->get('message.home.button_1'); ?></a>
                            </div>
                        </div>
                        <div class="uk-width-1-2@s">
                            <img class="in-slide-img" src="<?php echo e(asset('front/img/in-liquid-slide-1.svg')); ?>" data-src="<?php echo e(asset('front/img/in-liquid-slide-1.svg')); ?>" alt="image-slide" width="500" height="400" data-uk-img>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-section in-liquid-14">
                <div class="uk-section uk-padding-remove-vertical in-slideshow-features uk-visible@m">
                    <div class="uk-container">
                        <div class="uk-grid-large uk-child-width-1-3@m slide-icons-2" data-uk-grid>
                            <div class="uk-flex uk-flex-left">
                                <div class="uk-margin-right">
                                    <img src="<?php echo e(asset('front/img/in-lazy.gif')); ?>" data-src="<?php echo e(asset('front/img/in-liquid-icon-19.svg')); ?>" alt="sample-icon" width="124" height="124" data-uk-img>
                                </div>
                                <div>
                                    <h5 class="uk-margin-remove"><?php echo app('translator')->get('message.home.icon'); ?></h5>
                                    <p class="uk-margin-small-top"><?php echo app('translator')->get('message.home.icon_txt'); ?></p>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-left">
                                <div class="uk-margin-right">
                                    <img src="<?php echo e(asset('front/img/in-lazy.gif')); ?>" data-src="<?php echo e(asset('front/img/in-liquid-icon-20.svg')); ?>" alt="sample-icon" width="124" height="124" data-uk-img>
                                </div>
                                <div>
                                    <h5 class="uk-margin-remove"><?php echo app('translator')->get('message.home.icon_2'); ?></h5>
                                    <p class="uk-margin-small-top"><?php echo app('translator')->get('message.home.icon_2txt'); ?></p>
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-left">
                                <div class="uk-margin-right">
                                    <img src="<?php echo e(asset('front/img/in-lazy.gif')); ?>" data-src="<?php echo e(asset('front/img/in-liquid-icon-21.svg')); ?>" alt="sample-icon" width="124" height="124" data-uk-img>
                                </div>
                                <div>
                                    <h5 class="uk-margin-remove"><?php echo app('translator')->get('message.home.icon_3'); ?></h5>
                                    <p class="uk-margin-small-top"><?php echo app('translator')->get('message.home.icon_3txt'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- top content end -->

        <!-- section features begin -->
        <div class="uk-section in-liquid-14">
            <div class="uk-container">
                <div class="uk-grid-large uk-flex uk-flex-middle" data-uk-grid>
                    <div class="uk-width-expand@m">
                        <h2><?php echo app('translator')->get('message.home.Trade_On_Mobile'); ?></span>.</h2>
                        <p><?php echo app('translator')->get('message.home.txt_1'); ?></p>
                        <div class="uk-grid uk-grid-collapse uk-child-width-1-3@m uk-child-width-1-2@s uk-text-center uk-margin-medium-top">
                            <div class="uk-tile uk-tile-default">
                                <p class="uk-text-lead uk-margin-remove-bottom">50+</p>
                                <p class="uk-text-small uk-text-muted uk-margin-remove-top"><?php echo app('translator')->get('message.home.Trade_world_markets'); ?></p>
                            </div>
                            <div class="uk-tile uk-tile-default">
                                <p class="uk-text-lead uk-margin-remove-bottom">1k+</p>
                                <p class="uk-text-small uk-text-muted uk-margin-remove-top"><?php echo app('translator')->get('message.home.Manage_trading_accounts'); ?></p>
                            </div>
                            <div class="uk-tile uk-tile-default">
                                <p class="uk-text-lead uk-margin-remove-bottom">10+</p>
                                <p class="uk-text-small uk-text-muted uk-margin-remove-top"><?php echo app('translator')->get('message.home.payment_method'); ?></p>
                            </div>
                            <div class="uk-tile uk-tile-default">
                                <p class="uk-text-lead uk-margin-remove-bottom">10k+</p>
                                <p class="uk-text-small uk-text-muted uk-margin-remove-top"><?php echo app('translator')->get('message.home.latest_events'); ?></p>
                            </div>
                            <div class="uk-tile uk-tile-default uk-visible@m">
                                <p class="uk-text-lead uk-margin-remove-bottom">500k</p>
                                <p class="uk-text-small uk-text-muted uk-margin-remove-top"><?php echo app('translator')->get('message.home.client_acount'); ?></p>
                            </div>
                            <div class="uk-tile uk-tile-default uk-visible@m">
                                <p class="uk-text-lead uk-margin-remove-bottom">2.1M</p>
                                <p class="uk-text-small uk-text-muted uk-margin-remove-top"><?php echo app('translator')->get('message.home.daily_rev'); ?></p>
                            </div>
                        </div>
                        <!-- <a class="uk-button uk-button-text uk-border-rounded uk-margin-medium-top" href="#">Asset protection<i class="fas fa-angle-right uk-margin-small-left"></i></a>
                        <p class="uk-text-small">For additional information view our Investors Relations - <a href="#">clicking here.</a></p> -->
                    </div>
                    <div class="uk-width-1-2@m">
                        <img class="uk-width-1-1" src="<?php echo e(asset('front/img/in-lazy.gif')); ?>" data-src="<?php echo e(asset('front/img/phone_desktop.png')); ?>" alt="sample-image" data-width data-height data-uk-img>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->

        <!-- section instruments begin -->
        <div class="uk-section in-liquid-15 in-offset-top-20 uk-background-contain uk-background-bottom-center" data-src="<?php echo e(asset('front/img/in-liquid-15-bg.png')); ?>" data-uk-img>
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-5-6@m">
                        <div class="uk-text-center">
                            <h2 class="uk-margin-remove"><?php echo app('translator')->get('message.worlds_num1'); ?></h2>
                            <p class="uk-text-lead uk-text-muted uk-margin-small-top"><?php echo app('translator')->get('message.years_of_exl'); ?></p>
                        </div>
                        <div class="uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m uk-margin-medium-top" data-uk-grid>
                            <div>
                                <div class="uk-card uk-card-secondary uk-card-body uk-border-rounded">
                                    <div class="uk-flex uk-flex-middle">
                                        <div class="uk-margin-small-right">
                                            <i class="in-icon-wrap circle small green">FX</i>
                                        </div>
                                        <div>
                                            <h6 class="uk-margin-remove">Forex</h6>
                                        </div>
                                    </div>
                                    <p><?php echo app('translator')->get('message.trade_70_major'); ?></p>
                                    <a href="#" class="uk-button uk-button-text uk-margin-small-top"><?php echo app('translator')->get('message.read_more'); ?><i class="fas fa-angle-right uk-margin-small-left"></i></a>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-secondary uk-card-body uk-border-rounded">
                                    <div class="uk-flex uk-flex-middle">
                                        <div class="uk-margin-small-right">
                                            <i class="in-icon-wrap circle small red">MX</i>
                                        </div>
                                        <div>
                                            <h6 class="uk-margin-remove"><?php echo app('translator')->get('message.metls'); ?></h6>
                                        </div>
                                    </div>
                                    <p><?php echo app('translator')->get('message.trade_metal_comodities'); ?>.</p>
                                    <a href="#" class="uk-button uk-button-text uk-margin-small-top"><?php echo app('translator')->get('message.read_more'); ?><i class="fas fa-angle-right uk-margin-small-left"></i></a>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-secondary uk-card-body uk-border-rounded">
                                    <div class="uk-flex uk-flex-middle">
                                        <div class="uk-margin-small-right">
                                            <i class="in-icon-wrap circle small blue">IX</i>
                                        </div>
                                        <div>
                                            <h6 class="uk-margin-remove">Indices</h6>
                                        </div>
                                    </div>
                                    <p><?php echo app('translator')->get('message.trade_major_and_minor'); ?></p>
                                    <a href="#" class="uk-button uk-button-text uk-margin-small-top"><?php echo app('translator')->get('message.read_more'); ?><i class="fas fa-angle-right uk-margin-small-left"></i></a>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-secondary uk-card-body uk-border-rounded">
                                    <div class="uk-flex uk-flex-middle">
                                        <div class="uk-margin-small-right">
                                            <i class="in-icoMutliple Instrumentsn-wrap circle small grey">SX</i>
                                        </div>
                                        <div>
                                            <h6 class="uk-margin-remove"><?php echo app('translator')->get('message.shres'); ?></h6>
                                        </div>
                                    </div>
                                    <p><?php echo app('translator')->get('message.hundreds_of_companies'); ?>.</p>
                                    <a href="#" class="uk-button uk-button-text uk-margin-small-top"><?php echo app('translator')->get('message.read_more'); ?><i class="fas fa-angle-right uk-margin-small-left"></i></a>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-secondary uk-card-body uk-border-rounded">
                                    <div class="uk-flex uk-flex-middle">
                                        <div class="uk-margin-small-right">
                                            <i class="in-icon-wrap circle small grey">CX</i>
                                        </div>
                                        <div>
                                            <h6 class="uk-margin-remove"><?php echo app('translator')->get('message.Cryptocurrencies'); ?></h6>
                                        </div>
                                    </div>
                                    <p><?php echo app('translator')->get('message.trde_bitcn'); ?></p>
                                    <a href="#" class="uk-button uk-button-text uk-margin-small-top"><?php echo app('translator')->get('message.read_more'); ?><i class="fas fa-angle-right uk-margin-small-left"></i></a>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-secondary uk-card-body uk-border-rounded">
                                    <div class="uk-flex uk-flex-middle">
                                        <div class="uk-margin-small-right">
                                            <i class="in-icon-wrap circle small grey">EX</i>
                                        </div>
                                        <div>
                                            <h6 class="uk-margin-remove">Energies</h6>
                                        </div>
                                    </div>
                                    <p><?php echo app('translator')->get('message.discover_opportunities'); ?>.</p>
                                    <a href="#" class="uk-button uk-button-text uk-margin-small-top"><?php echo app('translator')->get('message.read_more'); ?><i class="fas fa-angle-right uk-margin-small-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->

        <!-- section stats begin -->
        <div class="uk-section in-liquid-16">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-1-2@m uk-text-center">
                        <h2><?php echo app('translator')->get('message.trade_with'); ?> <span class="in-highlight"><?php echo app('translator')->get('message.world_leading'); ?></span> <?php echo app('translator')->get('message.broker'); ?>.</h2>
                    </div>
                </div>
                <div class="uk-grid uk-child-width-1-2@s uk-child-width-1-4@m uk-text-center" data-uk-grid>
                    <div>
                        <div class="in-liquid-16-counter">
                            <img class="uk-margin-remove" src="<?php echo e(asset('front/img/in-lazy.gif')); ?>" data-src="<?php echo e(asset('front/img/in-liquid-icon-22.svg')); ?>" alt="sample-icon" width="92" height="92" data-uk-img>
                            <h3 class="uk-text-muted uk-margin-top uk-margin-remove-bottom">
                                <span class="count" data-counter-end="1000" data-counter-append=" clients">1k+ clients</span>
                            </h3>
                        </div>
                    </div>
                    <div>
                        <div class="in-liquid-16-counter">
                            <img class="uk-margin-remove" src="<?php echo e(asset('front/img/in-lazy.gif')); ?>" data-src="<?php echo e(asset('front/img/in-liquid-icon-24.svg')); ?>" alt="sample-icon" width="92" height="92" data-uk-img>
                            <h3 class="uk-text-muted uk-margin-top uk-margin-remove-bottom">
                                <span class="count" data-counter-end="90" data-counter-append=" awards"><?php echo app('translator')->get('message.awards'); ?></span>
                            </h3>
                        </div>
                    </div>
                    <div>
                        <div class="in-liquid-16-counter">
                            <img class="uk-margin-remove" src="<?php echo e(asset('front/img/in-lazy.gif')); ?>" data-src="<?php echo e(asset('front/img/in-liquid-icon-25.svg')); ?>" alt="sample-icon" width="92" height="92" data-uk-img>
                            <h3 class="uk-text-muted uk-margin-top uk-margin-remove-bottom">
                                <span class="count" data-counter-end="5" data-counter-append=" customer service"><?php echo app('translator')->get('message.five_star'); ?></span>
                            </h3>
                        </div>
                    </div>
                    <div>
                        <div class="in-liquid-16-counter">
                            <img class="uk-margin-remove" src="<?php echo e(asset('front/img/in-lazy.gif')); ?>" data-src="<?php echo e(asset('front/img/in-liquid-icon-23.svg')); ?>" alt="sample-icon" width="92" height="92" data-uk-img>
                            <h3 class="uk-text-muted uk-margin-top uk-margin-remove-bottom">
                                <span class="count" data-counter-end="4" data-counter-append=" industry regulations"><?php echo app('translator')->get('message.industry_regulations'); ?><span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->

        <!-- section cta begin -->
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1 in-card-16">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                            <div class="uk-grid uk-flex-middle" data-uk-grid>
                                <div class="uk-width-1-1 uk-width-expand@m">
                                    <h3><?php echo app('translator')->get('message.trade_like_a_pro'); ?></h3>
                                    <p><?php echo app('translator')->get('message.trade_cdfs'); ?></p>
                                </div>
                                <div class="uk-width-auto">
                                    <a class="uk-button uk-button-primary uk-border-rounded" href="<?php echo e(route('register')); ?>"><?php echo app('translator')->get('message.open_acount'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->

        <!-- section compliment begin -->
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1 uk-flex uk-flex-center">
                        <div class="uk-width-3-4@m uk-text-center">
                            <h2 class="uk-margin-small-bottom"><?php echo app('translator')->get('message.compliment_trading'); ?></h2>
                            <p class="uk-text-lead uk-text-muted uk-margin-remove"><?php echo app('translator')->get('message.axepro_clients'); ?></p>
                        </div>
                    </div>
                    <div class="uk-grid uk-grid-large uk-child-width-1-4@m uk-margin-medium-top" data-uk-grid>
                        <div class="uk-flex">
                            <div>
                                <h3><?php echo app('translator')->get('message.calender'); ?></h3>
                                <p><?php echo app('translator')->get('message.econs_earnings'); ?></p>
                            </div>
                        </div>
                        <div class="uk-flex">
                            <div>
                                <h3><?php echo app('translator')->get('message.analysis'); ?></h3>
                                <p><?php echo app('translator')->get('message.trading_central'); ?></p>
                            </div>
                        </div>
                        <div class="uk-flex">
                            <div>
                                <h3><?php echo app('translator')->get('message.reviews'); ?></h3>
                                <p><?php echo app('translator')->get('message.daily_market_reviews'); ?></p>
                            </div>
                        </div>
                        <div class="uk-flex">
                            <div>
                                <h3><?php echo app('translator')->get('message.knowledge'); ?></h3>
                                <p><?php echo app('translator')->get('message.education'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->

    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadleo/Documents/Projects/axeprogroup/axepro/resources/views/front/index.blade.php ENDPATH**/ ?>