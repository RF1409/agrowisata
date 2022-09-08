@extends('dashboard.layout.main')

@section('container')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data User</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">User</li>
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
            <h5 class="m-0">Tambah Data User</h5>
          </div>
          <div class="card-body">

            <form method="post" action="/dashboard/users" class="mb-5" enctype="multipart/form-data">
              {{-- enctype="multipart/form-data digunaka agar bisa menginput file data --}}
              @csrf
        
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
                
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
         
              </div>
     
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required autofocus value="{{ old('username') }}">
                
                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
         
              </div>
         
              <div class="mb-3">
               <label for="email" class="form-label">Email</label>
               <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required autofocus value="{{ old('email') }}">
               
               @error('email')
               <div class="invalid-feedback">
                   {{ $message }}
               </div>
               @enderror
        
             </div>
     
             <div class="mb-3">
               <label for="password" class="form-label">Password</label>
               <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autofocus value="{{ old('password') }}">
               
               @error('password')
               <div class="invalid-feedback">
                   {{ $message }}
               </div>
               @enderror
        
             </div>

             <div class="mb-3">
                <label for="confirm" class="form-label">Confirm Password</label>
                <input type="text" class="form-control @error('confirm') is-invalid @enderror" id="confirm" name="confirm" required autofocus value="{{ old('confirm') }}">
                
                @error('confirm')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
        
             </div>
     
              <div class="mb-3">
                <label for="pertanian" class="form-label">Alamat Pertanian</label>
                <input type="text" class="form-control @error('pertanian') is-invalid @enderror" id="pertanian" name="pertanian" required autofocus value="{{ old('pertanian')}}">
                
                @error('pertanian')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
          
              </div>
              
              <div class="mb-3">
                <label for="provinsi" class="form-label">Provinsi</label>
                <input type="text" class="form-control @error('provinsi') is-invalid @enderror" id="provinsi" name="provinsi" required autofocus value="{{ old('provinsi') }}">
                
                @error('provinsi')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
                
              </div>
              
              <div class="mb-3">
                <label for="kota" class="form-label">Kota/Kabupaten</label>
                <input type="text" class="form-control @error('kota') is-invalid @enderror" id="kota" name="kota" required autofocus value="{{ old('kota') }}">
                
                @error('kota')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
        
              </div>
      
              <div class="mb-3">
                <label for="nohp" class="form-label">Nomor Hp</label>
                <input type="text" class="form-control @error('nohp') is-invalid @enderror" id="nohp" name="nohp" onkeypress="return event.charCode >= 48 && event.charCode <=57" required autofocus value="{{ old('nohp') }}">
                
                @error('nohp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
          
              </div>
              
              <div class="mb-3">
                <label for="image" class="form-label">KTP</label>
                <img class="img-preview img-fluid mb-1 col-sm-3 d-block">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()" required>
          
                @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
          
              </div>
              
              <hr>
              
              <button type="submit" class="btn btn-primary"><i class="bi bi-box-arrow-up"></i> Create User</button>
            
              <a href="/dashboard/users" class="btn btn-success"><i class="bi bi-box-arrow-in-left"></i> Back to all Users</a>
            </form>
      
          </div>
        </div>
      </div>

      <script>

        function previewImage() {
          const image = document.querySelector('#image');
          const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.dispaly = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result;
        }

        }
    
      </script>

    </div>
  </div>
</div>

@endsection