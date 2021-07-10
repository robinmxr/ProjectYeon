@extends('admin.layout.master')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Orders</h1>
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
<div class="card card-primary">
    <!-- /.card-header -->
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table m-0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer ID</th>
                    <th>Receiver </th>
                    <th>Status</th>
                    <th>Total</th>

                </tr>
                </thead>
                <tbody>
                @foreach($order as $ord)

<tr>
                    <td>{{ $ord->id }}</td>
                    <td>{{ $ord->user_id }}</td>
                    <td> {{ $ord->name }} </td>

                    <td><span>{{ $ord->order_status }}</span></td>
                    <td>
                        {{ $ord->total }}
                    </td>
    <td><a href="{{ route('admin.order.view', $ord->id) }}" class="btn btn-app">View</a></td>

                </tr>

                @endforeach


                </tbody>
            </table>
        </div>
        <!-- /.table-responsive -->
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
        <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
        <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
    </div>
    <!-- /.card-footer -->
</div>
            </div>
        </section>
    </div>

@endsection
