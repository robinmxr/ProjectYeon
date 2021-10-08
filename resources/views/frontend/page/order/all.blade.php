@extends('frontend.layout.master')
@section('content')

        <section class="bg-img1 txt-center p-lr-15 p-tb-92 bggrad">
            <h2 class="ltext-105 cl0 txt-center lineunder">
                Order History
            </h2>
        </section>
        <div class="bg0 m-t-23 p-b-140">
            <div class="container">
                <div class="flex-w flex-sb-m p-b-52">
                    <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                        <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                            All Orders of {{ Auth::user() }}
                        </button>




                    </div>

    <!-- /.card-header -->
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table m-0">
                <thead>
                <tr>
                    <th>ID</th>

                    <th>Receiver </th>
                    <th>Status</th>
                    <th>Total</th>

                </tr>
                </thead>
                <tbody>
                @foreach($order as $ord)

<tr>
                    <td>{{ $ord->id }}</td>

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

    <!-- /.card-footer -->
</div>
            </div>

    </div>

@endsection
