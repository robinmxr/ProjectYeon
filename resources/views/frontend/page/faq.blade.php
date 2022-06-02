
@extends ('frontend.layout.master')
@section('pagetitle')
    FAQ
@endsection
@section ('content')
<section class="bg-img1 txt-center p-lr-15 p-tb-92 bggrad">
  <h2 class="ltext-105 cl0 txt-center lineunder">
   FAQ
  </h2>
</section>
<!-- TODO: Create mobile and pc view for FAQ page. -->

<!-- Content page -->
<section class="bg0 p-t-104 p-b-116">
  <div class="container">
    <div class="flex-w flex-tr">
      <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
        <form method="post" action="{{ route('checkout.place.order') }}">
            @csrf
          <h4 class="mtext-105 cl2 txt-center p-b-30">
            Complete Order Details
          </h4>

          <div class="bor8 m-b-20 how-pos4-parent">
            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="name" placeholder="Your Full Name">

          </div>
            <div class="bor8 m-b-20 how-pos4-parent">
                <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="country" placeholder="Country">

            </div>
            <div class="bor8 m-b-20 how-pos4-parent">
                <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="city" placeholder="City">

            </div>
            <div class="bor8 m-b-20 how-pos4-parent">
                <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="address" placeholder="Full Address">

            </div>
            <div class="bor8 m-b-20 how-pos4-parent">
                <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="phone_number" placeholder="Contact Number">

            </div>


          <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
            Submit Order
          </button>
        </form>
      </div>

      <div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
        <div class="flex-w w-full p-b-42">
          <span class="fs-18 cl5 txt-center size-211">
            <span class="lnr lnr-map-marker"></span>
          </span>

          <div class="size-212 p-t-2">
            <span class="mtext-110 cl2">
              Address
            </span>

            <p class="stext-115 cl6 size-213 p-t-18">
              Coza Store Center 8th floor, 379 Hudson St, New York, NY 10018 US
            </p>
          </div>
        </div>

        <div class="flex-w w-full p-b-42">
          <span class="fs-18 cl5 txt-center size-211">
            <span class="lnr lnr-phone-handset"></span>
          </span>

          <div class="size-212 p-t-2">
            <span class="mtext-110 cl2">
              Lets Talk
            </span>

            <p class="stext-115 cl1 size-213 p-t-18">
              +1 800 1236879
            </p>
          </div>
        </div>

        <div class="flex-w w-full">
          <span class="fs-18 cl5 txt-center size-211">
            <span class="lnr lnr-envelope"></span>
          </span>

          <div class="size-212 p-t-2">
            <span class="mtext-110 cl2">
              Sale Support
            </span>

            <p class="stext-115 cl1 size-213 p-t-18">
              contact@example.com
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
