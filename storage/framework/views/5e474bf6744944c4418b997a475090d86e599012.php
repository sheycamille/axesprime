<?php
if (Auth::user()->dashboard_style == "light") {
		$bgmenu="blue";
    $bg="light";
    $text = "dark";
} else {
    $bgmenu="dark";
    $bg="dark";
    $text = "light";

}	
?>
	


    <?php $__env->startSection('content'); ?>
        <?php echo $__env->make('user.topmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('user.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="main-panel bg-<?php echo e($bg); ?>">
			<div class="content bg-<?php echo e($bg); ?>">
				<div class="page-inner">
					<div class="mt-2 mb-4">
						<h1 class="title1 text-<?php echo e($text); ?>"><?php echo e(__('Security/Account Deletion')); ?></h1>
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
							<div class="alert alert-danger alert-dismissable" role="alert" >
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<i class="fa fa-warning"></i> <?php echo e($error); ?>

								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
						</div>
					</div>
					<?php endif; ?>
					
					<div class="row">
						<div class="col-md-8  col-offset-md-2 bg-<?php echo e($bg); ?> p-3">
                            <?php if(Laravel\Fortify\Features::canManageTwoFactorAuthentication()): ?>
                                <div>
                                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile.two-factor-authentication-form')->html();
} elseif ($_instance->childHasBeenRendered('kdFg1Sh')) {
    $componentId = $_instance->getRenderedChildComponentId('kdFg1Sh');
    $componentTag = $_instance->getRenderedChildComponentTagName('kdFg1Sh');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('kdFg1Sh');
} else {
    $response = \Livewire\Livewire::mount('profile.two-factor-authentication-form');
    $html = $response->html();
    $_instance->logRenderedChild('kdFg1Sh', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                </div>
                            <?php endif; ?>
                        </div>
					</div>
					<div class="row">
						<div class="col-md-8  col-offset-md-2 bg-<?php echo e($bg); ?> p-3">
							<div class="mt-5">
								<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile.logout-other-browser-sessions-form')->html();
} elseif ($_instance->childHasBeenRendered('VhLvu5F')) {
    $componentId = $_instance->getRenderedChildComponentId('VhLvu5F');
    $componentTag = $_instance->getRenderedChildComponentTagName('VhLvu5F');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('VhLvu5F');
} else {
    $response = \Livewire\Livewire::mount('profile.logout-other-browser-sessions-form');
    $html = $response->html();
    $_instance->logRenderedChild('VhLvu5F', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
							</div>
				
							<?php if(Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures()): ?>
								<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.section-border','data' => []]); ?>
<?php $component->withName('jet-section-border'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
				
								<div class="mt-5">
									<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile.delete-user-form')->html();
} elseif ($_instance->childHasBeenRendered('4kPmrHL')) {
    $componentId = $_instance->getRenderedChildComponentId('4kPmrHL');
    $componentTag = $_instance->getRenderedChildComponentTagName('4kPmrHL');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('4kPmrHL');
} else {
    $response = \Livewire\Livewire::mount('profile.delete-user-form');
    $html = $response->html();
    $_instance->logRenderedChild('4kPmrHL', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
								</div>
							<?php endif; ?>
                        </div>
					</div>
				</div>	
			</div>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadingaleonardngonga/Documents/Projects/axesprime/resources/views/profile/show.blade.php ENDPATH**/ ?>