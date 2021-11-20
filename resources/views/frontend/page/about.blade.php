
@extends ('frontend.layout.master')
@section ('content')
<section class="bg-img1 txt-center p-lr-15 p-tb-92 bggrad">
  <h2 class="ltext-105 cl0 txt-center lineunder">
    About
  </h2>
</section>

<!-- TODO: Create mobile and pc view for About page. -->
<!-- Content page -->
<section class="bg0 p-t-75 p-b-120">
    <div class="container">
        <div class="row p-b-148">
            <div class="col-md-7 col-lg-8">
                <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                    <h3 class="mtext-111 cl2 p-b-16">
                        Our Story
                    </h3>

                    <p class="stext-113 cl6 p-b-26">
                        Doogdoogi is an online fashion house in Bangladesh. We offer a huge range of men's and women's attire for different festivals, seasons ,formal and informal collection.
                    </p>

                    <p class="stext-113 cl6 p-b-26">
                        Doogdoogi aims to deliver a robust solution to the fashion needs of bangladesh using a mix of traditional and western wear which are designed and modified with our in house designs. We aim to create a new range of fusions which will combine our traditional clothing with modern designs.
                    </p>

                    <p class="stext-113 cl6 p-b-26">
                        Any questions? Let us know in store at Plot# 51 Road# 10 Sector# 10 Uttara Model Town, Dhaka-1230.<br>
                        Call us on: 01813-065795.<br>
                        To ask from this web site follow this  <a href="{{route('contact')}}"> link </a>

                    </p>
                </div>
            </div>

            <div class="col-11 col-md-5 col-lg-4 m-lr-auto">
                <div class="how-bor1 ">
                    <div class="hov-img0">
                        <img src="images/about-01.jpg" alt="IMG">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="order-md-2 col-md-7 col-lg-8 p-b-30">
                <div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
                    <h3 class="mtext-111 cl2 p-b-16">
                        Our Mission
                    </h3>

                    <p class="stext-113 cl6 p-b-26">
                        Our Mission is create a one stop fashion solution which focuses on bangladeshi traditional clothing and to help revive our old traditional clothing industries by reintroducing them with modern day designs and technology.

                    </p>

                    <div class="bor16 p-l-29 p-b-9 m-t-22">
                        <p class="stext-114 cl6 p-r-40 p-b-11">
                            Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn't really do it, they just saw something. It seemed obvious to them after a while.
                        </p>

                        <span class="stext-111 cl8">
								- Steve Job’s
							</span>
                    </div>
                </div>
            </div>

            <div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
                <div class="how-bor2">
                    <div class="hov-img0">
                        <img src="images/about-02.jpg" alt="IMG">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
