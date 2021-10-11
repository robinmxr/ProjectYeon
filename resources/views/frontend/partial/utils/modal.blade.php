
<div class="container">
    <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
        <div class="row">
            <div class="col-md-6 col-lg-5 p-b-30">
                <div class="p-l-25 p-r-30 p-lr-0-lg">
                    <div class="wrap-slick3 flex-sb flex-w">
                        <div class="wrap-pic-w pos-relative">
                            @php $i=1; @endphp
                            @foreach( $product->image as $image )
                                @if ($i>0)
                                    <img src="{{ asset('images/products/' . $image->image) }}" alt="IMG-PRODUCT">
                                @endif
                                @php $i--; @endphp
                            @endforeach

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


                                <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                    <a href="{{ route('product.view',$product->slug) }}">View Product</a>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!--  -->
                    <div class="flex-w flex-m p-l-100 p-t-40 respon7">


                        <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
                            <i class="fa fa-facebook"></i>
                        </a>

                        <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
                            <i class="fa fa-twitter"></i>
                        </a>

                        <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        </div>


</div>
