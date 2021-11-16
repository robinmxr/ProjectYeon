
@extends ('admin.layout.master')
@section ('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Offer To Store</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Offer</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">

        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{ route('admin.offer.store') }}" role="form" enctype="multipart/form-data">
            @csrf
            @include('admin.partial.message')
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Offer Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter Title of Offer">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Offer Percentage</label>
                    <input type="number" class="form-control" name="percentage" placeholder="Enter Percentage">
                </div>







            </div>

            <!-- /.card-body -->

    <div class="card-footer">
            <button type="submit" class="btn btn-primary">Add Offer</button>
          </div>
        </form>
      </div>
  </section>
</div>


@endsection
