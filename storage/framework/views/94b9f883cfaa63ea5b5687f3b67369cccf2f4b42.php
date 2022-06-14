<?php $__env->startSection('title', 'Manage Account Types'); ?>

<?php $__env->startSection('maccounts', 'c-show'); ?>
<?php $__env->startSection('accounttypes', 'c-active'); ?>

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

                    <div class="mb-5 row">
                        <div class="col-12 p-4">
                            <div class="col-2 p-0 pb-4">
                                <a class="btn btn-primary" href="<?php echo e(route('showaddaccounttype')); ?>">
                                    <i class="fa fa-plus"></i>
                                    New Account Type
                                </a>
                            </div>

                            <div class="table-responsive" data-example-id="hoverable-table">
                                <table id="ShipTable" class="table table-bordered table-striped table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Forex Pairs</th>
                                            <th>Commodities</th>
                                            <th>Indices</th>
                                            <th>Cost</th>
                                            <th>Status</th>
                                            <th>Date created</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__empty_1 = true; $__currentLoopData = $accounttypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accounttype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <th scope="row"><?php echo e($accounttype->id); ?></th>
                                            <td><?php echo e($accounttype->name); ?></td>
                                            <td><?php echo e($accounttype->num_fx_pairs); ?></td>
                                            <td><?php echo e($accounttype->num_commodities_pairs); ?></td>
                                            <td><?php echo e($accounttype->num_indices_pairs); ?></td>
                                            <td><?php echo e(\App\Models\Setting::getValue('currency')); ?><?php echo e($accounttype->amount); ?>

                                            </td>
                                            <td>
                                                <?php if($accounttype->active): ?> Yes <?php else: ?> No
                                                <?php endif; ?>
                                            </td>
                                            <td><?php echo e(\Carbon\Carbon::parse($accounttype->created_at)->toDayDateTimeString()); ?>

                                            </td>
                                            <td>
                                                <a href="#" data-toggle="modal"
                                                    data-target="#popModal<?php echo e($accounttype->id); ?>"
                                                    class="m-1 btn btn-warning btn-sm">Edit</a>
                                                <a href="<?php echo e(route('delaccounttype', $accounttype->id)); ?>"
                                                    class="m-1 btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>

                                        <!-- POP Modal -->
                                        <div id="popModal<?php echo e($accounttype->id); ?>" class="modal fade" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">
                                                            <?php echo e($accounttype->name); ?></h4>
                                                        <button type="button" class="close"
                                                            data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4></h4>

                                                        <form
                                                            action="<?php echo e(route('updateaccounttype', $accounttype->id)); ?>"
                                                            method="post">
                                                            <?php echo csrf_field(); ?>

                                                            <h5 class="">Name</h5>
                                                            <input style="padding:5px;" class="form-control"
                                                                placeholder="Enter maximum price" type="text"
                                                                name="name" value="<?php echo e($accounttype->name); ?>" required>
                                                            <br />

                                                            <h5 class="">Cost</h5>
                                                            <input style="padding:5px;" class="form-control"
                                                                placeholder="Enter cost" type="text" name="cost"
                                                                value="<?php echo e($accounttype->cost); ?>" required>
                                                            <br />

                                                            <h5 class="">Minimum deposit</h5>
                                                            <input style="padding:5px;" class="form-control"
                                                                placeholder="Enter Minimum deposit" type="text"
                                                                name="min_deposit"
                                                                value="<?php echo e($accounttype->min_deposit); ?>" required>
                                                            <br />

                                                            <h5 class="">Max Leverage</h5>
                                                            <input style="padding:5px;" class="form-control"
                                                                placeholder="Enter Max Leverage" type="text"
                                                                name="max_leverage"
                                                                value="<?php echo e($accounttype->max_leverage); ?>" required>
                                                            <br />

                                                            <h5 class="">Minimum Trade Size</h5>
                                                            <input style="padding:5px;" class="form-control"
                                                                placeholder="Enter min trade size" type="text"
                                                                name="min_trade_size"
                                                                value="<?php echo e($accounttype->min_trade_size); ?>" required>
                                                            <br />

                                                            <h5 class="">Maximum Trade Size</h5>
                                                            <input style="padding:5px;" class="form-control"
                                                                placeholder="Enter max trade size" type="text"
                                                                name="max_trade_size"
                                                                value="<?php echo e($accounttype->max_trade_size); ?>" required>
                                                            <br />

                                                            <h5 class="">Swaps</h5>
                                                            <select name="swaps">
                                                                <option selected disabled>Choose Availability</option>
                                                                <option <?php if(old('swaps')==1): ?> selected <?php endif; ?> value="1">
                                                                    Yes
                                                                </option>
                                                                <option <?php if(old('swaps')==0): ?> selected <?php endif; ?> value="0">
                                                                    No
                                                                </option>
                                                            </select>
                                                            <br />

                                                            <h5 class="">Forex Commissions</h5>
                                                            <input style="padding:5px;" class="form-control"
                                                                placeholder="Enter forex commision" type="text"
                                                                name="fx_commission"
                                                                value="<?php echo e($accounttype->fx_commission); ?>" required>
                                                            <br />

                                                            <h5 class="">Number of Forex Pairs/h5>
                                                                <input style="padding:5px;" class="form-control"
                                                                    placeholder="Enter forex pairs" type="text"
                                                                    name="num_fx_pairs"
                                                                    value="<?php echo e($accounttype->num_fx_pairs); ?>" required>
                                                                <br />

                                                                <h5 class="">Number of Commodities
                                                                    Pairs</h5>
                                                                <input style="padding:5px;" class="form-control"
                                                                    placeholder="Enter commodities pairs" type="text"
                                                                    name="num_commodities_pairs"
                                                                    value="<?php echo e($accounttype->num_commodities_pairs); ?>"
                                                                    required>
                                                                <br />

                                                                <h5 class="">Number of Indices
                                                                    Pairs
                                                                </h5>
                                                                <input style="padding:5px;" class="form-control"
                                                                    placeholder="Enter indices pairs" type="text"
                                                                    name="num_indices_pairs"
                                                                    value="<?php echo e($accounttype->num_indices_pairs); ?>"
                                                                    required>
                                                                <br />

                                                                <h5 class="">Trading Platforms</h5>
                                                                <input style="padding:5px;" class="form-control"
                                                                    placeholder="Enter trading platforms" type="text"
                                                                    name="trading_platforms"
                                                                    value="<?php echo e($accounttype->trading_platforms); ?>"
                                                                    required>
                                                                <br />

                                                                <h5 class="">Trading Model</h5>
                                                                <input style="padding:5px;" class="form-control"
                                                                    placeholder="Enter trading model" type="text"
                                                                    name="trading_model"
                                                                    value="<?php echo e($accounttype->trading_model); ?>" required>
                                                                <br />

                                                                <h5 class="">Execution Type</h5>
                                                                <input style="padding:5px;" class="form-control"
                                                                    placeholder="Enter Execution Type" type="text"
                                                                    name="execution_type"
                                                                    value="<?php echo e($accounttype->execution_type); ?>" required>
                                                                <br />

                                                                <h5 class="">Typical Spread</h5>
                                                                <input style="padding:5px;" class="form-control"
                                                                    placeholder="Enter Typical Spread" type="text"
                                                                    name="typical_spread"
                                                                    value="<?php echo e($accounttype->typical_spread); ?>" required>
                                                                <br />

                                                                <h5 class="">Requotes</h5>
                                                                <input style="padding:5px;" class="form-control"
                                                                    placeholder="Enter Requotes" type="text"
                                                                    name="requotes" value="<?php echo e($accounttype->requotes); ?>"
                                                                    required>
                                                                <br />

                                                                <h5 class="">Available Instruments
                                                                </h5>
                                                                <input style="padding:5px;" class="form-control"
                                                                    placeholder="Enter Available Instruments"
                                                                    type="text" name="available_instruments"
                                                                    value="<?php echo e($accounttype->available_instruments); ?>"
                                                                    required>
                                                                <br />

                                                                <h5 class="">Educational Material
                                                                </h5>
                                                                <select name="educational_material">
                                                                    <option selected disabled>Choose Availability
                                                                    </option>
                                                                    <option <?php if($accounttype->educational_material ==
                                                                        1): ?>
                                                                        selected <?php endif; ?> value="1">Yes
                                                                    </option>
                                                                    <option <?php if($accounttype->educational_material ==
                                                                        0): ?>
                                                                        selected <?php endif; ?> value="0">No
                                                                    </option>
                                                                </select>
                                                                <br />
                                                                <br>

                                                                <h5 class="">Active/Disable
                                                                </h5>
                                                                <select name="active">
                                                                    <option selected disabled>Choose Availability
                                                                    </option>
                                                                    <option <?php if($accounttype->active == 1): ?> selected
                                                                        <?php endif; ?>
                                                                        value="1">Yes
                                                                    </option>
                                                                    <option <?php if($accounttype->active == 0): ?> selected
                                                                        <?php endif; ?>
                                                                        value="0">No
                                                                    </option>
                                                                </select>
                                                                <br />
                                                                <br>

                                                                <div class="form-group">
                                                                    <div>
                                                                        <button type="submit"
                                                                            class="btn btn-primary btn-lg px-3">
                                                                            <i class="fa fa-plus"></i> Save
                                                                            <?php echo e($accounttype->name); ?>

                                                                        </button>
                                                                    </div>
                                                                </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- /POP Modal -->
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="9">No data available</td>
                                        </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadingaleonardngonga/Documents/Projects/axesprime/resources/views/admin/accounttypes.blade.php ENDPATH**/ ?>