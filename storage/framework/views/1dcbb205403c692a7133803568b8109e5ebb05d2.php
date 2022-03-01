<?php $__env->startSection('title', 'Privacy Policy'); ?>

<?php $__env->startSection('privacy-menu-item', 'active'); ?>

<?php $__env->startSection('content'); ?>

<main id="main" class="security-page">
    <div class="uk-section in-liquid-6 in-offset-top-10">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-5-6@m uk-background-contain uk-background-center-center">
                    <div class="uk-text-center">
                        <h1 class="uk-margin-remove"><?php echo app('translator')->get('message.privacy_policy.policy'); ?></h1>
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
                        <p class="uk-text-lead uk-text-muted uk-margin-remove "
                            style="text-align: start; font-size: 1rem;"><?php echo app('translator')->get('message.privacy_policy.b1'); ?>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1 uk-flex uk-flex-center">
                    <div class="uk-width-3-4@m uk-margin-medium-bottom">
                        <h3 class="uk-margin-small-bottom" style="text-align: center;">
                            <?php echo app('translator')->get('message.privacy_policy.personal'); ?></h3>
                        <p class="uk-text-lead uk-text-muted uk-margin-remove"
                            style="text-align: start; font-size: 1rem;"><?php echo app('translator')->get('message.privacy_policy.b2'); ?>
                        </p>
                        <ul class="uk-list uk-list-bullet in-list-check">
                            <li><?php echo app('translator')->get('message.privacy_policy.list1'); ?> </li>
                            <li><?php echo app('translator')->get('message.privacy_policy.list2'); ?> </li>
                            <li><?php echo app('translator')->get('message.privacy_policy.list3'); ?> </li>
                        </ul>
                        <p class="uk-text-lead uk-text-muted uk-margin-remove"
                            style="text-align: start; font-size: 1rem;"><?php echo app('translator')->get('message.privacy_policy.b3'); ?>
                        </p>
                        <p class="uk-text-lead uk-text-muted uk-margin-remove"
                            style="text-align: start; font-size: 1rem;"><?php echo app('translator')->get('message.privacy_policy.b4'); ?>
                        </p>
                    </div>
                </div>

                <div class="uk-width-1-1 in-content-10">
                    <div class="uk-grid-divider uk-child-width-1-2@m uk-child-width-1-2@s uk-margin-medium-top uk-grid"
                        data-uk-grid="">
                        <div class="uk-first-column">
                            <h4 class="uk-heading-bullet"><?php echo app('translator')->get('message.privacy_policy.revising'); ?>
                            </h4>
                            <div class="uk-grid uk-grid-small" data-uk-grid="">
                                <div class="uk-width-expand@m uk-first-column">
                                    <p><?php echo app('translator')->get('message.privacy_policy.b5'); ?> </p>
                                </div>
                            </div>
                        </div>

                        <div class="uk-visible@m">
                            <h4 class="uk-heading-bullet"><?php echo app('translator')->get('message.privacy_policy.usage'); ?> </h4>
                            <div class="uk-grid uk-grid-small" data-uk-grid="">
                                <div class="uk-width-expand@m uk-first-column">
                                    <p><?php echo app('translator')->get('message.privacy_policy.b6'); ?> <br><br><?php echo app('translator')->get('message.privacy_policy.b7'); ?>
                                    </p>
                                    <ul class="uk-list uk-list-bullet in-list-check">
                                        <li><?php echo app('translator')->get('message.privacy_policy.b8'); ?>
                                        </li>
                                        <li><?php echo app('translator')->get('message.privacy_policy.b9'); ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid">
                <div class="uk-width-1-1 uk-flex uk-flex-center">
                    <div class="uk-width-3-4@m uk-margin-medium-bottom">
                        <h3 class="uk-margin-small-bottom" style="text-align: center;">
                            <?php echo app('translator')->get('message.privacy_policy.security'); ?> </h3>
                    </div>
                </div>

                <div class="uk-width-1-1 in-content-10">
                    <div class="uk-grid-divider uk-child-width-1-2@m uk-child-width-1-2@s uk-margin-medium-top uk-grid"
                        data-uk-grid="">
                        <div class="uk-first-column">
                            <h4 class="uk-heading-bullet"><?php echo app('translator')->get('message.privacy_policy.cookies'); ?> </h4>
                            <div class="uk-grid uk-grid-small" data-uk-grid="">
                                <div class="uk-width-expand@m uk-first-column">
                                    <p><?php echo app('translator')->get('message.privacy_policy.b10'); ?> <br><br><?php echo app('translator')->get('message.privacy_policy.b11'); ?>
                                    </p>
                                    <ul class="uk-list uk-list-bullet in-list-check">
                                        <li><?php echo app('translator')->get('message.privacy_policy.list4'); ?> </li>
                                        <li><?php echo app('translator')->get('message.privacy_policy.list5'); ?> </li>
                                        <li><?php echo app('translator')->get('message.privacy_policy.list6'); ?> </li>
                                        <li><?php echo app('translator')->get('message.privacy_policy.list7'); ?> </li>
                                    </ul>
                                    <p><?php echo app('translator')->get('message.privacy_policy.list8'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-visible@m">
                            <h4 class="uk-heading-bullet"> <?php echo app('translator')->get('message.privacy_policy.update'); ?> </h4>
                            <div class="uk-grid uk-grid-small" data-uk-grid="">
                                <div class="uk-width-expand@m uk-first-column">
                                    <p><?php echo app('translator')->get('message.privacy_policy.b12'); ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="uk-visible@m">
                            <h4 class="uk-heading-bullet"> <?php echo app('translator')->get('message.privacy_policy.links'); ?> </h4>
                            <div class="uk-grid uk-grid-small" data-uk-grid="">
                                <div class="uk-width-expand@m uk-first-column">
                                    <p><?php echo app('translator')->get('message.privacy_policy.b13'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="uk-visible@m">
                            <h4 class="uk-heading-bullet"> <?php echo app('translator')->get('message.privacy_policy.questions'); ?> </h4>
                            <div class="uk-grid uk-grid-small" data-uk-grid="">
                                <div class="uk-width-expand@m uk-first-column">
                                    <p><?php echo app('translator')->get('message.privacy_policy.b14'); ?>
                                    </p>
                                    <ul class="uk-list uk-list-bullet in-list-check">
                                        <li><?php echo app('translator')->get('message.privacy_policy.pol'); ?> </li>
                                        <li><?php echo app('translator')->get('message.privacy_policy.changes'); ?> </li>
                                        <li><?php echo app('translator')->get('message.privacy_policy.access'); ?>
                                        </li>
                                    </ul>
                                    <p><?php echo app('translator')->get('message.privacy_policy.b15'); ?>
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

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadleo/Documents/Projects/axeprogroup/axepro/resources/views/front/privacy.blade.php ENDPATH**/ ?>