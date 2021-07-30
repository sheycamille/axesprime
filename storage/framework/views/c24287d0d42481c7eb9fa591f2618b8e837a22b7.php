<!-- Top Up Modal -->
<div id="topupModal<?php echo e($user->id); ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                <h4 class="modal-title" style="text-align:center;">Credit/Debit User account.</strong></h4>
                <button type="button" class="close text-<?php echo e($text); ?>" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                <form style="padding: 3px;" role="form" method="post" action="<?php echo e(route('topup')); ?>">
                    <input style="padding: 10px;"
                        class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>"
                        value="<?php echo e($user->id); ?>" type="text" disabled><br />
                    <select required class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>"
                        name="account_id" id="account_id" required>
                        <option value="" disabled selected>Choose Acount</option>
                        <?php $__currentLoopData = $user->accounts(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($account->id); ?>"><?php echo e($account->login); ?> |
                                <?php echo e($account->server); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <br>

                    <h5 class="text-<?php echo e($text); ?>">Amount</h5>
                    <input style="padding: 10px;"
                        class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>"
                        placeholder="Enter amount" type="text" name="amount" required>
                    <br>

                    <h5 class="text-<?php echo e($text); ?>">Select credit to add, debit to subtract.</h5>
                    <select
                        class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>"
                        name="t_type" required>
                        <option value="">Select type</option>
                        <option value="Credit">Credit</option>
                        <option value="Debit">Debit</option>
                    </select>
                    <br><br>

                    <h5 class="text-<?php echo e($text); ?>">Select where to Credit/Debit</h5>
                    <select
                        class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>"
                        name="type" required>
                        <option value="">Select Column</option>
                        <option value="Balance">Balance</option>
                        <option value="Bonus">Bonus</option>
                    </select>
                    <br><br>

                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                    <input type="submit" class="btn btn-<?php echo e($text); ?>" value="Save">
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
            <div class="modal-header bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                <h4 class="modal-title text-<?php echo e($text); ?>">Send Email Message</h4>
                <button type="button" class="close text-<?php echo e($text); ?>" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                <p>This message will be sent to <?php echo e($user->name); ?> <?php echo e($user->l_name); ?> </p>
                <form style="padding:3px;" role="form" method="post" action="<?php echo e(route('sendmailtooneuser')); ?>">
                    <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                    <textarea placeholder="Type your message here"
                        class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>"
                        name="message" row="3" placeholder="Type your message here" required></textarea><br />
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="submit" class="btn btn-<?php echo e($text); ?>" value="Send">
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
            <div class="modal-header bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">

                <h4 class="modal-title text-<?php echo e($text); ?>">Add Trading History for <?php echo e($user->name); ?>

                    <?php echo e($user->l_name); ?> </h4>
                <button type="button" class="close text-<?php echo e($text); ?>" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                <form role="form" method="post" action="<?php echo e(route('addhistory')); ?>">
                    <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                    <h5 class=" text-<?php echo e($text); ?>">Amount</h5>
                    <input type="number" name="amount"
                        class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>">
                    <div class="form-group">
                        <h5 class=" text-<?php echo e($text); ?>">Type</h5>
                        <select
                            class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>"
                            name="type">
                            <option value="">Select type</option>
                            <option value="Bonus">Bonus</option>
                            
                        </select>
                    </div>

                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="submit" class="btn btn-<?php echo e($text); ?>" value="Add History">
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
            <div class="modal-header bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">

                <h4 class="modal-title text-<?php echo e($text); ?>">Edit user details.</strong></h4>
                <button type="button" class="close text-<?php echo e($text); ?>" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                <form style="padding:3px;" role="form" method="post" action="<?php echo e(route('edituser')); ?>">
                    <input style="padding:5px;"
                        class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>"
                        value="<?php echo e($user->name); ?>" type="text" disabled><br />
                    <h5 class=" text-<?php echo e($text); ?>">Fullname</h5>
                    <input style="padding:5px;"
                        class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>"
                        value="<?php echo e($user->name); ?>" type="text" name="name" required><br />
                    <h5 class=" text-<?php echo e($text); ?>">Email</h5>
                    <input style="padding:5px;"
                        class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>"
                        value="<?php echo e($user->email); ?>" type="text" name="email" required><br />
                    <h5 class=" text-<?php echo e($text); ?>">Phone Number</h5>
                    <input style="padding:5px;"
                        class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>"
                        value="<?php echo e($user->phone); ?>" type="text" name="phone" required><br />
                    <h5 class=" text-<?php echo e($text); ?>">Referral link</h5>
                    <input style="padding:5px;"
                        class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>"
                        value="<?php echo e($user->ref_link); ?>" type="text" name="ref_link" required><br />
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                    <input type="submit" class="btn btn-<?php echo e($text); ?>" value="Update user">
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
            <div class="modal-header bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                <h4 class="modal-title text-<?php echo e($text); ?>">Reset Password</strong></h4>
                <button type="button" class="close text-<?php echo e($text); ?>" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                <p class="text-<?php echo e($text); ?>">Are you sure you want to reset password for <?php echo e($user->name); ?>

                    <?php echo e($user->l_name); ?> to <span class="text-primary font-weight-bolder">user01236</span></p>
                <a class="btn btn-<?php echo e($text); ?>"
                    href="<?php echo e(url('admin/dashboard/resetpswd')); ?>/<?php echo e($user->id); ?>">Reset Now</a>
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
            <div class="modal-header bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                <h4 class="modal-title text-<?php echo e($text); ?>">You are about to login as
                    <?php echo e($user->name); ?>.</strong></h4>
                <button type="button" class="close text-<?php echo e($text); ?>" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                <a class="btn btn-<?php echo e($text); ?>" target="_bank"
                    href="<?php echo e(url('admin/dashboard/switchuser')); ?>/<?php echo e($user->id); ?>">Proceed</a>
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
            <div class="modal-header bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                <h4 class="modal-title text-<?php echo e($text); ?>">Clear Account</strong></h4>
                <button type="button" class="close  text-<?php echo e($text); ?>" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                <p>You are clearing account for <?php echo e($user->name); ?> <?php echo e($user->l_name); ?> to $0.00</p>
                <a class="btn btn-<?php echo e($text); ?>"
                    href="<?php echo e(url('admin/dashboard/clearacct')); ?>/<?php echo e($user->id); ?>">Proceed</a>
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
            <div class="modal-header bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">

                <h4 class="modal-title text-<?php echo e($text); ?>">Delete User</strong></h4>
                <button type="button" class="close text-<?php echo e($text); ?>" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> p-3">
                <p class="text-<?php echo e($text); ?>">Are you sure you want to delete <?php echo e($user->name); ?>

                    <?php echo e($user->l_name); ?></p>
                <a class="btn btn-danger"
                    href="<?php echo e(url('admin/dashboard/delsystemuser')); ?>/<?php echo e($user->id); ?>">Yes i'm sure</a>
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
            <div class="modal-header bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                <h4 class="modal-title text-<?php echo e($text); ?>">MT5 Accounts</strong></h4>
                <button type="button" class="close text-<?php echo e($text); ?>" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                <div class="accountstable table table-hover text-<?php echo e($text); ?>">
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
                                    class="m-1 btn btn-danger btn-xs">Delete Account</a>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Live MT5 Account Mg't  Modal -->
<?php /**PATH /Users/wadingaleonardngonga/Documents/Projects/axesprime/resources/views/admin/users_actions.blade.php ENDPATH**/ ?>