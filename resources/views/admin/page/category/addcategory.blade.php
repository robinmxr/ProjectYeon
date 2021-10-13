
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
        <form method="post" action="{{ route('admin.category.store') }}" role="form" enctype="multipart/form-data">
            @csrf
            @include('admin.partial.message')
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Category Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter Title of Category">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Category Type</label>
                    <select class="form-control select2-blue" id="type" name="category_type">
                        <option value="women">Women</option>
                        <option value="men">Men</option>
                        <option value="etc">Accessories</option>

                    </select>
                </div>
                <div class="form-group">
        <label for="image">Category Image</label>
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
