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
                            <div class="card-header"><strong>Bank</strong> <small>Transfer</small></div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="bank_name">Bank Name </label>
                                    <input name="bank_name" class="form-control" id="bank_name" type="text"
                                        placeholder="" value="<?php echo e(Auth::user()->bank_name); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="bank_address">Bank Address</label>
                                    <input name="bank_address" class="form-control" id="bank_address" type="text"
                                        placeholder="" value="<?php echo e(Auth::user()->bank_address); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="swift_code">Swift Code</label>
                                    <input name="swift_code" class="form-control" id="swift_code" type="text"
                                        placeholder="" value="<?php echo e(Auth::user()->swift_code); ?>">
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-8">
                                        <label for="account_name">Account Name</label>
                                        <input name="account_name" class="form-control" id="account_name" type="text"
                                            placeholder="" value="<?php echo e(Auth::user()->account_name); ?>">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="account_number">Account Number</label>
                                        <input name="account_number" class="form-control" id="account_number"
                                            type="text" placeholder="" value="<?php echo e(Auth::user()->account_number); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header"><strong>Bitcoin Cash</strong> <small></small></div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="bch">Bitcoin Cash Address</label>
                                    <input name="bch_address" class="form-control" id="bch" type="text"
                                        placeholder="Enter BCH Address" value="<?php echo e(Auth::user()->bch_address); ?>">
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header"><strong>Interac</strong> <small></small></div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="interac">Interac Email </label>
                                    <input name="interac" class="form-control" id="interac" type="text"
                                        placeholder="Enter Interac Email Address" value="<?php echo e(Auth::user()->interac); ?>">
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header"><strong>Paypal</strong> <small></small></div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="paypal">Paypal Email</label>
                                    <input class="form-control" id="paypal" type="text"
                                        placeholder="Enter Paypal Email Address"
                                        value="<?php echo e(Auth::user()->paypal_email); ?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header"><strong>Bitcoin</strong> <small></small></div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="btc">Btc Address</label>
                                    <input name="btc_address" class="form-control" id="btc" type="text"
                                        placeholder="Enter Bit Coin Address" value="<?php echo e(Auth::user()->btc_address); ?>">
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header"><strong>Ethereum</strong> <small></small></div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="eth">Ethereum Address </label>
                                    <input name="eth_address" class="form-control" id="eth" type="text"
                                        placeholder="Enter Ethereum Address" value="<?php echo e(Auth::user()->eth_address); ?>">
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header"><strong>Litcoin</strong> <small></small></div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="ltc">LTC Address</label>
                                    <input name="ltc_address" class="form-control" id="ltc" type="text"
                                        placeholder="Enter Litcoin Address" value="<?php echo e(Auth::user()->ltc_address); ?>">
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header"><strong>USDT</strong> <small></small></div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="usdt">USDT Address </label>
                                    <input name="usdt_address" class="form-control" id="usdt" type="text"
                                        placeholder="Enter USDT Address" value="<?php echo e(Auth::user()->usdt_address); ?>">
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header"><strong>XRP</strong> <small></small></div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="xrp">XRP Address</label>
                                    <input name="xrp_address" class="form-control" id="xrp" type="text"
                                        placeholder="Enter XRP Address" value="<?php echo e(Auth::user()->xrp_address); ?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header"><strong>BNB</strong> <small></small></div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="bnb">BNB Address </label>
                                    <input name="bnb_address" class="form-control" id="bnb" type="text"
                                        placeholder="Enter BNB Address" value="<?php echo e(Auth::user()->bnb_address); ?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="d-grid gap-2">
                            <input type="hidden" name="id" value="<?php echo e(Auth::user()->id); ?>">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                            <button class="btn btn-primary" type="submit"> Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadleo/Documents/Projects/axeprogroup/axepro/resources/views/user/withdrawaldetails.blade.php ENDPATH**/ ?>