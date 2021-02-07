
@extends ('admin.layout.master')
@section ('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Manage Products</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Manage Products</li>
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
  <div class="card-body">
    <table id="example2" class="table table-bordered table-hover">
        @include('admin.partial.message')
      <thead>
      <tr>
        <th>#</th>
        <th>Product Title</th>
        <th>Price</th>
        <th>Type</th>
        <th>Action</th>
      </tr>
      </thead>
      <tbody>
        @foreach($products as $product)
        <tr>
          <td>{{ $product->id }}</td>
        <td>{{ $product->title }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->category->title }}</td>
            <td>
                <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-block btn-outline-primary btn-lg">Edit</a>
                <a href="#deleteModal{{ $product->id }}" data-toggle="modal" class="btn btn-block btn-outline-danger">Delete</a>
                <div class="modal fade" id="deleteModal{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModal{{ $product->id }}">Are You Sure?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                             <form method="post" action="{{ route('admin.product.delete', $product->id) }}">
                                 @csrf
                                 <button type="submit" class="btn btn-block bg-gradient-danger btn-lg">Confirm Delete</button>
                             </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-block bg-gradient-success btn-lg" data-dismiss="modal">Cancel</button>

                            </div>
                        </div>
                    </div>
                </div>












            </td>

      </tr>
      @endforeach

      </tbody>

    </table>
  </div>


    </div>
    <!-- /.card-body -->


      </div>

  </section>
</div>
<script>
  $(function () {

    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>



@endsection
