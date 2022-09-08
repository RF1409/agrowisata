

@extends('dashboard.layout.main')

@section('container')

    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Detail Data Hasil Panen Pertanian </h1>
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
                      <h3>A. Data Pertanian</h3>
                      <tr>
                        <th width="20%">Nama Petani</th>
                        <td width="1%">:</td>
                        <td> {!! $alltani->user->name !!}</td>
                      </tr>
                      <tr>
                        <th>Hasil Panen</th>
                        <td>:</td>
                        <td>{!! $alltani->name_panen !!}</td>
                      </tr>
                      <tr>
                        <th>Category Panen</th>
                        <td>:</td>
                        <td>{!! $alltani->cettani->name !!}</td>
                      </tr>
                      <tr>
                        <th>Total Panen</th>
                        <td>:</td>
                        <td>{!! $alltani->jumlah_panen !!} Kg</td>
                      </tr>
                      <tr>
                        <th width="20%">Provinsi</th>
                        <td width="1%">:</td>
                        <td>{!! $alltani->user->provinsi !!}</td>
                      </tr>
                      <tr>
                        <th width="20%">Kota/Kabupaten</th>
                        <td width="1%">:</td>
                        <td>{!! $alltani->user->kota !!}</td>
                      </tr>
                      @can('admin')
                      <tr>
                        <th>No Telp</th>
                        <td>:</td>
                        <td>{!! $alltani->user->nohp !!}</td>
                      </tr>
                      <tr>
                        <th width="20%">Alamat Pertanian</th>
                        <td width="1%">:</td>
                        <td>{!! $alltani->user->pertanian !!}</td>
                      </tr>
                      @endcan
                    </table>
                    
                    <hr>
                    
                     
                    <table class="table table-striped mt-4">
                      <h3>B. Data Aplikasi</h3>
                      <tr>
                        <th width="20%">Diinput</th>
                        <td width="1%">:</td>
                        <td>{!! date('d M Y',strtotime($alltani->created_at)) !!}</td>
                      </tr>
                      <tr>
                        <th>Diperbaharui</th>
                        <td>:</td>
                        <td>{!! date('d M Y',strtotime($alltani->updated_at)) !!}</td>
                      </tr>
                    </table>

                    <hr>

                    <a href="/dashboard/alltanis" class="btn btn-success"><i class="bi bi-box-arrow-in-left"></i> Back to all Hasil Panen</a>
          
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
