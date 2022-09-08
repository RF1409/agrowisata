
@extends('dashboard.layout.main')

@section('container')
    
<div class="content-header">
  <div class="container-fluid">
  <div class="row mb-2">
      <div class="col-sm-6">
      <h1 class="m-0">Data Transaksi</h1>
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
              <div class="card-header">
                <h5 class="m-0">Tambah Data Transaksi</h5>
              </div>
              <div class="card-body">
                
                <form method="post" action="/dashboard/transaksis" class="mb-5">
                  {{-- enctype="multipart/form-data digunaka agar bisa menginput file data --}}
                  @csrf
            
                <div class="mb-3">
                  <label for="product" class="form-label">Nama Product</label>
                  <input type="text"  class="form-control @error('product') is-invalid @enderror" id="product" name="product" onkeypress='return harusHuruf(event)' required autofocus>
                  
                  @error('product')
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
                    <label for="stok" class="form-label">Stok Product</label>
                    <input type="text" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok" required autofocus onkeypress="return event.charCode >= 48 && event.charCode <=57">
                    
                    @error('stok')
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
            
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga /Kg</label>
                    <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" required autofocus onkeypress="return event.charCode >= 48 && event.charCode <=57">
                    
                    @error('harga')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
            
                </div>
          

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-control select2bs4" name="status" style="width: 100%;">
                      <option value="Belum Terjual">Belum Terjual</option>
                      <option value="Masih Ada Stok">Masih Ada Stok</option>
                      <option value="Terjual Habis">Terjual Habis</option>
                    </select>
                </div>
            
                

                  <hr>
            
                  {{-- disabled readonly agar tidak bisa di edit --}}
              
                  <button type="submit" class="btn btn-primary"><i class="bi bi-box-arrow-up"></i> Tambah Data</button>
                
                  <a href="/dashboard/transaksis" class="btn btn-success"><i class="bi bi-box-arrow-in-left"></i> Kembali</a>
              </form>
            
              </div>
            </div>
          </div>

      </div>
    </div>
  </div>


@endsection