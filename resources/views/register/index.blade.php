@extends('Template.style')

@section('container')

<div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="/register" method="post" enctype="multipart/form-data">
        @csrf
        <div class="user-details">

          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter your Full Name" onkeypress='return harusHuruf(event)' required autofocus value="{{ old('name') }}">
                
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
          </div>

          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Enter your Username"  required autofocus value="{{ old('username') }}">
                
            @error('username')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>

          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter your Email" required autofocus value="{{ old('email') }}">
               
               @error('email')
               <div class="invalid-feedback">
                   {{ $message }}
               </div>
               @enderror
          </div>

          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" class="form-control @error('nohp') is-invalid @enderror" id="nohp" name="nohp" onkeypress="return event.charCode >= 48 && event.charCode <=57" placeholder="Enter your Number" required autofocus value="{{ old('nohp') }}">
                
                @error('nohp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
          </div>

          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter your password" required autofocus >
               
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>

          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" class="form-control @error('confirm') is-invalid @enderror" id="confirm" name="confirm" placeholder="Confirm your Password" required autofocus>
                
            @error('confirm')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          
          <div class="input-box">
            <span class="details">Provinsi</span>
            <input type="text" class="form-control @error('provinsi') is-invalid @enderror" id="provinsi" name="provinsi" placeholder="Enter your address" onkeypress='return harusHuruf(event)' required autofocus value="{{ old('provinsi') }}">
                
                @error('provinsi')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
          </div>
          
          <div class="input-box">
            <span class="details">Kota/Kabupaten</span>
            <input type="text" class="form-control @error('kota') is-invalid @enderror" id="kota" name="kota" placeholder="Enter your address" onkeypress='return harusHuruf(event)' required autofocus value="{{ old('kota') }}">
                
            @error('kota')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
        </div>

        <div class="input-box mb-3">
            <span class="details">Alamat Pertanian</span>
            <input type="text" class="form-control @error('pertanian') is-invalid @enderror" id="pertanian" name="pertanian" placeholder="Enter your address" required value="{{ old('pertanian')}}">
                
                @error('pertanian')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
        </div>

        <div class="input-box mb-3">
            <span class="details">Foto KTP</span>
            <img class="img-preview img-fluid mb-3 col-sm-5 d-block">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()" required>
          
                @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
        </div>
        
        <div class="button">
          <input type="submit" value="Register">
        </div>

        
      </form>

      <div class="social-auth-links text-center mt-2 mb-3">
        <a href="/" class="btn btn-block btn-danger">
          <i class="mr-2"></i> Back to Home
        </a>
      </div>

      <p class="mb-0">
        <center> Already registerd? <a href="/login">Login</a></center>  
      </p>

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

@endsection


  


