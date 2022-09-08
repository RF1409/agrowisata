
@extends('dashboard.layout.main')

@section('container')

    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Detail Data Hasil Panen </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Hasil Panen</li>
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
                <h5 class="m-0">Detail Data Hasil Panen</h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <table class="table table-striped table-middle mt-4">
                    <h3>A. Data Panen</h3>
                    <tr>
                      <th width="20%">Nama Panen</th>
                      <td width="1%">:</td>
                      <td> {!! $tani->name_panen !!}</td>
                    </tr>
                    <tr>
                      <th>Category Panen</th>
                      <td>:</td>
                      <td>{!! $tani->cettani->name !!}</td>
                    </tr>
                    <tr>
                      <th>Total Panen</th>
                      <td>:</td>
                      <td>{!! $tani->jumlah_panen !!} {!! $tani->satuan !!}</td>
                    </tr>
                  </table>
                  
                  <hr>
                  
                  <table class="table table-striped mt-4">
                    <h3>B. Data Aplikasi</h3>
                    <tr>
                      <th width="20%">Diinput</th>
                      <td width="1%">:</td>
                      <td>{!! date('d M Y',strtotime($tani->created_at)) !!}</td>
                    </tr>
                    <tr>
                      <th>Diperbaharui</th>
                      <td>:</td>
                      <td>{!! date('d M Y',strtotime($tani->updated_at)) !!}</td>
                    </tr>
                  </table>

                  <hr>

                  <a href="/dashboard/tanis" class="btn btn-success"><i class="bi bi-box-arrow-in-left"></i> Back to Tabel</a>
        
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
  </div>

@endsection