<?php $__env->startSection('title', 'Credit Score'); ?>

<?php $__env->startSection('credit-score-menu-item', 'active'); ?>

<?php $__env->startSection('content'); ?>
<main id="main" class="credit-score-page">

        <div class="uk-section in-liquid-6 in-offset-top-10">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-5-6@m uk-background-contain uk-background-center-center" data-uk-img="">
                        <div class="uk-text-center">
                            <h1 class="uk-margin-remove"><?php echo app('translator')->get('message.credit_score.what_is_credit_score'); ?>?</h1>
                            <p class="uk-text-lead uk-text-muted uk-margin-small-top"><?php echo app('translator')->get('message.credit_score.an_assesment'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-grid uk-grid-large uk-child-width-1-3@m uk-margin-medium-top" data-uk-grid="">
                        <div class="uk-flex uk-flex-left uk-first-column">
                            <div class="uk-margin-right">
                                <i class="fas fa-leaf fa-lg in-icon-wrap circle primary-color"></i>
                            </div>
                            <div>
                                <p><?php echo app('translator')->get('message.credit_score.algorithm'); ?></p>
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-left">
                            <div class="uk-margin-right">
                                <i class="fas fa-hourglass-end fa-lg in-icon-wrap circle primary-color"></i>
                            </div>
                            <div>
                                <p><?php echo app('translator')->get('message.credit_score.rates'); ?>. <br><br> <span style="color: #b2bec3"><?php echo app('translator')->get('message.credit_score.high_score'); ?></span></p>
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-left">
                            <div class="uk-margin-right">
                                <i class="fas fa-flag fa-lg in-icon-wrap circle primary-color"></i>
                            </div>
                            <div>
                                <p><?php echo app('translator')->get('message.credit_score.predict'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1 uk-flex uk-flex-center">
                        <div class="uk-width-3-4@m uk-text-center">
                            <h2 class="uk-margin-small-bottom"> <span class="in-highlight">Credit Safe</span></h2>
                            <p class="uk-text-lead uk-text-muted uk-margin-remove" style="font-size: 1rem;"><?php echo app('translator')->get('message.credit_score.creditsafe'); ?></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="uk-section in-liquid-7 in-offset-top-10">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-5-6@m uk-background-contain uk-background-center-center" style="background-image: url(<?php echo e(asset('front/img/in-liquid-7-bg.png')); ?>);" data-uk-img="">
                        <div class="uk-text-center">
                            <h2 class="uk-margin-remove"><?php echo app('translator')->get('message.why_trade'); ?></h2>
                            <p class="uk-text-lead uk-text-muted uk-margin-small-top"><?php echo app('translator')->get('message.improve_result'); ?></p>
                        </div>
                        <div class="uk-grid-medium uk-child-width-1-3@s uk-child-width-1-3@m uk-text-center uk-margin-top uk-grid" data-uk-grid="">
                            <div class="uk-first-column">
                                <img src="<?php echo e(asset('front/img/in-liquid-award.svg')); ?>" data-src="<?php echo e(asset('front/img/in-liquid-award.svg')); ?>" alt="wave-award" width="71" height="58" data-uk-img="">
                                <h6 class="uk-margin-small-top uk-margin-remove-bottom"><?php echo app('translator')->get('message.best_cdf'); ?></h6>
                                <p class="uk-text-small uk-margin-remove-top"><?php echo app('translator')->get('message.summit'); ?></p>
                            </div>
                            <div>
                                <img src="<?php echo e(asset('front/img/in-liquid-award.svg')); ?>" data-src="<?php echo e(asset('front/img/in-liquid-award.svg')); ?>" alt="wave-award" width="71" height="58" data-uk-img="">
                                <h6 class="uk-margin-small-top uk-margin-remove-bottom"><?php echo app('translator')->get('message.execution'); ?></h6>
                                <p class="uk-text-small uk-margin-remove-top"><?php echo app('translator')->get('message.expo'); ?></p>
                            </div>
                            <div>
                                <img src="<?php echo e(asset('front/img/in-liquid-award.svg')); ?>" data-src="<?php echo e(asset('front/img/in-liquid-award.svg')); ?>" alt="wave-award" width="71" height="58" data-uk-img="">
                                <h6 class="uk-margin-small-top uk-margin-remove-bottom"><?php echo app('translator')->get('message.best_platform'); ?></h6>
                                <p class="uk-text-small uk-margin-remove-top"><?php echo app('translator')->get('message.london_summit'); ?></p>
                            </div>
                        </div>
                        <img class="uk-align-center" src="<?php echo e(asset('front/img/in-liquid-7-mockup.png')); ?>" data-src="<?php echo e(asset('front/img/in-liquid-7-mockup.png')); ?>" alt="sample-images" width="691" height="420" data-uk-img="">
                        <div class="uk-grid-divider uk-child-width-1-2@s uk-child-width-1-4@m uk-text-center in-offset-top-10 uk-grid" data-uk-grid="">
                            <div class="uk-first-column">
                                <h2 class="uk-margin-small-bottom">~30ms</h2>
                                <p class="uk-text-small uk-text-uppercase uk-margin-remove-top"><?php echo app('translator')->get('message.speed'); ?>*</p>
                            </div>
                            <div>
                                <h2 class="uk-margin-small-bottom">24/5</h2>
                                <p class="uk-text-small uk-text-uppercase uk-margin-remove-top"><?php echo app('translator')->get('message.support'); ?></p>
                            </div>
                            <div>
                                <h2 class="uk-margin-small-bottom">0.0</h2>
                                <p class="uk-text-small uk-text-uppercase uk-margin-remove-top"><?php echo app('translator')->get('message.spread'); ?></p>
                            </div>
                            <div>
                                <h2 class="uk-margin-small-bottom">150+</h2>
                                <p class="uk-text-small uk-text-uppercase uk-margin-remove-top"><?php echo app('translator')->get('message.instruments'); ?></p>
                            </div>
                        </div>
                        <div class="uk-text-center uk-margin-medium-top">
                            <a class="uk-button uk-button-primary uk-border-rounded uk-margin-small-right" href="#"><?php echo app('translator')->get('message.creat_account'); ?><i class="fas fa-angle-right uk-margin-small-left"></i></a>
                            <a class="uk-button uk-button-secondary uk-border-rounded" href="#"><?php echo app('translator')->get('message.discover'); ?><i class="fas fa-angle-right uk-margin-small-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="uk-section uk-section-secondary in-liquid-10">
            <div class="uk-container uk-light">
                <div class="uk-grid-medium uk-child-width-1-3@m uk-flex uk-flex-middle uk-grid" data-uk-grid="">
                    <div class="uk-first-column">
                        <h2><?php echo app('translator')->get('message.choose_platform'); ?></h2>
                        <p class="uk-text-lead"><?php echo app('translator')->get('message.platforms'); ?>.</p>
                        <a class="uk-button uk-button-default uk-border-rounded uk-margin-top" href="#"><?php echo app('translator')->get('message.start_trading'); ?><i class="fas fa-angle-right uk-margin-small-left"></i></a>
                    </div>
                    <div>
                        <div class="uk-card uk-card-secondary uk-card-body uk-border-rounded uk-text-center">
                            <img class="uk-margin-small-bottom" src="<?php echo e(asset('front/img/in-liquid-icon-17.svg')); ?>" data-src="<?php echo e(asset('front/img/in-liquid-icon-17.svg')); ?>" alt="wave-award" width="72" height="72" data-uk-img="">
                            <h3 class="uk-margin-top">AxePro MeTaTrader5</h3>

                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-secondary uk-card-body uk-border-rounded uk-text-center">
                            <img class="uk-margin-small-bottom" src="<?php echo e(asset('front/img/in-liquid-icon-18.svg')); ?>" data-src="<?php echo e(asset('front/img/in-liquid-icon-18.svg')); ?>" alt="wave-award" width="72" height="72" data-uk-img="">
                            <h3 class="uk-margin-top"><?php echo app('translator')->get('message.start_trading'); ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                                <span class="count" data-counter-end="1000" data-counter-append=" clients"><?php echo app('translator')->get('message.clients'); ?></span>
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

        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1 in-card-16">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                            <div class="uk-grid uk-flex-middle" data-uk-grid="">
                                <div class="uk-width-1-1 uk-width-expand@m uk-first-column">
                                    <h3><?php echo app('translator')->get('message.trade_like_a_pro'); ?>!</h3>
                                    <p><?php echo app('translator')->get('message.trade_cdfs'); ?>.</p>
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

</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadleo/Documents/Projects/axeprogroup/axepro/resources/views/front/credit-score.blade.php ENDPATH**/ ?>