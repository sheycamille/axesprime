<form method="post" action="<?php echo e(route('updatepreference')); ?>" enctype="multipart/form-data">
    <div class="form-group">
        <h5 class="text-<?php echo e($text); ?>">Contact Email</h5>
        <input type="text" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" name="contact_email" value="<?php echo e(\App\Models\Setting::getValue('contact_email')); ?>" required>
    </div>

    <div class="form-group">
        <h5 class="text-<?php echo e($text); ?>">Uploaded Files Location</h5>
        <small class="text-<?php echo e($text); ?>">Note: To use AWS S3, please supply your AWS information in the .ENV file</small>
        <select name="location" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>">
            <option><?php echo e(\App\Models\Setting::getValue('location')); ?></option>
            <option>AWS S3</option>
            <option>Email</option>
            <option>Local</option>
        </select><br />
    </div>

    <input name="s_currency" value="<?php echo e(\App\Models\Setting::getValue('s_currency')); ?>" id="s_c" type="hidden">
    <div class="form-group">
        <h5 class="text-<?php echo e($text); ?>">Website Currency</h5>
        <select name="currency" id="select_c" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" onchange="s_f()">
            <option value="<?php echo htmlentities(\App\Models\Setting::getValue('currency')); ?>"><?php echo e(\App\Models\Setting::getValue('currency')); ?></option>
            <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option id="<?php echo e($key); ?>" value="<?php echo html_entity_decode($currency); ?>"><?php echo e($key .' ('.html_entity_decode($currency).')'); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <script>
        function s_f() {
            var e = document.getElementById("select_c");
            var selected = e.options[e.selectedIndex].id;
            document.getElementById("s_c").value = selected;
        }

    </script>

    <input type="hidden" value="<?php echo e(\App\Models\Setting::getValue('site_preference')); ?>" name="site_preference">

    <div class="form-group">
        <div class="sign-u">
            <div class="sign-up1">
                <h5 class="text-<?php echo e($text); ?>">Turn off/on Annoucment: </h5>
            </div>
            <div class="sign-up2">
                <label class="switch">
                    <input name="enable_annoc" id="enable_annoc" type="checkbox" value="on">
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="sign-u">
            <div class="sign-up1">
                <h5 class="text-<?php echo e($text); ?>">Turn off/on Weekend Trade:</h5>
            </div>
            <div class="sign-up2">
                <small class="text-<?php echo e($text); ?>">if turned off, Users will not receive ROI on weekends</small> <br>
                <label class="switch">
                    <input name="weekend_trade" id="weekend_trade" type="checkbox" value="on">
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="sign-u">
            <div class="sign-up1">
                <h5 class="text-<?php echo e($text); ?>"> Disable/Enable Withdrawal:</h5>
            </div>
            <div class="sign-up2">
                <small class="text-<?php echo e($text); ?>">if turned on, Users will not be able to Withdraw</small> <br>
                <label class="switch">
                    <input name="enable_withdrawal" id="enable_withdrawal" type="checkbox" value="on">
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="sign-u">
            <div class="sign-up1">
                <h5 class="text-<?php echo e($text); ?>">Turn off/on Google Translate</h5>
            </div>
            <div class="sign-up2">
                <small class="text-<?php echo e($text); ?>">if turned on, Users will have the option of changing their language through google translate.</small> <br>
                <label class="switch">
                    <input name="googlet" id="googlet" type="checkbox" value="on">
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="sign-u">
            <div class="sign-up1">
                <h5 class="text-<?php echo e($text); ?>">Turn off/on trade: </h5>
            </div>
            <div class="sign-up2">
                <label class="switch">
                    <input name="trade_mode" id="trade_mode" type="checkbox" value="on">
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="sign-u">
            <div class="sign-up1">
                <h5 class="text-<?php echo e($text); ?>">Turn off/on KYC:</h5>
            </div>
            <div class="sign-up2">
                <label class="switch">
                    <input name="enable_kyc" id="enable_kyc" type="checkbox" value="on">
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
    </div>

    <?php if(\App\Models\Setting::getValue('enable_annoc')=='yes'): ?>
    <script>
        document.getElementById("enable_annoc").checked = true;

    </script>
    <?php endif; ?>

    <?php if(\App\Models\Setting::getValue('googlet')=='yes'): ?>
    <script>
        document.getElementById("googlet").checked = true;

    </script>
    <?php endif; ?>

    <?php if(\App\Models\Setting::getValue('trade_mode')=='yes'): ?>
    <script>
        document.getElementById("trade_mode").checked = true;

    </script>
    <?php endif; ?>

    <?php if(\App\Models\Setting::getValue('enable_kyc')=='yes'): ?>
    <script>
        document.getElementById("enable_kyc").checked = true;

    </script>
    <?php endif; ?>

    <?php if(\App\Models\Setting::getValue('weekend_trade')=='yes'): ?>
    <script>
        document.getElementById("weekend_trade").checked = true;

    </script>
    <?php endif; ?>

    <?php if(\App\Models\Setting::getValue('enable_withdrawal')=='yes'): ?>
    <script>
        document.getElementById("enable_withdrawal").checked = true;

    </script>
    <?php endif; ?>

    <input type="submit" class="px-5 mb-2 btn btn-primary btn-lg" value="Save">
    <input type="hidden" name="id" value="1">
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"><br />
</form>
<?php /**PATH /Users/wadingaleonardngonga/Downloads/online-trade-06-04-2021/resources/views/admin/includes/websettings.blade.php ENDPATH**/ ?>