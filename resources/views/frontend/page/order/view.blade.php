@extends ('frontend.layout.master')
@section('pagetitle')
    My Order
@endsection

@section ('content')
    <!-- breadcrumb -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92 bggrad">
        <h2 class="ltext-105 cl0 txt-center lineunder">
            View Order
        </h2>
    </section>
    <div class="container ">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="{{ route('index') }}" class="stext-109 cl8 hov-cl1 trans-04">
                Home
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
      Order
    </span>
        </div>
        <div class="col-sm-12">
            @if (Session::has('message'))
                <p class="alert ">{{ Session::get('message') }}</p>
            @endif
        </div>
    </div>


    <!-- Shoping Cart -->
    <div class="bg0 p-t-75 p-b-85">
        <div class="container">
            <div class="row">

                    <div class="col-lg-10 col-xl-12 m-lr-auto m-b-50">
                        <div class="m-l-25 m-r-38 m-lr-0-xl">
                            <div class="wrap-table-shopping-cart">
                                <table class="table-shopping-cart">
                                    <tr class="table_head">
                                        <th class="column-3">Product Title</th>
                                        <th class="column-3">Quantity</th>
                                        <th class="column-3">Price</th>
                                        <th class="column-3"></th>
                                        <th class="column-3"></th>

                                    </tr>
                                    @foreach($productorders as $productsord)
                                        <tr class="table_row">
                                            <td class="column-3">
                                                {{ $productsord->title }}
                                            </td>
                                            <td class="column-3">{{ $productsord->quantity }}</td>
                                            <td class="column-3">{{ $productsord->price }}</td>
                                            <td class="column-3"></td>
                                            <td class="column-3"></td>

                                        </tr>

                                    @endforeach
                                    <tr class="table_row">
                                        <td class="column-3">To : {{ $order->name }}</td>
                                        <td class="column-3">Address : {{ $order->address }}</td>
                                        <td class="column-3">Total : {{ $order->total }}</td>
                                        <td class="column-3">{{ $order->payment_status }}</td>
                                        <td class="column-3">{{ $order->order_status }}</td>
                                    </tr>
                                </table>
                            </div>

                            <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                                <!--<div class="flex-w flex-m m-r-20 m-tb-5">
                                  <input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Coupon Code">

                                  <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                                    Apply coupon
                                  </div>
                                </div>
                                -->
                                <a href="{{ route('product.cart.clear') }}">
                                    <div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                                        Clear Cart
                                    </div>
                                </a>


                            </div>
                        </div>
                    </div>


                    <div class="col-sm-auto col-lg-auto col-xl-auto m-lr-auto m-b-50">
                        <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                            <h4 class="mtext-109 cl2 p-b-30">
                                Cart Totals
                            </h4>

                            <div class="flex-w flex-t bor12 p-b-13">
                                <div class="size-208">
              <span class="stext-110 cl2">
                Subtotal:
              </span>
                                </div>

                                <div class="size-209">
              <span class="mtext-110 cl2">
               {{ Cart::getsubtotal() }}
              </span>
                                </div>
                            </div>



                            <div class="flex-w flex-t p-t-27 p-b-33">
                                <div class="size-208">
              <span class="mtext-101 cl2">
                Total:
              </span>
                                </div>

                                <div class="size-209 p-t-1">
              <span class="mtext-110 cl2">
                {{ Cart::getsubtotal() }} + Delivery Charge
              </span>
                                </div>
                            </div>
                            <a href="{{ route('checkout.index') }}" >
                                <div class="flex-w" >
                                    <button class="flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer">
                                        Proceed to Checkout
                                    </button>
                                </div></a>
                        </div>
                    </div>

            </div>
        </div>
    </div>


@endsection
