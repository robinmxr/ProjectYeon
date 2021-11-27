
@extends ('admin.layout.master')
@section ('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Category To Store</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Categories</li>
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
        <form method="post" action="{{ route('admin.coverimage.store') }}" role="form" enctype="multipart/form-data">
            @csrf
            @include('admin.partial.message')
            <div class="card-body">



                <div class="form-group">
        <label for="image">Image</label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
          </div>


        </div>
      </div>




            </div>

            <!-- /.card-body -->

    <div class="card-footer">
            <button type="submit" class="btn btn-primary">Add Category</button>
          </div>
        </form>
      </div>
  </section>
</div>


@endsection
