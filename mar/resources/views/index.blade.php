@extends('layouts.app', ['header_mode' => 'bg-transparent'])

@section('main')
    <!-- Hero Section Start -->
    <div class="hero-section-08">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10 col-xs-10" data-aos="fade-up" data-aos-delay="1300"
                    data-aos-duration="1000">
                    <div class="hero-section-08__content hero-content mb-mobile-lg text-center text-lg-start">
                        <h1 class="title heading-light mb-20">Deliver exceptional marketing experiences with Marketingsolu.
                        </h1>
                        <p class="text-light text">Leverage the marketing tools that customer-first brands trust for reliable
                            strategy at scale.</p>
                        <a class="btn btn-primary btn-primary-hvr mt-3" href="{{ route('getSignin') }}">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10 col-sm-10 col-xs-10">
                    <div class="hero-section-08__image-group" style="margin-left: 40px;">
                        <img src="/img/marketing/anh1.png" style="max-width: 700px;" alt="hero-img" class="w-100">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->
    <!-- Feature Section Start -->
    <section class="feature-section-06">
        <div class="feature-section-06__shape">
            <img src="/img/home-8/feature-section-dots.svg" class="w-100" alt="shape">
        </div>
        <div class="container">
            <div class="row justify-content-center feature-widgets-row">
                <div class="col-lg-4 col-md-6 col-sm-8 col-xs-10" data-aos="fade-up" data-aos-delay="200"
                    data-aos-duration="1000">
                    <div class="widget widget-card widget-card-center feature-section-06__widget-card">
                        <div class="widget-icon">
                            <img src="/img/home-8/f-icon-1.svg" alt="widget" class="make-it-inline" />
                        </div>
                        <div class="widget-text">
                            <h3 class="widget-title heading-dark">Searching Optimisation</h3>
                            <p class="text-dark">We optimize our clients' websites to make their brands more visible within
                                the
                                search engines.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 col-xs-10" data-aos="fade-up" data-aos-delay="400"
                    data-aos-duration="1000">
                    <div class="widget widget-card widget-card-center feature-section-06__widget-card">
                        <div class="widget-icon">
                            <img src="/img/home-8/f-icon-2.svg" alt="widget" class="make-it-inline" />
                        </div>
                        <div class="widget-text">
                            <h3 class="widget-title heading-dark">Content Marketing</h3>
                            <p class="text-dark">Creating content in line with the dynamics of your market and the habits of
                                your
                                target audience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 col-xs-10" data-aos="fade-up" data-aos-delay="600"
                    data-aos-duration="1000">
                    <div class="widget widget-card widget-card-center feature-section-06__widget-card">
                        <div class="widget-icon">
                            <img src="/img/home-8/f-icon-3.svg" alt="widget" class="make-it-inline" />
                        </div>
                        <div class="widget-text">
                            <h3 class="widget-title heading-dark">Marketing Consultancy</h3>
                            <p class="text-dark">In every aspect of performance marketing, we run the optimization process
                                by
                                accepting the data as our main guide.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section End -->
    <!-- About Section Start -->
    <div class="about-section-05">
        <div class="about-section-05__shape" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000">
            <img src="/img/home-8/shape.svg" style="max-width: 500px;" alt="shape">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="about-section-05__image-group mb-mobile-lg" data-aos="fade-right" data-aos-delay="500"
                        data-aos-duration="1000">
                        <img src="/img/marketing/anh2.png" alt="about-img" class="w-100">
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-2 col-lg-6" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                    <div class="about-section-05__content block-title">
                        <h2 class="title">Innovative and effective online marketing tools</h2>
                        <p class="text-dark">Our flagship product is membership to the online marketing tools. Marketingsolu
                            provides you with powerful email advances, CRM, and beautiful email templates.</p>
                        <a class="btn btn-primary btn-primary-hvr" href="{{ route('getSignin') }}">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->
    <!-- Content Section Start -->
    <div class="content-section-17">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-6 offset-xl-1 col-lg-6 col-md-9 col-11 order-lg-2" data-aos="fade-left"
                    data-aos-delay="500" data-aos-duration="1000">
                    <div class="content-section-17__image-group mb-mobile-lg">
                        <img src="/img/marketing/anh3.png" alt="content-img" class="mw-100">
                        <div class="content-section-17__image-group--shape-1 two-way-circle">
                            <img src="/img/home-8/content-round-shape.svg" class="w-100 make-it-inline"
                                alt="shape">
                        </div>
                        <div class="content-section-17__image-group--shape-2">
                            <img src="/img/home-8/content-1-shape-1.svg" class="w-100" alt="shape">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-9 col-11">
                    <div class="block-title content-section-17__content" data-aos="fade-up" data-aos-duration="800">
                        <h2 class="title">Start your perfect marketing plan with confidence.</h2>
                        <p class="text-dark">Personalized content to every subscriber. Fully customizable templates. Build
                            relationships that lead to conversions.</p>
                    </div>
                    <div class="row content-section-17__widget">
                        <div class="col-xl-12 col-lg-12 col-md-10 col-sm-6 col-xs-6 col-10 order-lg-1" data-aos="fade-up"
                            data-aos-duration="800">
                            <div class="widget widget-content widget-column-till-md">
                                <div class="widget-icon">
                                    <img src=/img/home-8/c-icon-2.svg alt="icon">
                                </div>
                                <div class="widget-text">
                                    <h3 class='widget-title'>Quality marketing tools</h3>
                                    <p class='widget-text'>Our strongest asset is the wide range of tools with the ability
                                        to meet the needs of our clients.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-10 col-sm-6 col-xs-6 col-10 order-lg-1" data-aos="fade-up"
                            data-aos-duration="800">
                            <div class="widget widget-content widget-column-till-md">
                                <div class="widget-icon">
                                    <img src=/img/home-8/c-icon-1.svg alt="icon">
                                </div>
                                <div class="widget-text">
                                    <h3 class='widget-title'>Highly professional experience</h3>
                                    <p class='widget-text'>Use our intelligent predictions to tighten your targeting
                                        strategy, strengthen customer relationships, and drive repeat sales.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-section-17__button" data-aos="fade-up" data-aos-duration="800">
                        <a class="btn btn-primary btn-primary-hvr" href="{{ route('getSignin') }}">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Section End -->
    <!-- Service Section Start -->
    <div class="service-section-02">
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h2 class="title">Marketingsolu also provides outstanding email marketing service</h2>
                    <p class="text-dark"> Powerful email marketing software with professional email templates, easy design
                        tools, and proven deliverability. </p>
                </div>
            </div>
            <div class="row justify-content-center justify-content-sm-start feature-widgets-row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-8" data-aos="fade-up" data-aos-delay="200"
                    data-aos-duration="1000">
                    <a href="#">
                        <div class="widget widget-column service-section-02__card">
                            <div class="widget-icon">
                                <img src=/img/home-8/s-icon-1.svg alt="icon">
                            </div>
                            <div class="widget-text">
                                <h3 class='widget-title'>Newsletters</h3>
                                <p class='widget-text'>Send one-time email broadcasts with updates and special offers.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-8" data-aos="fade-up" data-aos-delay="400"
                    data-aos-duration="1000">
                    <a href="#">
                        <div class="widget widget-column service-section-02__card">
                            <div class="widget-icon">
                                <img src=/img/home-8/s-icon-2.svg alt="icon">
                            </div>
                            <div class="widget-text">
                                <h3 class='widget-title'>Autoresponders:
                                </h3>
                                <p class='widget-text'>Create automated email sequences to follow up with and nurture your
                                    subscribers.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-8" data-aos="fade-up" data-aos-delay="600"
                    data-aos-duration="1000">
                    <a href="#">
                        <div class="widget widget-column service-section-02__card">
                            <div class="widget-icon">
                                <img src=/img/home-8/s-icon-3.svg alt="icon">
                            </div>
                            <div class="widget-text">
                                <h3 class='widget-title'>Automation emails
                                </h3>
                                <p class='widget-text'> Design and trigger action-based, automated emails to engage and
                                    sell.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-8" data-aos="fade-up" data-aos-delay="800"
                    data-aos-duration="1000">
                    <a href="#">
                        <div class="widget widget-column service-section-02__card">
                            <div class="widget-icon">
                                <img src=/img/home-8/s-icon-4.svg alt="icon">
                            </div>
                            <div class="widget-text">
                                <h3 class='widget-title'>Automated blog digest
                                </h3>
                                <p class='widget-text'>Increase your blog’s reach and share posts via email and on social
                                    media.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-8" data-aos="fade-up" data-aos-delay="1000"
                    data-aos-duration="1000">
                    <a href="#">
                        <div class="widget widget-column service-section-02__card">
                            <div class="widget-icon">
                                <img src=/img/home-8/s-icon-5.svg alt="icon">
                            </div>
                            <div class="widget-text">
                                <h3 class='widget-title'>Perfectly-timed emails
                                </h3>
                                <p class='widget-text'>Deliver emails at the right time with Perfect Timing and Time Travel
                                    delivery tools.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-8" data-aos="fade-up" data-aos-delay="1200"
                    data-aos-duration="1000">
                    <a href="#">
                        <div class="widget widget-column service-section-02__card">
                            <div class="widget-icon">
                                <img src=/img/home-8/s-icon-6.svg alt="icon">
                            </div>
                            <div class="widget-text">
                                <h3 class='widget-title'>Transactional emails</h3>
                                <p class='widget-text'>With this paid add-on, you can use SMTP triggered emails to send
                                    receipts or reminders.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Section End -->
    <!-- Brand Section End -->
    <!-- Fact Section Satart -->
    <!-- Fact Section End -->
    <!-- Content Section Start -->
    <div class="content-section-18">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-10 col-xs-10 col-sm-10" data-aos="fade-right" data-aos-delay="500"
                    data-aos-duration="1000">
                    <div class="content-section-18__image-group mb-mobile-lg">
                        <img src="/img/marketing/anh4.png" alt="content-image" class="mw-100">
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6 col-md-10 col-xs-10 col-sm-10">
                    <div class="block-title content-section-18__content" data-aos="fade-up" data-aos-duration="800">
                        <h2 class="title">Integrate top work tools for your marketing plan</h2>
                        <p class="text-dark">Marketingsolu gives you amazing tools to stay active on social—and everywhere
                            else.</p>
                        <ul class="content-section-18__content--list">
                            <li>
                                <img src="/img/home-8/check.svg" alt="check">
                                Repurpose your content
                            </li>
                            <li>
                                <img src="/img/home-8/check.svg" alt="check">
                                Reach more and more people
                            </li>
                            <li>
                                <img src="/img/home-8/check.svg" alt="check">
                                Get more insight on what works.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cta Section End -->
@endsection
