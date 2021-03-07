
@extends ('admin.layout.master')
@section ('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Category</h1>
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

      <div class="card card-primary">
  <!-- /.card-header -->
  <!-- form start -->
    <form method="post" action="{{ route('admin.category.update' , $category->id) }}" role="form">
      @csrf
      @include('admin.partial.message')
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Category Title</label>
        <input type="text" class="form-control" name="title" value="{{ $category->title }}">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Product Price</label>
        <input type="text" class="form-control" name="category_type" value="{{ $category->category_type }}">
      </div>







    </div>
    <!-- /.card-body -->

    <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update Category</button>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>


@endsection
