
@extends ('admin.layout.master')
@section ('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Products</h1>
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
    <form method="post" action="{{ route('admin.product.update' , $product->id) }}" role="form" enctype="multipart/form-data">
      @csrf
      @include('admin.partial.message')
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Product Title</label>
        <input type="text" class="form-control" name="title" value="{{ $product->title }}">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Product Price</label>
        <input type="number" class="form-control" name="price" value="{{ $product->price }}">
      </div>




      <div class="form-group">
        <label for="exampleInputEmail1">Description</label>
        <textarea name="description" rows="8" cols="80" class="form-control">{{ $product->description }}</textarea>
      </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Product Quantity</label>
            <input type="number" class="form-control" name="quantity" value="{{ $product->quantity }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Product Code</label>
            <input type="text" class="form-control" name="code" value="{{ $product->code }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Material</label>
            <input type="text" class="form-control" name="material" value="{{ $product->material }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Color</label>
            <input type="text" class="form-control" name="color" value="{{ $product->color }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Value Addition</label>
            <input type="text" class="form-control" name="value" value="{{ $product->value_addition }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Care</label>
            <input type="text" class="form-control" name="care" value="{{ $product->care }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail">Available Size</label>
            <input type="text" class="form-control" name="size" value="{{ $product->size }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail">Tag</label>
            <input type="text" class="form-control" name="tag" value="{{ $product->tag }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail">Featured</label>
            <select class="form-control select2-blue" name="featured">
                <option value="true">True</option>
                <option value="false">False</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail">Category</label>
            <select class="form-control select2-blue" id="category_id" name="category_id">
                @foreach($category as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                @endforeach
            </select>
        </div>



    </div>
    <!-- /.card-body -->

    <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update Product</button>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>


@endsection
