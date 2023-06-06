<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
<title>Paloma Textile</title>
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:title" content="">
<meta property="og:type" content="">
<meta property="og:url" content="">
<meta property="og:image" content="">
<link rel="shortcut icon" type="image/x-icon" href="{{  asset('assets/imgs/theme/favicon.png') }}">
<link rel="stylesheet" href="{{  asset('assets/css/main.css') }}">
<link rel="stylesheet" href="{{  asset('assets/css/custom.css') }}">
@livewireStyles
</head>
<body>
    <header class="header-area header-style-1 header-height-2">
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info">
                        <ul>
                                <li>
                                    <a class="language-dropdown-active" href="locale/en"> <i class="fi-rs-world"></i> English <i class="fi-rs-angle-small-down"></i></a>
                                    <ul class="language-dropdown">
                                        <li><a href="locale/fr"><img src="{{  asset('assets/imgs/theme/flag-fr.png')}}" alt="">Français</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <div class="text-center">
                            <div id="news-flash" class="d-inline-block">
                                <ul>
                                    <li>@lang('public.Get great devices up to 50% off' ) <a href="{{ route('shop') }}">@lang('public.View details')</a></li>
                                    <li>@lang('public.Supper Value Deals - Save more ')</li>
                                    <li><a href="{{ route('shop') }}">@lang('public.Shop now')</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info header-info-right">
                            @auth
                            <ul>
                                <li><i class="fi-rs-user"></i>{{  Auth::user()->name }}  /
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">@lang('public.Logout')</a>
                                    </form>
                                </li>
                            </ul>
                            @else
                            <ul>
                                <li><i class="fi-rs-key"></i><a href="{{route('login')}}">@lang('public.Login') </a>  / <a href="{{ route('register') }}">@lang('public.Sign Up')</a></li>
                            </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                        <a href="/"><img src="{{asset('assets/imgs/logo/logo.png')}}" alt="logo"></a>
                    </div>
                    <div class="header-right">
                        @livewire('header-search-component')
                        <div class="header-action-right">
                            <div class="header-action-2">
                                <div class="header-action-icon-2">
                                    @livewire('wishlist-icon-component')
                                    @livewire('cart-icon-component')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="/"><img src="{{  asset('assets/imgs/logo/logo.png')}}" alt="logo"></a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">
                        <div class="main-categori-wrap d-none d-lg-block">
                            <a class="categori-button-active" href="#">
                                <span class="fi-rs-apps"></span>@lang('public.Browse Categories')
                            </a>
                            <div class="categori-dropdown-wrap categori-dropdown-active-large">
                                <ul>
                                    <li class="has-children">
                                        <a href="{{ route('shop') }}"><i class="surfsidemedia-font-dress"></i>@lang('public.Fabrics')</a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">@lang('public.Hot & Trending')</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">@lang("public.Unis")</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">@lang('public.Brocareds')</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">@lang("public.Imprimes")</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">@lang('public.Brodes')</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">@lang('public.Velours')</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-5">
                                                    <div class="header-banner2">
                                                        <img src="{{  asset('assets/imgs/banner/menu-banner-2.jpg')}}" alt="menu_banner1">
                                                        <div class="banne_info">
                                                            <h6>@lang('public.10% Off')</h6>
                                                            <h4>@lang('public.New arrivals')</h4>
                                                            <a href="#">@lang('public.Shop now')</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-children">
                                        <a href="{{ route('shop') }}"><i class="surfsidemedia-font-tshirt"></i>@lang('public.Curtain')</a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">@lang('public.Hot & Trending')</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">@lang("public.Blackout curtain")</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">@lang('public.Thermal curtain')</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">@lang('public.The sails')</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">@lang("public.Classic curtain")</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">@lang("public.Stores")</li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-5">
                                                    <div class="header-banner2">
                                                        <img src="assets/imgs/banner/menu-banner-3.jpg" alt="menu_banner2">
                                                        <div class="banne_info">
                                                            <h6>@lang('public.15% Off')</h6>
                                                            <h4>@lang("public.Bonnes affaires")</h4>
                                                            <a href="#">@lang('public.Shop now')</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="{{ route('shop') }}"><i class="surfsidemedia-font-desktop"></i>@lang('public.Tassels')</a></li>
                                    <li><a href="{{ route('shop') }}"><i class="surfsidemedia-font-cpu"></i>@lang('public.Textile Tassels')</a></li>
                                    <li><a href="{{ route('shop') }}"><i class="surfsidemedia-font-diamond"></i>@lang('public.Double Ball Tassels')</a></li>
                                    <li><a href="{{ route('shop') }}"><i class="surfsidemedia-font-home"></i>@lang('public.Ball Magnetic Tassels')</a></li>
                                    <li><a href="{{ route('shop') }}"><i class="surfsidemedia-font-high-heels"></i>@lang('public.Lace Fringed Ribbon')</a></li>
                                    <li>

                                    </li>
                                </ul>
                                <div class="more_categories">@lang('public.Show more...')</div>
                            </div>
                        </div>
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li><a class="active" href="/">@lang('public.Home') </a></li>
                                    <li><a href="{{ route('about') }}">@lang('public.About')</a></li>
                                    <li><a href="{{ route('shop') }}">@lang('public.Shop')</a></li>
                                    <li class="position-static"><a href="#">@lang('public.Our Collections') <i class="fi-rs-angle-down"></i></a>
                                        <ul class="mega-menu">
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="#">@lang('public.Fabrics')</a>
                                                <ul>
                                                    <li><a href="product-details.html">@lang('public.Unis')</a></li>
                                                    <li><a href="product-details.html">@lang('public.Brocareds')</a></li>
                                                    <li><a href="product-details.html">@lang('public.Imprimes')</a></li>
                                                    <li><a href="product-details.html">@lang('public.Brodes')</a></li>
                                                    <li><a href="product-details.html">@lang('public.Velours')</a></li>
                                                </ul>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="#">@lang('public.Curtain')</a>
                                                <ul>
                                                    <li><a href="product-details.html">@lang('public.Blackout curtain')</a></li>
                                                    <li><a href="product-details.html">@lang('public.Thermal curtain')</a></li>
                                                    <li><a href="product-details.html">@lang('public.The sails') </a></li>
                                                    <li><a href="product-details.html">@lang('public.Classic curtain')</a></li>
                                                    <li><a href="product-details.html">@lang('public.Stores')</a></li>
                                                </ul>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="#">@lang('public.Tassels')</a>
                                                <ul>
                                                    <li><a href="product-details.html">@lang('public.Textile Tassels')</a></li>
                                                    <li><a href="product-details.html">@lang('public.Double Ball Tassels') </a></li>
                                                    <li><a href="product-details.html">@lang('public.Ball Magnetic Tassels')</a></li>
                                                    <li><a href="product-details.html">@lang('public.Lace Fringed Ribbon')</a></li>
                                                </ul>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-34">
                                                <div class="menu-banner-wrap">
                                                    <a href="{{ route('shop') }}"><img src="{{  asset('assets/imgs/banner/menu-banner-1.png')}}" alt="Paloma Textile"></a>
                                                    <div class="menu-banner-content">
                                                        <h4>@lang('public.Hot Deals')</h4>

                                                        <div class="menu-banner-price">
                                                            <span class="new-price text-success">@lang('public.Save to 50%')</span>
                                                        </div>
                                                        <div class="menu-banner-btn">
                                                            <a href="product-details.html">@lang('public.Shop now')</a>
                                                        </div>
                                                    </div>
                                                    <div class="menu-banner-discount">
                                                        <h3>
                                                            <span>35%</span>@lang('public.off')

                                                        </h3>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('contact')}}">@lang('public.Contact us')</a></li>
                                    @auth
                                        <li><a href="#">@lang('public.My Account')<i class="fi-rs-angle-down"></i></a>
                                            @if (Auth::user()->utype == 'ADM')
                                                <ul class="sub-menu">
                                                   {{-- <li><ahref="route('admi }}n.dashboard')}}">@lang('public.Dashboard')</a></li>--}}
                                                    <li><a href="{{route('admin.products')}}">@lang('public.Product')</a></li>
                                                    <li><a href="{{route('admin.categories')}}">@lang('public.Categories')</a></li>
                                                    <li><a href="{{route('admin.orders')}}">@lang('public.Order')</a></li>
                                                    <li><a href="{{route('admin.users')}}">@lang('public.User')</a></li>
                                                    <li><a href="{{route('admin.contact')}}">@lang('public.Contact Messages')</a></li>
                                                    <li><a href="{{route('admin.home.slider')}}">@lang('public.Manage Slider')</a></li>

                                                </ul>
                                            @else
                                                <ul class="sub-menu">
                                                    <li><a href="{{route('user.orders')}}">@lang('public.Dashboard')</a></li>
                                                </ul>
                                            @endif
                                        </li>
                                    @endif
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <p class="mobile-promotion"> <span class="text-brand"></span></p>
                    <div class="header-action-right d-block d-lg-none">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                                <a href="shop-wishlist.php">
                                    <img alt="Paloma Textile" src="{{  asset('assets/imgs/theme/icons/icon-heart.svg')}}">
                                    <span class="pro-count white">4</span>
                                </a>
                            </div>
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="cart.html">
                                    <img alt="Paloma Textile" src="{{  asset('assets/imgs/theme/icons/icon-cart.svg')}}">
                                    <span class="pro-count white">2</span>
                                </a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                    <ul>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="product-details.html"><img alt="Paloma Textile" src="assets/imgs/shop/thumbnail-3.jpg"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="product-details.html"></a></h4>
                                                <h3><span>1 × </span>$800.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="product-details.html"><img alt="Paloma Textile" src="{{  asset('assets/imgs/shop/thumbnail-4.jpg')}}"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="product-details.html"></a></h4>
                                                <h3><span>1 × </span>$3500.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total <span>$383.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-button">
                                            <a href="cart.html">@lang('public.View cart')</a>
                                            <a href="shop-checkout.php">@lang('public.Checkout')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-action-icon-2 d-block d-lg-none">
                                <div class="burger-icon burger-icon-white">
                                    <span class="burger-icon-top"></span>
                                    <span class="burger-icon-mid"></span>
                                    <span class="burger-icon-bottom"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href="/"><img src="{{  asset('assets/imgs/logo/logo.png')}}" alt="logo"></a>
                </div>
                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="mobile-search search-style-3 mobile-header-border">
                    <form action="#">
                        <input type="text" placeholder="Search for items…">
                        <button type="submit"><i class="fi-rs-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <div class="main-categori-wrap mobile-header-border">
                        <a class="categori-button-active-2" href="#">
                            <span class="fi-rs-apps"></span> @lang('public.Browse Categories')
                        </a>
                        <div class="categori-dropdown-wrap categori-dropdown-active-small">
                            <ul>
                                <li><a href="{{ route('shop') }}"><i class="surfsidemedia-font-dress"></i>@lang('public.Fabrics')</a></li>
                                <li><a href="{{ route('shop') }}"><i class="surfsidemedia-font-tshirt"></i>@lang('public.Curtain')</a></li>
                                <li> <a href="{{ route('shop') }}"><i class="surfsidemedia-font-smartphone"></i> @lang('public.Stores')</a></li>
                                <li><a href="{{ route('shop') }}"><i class="surfsidemedia-font-desktop"></i>@lang('public.Tassels')</a></li>
                                <li><a href="{{ route('shop') }}"><i class="surfsidemedia-font-cpu"></i>@lang('public.Textile Tassels')</a></li>
                                <li><a href="{{ route('shop') }}"><i class="surfsidemedia-font-home"></i>@lang('public.Double Ball Tassels')</a></li>
                                <li><a href="{{ route('shop') }}"><i class="surfsidemedia-font-high-heels"></i>@lang('public.Ball Magnetic Tassels')</a></li>
                                <li><a href="{{ route('shop') }}"><i class="surfsidemedia-font-teddy-bear"></i>@lang('public.Lace Fringed Ribbon')</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- mobile menu start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="/">@lang('public.Home')</a></li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="{{ route('shop') }}">@lang('public.Shop')</a></li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">@lang('public.Our Collections')</a>
                                <ul class="dropdown">
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">@lang('public.Fabrics')</a>
                                        <ul class="dropdown">
                                                    <li><a href="product-details.html">@lang('public.Brocareds')</a></li>
                                                    <li><a href="product-details.html">@lang('public.Imprimes')</a></li>
                                                    <li><a href="product-details.html">@lang('public.Brodes')</a></li>
                                                    <li><a href="product-details.html">@lang('public.Velours')</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">@lang('public.Curtain')</a>
                                        <ul class="dropdown">
                                                    <li><a href="product-details.html">@lang('public.Blackout curtain')</a></li>
                                                    <li><a href="product-details.html">@lang('public.Thermal curtain')</a></li>
                                                    <li><a href="product-details.html">@lang('public.The sails') </a></li>
                                                    <li><a href="product-details.html">@lang('public.Classic curtain')</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#"> @lang('public.Tassels')</a>
                                        <ul class="dropdown">
                                            <li><a href="product-details.html">@lang('public.Textile Tassels')</a></li>
                                            <li><a href="product-details.html">@lang('public.Double Ball Tassels') </a></li>
                                            <li><a href="product-details.html">@lang('public.Ball Magnetic Tassels')</a></li>
                                            <li><a href="product-details.html">@lang('public.Lace Fringed Ribbon')</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">@lang('public.Language')</a>
                                <ul class="dropdown">
                                    <li><a href="#">@lang('public.English')</a></li>
                                    <li><a href="#">@lang('public.French')</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-header-info-wrap mobile-header-border">
                    <div class="single-mobile-header-info mt-30">
                        <a href="contact.html"> @lang('public.Our location') </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="{{route('login')}}">@lang('public.Login')</a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="register.html">@lang('public.Sign up')</a>
                    </div>
                </div>
                <div class="mobile-social-icon">
                    <h5 class="mb-15 text-grey-4">@lang('public.Follow Us')</h5>
                    <a href="#"><img src="{{  asset('assets/imgs/theme/icons/icon-facebook.svg')}}" alt=""></a>
                    <a href="#"><img src="{{  asset('assets/imgs/theme/icons/icon-twitter.svg')}}" alt=""></a>
                    <a href="#"><img src="{{  asset('assets/imgs/theme/icons/icon-instagram.svg')}}" alt=""></a>
                    <a href="#"><img src="{{  asset('assets/imgs/theme/icons/icon-pinterest.svg')}}" alt=""></a>
                    <a href="#"><img src="{{  asset('assets/imgs/theme/icons/icon-youtube.svg')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>

