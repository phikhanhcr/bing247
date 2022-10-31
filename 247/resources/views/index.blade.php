@extends('layouts.app', ['header_mode' => 'bg-transparent'])

@section('main')
    <!-- Hero Section Start -->
    <div class="hero-section-10">
        <div class="hero-section-10__rectangle">
            <img src="/img/home-10/hero-rectangle.png" alt="shape">
        </div>
        <div class="hero-section-10__shape-1">
            <img src="/img/home-10/hero-shape-1.svg" class="w-100" alt="shape">
        </div>
        <div class="hero-section-10__shape-2 circle-animation">
            <img src="/img/home-10/hero-shape-2.svg" class="w-100" alt="shape">
        </div>
        <div class="hero-section-10__shape-3 floating-Y-animation-reverse-03">
            <img src="/img/home-10/hero-shape-3.svg" class="w-100" alt="shape">
        </div>
        <div class="hero-section-10__shape-4" data-aos="fade-left" data-aos-delay="1300" data-aos-duration="1000">
            <img src="/img/home-10/dots.svg" alt="shape" class="w-100">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="hero-section-10__content hero-content">
                        <h1 class="title heading-light">The best way to track your workouts</h1>
                        <p class="text-light text">An intelligent and convenient website to help you keep fit & make
                            building muscle easier. </p>
                        <div class="hero-section-10__content--btn-group">
                            <a class="btn hero-btn btn-primary btn-primary-hvr" href="{{ route("getSignin") }}">Get Started</a>
                        </div>
                    </div>
                    <div class="hero-section-10__image-group text-center" data-aos="fade-up" data-aos-delay="1300"
                        data-aos-duration="1000">
                        <img src="/img/247/anh1.png" style="max-width: 600px;" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->
    <!-- Fact Section Start -->
    <!-- END BRAND SECTION -->
    <!-- Brand Section End -->
    <!-- Content Section Start -->
    <div class="content-section-22">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-7 col-xs-10 col-sm-10" data-aos="fade-right" data-aos-delay="1300"
                    data-aos-duration="1000">
                    <div class="content-section-22__image-group mb-mobile-lg" style="margin-left: 100px;">
                        <img src="/img/247/anh2.png" style="max-width: 500px;" alt="content-image">
                        <div class="content-section-22__image-group--shape">
                            <img src="/img/home-10/content-1-shape.svg" alt="card">
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-5 offset-xxl-2  offset-lg-1 col-lg-5 col-md-7 col-xs-9 col-sm-8">
                    <div class="block-title content-section-22__content">
                        <h2 class="title">Plan your training and track your progress.</h2>
                        <p class="text-dark">247workout is simpler and more powerful than a notebook, and designed to stay
                            out of your way.</p>
                        <ul class="content-section-22__content--list">
                            <li>
                                <div class="icon">
                                    <img src="/img/home-10/icon-check.svg" class="make-it-inline" alt="check">
                                </div>
                                <span> Plan consistent muscle growth </span>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="/img/home-10/icon-check.svg" class="make-it-inline" alt="check">
                                </div>
                                <span>Track your weight lifting performance</span>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="/img/home-10/icon-check.svg" class="make-it-inline" alt="check">
                                </div>
                                <span>Keep you motivated </span>
                            </li>
                        </ul>
                        <a class=" btn btn-primary btn-primary-hvr" href="{{ route("getSignin") }}">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Section End -->
    <!-- Feature Section Start -->
    <div class="feature-section-07">
        <div class="container">
            <div class="row justify-content-center">
                <div class="section-title text-center">
                </div>
            </div>
            <div class="row justify-content-center justify-content-sm-start feature-widgets-row-02">
                <div class="col-lg-4 col-md-6 col-sm-8 col-xs-8" data-aos="fade-up" data-aos-delay="200"
                    data-aos-duration="1000">
                    <a href="#">
                        <div class="widget widget-column feature-section-07__card">
                            <div class="widget-icon">
                                <img src=./img/home-10/f-icon-1.svg alt="icon">
                            </div>
                            <div class="widget-text">
                                <h3 class='widget-title'>Program for every goal</h3>
                                <p class='widget-text'>Strength, size, endurance or power. Whatever your goal, we've got you
                                    covered.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 col-xs-8" data-aos="fade-up" data-aos-delay="400"
                    data-aos-duration="1000">
                    <a href="#">
                        <div class="widget widget-column feature-section-07__card">
                            <div class="widget-icon">
                                <img src=./img/home-10/f-icon-2.svg alt="icon">
                            </div>
                            <div class="widget-text">
                                <h3 class='widget-title'>Project time tracking</h3>
                                <p class='widget-text'>Project dashboards and reports help you to keep track of your
                                    projects.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 col-xs-8" data-aos="fade-up" data-aos-delay="600"
                    data-aos-duration="1000">
                    <a href="#">
                        <div class="widget widget-column feature-section-07__card">
                            <div class="widget-icon">
                                <img src=./img/home-10/f-icon-3.svg alt="icon">
                            </div>
                            <div class="widget-text">
                                <h3 class='widget-title'>Templates facilitated</h3>
                                <p class='widget-text'>Simply use an existing project as a template and adjust only the
                                    calculations and other key data.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 col-xs-8" data-aos="fade-up" data-aos-delay="800"
                    data-aos-duration="1000">
                    <a href="#">
                        <div class="widget widget-column feature-section-07__card">
                            <div class="widget-icon">
                                <img src=./img/home-10/f-icon-4.svg alt="icon">
                            </div>
                            <div class="widget-text">
                                <h3 class='widget-title'>Analyze and evaluate</h3>
                                <p class='widget-text'>Create project reports and analyze target and actual values in real
                                    time.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 col-xs-8" data-aos="fade-up" data-aos-delay="1000"
                    data-aos-duration="1000">
                    <a href="#">
                        <div class="widget widget-column feature-section-07__card">
                            <div class="widget-icon">
                                <img src=./img/home-10/f-icon-5.svg alt="icon">
                            </div>
                            <div class="widget-text">
                                <h3 class='widget-title'>Monitor projects</h3>
                                <p class='widget-text'>Wherever you are, you have access to all the data and performance
                                    metrics for your gym.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 col-xs-8" data-aos="fade-up" data-aos-delay="1200"
                    data-aos-duration="1000">
                    <a href="#">
                        <div class="widget widget-column feature-section-07__card">
                            <div class="widget-icon">
                                <img src=./img/home-10/f-icon-6.svg alt="icon">
                            </div>
                            <div class="widget-text">
                                <h3 class='widget-title'>Record workouts times</h3>
                                <p class='widget-text'>Record project times with the time tracker or manually. </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Section End -->
    <!-- Content Section Start -->
    <div class="content-section-23">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-7 col-xs-10 col-sm-10 order-lg-2">
                    <div class="content-section-23__image-group mb-mobile-lg" data-aos="fade-left" data-aos-delay="1300"
                        data-aos-duration="1000">
                        <img src="/img/247/anh3.png" alt="content-img" class="mw-100">
                        <div class="content-section-23__image-group--shape">
                            <img src="/img/home-10/content-2-shape.svg" class="w-100" alt="shape">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-9 col-11">
                    <div class="block-title content-section-23__content" data-aos="fade-up" data-aos-duration="800">
                        <h2 class="title">247workout provides intuitive workout tracking experience.</h2>
                        <p class="text-dark">Easily take control of your training and visualize your progress with
                            247workout.co every second. </p>
                    </div>
                    <div class="row content-section-23__widget">
                        <div class="col-xl-12 col-lg-12 col-md-10 col-sm-6 col-xs-6 col-10 order-lg-1" data-aos="fade-up"
                            data-aos-duration="800">
                            <div class="widget widget-content widget-column-till-md">
                                <div class="widget-icon">
                                    <img src=./img/home-10/c-icon-1.svg alt="icon">
                                </div>
                                <div class="widget-text">
                                    <h3 class='widget-title'>Record hours worked</h3>
                                    <p class='widget-text'>Manage individual work time accounts and analyze hours for each
                                        training session.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-10 col-sm-6 col-xs-6 col-10 order-lg-1" data-aos="fade-up"
                            data-aos-duration="800">
                            <div class="widget widget-content widget-column-till-md">
                                <div class="widget-icon">
                                    <img src=./img/home-10/c-icon-2.svg alt="icon">
                                </div>
                                <div class="widget-text">
                                    <h3 class='widget-title'>Approve time sheets</h3>
                                    <p class='widget-text'>Write quotes and offers using flexible templates with favorite
                                        experience.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Section End -->
    <!-- Pricing Section Start -->
    <!-- Pricing Section End -->
    <!-- Testimonial Section Start -->
    <div class="testimonial-section-09">
        <div class="container">
            <div class="section-title testimonial-section-09__title text-center">
                <h2 class="title">We are happy to share our <br class="d-none d-xs-block"> client’s review</h2>
            </div>
            <div class="testimonial-section-09__slider testimonial-section-09--02 testimonial-slider--05 mobile-slider">
                <div class="single-sider">
                    <div class="card-testimonial-05">
                        <p class="heading-dark text">“I’m a fan of the 247workout.co. It’s the best workout tracker that’s
                            out there on the market.”</p>
                        <div class="card-testimonial-05__body">
                            <div class="card-testimonial-05__body--info">
                                <div class="client-img">
                                    <img src="/img/home-1/team-2.png" alt="card-image">
                                </div>
                                <div class="client-info">
                                    <h6 class="name">Michelle Dan</h6>
                                    <span class="text-dark skill">Entrepreneur</span>
                                </div>
                            </div>
                            <div class="card-testimonial-05__body--ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-sider">
                    <div class="card-testimonial-05">
                        <p class="heading-dark text">"Beauty in simplicity. This is perfect. No need to search through
                            lifts like other overly complex apps. No complaints!"</p>
                        <div class="card-testimonial-05__body">
                            <div class="card-testimonial-05__body--info">
                                <div class="client-img">
                                    <img src="/img/home-1/team-4.png" alt="card-image">
                                </div>
                                <div class="client-info">
                                    <h6 class="name">Ei Unn Sætre</h6>
                                    <span class="text-dark skill">Gym Owner</span>
                                </div>
                            </div>
                            <div class="card-testimonial-05__body--ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-sider">
                    <div class="card-testimonial-05">
                        <p class="heading-dark text">"I love it! Easy to use in the gym during workouts without slowing me
                            down. Powerful data capture and access for analysis. It works perfectly."</p>
                        <div class="card-testimonial-05__body">
                            <div class="card-testimonial-05__body--info">
                                <div class="client-img">
                                    <img src="/img/testimonial-3.png" alt="card-image">
                                </div>
                                <div class="client-info">
                                    <h6 class="name">Alexandra Daddario</h6>
                                    <span class="text-dark skill">Powerlifting Champion</span>
                                </div>
                            </div>
                            <div class="card-testimonial-05__body--ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cta Section End -->
@endsection
