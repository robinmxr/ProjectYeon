<!-- Slider -->
@extends ('frontend.layout.master')
@section('pagetitle')
    Home
@endsection
@section ('content')
<section class="section-slide">
  <div class="wrap-slick1 rs2-slick1">
    <div class="slick1">
     @foreach($images as $image)
            <div class="item-slick1 bg-overlay1 herobg" style="--bgi: url({{ asset('images/cover/'.$image->image) }});">

            </div>
        @endforeach


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
          <img src="images/women.png" alt="IMG-BANNER">

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
          <img src="images/falgun.jpg" alt="IMG-BANNER">

          <a href="{{ route('product.tag',['tag'=>'Falgun Lookbook']) }}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
            <div class="block1-txt-child1 flex-col-l">
              <span class="block1-name ltext-102 trans-04 p-b-8">
               Falgun Lookbook
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
          <img src="images/women.png" alt="IMG-BANNER">

          <a href="{{ route('product.tag',['tag'=>'Winter Collection']) }}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
            <div class="block1-txt-child1 flex-col-l">
              <span class="block1-name ltext-102 trans-04 p-b-8">
                Winter Collection
              </span>

              <span class="block1-info stext-102 trans-04">
                Winter 2021
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
          <img src="images/women.png" alt="IMG-BANNER">

          <a href="{{ route('product.tag',['tag'=>'Durga Puja Collection']) }}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
            <div class="block1-txt-child1 flex-col-l">
              <span class="block1-name ltext-102 trans-04 p-b-8">
                Durga Puja Collection
              </span>

              <span class="block1-info stext-102 trans-04">
                Fall 2021
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
                            @foreach($featured as $product)
                                <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
                                    <!-- Block2 -->
                                    <a href="{{ route('product.view',['slug'=>$product->slug,'id'=>$product->id]) }}">
                                        <div class="block2">
                                            <div class="block2-pic hov-img0">

                                                <img src="{{ asset('images/products/' . $product->image[0]->image) }}" alt="IMG-PRODUCT">

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
