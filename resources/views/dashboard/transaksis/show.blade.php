
@extends('dashboard.layout.main')

@section('container')

    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Detail Data Transaksi </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Transaksi</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->


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
                <h5 class="m-0">Detail Data Transaksi</h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <table class="table table-striped table-middle mt-4">
                    <h3>A. Data Panen</h3>
                    <tr>
                      <th width="20%">Nama Product</th>
                      <td width="1%">:</td>
                      <td> {!! $transaksi->product !!}</td>
                    </tr>
                    <tr>
                      <th>Category Product</th>
                      <td>:</td>
                      <td>{!!  $transaksi->cettani->name !!}</td>
                    </tr>
                    <tr>
                      <th>Stok Product</th>
                      <td>:</td>
                      <td>{!! $transaksi->stok !!} {!! $transaksi->satuan !!}</td>
                    </tr>
                    <tr>
                      <th>Harga /Kg</th>
                      <td>:</td>
                      <td>Rp.{!! $transaksi->harga !!} </td>
                    </tr>
                    <tr>
                      <th>Status</th>
                      <td>:</td>
                      <td>{!! $transaksi->status !!}</td>
                    </tr>
                  </table>
                  
                  <hr>
                  
                  <table class="table table-striped mt-4">
                    <h3>B. Data Aplikasi</h3>
                    <tr>
                      <th width="20%">Diinput</th>
                      <td width="1%">:</td>
                      <td>{!! date('d M Y',strtotime($transaksi->created_at)) !!}</td>
                    </tr>
                    <tr>
                      <th>Diperbaharui</th>
                      <td>:</td>
                      <td>{!! date('d M Y',strtotime($transaksi->updated_at)) !!}</td>
                    </tr>
                  </table>

                  <hr>

                  <a href="/dashboard/transaksis" class="btn btn-success"><i class="bi bi-box-arrow-in-left"></i> Back to all Users</a>
        
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
             

            </div>
            <!-- /.card -->
           
          </div>
          <!-- /.col -->
         

        
      </div>
    </div>
  </div>

@endsection