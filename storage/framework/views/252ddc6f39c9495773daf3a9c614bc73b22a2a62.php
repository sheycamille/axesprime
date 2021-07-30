<?php
if (Auth::user()->dashboard_style == 'light') {
$bg = 'light';
$text = 'dark';
} else {
$bg = 'dark';
$text = 'light';
} ?>

<?php $__env->startSection('deposits-and-withdrawals', 'active'); ?>
<?php $__env->startSection('deposits', 'active'); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('user.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('user.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-panel bg-<?php echo e($bg); ?>">
        <div class="content bg-<?php echo e($bg); ?>">
            <div class="page-inner">
                <div class="mt-2 mb-5">
                    <h1 class="title1 text-<?php echo e($text); ?> text-center"><?php echo e($title); ?></h1>
                </div>

                <?php if(Session::has('message')): ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
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
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <i class="fa fa-warning"></i> <?php echo e($error); ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="row">
                    <div class="col card bg-<?php echo e($bg); ?> p-2">
                        <div class="row justify-content-space-between">
                            <div class="col-md-4">
                                <div class="text-center">
                                    <h3 class="text-<?php echo e($text); ?>">You are to send
                                        <strong><?php echo e(\App\Models\Setting::getValue('currency')); ?><?php echo e($amount); ?>

                                            USD</strong>
                                        to the wallet address below
                                    </h3>
                                </div>
                                <div class="card bg-<?php echo e($bg); ?> shadow text-<?php echo e($text); ?>">
                                    <div class="card-body">
                                        <h3 class="text-<?php echo e($text); ?> text-center pt-2 pb-3">
                                            Wallet Address:
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
                                <h3 class="text-<?php echo e($text); ?>">Check how many <?php echo e($exchange_symbol); ?> you are to
                                    send.</h3>
                                <div>
                                    <iframe
                                        src="https://widget.coinlib.io/widget?type=converter&theme=dark&from=usd&to=<?php echo e($exchange_symbol); ?>&amount=<?php echo e($amount); ?>"
                                        width="300px" height="350px" scrolling="auto" marginwidth="0" marginheight="0"
                                        frameborder="0" border="0" style="border:0;margin:auto;padding:0;"></iframe>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <form method="post" action="<?php echo e(route('savedeposit')); ?>" enctype="multipart/form-data">
                                    <h3 class="text-<?php echo e($text); ?>">Upload payment proof after payment.</h3>
                                    <input type="file" name="proof"
                                        class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" required>
                                    <br>

                                    <h5 class="text-<?php echo e($text); ?>">Payment Mode Used:</h5>
                                    <select name="payment_mode"
                                        class="form-control bg-<?php echo e($bg); ?> text-<?php echo e($text); ?>" required>
                                        <?php $__currentLoopData = $dmethods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dmethod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($dmethod->exchange_symbol == $exchange_symbol): ?>
                                                <option value="<?php echo e($dmethod->name); ?>"><?php echo e($dmethod->name); ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                <h3 class="text-center text-<?php echo e($text); ?>">Markets to buy cryptocurrencies</h3>
                                <div class="row">
                                    <div class="col-6 text-center d-flex justify-content-center align-items-center">
                                        <a class="text-center" href="https://accounts.binance.me/en/register?ref=127286501"
                                            target="_blank">
                                            <img src="<?php echo e(asset('dash/images/binance.png')); ?>" alt="Buy on Binance"
                                                tilte="Buy on Binance" width="80%" />
                                            <br>
                                            <span>Buy Now</span>
                                        </a>
                                    </div>
                                    <div class="col-6 text-center d-flex justify-content-center align-items-center">
                                        <a class="text-center" href="https://crypto.com/" target="_blank">
                                            <img src="<?php echo e(asset('dash/images/crypto-com.png')); ?>" alt="Buy on Crypto.com"
                                                tilte="Buy on Crypto.com" width="80%" />
                                            <br>
                                            <span>Buy Now</span>
                                        </a>
                                    </div>
                                    <br><br><br><br><br><br><br><br><br>
                                    <div class="col-6 text-center d-flex justify-content-center align-items-center">
                                        <a class="text-center" href="https://www.coinbase.com/" target="_blank">
                                            <img src="<?php echo e(asset('dash/images/coinbase.png')); ?>" alt="Buy on Coinbase"
                                                tilte="Buy on Coinbase" width="80%" />
                                            <br>
                                            <span>Buy Now</span>
                                        </a>
                                    </div>
                                    <div class="col-6 text-center d-flex justify-content-center align-items-center">
                                        <a class="text-center" href="https://shakepay.com/" target="_blank">
                                            <img src="<?php echo e(asset('dash/images/shakepay.jpg')); ?>" alt="Buy on ShakePay"
                                                tilte="Buy on Blockchain" width="80%" />
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
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadingaleonardngonga/Documents/Projects/axesprime/resources/views/user/coins.blade.php ENDPATH**/ ?>