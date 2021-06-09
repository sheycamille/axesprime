	<!-- Top Up Modal -->
    <div id="topupModal<?php echo e($list->id); ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                    <h4 class="modal-title" style="text-align:center;">Credit/Debit User account.</strong></h4>
                    <button type="button" class="close text-<?php echo e($text); ?>" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                        <form style="padding:3px;" role="form" method="post" action="<?php echo e(route('topup')); ?>">
                        <input style="padding:5px;" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" value="<?php echo e($list->name); ?>" type="text" disabled><br/>
                            <input style="padding:5px;" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" placeholder="Enter amount" type="text" name="amount" required><br/>
                            <div class="form-group">
                                <h5 class="text-<?php echo e($text); ?>">Select where to Credit/Debit</h5>
                                <select class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" name="type" required>
                                <option value="">Select Column</option>
                                <option value="Bonus">Bonus</option>
                                <option value="Profit">Profit</option>
                                <option value="Ref_Bonus">Ref_Bonus</option>
                                <option value="Deposit">Deposit</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <h5 class="text-<?php echo e($text); ?>">Select credit to add, debit to subtract.</h5>
                                <select class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" name="t_type" required>
                                <option value="">Select type</option>
                                <option value="Credit">Credit</option>
                                <option value="Debit">Debit</option>
                                </select>
                            </div>
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                            <input type="hidden" name="user_id" value="<?php echo e($list->id); ?>">
                        <input type="submit" class="btn btn-<?php echo e($text); ?>" value="Save">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /deposit for a plan Modal -->


    <!-- send a single user email Modal-->
    <div id="sendmailtooneuserModal<?php echo e($list->id); ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                    <h4 class="modal-title text-<?php echo e($text); ?>">Send Email Message</h4>
                    <button type="button" class="close text-<?php echo e($text); ?>" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                    <p>This message will be sent to <?php echo e($list->name); ?> <?php echo e($list->l_name); ?> </p>
                    <form style="padding:3px;" role="form" method="post" action="<?php echo e(route('sendmailtooneuser')); ?>">
                        <input type="hidden" name="user_id" value="<?php echo e($list->id); ?>">
                        <textarea placeholder="Type your message here" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" name="message" row="3" placeholder="Type your message here" required></textarea><br/>
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input type="submit" class="btn btn-<?php echo e($text); ?>" value="Send">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Trading History Modal -->

    <div id="TradingModal<?php echo e($list->id); ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">

                    <h4 class="modal-title text-<?php echo e($text); ?>">Add Trading History for <?php echo e($list->name); ?> <?php echo e($list->l_name); ?> </h4>
                    <button type="button" class="close text-<?php echo e($text); ?>" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                        <form role="form" method="post" action="<?php echo e(route('addhistory')); ?>">
                        <input type="hidden" name="user_id" value="<?php echo e($list->id); ?>">

                        <div class="form-group">
                            <h5 class=" text-<?php echo e($text); ?>">Investment Plans</h5>

                            <select class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" name="plan">
                            <option value="">Select Plan</option>
                            <?php $__currentLoopData = $pl; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plns): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($plns->name); ?>"><?php echo e($plns->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <h5 class=" text-<?php echo e($text); ?>">Amount</h5>
                        <input type="number" name="amount" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>">
                        <div class="form-group">
                            <h5 class=" text-<?php echo e($text); ?>">Type</h5>
                            <select class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" name="type">
                            <option value="">Select type</option>
                            <option value="Bonus">Bonus</option>
                            <option value="ROI">ROI</option>
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
    <div id="edituser<?php echo e($list->id); ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">

                    <h4 class="modal-title text-<?php echo e($text); ?>">Edit user details.</strong></h4>
                    <button type="button" class="close text-<?php echo e($text); ?>" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                    <form style="padding:3px;" role="form" method="post" action="<?php echo e(route('edituser')); ?>">
                        <input style="padding:5px;" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" value="<?php echo e($list->name); ?>" type="text" disabled><br/>
                        <h5 class=" text-<?php echo e($text); ?>">Fullname</h5>
                        <input style="padding:5px;" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" value="<?php echo e($list->name); ?>" type="text" name="name" required><br/>
                        <h5 class=" text-<?php echo e($text); ?>">Email</h5>
                        <input style="padding:5px;" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" value="<?php echo e($list->email); ?>" type="text" name="email" required><br/>
                        <h5 class=" text-<?php echo e($text); ?>">Phone Number</h5>
                        <input style="padding:5px;" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" value="<?php echo e($list->phone); ?>" type="text" name="phone" required><br/>
                        <h5 class=" text-<?php echo e($text); ?>">Referral link</h5>
                        <input style="padding:5px;" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" value="<?php echo e($list->ref_link); ?>" type="text" name="ref_link" required><br/>
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input type="hidden" name="user_id" value="<?php echo e($list->id); ?>">
                        <input type="submit" class="btn btn-<?php echo e($text); ?>" value="Update user">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit user Modal -->

    <!-- Reset user password Modal -->
    <div id="resetpswdModal<?php echo e($list->id); ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                    <h4 class="modal-title text-<?php echo e($text); ?>">Reset Password</strong></h4>
                    <button type="button" class="close text-<?php echo e($text); ?>" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                    <p class="text-<?php echo e($text); ?>">Are you sure you want to reset password for <?php echo e($list->name); ?> <?php echo e($list->l_name); ?> to <span class="text-primary font-weight-bolder">user01236</span></p>
                    <a class="btn btn-<?php echo e($text); ?>" href="<?php echo e(url('admin/dashboard/resetpswd')); ?>/<?php echo e($list->id); ?>">Reset Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Reset user password Modal -->

    <!-- Switch useraccount Modal -->
    <div id="switchuserModal<?php echo e($list->id); ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                    <h4 class="modal-title text-<?php echo e($text); ?>">You are about to login as <?php echo e($list->name); ?>.</strong></h4>
                    <button type="button" class="close text-<?php echo e($text); ?>" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                    <a class="btn btn-<?php echo e($text); ?>" href="<?php echo e(url('admin/dashboard/switchuser')); ?>/<?php echo e($list->id); ?>">Proceed</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Switch user account Modal -->

    <!-- Clear account Modal -->
    <div id="clearacctModal<?php echo e($list->id); ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                    <h4 class="modal-title text-<?php echo e($text); ?>">Clear Account</strong></h4>
                    <button type="button" class="close  text-<?php echo e($text); ?>" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                    <p>You are clearing account for <?php echo e($list->name); ?> <?php echo e($list->l_name); ?> to $0.00</p>
                    <a class="btn btn-<?php echo e($text); ?>" href="<?php echo e(url('admin/dashboard/clearacct')); ?>/<?php echo e($list->id); ?>">Proceed</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Clear account Modal -->

    <!-- Delete user Modal -->
    <div id="deleteModal<?php echo e($list->id); ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">

                    <h4 class="modal-title text-<?php echo e($text); ?>">Delete User</strong></h4>
                    <button type="button" class="close text-<?php echo e($text); ?>" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> p-3">
                    <p class="text-<?php echo e($text); ?>">Are you sure you want to delete <?php echo e($list->name); ?> <?php echo e($list->l_name); ?></p>
                    <a class="btn btn-danger" href="<?php echo e(url('admin/dashboard/delsystemuser')); ?>/<?php echo e($list->id); ?>">Yes i'm sure</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete user Modal -->
<?php /**PATH /Users/wadingaleonardngonga/Downloads/online-trade-06-04-2021/resources/views/admin/users_actions.blade.php ENDPATH**/ ?>