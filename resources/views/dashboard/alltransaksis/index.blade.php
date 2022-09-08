
@extends('dashboard.layout.main')

@section('container')

    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Data All Transaksi Pertanian</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Transaksi</li>
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
                    <th scope="col">Nama Product</th>
                    <th scope="col">Category Product</th>
                    <th scope="col">Stok Product</th>
                    <th scope="col">Harga /Kg</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
          
                @foreach ($alltransaksis as $transaksi)
                
                  <tr>
                        <td> {{ $loop->iteration }}</td> 
                        <td> {{ $transaksi->user->username }}</td>
                        <td>{{ $transaksi->product }}</td>
                        <td>{{ $transaksi->cettani->name }}</td>
                        <td>{{ $transaksi->stok }} {{ $transaksi->satuan }}</td>
                        <td>Rp.{{ $transaksi->harga }}</td>
                        <td>{{ $transaksi->status }}</td>
                      
                        <td>
                          <h5>
                            <a href="/dashboard/alltransaksis/{{ $transaksi->id }}" class="badge bg-info">
                            <i class="bi bi-eye-fill"></i></a>
                          
                              <form action="/dashboard/alltransaksis/{{ $transaksi->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
              
                                <button class="badge bg-danger border-0" onclick="return confirm('Apa kamu yakin menghapus data ini?')">
                                  <i class="bi bi-file-excel"></i> 
                                </button>
                              </form>
                          
                          </h5>
                        </td>
                    
                  </tr>
      
                @endforeach

                </tbody>
                <tfoot>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama User</th>
                    <th scope="col">Nama Product</th>
                    <th scope="col">Category Product</th>
                    <th scope="col">Stok Product</th>
                    <th scope="col">Harga /Kg</th>
                    <th scope="col">Status</th>
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