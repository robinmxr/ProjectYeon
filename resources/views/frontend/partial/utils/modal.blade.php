
<div class="container">
    <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
        <div class="row">
            <div class="col-md-6 col-lg-5 p-b-30">
                <div class="p-l-25 p-r-30 p-lr-0-lg">
                    <div class="wrap-slick3 flex-sb flex-w">
                        <div class="wrap-pic-w pos-relative">

                                    <img src="{{ asset('images/products/' . $product->image[0]->image) }}" alt="IMG-PRODUCT">


                        </div>
            </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-5 p-b-30">
                <div class="p-r-50 p-t-5 p-lr-0-lg">
                    <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                        {{ $product->title }}
                    </h4>

                    <span class="mtext-106 cl2">
              {{ $product->price }}
            </span>

                    <p class="stext-102 cl3 p-t-23">
                        {{ $product->description }}
                    </p>

                    <!--  -->
                    <div class="p-t-33">


                        <div class="flex-w flex-r-m p-b-10">
                            <div class="size-204 flex-w flex-m respon6-next">

                                <a href="{{ route('product.view',$product->slug) }}">
                                <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                    View Product
                                </button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!--  -->
                    <div class="flex-w flex-m p-l-100 p-t-40 respon7">


                        <a href="https://facebook.com/doogdoogishop" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Our Facebook">
                            <i class="fa fa-facebook"></i>
                        </a>

                        <a href="https://instagram.com/doogdoogishop" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Our Instagram">
                            <i class="fa fa-instagram"></i>
                        </a>


                    </div>
                </div>
            </div>
        </div>

        </div>


</div>
