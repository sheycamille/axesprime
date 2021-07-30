<?php $__env->startSection('title', 'Register'); ?>

<?php $__env->startSection('content'); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <body class="d-flex flex-column h-100 auth-Page">
        <!-- ======= signup Section ======= -->
        <section class="auth ">
            <div class="container">
                <div class="row justify-content-center user-auth">
                    <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6">
                        <div class="mb-4 text-center">
                            <a href="<?php echo e(url('/')); ?>"><img
                                    src="<?php echo e(asset('storage/photos/' . \App\Models\Setting::getValue('logo'))); ?>"
                                    alt="<?php echo e(\App\Models\Setting::getValue('site_name')); ?>" title=""
                                    class="img-fluid auth__logo" /> </a>
                            <?php if(Session::has('status')): ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?php echo e(Session::get('status')); ?>

                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="card ">
                            <h1 class="mt-3 text-center"> Create an Account</h1>

                            <form method="POST" action="<?php echo e(route('register')); ?>" class="mt-5 card__form">
                                <?php echo csrf_field(); ?>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <?php if($errors->has('name')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('name')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                        <label for="f_name">Full Name</label>
                                        <input type="text" class="mr-2 form-control" name="name" value="<?php echo e(old('name')); ?>"
                                            id="f_name" placeholder="Enter Full Name">
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <?php if($errors->has('email')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('email')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>"
                                        id="email" placeholder="name@example.com">
                                </div>

                                


                                <div class="d-flex">
                                    <div class="form-group col-md-6 pl-0">
                                        <?php if($errors->has('phone')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('phone')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                        <label for="phone">Phone Number</label>
                                        <input type="mumber" class="form-control" name="phone" value="<?php echo e(old('phone')); ?>"
                                            id="phone" placeholder="Enter Phone number">
                                    </div>

                                    <div class="form-group col-md-6 pr-0">
                                        <?php if($errors->has('account_type')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('account_type')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                        <label for="account_type">Account Type</label>
                                        <select class="form_control" name="account_type" id="account_type" required>
                                            <option disabled>Choose Account Type</option>
                                            <?php $__currentLoopData = $account_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php if($accType->id == request()->get('account_type')): ?> selected <?php endif; ?> value="<?php echo e($accType->id); ?>">
                                                    <?php echo e($accType->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <?php if($errors->has('address')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('address')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" name="address" value="<?php echo e(old('address')); ?>"
                                        id="address" placeholder="Enter address">
                                </div>

                                <div class="d-flex">
                                    <div class="form-group col-md-6 pl-0">
                                        <?php if($errors->has('town')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('town')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                        <label for="town">Town/City</label>
                                        <input type="text" class="form-control" name="town" value="<?php echo e(old('town')); ?>"
                                            id="town" placeholder="Enter town">
                                    </div>

                                    <div class="form-group col-md-6 pr-0">
                                        <?php if($errors->has('state')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('state')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                        <label for="state">State/Region</label>
                                        <input type="text" class="form-control" name="state" value="<?php echo e(old('state')); ?>"
                                            id="state" placeholder="Enter state">
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <div class="form-group col-md-6 pl-0">
                                        <?php if($errors->has('zip_code')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('zip_code')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                        <label for="zip_code">Zip Code</label>
                                        <input type="text" class="form-control" name="zip_code"
                                            value="<?php echo e(old('zip_code')); ?>" id="zip_code" placeholder="Enter zip code">
                                    </div>

                                    <div class="form-group col-md-6 pr-0">
                                        <label for="country" name="country">Country</label>
                                        <select class="form_control" name="country" id="country" required>
                                            <option disabled>Choose Country</option>
                                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php if($code == old('state')): ?> selected <?php endif; ?> value="<?php echo e($code); ?>">
                                                    <?php echo e($name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <?php if($errors->has('password')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('password')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                    <div class="form-group col-md-6">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" id="password"
                                            placeholder="Enter Password">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="confirm-password">Confirm Password</label>
                                        <input type="password" class="form-control" name="password_confirmation"
                                            value="<?php echo e(old('password_confirmation')); ?>" id="confirm-password"
                                            placeholder="Confirm Password">
                                    </div>
                                </div>

                                <div class="form-group<?php echo e($errors->has('g-recaptcha-response') ? ' has-error' : ''); ?>">
                                    <label class="col-md-4 control-label">Captcha</label>
                                    <div class="col-md-6">
                                        <?php echo NoCaptcha::display(); ?>

                                        <?php if($errors->has('g-recaptcha-response')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('g-recaptcha-response')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button class="mt-4 btn btn-primary" type="submit">Register</button>
                                </div>

                                <div class="mb-3 text-center">
                                    <small class="mb-2 text-center ">Already have an Account <a
                                            href="<?php echo e(route('login')); ?>">Login.</a> </small>

                                    <small class="text-center">&copy; Copyright <?php echo e(date('Y')); ?> &nbsp;
                                        <?php echo e(\App\Models\Setting::getValue('site_name')); ?> &nbsp; All Rights
                                        Reserved.</small>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- Wrapper Ends -->
    </body>

    </html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadingaleonardngonga/Documents/Projects/axesprime/resources/views/auth/register.blade.php ENDPATH**/ ?>