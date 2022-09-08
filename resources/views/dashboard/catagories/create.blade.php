

@extends('dashboard.layout.main')

@section('container')
    
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Buat Postingan Baru</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Artikel</li>
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
            <h5 class="m-0">Tambah Data Posting</h5>
          </div>
          <div class="card-body">

            <form method="post" action="/dashboard/catagories" class="mb-5" enctype="multipart/form-data">
              {{-- enctype="multipart/form-data digunaka agar bisa menginput file data --}}
              @csrf
        
            <div class="mb-3">
              <label for="name" class="form-label">Nama Category</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
              
              @error('name')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
        
            </div>
        
            <div class="mb-3">
              <label for="slug" class="form-label">Slug Category  *
                (isi Slug dengan judul category dengan huruf kecil, jika ada spasi, maka diganti tanda ( - )) *
              </label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
        
              @error('slug')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
        
            </div>
        
            {{-- disabled readonly agar tidak bisa di edit --}}
        
           <hr>
        
            <button type="submit" class="btn btn-primary"><i class="bi bi-box-arrow-up"></i> Create Category</button>
          
            <a href="/dashboard/catagories" class="btn btn-success"><i class="bi bi-box-arrow-in-left"></i> Back to all Category</a>
            </form>
      
          </div>
        </div>
      </div>

      <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json ())
            .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function (e) {
          e.preventDefault();
        })
        //  digunaka untuk menghilangkan fungsi tambah file pada pengisian text

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