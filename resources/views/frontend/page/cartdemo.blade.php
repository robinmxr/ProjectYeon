@extends('frontend.layout.master')
@section('content')
    <section class="bg-img1 txt-center p-lr-15 p-tb-92 bggrad">
        <h2 class="ltext-105 cl0 txt-center lineunder">
            Shopping Cart
        </h2>
    </section>
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="{{ route('index') }}" class="stext-109 cl8 hov-cl1 trans-04">
                Home
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
      Shopping Cart
    </span>
        </div>
        <div class="col-sm-12">
            @if (Session::has('message'))
                <p class="alert ">{{ Session::get('message') }}</p>
            @endif
        </div>
    </div>
    <div class="bg0 p-t-75 p-b-85">
        <div class="container bootstrap snippets bootdey">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info panel-shadow">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="column-4">Product</th>
                                        <th class="column-4">Description</th>
                                        <th class="column-4">Qty</th>
                                        <th class="column-4">Price</th>
                                        <th class="column-4">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><img src="https://via.placeholder.com/400x200/FFB6C1/000000" class="img-cart"></td>
                                        <td><strong>Product 1</strong><p>Size : 26</p></td>
                                        <td>
                                            <form class="form-inline">
                                                <input class="form-control" type="text" value="1">
                                                <button rel="tooltip" class="btn btn-default"><i class="fa fa-pencil"></i></button>
                                                <a href="#" class="btn btn-primary"><i class="fa fa-trash-o"></i></a>
                                            </form>
                                        </td>
                                        <td>$54.00</td>
                                        <td>$54.00</td>
                                    </tr>
                                    <tr>
                                        <td><img src="https://via.placeholder.com/400x200/87CEFA/000000" class="img-cart"></td>
                                        <td><strong>Product 2</strong><p>Size : M</p></td>
                                        <td>
                                            <form class="form-inline">
                                                <input class="form-control" type="text" value="2">
                                                <button class="btn btn-default" ><i class="fa fa-pencil"></i></button>
                                                <a href="#" class="btn btn-primary" rel="tooltip" ><i class="fa fa-trash-o"></i></a>
                                            </form>
                                        </td>
                                        <td>$16.00</td>
                                        <td>$32.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="6">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="text-right">Total Product</td>
                                        <td>$86.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="text-right">Total Shipping</td>
                                        <td>$2.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="text-right"><strong>Total</strong></td>
                                        <td>$88.00</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Continue Shopping</a>
                    <a href="#" class="btn btn-primary pull-right">Next<span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
