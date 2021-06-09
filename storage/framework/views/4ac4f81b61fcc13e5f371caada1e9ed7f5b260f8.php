<form method="post" action="<?php echo e(route('updatewebinfo')); ?>" enctype="multipart/form-data">
    <div class="form-group">
        <h5 class="text-<?php echo e($text); ?>">Announcement</h5>
        <textarea name="update" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" rows="2"><?php echo e(\App\Models\Setting::getValue('newupdate')); ?></textarea>
    </div>
    <div class="form-group">
        <h5 class="text-<?php echo e($text); ?>">Website Name</h5>
        <input type="text" name="site_name" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" value="<?php echo e(\App\Models\Setting::getValue('site_name')); ?>" required>
    </div>
    <div class="form-group">
        <h5 class="text-<?php echo e($text); ?>">Website Description</h5>
        <textarea name="description" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" rows="4"><?php echo e(\App\Models\Setting::getValue('description')); ?></textarea>
    </div>
    <div class="form-group">
        <h5 class="text-<?php echo e($text); ?>">Live chat widget Code</h5>
        <textarea name="tawk_to" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" rows="4"><?php echo e(\App\Models\Setting::getValue('tawk_to')); ?></textarea>
    </div>
    <div class="form-group">
        <h5 class="text-<?php echo e($text); ?>">Website Title</h5>
        <input type="text" name="site_title" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" value="<?php echo e(\App\Models\Setting::getValue('site_title')); ?>" required>
    </div>
    <div class="form-group">
        <h5 class="text-<?php echo e($text); ?>">Website Keywords</h5>
        <input type="text" name="keywords" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" value="<?php echo e(\App\Models\Setting::getValue('keywords')); ?>" required>
    </div>
    <div class="form-group">
        <h5 class="text-<?php echo e($text); ?>">Website Url (https://axes-prime.com)</h5>
        <input type="text" placeholder="https://axes-prime.com" name="site_address" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" value="<?php echo e(\App\Models\Setting::getValue('site_address')); ?>" required>
    </div>
    <div class="form-group">
        <h5 class="text-<?php echo e($text); ?>">Site Logo (Recommended size; max width, 200px and max height 100px.)</h5>
        <input name="logo" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" type="file">
        <img src="<?php echo e(asset('storage/photos/'.\App\Models\Setting::getValue('logo'))); ?>">
    </div>
    <div class="form-group">
        <h5 class="text-<?php echo e($text); ?>">Site Favicon (Recommended type: png, size: max width, 32px and max height 32px.)</h5>
        <input name="favicon" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" type="file">
        <img src="<?php echo e(asset('storage/photos/'.\App\Models\Setting::getValue('favicon'))); ?>">
    </div>

    <input type="submit" class="px-5 btn btn-primary btn-lg" value="Update">
    <input type="hidden" name="id" value="1">
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
</form>
<?php /**PATH /Users/wadingaleonardngonga/Downloads/online-trade-06-04-2021/resources/views/admin/includes/webinfo.blade.php ENDPATH**/ ?>