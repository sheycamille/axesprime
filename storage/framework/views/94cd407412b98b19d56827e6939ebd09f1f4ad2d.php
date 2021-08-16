<!-- Deposit Modal -->
<div id="depositModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-<?php echo e($bg); ?>">
                <h4 class="modal-title text-<?php echo e($text); ?>">Make new deposit</h4>
                <button type="button" class="close text-<?php echo e($text); ?>" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body bg-<?php echo e($bg); ?>">
                <form style="padding:3px;" role="form" method="get" action="<?php echo e(route('selectpaymentmethod')); ?>">
                    <input style="padding:5px;" class="form-control text-<?php echo e($text); ?> bg-<?php echo e($bg); ?>"
                        placeholder="Enter amount here" type="number" name="amount"
                        min="<?php echo e(\App\Models\Setting::getValue('min_dw')); ?>" required>
                    <br />

                    <select required class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>"
                        name="account_id" id="account_id" required>
                        <option value="" disabled selected>Choose Acount</option>
                        <?php $__currentLoopData = Auth::user()->accounts(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($account->id); ?>"><?php echo e($account->login); ?> | <?php echo e($account->server); ?> |
                                USD <?php echo e($account->balance); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select> <br>

                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="submit" class="btn btn-<?php echo e($text); ?>" value="Continue">
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
            <div class="modal-header bg-<?php echo e($bg); ?>">
                <h4 class="modal-title text-<?php echo e($text); ?>">Payment will be sent to your recieving address.</h4>
                <button type="button" class="text-white close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body bg-dark">
                <form style="padding:3px;" role="form" method="post" action="<?php echo e(route('withdrawal')); ?>">
                    <input style="padding:5px;" class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>"
                        placeholder="Enter amount here" type="text" name="amount" required><br />

                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="submit" class="btn btn-<?php echo e($text); ?>" value="Submit">
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
            <div class="modal-header bg-<?php echo e($bg); ?>">
                <h4 class="modal-title text-<?php echo e($text); ?>">Create a Demo Account</h4>
                <button type="button" class="close text-<?php echo e($text); ?>" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body bg-<?php echo e($bg); ?>">
                <form role="form" method="post" action="<?php echo e(route('account.addmt5account')); ?>">
                    <?php echo csrf_field(); ?>
                    <input class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" value="demo"
                        type="hidden" name="type">

                    <h5 class="text-<?php echo e($text); ?> ">Leverage*:</h5>
                    <select class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" name="leverage"
                        class="leverage" required>
                        <option disabled>Select leverage</option>
                        <option value="500">1:500</option>
                        <option value="400">1:400</option>
                        <option value="300">1:300</option>
                        <option value="200">1:200</option>
                        <option value="100">1:100</option>
                    </select><br>
                    
                    
                    
                    <input type="submit" class="btn btn-primary" value="Submit">
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
            <div class="modal-header bg-<?php echo e($bg); ?>">
                <h4 class="modal-title text-<?php echo e($text); ?>">Create a Live Account</h4>
                <button type="button" class="close text-<?php echo e($text); ?>" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body bg-<?php echo e($bg); ?>">
                <form role="form" method="post" action="<?php echo e(route('account.addmt5account')); ?>">
                    <?php echo csrf_field(); ?>
                    <input class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" value="live"
                        type="hidden" name="type">

                    <h5 class="text-<?php echo e($text); ?> ">Leverage*:</h5>
                    <select class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" name="leverage"
                        class="leverage" required>
                        <option disabled>Select leverage</option>
                        <option value="500">1:500</option>
                        <option value="400">1:400</option>
                        <option value="300">1:300</option>
                        <option value="200">1:200</option>
                        <option value="100">1:100</option>
                    </select><br>
                    
                    
                    
                    <input type="submit" class="btn btn-primary" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<?php /**PATH /Users/wadingaleonardngonga/Documents/Projects/axesprime/resources/views/user/modals.blade.php ENDPATH**/ ?>