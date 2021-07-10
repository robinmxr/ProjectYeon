
@extends ('admin.layout.master')
@section ('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Manage Categories</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Manage Categories</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <a class="container-fluid">

      <div class="card card-primary">
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example2" class="table  table-hover">
        @include('admin.partial.message')
      <thead>
      <tr>
        <th>#</th>
        <th>Category Title</th>
        <th>Category Type</th>
          <th>Actions</th>
      </tr>
      </thead>
      <tbody>
        @foreach($categories as $category)
        <tr>
          <td>{{ $category->id }}</td>
        <td>{{ $category->title }}</td>
        <td>{{ $category->category_type}}</td>
            <td><a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-block btn-primary btn-l">Edit</a>
                <a href="#deleteModal{{ $category->id }}" data-toggle="modal" class="btn btn-block btn-outline-danger">Delete</a>
                <div class="modal fade" id="deleteModal{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModal{{ $category->id }}">Are You Sure?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="{{ route('admin.category.delete', $category->id) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-block bg-danger btn-lg">Confirm Delete</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-block bg-success btn-lg" data-dismiss="modal">Cancel</button>

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
        <a href="{{ route('admin.category.create') }}" <button type="button" class="btn btn-block bg-info btn-lg">Add More Category</button> </a>

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
