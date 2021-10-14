<!-- Slider -->
@extends ('frontend.layout.master')
@section('pagetitle')
    Home
@endsection
@section ('content')
<section class="section-slide">
  <div class="wrap-slick1 rs2-slick1">
    <div class="slick1">
      <div class="item-slick1 bg-overlay1" style="background-image: url(images/slide.jpg);">
        <div class="container h-full">
          <div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
            <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
              <span class="ltext-202 txt-center cl0 respon2">
                Saree Collection 2021
              </span>
            </div>

            <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
              <h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
                New arrivals
              </h2>
            </div>

            <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
              <a href="{{ route('products') }}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                Shop Now
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="item-slick1 bg-overlay1" style="background-image: url(images/slide1.png);" >
        <div class="container h-full">
          <div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
            <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
              <span class="ltext-202 txt-center cl0 respon2">
                Festive Season
              </span>
            </div>

            <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
              <h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
                Kurti and Dresses
              </h2>
            </div>

            <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
              <a href="{{ route('products') }}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                Shop Now
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="item-slick1 bg-overlay1" style="background-image: url(images/slide2.png);">
        <div class="container h-full">
          <div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
            <div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
              <span class="ltext-202 txt-center cl0 respon2">
                Panjabi Collection
              </span>
            </div>

            <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
              <h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
                Mens
              </h2>
            </div>

            <div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
              <a href="{{ route('products') }}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                Shop Now
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>


</section>


<!-- Banner -->
<div class="sec-banner bg0 p-t-95 p-b-55">
  <div class="container">
    <div class="row">
      <div class="col-md-6 p-b-30 m-lr-auto">
        <!-- Block1 -->
        <div class="block1 wrap-pic-w">
          <img src="images/banner-04.jpg" alt="IMG-BANNER">

          <a href="{{ route('categories.type','women') }}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
            <div class="block1-txt-child1 flex-col-l">
              <span class="block1-name ltext-102 trans-04 p-b-8">
                Women
              </span>

              <span class="block1-info stext-102 trans-04">
                New Trend
              </span>
            </div>

            <div class="block1-txt-child2 p-b-4 trans-05">
              <div class="block1-link stext-101 cl0 trans-09">
                Shop Now
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-md-6 p-b-30 m-lr-auto">
        <!-- Block1 -->
        <div class="block1 wrap-pic-w">
          <img src="images/banner-05.jpg" alt="IMG-BANNER">

          <a href="{{ route('categories.type','men') }}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
            <div class="block1-txt-child1 flex-col-l">
              <span class="block1-name ltext-102 trans-04 p-b-8">
                Men
              </span>

              <span class="block1-info stext-102 trans-04">
                New Trend
              </span>
            </div>

            <div class="block1-txt-child2 p-b-4 trans-05">
              <div class="block1-link stext-101 cl0 trans-09">
                Shop Now
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 p-b-30 m-lr-auto">
        <!-- Block1 -->
        <div class="block1 wrap-pic-w">
          <img src="images/banner-07.jpg" alt="IMG-BANNER">

          <a href="{{ route('categories.type','etc') }}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
            <div class="block1-txt-child1 flex-col-l">
              <span class="block1-name ltext-102 trans-04 p-b-8">
                Watches
              </span>

              <span class="block1-info stext-102 trans-04">
                Spring 2021
              </span>
            </div>

            <div class="block1-txt-child2 p-b-4 trans-05">
              <div class="block1-link stext-101 cl0 trans-09">
                Shop Now
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 p-b-30 m-lr-auto">
        <!-- Block1 -->
        <div class="block1 wrap-pic-w">
          <img src="images/banner-08.jpg" alt="IMG-BANNER">

          <a href="{{ route('categories.type','etc') }}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
            <div class="block1-txt-child1 flex-col-l">
              <span class="block1-name ltext-102 trans-04 p-b-8">
                Bags
              </span>

              <span class="block1-info stext-102 trans-04">
                Spring 2018
              </span>
            </div>

            <div class="block1-txt-child2 p-b-4 trans-05">
              <div class="block1-link stext-101 cl0 trans-09">
                Shop Now
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 p-b-30 m-lr-auto">
        <!-- Block1 -->
        <div class="block1 wrap-pic-w">
          <img src="images/banner-09.jpg" alt="IMG-BANNER">

          <a href="{{ route('categories.type','etc') }}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
            <div class="block1-txt-child1 flex-col-l">
              <span class="block1-name ltext-102 trans-04 p-b-8">
                Accessories
              </span>

              <span class="block1-info stext-102 trans-04">
                Spring 2018
              </span>
            </div>

            <div class="block1-txt-child2 p-b-4 trans-05">
              <div class="block1-link stext-101 cl0 trans-09">
                Shop Now
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="sec-product bg0 p-t-100 p-b-50">
    <div class="container">
        <div class="p-b-32">
            <h3 class="ltext-105 cl5 txt-center respon1">
                Featured Products
            </h3>
        </div>


        <!-- Tab01 -->
        <div class="tab01">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item p-b-10">
                    <a class="nav-link active" data-toggle="tab" href="#best-seller" role="tab">Best Seller</a>
                </li>


            </ul>
            <!-- Nav tabs -->


            <!-- Tab panes -->
            <div class="tab-content p-t-50">
                <!-- - -->
                <div class="tab-pane fade show active" id="best-seller" role="tabpanel">
                    <!-- Slide2 -->
                    <div class="wrap-slick2">
                        <div class="slick2">
                            @foreach($products as $product)
                            <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
                                <!-- Block2 -->
                                <a href="{{ route('product.view',$product->slug) }}">
                                    <div class="block2">
                                        <div class="block2-pic hov-img0">

                                            <img src="{{ asset('images/products/' . $product->image[0]->image) }}" alt="IMG-PRODUCT">

                                            <a href="#productmodal{{ $product->id }}" data-toggle="modal" data-target="#productmodal{{ $product->id }}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                                Quick View
                                            </a>
                                            <div class="modal fade" id="productmodal{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">


                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">

                                                        <div class="modal-body">
                                                            @include('frontend.partial.utils.modal')
                                                        </div>
                                                        <div class="model-footer">
                                                            <button type="button" class="close" data-dismiss="modal"><i style="font-size: 40px;" class="fa fa-times" aria-hidden="true"></i></button>
                                                        </div>

                                                    </div>
                                                </div>



                                            </div>



                                        </div>


                                        <div class="block2-txt flex-w flex-t p-t-14">
                                            <div class="block2-txt-child1 flex-col-l ">
								<span class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									{{ $product->title }}
								</span>

                                                <span class="stext-105 cl3">
									Tk {{ $product->price }}
								</span>
                                            </div>


                                        </div>
                                    </div>


                                </a>
                            </div>
                            @endforeach


                        </div>
                    </div>
                </div>

                <!-- - -->

            </div>
        </div>

    </div>
</section>


<!-- Product -->
@include('frontend.partial.product')
<!-- Back to top -->


<!-- Modal1 -->


@endsection
