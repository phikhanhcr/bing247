@extends('layouts.app', ['header_mode' => 'bg-transparent'])

@section('main')
    <div class="site-wrapper overflow-hidden">
        <div class="breadcrumb-section">
            <div class="breadcrumb-section__bg-shape">
                <img src="/img/breadcrumb-shape.png" alt="breadcrumb-shape">
            </div>
            <div class="breadcrumb-section__shape-1 floating-Y-animation-reverse">
                <img src="/img/shape-1.svg" class="make-it-inline w-100" alt="breadcrumb-shape">
            </div>
            <div class="breadcrumb-section__shape-2 circle-animation">
                <img src="/img/shape-2.svg" class="make-it-inline w-100" alt="breadcrumb-shape">
            </div>
            <div class="breadcrumb-section__shape-3  floating-Y-animation-02">
                <img src="/img/shape-3.svg" class="make-it-inline w-100" alt="breadcrumb-shape">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-10 col-sm-11 col-xs-11">
                        <div class="breadcrumb-section__content hero-content text-center">
                            <h1 class="heading-dark title mb-20 text-dark">About Us</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item text-dark">Home</li>
                                    <li class="breadcrumb-item text-dark" aria-current="page">About us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="termscontent-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="termscontent-section__content">
                            <div class="termscontent-section__content--texts">
                                <div class="d-flex align-items-center justify-content-center flex-column">
                                    <h1 class="heading-dark title my-20">So how did Workoutnow come to be?
                                    </h1>
                                    <p class="text-dark text-start" style="font-size: 20px; margin: 10px 0 20px 0;">
                                        We want to help you build muscle and strength, improve your health, and feel better!

                                        At workoutnow.co, we are passionate about strength training, and we know that
                                        training is more enjoyable when it is done effectively. That is why we give you
                                        evidence-based information, methods, and programs, put into practice by our long
                                        training experience.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
