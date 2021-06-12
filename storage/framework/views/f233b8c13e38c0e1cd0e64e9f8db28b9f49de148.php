<?php $__env->startSection('title', \App\Models\Setting::getValue('site_title')); ?>

<?php $__env->startSection('home-menu-item', 'active'); ?>

<?php $__env->startSection('content'); ?>
<main id="main">

    <!--========================== Intro Section ============================-->
    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators"> </ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active">
                        <div class="carousel-background"><img src="<?php echo e(asset('storage/photos/'.$content->getImage('57VnOE','img_path'))); ?>" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h1 class="text-white"><?php echo e($content->getContent('toe3Ew', 'title')); ?></h1>
                                <p><?php echo e($content->getContent('toe3Ew', 'description')); ?></p>
                                <a href="register" class="btn-get-started scrollto">Get Started</a>
                                <a href="/trading-platforms" class="btn-get-started scrollto">Download</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="<?php echo e(asset('storage/photos/'.$content->getImage('dC6ZaA','img_path'))); ?>" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2><?php echo e($content->getContent('jJwh78','title')); ?></h2>
                                <p><?php echo e($content->getContent('jJwh78','description')); ?></p>
                                <a href="<?php echo e(route('login')); ?>" class="btn-get-started scrollto">Start Trading</a>
                                <a href="/trading-platforms" class="btn-get-started scrollto">Download</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="<?php echo e(asset('storage/photos/'.$content->getImage('9kHash','img_path'))); ?>" alt="">
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2><?php echo e($content->getContent('SLxaB2','title')); ?></h2>
                                    <p><?php echo e($content->getContent('SLxaB2','description')); ?></p>
                                    <a href="register" class="btn-get-started scrollto">Get Started</a>
                                    <a href="/trading-platforms" class="btn-get-started scrollto">Download</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="<?php echo e(asset('storage/photos/'.$content->getImage('CcW52g','img_path'))); ?>" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2><?php echo e($content->getContent('BkP8pH','title')); ?></h2>
                                <p><?php echo e($content->getContent('BkP8pH','description')); ?></p>
                                <a href="register" class="btn-get-started scrollto">Get Started</a>
                                <a href="/trading-platforms" class="btn-get-started scrollto">Download</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="<?php echo e(asset('storage/photos/'.$content->getImage('96i7xH','img_path'))); ?>" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2><?php echo e($content->getContent('W6gTBN','title')); ?></h2>
                                <p><?php echo e($content->getContent('W6gTBN','description')); ?></p>
                                <a href="<?php echo e(route('login')); ?>" class="btn-get-started scrollto">Start Trading</a>
                                <a href="/trading-platforms" class="btn-get-started scrollto">Download</a>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section><!-- #intro end -->


    <!--========================== About Us Section ============================-->
    <section id="about">
        <div class="container">

            <header class="section-header">
                <h3><?php echo e($content->getContent('anvs8c','title')); ?> <?php echo e(\App\Models\Setting::getValue('site_name')); ?></h3>
                <p><?php echo e($content->getContent('anvs8c','description')); ?></p>
            </header>

            <div class="text-center row about-cols">

                <div class="col-lg-3 col-md-4 wow fadeInUp">
                    <div class="about-col">
                        <div class="img">
                            <img src="<?php echo e(asset ('front/img/about/innovate.png')); ?>" alt="" class="mt-4 w-25">

                        </div>
                        <h2 class="title"><a href="#"><?php echo e($content->getContent('epJ4LI','title')); ?></a></h2>
                        <p><?php echo e($content->getContent('epJ4LI','description')); ?></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-col">
                        <div class="img">
                            <img src="<?php echo e(asset ('front/img/about/secure.png')); ?>" alt="" class="mt-4 w-25">

                        </div>
                        <h2 class="title"><a href="#"><?php echo e($content->getContent('5hbB6X','title')); ?></a></h2>
                        <p><?php echo e($content->getContent('5hbB6X','description')); ?></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="about-col">
                        <div class="img">
                            <img src="<?php echo e(asset ('front/img/about/prof.png')); ?>" alt="" class="mt-4 w-25">

                        </div>
                        <h2 class="title"><a href="#"><?php echo e($content->getContent('Zrhm3I','title')); ?></a></h2>
                        <p><?php echo e($content->getContent('Zrhm3I','description')); ?></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="about-col">
                        <div class="img">
                            <img src="<?php echo e(asset ('front/img/about/invest.png')); ?>" alt="" class="mt-4 w-25">

                        </div>
                        <h2 class="title"><a href="#"><?php echo e($content->getContent('yTKhlt','title')); ?></a></h2>
                        <p><?php echo e($content->getContent('yTKhlt','description')); ?></p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #about -->


    <!--========================== Advantages Section ============================-->
    <section id="advantages">
        <div class="container">

            <header class="section-header wow fadeInUp">
                <h3><?php echo e($content->getContent('u0Ervr','title')); ?></h3>
                <p><?php echo e($content->getContent('u0Ervr','description')); ?></p>
            </header>

            <div class="row">

                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon">
                            <svg class="svg">
                                <use xlink:href="<?php echo e(asset ('front/img/sprite.svg#icon-stable')); ?>"></use>
                            </svg>
                        </div>
                        <h3 class="title"><?php echo e($content->getContent('Dwu6Bv','title')); ?></h3>
                        <p class="description"><?php echo e($content->getContent('Dwu6Bv','description')); ?></p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon">
                            <svg class="svg">
                                <use xlink:href="<?php echo e(asset ('front/img/sprite.svg#icon-payment')); ?>"></use>
                            </svg>
                        </div>
                        <h3 class="title"><?php echo e($content->getContent('eMo1d2','title')); ?></h3>
                        <p class="description"><?php echo e($content->getContent('eMo1d2','description')); ?></p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon">
                            <svg class="svg">
                                <use xlink:href="<?php echo e(asset ('front/img/sprite.svg#icon-referral')); ?>"></use>
                            </svg>
                        </div>
                        <h3 class="title"><?php echo e($content->getContent('kEJPm3','title')); ?></h3>
                        <p class="description"><?php echo e($content->getContent('kEJPm3','description')); ?></p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon">
                            <svg class="svg">
                                <use xlink:href="<?php echo e(asset ('front/img/sprite.svg#icon-dollar')); ?>"></use>
                            </svg>
                        </div>
                        <h3 class="title"><?php echo e($content->getContent('bBSnFV','title')); ?></h3>
                        <p class="description"><?php echo e($content->getContent('bBSnFV','description')); ?></p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon">
                            <svg class="svg">
                                <use xlink:href="<?php echo e(asset ('front/img/sprite.svg#icon-support')); ?>"></use>
                            </svg>
                        </div>
                        <h3 class="title"><?php echo e($content->getContent('DUK9pc','title')); ?></h3>
                        <p class="description"><?php echo e($content->getContent('DUK9pc','description')); ?></p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon">
                            <svg class="svg">
                                <use xlink:href="<?php echo e(asset ('front/img/sprite.svg#icon-shield')); ?>"></use>
                            </svg>
                        </div>
                        <h3 class="title"><?php echo e($content->getContent('VaeiMW','title')); ?></h3>
                        <p class="description"><?php echo e($content->getContent('VaeiMW','description')); ?></p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #advantages -->


    <!--========================== Pricing Section ============================-->
    


    <!--========================== Testimonials Sections ============================-->
    


    <!--========================== Transactions Sections ============================-->
    
    <!-- End transaction -->


    <!--========================== Payments Sections ============================-->
    <section id="payments" class="wow fadeInUp">
        <div class="container">

            <header class="section-header">
                <h3><?php echo e($content->getContent('U7zpEj','title')); ?></h3>
            </header>

            <div class="owl-carousel payments-carousel">
                
                
                <img src="<?php echo e(asset('front/img/payments/payment-mastercard.png')); ?>" alt="">
                <img src="<?php echo e(asset('front/img/payments/payment-visa.png')); ?>" alt="">
                <img src="<?php echo e(asset('front/img/payments/payment-btc.png')); ?>" alt="">
                <img src="<?php echo e(asset('front/img/payments/payment-ether.png')); ?>" alt="">
                
                
            </div>

        </div>
    </section><!-- #Payments ends -->


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
                        <p>
                            <a href="<?php echo e(\App\Models\Setting::getValue('contact_email')); ?>"><?php echo e(\App\Models\Setting::getValue('contact_email')); ?></a>
                            or send us a message on the <a href="/contact-us">contact page</a>
                        </p>
                    </div>
                </div>

            </div>

            

        </div>
    </section><!-- #contact -->


    <!--========================== Get Started ============================-->
    <section id="getstarted">
        <div class="container">
            <div class="col-md-12">
                <div class="section-header">
                    <h3 class="text-center">How to Get Started</h3>
                    <div class="text-center">
                        <p>Access one of the largest and most liquid markets in the world! Enter the world of Forex and CFD online trading in just a few steps and start trading more than <em class="cbc_content">1000</em> instruments on our world-leading trading platforms.</p>
                    </div>
                </div>
                <div class="howtosteps-block d-flex">
                    <div class="col-md-3 col-sm-6 col-xs-12 item active">
                        <span class="ch_img"><img data-src="<?php echo e(asset ('front/img/about/icon_register.png')); ?>" alt="Register" tilte="Register" src="<?php echo e(asset ('front/img/about/icon_register.png')); ?>"></span><br><br>
                        <h5>Register</h5>
                        <span>
                            <p>Sign up and upload your documents to verify your account.</p>
                        </span>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 item active">
                        <span class="ch_img"><img data-src="<?php echo e(asset ('front/img/about/ICONS_2-01.png')); ?>" alt="Fund" tilte="Fund" src="<?php echo e(asset ('front/img/about/ICONS_2-01.png')); ?>"></span><br><br>
                        <h5>Fund</h5>
                        <span>
                            <p>Once you understand all the benefits and risks involved, you may fund your account.</p>
                        </span>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 item active">
                        <span class="ch_img"><img data-src="<?php echo e(asset ('front/img/about/ICONS_3-01.png')); ?>" alt="Trade" tilte="Trade" src="<?php echo e(asset ('front/img/about/ICONS_3-01.png')); ?>"></span><br><br>
                        <h5>Trade</h5>
                        <span>
                            <p>Start trading on our WebTrader, Desktop or Mobile Platforms.</p>
                        </span>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 item active">
                        <span class="ch_img"><img data-src="<?php echo e(asset ('front/img/about/ICONS_4-01.png')); ?>" alt="Withdraw" tilte="Withdraw" src="<?php echo e(asset ('front/img/about/ICONS_4-01.png')); ?>"></span><br><br>
                        <h5>Withdraw</h5>
                        <span>
                            <p>Withdraw any profits or your entire account balance at any time!</p>
                        </span>
                    </div>
                </div>
                <div class="text-center">
                    <a class="btn-get-started" href="<?php echo e(route('register')); ?>">Open an Account</a><br>
                </div>
            </div>
            <div class="hw_disclaimer"></div>
        </div>
    </section> <!-- #get started  ends-->

</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/wadingaleonardngonga/Documents/Projects/axesprime/resources/views/front/index.blade.php ENDPATH**/ ?>