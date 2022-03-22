<?php $__env->startSection('title', 'Coins Payment'); ?>

<?php $__env->startSection('deposits-and-withdrawals', 'c-show'); ?>
<?php $__env->startSection('deposits', 'c-active'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('user.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('user.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header fw-bolder">
                        <?php echo e($title); ?>

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
                                <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <i class="fa fa-warning"></i> <?php echo e($error); ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>

                        <div class="row">
                            <div class="col p-2">
                                <div class="row justify-content-space-between">
                                    <div class="col-md-4">
                                        <div class="text-center">
                                            <h3 class=""><?php echo app('translator')->get('message.coins.send'); ?>
                                                <strong><?php echo e(\App\Models\Setting::getValue('currency')); ?><?php echo e($amount); ?>

                                                    USD</strong>
                                                    <?php echo app('translator')->get('message.coins.walet'); ?>
                                            </h3>
                                        </div>
                                        <div class="card shadow">
                                            <div class="card-body">
                                                <h3 class="text-center pt-2 pb-3">
                                                <?php echo app('translator')->get('message.coins.wadrs'); ?>:
                                                    <a class="pt-5" style="text-decoration:none;" href="#paypal">
                                                        <?php echo e($wallet_address); ?>

                                                    </a>
                                                </h3>
                                                <div id="paypal">
                                                    <div class="text-center">
                                                        <?php echo QrCode::size(250)->generate($wallet_address); ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <h3 class=""><?php echo app('translator')->get('message.coins.check'); ?><?php echo e($dmethod->name); ?> <?php echo app('translator')->get('message.coins.to'); ?></h3>
                                        <div>
                                            <iframe
                                                src="https://widget.coinlib.io/widget?type=converter&theme=dark&from=usd&to=<?php echo e($dmethod->exchange_symbol); ?>&amount=<?php echo e($amount); ?>"
                                                width="300px" height="350px" scrolling="auto" marginwidth="0"
                                                marginheight="0" frameborder="0" border="0"
                                                style="border:0;margin:auto;padding:0;"></iframe>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <form method="post" action="<?php echo e(route('savedeposit')); ?>"
                                            enctype="multipart/form-data">
                                            <h3 class=""><?php echo app('translator')->get('message.coins.upload'); ?></h3>
                                            <input type="file" name="proof" class="form-control" required>
                                            <br>

                                            <h5 class=""><?php echo app('translator')->get('message.coins.mode'); ?>:</h5>
                                            <select name="payment_mode" class="form-control" required>
                                                <option value="<?php echo e($dmethod->name); ?>"><?php echo e($dmethod->name); ?></option>
                                            </select>
                                            <br>
                                            <input type="hidden" name="amount" value="<?php echo e($amount); ?>">
                                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                            <input type="submit" class="btn btn-<?php echo e($text); ?>" value="Submit Proof">
                                        </form>
                                    </div>
                                </div>
                                <br> <br>

                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <h3 class="text-center"><?php echo app('translator')->get('message.coins.markets'); ?></h3>
                                        <div class="row">
                                            <div
                                                class="col-6 text-center d-flex justify-content-center align-items-center">
                                                <a class="text-center"
                                                    href="https://accounts.binance.me/en/register?ref=127286501"
                                                    target="_blank">
                                                    <img src="<?php echo e(asset('dash/images/binance.png')); ?>"
                                                        alt="Buy on Binance" tilte="Buy on Binance" width="80%" />
                                                    <br>
                                                    <span><?php echo app('translator')->get('message.coins.buy'); ?></span>
                                                </a>
                                            </div>
                                            <div
                                                class="col-6 text-center d-flex justify-content-center align-items-center">
                                                <a class="text-center" href="https://crypto.com/" target="_blank">
                                                    <img src="<?php echo e(asset('dash/images/crypto-com.png')); ?>"
                                                        alt="Buy on Crypto.com" tilte="Buy on Crypto.com" width="80%" />
                                                    <br>
                                                    <span><?php echo app('translator')->get('message.coins.buy'); ?></span>
                                                </a>
                                            </div>
                                            <br><br><br><br><br><br><br><br><br>
                                            <div
                                                class="col-6 text-center d-flex justify-content-center align-items-center">
                                                <a class="text-center" href="https://www.coinbase.com/" target="_blank">
                                                    <img src="<?php echo e(asset('dash/images/coinbase.png')); ?>"
                                                        alt="Buy on Coinbase" tilte="Buy on Coinbase" width="80%" />
                                                    <br>
                                                    <span><?php echo app('translator')->get('message.coins.buy'); ?></span>
                                                </a>
                                            </div>
                                            <div
                                                class="col-6 text-center d-flex justify-content-center align-items-center">
                                                <a class="text-center" href="https://shakepay.com/" target="_blank">
                                                    <img src="<?php echo e(asset('dash/images/shakepay.jpg')); ?>"
                                                        alt="Buy on ShakePay" tilte="Buy on Blockchain" width="80%" />
                                                    <br>
                                                    <span>Buy Now</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadleo/Documents/Projects/axeprogroup/axepro/resources/views/user/coins.blade.php ENDPATH**/ ?>