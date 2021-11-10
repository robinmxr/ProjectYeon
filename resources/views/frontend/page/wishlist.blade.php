<!-- Slider -->
@extends ('frontend.layout.master')
@section('pagetitle')
    Wishlist
@endsection
@section ('content')




    <section class="bg-img1 txt-center p-lr-15 p-tb-92 bggrad">
        <h2 class="ltext-105 cl0 txt-center lineunder">
            My Wishlist
        </h2>
    </section>
    <div class="container ">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <!--wishlists -->
            <!--<h1> </h1>-->

            <div class="col-lg-12 flex-column" id="wishlistloader">
                @foreach($prodList as $prod)

                    <div class="card w-100 m-sm-4">

                        <div class="card-body flex-sb" >

                            <div class="flex-sa col-lg-8">
                                <div >
                                    <img  class="m-sm-1 mr-sm-3" src="{{ asset('images/products/' . $prod->image[0]->image) }}" style="height: 80px;width: 60px;" alt="IMG-PRODUCT">
                                </div>
                                <div>
                                    <div class="size-103 mtext-113">{{$prod->title}}</div>
                                    <div>{{$prod->description}}</div>
                                    <div>Price: {{$prod->price}}  BDT. </div>
                                </div>
                            </div>

                            <div class=" m-tb-25">
                                @if($prod->quantity>0)

                                    <div class="blinking"> Only {{$prod->quantity}} item(s) left!</div>
                                    @else
                                    <div class="dangerblinking"> Product is stock out </div>
                                    @endif
                            </div>


                            <!-- TODO: Implement delete post method -->
                            <!-- TODO: fix same product multiple wishlist input problem -->
                            <div>
                                <button class="btn btn-outline-danger m-tb-25" onclick="removewishbyid({{$prod->id}})"> <i class="fa fa-trash"></i></button>
                            </div>


                        </div>


                    </div>

                @endforeach
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
