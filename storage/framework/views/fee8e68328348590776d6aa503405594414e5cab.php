<?php $__env->startSection('title', 'Contact Us'); ?>

<?php $__env->startSection('contact-menu-item', 'uk-active'); ?>

<?php $__env->startSection('content'); ?>
<main id="main" class="contact-us-page">

        <div class="uk-section in-liquid-6 in-offset-top-10">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-5-6@m uk-background-contain uk-background-center-center">
                        <div class="uk-text-center">
                            <h1 class="uk-margin-remove"><?php echo app('translator')->get('message.contact.contact_us'); ?></h1>
                            <h2 class="uk-margin"><?php echo app('translator')->get('message.contact.customer_service'); ?> <span class="in-highlight">5*</span> </h2>
                            <p class="uk-text-lead uk-text-muted uk-margin-small-top"><?php echo app('translator')->get('message.contact.question'); ?>!</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- section content begin -->
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-1-2@m uk-text-center">
                        <h2 class="uk-margin-small-bottom"><?php echo app('translator')->get('message.contact.do_not_hesitate'); ?> <span class="in-highlight"><?php echo app('translator')->get('message.contact.reach_out'); ?>.</span></h2>
                        <p class="uk-text-lead uk-text-muted uk-margin-remove"><?php echo app('translator')->get('message.contact.form'); ?></p>
                    </div>
                    <div class="uk-width-1-1@m uk-margin-large-top">
                        <div class="uk-grid uk-grid-large uk-child-width-1-2@m" data-uk-grid>
                            <div>
                                <form id="contact-form" class="uk-form uk-grid-small" data-uk-grid>
                                    <div class="uk-width-1-1">
                                        <input class="uk-input uk-border-rounded" id="name" name="name" type="text" placeholder="<?php echo app('translator')->get('message.contact.name'); ?>">
                                    </div>
                                    <div class="uk-width-1-1">
                                        <input class="uk-input uk-border-rounded" id="email" name="email" type="email" placeholder="<?php echo app('translator')->get('message.contact.email'); ?>">
                                    </div>
                                    <div class="uk-width-1-1">
                                        <input class="uk-input uk-border-rounded" id="subject" name="subject" type="text" placeholder="<?php echo app('translator')->get('message.contact.subject'); ?>">
                                    </div>
                                    <div class="uk-width-1-1">
                                        <textarea class="uk-textarea uk-border-rounded" id="message" name="message" rows="6" placeholder="Message"></textarea>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <button class="uk-width-1-1 uk-button uk-button-primary uk-border-rounded" id="sendemail" type="submit" name="submit"><?php echo app('translator')->get('message.contact.message'); ?></button>
                                    </div>
                                </form>
                            </div>
                            <div>
                                <h4 class="uk-margin-remove-bottom"><?php echo app('translator')->get('message.contact.submissions'); ?></h4>
                                <p class="uk-margin-small-top"><?php echo app('translator')->get('message.contact.business_plan'); ?></p>
                                <div class="uk-flex uk-flex-middle uk-margin">
                                    <div class="uk-margin-small-right">
                                        <i class="fas fa-envelope fa-sm in-icon-wrap circle small primary-color"></i>
                                    </div>
                                    <div>
                                        <p class="uk-margin-remove"><a href="mailto:support@axeprogroup.com">support@axeprogroup.com</a></p>
                                    </div>
                                </div>
                                <div class="uk-flex uk-flex-middle uk-margin">
                                    <div class="uk-margin-small-right">
                                        <i class="fas fa-phone fa-sm in-icon-wrap circle small primary-color"></i>
                                    </div>
                                    <div>
                                        <p class="uk-margin-remove"><a href="tel:+18028519171"> (+1) 802-851-9171</a></p>
                                    </div>
                                </div>
                                <hr class="uk-margin-medium">
                                <h4 class="uk-margin-bottom">Our Office</h4>
                                <p>
                                    <?php echo app('translator')->get('message.contact.london_office'); ?>: 20-22 Wenlock Road, London, England, N1 7GU.
                                    <br>
                                    <?php echo app('translator')->get('message.contact.canada_office'); ?>: Exchange Tower, 130 King Street West, Toronto, ON, Canada M5X 1A9
                                    <br>
                                    <?php echo app('translator')->get('message.contact.france_office'); ?>: 29 rue du Louvre 75002 Paris
                                </p>
                            </div>
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

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadleo/Documents/Projects/axeprogroup/axepro/resources/views/front/contact.blade.php ENDPATH**/ ?>