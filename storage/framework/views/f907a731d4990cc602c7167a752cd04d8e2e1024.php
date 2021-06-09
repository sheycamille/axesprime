<?php $__env->startSection('title', 'Contact Us'); ?>

<?php $__env->startSection('contact-menu-item', 'active'); ?>

<?php $__env->startSection('content'); ?>
<main id="main" class="contact-us-page">

    <!--========================== Contact Section ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
        <div class="container">

            <div class="section-header">
                <h3><?php echo e($content->getContent('9sNF7G','title')); ?></h3>
                <p><?php echo e($content->getContent('9sNF7G','description')); ?></p>

            </div>

            <div class="row contact-info">

                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3><?php echo e($content->getContent('52GPRA','title')); ?></h3>
                        <p><?php echo e($content->getContent('52GPRA','description')); ?></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3><?php echo e($content->getContent('0EXbji','title')); ?></h3>
                        <p><a href="tel: <?php echo e($content->getContent('0EXbji','description')); ?>"> <?php echo e($content->getContent('0EXbji','description')); ?></a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>EMAIL</h3>
                        <p><a href="<?php echo e(\App\Models\Setting::getValue('contact_email')); ?>"><?php echo e(\App\Models\Setting::getValue('contact_email')); ?></a> </p>
                    </div>
                </div>

            </div>

            <div class="form">

                <?php if(Session::has('message')): ?>
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo e(Session::get('message')); ?>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <?php endif; ?>

                <form action="<?php echo e(route('sendcontactmessage')); ?>" method="POST" role="form" class="contactForm">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" id="form3" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="form2" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="form8" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" required></textarea>
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <div class="validation"></div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>
    </section><!-- #contact -->

    <!--========================== Frequently Ask questions ============================-->
    <section id="faq">
        <div class="container">
            <div class="section-header">
                <h3 class="section-title"><?php echo e($content->getContent('OLZt1I','title')); ?></h3>
                <p><?php echo e($content->getContent('OLZt1I','description')); ?></p>
                <span class="section-divider"></span>
            </div>

            <ul id="faq-list" class="wow fadeInUp">
                <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <a data-toggle="collapse" class="collapsed" href="#faq<?php echo e($item->id); ?>"><?php echo e($item->question); ?> <i class="ion-android-remove"></i></a>
                    <div id="faq<?php echo e($item->id); ?>" class="collapse" data-parent="#faq<?php echo e($item->id); ?>">
                        <p>
                            <?php echo e($item->answer); ?>

                        </p>
                    </div>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>

        </div>
    </section> <!-- #faq  ends-->

</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadingaleonardngonga/Downloads/online-trade-06-04-2021/resources/views/front/contact.blade.php ENDPATH**/ ?>