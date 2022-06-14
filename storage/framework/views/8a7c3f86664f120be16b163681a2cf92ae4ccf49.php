<?php $__env->startSection('title', 'Manage KYC'); ?>

<?php $__env->startSection('manage-users', 'c-show'); ?>
<?php $__env->startSection('kyc', 'c-active'); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('admin.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container-fluid">
        <div class="fade-in">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header fw-bolder">
                        <h1 class="title1 text-center">
                            <?php echo e(\App\Models\Setting::getValue('site_name')); ?>

                            KYC Verifications</h1>
                    </div>
                    <div class="card-body">
                        <?php if(Session::has('message')): ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="alert alert-info alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-hidden="true">&times;</button>
                                        <i class="fa fa-info-circle"></i>
                                        <p class="alert-message"><?php echo e(Session::get('message')); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if(count($errors) > 0): ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="alert alert-danger alert-dismissable" role="alert">
                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-hidden="true">&times;</button>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <i class="fa fa-warning"></i> <?php echo e($error); ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="mb-5 row">
                            <div class="col-12 p-4">
                                <div class="bs-example table-responsive" data-example-id="hoverable-table">
                                    <table id="ShipTable" class="table table-bordered table-striped table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Full name</th>
                                                <th>Email</th>
                                                <th>KYC Status</th>
                                                <th>Uploaded Date</th>
                                                <th>Verified Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <tr>
                                                    <th scope="row"><?php echo e($user->id); ?></th>
                                                    <td><?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?> </td>
                                                    <td><?php echo e($user->email); ?></td>
                                                    <td><?php echo e($user->account_verify); ?></td>
                                                    <td><?php echo e($user->docs_uploaded_date); ?></td>
                                                    <td><?php echo e($user->docs_verified_date); ?></td>
                                                    <td>
                                                        <a href="#" data-toggle="modal"
                                                            data-target="#viewkycIModal<?php echo e($user->id); ?>"
                                                            class="btn btn-priamry btn-sm"><i class="fa fa-eye"></i>
                                                            ID</a>
                                                        <a href="#" data-toggle="modal"
                                                            data-target="#viewkycIBModal<?php echo e($user->id); ?>"
                                                            class="btn btn-priamry btn-sm"><i class="fa fa-eye"></i> ID
                                                            Back</a>
                                                        <a href="#" data-toggle="modal"
                                                            data-target="#viewkycAModal<?php echo e($user->id); ?>"
                                                            class="btn btn-priamry btn-sm"><i class="fa fa-eye"></i>
                                                            Address Document</a>
                                                        <a href="#" data-toggle="modal"
                                                            data-target="#viewkycPModal<?php echo e($user->id); ?>"
                                                            class="btn btn-priamry btn-sm"><i class="fa fa-eye"></i>
                                                            Passport</a>

                                                        <?php if(auth('admin')->user()->hasPermissionTo('mkyc-validate', 'admin')): ?>
                                                            <?php if($user->account_verify != 'Verified'): ?>
                                                                <a href="<?php echo e(route('acceptkyc', $user->id)); ?>"
                                                                    class="btn btn-primary btn-sm">Accept</a>
                                                                <a href="<?php echo e(route('rejectkyc', $user->id)); ?>"
                                                                    class="btn btn-danger btn-sm">Reject</a>
                                                            <?php else: ?>
                                                                <a href="<?php echo e(route('resetkyc', $user->id)); ?>"
                                                                    class="btn btn-danger btn-sm">Reset Verification</a>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>

                                                <!-- View KYC ID Modal -->
                                                <div id="viewkycIModal<?php echo e($user->id); ?>" class="modal fade"
                                                    role="dialog">
                                                    <div class="modal-dialog">

                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">KYC verification -
                                                                    ID card view</h4>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal">&times;</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <?php if(\App\Models\Setting::getValue('location') == 'Email'): ?>
                                                                    <h3 class="">Check your email with the
                                                                        KYC upload that has an attachment name of
                                                                        <span
                                                                            class="text-danger"><?php echo e($user->id_card); ?></span>
                                                                    </h3>
                                                                <?php elseif(\App\Models\Setting::getValue('location') == 'Local'): ?>
                                                                    <img src="<?php echo e(asset('storage/photos/' . $user->id_card)); ?>"
                                                                        alt="ID Card" title="" class="img-fluid" />
                                                                <?php elseif(\App\Models\Setting::getValue('location') == 'S3'): ?>
                                                                    <?php
                                                                        $path = 'storage/' . $user->id_card;
                                                                        if (Storage::disk('s3')->exists($path)) {
                                                                            $logourl = 'https://s3.' . env('AWS_DEFAULT_REGION') . '.amazonaws.com/' . env('AWS_BUCKET') . '/';
                                                                            $logofile = Storage::disk('s3')->get($path);
                                                                            $src = $logourl . $logofile;
                                                                        } else {
                                                                            $src = '';
                                                                        }
                                                                    ?>
                                                                    <img src="$src" alt="ID Card" title=""
                                                                        class="img-fluid" />
                                                                <?php else: ?>
                                                                    <img src="<?php echo e(asset('storage/photos/' . $user->passport)); ?>"
                                                                        alt="Passport" title="" class="img-fluid" />
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /view KYC ID Modal -->

                                                <!-- View KYC ID Back Modal -->
                                                <div id="viewkycIBModal<?php echo e($user->id); ?>" class="modal fade"
                                                    role="dialog">
                                                    <div class="modal-dialog">

                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">KYC verification -
                                                                    ID Back card view</h4>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal">&times;</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <?php if(\App\Models\Setting::getValue('location') == 'Email'): ?>
                                                                    <h3 class="">Check your email with the
                                                                        KYC upload that has an attachment name of
                                                                        <span
                                                                            class="text-danger"><?php echo e($user->id_card_back); ?></span>
                                                                    </h3>
                                                                <?php elseif(\App\Models\Setting::getValue('location') == 'Local'): ?>
                                                                    <img src="<?php echo e(asset('storage/photos/' . $user->id_card_back)); ?>"
                                                                        alt="ID Back Card" title=""
                                                                        class="img-fluid" />
                                                                <?php elseif(\App\Models\Setting::getValue('location') == 'S3'): ?>
                                                                    <?php
                                                                        $path = 'storage/' . $user->id_card_back;
                                                                        if (Storage::disk('s3')->exists($path)) {
                                                                            $logourl = 'https://s3.' . env('AWS_DEFAULT_REGION') . '.amazonaws.com/' . env('AWS_BUCKET') . '/';
                                                                            $logofile = Storage::disk('s3')->get($path);
                                                                            $src = $logourl . $logofile;
                                                                        } else {
                                                                            $src = '';
                                                                        }
                                                                    ?>
                                                                    <img src="$src" alt="ID Card Back" title=""
                                                                        class="img-fluid" />
                                                                <?php else: ?>
                                                                    <img src="<?php echo e(asset('storage/photos/' . $user->passport)); ?>"
                                                                        alt="Passport" title="" class="img-fluid" />
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /view KYC ID Back Modal -->

                                                <!-- View KYC Passport Modal -->
                                                <div id="viewkycPModal<?php echo e($user->id); ?>" class="modal fade"
                                                    role="dialog">
                                                    <div class="modal-dialog">

                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">KYC verification -
                                                                    Passport view</h4>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal">&times;</button>
                                                            </div>
                                                            <div class="modal-body">

                                                                <?php if(\App\Models\Setting::getValue('location') == 'Email'): ?>
                                                                    <h3 class="">Check your email with the
                                                                        KYC upload that has an attachment name of
                                                                        <span
                                                                            class="text-danger"><?php echo e($user->passport); ?></span>
                                                                    </h3>
                                                                <?php elseif(\App\Models\Setting::getValue('location') == 'S3'): ?>
                                                                    <?php
                                                                        $ppath = 'storage/' . $user->passport;
                                                                        if (Storage::disk('s3')->exists($ppath)) {
                                                                            $passurl = 'https://s3.' . env('AWS_DEFAULT_REGION') . '.amazonaws.com/' . env('AWS_BUCKET') . '/';
                                                                            $passfile = Storage::disk('s3')->get($ppath);
                                                                            $psrc = $passurl . $passfile;
                                                                        } else {
                                                                            $psrc = '';
                                                                        }
                                                                    ?>
                                                                    <img src="$psrc" alt="Passport" title=""
                                                                        class="img-fluid" />
                                                                <?php else: ?>
                                                                    <img src="<?php echo e(asset('storage/photos/' . $user->passport)); ?>"
                                                                        alt="Passport" title="" class="img-fluid" />
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /view KYC Passport Modal -->


                                                <!-- View KYC Address Modal -->
                                                <div id="viewkycAModal<?php echo e($user->id); ?>" class="modal fade"
                                                    role="dialog">
                                                    <div class="modal-dialog">

                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">KYC verification -
                                                                    Address Document view</h4>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal">&times;</button>
                                                            </div>
                                                            <div class="modal-body">

                                                                <?php if(\App\Models\Setting::getValue('location') == 'Email'): ?>
                                                                    <h3 class="">Check your email with the
                                                                        KYC upload that has an attachment name of
                                                                        <span
                                                                            class="text-danger"><?php echo e($user->address_document); ?></span>
                                                                    </h3>
                                                                <?php elseif(\App\Models\Setting::getValue('location') == 'S3'): ?>
                                                                    <?php
                                                                        $ppath = 'storage/' . $user->address_document;
                                                                        if (Storage::disk('s3')->exists($ppath)) {
                                                                            $passurl = 'https://s3.' . env('AWS_DEFAULT_REGION') . '.amazonaws.com/' . env('AWS_BUCKET') . '/';
                                                                            $passfile = Storage::disk('s3')->get($ppath);
                                                                            $psrc = $passurl . $passfile;
                                                                        } else {
                                                                            $psrc = '';
                                                                        }
                                                                    ?>
                                                                    <img src="$psrc" alt="Address" title=""
                                                                        class="img-fluid" />
                                                                <?php else: ?>
                                                                    <img src="<?php echo e(asset('storage/photos/' . $user->address_document)); ?>"
                                                                        alt="Address Document" title=""
                                                                        class="img-fluid" />
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /view KYC Address Modal -->

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <tr>
                                                    <td colspan="7">No data available</td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadingaleonardngonga/Documents/Projects/axesprime/resources/views/admin/kyc.blade.php ENDPATH**/ ?>