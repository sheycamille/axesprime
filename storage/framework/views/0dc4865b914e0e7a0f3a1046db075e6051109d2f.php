<?php $__env->startSection('title', 'Verify Email'); ?>

<?php $__env->startSection('content'); ?>
<body class="d-flex flex-column h-100 auth-page">
    <!-- ======= Loginup Section ======= -->
    <section class="auth">
        <div class="container">
            <div class="row justify-content-center user-auth">
                <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6 ">
                    <div class="text-center">
                        <?php if(Session::has('message')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php echo e(Session::get('message')); ?>

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        </div>
                        <?php endif; ?>

                        <?php if(session('status')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            A new verification link has been sent to the email address you provided during registration.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php endif; ?>
                    </div>

                    <div class="card ">
                        <form method="POST" action="<?php echo e(route('verification.send')); ?>" class="mt-5 card__form">
                            <?php echo csrf_field(); ?>
                            <div>
                                <button type="submit" class="mt-4 btn btn-primary">
                                    <?php echo e(__('Resend Verification Email')); ?>

                                </button>
                            </div>
                        </form>

                        <form method="POST" action="<?php echo e(route('logout')); ?>" class="mt-5 card__form">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="mt-4 btn btn-primary">
                                <?php echo e(__('Log Out')); ?>

                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadingaleonardngonga/Downloads/online-trade-06-04-2021/resources/views/auth/verify-email.blade.php ENDPATH**/ ?>