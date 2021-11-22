<!DOCTYPE html>
<html lang="en">
<body data-spy="scroll" data-target=".fixed-top">

<!-- Preloader -->
<div class="spinner-wrapper">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<!-- end of preloader -->


<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">

    <!-- Text Logo - Use this if you don't have a graphic logo -->
    <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Corso</a> -->

    <!-- Image Logo -->
    <a class="navbar-brand logo-image" href="{{route('site.home')}}">
        <img src="{{asset('layouts/images/logo.svg')}}" alt="alternative">
    </a>

    <!-- Mobile Menu Toggle Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-awesome fas fa-bars"></span>
        <span class="navbar-toggler-awesome fas fa-times"></span>
    </button>
    <!-- end of mobile menu toggle button -->

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#register">REGISTER <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#description">DETAILS</a>
            </li>

            <!-- Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle page-scroll" href="#date" id="navbarDropdown"
                   role="button" aria-haspopup="true" aria-expanded="false">DATE</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('site.article')}}"><span class="item-text">ARTICLE DETAILS</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('site.terms')}}"><span class="item-text">TERMS CONDITIONS</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('site.private')}}"><span class="item-text">PRIVACY POLICY</span></a>
                </div>
            </li>
            <!-- end of dropdown menu -->

            <li class="nav-item">
                <a class="nav-link page-scroll" href="#contact">CONTACT</a>
            </li>
        </ul>
        <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span>
    </div>
</nav> <!-- end of navbar -->
<!-- end of navigation -->


<!-- Header -->
<header id="header" class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-container">
                    <div class="countdown">
                        <span id="clock"></span>
                    </div>
                    <h1>SEO Training Course</h1>
                    <p class="p-large">Do you feel like you're doing a lot of guess work when it comes to SEO for your website? Take the SEO training course to change that</p>
                    <a class="btn-solid-lg page-scroll" href="#register">REGISTER</a>
                    <a class="btn-outline-lg page-scroll" href="#instructor">DISCOVER</a>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->

    <!-- Image Slider -->
    <div class="outer-container">
        <div class="slider-container">
            <div class="swiper-container image-slider-1">
                <div class="swiper-wrapper">

                    <!-- Slide -->
                    <div class="swiper-slide" >
                        <img class="img-fluid" src="{{asset('layouts/images/details-slide-1.jpg')}}" alt="alternative">
                    </div>
                    <!-- end of slide -->

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <img class="img-fluid" src="{{asset('layouts/images/details-slide-2.jpg')}}" alt="alternative">
                    </div>
                    <!-- end of slide -->

                    <!-- Slide -->
                    <div class="swiper-slide">
                        <img class="img-fluid" src="{{asset('layouts/images/details-slide-3.jpg')}}" alt="alternative">
                    </div>
                    <!-- end of slide -->

                </div> <!-- end of swiper-wrapper -->

                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <!-- end of add arrows -->

            </div> <!-- end of swiper-container -->
        </div> <!-- end of slider-container -->
    </div> <!-- end of outer-container -->
    <!-- end of image slider -->

</header> <!-- end of header -->
<!-- end of header -->

@yield('content')

<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="footer-col first">
                    <h5>About Corso</h5>
                    <p class="p-small">We're passionate about teaching people how to do better SEO for their online presence</p>
                </div>
            </div> <!-- end of col -->
            <div class="col-md-3">
                <div class="footer-col second">
                    <h5>Links</h5>
                    <ul class="list-unstyled li-space-lg p-small">
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body"><a href="{{route('site.terms')}}">Terms & Conditions</a></div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body"><a href="{{route('site.private')}}">Privacy Policy</a></div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body"><a href="{{route('site.article')}}">Article Details</a></div>
                        </li>
                    </ul>
                </div>
            </div> <!-- end of col -->
            <div class="col-md-3">
                <div class="footer-col third">
                    <h5>Links</h5>
                    <ul class="list-unstyled li-space-lg p-small">
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body"><a href="{{route('site.article')}}">Article Details</a></div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body"><a href="{{route('site.terms')}}">Terms & Conditions</a></div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body"><a href="{{route('site.private')}}">Privacy Policy</a></div>
                        </li>
                    </ul>
                </div>
            </div> <!-- end of col -->
            <div class="col-md-3">
                <div class="footer-col fourth">
                    <h5>Social Media</h5>
                    <p class="p-small">For news & updates follow us</p>
                    <a href="#your-link">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#your-link">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#your-link">
                        <i class="fab fa-pinterest-p"></i>
                    </a>
                    <a href="#your-link">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#your-link">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#your-link">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of footer -->
<!-- end of footer -->


<!-- Copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="p-small">Copyright © 2020 <a href="https://inovatik.com">Inovatik</a> - All rights reserved</p>
            </div> <!-- end of col -->
        </div> <!-- enf of row -->
    </div> <!-- end of container -->
</div> <!-- end of copyright -->
<!-- end of copyright -->

</body>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Landing page template built with HTML and Bootstrap 4 for
    presenting training courses, classes, workshops and for convincing visitors to register using the form.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Corso - Training Course Landing Page Template</title>

    {{--
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,700,700i&display=swap" rel="stylesheet">
    --}}

        <link rel="stylesheet" href="{{asset('layouts/css/googleapis.css')}}">



    <link href="{{asset('layouts/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('layouts/css/fontawesome-all.css')}}" rel="stylesheet">
    <link href="{{asset('layouts/css/swiper.css')}}" rel="stylesheet">
    <link href="{{asset('layouts/css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('layouts/css/styles.css')}}" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('layouts/images/favicon.png')}}">
</head>

<!-- Scripts -->
<script src="{{asset('layouts/js/jquery.min.js')}}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
<script src="{{asset('layouts/js/popper.min.js')}}"></script> <!-- Popper tooltip library for Bootstrap -->
<script src="{{asset('layouts/js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
<script src="{{asset('layouts/js/jquery.easing.min.js')}}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
<script src="{{asset('layouts/js/jquery.countdown.min.js')}}"></script> <!-- The Final Countdown plugin for jQuery -->
<script src="{{asset('layouts/js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
<script src="{{asset('layouts/js/jquery.magnific-popup.js')}}"></script> <!-- Magnific Popup for lightboxes -->
<script src="{{asset('layouts/js/validator.min.js')}}"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
<script src="{{asset('layouts/js/scripts.js')}}"></script> <!-- Custom scripts -->
</html>
