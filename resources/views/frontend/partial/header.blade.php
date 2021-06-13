<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
	<title>@yield('pagetitle') ProjectYeon </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="robots" content="index, follow" />
     <meta http-equiv="x-ua-compatible" content="ie=edge">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.png') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">




<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/linearicons-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/slick/slick.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/MagnificPopup/magnific-popup.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
<!--===============================================================================================-->




     <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">

     <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">







     <link rel="stylesheet" type="text/css" href="{{ asset('css/side.css') }}">
<!--===============================================================================================-->
     <script src="{{ asset('js/app.js') }}" defer></script>

     <!-- Fonts -->
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="animsition">

	<!-- Header -->


	<header class="header-v3">
		<!-- Header desktop -->

		<div class="container-menu-desktop trans-03">
			<div class="wrap-menu-desktop">
                <nav class="limiter-menu-desktop p-l-45">

                 <!--   <div class="flex-c-m h-full p-lr-19">
                        <div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11">
                            <i class="fa fa-bars" onclick="openNav()"></i>
                        </div>
                    </div>
                    <div id="mySidenavpc" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                        <a href="#">Home</a>
                        <a href="#">Login</a>
                        <a href="#demo" data-toggle="collapse">Categories</a>

                        <div id="demo" class="collapse">
                            <a href="#">Men</a>
                            <a href="#">Women</a>
                            <a href="#">Accessories</a>
                        </div>
                        <a href="#">Terms</a>
                        <a href="#">Contact Us</a>

                    </div>
                    -->



					<!-- Logo desktop -->

					<a href="{{ route('index') }}" class="logo">
						<img src="{{ asset('images/icons/logo-02.png') }}" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">

							<li>
								<a href="{{ route('products') }}">Products</a>
							</li>

							<li>
								<a href="{{ route('product.cart') }}">Cart</a>
							</li>

							<li>
                                <a href="{{ route('categories' ) }}">Categories <i class="fa fa-angle-down"></i></a>
								<ul class="sub-menu">
									<li><a href="#">Men</a></li>
									<li><a href="#">Women</a></li>
									<li><a href="#">Accessories</a></li>
								</ul>
							</li>

							<li>
								<a href="{{ route('contact') }}">Contact</a>
							</li>
						</ul>
					</div>

					<!-- Icon header -->
                    <div class="wrap-icon-header flex-w flex-r-m h-full">
                        <div class="flex-c-m h-full p-r-25 bor6">
                            <div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 js-show-modal-search">
                                <i class="fa fa-search"></i>
                            </div>
                        </div>
                        <div class="flex-c-m h-full p-r-25 bor6">
                            <div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="1">
                                <i class="fa fa-opencart" id="reloadcart"></i>
                            </div>
                        </div>




                    </div>

                </nav>

		</div>
        </div>

		<!-- Header Mobile -->

		<div class="wrap-header-mobile">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <a href="#">Home</a>
                <a href="#">Services</a>
                <a href="#demo" data-toggle="collapse">Categories</a>

                <div id="demo" class="collapse">
                    <a href="#">Men</a>
                    <a href="#">Women</a>
                    <a href="#">Accessories</a>
                </div>
                <a href="#">Terms</a>
                <a href="#">Contact Us</a>

            </div>
            <div class="flex-c-m h-full p-lr-19">
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11">
                    <i class="fa fa-bars" onclick="openNav()"></i>
                </div>
            </div>
			<div class="logo-mobile">
				<a href="#"><img src="{{ asset('images/icons/logo-01.png') }}" alt="IMG-LOGO"></a>
			</div>


            <div class="wrap-icon-header flex-w flex-r-m h-full m-r-15">
                <div class="flex-c-m h-full p-r-5">
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart " data-notify="2">
                        <i class="fa fa-opencart"></i>
                    </div>
                </div>
            </div>


</div>






		<!-- Menu Mobile -->
        <!--
		<div class="menu-mobile">
			<ul class="main-menu-m">
				<li>
					<a href="index.html">Home</a>
					<ul class="sub-menu-m">
						<li><a href="index.html">Homepage 1</a></li>
						<li><a href="home-02.html">Homepage 2</a></li>
						<li><a href="home-03.html">Homepage 3</a></li>
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="product.html">Shop</a>
				</li>

				<li>
					<a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
				</li>

				<li>
					<a href="blog.html">Blog</a>
				</li>

				<li>
					<a href="about.html">About</a>
				</li>

				<li>
					<a href="contact.html">Contact</a>
				</li>
			</ul>
		</div>
        -->

		<!-- Modal Search -->
        <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
            <div class="container-search-header">
                <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                    <img src="images/icons/icon-close2.png" alt="CLOSE">
                </button>

                <form action="{{ route('search') }}" method="get" class="wrap-search-header flex-w p-l-15">
                    @csrf
                    <button class="flex-c-m trans-04">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                    <input class="plh3" type="text" name="name" placeholder="Search">
                </form>
            </div>
        </div>

	</header>


	<!-- Sidebar -->

	<!-- Cart -->
	<div  class="wrap-header-cart js-panel-cart" >
		<div class="s-full js-hide-cart"></div>

        <div  class="header-cart flex-col-l p-l-65 p-r-25">
            <div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

                <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                    <i class="fa fa-times"></i>
                </div>
            </div>

            <div id="sidecart" >
            @if (Cart::isEmpty())
                <div class="alert alert-warning">
                    <p>Your shopping cart is empty.</p>
                </div>
            @else
            <!--TODO: use "refreshcart()" function to get all the cart data and then show them in the upcoming code -->
                <div class="header-cart-content flex-w js-pscroll">
                    <ul class="header-cart-wrapitem w-full">
                        @foreach(Cart::getcontent() as $item)
                            <li class="header-cart-item flex-w flex-t m-b-12">
                                <div class="header-cart-item-img">
                                    <img src="{{ asset('images/item-cart-01.jpg') }}" alt="IMG">
                                </div>

                                <div class="header-cart-item-txt p-t-8">
                                    <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                        {{ $item->name }}
                                    </a>

                                    <span class="header-cart-item-info">
								{{ $item->price }}
							</span>
                                </div>
                            </li>



                        @endforeach
                    </ul>

                    <div class="w-full">
                        <div class="header-cart-total w-full p-tb-40">
                            Total: $75.00
                        </div>

                        <div class="header-cart-buttons flex-w w-full">
                            <a href="{{ route('product.cart') }}" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                                View Cart
                            </a>

                            <a href="#" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                                Check Out
                            </a>
                        </div>
                    </div>
                </div>
            @endif
            </div>


        </div>

    </div>


