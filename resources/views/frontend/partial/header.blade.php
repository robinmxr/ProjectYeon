<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
	<title>@yield('pagetitle') | DoogDoogi </title>
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

			<div class="wrap-menu-desktop how-shadow1">
                <nav class="limiter-menu-desktop p-l-45">

                    <div class="flex-c-m h-full p-lr-19">
                        <div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11">
                            <i class="fa fa-bars" onclick="openNav()"></i>
                        </div>
                    </div>
                    <div id="mySidenavpc" class="sidenav ">

                        <a href="javascript:void(0)" class="closebtn " onclick="closeNav()">×</a>
                        <div class="flex-column">


                            <div>

                                <h3 class="cl0 text-uppercase underline p-l-5 p-b-20"> Quick Links </h3>



                            </div>
                            <!-- navbar content pc -->

                            <div>
                                @if(!Auth::guest())

                                    <div class="img-bordered sidenavimg">
                                        @if(isset(Auth::user()->image[0]->image))
                                            <img src="{{ asset('images/profiles/'.Auth::user()->image[0]->image) }}" style="height: 180px; width:180px;border-radius: 50%;"/>
                                        @else
                                            <img src="{{ asset('images/profiledef.png') }}" style="height: 180px; width:180px;border-radius: 50%;"/>
                                        @endif
                                    </div>

                                    <h3 class="text-center cl0"> {{ auth()->user()->name }} </h3>
                                    <div class="sidenavdiv">

                                        <a href="{{route('profile')}}" class="sidenavlink">
                                            <div class="flex-row">
                                                <div>
                                                    <i class="fa fa-user p-r-15 p-l-5" aria-hidden="true"></i>
                                                </div>
                                                <div>My profile</div>
                                            </div>

                                        </a>






                                    </div>
                                    <div class="sidenavdiv">

                                        <a href="{{route('wishlist')}}" class="sidenavlink">
                                            <div class="flex-row">
                                                <div>
                                                    <i class="fa fa-heartbeat p-r-15 p-l-5" aria-hidden="true"></i>
                                                </div>
                                                <div>My Wishlist</div>
                                            </div>

                                        </a>






                                    </div>


                                @else
                                    <a href="{{route('login')}}" class="sidenavlink">
                                        <div class="flex-row">
                                            <div>
                                                <i class="fa fa-sign-in p-r-15 p-l-5" aria-hidden="true"></i>
                                            </div>
                                            <div>Login</div>
                                        </div>

                                        </a>
                                    <a href="{{route('register')}}" class="sidenavlink">

                                        <div class="flex-row">
                                            <div>
                                                <i class="fa fa-user-plus p-r-15 p-l-5" aria-hidden="true"></i>
                                            </div>
                                            <div>Signup</div>
                                        </div>
                                        </a>
                                @endif


                                <a href="#demo" data-toggle="collapse"  class="sidenavlink">
                                    <div class="flex-row">
                                        <div>
                                            <i class="fa fa-shopping-bag p-r-15 p-l-5" aria-hidden="true"></i>
                                        </div>
                                        <div>Categories</div>
                                    </div>

                                    </a>

                                <div id="demo" class="collapse p-l-50">
                                    <a href="{{ route('categories.type','men') }}"  class="sidenavlink">
                                        <div class="flex-row">
                                            <div>
                                                <i class="fa fa-male p-r-15" aria-hidden="true"></i>
                                            </div>
                                            <div>Man</div>
                                        </div>
                                        </a>
                                    <a href="{{ route('categories.type','women') }}"  class="sidenavlink">
                                        <div class="flex-row">
                                            <div>
                                                <i class="fa fa-female  p-r-15" aria-hidden="true"></i>
                                            </div>
                                            <div>Women</div>
                                        </div>
                                         </a>
                                    <a href="{{ route('categories.type','etc') }}" class="sidenavlink">
                                        <div class="flex-row">
                                            <div><i class="fa fa-cog p-r-15" aria-hidden="true"></i></div>
                                            <div>Accessories</div>
                                        </div>

                                    </a>
                                </div>


                                <a href="{{ route('about') }}" class="sidenavlink">
                                    <div class="flex-row">
                                        <div>
                                            <i class="fa fa-question-circle-o p-r-15 p-l-5" aria-hidden="true"></i>
                                        </div>
                                        <div>About</div>
                                    </div>


                                </a>



                                <a href="{{ route('contact') }}" class="sidenavlink">
                                    <div class="flex-row">
                                        <div>
                                            <i class="fa fa-compress p-r-15 p-l-5" aria-hidden="true"></i>
                                        </div>
                                        <div>Contact</div>
                                    </div>
                                    </a>
                                <a href="{{ route('terms') }}" class="sidenavlink">
                                    <div class="flex-row">
                                        <div>
                                            <i class="fa fa-check p-r-15 p-l-5" aria-hidden="true"></i>
                                        </div>
                                        <div>Terms</div>
                                    </div>
                                    </a>
                                <a href="{{ route('faq') }}" class="sidenavlink">
                                    <div class="flex-row">
                                        <div>
                                            <i class="fa fa-question p-r-15 p-l-5" aria-hidden="true"></i>
                                        </div>
                                        <div>Questions</div>
                                    </div>
                                    </a>


                            </div>
                        </div>


                    </div>




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
									<li><a href="{{ route('categories.type','men') }}">Men</a></li>
									<li><a href="{{ route('categories.type','women') }}">Women</a></li>
									<li><a href="{{ route('categories.type','etc') }}">Accessories</a></li>
								</ul>
							</li>

							<li>
								<a href="{{ route('contact') }}">Contact</a>
							</li>

                            @if(Auth::guest())
                            <li>
                                <a href="{{ route('login') }}">Login</a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}">Sign up</a>
                            </li>
                            @else
                                <li>
                                    <a href="#">{{ Auth::user()->name }} <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('profile') }}">Profile</a></li>
                                        <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
                                        @if(auth()->user()->is_admin==1)

                                            <li>
                                                <a href="{{route("admin.index")}}">Admin Panel</a>
                                            </li>
                                        @else
                                        <!-- -->
                                        @endif
                                        <li>
                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                        $('#logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                            </form>

                                        </li>


                                    </ul>
                                </li>




                            @endif


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
                            <div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify="{{ Cart::getTotalQuantity() }}">
                                <i class="fa fa-opencart" id="reloadcart"></i>
                            </div>
                        </div>




                    </div>

                </nav>

		</div>
        </div>

		<!-- Header Mobile -->
        <!-- TODO: Edit Mobile view -->
		<div class="wrap-header-mobile">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn sidenavlink" onclick="closeNav()">×</a>

                @if(!Auth::guest())

                    <div class="img-bordered sidenavimg">
                        @if(isset(Auth::user()->image[0]->image))
                            <img src="{{ asset('images/profiles/'.Auth::user()->image[0]->image) }}" style="height: 180px; width:180px;border-radius: 50%;"/>
                        @else
                            <img src="{{ asset('images/profiledef.png') }}" style="height: 180px; width:180px;border-radius: 50%;"/>
                        @endif
                    </div>
                    <div class="sidenavdiv">
                        <div > {{ auth()->user()->name }} </div>

                        <div class="sidenavlink"> <div><a href="{{ route('profile') }}"> My Profile</a> </div></div>

                    </div>


                @else
                    <a href="{{route('login')}}" class="sidenavlink"> Login</a>
                    <a href="{{route('register')}}" class="sidenavlink"> Signup </a>
                @endif


                <a href="#demo" data-toggle="collapse"  class="sidenavlink">Categories</a>

                <div id="demo" class="collapse">
                    <a href="{{ route('categories.type','men') }}"  class="sidenavlink">Men</a>
                    <a href="{{ route('categories.type','women') }}"  class="sidenavlink">Women</a>
                    <a href="{{ route('categories.type','etc') }}" class="sidenavlink">Accessories</a>
                </div>
                <a href="{{ route('about') }}" class="sidenavlink">About</a>
                <a href="{{ route('contact') }}" class="sidenavlink">Contact</a>
                <a href="{{ route('terms') }}" class="sidenavlink">Terms</a>
                <a href="{{ route('faq') }}" class="sidenavlink">Questions</a>


            </div>
            <div class="flex-c-m h-full p-lr-19">
                <div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11">
                    <i class="fa fa-bars" onclick="openNav()"></i>
                </div>
            </div>
			<div class="logo-mobile">
				<a href="{{ route('index') }}"><img src="{{ asset('images/icons/logo-02.png') }}" alt="IMG-LOGO"></a>
			</div>


            <div class="wrap-icon-header flex-w flex-r-m h-full m-r-15">
                <div class="flex-c-m h-full p-r-5">
                    <div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart " data-notify="{{ Cart::getTotalQuantity() }}">
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
                    X
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
                <div class="alert alert-danger">
                    <p>Your shopping cart is empty.</p>
                </div>
            @else

                <div class="header-cart-content flex-w js-pscroll">
                    <ul class="header-cart-wrapitem w-full">
                        @foreach(Cart::getcontent() as $item)
                            <li class="header-cart-item flex-w flex-t m-b-12">
                                <div class="header-cart-item-img">

                             <img src="{{ asset('images/products/' . $item->attributes->image) }}" style="height: 80px;width: 60px;" alt="IMG">

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
                            Total: {{ Cart::getsubTotal() }} BDT
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


