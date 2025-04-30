<!doctype html>
<html class="no-js" lang="zxx">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title> @yield('title') | {{$config->company_name}} </title>
    <meta name="title" content="@yield('title')" />
    <meta name="description" content="@yield('description')" />
    <meta name="image" content="@yield('image')" />
    <meta name="url" content="@yield('url')" />
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{$config->logo}}" />
    {{--
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/')}}frontend/img/favicon.png" /> --}}
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('/')}}frontend/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{asset('/')}}frontend/css/animate.min.css" />
    <link rel="stylesheet" href="{{asset('/')}}frontend/css/magnific-popup.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/futura-std-4.css" />
    <link rel="stylesheet" href="{{asset('/')}}frontend/css/slick.css" />
    <link rel="stylesheet" href="{{asset('/')}}frontend/css/style.css" />

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <script src="https://unpkg.com/cart-localstorage@1.1.4/dist/cart-localstorage.min.js"
        type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>


<body>


    <main class="main_wrapper body__overlay overflow__hidden">

        <!-- header__topbar__start -->
        <div class="header__topbar desktop__menu__wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7">
                        <div class="header__topbar__left">
                            <ul>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewbox="0 0 512 512">
                                        <rect x="48" y="96" width="416" height="320" rx="40" ry="40" fill="none"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="32"></rect>
                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="32" d="M112 160l144 112 144-112">
                                        </path>
                                    </svg>{{$config->email}}
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewbox="0 0 512 512">
                                        <path
                                            d="M256 48c-79.5 0-144 61.39-144 137 0 87 96 224.87 131.25 272.49a15.77 15.77 0 0025.5 0C304 409.89 400 272.07 400 185c0-75.61-64.5-137-144-137z"
                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="32"></path>
                                        <circle cx="256" cy="192" r="48" fill="none" stroke="currentColor"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></circle>
                                    </svg>{{$config->phone}}
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="header__topbar__right">

                            {{-- <div class="header__topbar__language__wraper">
                                <div class="header__topbar__language">
                                    English <i class="fa fa-angle-down"></i>
                                    <div class="header__topbar__language__inner">
                                        <ul>
                                            <li class="active">
                                                <a href="#"> English
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Espanol

                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"> Português (portugal) </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div> --}}

                            <div class="header__topbar__social__icon">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-tiktok"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header__topbar__end -->


        <!-- header section start -->
        <header>
            <div class="headerarea header__sticky">
                <div class="container desktop__menu__wrapper">
                    <div class="row common__row position-relative">
                        <div class="col-xl-2 col-lg-2 col-md-6">
                            <div class="headerarea__logo">
                                <a href="{{url('/')}}"><img style="height: 66px" src="{{$config->logo}}" alt="" /></a>
                            </div>
                        </div>


                        <div class="col-xl-7 col-lg-7 col-md-6 main_menu_wrap">

                            <div class="headerarea__main__menu ">
                                <nav>
                                    <ul>
                                        <li><a href='{{url('/')}}'>Home</a></li>

                                        <li class="position-static">
                                            <a class='headerarea__has__dropdown' href='#'>Categories</a>

                                            <ul class="headerarea__submenu headerarea__megamenu">
                                                @foreach ($categories as $category)
                                                    <li class="mega__menu__li mega__menu__image">
                                                        <a class='menu__title'
                                                            href='{{route('category', $category['slug'])}}'>{{$category['name']}}
                                                        </a>
                                                        <ul>

                                                            <li>
                                                                <a href='{{route('category', $category['slug'])}}'>
                                                                    <img class="img-fluid" src="{{ $category['image'] }}"
                                                                        alt="Collection" />
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                @endforeach



                                            </ul>
                                            {{-- @endforeach --}}

                                        </li>

                                        <li><a href='/'>Shop By Brand </a> </li>
                                        <li><a href='{{ route('trackOrder') }}'>Track Order </a> </li>

                                        <li><a href='{{ route('contact') }}'>Contact Us </a> </li>

                                      
                                    </ul>
                                </nav>
                            </div>

                        </div>


                        <div class="col-xl-3 col-lg-3 col-md-6">

                            <div class="headerarea__right">

                                <ul class="headerarea__right__nav">
                                    
                                    <li>
                                        <div class="headerarea__search cursor__pointer">

                                            <svg role="presentation" stroke-width="2" focusable="false" width="22"
                                                height="22" class="icon icon-search" viewbox="0 0 22 22">
                                                <circle cx="11" cy="10" r="7" fill="none" stroke="currentColor">
                                                </circle>
                                                <path d="m16 15 3 3" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>


                                        </div>
                                    </li>


                                    {{-- <li>
                                        <div class="setting__wrap cursor__pointer">
                                            <div class="setting__wrap__active">

                                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon"
                                                    viewbox="0 0 512 512">
                                                    <path
                                                        d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z"
                                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="32"></path>
                                                    <path
                                                        d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z"
                                                        fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                        stroke-width="32"></path>
                                                </svg>

                                            </div>
                                        </div>
                                    </li> --}}

                                    <li>
                                        <div class="headermiddle__bar cursor__pointer">
                                            <div class="headermiddle__account">
                                                <div class="headermiddle__account__img">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon"
                                                        viewbox="0 0 512 512">
                                                        <circle cx="176" cy="416" r="16" fill="none"
                                                            stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="32"></circle>
                                                        <circle cx="400" cy="416" r="16" fill="none"
                                                            stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="32"></circle>
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="32"
                                                            d="M48 80h64l48 272h256"></path>
                                                        <path
                                                            d="M160 288h249.44a8 8 0 007.85-6.43l28.8-144a8 8 0 00-7.85-9.57H128"
                                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="32"></path>
                                                    </svg>
                                                    <span class=" bigcounter cart-count">0 </span>

                                                </div>

                                            </div>
                                        </div>


                                    </li>



                                </ul>

                            </div>

                        </div>

                    </div>


                </div>
            </div>

            <div class="container-fluid mob_menu_wrapper headerarea header__sticky">
                <div class="row align-items-center">
                    <div class="col-sm-4 col-2">
                        <div class="mobile-off-canvas">
                            <a class="mobile-aside-button" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-menu">
                                    <line x1="3" y1="12" x2="21" y2="12"></line>
                                    <line x1="3" y1="6" x2="21" y2="6"></line>
                                    <line x1="3" y1="18" x2="21" y2="18"></line>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-5">
                        <div class="mobile-logo">
                            <a class="logo__mobile" href="#"><img src="{{asset('/')}}frontend/img/logo/logo__1.png"
                                    alt="logo" /></a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-5">
                        <div class="header-right-wrap">


                            <div class="header__right__inner__wrap d-flex align-items-center justify-content-end">

                                <ul class="headerarea__right headerarea__right__mobail__menu">
                                    <li>
                                        <div class="headerarea__search cursor__pointer">

                                            <svg role="presentation" stroke-width="2" focusable="false" width="22"
                                                height="22" class="icon icon-search" viewbox="0 0 22 22">
                                                <circle cx="11" cy="10" r="7" fill="none" stroke="currentColor">
                                                </circle>
                                                <path d="m16 15 3 3" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>


                                        </div>
                                    </li>

                                    <li>
                                        <div class="setting__wrap cursor__pointer">
                                            <div class="setting__wrap__active">

                                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon"
                                                    viewbox="0 0 512 512">
                                                    <path
                                                        d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z"
                                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="32"></path>
                                                    <path
                                                        d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z"
                                                        fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                        stroke-width="32"></path>
                                                </svg>

                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="headermiddle__bar cursor__pointer">
                                            <div class="headermiddle__account">
                                                <div class="headermiddle__account__img">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon"
                                                        viewbox="0 0 512 512">
                                                        <circle cx="176" cy="416" r="16" fill="none"
                                                            stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="32"></circle>
                                                        <circle cx="400" cy="416" r="16" fill="none"
                                                            stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="32"></circle>
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="32"
                                                            d="M48 80h64l48 272h256"></path>
                                                        <path
                                                            d="M160 288h249.44a8 8 0 007.85-6.43l28.8-144a8 8 0 00-7.85-9.57H128"
                                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="32"></path>
                                                    </svg>
                                                    <span class=" bigcounter cart-count">0 </span>

                                                </div>

                                            </div>
                                        </div>


                                    </li>

                                </ul>

                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <!-- Mobile Menu Start Here -->
            <div class="mobile-off-canvas-active">
                <a class="mobile-aside-close"><i class="fa fa-close"></i></a>
                <div class="header-mobile-aside-wrap">

                    <div class="mobile__logo">
                        <a href='index.html'>
                            <img src="{{asset('/')}}frontend/img/logo/logo__1.png" alt="Logo" />
                        </a>
                    </div>

                    <div class="mobile-search">
                        <form class="search-form" action="#">
                            <input type="text" placeholder="Search entire store…" />
                            <button class="button-search"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="mobile-menu-wrap">

                        <div class="mobile-navigation">

                            <nav>
                                <ul class="mobile-menu">
                                    <li class="menu-item-has-children"><a href='{{url('/')}}'>Home </a>
                                   
                                    </li>

                                    <li class="menu-item-has-children"><a href='#'>Category </a></li>

                                    <li class="menu-item-has-children"><a href='categories.html'>Categories </a>
                                        <ul class="dropdown">

                                            <li class="menu-item-has-children">
                                                <a class='menu__title' href='categories.html'>Featured Product </a>
                                                <ul class="dropdown">
                                                    <li>
                                                        <a href='categories.html'>
                                                            <img class="img-fluid"
                                                                src="{{asset('/')}}frontend/img/collection/collection__1.png"
                                                                alt="Collection" />
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="menu-item-has-children">
                                                <a class='menu__title' href='categories.html'>New Arrivals </a>
                                                <ul class="dropdown">
                                                    <li>
                                                        <a href='categories.html'>
                                                            <img class="img-fluid"
                                                                src="{{asset('/')}}frontend/img/collection/collection__2.png"
                                                                alt="Collection" />
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="menu-item-has-children">
                                                <a class='menu__title' href='categories.html'>Summer Styles </a>
                                                <ul class="dropdown">
                                                    <li>
                                                        <a href='categories.html'>
                                                            <img class="img-fluid"
                                                                src="{{asset('/')}}frontend/img/collection/collection__3.png"
                                                                alt="Collection" />
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="menu-item-has-children">
                                                <a class='menu__title' href='categories.html'>Winter Fashion </a>
                                                <ul class="dropdown">
                                                    <li>
                                                        <a href='categories.html'>
                                                            <img class="img-fluid"
                                                                src="{{asset('/')}}frontend/img/collection/collection__4.png"
                                                                alt="Collection" />
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="menu-item-has-children">
                                                <a class='menu__title' href='categories.html'>Accessories </a>
                                                <ul class="dropdown">
                                                    <li>
                                                        <a href='categories.html'>
                                                            <img class="img-fluid"
                                                                src="{{asset('/')}}frontend/img/collection/collection__5.png"
                                                                alt="Collection" />
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="menu-item-has-children">
                                                <a class='menu__title' href='categories.html'>Footwear </a>
                                                <ul class="dropdown">
                                                    <li>
                                                        <a href='categories.html'>
                                                            <img class="img-fluid"
                                                                src="{{asset('/')}}frontend/img/collection/collection__6.png"
                                                                alt="Collection" />
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="menu-item-has-children">
                                                <a class='menu__title' href='categories.html'>Men </a>
                                                <ul class="dropdown">
                                                    <li>
                                                        <a href='categories.html'>
                                                            <img class="img-fluid"
                                                                src="{{asset('/')}}frontend/img/collection/collection__7.png"
                                                                alt="Collection" />
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="menu-item-has-children">
                                                <a class='menu__title' href='categories.html'>Women </a>
                                                <ul class="dropdown">
                                                    <li>
                                                        <a href='categories.html'>
                                                            <img class="img-fluid"
                                                                src="{{asset('/')}}frontend/img/collection/collection__8.png"
                                                                alt="Collection" />
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>


                                        </ul>
                                    </li>


                                    <li><a href='{{ route('trackOrder') }}'>Track Order </a> </li>

                                    <li><a href='{{ route('contact') }}'>Contact Us </a> </li>

                                </ul>
                            </nav>

                        </div>


                    </div>
                    <div class="mobile-curr-lang-wrap">
                        <div class="single-mobile-curr-lang">
                            <a class="mobile-language-active" href="#">Language <i class="fa fa-angle-down"></i></a>
                            <div class="lang-curr-dropdown lang-dropdown-active">
                                <ul>
                                    <li><a href="#">English (US) </a></li>
                                    <li><a href="#">English (UK) </a></li>
                                    <li><a href="#">Spanish </a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="single-mobile-curr-lang">
                            <a class="mobile-account-active" href="#">My Account <i class="fa fa-angle-down"></i></a>
                            <div class="lang-curr-dropdown account-dropdown-active">
                                <ul>
                                    <li><a href='login.html'>Login </a></li>
                                    <li><a href='register.html'>Creat Account </a></li>
                                    <li><a href="#">My Account </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-social-wrap">
                        <a class="facebook" href="#"><i class="fab fa-facebook"></i></a>
                        <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="pinterest" href="#"><i class="fab fa-pinterest"></i></a>
                        <a class="instagram" href="#"><i class="fab fa-instagram"></i></a>
                        <a class="google" href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end Here -->

            <!-- setting__wrap__list__start -->
            <div class="setting__wrap__list">
                <button class="setting__wrap__close">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewbox="0 0 512 512">
                        <title>Close </title>
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="32" d="M368 368L144 144M368 144L144 368"></path>
                    </svg></button>

                <div class="setting__wrap__heading">
                    <h6>
                        <a href="#">Account </a>
                    </h6>
                </div>
                <div class="setting__wrap__list__inner">
                    <ul>
                        <li>
                            <a href='login.html'>Login </a>
                        </li>
                        <li>
                            <a href='cart.html'>Cart </a>
                        </li>
                        <li>
                            <a href='wishlist.html'>Wishlist </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- setting__wrap__list__end -->

            <!-- header__search -->
            <div class="headersearch__active">
                <div class="headersearch__active__icon">
                    <button class="headersearch__active__close">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewbox="0 0 512 512">
                            <title>Close </title>
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="32" d="M368 368L144 144M368 144L144 368"></path>
                        </svg></button>
                </div>
                <div class="headersearch__active__input">
                    <form action="/search" method="get" role="search" style="position: relative;">
                        <div class="header__form__search">
                            <input type="search" name="q" value="" placeholder="Search our store" class="input-text"
                                autocomplete="off" />
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- header__search -->

            <!-- minicart__section__start -->
            <section class="minicart">
                <div class="minicart__inner">
                    <div class="minicart__wrapper">
                        <div class="minicart__close__icon">
                            <div class="minicart__cart__text ">
                                <strong>Cart </strong>
                            </div>
                            <button class="minicart__close__btn">
                                <i class="fa fa-close"></i>
                            </button>

                        </div>

                        <div class="minicart__single__wraper">
                            <div class="minicart__single">

                                <div class="minicart__single__img">
                                    <a href='single-product.html'>
                                        <img src="{{asset('/')}}frontend/img/grid/grid__1.png" alt="product" />
                                    </a>
                                    <div class="minicart__single__close">
                                        <button title="Remove"><i class="fa fa-close"></i></button>
                                    </div>
                                </div>
                                <div class="minicart__single__content">
                                    <h4><a href='single-product.html'>E. Casual Comforts T-shirt </a></h4>
                                    <span>1 x <span class="money">$5,.00 USD </span></span>

                                </div>

                            </div>

                            <div class="minicart__single">

                                <div class="minicart__single__img">
                                    <a href='single-product.html'>
                                        <img src="{{asset('/')}}frontend/img/grid/grid__2.png" alt="product" />
                                    </a>
                                    <div class="minicart__single__close">
                                        <button title="Remove"><i class="fa fa-close"></i></button>
                                    </div>
                                </div>
                                <div class="minicart__single__content">
                                    <h4><a href='single-product.html'>M. Denim Clothing Jacket </a></h4>
                                    <span>1 x <span class="money">$4,.00 USD </span></span>

                                </div>

                            </div>
                        </div>

                        <div class="minicart__footer">
                            <div class="minicart__subtotal">
                                <span class="subtotal__title">Subtotal: </span>
                                <span class="subtotal__amount subtotal"></span>
                            </div>
                            <div class="minicart__button">
                                {{-- <a class='default__button' href='cart.html'>View Cart </a> --}}
                                <a class='default__button' href='{{route('checkout')}}'>Checkout </a>
                            </div>
                            
                        </div>


                    </div>
                </div>
            </section>
            <!-- minicart__section__end -->

        </header>

        <!-- header section end -->



        @yield('main-section')
        <!-- footer__section__start -->
        <div class="footer ">
            <div class="footer__inner sp_top_80">
                <div class="container sp_bottom_60">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="footer__widget">
                                <h4 class="footer__title">About Us. </h4>
                                <div class="footer__content">
                                    <p>At FurryBD, we’re passionate about your cat’s health and happiness. That’s why we bring you high-quality, vet-approved cat food from trusted brands—all in one place, delivered right to your door. Whether you're raising a playful kitten or caring for a senior feline, we've got the perfect meal for every meow. </p>
                                </div>


                            </div>
                        </div>

                        {{-- <div class="col-xl-2 col-lg-2 col-md-6 col-sm-4 col-6">
                            <div class="footer__widget">
                                <h4 class="footer__title">Quick Link </h4>
                                <div class="footer__menu">
                                    <ul>
                                        <li><a href="/account">My Account </a></li>
                                        <li><a href="/cart">My Cart </a></li>
                                        <li><a href="/pages/wishlist">Wishlist </a></li>
                                        <li><a href="/">Gift Card </a></li>
                                        <li><a href="/pages/contact">Need Help? </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-4 col-6">
                            <div class="footer__widget">
                                <h4 class="footer__title">Information </h4>
                                <div class="footer__menu">
                                    <ul>
                                        <li><a href="/account">About us </a></li>
                                        <li><a href="/cart">Contact </a></li>
                                        <li><a href="/pages/wishlist">Blogs </a></li>
                                        <li><a href="/">Gift Card </a></li>
                                        <li><a href="/pages/contact">Size Chart </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-4 col-6">
                            <div class="footer__widget">
                                <h4 class="footer__title">Policies </h4>
                                <div class="footer__menu">
                                    <ul>
                                        <li><a href="/account">Privacy Policy </a></li>
                                        <li><a href="/cart">Refund Policy </a></li>
                                        <li><a href="/pages/wishlist">Terms of Service </a></li>
                                        <li><a href="/">Gift Card </a></li>
                                        <li><a href="/pages/contact">Shipping Policy </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}



                    </div>
                </div>
            </div>

            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="copyright__text">
                                <p>© {{date('Y')}} <strong>{{$config->company_name}} </strong>. All rights reserved. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- footer__section__end -->



    </main>


    <!-- JS here -->
    <script src="{{asset('/')}}frontend/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="{{asset('/')}}frontend/js/popper.min.js"></script>
    <script src="{{asset('/')}}frontend/js/bootstrap.min.js"></script>
    <script src="{{asset('/')}}frontend/js/isotope.pkgd.min.js"></script>
    <script src="{{asset('/')}}frontend/js/one-page-nav-min.js"></script>
    <script src="{{asset('/')}}frontend/js/slick.min.js"></script>
    <script src="{{asset('/')}}frontend/js/jquery.meanmenu.min.js"></script>
    <script src="{{asset('/')}}frontend/js/ajax-form.js"></script>
    <script src="{{asset('/')}}frontend/js/wow.min.js"></script>
    <script src="{{asset('/')}}frontend/js/jquery.scrollUp.min.js"></script>
    <script src="{{asset('/')}}frontend/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{asset('/')}}frontend/js/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('/')}}frontend/js/waypoints.min.js"></script>
    <script src="{{asset('/')}}frontend/js/jquery.counterup.min.js"></script>
    <script src="{{asset('/')}}frontend/js/fontawesome.min.js"></script>
    <script src="{{asset('/')}}frontend/js/plugins.js"></script>
    <script src="{{asset('/')}}frontend/js/main.js"></script>

    <script>
        // cartLS.destroy();

        function cartCount() {
            let total_product = cartLS.list().length
            $('.cart-count').html(total_product)
            $('.cart-total').html('৳' + cartLS.total())
        }
        cartCount();

        function cartProductSet() {
            const products = cartLS.list();
            console.log(products);

            var html_data = ''
            for (let index = 0; index < products.length; index++) {
                const element = products[index];
                html_data += `
                    <div class="minicart__single">
                        <div class="minicart__single__img">
                            <a href='#'>
                                <img src="${element.image}" alt="${element.name}"></div>
                            </a>
                            <div class="minicart__single__close">
                                <i onclick="removeItem('${element.id}')" style="cursor: pointer" class="fa fa-close"></i>
                            </div>
                        </div>
                        <div class="minicart__single__content">
                            <h4><a href='#'>${element.name} </a></h4>
                            <span>${element.quantity}  x <span class="money">৳${element.price}  </span></span>
                        </div>
                    </div>                  
                `;
            }

            $('.minicart__single__wraper').html(html_data)
            $('.subtotal').html('৳' + cartLS.total())
        }

        cartProductSet()

        function removeItem(id) {
            cartLS.remove(id)
            window.location.reload();
        }

        function addToCart_single(type, product) {   
            var pr_ = JSON.parse(product);
            console.log(pr_);
            
            let quantity = 1;

            if (cartLS.exists(pr_.skus[0].sku_code)) {
                cartLS.update(pr_.skus[0].sku_code,'quantity',quantity)
            }else{
                cartLS.add({
                    id: pr_.skus[0].sku_code, 
                    product_id: pr_.id,
                    name: pr_.name, 
                    variant: pr_.skus[0].variant_name,
                    price: pr_.skus[0].price, 
                    sku_code: pr_.skus[0].sku_code,
                    product_sku_code: pr_.skus[0].sku_code,
                    image: pr_.image, 
                    quantity: 1})
            }

            // global set 
            cartCount();

            if (type == 'buy_now') {
                window.location.href = "{{route('checkout')}}"
                return false;
            }
            console.log(cartLS.list());
            
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: pr_.skus[0].variant_name+" has been added to your cart",
                showConfirmButton: false,
                timer: 3000
            })

            cartProductSet()
        }
    </script>


    @yield('script')

</body>

</html>