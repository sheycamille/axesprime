<form method="post" action="<?php echo e(route('updatesubfee')); ?>">
    <div class="Form-group">
        <h4 class="text-<?php echo e($text); ?>">Monthly Subscription Fee:</h4>
        <input type="text" name="monthlyfee" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" value="<?php echo e(\App\Models\Setting::getValue('monthlyfee')); ?>">
    </div>

    <div class="form-group">
        <h4 class="text-<?php echo e($text); ?>">Quaterly Subscription Fee:</h4>
        <input type="text" name="quarterlyfee" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" value="<?php echo e(\App\Models\Setting::getValue('quarterlyfee')); ?>">
    </div>

    <div class="form-group">
        <h4 class="text-<?php echo e($text); ?>">Yearly Subscription Fee:</h4>
        <input type="text" name="yearlyfee" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" value="<?php echo e(\App\Models\Setting::getValue('yearlyfee')); ?>">
    </div>

    <input type="submit" class="px-5 btn btn-primary btn-round btn-lg" value="Save">
    <input type="hidden" name="id" value="1">
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"><br />
</form>
<?php /**PATH /Users/wadingaleonardngonga/Downloads/online-trade-06-04-2021/resources/views/admin/includes/subscript.blade.php ENDPATH**/ ?>