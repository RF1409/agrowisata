
@extends('dashboard.layout.main')

@section('container')

    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Data Postingan </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Artikel</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->

        @if(session()->has('success'))
        <div class="alert alert-success col-lg-6" role="alert">
          {{ session('success') }}
        </div>
        @endif

        </div><!-- /.container-fluid -->
    </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">

        <div class="col-12">

            <div class="card card-primary card-outline">
            <div class="card-header">
              <a href="/dashboard/posts/create" class="btn btn-primary">Create new Post</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Catagory</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
          
                  @foreach ($posts as $post)
                
                  <tr>
                    <td>{{ $loop->iteration }}</td> {{-- diguanakan untuk membuat nomor awal 1 --}}
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->catagory->name }}</td>
                    <td>
                      <h5>
                        <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info">
                          <i class="bi bi-eye-fill"></i></a>
                          
                        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning">
                          <i class="nav-icon fas fa-edit"></i></a>
                        
                        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                          @method('delete')
                          @csrf
                          <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">
                            <i class="bi bi-file-excel"></i>
                          </button>
                        </form>
                        {{-- digunakan untuk hapus data --}}
                      </h5>
                    </td>
                  </tr>
        
                @endforeach 

                </tbody>
                <tfoot>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Catagory</th>
                    <th scope="col">Action</th>
                  </tr>
                </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->

      </div>
    </div>
  </div>

@endsection