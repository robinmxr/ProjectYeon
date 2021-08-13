<!-- Slider -->
@extends ('frontend.layout.master')

@section ('content')




    <section class="bg-img1 txt-center p-lr-15 p-tb-92 bggrad">
        <h2 class="ltext-105 cl0 txt-center lineunder">
            DoogDoogi
        </h2>
    </section>
    <div class="container ">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
    <div class="alert alert-dark size-212">
        Your Order Has Been Submitted.<br>
        Our Representative will call you in a while to confirm the order.<br>
        Your Order Id : {{ $order->order_number }}
    </div>
</div>
    </div>
        <!--div class="dasbordleft" > <p> somedjeifnfoiebibvfewibn</p></div-->
<!--
    <div class="bg-img1 txt-center p-lr-15 p-tb-40 bggrad" >
        <h2 class="ltext-201 cl0 txt-left p-l-102 ">
            DASHBOARD
        </h2>

        <p class="ltext-202 txt-left p-l-102 p-tb-40">
            Hello Kuddus!
        </p>


        <div>
            <p class="stext-117 txt-left p-l-102"> Orders Completed: 224</p>
        </div>
    </div>
-->



















    <!-- Product -->



    <!-- Modal1 -->


@endsection
