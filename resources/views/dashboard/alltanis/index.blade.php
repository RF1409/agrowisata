
@extends('dashboard.layout.main')

@section('container')

    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Data Hasil Panen Pertanian</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Hasil Panen</li>
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
              <!-- /.card-header -->
              <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama User</th>
                      <th scope="col">Hasil Panen</th>
                      <th scope="col">Kategori Panen</th>
                      <th scope="col">Total Panen</th>
                      <th scope="col">Provinsi</th>
                      <th scope="col">Kota</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
            
                  @foreach ($alltanis as $tani)
                  
                    <tr>
                          <td> {{ $loop->iteration }}</td> 
                          <td> {{ $tani->user->username }}</td>
                          <td> {{ $tani->name_panen }}</td>
                          <td> {{ $tani->cettani->name }}</td>
                          <td> {{ $tani->jumlah_panen }} {{ $tani->satuan }}</td>
                          <td> {{ $tani->user->provinsi }}</td>
                          <td> {{ $tani->user->kota }}</td>
                        
                          <td>
                            <h5>
                              <a href="/dashboard/alltanis/{{ $tani->id }}" class="badge bg-info">
                              <i class="bi bi-eye-fill"></i></a>
                            @can('admin')
                                <form action="/dashboard/alltanis/{{ $tani->id }}" method="post" class="d-inline">
                                  @method('delete')
                                  @csrf
                
                                  <button class="badge bg-danger border-0" onclick="return confirm('Apa kamu yakin menghapus data ini?')">
                                    <i class="bi bi-file-excel"></i> 
                                  </button>
                                </form>
                            @endcan
                            </h5>
                          </td>
                      
                    </tr>
        
                  @endforeach

                  </tbody>
                  <tfoot>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Petani</th>
                      <th scope="col">Hasil Panen</th>
                      <th scope="col">Kategori Panen</th>
                      <th scope="col">Total Panen</th>
                      <th scope="col">Provinsi</th>
                      <th scope="col">Kota</th>
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