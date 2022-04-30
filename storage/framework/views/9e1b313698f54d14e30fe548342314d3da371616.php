<!-- Top Up Modal -->
<div id="topupModal<?php echo e($user->id); ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="text-align:center;">Credit/Debit User account.</strong></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form style="padding: 3px;" role="form" method="post" action="<?php echo e(route('topup')); ?>">
                    <input style="padding: 10px;" class="form-control" value="<?php echo e($user->id); ?>" type="text"
                        disabled><br />
                    <select required class="form-control" name="account_id" id="account_id" required>
                        <option value="" disabled selected>Choose Acount</option>
                        <?php $__currentLoopData = $user->accounts(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($account->id); ?>"><?php echo e($account->login); ?> |
                                <?php echo e($account->server); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <br>

                    <h5 class="">Amount</h5>
                    <input style="padding: 10px;" class="form-control" placeholder="Enter amount" type="text"
                        name="amount" required>
                    <br>

                    <h5 class="">Select credit to add, debit to subtract.</h5>
                    <select class="form-control" name="t_type" required>
                        <option value="">Select type</option>
                        <option value="Credit">Credit</option>
                        <option value="Debit">Debit</option>
                    </select>
                    <br><br>

                    <h5 class="">Select where to Credit/Debit</h5>
                    <select class="form-control" name="type" required>
                        <option value="">Select Column</option>
                        <option value="Balance">Balance</option>
                        <option value="Bonus">Bonus</option>
                    </select>
                    <br><br>

                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                    <input type="submit" class="btn btn-primary" value="Save">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Topup Modal -->


<!-- send a single user email Modal-->
<div id="sendmailtooneuserModal<?php echo e($user->id); ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Send Email Message</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>This message will be sent to <?php echo e($user->name); ?> </p>
                <form style="padding:3px;" role="form" method="post"
                    action="<?php echo e(route('sendmailtooneuser', $user->id)); ?>">
                    <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                    <textarea placeholder="Type your message here" class="form-control" name="message" row="3"
                        placeholder="Type your message here" required></textarea><br />
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="submit" class="btn btn-primary" value="Send">
                </form>
            </div>
        </div>
    </div>
</div>


<!-- /Trading History Modal -->

<div id="TradingModal<?php echo e($user->id); ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Add Trading History for <?php echo e($user->name); ?></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="<?php echo e(route('addhistory')); ?>">
                    <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                    <h5 class="">Amount</h5>
                    <input type="number" name="amount" class="form-control">
                    <div class="form-group">
                        <h5 class="">Type</h5>
                        <select class="form-control" name="type">
                            <option value="">Select type</option>
                            <option value="Bonus">Bonus</option>
                            
                        </select>
                    </div>

                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="submit" class="btn btn-primary" value="Add History">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /send a single user email Modal -->


<!-- Edit user Modal -->
<div id="edituser<?php echo e($user->id); ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Edit user details.</strong></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form style="padding:3px;" role="form" method="post" action="<?php echo e(route('updateuser', $user->id)); ?>">
                    <input style="padding:5px;" class="form-control" value="<?php echo e($user->name); ?>" type="text"
                        disabled><br />

                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="first_name"><?php echo app('translator')->get('message.first_name'); ?></label>
                            <input class="form-control" id="first_name" type="text" name="first_name"
                                placeholder="<?php echo app('translator')->get('message.first_name'); ?>" value="<?php echo e($user->first_name); ?>">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="last_name"><?php echo app('translator')->get('message.last_name'); ?></label>
                            <input class="form-control" id="last_name" type="text" name="last_name"
                                placeholder="<?php echo app('translator')->get('message.last_name'); ?>" value="<?php echo e($user->last_name); ?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="email"><?php echo app('translator')->get('message.body.email'); ?> </label>
                            <input class="form-control" id="email" type="text" name="email"
                                placeholder="<?php echo app('translator')->get('message.body.enter_email'); ?>" value="<?php echo e($user->email); ?>">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="dob"><?php echo app('translator')->get('message.dob'); ?></label>
                            <input class="form-control" id="dob" type="date" name="dob"
                                placeholder="<?php echo app('translator')->get('message.dob'); ?>" value="<?php echo e($user->dob); ?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="phone"><?php echo app('translator')->get('message.body.phone'); ?></label>
                            <input class="form-control" id="phone" type="text" name="phone"
                                placeholder="<?php echo app('translator')->get('message.body.enter_phone'); ?>" value="<?php echo e($user->phone); ?>">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="postal-code"><?php echo app('translator')->get('message.body.zip'); ?> /
                                <?php echo app('translator')->get('message.postal_code'); ?></label>
                            <input class="form-control" id="postal-code" type="text" placeholder="Zip Code"
                                name="zip_code" value="<?php echo e($user->zip_code); ?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="country"><?php echo app('translator')->get('message.register.country'); ?></label>
                            <select class="form-control" name="country" id="country" required>
                                <option selected disabled>
                                    <?php echo app('translator')->get('message.body.country'); ?>
                                </option>
                                <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php if($user->country_id == $country->id || $user->country_id == $name): ?> selected <?php endif; ?>
                                        value="<?php echo e($country->id); ?>">
                                        <?php echo e(ucfirst($country->name)); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="address"><?php echo app('translator')->get('message.address'); ?></label>
                            <input type="text" class="form-control" name="address" value="<?php echo e($user->address); ?>"
                                id="address" placeholder="<?php echo app('translator')->get('message.address'); ?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="state"><?php echo app('translator')->get('message.register.state'); ?></label>
                            <input type="text" class="form-control" name="state" value="<?php echo e($user->state); ?>"
                                id="state" placeholder="<?php echo app('translator')->get('message.register.enter_stt'); ?>">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="city"><?php echo app('translator')->get('message.body.city'); ?></label>
                            <input type="text" class="form-control" name="town" value="<?php echo e($user->town); ?>" id="town"
                                placeholder="<?php echo app('translator')->get('message.register.town'); ?>">
                        </div>
                    </div>

                    <h5 class="">Referral link</h5>
                    <input style="padding:5px;" class="form-control" value="<?php echo e($user->ref_link); ?>" type="text"
                        name="ref_link"><br />
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                    <input type="submit" class="btn btn-primary" value="Update user">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Edit user Modal -->


<!-- Reset user password Modal -->
<div id="resetpswdModal<?php echo e($user->id); ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Reset Password</strong></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p class="">Are you sure you want to reset password for <?php echo e($user->name); ?> to <span
                        class="text-primary font-weight-bolder">user01236</span></p>
                <a class="btn btn-primary" href="<?php echo e(route('resetpswd', $user->id)); ?>">Reset
                    Now</a>
            </div>
        </div>
    </div>
</div>
<!-- /Reset user password Modal -->


<!-- Switch useraccount Modal -->
<div id="switchuserModal<?php echo e($user->id); ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">You are about to login as
                    <?php echo e($user->name); ?>.</strong></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <a class="btn btn-primary" target="_bank" href="<?php echo e(route('switchtouser', $user->id)); ?>">Proceed</a>
            </div>
        </div>
    </div>
</div>
<!-- /Switch user account Modal -->


<!-- Clear account Modal -->
<div id="clearacctModal<?php echo e($user->id); ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Clear Account</strong></h4>
                <button type="button" class="close " data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>You are clearing account for <?php echo e($user->name); ?> to $0.00</p>
                <a class="btn btn-primary" href="<?php echo e(route('clearacct', $user->id)); ?>">Proceed</a>
            </div>
        </div>
    </div>
</div>
<!-- /Clear account Modal -->


<!-- Delete user Modal -->
<div id="deleteModal<?php echo e($user->id); ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Delete User</strong></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body p-3">
                <p class="">Are you sure you want to delete <?php echo e($user->name); ?></p>
                <a class="btn btn-danger" href="<?php echo e(route('deluser', $user->id)); ?>">Yes, I'm sure</a>
            </div>
        </div>
    </div>
</div>
<!-- /Delete user Modal -->


<!-- Live MT5 Account Mg't  Modal -->
<div id="liveaccounts<?php echo e($user->id); ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">MT5 Accounts</strong></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="accountstable table table-hover">
                    <div class="row">
                        <div class="cell">ID</div>
                        <div class="cell">Number</div>
                        <div class="cell">Balance</div>
                        <div class="cell">First Deposit</div>
                        <div class="cell">Action</div>
                    </div>
                    <?php $__currentLoopData = $user->accounts(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $acc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row">
                            <div class="cell" scope="row"><?php echo e($acc->id); ?></div>
                            <div class="cell"><?php echo e($acc->login); ?></div>
                            <div class="cell"><?php echo e($acc->balance); ?></div>
                            <div class="cell">
                                <a href="<?php echo e(route('dellaccounts', $acc->id)); ?>"
                                    class="m-1 btn btn-danger btn-xs">Delete
                                    Account</a>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Live MT5 Account Mg't  Modal -->
<?php /**PATH /Users/wadleo/Documents/Projects/axeprogroup/axepro/resources/views/admin/users_actions.blade.php ENDPATH**/ ?>