<?php

$lang = \Illuminate\Support\Facades\App::getLocale();

?>


<x-layouts.main>

    <!-- Start Header -->
    <div class="fables-header fables-after-overlay overlay-lighter index-traingle bg-rules" style="background-image: url('/assets/images/tashTh.png');">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-7 mr-auto index-carousel">
                    <div class="owl-carousel owl-theme default-carousel nav-0 z-index mt-md-4 mt-xl-5 pt-md-4 pt-xl-5 dots-0 pb-md-5">
                        <div class="pt-0 mt-0 pt-xl-5 mt-xl-5 wow slideInUp" data-wow-duration="2s" data-wow-delay=".4s">
                            <h1 class="fables-main-text-color font-weight-bold mb-1">{{ __('app.Business') }}
                                <span class="fables-second-text-color">{{ __('app.Business_sir') }}</span>
                            </h1>
                            <a href="/service" class="btn fables-second-background-color fables-second-border-color white-color rounded-0 mr-4 px-3 px-md-4 py-2 bg-hover-transparent fables-second-hover-color">{{ __('app.our_service') }}</a>
                        </div>
                        <div class="pt-0 mt-0 pt-xl-5 mt-xl-5 wow slideInUp" data-wow-duration="2s" data-wow-delay=".8s">
                            <h1 class="fables-main-text-color font-weight-bold mb-1">{{ __('app.Business') }}
                                <span class="fables-second-text-color">{{ __('app.Business_sir') }}</span>
                            </h1>
                            <a href="/service" class="btn fables-second-background-color fables-second-border-color white-color rounded-0 mr-4 px-3 px-md-4 py-2 bg-hover-transparent fables-second-hover-color">{{ __('app.our_service') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /End Header -->
    <!-- Start page content -->
    <div class="container">
        <div class="row my-3 my-md-5 overflow-hidden">
            <div class="col-12 col-sm-6 col-lg-4 text-center mb-4 mb-lg-0 wow fadeInDown" data-wow-delay=".4s" data-wow-duration="1.5s">
                <span class="fables-iconbussiness fables-second-text-color fa-3x"></span>
                <h2 class="fables-main-text-color font-18 my-2">10 +</h2>
                <p class="fables-forth-text-color font-15">
                    {{ __('app.opit') }}
                </p>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 text-center mb-4 mb-lg-0 wow fadeInDown" data-wow-delay=".8s" data-wow-duration="1.5s">
                <span class="fables-iconbussiness2 fables-second-text-color fa-3x"></span>
                <h2 class="fables-main-text-color font-18 my-2">50 +</h2>
                <p class="fables-forth-text-color font-15">
                    {{ __('app.spets') }}
                </p>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 text-center mb-4 mb-lg-0 wow fadeInDown" data-wow-delay="1.2s" data-wow-duration="1.5s">
                <span class="fables-iconbussiness3 fables-second-text-color fa-3x"></span>
                <h2 class="fables-main-text-color font-18 my-2">4000 +</h2>
                <p class="fables-forth-text-color font-15">
                    {{ __('app.project') }}
                </p>
            </div>
        </div>

    </div>
    <div class="fables-choose-background fables-after-overlay py-4 py-md-5 bg-rules overflow-hidden px-3 px-md-0">
        <div class="container position-relative z-index">
            <div class="row">
                <div class="col-12 col-lg-6 p-0 image-container translate-effect-right wow fadeInLeft mb-3 mb-md-0" data-wow-delay="1s" data-wow-duration="1.5s">
                    <img src="/assets/images/cardTh.png" alt="" class="w-100">
                </div>
                <div class="col-12 col-lg-6 bg-white px-6 py-3 py-md-5 wow fadeInRight" data-wow-delay="1s" data-wow-duration="1.5s">
                    <h2 class="font-30 font-weight-bold fables-second-text-color">{{ __('app.prinsip') }}</h2>
                    <p class="fables-main-text-color font-14 my-3">
                        {{ __('app.prinsip_job') }}
                    </p>
                    <div id="accordion">
                        <div class="card border-0 mb-2">
                            <div class="card-header p-0 border bg-transparent rounded-0" id="headingOne">
                                <h5 class="mb-0 position-relative">
                                <span class="fables-second-background-color white-color d-inline-block position-absolute fables-lus-icon pt-2 text-center">
                                    <i class="fas fa-plus"></i>
                                </span>
                                    <button class="btn fables-main-text-color bg-transparent font-18 focus-0 d-block position-relative z-index pl-6 pt-2 pb-2 w-100 text-left border-0 text-truncate" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        {{ __('app.prinsip1') }}
                                    </button>
                                </h5>
                            </div>
                        </div>
                        <div class="card border-0 mb-2">
                            <div class="card-header bg-transparent p-0 border rounded-0" id="headingTwo">
                                <h5 class="mb-0 position-relative">
                                <span class="fables-second-background-color white-color d-inline-block position-absolute fables-lus-icon pt-2 text-center">
                                    <i class="fas fa-plus"></i>
                                </span>
                                    <button class="btn fables-main-text-color bg-transparent font-18 focus-0 d-block position-relative z-index pl-6 pt-2 pb-2 w-100 text-left border-0 text-truncate collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        {{ __('app.prinsip2') }}
                                    </button>
                                </h5>
                            </div>
                        </div>
                        <div class="card border-0 mb-2">
                            <div class="card-header p-0 border bg-transparent rounded-0" id="headingThree">
                                <h5 class="mb-0 position-relative">
                                <span class="fables-second-background-color white-color d-inline-block position-absolute fables-lus-icon pt-2 text-center">
                                    <i class="fas fa-plus"></i>
                                </span>
                                    <button class="btn fables-main-text-color bg-transparent font-18 focus-0 d-block position-relative z-index pl-6 pt-2 pb-2 w-100 text-left border-0 text-truncate collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        {{ __('app.prinsip3') }}
                                    </button>
                                </h5>
                            </div>
                        </div>
                        <div class="card border-0 mb-2">
                            <div class="card-header p-0 border bg-transparent rounded-0" id="headingfour">
                                <h5 class="mb-0 position-relative">
                                <span class="fables-second-background-color white-color d-inline-block position-absolute fables-lus-icon pt-2 text-center">
                                    <i class="fas fa-plus"></i>
                                </span>
                                    <button class="btn fables-main-text-color bg-transparent font-18 focus-0 d-block position-relative z-index pl-6 pt-2 pb-2 w-100 text-left border-0 text-truncate collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                        {{ __('app.prinsip4') }}
                                    </button>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- ======= Faq ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container">

            <div class="section-title">
                <h2>{{ __('app.question') }}</h2>

            </div>

            <div class="faq-list">
                <ul>
                    @foreach($questions as $key => $question)
                        <li data-aos="fade-up">
                            <i class="bx bx-help-circle icon-help"></i>
                            <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-{{ $key }}">
                                {{ $question['title_' . $lang] }}
                                <i class="bx bx-chevron-down icon-show"></i>
                                <i class="bx bx-chevron-up icon-close"></i>
                            </a>
                            <div id="faq-list-{{ $key }}" class="collapse {{ $key == 0 ? 'show' : '' }}" data-bs-parent=".faq-list">
                                <p>{!! $question['description_' . $lang] !!}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </section>
    <!-- End Frequently Asked Questions Section -->
    {{--    Portfolio--}}
    <div class="container mb-4 mb-md-5">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <div class="text-center">
                    <h2 class="fables-main-text-color font-35 font-weight-bold mb-3 mt-3">{{ __('app.portfolio') }}</h2>
                </div>
            </div>
        </div>

        <div class="gallery-filter">
{{--            <div class="portfolioFilter my-3 clearfix">--}}
{{--                <a href="#" data-filter="*" class="current">ALL</a>--}}
{{--                <a href="#" data-filter=".1" class="fables-forth-text-color">Service 1</a>--}}
{{--                <a href="#" data-filter=".2" class="fables-forth-text-color">Service 2</a>--}}
{{--                <a href="#" data-filter=".3" class="fables-forth-text-color">Service 3</a>--}}
{{--                <a href="#" data-filter=".4" class="fables-forth-text-color">Service 4</a>--}}
{{--            </div>--}}
            <div class="portfolioContainer row filter-masonry">

                @foreach($portfolios as $port)
                    <div class="{{ $port->portfolio_id }} food col-sm-6 col-md-3 mb-2">
                        <div class="filter-img-block position-relative image-container translate-effect-right">
                            <img src="{{ asset('storage/' . $port->image) }}" alt="image" class="w-100">
                            <div class="img-filter-overlay fables-main-color-transparent row m-0">
                                <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                                <a data-fancybox="gallery" href="{{ asset('storage/' . $port->image) }}" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <div class="text-center">
                <a href="/portfolio" class="btn fables-main-border-color fables-main-text-color mt-md-4 px-5 py-2 fables-btn-rounded fables-main-hover-background-color white-color-hover">{{ __('app.show') }}</a>
            </div>
        </div>
    </div>
    {{--    Portfolio end--}}
    <div class="fables-testimonial fables-after-overlay py-5 bg-rules">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="fables-contact-caption-txt">
                        <h3 class="font-25 font-weight-bold white-color mb-3 position-relative z-index">{{ __('app.consulting') }}</h3>
                        <p class="fables-third-text-color position-relative z-index font-weight-light">{{ __('app.contact_us') }}</p>

                    </div>
                </div>
                <div class="col-12 col-md-4 offset-xl-2 col-xl-2 text-center">
                    <a href="/contact" class="btn fables-second-background-color fables-btn-rounded white-color mt-3 position-relative z-index font-19 px-5 py-2 white-color-hover">{{ __('app.contact') }}</a>
                </div>
            </div>

        </div>
    </div>
    {{--    News Blog elementlari start --}}
    <div class="container">
        <div class="row overflow-hidden">
            <div class="col-12">
                <h2 class="font-35 font-weight-bold text-center fables-main-text-color my-4 my-lg-5">{{ __('app.news') }}</h2>
            </div>
           @foreach($blogs as $blog)
                <div class="col-12 col-md-4 mb-4 mb-lg-5 wow bounceInLeft" data-wow-delay=".4s" data-wow-duration="1.5s">
                    <div class="image-container translate-effect-right">
                        <a href="#"><img src="{{ asset('storage/' . $blog->image) }}" alt=""></a>
                    </div>
                    <h2 class="font-18 semi-font font-18  mt-3"><a href="#" class="fables-main-text-color fables-second-hover-color">{{ $blog['title_' . $lang] }}</a></h2>
                    <p class="fables-fifth-text-color font-13 my-1">{{ $blog->date }}</p>
                    <p class="fables-forth-text-color font-14">
                        {!! $blog['text_' . $lang] !!}
                    </p>
                    <a href="/blog" class="btn fables-main-text-color fables-second-hover-color p-0 underline mt-2">{{ __('app.show') }}</a>

                </div>
           @endforeach
        </div>
    </div>
    {{--    News Blog elementlari end--}}
    {{--    klientlar commentariyasi start--}}
    <div class="fables-testimonial fables-after-overlay py-4 py-lg-5 bg-rules">
        <div class="container">
            <h2 class="position-relative z-index white-color font-35 font-weight-bold text-center mb-4">{{ __('app.commit') }}</h2>
            <div class="owl-carousel owl-theme" id="fables-testimonial-carousel">
                @foreach($commits as $commit)
                    <div class="row text-center fables-testimonial-carousel-item rounded py-4">
                        <div class="col-12 col-md-3">
                            <img src="{{ asset('storage/' . $commit->image) }}" alt="Fables Template" class="fables-testimonial-carousel-img">
                            <h3 class="font-14 semi-font text-white">{{ $commit->name }}</h3>
                        </div>
                        <div class="col-12 col-md-9 p-0 p-md-2">
                            <div class="fables-testimonial-detail font-15 font-italic text-white p-4 position-relative">
                                {!! $commit['description_' . $lang] !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{--    klientlar commentariyasi end--}}

    <!-- /End page content -->

    <!-- Start Footer 2 Background Image  -->
    <div class="fables-footer-image fables-after-overlay white-color py-4 py-lg-5 bg-rules">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 mt-2 mb-5 text-center">
                    <h2 class="font-30 semi-font mb-5">{{ __('app.newsLetter') }}</h2>
                    <form class="form-inline position-relative">
                        <div class="form-group fables-subscribe-formgroup">
                            <input type="email" class="form-control fables-subscribe-input fables-btn-rouned" placeholder="Your Email">
                        </div>
                        <button type="submit" class="btn fables-second-background-color fables-btn-rouned fables-subscribe-btn">Subscribe</button>
                    </form>

                </div>
                <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                    <a href="#" class="fables-second-border-color border-bottom pb-3 d-block mb-3 mt-minus-13"><img src="/front/tash.png" alt="fables template" style="width: 105px;"></a>
                    <p class="font-15 fables-third-text-color">
                        {{ __('app.footer_text') }}
                    </p>

                </div>

                @foreach($contacts as $contact)
                    <div class="col-12 col-sm-6 col-lg-4">
                        <h2 class="font-20 semi-font fables-second-border-color border-bottom pb-3">{{ __('app.contact') }}</h2>
                        <div class="my-3">
                            <h4 class="font-16 semi-font"><span class="fables-iconmap-icon fables-second-text-color pr-2 font-20 mt-1 d-inline-block"></span>{{ __('app.address') }}</h4>
                            <p class="font-14 fables-fifth-text-color mt-2 ml-4">{{ $contact->address }}</p>
                        </div>
                        <div class="my-3">
                            <h4 class="font-16 semi-font"><span class="fables-iconphone fables-second-text-color pr-2 font-20 mt-1 d-inline-block"></span>
                                @if($lang === 'en') Call Now @endif
                                @if($lang === 'uz') Hozir qo'ng'iroq qiling @endif
                                @if($lang === 'ru') Позвони сейчас @endif
                            </h4>
                            <p class="font-14 fables-fifth-text-color mt-2 ml-4">{{ $contact->number }}</p>
                        </div>
                        <div class="my-3">
                            <h4 class="font-16 semi-font"><span class="fables-iconemail fables-second-text-color pr-2 font-20 mt-1 d-inline-block"></span> Mail </h4>
                            <p class="font-14 fables-fifth-text-color mt-2 ml-4">{{ $contact->email }}</p>
                        </div>
                    </div>
                @endforeach
                <div class="col-12 col-sm-6 col-lg-4">
                    <h2 class="font-20 semi-font fables-second-border-color border-bottom pb-3 mb-3">EXPLORE OUR SITE</h2>
                    <ul class="nav fables-footer-links">
                        <li><a href="/about">{{ __('app.about') }}</a></li>
                        <li><a href="/contact">{{ __('app.contact') }}</a></li>
                        <li><a href="/portfolio">{{ __('app.portfolio') }}</a></li>
                        <li><a href="/blog">{{ __('app.blog') }}</a></li>
                        <li><a href="/service">{{ __('app.service') }}</a></li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
    @foreach($internation as $internet)
        <div class="copyright fables-main-background-color mt-0 border-0 white-color">
            <ul class="nav fables-footer-social-links just-center fables-light-footer-links">
                <li><a href="{{ $internet->telegram }}" target="_blank"><i class="fab fa-telegram"></i></a></li>
                <li><a href="{{ $internet->facebook }}" target="_blank"><i class="fab fa-facebook"></i></a></li>
                <li><a href="{{ $internet->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="{{ $internet->linkedin }}" target="_blank"><i class="fab fa-linkedin"></i></a></li>
            </ul>
            <p class="mb-0">Copyright © THE SRR 2018. All rights reserved.</p>

        </div>
    @endforeach
    <!-- /End Footer 2 Background Image -->
</x-layouts.main>