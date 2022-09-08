
@extends('dashboard.layout.main')

@section('container')

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Data Users</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Users</li>
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
              <a href="/dashboard/users/create" class="btn btn-primary">Create new Users</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Name</th>
                  <th scope="col">Username</th>
                  <th scope="col">Email</th>
                  <th scope="col">No.Hp</th>
                  <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
          
              @foreach ($users as $user)

                <tr>
                  <td>{{ $loop->iteration }}</td> {{-- diguanakan untuk membuat nomor awal 1 --}}
                  <td>{{ $user->name }}</td>
                  <td><p>{{ $user->username }}</p></td>
                  <td><p>{{ $user->email }}</p></td>
                  <td><p>{{ $user->nohp }}</p></td>
                  <td>
                    <h5>
                      <a href="/dashboard/users/{{ $user->id }}" class="badge bg-info">
                        <i class="bi bi-eye-fill"></i></a>
                        
                      <a href="/dashboard/users/{{ $user->id }}/edit" class="badge bg-warning">
                        <i class="nav-icon fas fa-edit"></i></a>

                        <form action="/dashboard/users/{{ $user->id }}" method="post" class="d-inline">
                          @method('delete')
                          @csrf
        
                          <button class="badge bg-danger border-0" onclick="return confirm('Apa kamu yakin menghapus data ini?')">
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
                  <th scope="col">Name</th>
                  <th scope="col">Username</th>
                  <th scope="col">Email</th>
                  <th scope="col">No.Hp</th>
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