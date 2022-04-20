<?php $__env->startSection('title', 'My Profile'); ?>

<?php $__env->startSection('my-account', 'c-show'); ?>
<?php $__env->startSection('my-profile', 'c-active'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('user.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('user.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header fw-bolder">
                        <?php echo e($title); ?>

                    </div>
                    <div class="card-body">

                        <?php if(Session::has('message')): ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="alert alert-info alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>
                                    <i class="fa fa-info-circle"></i>
                                    <p class="alert-message"><?php echo e(Session::get('message')); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>

                        <?php if(count($errors) > 0): ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="alert alert-danger alert-dismissable" role="alert">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <i class="fa fa-warning"></i> <?php echo e($error); ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>

                        <div class="container-fluid">
                            <div class="fade-in">
                                <div class="row">
                                    <div class="p-2 col-md-8 offset-md-2">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <h1 class="title1 text-center"><?php echo app('translator')->get('message.body.acnt'); ?> </h1>
                                                    <p class="text-capitalize">
                                                        <?php echo app('translator')->get('message.body.type'); ?>
                                                        <label class=""><?php echo e(Auth::user()->accounttype->name); ?></label>
                                                    </p>
                                                </div>

                                                <form action="<?php echo e(route('userprofile')); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>

                                                    <div class="form-group">
                                                        <label for="email"><?php echo app('translator')->get('message.body.email'); ?> </label>
                                                        <input class="form-control" id="email" type="text" name="email"
                                                            placeholder="<?php echo app('translator')->get('message.body.enter_email'); ?>"
                                                            value="<?php echo e(Auth::user()->email); ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="name"><?php echo app('translator')->get('message.body.full_name'); ?></label>
                                                        <input class="form-control" id="name" type="text" name="name"
                                                            placeholder="<?php echo app('translator')->get('message.body.enter_full'); ?>"
                                                            value="<?php echo e(Auth::user()->name); ?>">
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-8">
                                                            <label for="phone"><?php echo app('translator')->get('message.body.phone'); ?></label>
                                                            <input class="form-control" id="phone" type="text"
                                                                name="phone"
                                                                placeholder="<?php echo app('translator')->get('message.body.enter_phone'); ?>"
                                                                value="<?php echo e(Auth::user()->phone); ?>">
                                                        </div>

                                                        <div class="form-group col-sm-4">
                                                            <label for="postal-code"><?php echo app('translator')->get('message.body.zip'); ?></label>
                                                            <input class="form-control" id="postal-code" type="text"
                                                                placeholder="Zip Code"
                                                                value="<?php echo e(Auth::user()->zip_code); ?>">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <select class="form-control" name="country" id="country"
                                                            required>
                                                            <option selected disabled><?php echo app('translator')->get('message.body.country'); ?>
                                                            </option>
                                                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option <?php if(Auth::user()->country_id == $country->id ||
                                                                Auth::user()->country_id == $name): ?>
                                                                selected <?php endif; ?> value="<?php echo e($country->id); ?>">
                                                                <?php echo e(ucfirst($country->name)); ?>

                                                            </option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-6">
                                                            <label for="state"><?php echo app('translator')->get('message.register.state'); ?></label>
                                                            <input type="text" class="form-control" name="state" value="<?php echo e(Auth::user()->state); ?>"
                                                                id="state" placeholder="<?php echo app('translator')->get('message.register.enter_stt'); ?>">
                                                        </div>

                                                        <div class="form-group col-sm-6">
                                                            <label for="city"><?php echo app('translator')->get('message.body.city'); ?></label>
                                                            <input type="text" class="form-control" name="town" value="<?php echo e(Auth::user()->town); ?>"
                                                                id="town" placeholder="<?php echo app('translator')->get('message.register.town'); ?>">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <button class="btn btn-sm btn-primary" type="submit">
                                                            <?php echo app('translator')->get('message.body.submit'); ?></button>
                                                        <button class="btn btn-sm btn-danger" type="reset">
                                                            <?php echo app('translator')->get('message.body.reset'); ?></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadleo/Documents/Projects/axeprogroup/axepro/resources/views/user/profile.blade.php ENDPATH**/ ?>