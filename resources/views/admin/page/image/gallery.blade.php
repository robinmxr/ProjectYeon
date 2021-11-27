
@extends ('admin.layout.master')
@section ('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Image Gallery</h1>
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
    <div class="container-fluid">
        <div class="px-lg-5">

            <!-- For demo purpose -->
            <div class="row py-5">
                <div class="col-lg-12 mx-auto">
                    <div class="text-white p-5 shadow-sm rounded banner">
                        <h1 class="display-4">Gallery</h1>

                    </div>
                </div>
            </div>
            <!-- End -->

            <div class="row">
                <!-- Gallery item -->
                @foreach($images as $image)
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded shadow-sm"><img src="{{ asset('images/cover/'.$image->image) }}" alt="" class="img-fluid card-img-top">
                        <div class="p-4">
                            <h5> <a href="#" class="text-dark">Cover Image</a></h5>
                            <p class="small text-muted mb-0">DoogDoogi</p>
                            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                <form method="post" action="{{ route('admin.coverimage.delete',$image->id) }}"> @csrf
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
            <div class="py-5 text-right"><a href="{{ route('admin.coverimage') }}" class="btn btn-dark px-5 py-3 text-uppercase">Add More</a></div>
        </div>
    </div>
</div>


@endsection
