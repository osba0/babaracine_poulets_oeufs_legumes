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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css" />

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
								<!--li class="menu-item">
									<a href="" class="link-term mercado-item-title">Shop</a>
								</li-->
								<li class="menu-item">
									<a href="/cart" class="link-term mercado-item-title">Mon Panier</a>
								</li>
								<li class="menu-item">
									<a href="{{route('checkout')}}" class="link-term mercado-item-title">Checkout</a>
								</li>
								<li class="menu-item">
									<a href="/contact-us" class="link-term mercado-item-title">Nous contacter</a>
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
																<a title="Orders" href="{{ route('admin.orders') }}">Orders</a>
															</li>
															<li class="menu-item" >
																<a title="Catégories" href="{{ route('admin.categories') }}">Catégories</a>
															</li>
															<li class="menu-item" >
																<a title="Produits" href="{{ route('admin.products') }}">Produits</a>
															</li>
															<li class="menu-item" >
																<a title="age Home Slider" href="{{ route('admin.homeslider') }}">Manage Home Slider</a>
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
																<a title="Orders" href="{{ route('user.orders') }}">Mes commandes</a>
															</li>
															<li class="menu-item" >
																<a title="Modifier mot de passse" href="{{ route('user.changepassword') }}">Modifier mot de passse</a>
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
										@livewire('wishlist-count-component')
										@livewire('cart-count-component')
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

	@livewire('footer-component')
	
	<script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
	<!--script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script-->
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>
	<script src="{{ asset('assets/js/functions.js') }}"></script>



	@livewireScripts

</body>
</html>
