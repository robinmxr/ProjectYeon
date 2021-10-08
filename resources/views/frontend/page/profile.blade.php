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


                                <!--
                                <div class="headline m-all-10 " >
                                    <div class="ltext-102 cl0">
                                        Personal Information
                                </div>


                            </div>


                                <div class="tab-custom-content align-items-center">

                                    <div class="main">
                                        <div class="row bg-gray-light p-all-10">
                                            <div class="m-all-10 ">
                                                <h1 > hello {{Auth::user()->name}}</h1>
                                            </div>
                                        </div>

                                        <div class="row p-all-10">
                                            <div class="float-left  m-20"> {{Auth::user()->email}}</div>
                                            <div class="float-right m -20"> <a href="#">Change</a></div>
                                        </div>

                                    </div>

                                </div>

                                 -->

                                <div class="card text-center " style="width: 40rem;">
                                    <div class="card-header layout-boxed -align-center color">
                                        Personal Information



                                    </div>
                                    <div class="card-body">

                                        <ul class="list-group">
                                            <li class="p-all-10 list-group-item">
                                            <div class="row">
                                                <div class="col-sm-8">{{Auth::user()->name}}</div>
                                                <div class="col-sm-4"><button class="btn btn-outline-info" data-toggle="modal" data-target="#namechange"> Change </button></div>

                                            </div>
                                            </li>
                                            <li class="p-all-10 list-group-item">
                                            <div class="row">
                                                <div class="col-sm-12">{{Auth::user()->email}}</div>
                                                <!--<div class="col-sm-4"><button class="btn btn-outline-info" data-toggle="modal" data-target="#passchange"> Change </button></div>-->

                                            </div>
                                            </li>
                                            <li class="p-all-10 list-group-item">
                                            <div class="row">
                                                <div class="col-sm-8">{{Auth::user()->phone}}</div>
                                                <div class="col-sm-4"><button class="btn btn-outline-info" data-toggle="modal" data-target="#phonechange"> Change </button></div>

                                            </div>
                                            </li>
                                            <li class="p-all-10 list-group-item">
                                            <div class="row">
                                                <div class="col-sm-8">{{Auth::user()->address}}</div>
                                                <div class="col-sm-4"><button class="btn btn-outline-info" data-toggle="modal" data-target="#addresschange"> Change </button></div>

                                            </div>
                                            </li>

                                            <li class="p-all-10 list-group-item">
                                                <div class="col-sm-12"><button class="btn btn-danger" data-toggle="modal" data-target="#passchange"> Change password </button></div>
                                            </li>


                                        </ul>
                                    </div>
                                </div>

                                <!--
                                <form action="" method="post">
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

                                -->
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


    <!-- Button trigger modal -->


    <!-- Change password Modal -->
    <div class="modal fade" id="passchange" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Change Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('changepassword')}}" method="POST">
                        <div class="form-group">
                            @csrf
                            <label for="oldpass"> Old Password</label>
                            <input class="form-control m-all--3" type="password" placeholder="Enter Your Old Password" id="oldpass" name="oldpass">
                        </div>
                        <div class="form-group">
                            <label for="newpass"> New Password</label>
                            <input class="form-control m-all--3" type="password" placeholder="Enter Your New Password" id="newpass" name="newpass">
                        </div>
                        <div class="form-group">
                            <label for="newpass">Confirm New Password</label>
                            <input class="form-control m-all--3" type="password" placeholder="Enter Your New Password" id="connewpass" name="connewpass">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary m-all--3">Change Password</button>
                        </div>


                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <!-- Change Name modal -->
    <div class="modal fade" id="namechange" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Change Name</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('editname')}}" method="post">
                        <div class="form-group">
                            @csrf
                            <label for="name"> Name</label>
                            <input class="form-control m-all--3" type="text" placeholder="Enter Your Desired Name" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="vernamepass"> Password</label>
                            <input class="form-control m-all--3" type="password" placeholder="Enter Your Password" id="vernamepass" name="vernamepass">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary m-all--3">Verify</button>
                        </div>


                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <!-- Change phone number modal -->
    <div class="modal fade" id="phonechange" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Change Phone Number</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('changephone')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="newnum"> Phone Number</label>
                            <input class="form-control m-all--3" type="text" placeholder="Enter Your new Phone Number" id="newnum" name="newnum">
                        </div>
                        <div class="form-group">
                            <label for="phonepass">Password</label>
                            <input class="form-control m-all--3" type="password" placeholder="Enter Your Password" id="phonepass" name="phonepass">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary m-all--3">verify</button>
                        </div>


                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <!-- Change address modal -->
    <div class="modal fade" id="addresschange" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Change Address</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('changeaddress')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="newaddress"> Address</label>
                            <input class="form-control m-all--3" type="text" placeholder="Enter Your New Address" id="newaddress" name="newaddress">
                        </div>
                        <div class="form-group">
                            <label for="addpass"> Old Password</label>
                            <input class="form-control m-all--3" type="password" placeholder="Enter Your New Password" id="addpass" name="addpass">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary m-all--3">Verify</button>
                        </div>


                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>



@endsection
