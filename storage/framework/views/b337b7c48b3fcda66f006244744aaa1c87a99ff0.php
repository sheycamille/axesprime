<?php $__env->startSection('title', 'Cryptocurrencies'); ?>

<?php $__env->startSection('crypto-menu-item', 'active'); ?>

<?php $__env->startSection('content'); ?>
<main id="main" class="crypto-page">

        <div class="uk-section in-liquid-6 in-offset-top-10">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-5-6@m uk-background-contain uk-background-center-center">
                        <div class="uk-text-center">
                            <h1 class="uk-margin-remove">Cryptocurrencies Trading</h1>
                            <p class="uk-text-lead uk-text-muted uk-margin-small-top">Trade CFDs on Cryptocurrencies with the World’s #1 FX Broker1 and benefit from tight spreads and fast order execution.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="uk-section in-liquid-13">
            <div class="uk-container">
                <div class="uk-grid-large uk-child-width-1-2@m uk-grid" data-uk-grid="">
                    <div class="uk-first-column">

                        <h3 class="uk-margin-remove">Trade the world's most sought-after asset class - cryptocurrencies - including Bitcoin, Ethereum and Litecoin.</h3>
                        <ul class="uk-subnav uk-subnav-divider uk-margin-medium-top uk-text-small" data-uk-margin="">
                            <li class="uk-first-column"><i class="fas fa-money-bill-wave uk-margin-small-right"></i>Competitive pricing</li>
                            <li><i class="fas fa-shapes uk-margin-small-right"></i>Trading flexibility</li>
                            <li><i class="fas fa-award uk-margin-small-right"></i>Winning platform</li>
                        </ul>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-border-rounded uk-box-shadow-medium">
                            <div class="uk-card-body">
                                <table class="uk-table uk-table-striped">
                                    <thead>
                                        <tr>
                                            <th>Markets</th>
                                            <th>Sell</th>
                                            <th>Buy</th>
                                            <th class="uk-visible@s">Change%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img class="uk-margin-small-right" src="<?php echo e(asset('front/img/in-liquid-fxeur.svg')); ?>" data-src="<?php echo e(asset('front/img/in-liquid-fxeur.svg')); ?>" alt="fx-flag" width="29" height="17" data-uk-img=""><span class="in-pairname">EURUSD</span></td>
                                            <td><span class="uk-label uk-label-danger uk-border-pill">1.09554</span></td>
                                            <td><span class="uk-label uk-label-danger uk-border-pill">1.09555</span></td>
                                            <td class="uk-visible@s">0.1</td>
                                        </tr>
                                        <tr>
                                            <td><img class="uk-margin-small-right" src="<?php echo e(asset('front/img/in-liquid-fxaud.svg')); ?>" data-src="<?php echo e(asset('front/img/in-liquid-fxaud.svg')); ?>" alt="fx-flag" width="29" height="17" data-uk-img=""><span class="in-pairname">AUDUSD</span></td>
                                            <td><span class="uk-label uk-label-danger uk-border-pill">0.67017</span></td>
                                            <td><span class="uk-label uk-label-success uk-border-pill">0.67019</span></td>
                                            <td class="uk-visible@s">0.2</td>
                                        </tr>
                                        <tr>
                                            <td><img class="uk-margin-small-right" src="<?php echo e(asset('front/img/in-liquid-fxjpy.svg')); ?>" data-src="<?php echo e(asset('front/img/in-liquid-fxjpy.svg')); ?>" alt="fx-flag" width="29" height="17" data-uk-img=""><span class="in-pairname">USDJPY</span></td>
                                            <td><span class="uk-label uk-label-success uk-border-pill">109.792</span></td>
                                            <td><span class="uk-label uk-label-danger uk-border-pill">109.793</span></td>
                                            <td class="uk-visible@s">0.0</td>
                                        </tr>
                                        <tr>
                                            <td><img class="uk-margin-small-right" src="<?php echo e(asset('front/img/in-liquid-fxcad.svg')); ?>" data-src="<?php echo e(asset('front/img/in-liquid-fxcad.svg')); ?>" alt="fx-flag" width="29" height="17" data-uk-img=""><span class="in-pairname">USDCAD</span></td>
                                            <td><span class="uk-label uk-label-success uk-border-pill">1.32900</span></td>
                                            <td><span class="uk-label uk-label-success uk-border-pill">1.32909</span></td>
                                            <td class="uk-visible@s">0.3</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <p class="uk-text-small uk-text-center">Check your platform for the most up to date prices.</p>
                    </div>
                </div>

            </div>
        </div>

    <?php echo $__env->make('front.prod-section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadleo/Documents/Projects/axeprogroup/axepro/resources/views/front/crypto.blade.php ENDPATH**/ ?>