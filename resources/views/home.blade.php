@extends('frontend.layout.master')

@section('content')

    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/cover.png');">
        <h2 class="ltext-105 cl0 txt-center">
            User Dashboard
        </h2>
    </section>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if(auth()->user()->is_admin == 1)
                    <a href="{{url('admin/home')}}">Go to Admin</a>
                    @else
                    <div class=”panel-heading”>Normal User</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
