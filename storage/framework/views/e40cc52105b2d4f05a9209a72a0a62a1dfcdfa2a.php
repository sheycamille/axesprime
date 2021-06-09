<?php $__env->startSection('title', 'Admin Login'); ?>

<?php $__env->startSection('content'); ?>
<body class="d-flex flex-column h-100 auth-page">
    <!-- ======= Loginup Section ======= -->
    <section class="auth">
        <div class="container">
            <div class="row justify-content-center user-auth">
                <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6 ">
                    <div class="mb-4 text-center">
                        <a href="<?php echo e(url('/')); ?>"><img class="auth__logo img-fluid" src="<?php echo e(asset('storage/photos/'.\App\Models\Setting::getValue('logo'))); ?>" alt="<?php echo e(\App\Models\Setting::getValue('site_name')); ?>"> </a>

                        <?php if(Session::has('message')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php echo e(Session::get('message')); ?>

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php endif; ?>

                    </div>

                    <div class="text-left card">
                        <h1 class="mt-3 text-center"> Admin Login</h1>
                        <form method="POST" action="<?php echo e(route('adminlogin')); ?>" class="mt-5 card__form">
                            <?php echo e(csrf_field()); ?>


                            <div class="form-group">
                                <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                </span>
                                <?php endif; ?>
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" id="email" placeholder="name@example.com" required>
                            </div>
                            <div class="form-group">
                                <?php if($errors->has('password')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                </span>
                                <?php endif; ?>
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" required>
                            </div>

                            <div class="form-group">
                                <button class="mt-4 btn btn-primary" type="submit">Login</button>
                            </div>


                            <div class="mb-3 text-center">
                                <hr>
                                <small class="text-center ">&copy; Copyright <?php echo e(date('Y')); ?> &nbsp; <?php echo e(\App\Models\Setting::getValue('site_name')); ?> &nbsp; All Rights Reserved.</small>
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

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadingaleonardngonga/Downloads/online-trade-06-04-2021/resources/views/auth/adminlogin.blade.php ENDPATH**/ ?>