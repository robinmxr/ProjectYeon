@extends('admin.layout.master')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Order Number : {{ $order->order_number }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Orders</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <form action="{{ route('admin.order.changestatus',$order->id) }}" method="post">
                    @csrf
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
                    <td> Payment Status :</td>
                    <td>{{ $order->payment_status }}</td>
                    <td>Order Status :  {{ $order->order_status }}</td>
                    <td><select class="form-control select2-blue" id="status" name="status">
                            <option value="Pending">Pending</option>
                            <option value="Approved">Approved</option>
                            <option value="Shipped">Shipped</option>
                            <option value="Delivered">Delivered</option>
                        </select>
                        <button type="submit" class="btn btn-default btn-block" >Save</button></td>
                </tr>

                </tbody>
            </table>


        </div>
        <!-- /.table-responsive -->
    </div>


    <!-- /.card-body -->

    <!-- /.card-footer -->
</div>
                </form>
            </div>
        </section>
    </div>

@endsection
