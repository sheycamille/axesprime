<?php
if (Auth('admin')->User()->dashboard_style == "light") {
    $text = "dark";
} else {
    $text = "light";
}
?>

<?php $__env->startSection("frontend-control", 'active'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="main-panel bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
    <div class="content bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
        <div class="page-inner">
            <div class="mt-2 mb-4">
                <h1 class="title1 text-<?php echo e($text); ?>">Edit Front page of this website</h1>
            </div>
            <?php if(Session::has('message')): ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <i class="fa fa-info-circle"></i> <?php echo e(Session::get('message')); ?>

                    </div>
                </div>
            </div>
            <?php endif; ?>

            <?php if(count($errors) > 0): ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-danger alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <i class="fa fa-warning"></i> <?php echo e($error); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <div class="mb-5 row">
                <div class="p-3 col-12">
                    
                    
                    <a href="#" data-toggle="modal" data-target="#images" class="btn btn-<?php echo e($text); ?>"><i class="fa fa-plus"></i> Add Image</a>
                    <div id="images" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                                    <h4 class="modal-title" style="text-align:center;">Add Image</h4>
                                    <button type="button" class="close text-<?php echo e($text); ?>" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                                    <form action="<?php echo e(route('saveimg')); ?>" method="post" enctype="multipart/form-data">
                                        <?php echo e(csrf_field()); ?>

                                        <div class="form-group">
                                            <h5 class="text-<?php echo e($text); ?>">Title of Image</h5>
                                            <input type="text" name="img_title" placeholder="Name of Image" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>">
                                        </div>
                                        <div class="form-group">
                                            <h5 class="text-<?php echo e($text); ?>">Images Description</h5>
                                            <textarea name="img_desc" placeholder="Describe the image" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" rows="2"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <h5 class="text-<?php echo e($text); ?>">Image</h5>
                                            <small>Note: Images Uploaded will be renamed by our system to 'random_characters/name_of_file/random_number'.</small>
                                            <input name="image" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" type="file">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#content" class="btn btn-<?php echo e($text); ?>"><i class="fa fa-plus"></i> Add Content</a>
                    <div id="content" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                                    <h4 class="modal-title" style="text-align:center;">Add General Content</h4>
                                    <button type="button" class="close text-<?php echo e($text); ?>" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                                    <form action="<?php echo e(route('savecontents')); ?>" method="post">
                                        <?php echo e(csrf_field()); ?>

                                        <div class="form-group">
                                            <h5 class=" text-<?php echo e($text); ?>">Title of Content</h5>
                                            <input type="text" name="title" placeholder="Name of Content" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <h5 class="text-<?php echo e($text); ?>">Content Description</h5>
                                            <textarea name="content" placeholder="Describe the content" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" rows="2" required></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            

                            

                            <a class="mb-2 nav-item nav-link active" id="nav-contact-tab" data-toggle="tab" href="#3" role="tab" aria-controls="nav-contact" aria-selected="false">WEBSITE CONTENTS</a>

                            <a class="mb-2 nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#4" role="tab" aria-controls="nav-about" aria-selected="false">IMAGES</a>
                        </div>
                    </nav>


                    <div class="px-3 py-3 tab-content px-sm-0" id="nav-tabContent">
                        
                        

                    
                    

                
                <div class="tab-pane fade show active card bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> p-3" id="3" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="boxes">
                        <div class="row">
                            <?php $__currentLoopData = $contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="p-1 col-md-3">
                                <div class="card border p-1 bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                                    <div class="card-body">
                                        <h5 class="card-title text-<?php echo e($text); ?>"><strong><?php echo e($content->title); ?></strong> </h5>
                                        <p class="card-text text-<?php echo e($text); ?>"><?php echo e($content->description); ?></p>

                                        <a href="#" data-toggle="modal" data-target="#editcont<?php echo e($content->id); ?>" class="btn btn-primary btn-sm">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div id="editcont<?php echo e($content->id); ?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                                            <h4 class="modal-title" style="text-align:center;">Update General Content</h4>
                                            <button type="button" class="close text-<?php echo e($text); ?>" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                                            <form action="<?php echo e(route('updatecontents')); ?>" method="post">
                                                <?php echo e(csrf_field()); ?>

                                                <div class="form-group">
                                                    <h5 class=" text-<?php echo e($text); ?>">Title of Content</h5>
                                                    <input type="text" name="title" placeholder="Name of Content" value="<?php echo e($content->title); ?> " class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <h5 class="text-<?php echo e($text); ?>">Content Description</h5>
                                                    <textarea name="content" placeholder="Describe the content" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" rows="2" required><?php echo e($content->description); ?></textarea>
                                                </div>
                                                <input type="hidden" name="id" value="<?php echo e($content->id); ?>">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                </div>

                
                <div class="tab-pane fade card bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> p-3" id="4" role="tabpanel" aria-labelledby="nav-about-tab">
                    <div class="boxes">
                        <div class="row">
                            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="p-1 col-md-4">
                                <div class="card border p-1 bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                                    <img src="<?php echo e(asset('storage/photos/'.$image->img_path)); ?>" class="card-img-top w-50" alt="Image">

                                    <div class="card-body">
                                        <h5 class="card-title text-<?php echo e($text); ?>"><strong><?php echo e($image->title); ?></strong> </h5>
                                        <p class="card-text text-<?php echo e($text); ?>"><?php echo e($image->description); ?></p>
                                    </div>
                                    <div class="card-body">
                                        <a href="#" data-toggle="modal" data-target="#editimg<?php echo e($image->id); ?>" class="btn btn-primary btn-sm">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div id="editimg<?php echo e($image->id); ?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                                            <h4 class="modal-title" style="text-align:center;">Update Image</h4>
                                            <button type="button" class="close text-<?php echo e($text); ?>" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>">
                                            <form action="<?php echo e(route('updateimg')); ?>" method="post" enctype="multipart/form-data">
                                                <?php echo e(csrf_field()); ?>

                                                <div class="form-group">
                                                    <h5 class="text-<?php echo e($text); ?>">Title of Image</h5>
                                                    <input type="text" name="img_title" value="<?php echo e($image->title); ?>" placeholder="Name of Image" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>">
                                                </div>
                                                <div class="form-group">
                                                    <h5 class="text-<?php echo e($text); ?>">Images Description</h5>
                                                    <textarea name="img_desc" placeholder="Describe the image" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" rows="2"><?php echo e($image->description); ?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <h5 class="text-<?php echo e($text); ?>">Image</h5>
                                                    <input name="image" class="form-control bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> text-<?php echo e($text); ?>" type="file">
                                                </div>
                                                <input type="hidden" name="id" value="<?php echo e($image->id); ?>">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadingaleonardngonga/Documents/Projects/axesprime/resources/views/admin/frontpage.blade.php ENDPATH**/ ?>