<?php $__env->startSection('title', 'Terms of Service'); ?>

<?php $__env->startSection('terms-of-serv-menu-item', 'active'); ?>

<?php $__env->startSection('content'); ?>

<main id="main" class="security-page">

    <div class="uk-section in-liquid-6 in-offset-top-10">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-5-6@m uk-background-contain uk-background-center-center">
                    <div class="uk-text-center">
                        <h1 class="uk-margin-remove"><?php echo app('translator')->get('message.terms_service.terms'); ?> </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1 uk-flex uk-flex-center">
                    <div class="uk-width-3-4@m uk-margin-medium-bottom ">
                        <h3 class="uk-margin-small-bottom" style="text-align: start;">
                            <?php echo app('translator')->get('message.terms_service.client'); ?>
                        </h3>
                        <p class="uk-text-lead uk-text-muted uk-margin-remove "
                            style="text-align: start; font-size: 1rem;">
                            <?php echo app('translator')->get('message.terms_service.b1'); ?>
                        </p>
                    </div>
                </div>
                <div class="uk-width-1-1 uk-flex uk-flex-center">
                    <div class="uk-width-3-4@m uk-margin-medium-bottom ">
                        <h3 class="uk-margin-small-bottom" style="text-align: start;">
                            <?php echo app('translator')->get('message.terms_service.risk'); ?>
                        </h3>
                        <p class="uk-text-lead uk-text-muted uk-margin-remove "
                            style="text-align: start; font-size: 1rem;"><?php echo app('translator')->get('message.terms_service.b3'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1 in-content-10">

                    <div class="uk-grid-divider uk-child-width-1-1@m uk-child-width-1-2@s uk-margin-medium-top uk-grid"
                        data-uk-grid="">
                        <div class="uk-first-column">
                            <h4 class="uk-heading-bullet "><?php echo app('translator')->get('message.terms_service.details'); ?>
                            </h4>
                            <div class="uk-grid uk-grid-small" data-uk-grid="">
                                <div class="uk-width-expand@m uk-first-column">
                                    <p> <?php echo app('translator')->get('message.terms_service.b4'); ?>
                                        <br><br><?php echo app('translator')->get('message.terms_service.b5'); ?><br><br><?php echo app('translator')->get('message.terms_service.b6'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-visible@m">
                            <h4 class="uk-heading-bullet"><?php echo app('translator')->get('message.headings.head'); ?></h4>
                            <div class="uk-grid uk-grid-small" data-uk-grid="">
                                <div class="uk-width-expand@m uk-first-column">
                                    <p>- <?php echo app('translator')->get('message.headings.b1'); ?>. <br><br>- <?php echo app('translator')->get('message.headings.b2'); ?> <br><br>-
                                        <?php echo app('translator')->get('message.headings.b3'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-visible@m">
                            <h4 class="uk-heading-bullet"><?php echo app('translator')->get('message.application.head'); ?>
                            </h4>
                            <div class="uk-grid uk-grid-small" data-uk-grid="">
                                <div class="uk-width-expand@m uk-first-column">
                                    <p><?php echo app('translator')->get('message.application.b1'); ?> . <br><br><?php echo app('translator')->get('message.application.b2'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-visible@m">
                            <h4 class="uk-heading-bullet"><?php echo app('translator')->get('message.eligibility.head'); ?>
                            </h4>
                            <div class="uk-grid uk-grid-small" data-uk-grid="">
                                <div class="uk-width-expand@m uk-first-column">
                                    <p><?php echo app('translator')->get('message.eligibility.reg'); ?>
                                        . <br><br><?php echo app('translator')->get('message.eligibility.b1'); ?>
                                        <br><br><?php echo app('translator')->get('message.eligibility.eligibl'); ?>
                                        <br><br><?php echo app('translator')->get('message.eligibility.b2'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-visible@m">
                            <h4 class="uk-heading-bullet"><?php echo app('translator')->get('message.offerings.head'); ?>
                            </h4>
                            <div class="uk-grid uk-grid-small" data-uk-grid="">
                                <div class="uk-width-expand@m uk-first-column">
                                    <p><?php echo app('translator')->get('message.offerings.b1'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-visible@m">
                            <h4 class="uk-heading-bullet"><?php echo app('translator')->get('message.communication.head'); ?></h4>
                            <div class="uk-grid uk-grid-small" data-uk-grid="">
                                <div class="uk-width-expand@m uk-first-column">
                                    <p><?php echo app('translator')->get('message.communication.b1'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="uk-visible@m">
                            <h4 class="uk-heading-bullet"><?php echo app('translator')->get('message.funding.head'); ?>
                            </h4>
                            <div class="uk-grid uk-grid-small" data-uk-grid="">
                                <div class="uk-width-expand@m uk-first-column">
                                    <p><?php echo app('translator')->get('message.funding.b1'); ?> . <br><br><?php echo app('translator')->get('message.funding.b2'); ?>
                                        <br><br><?php echo app('translator')->get('message.funding.b3'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-visible@m">
                            <h4 class="uk-heading-bullet"><?php echo app('translator')->get('message.refund_policy.head'); ?></h4>
                            <div class="uk-grid uk-grid-small" data-uk-grid="">
                                <div class="uk-width-expand@m uk-first-column">
                                    <p><?php echo app('translator')->get('message.refund_policy.b1'); ?>
                                        . <br><br><?php echo app('translator')->get('message.refund_policy.b2'); ?>
                                        <br><br><?php echo app('translator')->get('message.refund_policy.b3'); ?>
                                        <BR><?php echo app('translator')->get('message.refund_policy.b4'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-visible@m">
                            <h4 class="uk-heading-bullet"><?php echo app('translator')->get('message.client_fund.head'); ?>
                            </h4>
                            <div class="uk-grid uk-grid-small" data-uk-grid="">
                                <div class="uk-width-expand@m uk-first-column">
                                    <p><?php echo app('translator')->get('message.client_fund.b1'); ?>
                                        . <br><br><?php echo app('translator')->get('message.client_fund.b2'); ?>
                                        <br><br><?php echo app('translator')->get('message.client_fund.b3'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-visible@m">
                            <h4 class="uk-heading-bullet"><?php echo app('translator')->get('message.fund_transfer.head'); ?>
                            </h4>
                            <div class="uk-grid uk-grid-small" data-uk-grid="">
                                <div class="uk-width-expand@m uk-first-column">
                                    <p><?php echo app('translator')->get('message.fund_transfer.b1'); ?> . <br><br><?php echo app('translator')->get('message.fund_transfer.b2'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-visible@m">
                            <h4 class="uk-heading-bullet"><?php echo app('translator')->get('message.responsibility.head'); ?> </h4>
                            <div class="uk-grid uk-grid-small" data-uk-grid="">
                                <div class="uk-width-expand@m uk-first-column">
                                    <p>-<?php echo app('translator')->get('message.responsibility.b1'); ?> . <br><br>-
                                        <?php echo app('translator')->get('message.responsibility.b2'); ?>
                                        <br><br>-<?php echo app('translator')->get('message.responsibility.b3'); ?> <br><br>-
                                        <?php echo app('translator')->get('message.responsibility.b4'); ?>
                                        <br><br>- <?php echo app('translator')->get('message.responsibility.b5'); ?>
                                        <br><br><?php echo app('translator')->get('message.responsibility.b6'); ?>
                                        <br><br><?php echo app('translator')->get('message.responsibility.b7'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-visible@m">
                            <h4 class="uk-heading-bullet"> <?php echo app('translator')->get('message.bonus.head'); ?> </h4>
                            <div class="uk-grid uk-grid-small" data-uk-grid="">
                                <div class="uk-width-expand@m uk-first-column">
                                    <p><?php echo app('translator')->get('message.bonus.b1'); ?> . <br><br><?php echo app('translator')->get('message.bonus.b2'); ?>
                                        <br><br><?php echo app('translator')->get('message.bonus.b3'); ?>
                                        <br><br><?php echo app('translator')->get('message.bonus.b4'); ?><br><br><?php echo app('translator')->get('message.bonus.b5'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-visible@m">
                            <h4 class="uk-heading-bullet"><?php echo app('translator')->get('message.seclusion.head'); ?>
                            </h4>
                            <div class="uk-grid uk-grid-small" data-uk-grid="">
                                <div class="uk-width-expand@m uk-first-column">
                                    <p><?php echo app('translator')->get('message.seclusion.b1'); ?>
                                        <br><br><?php echo app('translator')->get('message.seclusion.b2'); ?> <br><br><?php echo app('translator')->get('message.seclusion.b3'); ?>
                                        <br><br><?php echo app('translator')->get('message.seclusion.b4'); ?> <br><br><?php echo app('translator')->get('message.seclusion.b5'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-visible@m">
                            <h4 class="uk-heading-bullet"><?php echo app('translator')->get('message.fees.head'); ?></h4>
                            <div class="uk-grid uk-grid-small" data-uk-grid="">
                                <div class="uk-width-expand@m uk-first-column">
                                    <p><?php echo app('translator')->get('message.fees.b1'); ?> . <br><br><?php echo app('translator')->get('message.fees.b2'); ?>
                                        <br><br><?php echo app('translator')->get('message.fees.b3'); ?> <br><br><?php echo app('translator')->get('message.fees.b4'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-visible@m">
                            <h4 class="uk-heading-bullet"><?php echo app('translator')->get('message.margin.head'); ?>
                            </h4>
                            <div class="uk-grid uk-grid-small" data-uk-grid="">
                                <div class="uk-width-expand@m uk-first-column">
                                    <p><?php echo app('translator')->get('message.margin.b1'); ?> . <br><br><?php echo app('translator')->get('message.margin.b2'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-visible@m">
                            <h4 class="uk-heading-bullet"><?php echo app('translator')->get('message.abritage.head'); ?></h4>
                            <div class="uk-grid uk-grid-small" data-uk-grid="">
                                <div class="uk-width-expand@m uk-first-column">
                                    <p><?php echo app('translator')->get('message.abritage.b1'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-visible@m">
                            <h4 class="uk-heading-bullet"><?php echo app('translator')->get('message.derivatives_policy.head'); ?></h4>
                            <div class="uk-grid uk-grid-small" data-uk-grid="">
                                <div class="uk-width-expand@m uk-first-column">
                                    <p><?php echo app('translator')->get('message.derivatives_policy.b1'); ?>
                                        <br><br><?php echo app('translator')->get('message.derivatives_policy.b2'); ?>
                                        <br><br><?php echo app('translator')->get('message.derivatives_policy.b3'); ?>
                                        <br><br><?php echo app('translator')->get('message.derivatives_policy.b4'); ?>
                                        <br><br><?php echo app('translator')->get('message.derivatives_policy.b5'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-visible@m">
                            <h4 class="uk-heading-bullet"><?php echo app('translator')->get('message.investment_advice.head'); ?> </h4>
                            <div class="uk-grid uk-grid-small" data-uk-grid="">
                                <div class="uk-width-expand@m uk-first-column">
                                    <p><?php echo app('translator')->get('message.investment_advice.b1'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-visible@m">
                            <h4 class="uk-heading-bullet"><?php echo app('translator')->get('message.disputes.head'); ?></h4>
                            <div class="uk-grid uk-grid-small" data-uk-grid="">
                                <div class="uk-width-expand@m uk-first-column">
                                    <p><?php echo app('translator')->get('message.disputes.b1'); ?>
                                        <br><br><?php echo app('translator')->get('message.disputes.b2'); ?>
                                        <br><br><?php echo app('translator')->get('message.disputes.b3'); ?><br><br><?php echo app('translator')->get('message.disputes.b4'); ?>
                                        <br><br><?php echo app('translator')->get('message.disputes.b5'); ?> <br><br><?php echo app('translator')->get('message.disputes.b6'); ?>
                                        <br><br><?php echo app('translator')->get('message.disputes.b7'); ?> <br><br><?php echo app('translator')->get('message.disputes.b8'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-visible@m">
                            <h4 class="uk-heading-bullet"><?php echo app('translator')->get('message.indemnification.head'); ?>
                            </h4>
                            <div class="uk-grid uk-grid-small" data-uk-grid="">
                                <div class="uk-width-expand@m uk-first-column">
                                    <p><?php echo app('translator')->get('message.indemnification.b1'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-visible@m">
                            <h4 class="uk-heading-bullet"><?php echo app('translator')->get('message.confidential.head'); ?></h4>
                            <div class="uk-grid uk-grid-small" data-uk-grid="">
                                <div class="uk-width-expand@m uk-first-column">
                                    <p><?php echo app('translator')->get('message.confidential.b1'); ?> <br><br><?php echo app('translator')->get('message.confidential.b2'); ?>
                                        <br><br><?php echo app('translator')->get('message.confidential.b3'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-visible@m">
                            <h4 class="uk-heading-bullet"><?php echo app('translator')->get('message.termination.head'); ?>
                            </h4>
                            <div class="uk-grid uk-grid-small" data-uk-grid="">
                                <div class="uk-width-expand@m uk-first-column">
                                    <p><?php echo app('translator')->get('message.termination.b1'); ?> <br><br><?php echo app('translator')->get('message.termination.b2'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
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
                                <a class="uk-button uk-button-primary uk-border-rounded"
                                    href="#"><?php echo app('translator')->get('message.open_acount'); ?>t</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadleo/Documents/Projects/axeprogroup/axepro/resources/views/front/terms-of-serv.blade.php ENDPATH**/ ?>