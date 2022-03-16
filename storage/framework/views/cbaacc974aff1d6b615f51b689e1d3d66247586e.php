<?php $__env->startSection('title', 'Register'); ?>

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
                        <h1 class="mt-3 uk-text-center" style="font-size: 32px; margin-top: 10px;">
                            <?php echo app('translator')->get('message.register.crt'); ?>
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

                        <form method="POST" action="<?php echo e(route('register')); ?>" class="mt-5 card__form">
                            <?php echo csrf_field(); ?>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                    <label for="name"><?php echo app('translator')->get('message.register.full'); ?>:</label>
                                    <input type="text" class="mr-2 form-control" name="name" value="<?php echo e(old('name')); ?>"
                                        id="name" placeholder="<?php echo app('translator')->get('message.register.enter_ful'); ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                </span>
                                <?php endif; ?>
                                <label for="email"><?php echo app('translator')->get('message.register.email'); ?>:</label>
                                <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>"
                                    id="email" placeholder="<?php echo app('translator')->get('message.register.example'); ?>">
                            </div>

                            <div class="d-flex">
                                <div class="form-group">
                                    <?php if($errors->has('phone')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('phone')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                    <label for="phone"><?php echo app('translator')->get('message.register.num'); ?>:</label>
                                    <input type="mumber" class="form-control" name="phone" value="<?php echo e(old('phone')); ?>"
                                        id="phone" placeholder="<?php echo app('translator')->get('message.register.enter_num'); ?>">
                                </div>

                                <div class="form-group">
                                    <?php if($errors->has('account_type')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('account_type')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                    <label for="account_type"><?php echo app('translator')->get('message.register.type'); ?>:</label>
                                    <select class="form_control" name="account_type" id="account_type" required>
                                        <option disabled>Choose Account Type</option>
                                        <?php $__currentLoopData = $account_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php if($accType->id == request()->get('account_type')): ?> selected <?php endif; ?>
                                            value="<?php echo e($accType->id); ?>">
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
                                <label for="address"><?php echo app('translator')->get('message.register.addrs'); ?>:</label>
                                <input type="text" class="form-control" name="address" value="<?php echo e(old('address')); ?>"
                                    id="address" placeholder="<?php echo app('translator')->get('message.register.addrs'); ?>">
                            </div>

                            <div class="form-group">
                                <?php if($errors->has('country')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('country')); ?></strong>
                                </span>
                                <?php endif; ?>
                                <label for="country" name="country"><?php echo app('translator')->get('message.register.country'); ?>:</label>
                                <select name="country" id="country" class="form-control" style="max-width: 150px"
                                    required>
                                    <option><?php echo app('translator')->get('message.register.chs'); ?></option>
                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php if($country->id == old('country')): ?> selected <?php endif; ?> value="<?php echo e($country->id); ?>">
                                        <?php echo e(ucfirst($country->name)); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <?php if($errors->has('state')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('state')); ?></strong>
                                </span>
                                <?php endif; ?>
                                <label for="state"><?php echo app('translator')->get('message.register.state'); ?>:</label>
                                <select name="state" id="state" class="form-control" style="min-width: 150px" required>
                                    <option disabled><?php echo app('translator')->get('message.register.enter_stt'); ?></option>
                                </select>
                            </div>

                            <div class="form-group">
                                <?php if($errors->has('town')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('town')); ?></strong>
                                </span>
                                <?php endif; ?>
                                <label for="town"><?php echo app('translator')->get('message.register.town'); ?>:</label>
                                <select name="town" id="town" class="form-control" style="min-width: 150px" required>
                                    <option disabled><?php echo app('translator')->get('message.register.town'); ?></option>
                                </select>
                            </div>

                            <div class="form-group">
                                <?php if($errors->has('zip_code')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('zip_code')); ?></strong>
                                </span>
                                <?php endif; ?>
                                <label for="zip_code"><?php echo app('translator')->get('message.register.zip'); ?>:</label>
                                <input type="text" class="form-control" name="zip_code" value="<?php echo e(old('zip_code')); ?>"
                                    id="zip_code" placeholder="<?php echo app('translator')->get('message.register.enter_zip'); ?>">
                            </div>

                            <div class="form-row">
                                <?php if($errors->has('password')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                </span>
                                <?php endif; ?>
                                <div class="form-group">
                                    <label for="password"><?php echo app('translator')->get('message.register.pass'); ?>:</label>
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="<?php echo app('translator')->get('message.register.enter_pass'); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="confirm-password"><?php echo app('translator')->get('message.register.confrm'); ?>:</label>
                                    <input type="password" class="form-control" name="password_confirmation"
                                        value="<?php echo e(old('password_confirmation')); ?>" id="confirm-password"
                                        placeholder="<?php echo app('translator')->get('message.register.confirm'); ?>">
                                </div>
                            </div>

                            
                            <br>

                            <div class="form-group" style="justify-content:center">
                                <button class="mt-4 btn btn-primary uk-button uk-button-primary uk-border-rounded"
                                    type="submit"><?php echo app('translator')->get('message.register.reg'); ?></button>
                            </div>
                            <br>

                            <div class="mb-3 text-center">
                                <small class="mb-2 text-center "><?php echo app('translator')->get('message.register.already'); ?> <a
                                        href="<?php echo e(route('login')); ?>"><?php echo app('translator')->get('message.register.log'); ?>.</a> </small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
<script type="text/javascript">
    $('#country').change(function () {
        var countryID = $(this).val();
        if (countryID) {
            $.get( "<?php echo e(url('/get-state-list')); ?>?country_id=" + countryID, function( data ) {
                $("#state").empty();
                $("#state").append('<option>Select</option>');
                $.each(data, function (key, state) {
                    $("#state").append('<option value="' + state.id + '">' + state.name + '</option>');
                });
            });
        } else {
            $("#state").empty();
            $("#town").empty();
        }
    });

    $('#state').on('change', function () {
        var stateID = $(this).val();
        if (stateID) {
            $.get( "<?php echo e(url('/get-town-list')); ?>?state_id=" + stateID, function( data ) {
                $("#town").empty();
                $("#town").append('<option>Select</option>');
                $.each(data, function (key, town) {
                    $("#town").append('<option value="' + town.id + '">' + town.name + '</option>');
                });
            });
        } else {
            $("#town").empty();
        }
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadleo/Documents/Projects/axeprogroup/axepro/resources/views/auth/register.blade.php ENDPATH**/ ?>