{{$slot}}
    <footer class="main">
        <section class="section-padding footer-mid">
            <div class="container pt-15 pb-20">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="widget-about font-md mb-md-5 mb-lg-0">
                            <div class="logo logo-width-1 wow fadeIn animated">
                                <a href="/"><img src="{{  asset('assets/imgs/logo/logo.png')}}" alt="logo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <h5 class="widget-title wow fadeIn animated">@lang('public.About')</h5>
                        <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                            <li><a href="#">@lang('public.About uss ')</a></li>
                            <li><a href="#">@lang('public.Delivery Information')</a></li>
                            <li><a href="#">@lang('public.Privacy Policy')</a></li>
                            <li><a href="#">@lang('public.Conditions') &amp; @lang('public.Conditions')</a></li>
                            <li><a href="#">@lang('public.Contact us')</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2  col-md-3">
                        <h5 class="widget-title wow fadeIn animated">@lang('public.My Account')</h5>
                        <ul class="footer-list wow fadeIn animated">
                            <li><a href="my-account.html">@lang('public.My Account')</a></li>
                            <li><a href="#">@lang('public.View cart')</a></li>
                            <li><a href="#">@lang('public.My Wishlist')</a></li>
                            <li><a href="#">@lang('public.Track My Order')</a></li>
                            <li><a href="#">@lang('public.Order')</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 mob-center">
                        <h5 class="widget-title wow fadeIn animated">@lang('public.Contact')</h5>
                            <p class="wow fadeIn animated">
                                <strong>Address: </strong>562 Wellington Road
                            </p>
                            <p class="wow fadeIn animated">
                                <strong>Phone: </strong>+1 0000-000-000
                            </p>
                            <p class="wow fadeIn animated">
                                <strong>Email: </strong>contact@palomaTextile.com
                            </p>
                            <h5 class="mb-10 mt-30 fw-600 text-grey-4 wow fadeIn animated">@lang('public.Follow Us')</h5>
                            <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0">
                                <a href="#"><img src="{{  asset('assets/imgs/theme/icons/icon-facebook.svg')}}" alt=""></a>
                                <a href="#"><img src="{{  asset('assets/imgs/theme/icons/icon-twitter.svg')}}" alt=""></a>
                                <a href="#"><img src="{{  asset('assets/imgs/theme/icons/icon-instagram.svg')}}" alt=""></a>
                                <a href="#"><img src="{{  asset('assets/imgs/theme/icons/icon-pinterest.svg')}}" alt=""></a>
                                <a href="#"><img src="{{  asset('assets/imgs/theme/icons/icon-youtube.svg')}}" alt=""></a>
                            </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <!-- Vendor JS-->
