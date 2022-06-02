
@extends ('admin.layout.master')
@section ('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add Products To Store</h1>
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
    <form method="post" action="{{ route('admin.product.store') }}" role="form" enctype="multipart/form-data">
      @csrf
      @include('admin.partial.message')
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Product Title</label>
        <input type="text" class="form-control" name="title" placeholder="Enter Name of Product">
      </div>
        <div class="form-group">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="size[]" id="inline1" value="S">
            <label class="form-check-label" for="inline1">Small</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="size[]" id="inlineRadi2" value="M">
            <label class="form-check-label" for="inlineRadi2">Medium</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="size[]" id="inlineRadio3" value="L">
            <label class="form-check-label" for="inlineRadio3">Large</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="size[]" id="inlineRadio3" value="XL">
            <label class="form-check-label" for="inlineRadio3">Extra Large</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="size[]" id="inlineRadio3" value="free">
            <label class="form-check-label" for="inlineRadio3">Free Size</label>
        </div>

        </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Product Price</label>
        <input type="number" class="form-control" name="price" placeholder="Enter price">
      </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Product Quantity</label>
            <input type="number" class="form-control" name="quantity" placeholder="Enter quantity">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Product Code</label>
            <input type="text" class="form-control" name="code" placeholder="Enter code">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Material</label>
            <input type="text" class="form-control" name="material" placeholder="Enter material">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Color</label>
            <input type="text" class="form-control" name="color" placeholder="Enter color">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Value Addition</label>
            <input type="text" class="form-control" name="value" placeholder="Enter value addition">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Care</label>
            <input type="text" class="form-control" name="care" placeholder="Enter care">
        </div>
        <!--
        <div class="form-group">
            <label for="exampleInputEmail">Available Size</label>
            <input type="text" class="form-control" name="size" placeholder="Enter sizes">
        </div>
        -->
        <div class="form-group">
            <label for="exampleInputEmail">Tag</label>
            <input type="text" class="form-control" name="tag" placeholder="Enter tag">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail">Featured</label>
            <input type="text" class="form-control" name="featured" placeholder="Want to add as featured?">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail">Category</label>
            <select class="form-control select2-blue" id="category_id" name="category_id">
                @foreach($category as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                @endforeach
            </select>
        </div>




      <div class="form-group">
        <label for="exampleInputEmail1">Description</label>
        <textarea name="description" rows="8" cols="80" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label for="product_image">Product Image</label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" name="product_image[]" id="exampleInputFile">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
          </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="product_image[]" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="product_image[]" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="product_image[]" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="product_image[]" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>


        </div>
      </div>

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
            <button type="submit" class="btn btn-primary">Add Product</button>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>


@endsection
