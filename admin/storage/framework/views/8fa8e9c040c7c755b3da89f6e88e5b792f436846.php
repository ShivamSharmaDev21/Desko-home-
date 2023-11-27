<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Deskohome</title>

    <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
    <link href="public/frontend/assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="public/frontend/assets/css/plugins/font-awesome.min.css" rel="stylesheet">
    <link href="public/frontend/assets/css/plugins/lineicons.css" rel="stylesheet">
    <link href="public/vendors/owl-carousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="public/frontend/assets/css/plugins/animate.css" rel="stylesheet">

    <link href="public/frontend/assets/css/style.css" rel="stylesheet">
    <link href="public/frontend/assets/css/themes/blue-orange.css" rel="stylesheet">
</head>

<body class="home" data-scroll-animation="true" data-spy="scroll" data-target="#main-navbar">

    <!-- <div id="loading">
<div id="loading-center">
<div id="loading-center-absolute">
<div class="object" id="object_four"></div>
<div class="object" id="object_three"></div>
<div class="object" id="object_two"></div>
<div class="object" id="object_one"></div>
</div>
</div>
</div> -->

    <header class="row" id="header">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">

                <div class="navbar-header">
                    <a class="navbar-brand" href="#header"><img src="public/frontend/assets/img/desko_logo.png"
                            alt=""></a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#main-navbar" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="header-icon">
                        <a href="#" class="d-desk searchcart"><svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-search"
                                viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg> </a>
                        <a href="#" class="d-desk cartmobile"><svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-basket3"
                                viewBox="0 0 16 16">
                                <path
                                    d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM3.394 15l-1.48-6h-.97l1.525 6.426a.75.75 0 0 0 .729.574h9.606a.75.75 0 0 0 .73-.574L15.056 9h-.972l-1.479 6h-9.21z" />
                            </svg>
                            <span class="cartCount">0</span>
                        </a>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="main-navbar">
                    <!--  <a href="#product-choose" class=" btn btn-warning pull-right hidden-sm hidden-xs">pre-order now</a> -->
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Pages</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">contact</a></li>
                        <li class="d-desk"><a href="#">Login / Register</a></li>
                    </ul>

                    <div class="end_div d-none">
                        <a href="#">Login / Register </a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg> </a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-basket3" viewBox="0 0 16 16">
                                <path
                                    d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM3.394 15l-1.48-6h-.97l1.525 6.426a.75.75 0 0 0 .729.574h9.606a.75.75 0 0 0 .73-.574L15.056 9h-.972l-1.479 6h-9.21z" />
                            </svg>
                            <span class="cartCount">0</span>
                        </a>
                    </div>
                </div>

            </div>

        </nav>
        <div class="top-banner row m0 text-center fadeInOnLoad">

        </div>
    </header>

    <main>

        <?php if(Session::get('success')): ?>
            <h4 class="alert alert-success"><?php echo e(Session::get('success')); ?></h4>
        <?php endif; ?>
        <?php if(Session::get('fail')): ?>
            <h4 class="alert alert-success"><?php echo e(Session::get('fail')); ?></h4>
        <?php endif; ?>

        <section class="row the-hero">
            <div class="container-fluid">
                <div class="row dflex">
                    <div class="col-lg-4 col5 wow fadeInDown" data-wow-delay="0.3s">
                        <span><?php echo e($slider->title); ?></span>
                        <h3><?php echo e($slider->description); ?></h3>
                        <button type="button" onclick="location.href='<?php echo e($slider->btn1_link); ?>'"
                            class="btnshop"><?php echo e($slider->btn1_caption); ?></button>
                        <button type="button" onclick="location.href='<?php echo e($slider->btn2_link); ?>'"
                            class="btnshop buttonshop"><?php echo e($slider->btn2_caption); ?></button>
                    </div>
                    <div class="col-lg-8">
                        <img src="public/slider_image_home/<?php echo e($slider->image); ?>" style="width: 100%;"
                            class="wow fadeInDown" data-wow-delay="0.3s">
                    </div>
                </div>
            </div>
        </section>


        <section class="row the-product pb-0" id="product">
            <div class="container">
                <div class="row section-header wow fadeInUp">
                    <h2>the product</h2>
                    <p>Introduce the product here. A small description about what it is and how it helps the user. You
                        can
                        also add some photos below.</p>
                </div>
                <div class="row apple-watch-note-feature text-center">
                    <img src="public/frontend/assets/img/apple-watch-2.png" alt="">

                    <div class="feature-note right top wow fadeInRight show-cont">
                        <div class="indicator">
                            <div class="plus-icon">
                                <span class="plus">+</span>
                            </div>
                        </div>
                        <div class="feature-name">
                            metalic strap
                        </div>
                    </div>

                    <div class="feature-note left top wow fadeInLeft show-cont">
                        <div class="indicator">
                            <div class="plus-icon">
                                <span class="plus">+</span>
                            </div>
                        </div>
                        <div class="feature-name">
                            Gps tracker
                        </div>
                    </div>

                    <div class="feature-note right bottom wow fadeInUp show-cont">
                        <div class="indicator">
                            <div class="plus-icon">
                                <span class="plus">+</span>
                            </div>
                        </div>
                        <div class="feature-name">
                            Bluetooth 4.2
                        </div>
                    </div>

                    <div class="feature-note left bottom wow fadeInLeft show-cont">
                        <div class="indicator">
                            <div class="plus-icon">
                                <span class="plus">+</span>
                            </div>
                        </div>
                        <div class="feature-name">
                            water resistant
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--====== Contact Area Start ======-->
        <section class="table_section ptb_60">
            <div class="container">
                <div class="row justify-content-center d-flex">
                    <div class="col-12 col-md-10 col-lg-7">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Our Flagship Workstations</h2>

                        </div>
                    </div>
                </div>
                <div class="row justify-content-center d-flex">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6 text-center hoverAni">
                            <img src="public/feature_image/<?php echo e($product->feature_image); ?>" class="wow fadeInDown"
                                data-wow-delay="0.3s">
                            <a href="#" class="button-link wow fadeInUp" style="margin-top:10px"
                                data-wow-delay="0.3s" role="button">
                                Shop Now</a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </div>
            </div>
        </section>
        <!--====== Contact Area End ======-->


        <section class="row left-right-contents">
            <div class="container">
                <div class="row ">
                    <div class="col-sm-12 col-md-4 col-md-push-4 text-center wow fadeIn">
                        <img src="public/feature_image_home/<?php echo e($feature->image); ?>" class="alt="">
                    </div>
                    <div class="col-md-4 col-sm-6 col-md-pull-4 left-content">
                        <div class="media wow fadeInUp">
                            <div class="media-left">
                                <span><i class="li_key"></i></span>
                            </div>
                            <div class="media-body">
                                <h4><?php echo e($feature->heading1); ?></h4>
                                <p><?php echo e($feature->description1); ?></p>
                            </div>
                        </div>
                        <div class="media wow fadeInUp" data-wow-delay="0.3s">
                            <div class="media-left">
                                <span><i class="li_megaphone"></i></span>
                            </div>
                            <div class="media-body">
                                <h4><?php echo e($feature->heading2); ?></h4>
                                <p><?php echo e($feature->description2); ?></p>
                            </div>
                        </div>
                        <div class="media wow fadeInUp" data-wow-delay="0.6s">
                            <div class="media-left">
                                <span><i class="li_diamond"></i></span>
                            </div>
                            <div class="media-body">
                                <h4><?php echo e($feature->heading3); ?></h4>
                                <p><?php echo e($feature->description3); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 right-content">
                        <div class="media wow fadeInUp">
                            <div class="media-left">
                                <span><i class="li_like"></i></span>
                            </div>
                            <div class="media-body">
                                <h4><?php echo e($feature->heading4); ?></h4>
                                <p><?php echo e($feature->description4); ?></p>
                            </div>
                        </div>
                        <div class="media wow fadeInUp" data-wow-delay="0.3s">
                            <div class="media-left">
                                <span><i class="li_user"></i></span>
                            </div>
                            <div class="media-body">
                                <h4><?php echo e($feature->heading5); ?></h4>
                                <p><?php echo e($feature->description5); ?></p>
                            </div>
                        </div>
                        <div class="media wow fadeInUp" data-wow-delay="0.6s">
                            <div class="media-left">
                                <span><i class="li_clock"></i></span>
                            </div>
                            <div class="media-body">
                                <h4><?php echo e($feature->heading6); ?></h4>
                                <p><?php echo e($feature->description6); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!--====== Contact Area Start ======-->
        <section id="partner-with-us partner-section"
            class="mb50 section alter3-features video-section contact-area ptb_60 pb-0">
            <div class="shapes-container wow fadeInUp" data-wow-delay="0.5s">
                <div class="shape shape-ring shape-ring-1">
                    <div class="animation animation--rotating"></div>
                </div>
                <div class="shape shape-ring shape-ring-2">
                    <div class="animation animation--rotating"></div>
                </div>
                <div class="shape shape-circle animation--clockwise">
                    <div></div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center d-flex">
                    <div class="col-12 col-md-12 col-lg-12">
                        <!-- Section Heading -->
                        <div class="section-heading text-center pb-0 mb-40">
                            <h2 class="text-capitalize">2048 Ways to Build Your Own Desk Suiting <br> You Profession,
                                Age & Space</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center d-flex">
                    <div class="col-12 col-md-10 text-center wow fadeInDown" data-wow-delay="0.3s">
                        <!-- <img src="https://www.vari.com/dw/image/v2/BDFT_PRD/on/demandware.static/-/Library-Sites-VariGlobalContentLibrary/default/dwd26c8f48/electric-standing-desk/vari-esd-gen2_animation_lores.gif" width="100%"> -->
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/<?php echo e($video->url); ?>?mute=1&autoplay=1"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay;mute; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="btngroup text-center">
                    <a href="<?php echo e($video->btn_link); ?>" type="button" class="btnshop"><?php echo e($video->btn_caption); ?></a>
                </div>
                <div class="powered-design">
                    <div class="shapes-container">
                        <div class="shape shape-triangle shape-animated">
                            <div class="animation--rotating"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== Contact Area End ======-->

        <!--====== Contact Area Start ======-->
        <section id="partner-with-us partner-section" class="contact-area ptb_70">
            <div class="container">
                <div class="row justify-content-center d-flex">
                    <div class="col-12 col-md-10 col-lg-6">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Trusted by folks @</h2>

                        </div>
                    </div>
                </div>
                <div class="row justify-content-center d-flex">
                    <div class="col-12 col-md-10">
                        <ul class="partner">


                            <li class="annimestion wow fadeInDown" data-wow-delay="0.1s">
                                <a href="#">
                                    <img src="public/frontend/assets/img/logo2.png" alt="img">
                                </a>
                            </li>
                            <li class="annimestion wow fadeInDown" data-wow-delay="0.2s">
                                <a href="#">
                                    <img src="public/frontend/assets/img/logo3.png" alt="img">
                                </a>
                            </li>
                            <li class="annimestion wow fadeInDown" data-wow-delay="0.3s">
                                <a href="#">
                                    <img src="public/frontend/assets/img/logo4.png" alt="img">
                                </a>
                            </li>
                            <li class="annimestion wow fadeInDown" data-wow-delay="0.3s">
                                <a href="#">
                                    <img src="public/frontend/assets/img/logo5.png" alt="img">
                                </a>
                            </li>
                            <li class="annimestion wow fadeInDown" data-wow-delay="0.4s">
                                <a href="#">
                                    <img src="public/frontend/assets/img/logo6.png" alt="img">
                                </a>
                            </li>
                            <li class="annimestion wow fadeInDown" data-wow-delay="0.5s">
                                <a href="#">
                                    <img src="public/frontend/assets/img/logo7.png" alt="img">
                                </a>
                            </li>
                            <li class="annimestion wow fadeInDown" data-wow-delay="0.6s">
                                <a href="#">
                                    <img src="public/frontend/assets/img/logo8.png" alt="img">
                                </a>
                            </li>
                            <li class="annimestion wow fadeInDown" data-wow-delay="0.7s">
                                <a href="#">
                                    <img src="public/frontend/assets/img/logo9.png" alt="img">
                                </a>
                            </li>
                            <li class="annimestion wow fadeInDown" data-wow-delay="0.8s">
                                <a href="#">
                                    <img src="public/frontend/assets/img/logo10.png" alt="img">
                                </a>
                            </li>
                            <li class="annimestion wow fadeInDown" data-wow-delay="0.3s">
                                <a href="#">
                                    <img src="public/frontend/assets/img/logo11.png" alt="img"
                                        style="width: 80px !important; ">
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--====== Contact Area End ======-->

        <!--====== Contact Area Start ======-->
        <section id="partner-with-us partner-section review-section" class="contact-area ptb_60 pb-0">
            <div class="container">
                <div class="row justify-content-center d-flex">
                    <div class="col-12 col-md-12 col-lg-12">
                        <!-- Section Heading -->
                        <div class="section-heading text-center pb-0 mb-40">
                            <h2 class="text-capitalize">Reviews</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center d-flex">
                    <div class="col-12 col-md-12">
                        <div class="reviews owl-carousel wow fadeInDown" data-wow-delay="0.3s">

                            <?php $__currentLoopData = $review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <!-- Product Card -->
                                <div class="card text-center rounded">
                                    <div class="row align-items-center d-flex">
                                        <div class="col-lg-6">
                                            <div class="box_frame"
                                                style="background-image: url('public/review_image_home/<?php echo e($r->image); ?>');">
                                                <img src="public/review_image_home/<?php echo e($r->image); ?>">

                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <p><?php echo e($r->description); ?></p>
                                            <h4><?php echo e($r->name); ?></h4>
                                            <h5><?php echo e($r->designation); ?></h5>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            <!-- <div class="card text-center rounded">
                     <img src="public/frontend/assets/img/r2.png">
                    </div> -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== Contact Area End ======-->









        <section class="categories__section color-scheme-2 section--padding">
            <div class="container">
                <h2 class="categories__content--title wow fadeInUp" data-wow-delay="0.2s">How Does Desko improve my
                    Health &amp; Productivity?</h2>
                <div class="categories__inner d-flex align-items-center">
                    <div class="categories__content">

                        <p class="categories__content--desc wow fadeInUp" data-wow-delay="0.2s">
                            Features like Sit-Stand Mechanism, Focus Zones &amp; Height
                            Flexibility Promote Active Working. This also comes with key benefits as below</p>
                        <ul class="categories__product d-flex">
                            <li class="categories__product--list wow fadeInDown" data-wow-delay="0.1s">
                                <a class="categories__product--icons" href="#">
                                    <img src="public/frontend/assets/img/icon1.png">
                                    <span class="visually-hidden">Categories</span>
                                </a>
                                <h5>46 % Rise in Productivity</h5>
                                <p>Backed by Texas A&amp;M Research <br> on Sit-Stand Mechanisms</p>
                            </li>
                            <li class="categories__product--list wow fadeInUp" data-wow-delay="0.2s">
                                <a class="categories__product--icons" href="#">
                                    <img src="public/frontend/assets/img/icon3.png">
                                    <span class="visually-hidden">Categories 2</span>
                                </a>
                                <h5>2X Calories Burnt</h5>
                                <p>Twice Calorie Consumption in a Day by Changing Modes.(NCBI Research)</p>
                            </li>
                            <li class="categories__product--list wow fadeInUp" data-wow-delay="0.3s">
                                <a class="categories__product--icons" href="#">
                                    <img src="public/frontend/assets/img/icon2.png">
                                    <span class="visually-hidden">Categories 3</span>
                                </a>
                                <h5>REDUCED BACK ISSUES</h5>
                                <p>Sitting Is the New Smoking</p>
                            </li>
                            <li class="categories__product--list wow fadeInUp" data-wow-delay="0.3s">
                                <a class="categories__product--icons" href="#">
                                    <img src="public/frontend/assets/img/icon4.png">
                                    <span class="visually-hidden">Categories 4</span>
                                </a>
                                <h5>IMPROVED POSTURE</h5>
                                <p>Longer Work Stamina</p>
                            </li>
                            <li class="categories__product--list wow fadeInUp" data-wow-delay="0.4">
                                <a class="categories__product--icons" href="#">
                                    <img src="public/frontend/assets/img/icon5.png">
                                    <span class="visually-hidden">Categories 5</span>
                                </a>
                                <h5>INCREASED FOCUS</h5>
                                <p>Our In-Built Focus Zones &amp; <br> Ergonomic Features Ensure the Same</p>
                            </li>
                            <li class="categories__product--list wow fadeInUp" data-wow-delay="0.5s">
                                <a class="categories__product--icons" href="#">
                                    <img src="public/frontend/assets/img/icon6.png">
                                    <span class="visually-hidden">Categories 6</span>
                                </a>
                                <h5>SWITCH MODES</h5>
                                <p>Stand in Meetings Sit in Detail Works</p>
                            </li>

                        </ul>

                    </div>
                    <div class="categories__sidebar">
                        <div class="categories__sidebar--inner">
                            <div class="banner__items position__relative">
                                <a class="banner__items--thumbnail" href="#">
                                    <img class="banner__items--thumbnail__img wow fadeInDown" data-wow-delay="0.3s"
                                        src="public/frontend/assets/img/our_services.png" alt="banner-img"
                                        style="width: 450px;    margin-top: 5rem;"></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--====== Contact Area Start ======-->
        <section class="imgsDiv ptb_60 pb-0">
            <div class="container-fluid">

                <?php $__currentLoopData = $msg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($m->id % 2 == 0): ?>
                        <div class="row justify-content-center d-flex flex-top ">
                            <div class="col-md-7 p-0">
                                <div class="box-watch wow fadeInUp" data-wow-delay="0.3s">
                                    <img src="public/msg_image_home/<?php echo e($m->image); ?>">
                                </div>
                            </div>
                            <div class="col-md-5 p-0">
                                <div class="module-style">
                                    <h3 class="title-module wow fadeInUp" data-wow-delay="0.3s">
                                        <?php echo e($m->title); ?>

                                    </h3>
                                    <p class="wow fadeInUp" data-wow-delay="0.2s"><?php echo e($m->description); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="row justify-content-center d-flex align-items-center ">
                            <div class="col-md-6 p-0">
                                <div class="module-style">
                                    <h3 class="title-module wow fadeInDown" data-wow-delay="0.3s">
                                        <?php echo e($m->title); ?>

                                    </h3>
                                    <p class="wow fadeInUp" data-wow-delay="0.2s"><?php echo e($m->description); ?></p>
                                </div>
                            </div>
                            <div class="col-md-6 p-0">
                                <div class="wow fadeInDown" data-wow-delay="0.3s">
                                    <img src="public/msg_image_home/<?php echo e($m->image); ?>">
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!--
                <div class="row justify-content-center d-flex flex-top">
                    <div class="col-md-7 p-0">
                        <div class="box-watch wow fadeInUp" data-wow-delay="0.3s">
                            <img src="public/frontend/assets/img/w_2.jpg">
                        </div>
                    </div>
                    <div class="col-md-5 p-0">
                        <div class="module-style">
                            <h3 class="title-module wow fadeInUp" data-wow-delay="0.3s">
                                Six different <br /> massage modes
                            </h3>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">By combination of far infrared heating,
                                Electric Impulse, Vibration Massage, give you a special feeling.</p>
                        </div>
                    </div>

                </div>

            -->
            </div>
        </section>
        <!--====== Contact Area End ======-->


        <!-- ***** Products Area Start ***** -->
        <section id="products2" class="products-area pt-100">
            <div class="container wow fadeInDown" data-wow-delay="0.3s">
                <div class="row justify-content-center d-flex">
                    <div class="col-12 col-md-10 col-lg-7">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">One Stop Solution for All Your Working Needs</h2>
                            <p class="d-none d-sm-block mt-4">
                                Accessories & Chairs. Set-up your complete workspace or let us
                                manage the same. We are just a call away.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="products owl-carousel">
                        <!-- Product Card -->
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="card product-card text-center rounded">
                                <!-- Product Thumb -->
                                <div class="product-image">
                                    <img loading="lazy" class="product-thumb mx-auto pt-3"
                                        src="public/feature_image/<?php echo e($product->feature_image); ?>" alt="">
                                </div>
                                <!-- Card Body -->
                                <div class="card-body py-4">
                                    <h3><?php echo e($product->prod_name); ?></h3>
                                    <h4 class="text-primary py-2"><?php echo e($product->offer_price); ?></h4>
                                </div>
                                <!-- Product Order -->
                                <div class="product-order">
                                    <!-- Order Button -->
                                    <div class="order-btn d-flex flex-wrap justify-content-center">
                                        <a class="prolend-primary style-two m-2" href="#">View Details</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <!-- Product Card -->
                        <!-- Product Card -->

                        <!-- Product Card -->

                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Products Area End ***** -->

        <!-- ***** Products Area End ***** -->

        <section class="products-area pt-100">
            <img src="https://devvsh.deskohome.com/img/home/banner.png" width="100%" class="wow fadeInUp"
                data-wow-delay="0.3s">
        </section>


        <section class="comparison-area pr-4 overflow-scroll">
            <div class="container">
                <div class="row justify-content-center d-flex wow fadeInDown" data-wow-delay="0.4s">
                    <div class="col-12 col-md-10 col-lg-9">
                        <div class="section-heading50 text-center">
                            <h2 class="text-capitalize">Product-Wise Smart Features</h2>
                            <p class="d-none d-sm-block mt-4">Each Product is designed for its unique usage</p>
                        </div>
                    </div>
                </div>
                <div class="row wow fadeInUp" data-wow-delay="0.5s">
                    <div class="col-12 table-responsive-lg">
                        <table class="table table-responsive-lg table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="h3 text-primary" scope="col" style="min-width:200px">
                                        <div class="card-body product-body">
                                            <h3 class="pb-2">Smart Features</h3>
                                        </div>
                                    </th>
                                    <th class="text-primary text-center" scope="col">
                                        <div class="product-thumb mx-auto text-center">
                                            <img loading="lazy"
                                                src="https://devvsh.deskohome.com/products/large/1651121182-desko-smartdesk-pro.png"
                                                alt="">
                                        </div>
                                        <div class="card-body product-body">
                                            <h3 class="pb-2">Desko SmartDesk Pro</h3>
                                        </div>
                                    </th>
                                    <th class="text-primary text-center" scope="col">
                                        <div class="product-thumb mx-auto text-center">
                                            <img loading="lazy"
                                                src="https://devvsh.deskohome.com/products/large/1646709504-desko-bedworx.png"
                                                alt="">
                                        </div>
                                        <div class="card-body product-body">
                                            <h3 class="pb-2">Desko Bedworx</h3>
                                        </div>
                                    </th>
                                    <th class="text-primary text-center" scope="col">
                                        <div class="product-thumb mx-auto text-center">
                                            <img loading="lazy"
                                                src="https://devvsh.deskohome.com/products/large/1612596528-boomerang-l-shaped-desk.png"
                                                alt="">
                                        </div>
                                        <div class="card-body product-body">
                                            <h3 class="pb-2">Desko Boomerang</h3>
                                        </div>
                                    </th>
                                </tr>
                                <tr>
                                    <th class="h3 text-primary" scope="col">Designed For</th>
                                    <th class="h3 text-primary text-center" scope="col">8-14 Hours Work/day</th>
                                    <th class="h3 text-primary text-center" scope="col">4-6 Hours Work/Day</th>
                                    <th class="h3 text-primary text-center" scope="col">6-10 Hours Work/Day</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Sit-Stand Convertible</th>
                                    <td class="text-center">Automatic</td>
                                    <td class="text-center">Manual</td>
                                    <td class="text-center">No</td>
                                </tr>
                                <tr>
                                    <th scope="row">USB + Socket on Table Top</th>
                                    <td class="text-center">Yes</td>
                                    <td class="text-center">Yes , both sides</td>
                                    <td class="text-center">Yes</td>
                                </tr>
                                <tr>
                                    <th scope="row">In-built Cable Management</th>
                                    <td class="text-center">Yes</td>
                                    <td class="text-center">Yes</td>
                                    <td class="text-center">Yes</td>
                                </tr>
                                <tr>
                                    <th scope="row">Portable(Wheels With Locking)</th>
                                    <td class="text-center">Yes</td>
                                    <td class="text-center">Yes</td>
                                    <td class="text-center">No</td>
                                </tr>
                                <tr>
                                    <th scope="row">Mobile/Tablet Holder </th>
                                    <td class="text-center">Yes</td>
                                    <td class="text-center">No</td>
                                    <td class="text-center">Yes</td>
                                </tr>
                                <tr>
                                    <th scope="row">White Board Area </th>
                                    <td class="text-center">Yes</td>
                                    <td class="text-center">No</td>
                                    <td class="text-center">Yes</td>
                                </tr>
                                <tr>
                                    <th scope="row">Utility Drawer </th>
                                    <td class="text-center">Yes</td>
                                    <td class="text-center">No</td>
                                    <td class="text-center">Yes</td>
                                </tr>
                                <tr>
                                    <th scope="row">In-built Wireless Charger </th>
                                    <td class="text-center">Yes</td>
                                    <td class="text-center">No</td>
                                    <td class="text-center">No</td>
                                </tr>
                                <tr>
                                    <th scope="row">In-built Laptop Recliner </th>
                                    <td class="text-center">Yes</td>
                                    <td class="text-center">Yes</td>
                                    <td class="text-center">No</td>
                                </tr>
                                <tr>
                                    <th scope="row">Accessory Hanger </th>
                                    <td class="text-center">Yes</td>
                                    <td class="text-center">No</td>
                                    <td class="text-center">Yes</td>
                                </tr>
                                <tr>
                                    <th scope="row">3 m Power Cable Included </th>
                                    <td class="text-center">Yes</td>
                                    <td class="text-center">Yes</td>
                                    <td class="text-center">Yes</td>
                                </tr>
                                <tr>
                                    <th scope="row">In-built Plantation Zone </th>
                                    <td class="text-center">Yes</td>
                                    <td class="text-center">No</td>
                                    <td class="text-center">No</td>
                                </tr>
                                <tr>
                                    <th scope="row">Wedge/Curved Table Top </th>
                                    <td class="text-center">Yes</td>
                                    <td class="text-center">Yes</td>
                                    <td class="text-center">Yes</td>
                                </tr>
                                <tr>
                                    <th scope="row">Color Customization</th>
                                    <td class="text-center">Yes</td>
                                    <td class="text-center">No</td>
                                    <td class="text-center">Yes</td>
                                </tr>
                                <tr>
                                    <th scope="row">Footrest Bar & Cushion </th>
                                    <td class="text-center">Yes</td>
                                    <td class="text-center">No</td>
                                    <td class="text-center">No</td>
                                </tr>
                                <tr>
                                    <th scope="row">In-built Cup-Warmer </th>
                                    <td class="text-center">Yes</td>
                                    <td class="text-center">No</td>
                                    <td class="text-center">No</td>
                                </tr>
                                <tr>
                                    <th scope="row">In-built LED lighting </th>
                                    <td class="text-center">No</td>
                                    <td class="text-center">Yes</td>
                                    <td class="text-center">Yes</td>
                                </tr>
                                <tr>
                                    <th scope="row">Focus Zone Uplift </th>
                                    <td class="text-center">No</td>
                                    <td class="text-center">No</td>
                                    <td class="text-center">Yes</td>
                                </tr>
                                <tr>
                                    <th scope="row">In-built Bluetooth Speakers </th>
                                    <td class="text-center">No</td>
                                    <td class="text-center">Yes</td>
                                    <td class="text-center">No</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>




        <!--====== Contact Area Start ======-->
        <section id="partner-with-us" class="contact-area partnerdesign">
            <div class="container">
                <div class="row justify-content-center d-flex">
                    <div class="col-12 col-md-10 col-lg-6">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2 class="text-capitalize">Partner With Us</h2>
                            <p class="d-none d-sm-block mt-4">
                                If you are a company, Let us help design your office space and revolutionize the ways of
                                working for your employees.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="row justify-content-center d-flex">
                    <div class="col-12 col-md-10">
                        <!-- Contact Box -->
                        <div class="contact-box text-center">
                            <!-- Contact Form -->
                            <form action="<?php echo e(url('contact_form_home')); ?>" method="post"
                                enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group wow fadeInUp" data-wow-delay="0.3s">
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Company/Individual Name*" required="required">
                                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="error"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-delay="0.3s">
                                            <input type="email" class="form-control" name="email"
                                                placeholder="Email*" required="required">
                                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="error"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>

                                        <div class="form-group wow fadeInUp" data-wow-delay="0.4s">
                                            <input type="number" class="form-control" name="phone"
                                                placeholder="Phone*" required="required">
                                            <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="error"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="profession"
                                                placeholder="Profession">
                                            <?php $__errorArgs = ['profession'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="error"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <style>
                                            .contact-box .form-group textarea {
                                                height: 182px;
                                            }
                                        </style>
                                        <div class="form-group wow fadeInUp" data-wow-delay="0.6s">
                                            <textarea class="form-control" name="message" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn mt-3 wow fadeInUp"
                                            data-wow-delay="0.3s"><span class="text-white pr-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z" />
                                                </svg>
                                            </span>Send Message</button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-message"></p>
                        </div>
                    </div>
                </div>
                <div class="powered-design">
                    <div class="shapes-container wow fadeInDown" data-wow-delay="0.5s">
                        <div class="shape shape-triangle shape-animated">
                            <div class="animation--rotating"></div>
                        </div>
                    </div>
                    <div class="shape pattern-dots-1 wow fadeInDown" data-wow-delay="0.3s"></div>
                </div>
            </div>
        </section>
        <!--====== Contact Area End ======-->


        <section class="row faqs">
            <div class="container">
                <div class="row section-header wow fadeInUp">
                    <h2>faq</h2>
                    <p>Got questions? We’ve got answers. If you have some other questions, feel free to send us an email
                        to
                        <a href="#"><span class="__cf_email__"
                                data-cfemail="7c14191010133c0c0e1318091f08521f1311">[email&#160;protected]</span></a>
                    </p>
                </div>
                <div class="row">
                    <?php $__currentLoopData = $faq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-sm-6 faq wow fadeInUp">
                            <h4><?php echo e($f->question); ?></h4>
                            <p><?php echo e($f->ans); ?></p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </div>
            </div>
        </section>




        <footer class="row">
            <div class="container">
                <div class="row m0 social-links">
                    <ul class="nav">
                        <li class="wow fadeInUp"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="wow fadeInUp" data-wow-delay="0.1s"><a href="#"><i
                                    class="fa fa-twitter"></i></a></li>
                        <li class="wow fadeInUp" data-wow-delay="0.2s"><a href="#"><i
                                    class="fa fa-linkedin"></i></a></li>
                        <li class="wow fadeInUp" data-wow-delay="0.3s"><a href="#"><i
                                    class="fa fa-youtube"></i></a></li>
                        <li class="wow fadeInUp" data-wow-delay="0.4s"><a href="#"><i
                                    class="fa fa-google-plus"></i></a>
                        </li>
                        <li class="wow fadeInUp" data-wow-delay="0.5s"><a href="#"><i
                                    class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
                <div class="row m0 menu-rights">
                    <ul class="nav footer-menu">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Mobile App</a></li>
                        <li><a href="#">PressKit</a></li>
                    </ul>
                    <p>Copyright © 2022. DESKO UP YOUR GAME.
                        <br class="small-divide"> All rights reserved
                    </p>
                </div>
            </div>
        </footer>

    </main>
    <a href="#header" class="back_to_top"><img src="public/images/back_to_top.png" alt="back to top"></a>
    <script src="public/js/lib/jquery-2.2.0.min.js"></script>
    <script src="public/js/lib/bootstrap.min.js"></script>
    <script src="public/vendors/owl-carousel/owl.carousel.js"></script>
    <script src="public/js/plugins/wow.min.js"></script>
    <!--     <script src="public/js/includes/contact.js"></script>
 -->
    <script src="public/js/main.js"></script>
</body>

</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/admin/resources/views/index_home.blade.php ENDPATH**/ ?>