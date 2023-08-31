<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title> 
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">
    @livewireStyles
    
</head>
<body class="home-page home-01 ">

    <!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

    <!--header-->
    <header id="header" class="header header-style-1">
        <div class="container-fluid">
            <div class="row">
                <div class="nav-section header-sticky">
                    <div class="primary-nav-section">
                        <div class="container">
                            <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
                                <li class="menu-item home-icon menu-on">
                                    <a href="/" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="link-term mercado-item-title">A Propos</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/shop" class="link-term mercado-item-title">Shop</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/cart" class="link-term mercado-item-title">Cart</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/checkout" class="link-term mercado-item-title">Checkout</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="link-term mercado-item-title">Nous contacter</a>
                                </li>                                                                   
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="mid-section main-info-area" style="display: flex;justify-content: space-between;">

                        <div class="wrap-logo-top left-section" style="padding: 8px 0">
                            <a href="/" class="link-to-home"><img src="{{ asset('assets/images/babaracine_logo.png') }}" alt="Babaracine logo"></a>
                        </div>
                        
                        <div style="display: flex; flex-direction: column; padding-left: 15px; justify-content: space-between; flex: 1;">
                            <div class="topbar-menu-area" style="padding: 0 15px; border-radius: 15px; margin-top: 15px;">
                                <div class="topbar-menu left-menu">
                                    <ul>
                                        <li class="menu-item" >
                                            <a title="Hotline: (+123) 456 789" href="#" ><span class="icon label-before fa fa-mobile"></span>Nous joindre: (+221) 33 855 01 38 / 77 310 18 56</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="topbar-menu right-menu">
                                    <ul>
                                        @if(Route::has('login'))
                                            @auth

                                                @if(Auth::user()->utype === 'ADM')

                                                    <li class="menu-item menu-item-has-children parent" >
                                                        <a title="My Account" href="#">My Account ({{ Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                                        <ul class="submenu curency" >
                                                            <li class="menu-item" >
                                                                <a title="Dashboard" href="{{ route('admin.dashboard') }}">Dashboard</a>
                                                            </li>
                                                            <li class="menu-item" >
                                                                <a title="Catégories" href="{{ route('admin.categories') }}">Catégories</a>
                                                            </li>
                                                            <li class="menu-item" >
                                                                <a title="Dashboard" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-Form').submit()" >Log out</a>
                                                            </li>
                                                        </ul>
                                                    </li>

                                                    <form id="logout-Form" action="{{ route('logout') }}" method="POST">@csrf</form>

                                                @else

                                                    <li class="menu-item menu-item-has-children parent" >
                                                        <a title="My Account" href="#">Mon Compte ({{ Auth::user()->name}})<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                                        <ul class="submenu curency" >
                                                            <li class="menu-item" >
                                                                <a title="Dashboard" href="{{ route('user.dashboard') }}">Dashboard</a>
                                                            </li>
                                                            <li class="menu-item" >
                                                                <a title="Dashboard" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-Form').submit()" >Se déconnecter</a>
                                                            </li>
                                                        
                                                        </ul>
                                                    </li>

                                                    <form id="logout-Form" action="{{ route('logout') }}" method="POST">@csrf</form>

                                                @endif

                                            @else

                                                <li class="menu-item" ><a title="Register or Login" href="{{ route('login') }}">Connexion</a></li>
                                                <li class="menu-item" ><a title="Register or Login" href="{{ route('register') }}">S'inscrire</a></li>

                                            @endif
                                        @endif
                                        
                                        
                                    </ul>
                                </div>
                            </div>
                            <div style="display: flex;justify-content: space-between">
                                <div class="wrap-search center-section" style="flex: 1; text-align: left; padding-left: 0;">
                                    @livewire('header-search-component')
                                
                                </div>

                                <div class="wrap-icon right-section">
                                    <div class="wrap-icon-section minicart">
                                        <div class="orderPayment">
                                            <span>Commandez et payez avec</span>
                                            <div>
                                                <img src="{{ asset('assets/images/wave.png') }}"/>
                                                <img src="{{ asset('assets/images/om.png') }}"/>
                                            </div>
                                        </div>
                                        <a href="/cart" class="link-cart">
                                            
                                            <div class="menu-cart-item-count">
                                                {{ Cart::count() }}
                                            </div>
                                        </a>
                                    </div>
                                    <div class="wrap-icon-section show-up-after-1024">
                                        <a href="#" class="mobile-navigation">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="header-nav-section">
                                <div class="container1" style="display: flex; justify-content: space-between; align-items: center">
                                    <ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu" data-menuname="Sale Info" >
                                        @foreach ($categories as $category)
                                            <li class="{{ Route::currentRouteName() == 'product.category'? (\Route::current()->parameter('category_slug') == $category->slug? 'actif':''):''}}">
                                                <a href="{{route('product.category', ['category_slug' => $category->slug])}}" class="link-term">
                                                    <img src="{{ asset('assets/category/'. $category->picture) }}" alt="" style="height: 50px">
                                                    <span>{{ $category->name}} </span>
                                                </a>
                                             </li>
                                        @endforeach
                                        
                                    </ul>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/livraison.png') }}" style="height: 30px"/>
                                        <span class="freeShipping">Bénéficiez d'une livraison gratuite <br/>pour tout achat supérieur à <b>50.000 FCFA</b></span>
                                    </div>
                                </div>
                            </div>
                            
                        
                        </div>

                    </div>
                </div>

                
            </div>
        </div>
    </header>

    {{ $slot }}

    <footer id="footer">
        <div class="wrap-footer-content footer-style-1">

            <div class="wrap-function-info">
                <div class="container">
                    <ul>
                        <li class="fc-info-item">
                            <i class="fa fa-truck" aria-hidden="true"></i>
                            <div class="wrap-left-info">
                                <h4 class="fc-name">Free Shipping</h4>
                                <p class="fc-desc">Free On Oder Over $99</p>
                            </div>

                        </li>
                        <li class="fc-info-item">
                            <i class="fa fa-recycle" aria-hidden="true"></i>
                            <div class="wrap-left-info">
                                <h4 class="fc-name">Guarantee</h4>
                                <p class="fc-desc">30 Days Money Back</p>
                            </div>

                        </li>
                        <li class="fc-info-item">
                            <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                            <div class="wrap-left-info">
                                <h4 class="fc-name">Safe Payment</h4>
                                <p class="fc-desc">Safe your online payment</p>
                            </div>

                        </li>
                        <li class="fc-info-item">
                            <i class="fa fa-life-ring" aria-hidden="true"></i>
                            <div class="wrap-left-info">
                                <h4 class="fc-name">Online Suport</h4>
                                <p class="fc-desc">We Have Support 24/7</p>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
            <!--End function info-->

            <div class="main-footer-content">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="wrap-footer-item">
                                <h3 class="item-header">Contact Details</h3>
                                <div class="item-content">
                                    <div class="wrap-contact-detail">
                                        <ul>
                                            <li>
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                <p class="contact-txt">45 Avenue Saint Laurant Grand Mbour, SENEGAL</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                <p class="contact-txt">(+221) 33 852 02 53 - (+221) 77 310 18 56</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                                <p class="contact-txt">contact@babaracine.com</p>
                                            </li>                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

                            <div class="wrap-footer-item">
                                <h3 class="item-header">Join us</h3>
                                <div class="item-content">
                                    <div class="wrap-hotline-footer">
                                        <span class="desc">Service Commerciale</span>
                                        <b class="phone-number">(+221) 77 310 18 56</b>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 box-twin-content ">
                            <div class="row">
                                <div class="wrap-footer-item twin-item">
                                    <h3 class="item-header">My Account</h3>
                                    <div class="item-content">
                                        <div class="wrap-vertical-nav">
                                            <ul>
                                                <li class="menu-item"><a href="#" class="link-term">My Account</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Brands</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Gift Certificates</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Affiliates</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Wish list</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap-footer-item twin-item">
                                    <h3 class="item-header">Infomation</h3>
                                    <div class="item-content">
                                        <div class="wrap-vertical-nav">
                                            <ul>
                                                <li class="menu-item"><a href="#" class="link-term">Contact Us</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Returns</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Site Map</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Specials</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Order History</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="wrap-footer-item">
                                <h3 class="item-header">We Using Safe Payments:</h3>
                                <div class="item-content">
                                    <div class="wrap-list-item wrap-gallery">
                                        <div>
                                            <img src="{{ asset('assets/images/wave.png') }}" style="height:40px">
                                            <img src="{{ asset('assets/images/om.png') }}" style="height:40px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="wrap-footer-item">
                                <h3 class="item-header">Social network</h3>
                                <div class="item-content">
                                    <div class="wrap-list-item social-network">
                                        <ul>
                                            <li><a href="#" class="link-to-item" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#" class="link-to-item" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#" class="link-to-item" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                            <li><a href="#" class="link-to-item" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                            <li><a href="#" class="link-to-item" title="vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="wrap-footer-item">
                                <div class="footer-item-second">
                                <h3 class="item-header">Sign up for newsletter</h3>
                                <div class="item-content">
                                    <div class="wrap-newletter-footer">
                                        <form action="#" class="frm-newletter" id="frm-newletter">
                                            <input type="email" class="input-email" name="email" value="" placeholder="Enter your email address">
                                            <button class="btn-submit">Subscribe</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="coppy-right-box">
                <div class="container">
                    <div class="coppy-right-item item-left">
                        <p class="coppy-right-text">Copyright © 2023 BABA<b>RACINE</b>. All rights reserved</p>
                    </div>
                    <div class="coppy-right-item item-right">
                        <div class="wrap-nav horizontal-nav">
                            <ul>
                                <li class="menu-item"><a href="about-us.html" class="link-term">About us</a></li>                               
                                <li class="menu-item"><a href="privacy-policy.html" class="link-term">Privacy Policy</a></li>
                                <li class="menu-item"><a href="terms-conditions.html" class="link-term">Terms & Conditions</a></li>
                                <li class="menu-item"><a href="return-policy.html" class="link-term">Return Policy</a></li>                             
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
    <!--script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script-->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/js/functions.js') }}"></script>

    @livewireScripts
</body>
</html>
