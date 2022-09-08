
@extends('dashboard.layout.main')

@section('container')

    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Data Hasil Panen </h1>
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
            <div class="card-header">
              <a href="/dashboard/tanis/create" class="btn btn-primary">Create new Panen</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama panen</th>
                    <th scope="col">Kategori panen</th>
                    <th scope="col">Total Panen</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
          
              @foreach ($tanis as $tani)

                <tr>
                  <td>{{ $loop->iteration }}</td> {{-- diguanakan untuk membuat nomor awal 1 --}}
                  <td><p>{{ $tani->name_panen }}</p></td>
                  <td><p>{{ $tani->cettani->name }}</p></td>
                  <td><p>{{ $tani->jumlah_panen }} {{ $tani->satuan }}</p></td>
                  <td>
                    <h5>
                      <a href="/dashboard/tanis/{{ $tani->id }}" class="badge bg-info">
                        <i class="bi bi-eye-fill"></i></a>
                        
                      <a href="/dashboard/tanis/{{ $tani->id }}/edit" class="badge bg-warning">
                        <i class="nav-icon fas fa-edit"></i></a>
        
                        <form action="/dashboard/tanis/{{ $tani->id }}" method="post" class="d-inline">
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
                    <th scope="col">Nama panen</th>
                    <th scope="col">Kategori panen</th>
                    <th scope="col">Total Panen</th>
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