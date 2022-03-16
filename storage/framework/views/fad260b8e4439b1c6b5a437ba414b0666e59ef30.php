<?php $__env->startSection('title', 'Market News'); ?>

<?php $__env->startSection('news-menu-item', 'uk-active'); ?>

<?php $__env->startSection('content'); ?>
<main id="main" class="about-us-page">

    <div class="uk-section uk-margin-small-top">
        <div class="uk-container">
            <div class="uk-grid" data-uk-grid="">
                <div class="uk-width-2-3@m uk-first-column">
                    <div class="uk-child-width-1-2@m in-blog-1 uk-grid uk-grid-stack" data-uk-grid="">
                        <div class="uk-width-1-1 uk-first-column">
                            <article class="uk-card uk-card-default uk-border-rounded">
                                <div class="uk-card-body">
                                    <h1>
                                        Forex & Financial News and AxePro Analytics
                                    </h1>
                                </div>
                            </article>
                        </div>

                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container" style="width: 800px">
                            <div class="tradingview-widget-container__widget"></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>{"feedMode": "all_symbols","colorTheme": "light","isTransparent": true,"displayMode": "regular","width": "700","height": "800","locale": "en"}</script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                    <!-- module pagination begin -->
                    <!-- <ul class="uk-pagination uk-flex-center uk-margin-medium-top">
                            <li class="uk-active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fas fa-angle-right fa-xs"></i></a></li>
                        </ul> -->
                    <!-- module pagination end -->
                </div>
                <div class="uk-width-expand@m">
                    <!-- widget content begin -->
                    <aside class="uk-margin-medium-bottom">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                            <h5 class="uk-heading-bullet uk-text-uppercase uk-margin-remove-bottom">Popular</h5>
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>
                                <script type="text/javascript"
                                    src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
                                    {  "feedMode": "market","market": "crypto", "colorTheme": "white", "isTransparent": true, "displayMode": "regular", "width": "300", "height": "500", "locale": "en" }
                                </script>
                            </div>
                            <!-- TradingView Widget END -->
                        </div>
                    </aside>
                    <!-- widget content end -->
                </div>
            </div>
        </div>
    </div>

</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadleo/Documents/Projects/axeprogroup/axepro/resources/views/front/market-news.blade.php ENDPATH**/ ?>