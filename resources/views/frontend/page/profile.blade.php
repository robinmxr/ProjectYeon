<!-- Slider -->
@extends ('frontend.layout.master')

@section ('content')




    <div class="bg-img1 txt-center p-lr-15 p-tb-40 bggrad" >
        <h2 class="ltext-201 cl0 txt-left p-l-102 p-tb-40">
            DASHBOARD
        </h2>
        <!--
        <p class="ltext-202 txt-left p-l-102 p-tb-40">
            Hello Kuddus!
        </p>


        <div>
            <p class="stext-117 txt-left p-l-102"> Orders Completed: 224</p>
        </div> -->
    </div>










    <div class="container">
        <div class="flex-w flex-l-m filter-tope-group m-tb-10">


            <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter=".profile">
                About
            </button>

            <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".ordhist">
                Order History
            </button>

            <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".reviews">
                Reviews
            </button>




        </div>
        <div class="col isotope-grid">

            <div class="isotope-item profile">
                <h1> Kuddus de madre </h1>
                <div> bishal Boror madarchod </div>



            </div>
        </div>
            <div class="col isotope-grid">

                <div class="  isotope-item ordhist">
                    <ul>
                        <li> Kala pant </li>
                        <li> Kala pant </li>
                        <li> Kala pant </li>
                        <li> Kala pant </li>
                        <li> Kala pant </li>
                    </ul>




                </div>

            </div>



        </div>









    <!-- Product -->



    <!-- Modal1 -->


@endsection
