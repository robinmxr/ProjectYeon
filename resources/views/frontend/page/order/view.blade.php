


@extends ('frontend.layout.master')
@section('content')

    <!-- TODO: fix issues in frontend -->





    <div class="bg-img1" style="background-image: url('images/gallery-03.jpg');" >
    <div class="content-wrapper m-tb-190" >
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12 ">
                        <h1>Order Number: {{ $order->order_number }}</h1>
                    </div>
                    <div class="col-sm-4">

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div >

                    <div class="card card-primary">
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                    <tr>

                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($productorders as $ord)
                                        <tr>

                                            <td>{{ $ord->product->title }}</td>
                                            <td>{{ $ord->quantity }}</td>
                                            <td>
                                                {{ $ord->product->price }}
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr>

                                        <td></td>
                                        <td>Total : </td>
                                        <td>{{ $order->total }}</td>
                                    </tr>
                                    <tr>
                                        <td> Payment Status : </td>
                                        <td>{{ $order->payment_status }} </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Order Status : </td>
                                        <td> {{ $order->order_status }} </td>
                                        <td></td>
                                    </tr>
                                    <td>
                                        Customer :
                                    </td>
                                    <td>
                                        {{ $order->name }}
                                    </td>

                                    </tbody>
                                </table>


                            </div>
                            <!-- /.table-responsive -->
                        </div>


                        <!-- /.card-body -->

                        <!-- /.card-footer -->
                    </div>
                </div>
            </div>
        </section>
    </div>
    </div>
@endsection




