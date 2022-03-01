<!-- Deposit Modal -->
<div id="depositModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><?php echo app('translator')->get('message.modal.make_new'); ?></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form style="padding:3px;" role="form" method="get" action="<?php echo e(route('selectpaymentmethod')); ?>">
                    <input style="padding:5px;" class="form-control" placeholder="<?php echo app('translator')->get('message.modal.enter'); ?>" type="number"
                        name="amount" min="<?php echo e(\App\Models\Setting::getValue('min_dw')); ?>" required>
                    <br />

                    <select required class="form-control" name="account_id" id="account_id" required>
                        <option value="" disabled selected><?php echo app('translator')->get('message.modal.chose'); ?></option>
                        <?php $__currentLoopData = Auth::user()->accounts(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($account->id); ?>"><?php echo e($account->login); ?> | <?php echo e($account->server); ?> |
                            USD <?php echo e($account->balance); ?>

                        </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select> <br>

                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="submit" class="btn btn-primary" value="Continue">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /deposit Modal -->


<!-- Withdrawal Modal -->
<div id="withdrawalModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><?php echo app('translator')->get('message.modal.pay'); ?>.</h4>
                <button type="button" class="text-white close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body bg-dark">
                <form style="padding:3px;" role="form" method="post" action="<?php echo e(route('withdrawal')); ?>">
                    <input style="padding:5px;" class="form-control" placeholder="Enter amount here" type="text"
                        name="amount" required><br />

                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="submit" class="btn btn-primary" value="<?php echo app('translator')->get('message.modal.sub'); ?>">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Withdrawals Modal -->


<!-- New Demo Account modal -->
<div id="newDemoAccountModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><?php echo app('translator')->get('message.modal.demo'); ?></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="<?php echo e(route('account.addmt5account')); ?>" id="demoAccForm">
                    <?php echo csrf_field(); ?>
                    <input class="form-control" value="demo" type="hidden" name="type">

                    <h5 class=""><?php echo app('translator')->get('message.modal.lev'); ?>*:</h5>
                    <select class="form-control" name="leverage" class="leverage" required>
                        <option disabled><?php echo app('translator')->get('message.modal.sl'); ?></option>
                        <option value="500">1:500</option>
                        <option value="400">1:400</option>
                        <option value="300">1:300</option>
                        <option value="200">1:200</option>
                        <option value="100">1:100</option>
                    </select><br>
                    
                    
                    
                    <input type="submit" class="btn btn-primary" value="<?php echo app('translator')->get('message.modal.sub'); ?>">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->


<!-- New Live Modal modal -->
<div id="newLiveAccountModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><?php echo app('translator')->get('message.modal.demo'); ?></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="<?php echo e(route('account.addmt5account')); ?>" id="liveAccform">
                    <?php echo csrf_field(); ?>
                    <input class="form-control" value="live" type="hidden" name="type">

                    <h5 class=""><?php echo app('translator')->get('message.modal.lev'); ?>*:</h5>
                    <select class="form-control" name="leverage" class="leverage" required>
                        <option disabled><?php echo app('translator')->get('message.modal.sl'); ?></option>
                        <option value="500">1:500</option>
                        <option value="400">1:400</option>
                        <option value="300">1:300</option>
                        <option value="200">1:200</option>
                        <option value="100">1:100</option>
                    </select><br>
                    
                    
                    
                    <input type="submit" class="btn btn-primary" value="<?php echo app('translator')->get('message.modal.sub'); ?>">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<?php /**PATH /Users/wadleo/Documents/Projects/axeprogroup/axepro/resources/views/user/modals.blade.php ENDPATH**/ ?>