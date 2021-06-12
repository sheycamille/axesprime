<?php $__env->startSection('title', 'Forgot Password'); ?>

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


                            <div class="form-group ">
                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                                <small>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</small> <br>
                                <input type="email" class="form-control <?php echo e($errors->has('email') ? ' has-error' : ''); ?>" name ="email" value="<?php echo e(old('email')); ?>" id="email" placeholder="name@example.com" required>
                            </div>

                            <div class="form-group">
                                <button class="mt-4 btn btn-primary" type="submit" >Email Password Reset Link</button>
                            </div>
                            <div class="mb-3 text-center">
                                <small class="mb-2 text-center "> <a href="<?php echo e(route('login')); ?>">Repeat Login.</a> </small>
                            </div>

                            <div class="text-center">
                                <hr>
                                <small class="text-center ">&copy; Copyright  <?php echo e(date('Y')); ?> &nbsp; <?php echo e(\App\Models\Setting::getValue('site_name')); ?> <br> All Rights Reserved.</small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadingaleonardngonga/Documents/Projects/axesprime/resources/views/auth/forgot-password.blade.php ENDPATH**/ ?>