<script src="{{  asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{  asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{  asset('assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
<script src="{{  asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{  asset('assets/js/plugins/slick.js') }}"></script>
<script src="{{  asset('assets/js/plugins/jquery.syotimer.min.js') }}"></script>
<script src="{{  asset('assets/js/plugins/wow.js') }}"></script>
<script src="{{  asset('assets/js/plugins/jquery-ui.js') }}"></script>
<script src="{{  asset('assets/js/plugins/perfect-scrollbar.js') }}"></script>
<script src="{{  asset('assets/js/plugins/magnific-popup.js') }}"></script>
<script src="{{  asset('assets/js/plugins/select2.min.js') }}"></script>
<script src="{{  asset('assets/js/plugins/waypoints.js') }}"></script>
<script src="{{  asset('assets/js/plugins/counterup.js') }}"></script>
<script src="{{  asset('assets/js/plugins/jquery.countdown.min.js') }}"></script>
<script src="{{  asset('assets/js/plugins/images-loaded.js') }}"></script>
<script src="{{  asset('assets/js/plugins/isotope.js') }}"></script>
<script src="{{  asset('assets/js/plugins/scrollup.js') }}"></script>
<script src="{{  asset('assets/js/plugins/jquery.vticker-min.js') }}"></script>
<script src="{{  asset('assets/js/plugins/jquery.theia.sticky.js') }}"></script>
<script src="{{  asset('assets/js/plugins/jquery.elevatezoom.js') }}"></script>
<!-- Template  JS -->
<script src="{{  asset('assets/js/main.js?v=3.3') }}"></script>
<script src="{{  asset('assets/js/shop.js?v=3.3') }}"></script>
@livewireScripts
@stack('scripts')
</body>
</html>
