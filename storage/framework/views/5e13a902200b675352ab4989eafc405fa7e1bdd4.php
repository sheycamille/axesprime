<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>
<main id="main" class="crypto-page">
    <div class="uk-section in-liquid-6 in-offset-top-10">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-5-1@m uk-background-contain uk-background-center-center">
                    <div class="uk-text-center">
                        <div class="mb-4 text-center">
                            <a href="<?php echo e(url('/')); ?>">
                                <img src="<?php echo e(asset('front/img/axepro-group-logo.png')); ?>"
                                    alt="<?php echo e(\App\Models\Setting::getValue('site_name')); ?>" title=""
                                    class="img-fluid auth__logo" style="width: 15%;" />
                            </a>
                        </div>

                        <div class="mb-4 text-center">
                            <?php if(Session::has('status')): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert"
                                style="margin: auto;">
                                <?php echo e(session('status')); ?>

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="card">
                        <h1 class="mt-3 uk-text-center" style="font-size: 32px; margin-top: 10px;"> <?php echo app('translator')->get('message.register.user_log'); ?>
                        </h1>

                        <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <button type="button" class="text-white close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>

                        </div>
                        <?php endif; ?>
                        <br>

                        <form method="POST" action="<?php echo e(route('login')); ?>" class="mt-5 card__form">
                            <?php echo csrf_field(); ?>
                            <div class="form-row">
                                <div class="form-group ">
                                    <label for="email"><?php echo app('translator')->get('message.register.email'); ?></label>
                                    <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>"
                                        id="email" placeholder="<?php echo app('translator')->get('message.register.example'); ?>" required>
                                </div>
                            </div>
                            <br>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="password"><?php echo app('translator')->get('message.register.pass'); ?></label>
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="<?php echo app('translator')->get('message.register.enter_pass'); ?>" required>
                                </div>
                                <div>
                                    <br>

                                    <div class="form-group" style="justify-content:center">
                                        <button class="uk-button uk-button-primary uk-border-rounded"
                                            type="submit"><?php echo app('translator')->get('message.register.log'); ?></button>
                                    </div>

                                    <div class="mb-3 text-center">
                                        <small class="mb-2 text-center "><?php echo app('translator')->get('message.register.forget_pass'); ?> <a
                                                href="<?php echo e(route('password.request')); ?>"
                                                class="ml-1 link"><?php echo app('translator')->get('message.register.reset'); ?>.</a> </small>
                                        <small class="text-center "><?php echo app('translator')->get('message.register.dont_have'); ?><a
                                                href="<?php echo e(route('register')); ?>"
                                                class="ml-1 link"><?php echo app('translator')->get('message.register.sign_up'); ?>.</a> </small>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadleo/Documents/Projects/axeprogroup/axepro/resources/views/auth/login.blade.php ENDPATH**/ ?>