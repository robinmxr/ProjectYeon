<div class="bg0 m-t-23 p-b-140">
    <div class="container">
        <div class="p-b-32">
            <h3 class="ltext-105 cl5 txt-center respon1">
                Latest Arrivals
            </h3>
        </div>
        <div class="flex-w flex-sb-m p-b-32">

            <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                <button class="bor11 stext-109 btn-col-bg-red size-107 m-2 hov-btn1  trans-04" data-filter="*">
                    All Products
                </button>

                <button class="bor11  stext-109 btn-col-bg-red size-107 m-2 hov-btn1  trans-04" data-filter=".women">
                    Women
                </button>

                <button class="bor11 stext-109 btn-col-bg-red size-107 m-2 hov-btn1  trans-04" data-filter=".men">
                    Men
                </button>

                <button class="bor11 stext-109 btn-col-bg-red size-107 m-2 hov-btn1  trans-04" data-filter=".etc">
                    Accesories
                </button>

            </div>
            <div class="flex-w flex-c-m m-tb-10">


                <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                    <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                    <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                    Search
                </div>
            </div>

            <!-- Search product -->
            <div class="dis-none panel-search w-full p-t-10 p-b-15">
                <div class="bor8 dis-flex p-l-15">
                    <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                    <form action="{{ route('search') }}" method="get">
                        @csrf
                        <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="name" placeholder="Search">

                    </form>
                </div>
            </div>

            <!-- Filter -->

        </div>


        <div class="row isotope-grid">
            @foreach($products ?? '' as $product)


                <div class="col-sm-4 col-md-3 col-lg-3 p-b-35 isotope-item {{ $product->category->category_type }}">


                    <!-- Block2 -->
                    <a href="{{ route('product.view',['slug'=>$product->slug,'id'=>$product->id]) }}">
                        <div class="block2">
                            <div class="block2-pic hov-img0">

                                        <img src="{{ asset('images/products/' . $product->image[0]->image) }}" alt="IMG-PRODUCT">


                                @if($product->quantity>0)
                                    <div class="block2-btn flex-c-m stext-103 cl0 size-102 bg7 bor2 hov-btn3 p-lr-15 trans-04" >
                                Add to Cart
                                    </div>
                                @else
                                <div class="block2-btn flex-c-m stext-103 cl1 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04" >
                                Out of Stock
                                </div>
                                    @endif



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

        <div class="flex-c-m flex-w w-full p-t-45">
            <a href="{{ route('products') }}" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                Load More
            </a>
        </div>


    </div>
</div>
