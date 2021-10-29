
@extends ('frontend.layout.master')
@section('pagetitle')
    {{ $product->title }}
@endsection
@section ('content')
    <section class="bg-img1 txt-center p-lr-15 p-tb-92 bggrad">
        <h2 class="ltext-105 cl0 txt-center lineunder">
            Product
        </h2>
    </section>

<div class="container">
  <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg" >
    <a href="{{ route('index') }}" class="stext-109 cl8 hov-cl1 trans-04">
      Home
      <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
    </a>

    <a href="{{ route('products')}}" class="stext-109 cl8 hov-cl1 trans-04">
      {{ $product->category->category_type }}
      <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
    </a>

    <span class="stext-109 cl4">
      {{ $product->title }}
    </span>
  </div>
</div>

    @if (Session::has('success'))
        <div>
            <p style="background-color: #0c525d" align="center">{{ Session::get('success') }}</p>
        </div>

    @endif
<!-- Product Detail -->
<section class="sec-product-detail bg0 p-t-65 p-b-60">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-7 p-b-30">
        <div class="p-l-25 p-r-30 p-lr-0-lg">
          <div class="wrap-slick3 flex-sb flex-w">
            <div class="wrap-slick3-dots"></div>
            <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

            <div class="slick3 gallery-lb">
                @foreach($product->image as $image)
              <div  class="item-slick3 " data-thumb="{{ asset('images/products/' . $image->image) }}">
                <div class="wrap-pic-w pos-relative">
                  <img  src="{{ asset('images/products/' . $image->image) }}" alt="IMG-PRODUCT">

                  <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{ asset('images/products/' . $image->image) }}">
                    <i class="fa fa-expand"></i>
                  </a>
                </div>
              </div>
                @endforeach



            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-5 p-b-30">
        <div class="p-r-50 p-t-5 p-lr-0-lg">

           <h4 class="mtext-105 cl2  js-name-detail p-b-14">
                {{ $product->title }}

            </h4>
          <span class="mtext-106 cl2">
            {{ $product->price }} Taka
          </span>
            <p class="stext-102 cl3 p-t-23">
                {{ $product->description }}
            </p>

            <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04" >
                @if($product->quantity>0)
                    Available
                @else
                    Stock Out
                @endif
            </button>

          <!--  -->
          <div class="p-t-33">
            <div class="flex-w flex-r-m p-b-10">
              <div class="size-203 flex-c-m respon6">
                Size
              </div>

              <div class="size-204 respon6-next">
                <div class="rs1-select2 bor8 bg0">
                  <select class="js-select2" name="time" id="sizeprod">

                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                  </select>
                  <div class="dropDownSelect2"></div>
                </div>
              </div>
            </div>


            <div class="flex-w flex-r-m p-b-10">
              <div class="size-204 flex-w flex-m respon6-next">
                <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                  <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                    <i class="fs-16 fa fa-minus"></i>
                  </div>

                  <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product"  id="quantity" value="1">

                  <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                    <i class="fs-16 fa fa-plus"></i>
                  </div>
                </div>
                 @if($product->quantity>0)

                  <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail" onclick="getMessage('{{$product->id}}')">
                                    Add to cart
                                </button>
                                @else
                                <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                   Not Available
                                </button>
                                @endif

              </div>
            </div>
          </div>

            <!-- -->

            <!-- wild testing
            <form method="post" action="{{route('product.cart.add')}}">
                @csrf
                <input type="text" plcaeholder="size" name="id" id="id" value="{{$product->id}}" />
                <input type="text" plcaeholder="size" name="size" id="size" value="S" />
                <input type="text" plcaeholder="Quantity" name="quantity" id="quantity"  value="1" />
                <button type="submit" plcaeholder="size">Submit</button>
            </form>

            -->
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

  <div class="bor10 m-t-50 p-t-43 p-b-40">
      <!-- Tab01 -->
      <div class="tab01">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item p-b-10">
            <a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
          </li>

          <li class="nav-item p-b-10">
            <a class="nav-link" data-toggle="tab" href="#information" role="tab">Additional information</a>
          </li>

          <li class="nav-item p-b-10">
            <a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews</a>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content p-t-43">
          <!-- - -->
          <div class="tab-pane fade show active" id="description" role="tabpanel">
            <div class="how-pos2 p-lr-15-md">
              <p class="stext-102 cl6">
                  {{ $product->description }}
              </p>
            </div>
          </div>

          <!-- - -->
          <div class="tab-pane fade" id="information" role="tabpanel">
            <div class="row">
              <div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
                <ul class="p-lr-28 p-lr-15-sm">
                  <li class="flex-w flex-t p-b-7">
                    <span class="stext-102 cl3 size-205">
                     Material
                    </span>

                    <span class="stext-102 cl6 size-206">
                      {{ $product->material }}
                    </span>
                  </li>

                  <li class="flex-w flex-t p-b-7">
                    <span class="stext-102 cl3 size-205">
                      Value Addition
                    </span>

                    <span class="stext-102 cl6 size-206">
                     {{ $product->value_addition }}
                    </span>
                  </li>

                  <li class="flex-w flex-t p-b-7">
                    <span class="stext-102 cl3 size-205">
                      Care
                    </span>

                    <span class="stext-102 cl6 size-206">
                     {{ $product->care }}
                    </span>
                  </li>

                  <li class="flex-w flex-t p-b-7">
                    <span class="stext-102 cl3 size-205">
                      Color
                    </span>

                    <span class="stext-102 cl6 size-206">
                      {{ $product->color }}
                    </span>
                  </li>


                </ul>
              </div>
            </div>
          </div>

          <!-- - -->
          <div class="tab-pane fade" id="reviews" role="tabpanel">
            <div class="row">
              <div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
                <div class="p-b-30 m-lr-15-sm">
                  <!-- Review -->
                  <div class="flex-w flex-t p-b-68">
                      @foreach($review as $rev)
                    <div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
                      <img src="{{ asset('images/avatar-01.jpg') }}" alt="AVATAR">
                    </div>

                    <div class="size-207">
                      <div class="flex-w flex-sb-m p-b-17">
                        <span class="mtext-107 cl2 p-r-20">
                          {{ $rev->user->name }}
                        </span>


                      </div>

                      <p class="stext-102 cl6">
                       {{ $rev->review }}
                      </p>
                    </div>
                      @endforeach
                  </div>
