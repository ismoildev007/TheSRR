<?php


$lang = \Illuminate\Support\Facades\App::getLocale();$lang


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="/assets/images/thesrr.png">

    <title> Thesrr </title>

    <!-- animate.css-->
    <link href="/front/assets/vendor/animate.css-master/animate.min.css" rel="stylesheet">
    <!-- Load Screen -->
    <link href="/front/assets/vendor/loadscreen/css/spinkit.css" rel="stylesheet">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- Font Awesome 5 -->
    <link href="/front/assets/vendor/fontawesome/css/fontawesome-all.min.css" rel="stylesheet">
    <!-- Fables Icons -->
    <link href="/front/assets/custom/css/fables-icons.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="/front/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/front/assets/vendor/bootstrap/css/bootstrap-4-navbar.css" rel="stylesheet">
    <!-- portfolio filter gallery -->
    <link href="/front/assets/vendor/portfolio-filter-gallery/portfolio-filter-gallery.css" rel="stylesheet">
    <!-- FANCY BOX -->
    <link href="/front/assets/vendor/fancybox-master/jquery.fancybox.min.css" rel="stylesheet">
    <!-- RANGE SLIDER -->
    <link href="/front/assets/vendor/range-slider/range-slider.css" rel="stylesheet">
    <!-- OWL CAROUSEL  -->
    <link href="/front/assets/vendor/owlcarousel/owl.carousel.min.css" rel="stylesheet">
    <link href="/front/assets/vendor/owlcarousel/owl.theme.default.min.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS FILE -->
    <link href="/front/assets/custom/css/custom.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS RESPONSIVE FILE -->
    <link href="/front/assets/custom/css/custom-responsive.css" rel="stylesheet">

</head>


<body>

<div class="search-section">
    <a class="close-search" href="#"></a>
    <div class="d-flex justify-content-center align-items-center h-100">
        <form method="post" action="#" class="w-50">
            <div class="row">
                <div class="col-10">
                    <input type="search" value="" class="form-control palce bg-transparent border-0 search-input" placeholder="Search Here ..." />
                </div>
                <div class="col-2 mt-3">
                    <button type="submit" class="btn bg-transparent text-white"> <i class="fas fa-search"></i> </button>
                </div>
            </div>
        </form>
    </div>

</div>

<!-- Loading Screen -->
<div id="ju-loading-screen">
    <div class="sk-double-bounce">
        <div class="sk-child sk-double-bounce1"></div>
        <div class="sk-child sk-double-bounce2"></div>
    </div>
</div>


<!-- /End Top Header -->

<div class="fables-transparent py-3 py-lg-0">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 pr-md-0">
                <nav class="navbar navbar-expand-md btco-hover-menu py-lg-2">

                    <a class="navbar-brand fables-logo-brand pl-0" href="index.html"><img src="/assets/images/thesrr.png" style="width: 100px;" alt="Fables Template" class="fables-logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fablesNavDropdown" aria-controls="fablesNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fables-iconmenu-icon text-white font-16"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="fablesNavDropdown">

                        <ul class="navbar-nav mx-auto fables-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="/">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="/about">
                                    About Us
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="/service">
                                    Service
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="sub-nav5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Blog
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="sub-nav5">
                                    <li><a class="dropdown-item" href="blog-cat1.html">Blog Cat 1</a></li>
                                    <li><a class="dropdown-item" href="blog-cat2.html">Blog Cat 2</a></li>
                                    <li><a class="dropdown-item" href="blog-cat3.html">Blog Cat 3</a></li>
                                    <li><a class="dropdown-item" href="blog-cat-masonry.html">Blog Cat Masonry</a></li>
                                    <li><a class="dropdown-item" href="blog-details1.html">Blog Details 1</a></li>
                                    <li><a class="dropdown-item" href="blog-details2.html">Blog Details 2</a></li>
                                    <li><a class="dropdown-item" href="blog-details3.html">Blog Details 3</a></li>
                                    <li><a class="dropdown-item" href="blog-single-img.html">Blog Single image</a></li>
                                    <li><a class="dropdown-item" href="blog-single-slider.html">Blog Single Slider</a></li>
                                    <li><a class="dropdown-item" href="blog-single-video.html">Blog Single Video</a></li>
                                    <li><a class="dropdown-item" href="blog-timeLine.html">Blog Timeline</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="/contact">
                                    Contact
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{ route('portfolio') }}">
                                    Portfolio
                                </a>
                            </li>
                        </ul>

                    </div>
                </nav>
            </div>
            <div class="col-5 col-md-2 pr-md-0 icons-header-mobile">

                <div class="fables-header-icons pt-lg-4 text-right">

                    <div class="dropdown d-inline-block float-left float-md-none">
                        <a href="#_" class="fables-third-text-color dropdown-toggle px-4 fables-second-hover-color fables-mega-menu-btn position-relative" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @if($lang === 'en')<img src="/assets/images/flags/us.jpg" alt="user-image" class="me-0 me-sm-1" style="width: 35px;" height="18"> @endif
                            @if($lang === 'ru')<img src="/assets/images/flags/russia.jpg" alt="user-image" style="width: 35px;" class="me-0 me-sm-1" height="18"> @endif
                            @if($lang === 'uz')<img src="/assets/images/uzbek.svg" alt="user-image" class="me-0 me-sm-1" height="18"> @endif
                            <span class="fables-cart-number fables-second-background-color text-center">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">

                            <!-- item-->
                            <a href="/uz" class="dropdown-item">
                                <img src="/assets/images/uzbek.svg" alt="user-image" height="12"> <span class="align-middle">Uzbek</span>
                            </a>

                            <!-- item-->
                            <a href="/ru" class="dropdown-item">
                                <img src="/assets/images/flags/russia.jpg" style="width: 25px;" alt="user-image" height="14"> <span class="align-middle">Russian</span>
                            </a>

                            <!-- item-->
                            <a href="/en" class="dropdown-item">
                                <img src="/assets/images/flags/us.jpg" style="width: 25px;" alt="user-image" height="12"> <span class="align-middle">English</span>
                            </a>

                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
</div>



{{ $slot }}




<script src="/front/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="/front/assets/vendor/loadscreen/js/ju-loading-screen.js"></script>
<script src="/front/assets/vendor/jquery-circle-progress/circle-progress.min.js"></script>
<script src="/front/assets/vendor/popper/popper.min.js"></script>
<script src="/front/assets/vendor/jQuery.countdown-master/jquery.countdown.min.js"></script>
<script src="/front/assets/vendor/timeline/jquery.timelify.js"></script>
<script src="/front/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/front/assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
<script src="/front/assets/vendor/WOW-master/dist/wow.min.js"></script>
<script src="/front/assets/vendor/owlcarousel/owl.carousel.min.js"></script>
<script src="/front/assets/custom/js/jquery-data-to.js"></script>
<script src="/front/assets/vendor/jquery-circle-progress/circle.js"></script>
<script src="/front/assets/vendor/portfolio-filter-gallery/jquery.isotope.min.js"></script>
<script src="/front/assets/vendor/portfolio-filter-gallery/portfolio-filter-gallery.js"></script>
<script src="/front/assets/vendor/fancybox-master/jquery.fancybox.min.js"></script>
<script src="/front/assets/custom/js/custom.js"></script>


</body>
</html>