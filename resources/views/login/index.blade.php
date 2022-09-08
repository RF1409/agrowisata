@extends('Template.style')

@section('container')

<div class="login-box">
  <!-- /.login-logo -->

    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

  <div class="card card-outline card-primary">
    <div class="card-header text-center">

      <div class="image">
        <img src="/style/dist/img/logo.png" alt="Logo Image">
      </div>

      <a href="/style/index2.html" class="h1"><b>Login</b>Agri</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="/login" method="post">

        @csrf 
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="email" placeholder="Email" autofocus required value="{{ old('email') }}">

            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" autofocus required>

          @error('password')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
          @enderror


          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

          <div>
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        
      </form>

      <div class="social-auth-links text-center mt-2 mb-3">
        <a href="/" class="btn btn-block btn-danger">
          <i class="mr-2"></i> Back to Home
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-0">
        <a href="/register" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

@endsection








