@extends ('frontend.layout.master')
@section('pagetitle')
    Search
@endsection
@section ('content')

    <!-- Product -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92 bggrad">
        <h2 class="ltext-105 cl0 txt-center lineunder">
            Search Results
        </h2>
    </section>

    <div class="bg0 m-t-23 p-b-140">
        <div class="container">
            <div class="p-b-10">
                <h3 class="ltext-103 cl5">
                    Search Results for "{{ $searchkey }}"
                </h3>
            </div>

            <div class="flex-w flex-sb-m p-b-52">
                <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                    <button class="btn btn-outline-dark" data-filter="*">
                        All Products
                    </button>

                    <button class="btn btn-outline-dark" data-filter=".women">
                        Women
                    </button>

                    <button class="btn btn-outline-dark" data-filter=".men">
                        Men
                    </button>

                    <button class="btn btn-outline-dark" data-filter=".etc">
                        Accesories
                    </button>


                </div>



                <!-- Search product -->


                <!-- Filter -->

            </div>


            <div class="row isotope-grid">
                @foreach($data as $product)


                    <div class="col-sm-4 col-md-3 col-lg-3 p-b-35 isotope-item {{ $product->category->category_type }}">


                        <!-- Block2 -->
                        <a href="{{ route('product.view',$product->slug) }}">
                            <div class="block2">
                                <div class="block2-pic hov-img0">
                                    @php $i=1; @endphp
                                    @foreach( $product->image as $image )
                                        @if ($i>0)
                                            <img  src="{{ asset('images/products/' . $image->image) }}" alt="IMG-PRODUCT">
                                        @endif
                                        @php $i--; @endphp
                                    @endforeach
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



            <!-- Load more -->
            <div class="flex-c-m flex-w w-full p-t-38">
                {{ $data->links() }}
            </div>
        </div>
    </div>



    <!-- Back to top -->
    <div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
    </div>

    <!-- Modal1 -->


@endsection

