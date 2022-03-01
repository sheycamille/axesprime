<?php $__env->startSection('title', 'Forgot Password'); ?>

<?php $__env->startSection('content'); ?>
<main id="main" class="crypto-page">
    <div class="uk-section in-liquid-6 in-offset-top-10">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-5-1@m uk-background-contain uk-background-center-center">
                    <div class="uk-text-center">
                        <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6 ">
                            <div class="text-center">
                                <?php if(Session::has('message')): ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <p class="alert-message"><?php echo Session::get('message'); ?></p>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if(session('status')): ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?php echo e(session('status')); ?>

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <?php endif; ?>
                        </div>

                        <div class="card ">
                            <h1 class="mt-3 text-center">Password Reset</h1>
                            <form method="POST" action="<?php echo e(route('password.email')); ?>" class="mt-5 card__form">
                                <?php echo e(csrf_field()); ?>


                                <div class="form-row">
                                    <div class="form-group" style="display:block">
                                        <?php if($errors->has('email')): ?>
                                        <div class="help-block">
                                            <strong><?php echo e($errors->first('email')); ?></strong>
                                        </div>
                                        <?php endif; ?>
                                        <br>
                                        <div>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</div>
                                        <input type="email" class="form-control <?php echo e($errors->has('email') ? ' has-error' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" id="email" placeholder="name@example.com" required>
                                    </div>
                                </div>
                                <br>

                                <div class="form-group" style="justify-content:center">
                                    <button class="uk-button uk-button-primary uk-border-rounded" type="submit">Email Password Reset Link</button>
                                </div>
                                <div class="mb-3 text-center">
                                    <small class="mb-2 text-center "> <a href="<?php echo e(route('login')); ?>">Repeat Login.</a> </small>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadleo/Documents/Projects/axeprogroup/axepro/resources/views/auth/forgot-password.blade.php ENDPATH**/ ?>