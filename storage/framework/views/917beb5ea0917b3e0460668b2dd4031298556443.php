

<?php $__env->startSection('title', 'My Withdrawal Info'); ?>

<?php $__env->startSection('my-accounts', 'c-show'); ?>
<?php $__env->startSection('withdrawal-info', 'c-active'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('user.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('user.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container-fluid">
    <div class="fade-in">
        <div class="col-lg-12">
            <form class="col-lg-12" method="post" action="<?php echo e(route('updatewithdrawaldetails')); ?>">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header"><strong><?php echo app('translator')->get('message.withdrawal_details.bank'); ?></strong>
                                <small><?php echo app('translator')->get('message.withdrawal_details.transfer'); ?></small>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="bank_name"><?php echo app('translator')->get('message.withdrawal_details.name'); ?></label>
                                    <input name="bank_name" class="form-control" id="bank_name" type="text"
                                        placeholder="" value="<?php echo e(Auth::user()->bank_name); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="bank_address"><?php echo app('translator')->get('message.withdrawal_details.bank_addres'); ?></label>
                                    <input name="bank_address" class="form-control" id="bank_address" type="text"
                                        placeholder="" value="<?php echo e(Auth::user()->bank_address); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="swift_code"><?php echo app('translator')->get('message.withdrawal_details.swift'); ?></label>
                                    <input name="swift_code" class="form-control" id="swift_code" type="text"
                                        placeholder="" value="<?php echo e(Auth::user()->swift_code); ?>">
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-8">
                                        <label for="account_name"><?php echo app('translator')->get('message.withdrawal_details.acnt_name'); ?></label>
                                        <input name="account_name" class="form-control" id="account_name" type="text"
                                            placeholder="" value="<?php echo e(Auth::user()->account_name); ?>">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="account_number"><?php echo app('translator')->get('message.withdrawal_details.acnt_num'); ?></label>
                                        <input name="account_number" class="form-control" id="account_number"
                                            type="text" placeholder="" value="<?php echo e(Auth::user()->account_number); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header"><strong><?php echo app('translator')->get('message.withdrawal_details.cash'); ?></strong>
                                <small></small>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="bch"><?php echo app('translator')->get('message.withdrawal_details.cash_addres'); ?></label>
                                    <input name="bch_address" class="form-control" id="bch" type="text"
                                        value="<?php echo e(Auth::user()->bch_address); ?>">
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header"><strong><?php echo app('translator')->get('message.withdrawal_details.interac'); ?></strong>
                                <small></small>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="interac"><?php echo app('translator')->get('message.withdrawal_details.int_email'); ?> </label>
                                    <input name="interac" class="form-control" id="interac" type="text"
                                        value="<?php echo e(Auth::user()->interac); ?>">
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header"><strong>Paypal</strong> <small></small></div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="paypal"><?php echo app('translator')->get('message.withdrawal_details.paypa'); ?></label>
                                    <input class="form-control" id="paypal" type="text" name="paypal_email"
                                        value="<?php echo e(Auth::user()->paypal_email); ?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header"><strong><?php echo app('translator')->get('message.withdrawal_details.bitcoin'); ?></strong>
                                <small></small>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="btc"><?php echo app('translator')->get('message.withdrawal_details.btc_addres'); ?></label>
                                    <input name="btc_address" class="form-control" id="btc" type="text"
                                        value="<?php echo e(Auth::user()->btc_address); ?>">
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header"><strong><?php echo app('translator')->get('message.withdrawal_details.ethereum'); ?></strong>
                                <small></small>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="eth"><?php echo app('translator')->get('message.withdrawal_details.ethe_addres'); ?> </label>
                                    <input name="eth_address" class="form-control" id="eth" type="text"
                                        value="<?php echo e(Auth::user()->eth_address); ?>">
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header"><strong>Litcoin</strong> <small></small></div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="ltc"><?php echo app('translator')->get('message.withdrawal_details.ltc_addres'); ?></label>
                                    <input name="ltc_address" class="form-control" id="ltc" type="text"
                                        value="<?php echo e(Auth::user()->ltc_address); ?>">
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header"><strong>USDT</strong> <small></small></div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="usdt"><?php echo app('translator')->get('message.withdrawal_details.us_addres'); ?> </label>
                                    <input name="usdt_address" class="form-control" id="usdt" type="text"
                                        value="<?php echo e(Auth::user()->usdt_address); ?>">
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header"><strong>XRP</strong> <small></small></div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="xrp"><?php echo app('translator')->get('message.withdrawal_details.xr_addres'); ?></label>
                                    <input name="xrp_address" class="form-control" id="xrp" type="text"
                                        value="<?php echo e(Auth::user()->xrp_address); ?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header"><strong>BNB</strong> <small></small></div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="bnb"><?php echo app('translator')->get('message.withdrawal_details.bn_addres'); ?> </label>
                                    <input name="bnb_address" class="form-control" id="bnb" type="text"
                                        value="<?php echo e(Auth::user()->bnb_address); ?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="d-grid gap-2">
                            <input type="hidden" name="id" value="<?php echo e(Auth::user()->id); ?>">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                            <button class="btn btn-primary" type="submit"> <?php echo app('translator')->get('message.body.submit'); ?></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\axesprime\resources\views/user/withdrawaldetails.blade.php ENDPATH**/ ?>