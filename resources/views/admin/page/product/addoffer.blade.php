
@extends ('admin.layout.master')
@section ('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>{{ $product->title }}</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">General Form</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">

      <div class="card card-primary">
  <!-- /.card-header -->
  <!-- form start -->
    <form method="post" action="{{ route('admin.product.addoffer' , $product->id) }}" role="form" enctype="multipart/form-data">
      @csrf
      @include('admin.partial.message')
    <div class="card-body">

        <div class="form-group">
            <label for="exampleInputEmail">Add Offer</label>
            <select class="form-control select2-blue" id="offer_id" name="offer_id">
                <option value="0">No Offer</option>
                @foreach($offers as $offer)
                    <option value="{{ $offer->id }}">{{ $offer->title }}</option>
                @endforeach
            </select>
        </div>



    </div>
    <!-- /.card-body -->

    <div class="card-footer">
            <button type="submit" class="btn btn-primary">Add Offer to Product</button>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>


@endsection
