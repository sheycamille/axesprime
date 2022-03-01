<?php $__env->startSection('support', 'c-active'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('user.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('user.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center"><?php echo e(\App\Models\Setting::getValue('site_name')); ?> Support</h1>
                        <p class="text-center"> Contact us for inquiries, suggestions or complains.</p>
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

                        <div class="col-md-8 offset-md-2">
                            <form method="post" action="<?php echo e(route('enquiry')); ?>">
                                <input type="hidden" name="name" value="<?php echo e(Auth::user()->name); ?>" />
                                <div class="form-group">
                                    <input type="hidden" name="email" value="<?php echo e(Auth::user()->email); ?>">
                                </div>
                                <div class="form-group">
                                    <h5 for="" class="">Subject <span class=" text-danger">*</span>
                                    </h5>
                                    <input type="text" name="subject" class="form-control"
                                        required>
                                </div>
                                <div class="form-group">
                                    <h5 for="" class="">Message<span class=" text-danger">*</span>
                                    </h5>
                                    <textarea name="message" class="form-control"
                                        rows="5"></textarea>
                                </div>
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <div class="">
                                    <input type="submit" class="py-2 btn btn-primary btn-block" value="Send">
                                </div>
                                <input type="hidden" name="id" value="<?php echo e(Auth::user()->id); ?>">
                                <input type="hidden" name="current_password" value="<?php echo e(Auth::user()->password); ?>">
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"><br />
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadleo/Documents/Projects/axeprogroup/axepro/resources/views/user/support.blade.php ENDPATH**/ ?>