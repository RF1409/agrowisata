
@extends('dashboard.layout.main')

@section('container')
    
<div class="content-header">
  <div class="container-fluid">
  <div class="row mb-2">
      <div class="col-sm-6">
      <h1 class="m-0">Data Hasil Panen</h1>
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
            <h5 class="m-0">Tambah Data Hasil Panen</h5>
          </div>
          <div class="card-body">
            
            <form method="post" action="/dashboard/tanis" class="mb-5">
              {{-- enctype="multipart/form-data digunaka agar bisa menginput file data --}}
              @csrf
        
            <div class="mb-3">
              <label for="name_panen" class="form-label">Nama Panen</label>
              <input type="text" class="form-control @error('name_panen') is-invalid @enderror" id="name_panen" name="name_panen" onkeypress='return harusHuruf(event)' required autofocus value="{{ old('name_panen') }}">
              
              @error('name_panen')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
        
            </div>

            <div class="form-group">
              <label for="cettani" class="form-label">Catagory</label>
              <select class="form-control select2bs4" name="cettani_id" style="width: 100%;">

                @foreach ($cettanis as $cettani)
            
                  @if(old('cettani_id') == $cettani->id)
                    <option value="{{ $cettani->id }}" selected>{{ $cettani->name }}</option>
                    @else
                    <option value="{{ $cettani->id }}">{{ $cettani->name }}</option>
                  @endif
          
                @endforeach

              </select>
            </div>
        
            <div class="mb-3">
              <label for="jumlah_panen" class="form-label">Jumlah Panen</label>
              <input type="text" class="form-control @error('jumlah_panen') is-invalid @enderror" id="jumlah_panen" name="jumlah_panen" onkeypress="return event.charCode >= 48 && event.charCode <=57" required autofocus value="{{ old('jumlah_panen') }}">
              
              @error('jumlah_panen')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
        
            </div>

            <div class="mb-3">
              <label for="satuan" class="form-label">Satuan</label>
              <select class="form-control select2bs4" name="satuan" style="width: 100%;">
                <option value="Kg">Kg</option>
                <option value="Quintal">Quintal</option>
                <option value="Ton">Ton</option> 
              </select>
            </div>
        
              <hr>

              <button type="submit" class="btn btn-primary"><i class="bi bi-box-arrow-up"></i> Tambah Data</button>
          
              <a href="/dashboard/tanis" class="btn btn-success"><i class="bi bi-box-arrow-in-left"></i> Back to Tabel</a>

            </form>
      
          </div>
        </div>
      </div>

    </div>
  </div>
</div>



@endsection