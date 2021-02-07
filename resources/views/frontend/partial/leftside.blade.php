





        <aside class="wrap-sidebar js-sidebar">
            <div class="s-full js-hide-sidebar"></div>

            <div class="sidebar flex-col-l p-t-22 p-b-25">
                <div class="flex-r w-full p-b-30 p-r-27">
                    <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-sidebar">
                        <i class="zmdi zmdi-close"></i>
                    </div>
                </div>

                <div class="sidebar-content flex-w w-full p-lr-65 js-pscroll">
                    <ul class="sidebar-link w-full">
                        <li class="p-b-13">
                            <a href="index.html" class="stext-102 cl2 hov-cl1 trans-04">
                                Shop Home
                            </a>
                        </li>

                        <li class="p-b-13">
                            <a href="#" class="stext-102 cl2 hov-cl1 trans-04">
                                My Wishlist
                            </a>
                        </li>

                        <li class="p-b-13">
                            <a href="#" class="stext-102 cl2 hov-cl1 trans-04">
                                My Account
                            </a>
                        </li>

                        <li class="p-b-13">
                            <a href="#" class="stext-102 cl2 hov-cl1 trans-04">
                                Track Oder
                            </a>
                        </li>

                        <li class="p-b-13">
                            <a href="#" class="stext-102 cl2 hov-cl1 trans-04">
                                Refunds
                            </a>
                        </li>

                        <li class="p-b-13">
                            <a href="#" class="stext-102 cl2 hov-cl1 trans-04">
                                Help & FAQs
                            </a>
                        </li>
                        <li class="p-b-13">
                            <a  href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>

                    <div class="sidebar-gallery w-full p-tb-30">
        <span class="mtext-101 cl5">
          @ CozaStore
        </span>


                    </div>


                    <div class="sidebar-gallery w-full">
        <span class="mtext-101 cl5">
          About Us
        </span>

                        <p class="stext-108 cl6 p-t-27">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur maximus vulputate hendrerit. Praesent faucibus erat vitae rutrum gravida. Vestibulum tempus mi enim, in molestie sem fermentum quis.
                        </p>
                    </div>
                </div>
            </div>
        </aside>


        <!-- Cart -->
        <div class="wrap-header-cart js-panel-cart">
            <div class="s-full js-hide-cart"></div>

            <div class="header-cart flex-col-l p-l-65 p-r-25">
                <div class="header-cart-title flex-w flex-sb-m p-b-8">
      <span class="mtext-103 cl2">
        Your Cart
      </span>

                    <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                        <i class="zmdi zmdi-close"></i>
                    </div>
                </div>

                <div class="header-cart-content flex-w js-pscroll">
                    <ul class="header-cart-wrapitem w-full">
                        <li class="header-cart-item flex-w flex-t m-b-12">
                            <div class="header-cart-item-img">
                                <img src="{{ asset('images/item-cart-01.jpg') }}" alt="IMG">
                            </div>

                            <div class="header-cart-item-txt p-t-8">
                                <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                    White Shirt Pleat
                                </a>

                                <span class="header-cart-item-info">
              1 x $19.00
            </span>
                            </div>
                        </li>

                        <li class="header-cart-item flex-w flex-t m-b-12">
                            <div class="header-cart-item-img">
                                <img src="{{ asset('images/item-cart-02.jpg') }}" alt="IMG">
                            </div>

                            <div class="header-cart-item-txt p-t-8">
                                <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                    Converse All Star
                                </a>

                                <span class="header-cart-item-info">
              1 x $39.00
            </span>
                            </div>
                        </li>

                        <li class="header-cart-item flex-w flex-t m-b-12">
                            <div class="header-cart-item-img">
                                <img src="{{ asset('images/item-cart-03.jpg') }}" alt="IMG">
                            </div>

                            <div class="header-cart-item-txt p-t-8">
                                <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                    Nixon Porter Leather
                                </a>

                                <span class="header-cart-item-info">
              1 x $17.00
            </span>
                            </div>
                        </li>
                    </ul>

                    <div class="w-full">
                        <div class="header-cart-total w-full p-tb-40">
                            Total: $75.00
                        </div>

                        <div class="header-cart-buttons flex-w w-full">
                            <a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                                View Cart
                            </a>

                            <a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                                Check Out
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>









