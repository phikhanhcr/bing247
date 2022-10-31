@extends('layouts.app', ['header_mode' => 'bg-transparent'])

@section('main')
    <!-- Hero Section Start -->
    <div class="hero-section-09">
        <div class="hero-section-09__shape shape-x-1">
            <img src="/img/home-9/section-shape-1.svg" alt="shape" class="w-100">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-10 offset-xl-1 order-lg-2" data-aos="fade-left" data-aos-delay="1300"
                    data-aos-duration="1000">
                    <div class="hero-section-09__image-group mb-mobile-lg">
                        <img src="/img/workout/anh1.png" style="max-width: 500px;" alt="hero-image" class="w-100">
                        <div class="hero-section-09__image-group--shape-1 shape-x-2">
                            <img src="/img/home-9/hero-shape-1.svg" alt="shape" class="w-100">
                        </div>
                        <div class="hero-section-09__image-group--shape-2 shape-x-2">
                            <img src="/img/home-9/hero-shape-2.svg" alt="shape" class="w-100">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-8 col-11 order-lg-1" data-aos="fade-up" data-aos-delay="1300"
                    data-aos-duration="1000">
                    <div class="hero-section-09__content hero-content">
                        <h1 class="heading-dark title">A better way to track your workouts</h1>
                        <p class="text-dark text">The most comprehensive database of effective workout routines anywhere!
                            Let
                            Workoutnow help you with any goal or experience level.</p>
                        <a href="{{ route("getSignin") }}" class="mt-3 btn hero-btn btn-primary btn-primary-hvr">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-section-09__bg-shpae">
            <img src="/img/home-9/hero-bg.png" alt="bg">
        </div>
    </div>
    <!-- Hero Section End -->
    <!-- Brand Section End -->
    <!-- About Section Start -->
    <div class="about-section-06">
        <div class="about-section-06__shape" data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000">
            <img src="/img/home-9/section-shape-2.svg" alt="shape" class="w-100">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6 col-md-8 col-xs-10 col-sm-11" data-aos="fade-right" data-aos-delay="500"
                    data-aos-duration="1000">
                    <div class="block-title about-section-06__content mb-mobile-lg">
                        <h2 class="title">Visualize your progress with strong Workoutnow.co</h2>
                        <p class="text-dark">The best workout routines, training tips, and fitness culture coverage you can
                            find anywhere. We’re here to help you build into the best version of yourself.</p>
                        <a class="btn btn-primary btn-primary-hvr" href="{{ route("getSignin") }}">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6 offset-xl-1 col-lg-6">
                    <div class="row justify-content-center widgets-row about-section-06__card-group">
                        <div class="col-xl-6 col-lg-6 col-sm-6 col-xs-6 col-11" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="1000">
                            <div class="widget widget-card">
                                <div class="widget-icon">
                                    <img src=/img/home-7/c-icon-1.svg alt="icon">
                                </div>
                                <div class="widget-text">
                                    <h3 class='widget-title'>Exercise Guides & Muscles Worked</h3>
                                    <p class='widget-text'>Choose among 300+ of the most popular exercises – or create your
                                        own.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-sm-6 col-xs-6 col-11" data-aos="fade-up" data-aos-delay="400"
                            data-aos-duration="1000">
                            <div class="widget widget-card">
                                <div class="widget-icon">
                                    <img src=/img/home-7/c-icon-2.svg alt="icon">
                                </div>
                                <div class="widget-text">
                                    <h3 class='widget-title'>Track Your Progress & Set Goals</h3>
                                    <p class='widget-text'>Let us crunch your data and show you when you’re making the best
                                        progress.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-sm-6 col-xs-6 col-11" data-aos="fade-up" data-aos-delay="600"
                            data-aos-duration="1000">
                            <div class="widget widget-card">
                                <div class="widget-icon">
                                    <img src=/img/home-7/c-icon-3.svg alt="icon">
                                </div>
                                <div class="widget-text">
                                    <h3 class='widget-title'>See your progress</h3>
                                    <p class='widget-text'>Workoutnow provides different graphs that help you track your
                                        progress.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->
    <!-- Content Section Start -->
    <div class="content-section-19">
        <div class="content-section-19__dots" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000">
            <img src="/img/home-9/dots.svg" class="w-100" alt="shape">
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-8 col-sm-10 col-xs-11">
                    <div class="content-section-19__image-group" data-aos="fade-right" data-aos-delay="500"
                        data-aos-duration="1000">
                        <img src="/img/workout/anh2.png" alt="content-img" class="mw-100">
                    </div>
                </div>
                <div class="col-xxl-5 offset-xxl-2 col-xl-6 col-lg-6 col-md-8 col-sm-10 col-xs-11" data-aos="fade-up"
                    data-aos-delay="500" data-aos-duration="1000">
                    <div class="block-title content-section-19__content">
                        <h2 class="title">Break your plateaus with Workoutnow </h2>
                        <p class="text-dark">A workout tracker that is easy to use, but gives you detailed stats under the
                            hood. </p>
                        <ul class="content-section-19__content--list">
                            <li>
                                <img src="/img/home-9/check.svg" class="make-it-inline" alt="check"> Log unlimited
                                workouts
                            </li>
                            <li>
                                <img src="/img/home-9/check.svg" class="make-it-inline" alt="check"> Personal
                                records & stats
                            </li>
                            <li>
                                <img src="/img/home-9/check.svg" class="make-it-inline" alt="check"> Supersets,
                                drop sets
                            </li>
                            <li>
                                <img src="/img/home-9/check.svg" class="make-it-inline" alt="check"> Circuit
                                training
                            </li>
                            <li>
                                <img src="/img/home-9/check.svg" class="make-it-inline" alt="check"> Set timer
                            </li>
                            <li>
                                <img src="/img/home-9/check.svg" class="make-it-inline" alt="check"> General growth
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Section End -->

    <!-- Fact Section End -->
    <!-- Content Section Start -->
    <div class="content-section-20">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-7 col-lg-6 col-md-8 col-sm-10 col-xs-11 order-lg-2">
                    <div class="content-section-20__image-group" data-aos="fade-left" data-aos-delay="500"
                        data-aos-duration="1000">
                        <img src="/img/workout/anh3.png" alt="content-img" class="mw-100">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 col-xs-11 order-lg-1" data-aos="fade-up"
                    data-aos-delay="500" data-aos-duration="1000">
                    <div class="block-title content-section-20__content">
                        <h2 class="title">Record all your workouts sessions </h2>
                        <p class="text-dark">Record all your sessions using your phone alone or your favorite accessory
                            like Garmin or Apple Watch.</p>
                        <a class="btn btn-primary btn-primary-hvr" href="{{ route("getSignin") }}">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Section End -->
    <!-- Content Section Start -->
    <div class="content-section-21">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-9 col-xs-11 col-sm-11">
                    <div class="content-section-21__image-group mb-mobile-lg" data-aos="fade-right" data-aos-delay="500"
                        data-aos-duration="1000">
                        <img src="/img/workout/anh2.png" alt="content-image" class="mw-100">
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-6 col-md-9 col-xs-11 col-sm-11">
                    <div class="content-section-21__content block-title">
                        <h2 class="title">A workout tracker couldn’t be more easy to use </h2>
                    </div>
                    <div class="content-section-21__tab">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                    aria-selected="true">Think less</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                    type="button" role="tab" aria-controls="profile" aria-selected="false">Lift
                                    more</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <div class="tab-pane__content">
                                    <p class="text-dark text">Simplicity is a virtue, and workoutnow.co has succeeded with
                                        keeping the interface simple despite myriads of features. Keep track of your best
                                        sets, max 1RM, body fat percentage, and more with no difficulty.</p>
                                    <a class="btn btn-primary btn-primary-hvr" href="{{ route("getSignin") }}">Get Started</a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="tab-pane__content">
                                    <p class="text-dark text">Simplicity is a virtue, and workoutnow.co has succeeded with
                                        keeping the interface simple despite myriads of features. Keep track of your best
                                        sets, max 1RM, body fat percentage, and more with no difficulty.</p>
                                    <a class="btn btn-primary btn-primary-hvr" href="{{ route("getSignin") }}">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Section End -->

    <!-- Testimonial Section Start -->
    <div class="testimonial-section-08">
        <div class="testimonial-section-08__dots" data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000">
            <img src="/img/home-9/dots.svg" class="w-100" alt="shape">
        </div>
        <div class="container">
            <div class="section-title testimonial-section-08__title text-center">
                <h2 class="title">What our happy clients say</h2>
            </div>
            <div class="row testimonial-section-08__slider three-row-mobile-slider mobile-slider">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <a href="javascript:void(0)" class="crad card-testimonial-06">
                        <div class="card-testimonial-06__img">
                            <img src="/img/home-1/team-1.png" alt="testimonial">
                        </div>
                        <div class="card-testimonial-06__content">
                            <div class="client-info">
                                <div class="client-info--deatail">
                                    <h6>Annie Simpson </h6>
                                    <small class="text-dark">England</small>
                                </div>
                                <div class="client-info--rataing">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <p class="heading-dark">"I lost 40 pounds and this great website kept track of every single
                                pound I lost!!!!! Thank you so much."</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <a href="javascript:void(0)" class="crad card-testimonial-06">
                        <div class="card-testimonial-06__img">
                            <img src="/img/home-1/team-2.png" alt="testimonial">
                        </div>
                        <div class="card-testimonial-06__content">
                            <div class="client-info">
                                <div class="client-info--deatail">
                                    <h6>Mathew Smith</h6>
                                    <small class="text-dark">Australia</small>
                                </div>
                                <div class="client-info--rataing">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <p class="heading-dark">"Very easy to use. I have tried similar apps and websites but this is
                                much more intuitive than most."</p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <a href="javascript:void(0)" class="crad card-testimonial-06">
                        <div class="card-testimonial-06__img">
                            <img src="/img/home-1/team-3.png" alt="testimonial">
                        </div>
                        <div class="card-testimonial-06__content">
                            <div class="client-info">
                                <div class="client-info--deatail">
                                    <h6>Nicole Linton</h6>
                                    <small class="text-dark">Canada</small>
                                </div>
                                <div class="client-info--rataing">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <p class="heading-dark">"Awesome website to keep track of your daily routines. Love it!!"</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Section End -->


    <!-- Cta Section End -->
@endsection
