@extends ('frontend.layout.master')

@section ('content')
<!-- breadcrumb -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92 bggrad">
  <h2 class="ltext-105 cl0 txt-center lineunder">
    Shopping Cart
  </h2>
</section>
<div class="container ">
  <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
    <a href="{{ route('index') }}" class="stext-109 cl8 hov-cl1 trans-04">
      Home
      <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
    </a>

    <span class="stext-109 cl4">
      Shopping Cart
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
        @if (Cart::isEmpty())
            <h1 class="alert">Your shopping cart is empty.</h1>
        @else
      <div class="col-lg-10 col-xl-12 m-lr-auto m-b-50">
        <div class="m-l-25 m-r-38 m-lr-0-xl">
          <div class="wrap-table-shopping-cart">
            <table class="table-shopping-cart">
              <tr class="table_head">
                <th class="column-3">Product</th>
                <th class="column-3">Price</th>
                <th class="column-3">Quantity</th>
                <th class="column-3">Size</th>
                <th class="column-3">Total</th>
                <th class="column-3"></th>
              </tr>
@foreach(Cart::getcontent() as $item)
              <tr class="table_row">
                <td class="column-3">
                    {{ $item->name }}
                </td>
                <td class="column-3">{{ $item->price }}</td>
                <td class="column-3">{{ $item->quantity }}</td>
                <td class="column-3">{{ $item->attributes->size }}</td>
                <td class="column-3">{{ number_format($item->price * $item->quantity) }}</td>
                <td class="column-3"><a href="{{ route('product.cart.remove', $item->id) }}" class="btn btn-outline-danger"><i class="fa fa-times"></i> </a></td>
              </tr>

                @endforeach
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

          <div class="flex-w flex-t bor12 p-t-15 p-b-30">
            <div class="size-208 w-full-ssm">
              <span class="stext-110 cl2">
                Shipping:
              </span>
            </div>

            <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
              <p class="stext-111 cl6 p-t-2">
                There are no shipping methods available. Please double check your address, or contact us if you need any help.
              </p>

              <div class="p-t-15">
                <span class="stext-112 cl8">
                  Calculate Shipping
                </span>

                <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
                  <select class="js-select2" name="time">
                    <option>Select an Option</option>
                    <option>Dhaka</option>
                    <option>Other</option>
                  </select>
                  <div class="dropDownSelect2"></div>
                </div>

                <div class="bor8 bg0 m-b-12">
                  <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="state" placeholder="State /  country">
                </div>

                <div class="bor8 bg0 m-b-22">
                  <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="postcode" placeholder="Postcode / Zip">
                </div>

                <div class="flex-w">
                  <div class="flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer">
                    Update Totals
                  </div>
                </div>

              </div>
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
                {{ Cart::getsubtotal() +80 }}
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
            @endif
    </div>
  </div>
</div>


@endsection
