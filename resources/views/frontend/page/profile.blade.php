<!-- Slider -->
@extends ('frontend.layout.master')

@section ('content')




    <div class="  p-tb-92  bg-img1" style="background-image: url('images/bg-01.jpg');"  >


        <div class="row">
                <div class=" col-sm-4  txt-center p-lr-15 p-tb-40 blurrybox ">
                    <img class="m-tb-10" src="{{ asset('images/gallery-03.jpg') }}" style="height: 180px; width:180px;border-radius: 50%;"/>

                    <div class="ltext-101 cl0"> Kuddus </div>
                    <div class="ltext-111 cl9"> De madre </div>

                    <div class="card-body">
                        <table class="table table-hover  table-borderless" >
                            <tbody>
                            <tr >
                                <td  >Total Orders: </td>
                                <td > 120 </td>
                            </tr>
                            <tr >
                                <td >Orders Deliverd: </td>
                                <td > 120 </td>
                            </tr>
                            <tr >
                                <td >Pending Orders: </td>
                                <td > 120 </td>
                            </tr>

                            </tbody>
                        </table>

                    </div>






                </div>
                <div class="col-sm-8 ">
                    <div class="container">
                        <div class="flex-w flex-l-m filter-tope-group m-tb-10 ">


                            <button class="stext-106 cl6 hov2 bor3 trans-04 m-r-32 m-tb-5 how-active1 sels-button" data-filter=".profile">
                                About
                            </button>

                            <button class="stext-106 cl6 hov2 bor3 trans-04 m-r-32 m-tb-5 sels-button" data-filter=".ordhist">
                                Order History
                            </button>

                            <button class="stext-106 cl6 hov2 bor3 trans-04 m-r-32 m-tb-5 sels-button" data-filter=".reviews">
                                Reviews
                            </button>




                        </div>
                        <div class="col isotope-grid p-0 " >

                            <div class="isotope-item profile">

                                <div class="headline m-all-10 " >
                                    <div class="ltext-102 cl0">
                                        Personal Information
                                </div>


                            </div>



                                <table class="table table-borderless " >
                                    <tbody>
                                    <tr>
                                        <td>Email</td>
                                        <td> Kuddus@gmail.com</td>
                                        <td> <a href="#" ><i class="fa fa-edit"></i> Change </a></td>
                                    </tr>
                                    <tr>
                                        <td>Passwod</td>
                                        <td> </td>
                                        <td> <a href="#" ><i class="fa fa-edit"></i> Change </a></td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td> None </td>
                                        <td> <a href="#" ><i class="fa fa-edit"></i> Change </a></td>
                                    </tr>
                                    </tbody>
                                </table>

                        </div>
                        <div class="col isotope-grid p-0">

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
                            <div class="col isotope-grid p-0">

                            <div class="  isotope-item reviews">
                                <ul>
                                    <li> reviews </li>
                                    <li> reviews pant </li>
                                    <li> reviews pant </li>
                                    <li> reviews pant </li>
                                    <li> reviews pant </li>
                                </ul>




                            </div>

                        </div>



                    </div>
                </div>

        </div>

        <div class="">

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
