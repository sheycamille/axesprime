

<?php $__env->startSection('title', 'Add Account Type'); ?>

<?php $__env->startSection('maccounts', 'c-show'); ?>
<?php $__env->startSection('addaccounttype', 'c-active'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container-fluid">
    <div class="fade-in">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header fw-bolder">
                    <h1 class="title1 text-center">
                        <?php echo e($title); ?>

                    </h1>
                </div>

                <div class="card-body">
                    <?php if(Session::has('message')): ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert"
                                    aria-hidden="true">&times;</button>
                                <i class="fa fa-info-circle"></i>
                                <p class="alert-message"><?php echo Session::get('message'); ?></p>
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

                    <div class="row mb-5">
                        <div class="col-lg-8 offset-lg-2 card p-3">
                            <form class="col-12" action="<?php echo e(route('addaccounttype')); ?>" method="post">
                                <?php echo csrf_field(); ?>

                                <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                                    <h5 class="">Name</h5>
                                    <div>
                                        <input style="padding:5px;" class="form-control " placeholder="Enter name"
                                            type="text" name="name" value="<?php echo e(old('name')); ?>" required>
                                        <?php if($errors->has('name')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('name')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group<?php echo e($errors->has('cost') ? ' has-error' : ''); ?>">
                                    <h5 class="">Cost</h5>
                                    <div>
                                        <input style="padding:5px;" class="form-control " placeholder="Enter cost"
                                            type="text" name="cost" value="<?php echo e(old('cost')); ?>" required>

                                        <?php if($errors->has('cost')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('cost')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                    <br />
                                </div>

                                <div class="form-group<?php echo e($errors->has('min_deposit') ? ' has-error' : ''); ?>">
                                    <h5 class="">Minimum deposit</h5>
                                    <div>
                                        <input style="padding:5px;" class="form-control "
                                            placeholder="Enter Minimum deposit" type="text" name="min_deposit"
                                            value="<?php echo e(old('min_deposit')); ?>" required>

                                        <?php if($errors->has('min_deposit')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('min_deposit')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                    <br />
                                </div>

                                <div class="form-group<?php echo e($errors->has('max_leverage') ? ' has-error' : ''); ?>">
                                    <h5 class="">Max Leverage</h5>
                                    <div>
                                        <input style="padding:5px;" class="form-control "
                                            placeholder="Enter Max Leverage" type="text" name="max_leverage"
                                            value="<?php echo e(old('max_leverage')); ?>" required>

                                        <?php if($errors->has('max_leverage')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('max_leverage')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                    <br />
                                </div>

                                <div
                                    class="form-group<?php echo e($errors->has('min_trade_size') ? ' has-error' : ''); ?>">
                                    <h5 class="">Minimum Trade Size</h5>
                                    <div>
                                        <input style="padding:5px;" class="form-control "
                                            placeholder="Enter min trade size" type="text" name="min_trade_size"
                                            value="<?php echo e(old('min_trade_size')); ?>" required>

                                        <?php if($errors->has('min_trade_size')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('min_trade_size')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                    <br />
                                </div>

                                <div
                                    class="form-group<?php echo e($errors->has('max_trade_size') ? ' has-error' : ''); ?>">
                                    <h5 class="">Maximum Trade Size</h5>
                                    <div>
                                        <input style="padding:5px;" class="form-control "
                                            placeholder="Enter max trade size" type="text" name="max_trade_size"
                                            value="<?php echo e(old('max_trade_size')); ?>" required>

                                        <?php if($errors->has('max_trade_size')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('max_trade_size')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group<?php echo e($errors->has('swaps') ? ' has-error' : ''); ?>">
                                    <h5 class="">Swaps</h5>
                                    <div>
                                        <select name="swaps">
                                            <option selected disabled>Choose Availability</option>
                                            <option <?php if(old('swaps')==1): ?> selected <?php endif; ?> value="1">Yes
                                            </option>
                                            <option <?php if(old('swaps')==0): ?> selected <?php endif; ?> value="0">No
                                            </option>
                                        </select>

                                        <?php if($errors->has('swaps')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('swaps')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group<?php echo e($errors->has('fx_commission') ? ' has-error' : ''); ?>">
                                    <h5 class="">Forex Commissions</h5>
                                    <div>
                                        <input style="padding:5px;" class="form-control "
                                            placeholder="Enter forex commision" type="text" name="fx_commission"
                                            value="<?php echo e(old('fx_commission')); ?>" required>

                                        <?php if($errors->has('fx_commission')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('fx_commission')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group<?php echo e($errors->has('num_fx_pairs') ? ' has-error' : ''); ?>">
                                    <h5 class="">Number of Forex Pairs </h5>
                                    <div>
                                        <input style="padding:5px;" class="form-control "
                                            placeholder="Enter forex pairs" type="text" name="num_fx_pairs"
                                            value="<?php echo e(old('num_fx_pairs')); ?>" required>

                                        <?php if($errors->has('num_fx_pairs')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('num_fx_pairs')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div
                                    class="form-group<?php echo e($errors->has('num_commodities_pairs') ? ' has-error' : ''); ?>">
                                    <h5 class="">Number of Commodities
                                        Pairs</h5>
                                    <div>
                                        <input style="padding:5px;" class="form-control "
                                            placeholder="Enter commodities pairs" type="text"
                                            name="num_commodities_pairs" value="<?php echo e(old('num_commodities_pairs')); ?>"
                                            required>

                                        <?php if($errors->has('num_commodities_pairs')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('num_commodities_pairs')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div
                                    class="form-group<?php echo e($errors->has('num_indices_pairs') ? ' has-error' : ''); ?>">
                                    <h5 class="">Number of Indices
                                        Pairs
                                    </h5>
                                    <div>
                                        <input style="padding:5px;" class="form-control "
                                            placeholder="Enter indices pairs" type="text" name="num_indices_pairs"
                                            value="<?php echo e(old('num_indices_pairs')); ?>" required>
                                        <?php if($errors->has('num_indices_pairs')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('num_indices_pairs')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div
                                    class="form-group<?php echo e($errors->has('trading_platforms') ? ' has-error' : ''); ?>">
                                    <h5 class="">Trading Platforms</h5>
                                    <div>
                                        <input style="padding:5px;" class="form-control "
                                            placeholder="Enter trading platforms" type="text" name="trading_platforms"
                                            value="<?php echo e(old('trading_platforms')); ?>" required>
                                        <?php if($errors->has('trading_platforms')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('trading_platforms')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group<?php echo e($errors->has('trading_model') ? ' has-error' : ''); ?>">
                                    <h5 class="">Trading Model</h5>
                                    <div>
                                        <input style="padding:5px;" class="form-control "
                                            placeholder="Enter trading model" type="text" name="trading_model"
                                            value="<?php echo e(old('trading_model')); ?>" required>
                                        <?php if($errors->has('trading_model')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('trading_model')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div
                                    class="form-group<?php echo e($errors->has('typical_spread') ? ' has-error' : ''); ?>">
                                    <h5 class="">Typical Spread</h5>
                                    <div>
                                        <input style="padding:5px;" class="form-control "
                                            placeholder="Enter Typical Spread" type="text" name="typical_spread"
                                            value="<?php echo e(old('typical_spread')); ?>" required>
                                        <?php if($errors->has('typical_spread')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('typical_spread')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div
                                    class="form-group<?php echo e($errors->has('execution_type') ? ' has-error' : ''); ?>">
                                    <h5 class="">Execution Type</h5>
                                    <div>
                                        <input style="padding:5px;" class="form-control "
                                            placeholder="Enter Execution Type" type="text" name="execution_type"
                                            value="<?php echo e(old('execution_type')); ?>" required>
                                        <?php if($errors->has('execution_type')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('execution_type')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group<?php echo e($errors->has('requotes') ? ' has-error' : ''); ?>">
                                    <h5 class="">Requotes</h5>
                                    <div>
                                        <input style="padding:5px;" class="form-control " placeholder="Enter Requotes"
                                            type="text" name="requotes" value="<?php echo e(old('requotes')); ?>" required>
                                        <?php if($errors->has('requotes')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('requotes')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div
                                    class="form-group<?php echo e($errors->has('available_instruments') ? ' has-error' : ''); ?>">
                                    <h5 class="">Available Instruments
                                    </h5>
                                    <div>
                                        <input style="padding:5px;" class="form-control "
                                            placeholder="Enter Available Instruments" type="text"
                                            name="available_instruments" value="<?php echo e(old('available_instruments')); ?>"
                                            required>
                                        <?php if($errors->has('available_instruments')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('available_instruments')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div
                                    class="form-group<?php echo e($errors->has('educational_material') ? ' has-error' : ''); ?>">
                                    <h5 class="">Educational Material
                                    </h5>
                                    <div>
                                        <select name="educational_material">
                                            <option selected disabled>Choose Availability</option>
                                            <option <?php if(old('educational_material')==1): ?> selected <?php endif; ?> value="1">Yes
                                            </option>
                                            <option <?php if(old('educational_material')==0): ?> selected <?php endif; ?> value="0">No
                                            </option>
                                        </select>
                                        <?php if($errors->has('educational_material')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('educational_material')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group<?php echo e($errors->has('active') ? ' has-error' : ''); ?>">
                                    <h5 class="">Active/Disable
                                    </h5>
                                    <div>
                                        <select name="active">
                                            <option selected disabled>Choose Availability</option>
                                            <option <?php if(old('active')==1): ?> selected <?php endif; ?> value="1">Yes
                                            </option>
                                            <option <?php if(old('active')==0): ?> selected <?php endif; ?> value="0">No
                                            </option>
                                        </select>
                                        <?php if($errors->has('active')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('active')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div>
                                        <button type="submit" class="btn btn-primary btn-lg px-3">
                                            <i class="fa fa-plus"></i> Add
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\axesprime\resources\views/admin/addaccounttype.blade.php ENDPATH**/ ?>