@auth
                  <!-- Add review -->
                  <form method="post" action="{{ route('product.review',['slug'=>$product->slug,'id'=>$product->id]) }}" class="w-full">
                      @csrf
                    <h5 class="mtext-108 cl2 p-b-7">
                      Add a review
                    </h5>




                     <!-- <div class="container d-flex justify-content-center mt-200">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="stars">
                                      <form action="">
                                          <input class="star star-5" id="star-5" type="radio" name="star" />
                                          <label class="star star-5" for="star-5"></label>
                                          <input class="star star-4" id="star-4" type="radio" name="star" />
                                          <label class="star star-4" for="star-4"></label>
                                          <input class="star star-3" id="star-3" type="radio" name="star" />
                                          <label class="star star-3" for="star-3"></label>
                                          <input class="star star-2" id="star-2" type="radio" name="star" />
                                          <label class="star star-2" for="star-2"></label>
                                          <input class="star star-1" id="star-1" type="radio" name="star" />
                                          <label class="star star-1" for="star-1"></label>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>-->
                    <div class="row p-b-25">
                      <div class="col-12 p-b-5">
                        <label class="stext-102 cl3" for="review">Your review</label>


                        <textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review" name="review"></textarea>
                      </div>





                    <button class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10">
                      Submit
                    </button>

                    </div>
                  </form>
    @elseauth
                    <h1>You have to be logged in to post a review</h1>
    @endauth
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
    <span class="stext-107 cl6 p-lr-25">
      SKU: {{ $product->code }}
    </span>

    <span class="stext-107 cl6 p-lr-25">
      Categories: {{ $product->category->category_type }}
    </span>
  </div>
</section>


<!-- Related Products -->
<section class="sec-relate-product bg0 p-t-45 p-b-105">
  <div class="container">
    <div class="p-b-45">
      <h3 class="ltext-106 cl5 txt-center">
        Related Products
      </h3>
    </div>

    <!-- Slide2 -->
    <div class="wrap-slick2">
      <div class="slick2">
          @foreach($related as $relproduct)
        <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
          <!-- Block2 -->
          <a href="{{ route('product.view',['slug'=>$relproduct->slug,'id'=>$relproduct->id]) }}">
          <div class="block2">
            <div class="block2-pic hov-img0">

                        <img src="{{ asset('images/products/' . $relproduct->image[0]->image) }}" alt="IMG-PRODUCT">


            </div>

            <div class="block2-txt flex-w flex-t p-t-14">
              <div class="block2-txt-child1 flex-col-l ">
                <a href="#" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                  {{ $relproduct->title }}
                </a>

                <span class="stext-105 cl3">
                  {{ $relproduct->price }}
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
</section>
<div class="btn-back-to-top" id="myBtn">
  <span class="symbol-btn-back-to-top">
    <i class="fa fa-arrow-up"></i>
  </span>
</div>

<!-- Modal1 -->
@endsection
