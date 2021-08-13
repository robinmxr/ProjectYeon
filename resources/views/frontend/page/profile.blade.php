<!-- Slider -->
@extends ('frontend.layout.master')

@section ('content')




    <div class="  p-tb-92  bg-img1" style="background-image: url('images/bg-01.jpg');" >


        <div class="row">
                <div class=" col-sm-4  txt-center p-lr-15 p-tb-40 blurrybox ">
                    <img class="m-tb-10" src="{{ asset('images/gallery-03.jpg') }}" style="height: 180px; width:180px;border-radius: 50%;"/>

                    <div class="ltext-101 cl0"> {{ Auth::user()->name }} </div>
                    <div class="ltext-111 cl9"> Customer </div>

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


                            <button class="btn cl6 hov2 bor3 trans-04 m-r-32 m-tb-5 how-active1 sels-button" data-filter=".profile">
                                About
                            </button>

                            <button class="btn cl6 hov2 bor3 trans-04 m-r-32 m-tb-5 sels-button" data-filter=".ordhist">
                                Order History
                            </button>

                            <button class="btn cl6 hov2 bor3 trans-04 m-r-32 m-tb-5 sels-button" data-filter=".reviews">
                                Reviews
                            </button>




                        </div>
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="col isotope-grid p-0 " >

                            <div class="isotope-item profile">

                                <div class="headline m-all-10 " >
                                    <div class="ltext-102 cl0">
                                        Personal Information
                                </div>


                            </div>


                                <form action="{{ route('editprofile') }}" method="post">
@csrf
                                <table class="table table-borderless " >
                                    <tbody>
                                    <tr>
                                        <td>Name</td>
                                        <td> <input class="stext-111 cl2 plh3 size-104 p-l-62 p-r-30" type="text" name="name" value="{{ Auth::user()->name }}"></td>

                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td> <input class="stext-111 cl2 plh3 size-104 p-l-62 p-r-30" type="text" name="email" value="{{ Auth::user()->email }}"></td>

                                    </tr>
                                    <tr>
                                        <td>Phone</td>
                                        <td> <input class="stext-111 cl2 plh3 size-104 p-l-62 p-r-30" type="text" name="phone" value="{{ Auth::user()->phone }}"></td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td> <input class="stext-111 cl2 plh3 size-104 p-l-62 p-r-30" type="text" name="address" value="{{ Auth::user()->address }}"></td>

                                    </tr>
                                    <tr>
                                        <td>Password</td>
                                        <td> <a class="btn btn-secondary size-104" href="#" ><i class="fa fa-edit"></i> Change </a></td>
                                    </tr>
                                    </tbody>
                                </table>
                                    <button type="submit" class="btn btn-lg btn-success">Save Changes</button>
                                </form>
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
