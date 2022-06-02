
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
            <label for="exampleInputEmail">Tag</label>
            <input type="text" class="form-control" name="tag" value="{{ $product->tag }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail">Featured</label>
            <select class="form-control select2-blue" name="featured">
                @if($product->featured == 'true')
                <option value="true" selected="selected">True</option>
                    <option value="false" >False</option>
                @else
                <option value="false" selected="selected">False</option>
                    <option value="true" >True</option>
                    @endif
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail">Category</label>
            <select class="form-control select2-blue" id="category_id" name="category_id">
                @foreach($category as $cat)
                    @if($cat->id == $product->category_id)
                    <option value="{{ $cat->id }}" selected="selected">{{ $cat->title }}</option>
                    @else
                        <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                        @endif
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="image">Add More Image</label>
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
            <button type="submit" class="btn btn-primary">Update Product</button>
          </div>
        </form>
      </div>
    </div>
      <div class="row">
          <!-- Gallery item -->
          @foreach($product->image as $image)
              <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                  <div class="bg-white rounded shadow-sm"><img src="{{ asset('images/products/'.$image->image) }}" alt="" class="img-fluid card-img-top">
                      <div class="p-4">
                          <h5> <a href="#" class="text-dark">Product Image</a></h5>
                          <p class="small text-muted mb-0">DoogDoogi</p>
                          <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                              <form method="post" action="{{ route('admin.productimage.delete',$image->id) }}"> @csrf
                                  <button class="small mb-0" type="submit"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">Delete</span></button>
                                  <div class="badge badge-danger px-3 rounded-pill font-weight-normal">New</div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
      @endforeach

      <!-- End -->



      </div>
  </section>
</div>


@endsection
