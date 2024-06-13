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


    <!-- Start Breadcrumbs -->
    <div class="fables-light-background-color">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="fables-breadcrumb breadcrumb px-0 py-3">
                    <li class="breadcrumb-item"><a href="/" class="fables-second-text-color">{{ __('app.home') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('app.blog') }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- /End Breadcrumbs -->

    <!-- Start page content -->
    <div class="container">
        <div class="row mt-4 mt-lg-5">
            @foreach($blogs as $blog)
                <div class="col-12 col-sm-6 col-md-4 mb-4 mb-lg-5">
                    <div class="image-container zoomOut-effect">
                        <a href="{{ route('singleBlog', ['blog' => $blog->id]) }}"><img src="{{ asset('storage/' . $blog->image) }}" alt="" class="w-100"></a>
                    </div>

                    <h2 class="font-18 semi-font mt-3 mb-2"><a href="#" class="fables-main-text-color fables-second-hover-color">{{ $blog['title_' . $lang] }}</a></h2>
                    <div class="fables-forth-text-color font-14 mb-2">
                        <span class="fables-icondata fables-second-text-color mr-1"></span>
                        <span class="mr-3"> {{ $blog->date }} </span>
                    </div>
                    <p class="fables-forth-text-color font-14 mb-3">
                       {!! $blog['text_' . $lang] !!}
                    </p>
                    <a href="{{ route('singleBlog', ['blog' => $blog->id]) }}" class="btn fables-main-text-color fables-second-hover-color font-14 p-0 underline">Read More</a>

                </div>
            @endforeach
        </div>
    </div>
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