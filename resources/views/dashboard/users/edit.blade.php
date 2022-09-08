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

            <div class="col-6">
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h5 class="m-0">Edit Data Users</h5>
                </div>
                <div class="card-body">
                  
                  <form method="post" action="/dashboard/users/{{ $user->id }}" class="mb-5" enctype="multipart/form-data">
                    @method('put')
                    @csrf
              
                    <div class="mb-3">
                      <label for="name" class="form-label">Nama Lengkap</label>
                      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', $user->name) }}">
                      
                      @error('name')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
              
                    </div>
              
                    <div class="mb-3">
                      <label for="username" class="form-label">Username</label>
                      <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required autofocus value="{{ old('username', $user->username) }}">
                      
                      @error('username')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
              
                    </div>
                
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required autofocus value="{{ old('email', $user->email) }}">
                      
                      @error('email')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                
                    </div>
              
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autofocus value="{{ old('confirm', $user->confirm) }}">
                      
                      @error('password')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>

                    <div class="mb-3">
                      <label for="confirm" class="form-label">Confrim Password</label>
                      <input type="text" class="form-control @error('confirm') is-invalid @enderror" id="confirm" name="confirm" required autofocus value="{{ old('confirm', $user->confirm) }}">
                      
                      @error('confirm')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>

                    <div class="mb-3">
                      <label for="pertanian" class="form-label">Alamat Pertanian</label>
                      <input type="text" class="form-control @error('pertanian') is-invalid @enderror" id="pertanian" name="pertanian" required autofocus value="{{ old('pertanian', $user->pertanian) }}">
                      
                      @error('pertanian')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                
                    </div>
                  
                    <hr>

                </div>
              </div>
            </div>

            <div class="col-6">
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h5 class="m-0">Edit Data Users</h5>
                </div>
                <div class="card-body">

              
                    <div class="mb-3">
                      <label for="provinsi" class="form-label">Provinsi</label>
                      <input type="text" class="form-control @error('provinsi') is-invalid @enderror" id="provinsi" name="provinsi" required autofocus value="{{ old('provinsi', $user->provinsi) }}">
                      
                      @error('provinsi')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                
                    </div>
                
                    <div class="mb-3">
                      <label for="kota" class="form-label">Kota/Kabupaten</label>
                      <input type="text" class="form-control @error('kota') is-invalid @enderror" id="kota" name="kota" required autofocus value="{{ old('kota', $user->kota) }}">
                      
                      @error('kota')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>  


                    <div class="mb-3">
                    <label for="nohp" class="form-label">No.Hp</label>
                    <input type="text" class="form-control @error('nohp') is-invalid @enderror" id="nohp" name="nohp" onkeypress="return event.charCode >= 48 && event.charCode <=57" required value="{{ old('nohp', $user->nohp) }}">
              
                    @error('nohp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    </div>
              
                    <div class="mb-3">
                      <label for="image" class="form-label">Post Image</label>
                      <input type="hidden" name="oldImage" value="{{ $user->image }}">
                
                      @if ($user->image)
                        <img src="{{ asset('storage/' . $user->image) }}" class="img-preview img-fluid mb-2 col-sm-4 d-block">
                      @else
                        <img class="img-preview img-fluid mb-3 col-sm-5 d-block">
                      @endif
                    
                      <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                
                      @error('image')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                
                    </div>

                    <hr>
              
                    <button type="submit" class="btn btn-primary"><i class="bi bi-box-arrow-up"></i> Update User</button>
                
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
