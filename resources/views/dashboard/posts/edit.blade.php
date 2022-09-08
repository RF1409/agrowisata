
@extends('dashboard.layout.main')

@section('container')
    
<div class="content-header">
  <div class="container-fluid">
  <div class="row mb-2">
      <div class="col-sm-6">
      <h1 class="m-0">Data Postingan</h1>
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
            <h5 class="m-0">Edit Data Postingan</h5>
          </div>
          <div class="card-body">

            <form method="post" action="/dashboard/posts/{{ $post->slug }}" class="mb-5" enctype="multipart/form-data">
              @method('put')
              @csrf
        
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $post->title) }}">
              
              @error('title')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
        
            </div>
        
            <div class="mb-3">
              <label for="slug" class="form-label">Slug</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug', $post->slug) }}">
        
              @error('slug')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
        
            </div>
        
            {{-- disabled readonly agar tidak bisa di edit --}}

            <div class="form-group">
              <label for="catagory" class="form-label">Catagory</label>
              <select class="form-control select2bs4" name="catagory_id" style="width: 100%;">

                @foreach ($catagories as $catagory)
        
                  @if(old('catagory_id', $post->catagory_id) == $catagory->id)
                  <option value="{{ $catagory->id }}" selected>{{ $catagory->name }}</option>
                  @else
                  <option value="{{ $catagory->id }}">{{ $catagory->name }}</option>
                  @endif
        
                @endforeach

              </select>
            </div>
        
            
            <div class="mb-3">
              <label for="image" class="form-label">Post Image</label>
              <input type="hidden" name="oldImage" value="{{ $post->image }}">
        
              @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid mb-1 col-sm-3 d-block">
              @else
                <img class="img-preview img-fluid mb-1 col-sm-3 d-block">
              @endif
            
              <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
        
              @error('image')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
              @enderror
        
              </div>
            
            <div class="mb-3">
              <label for="body" class="form-label">Body</label>
              
              @error('body')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
        
              <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
              <trix-editor input="body"></trix-editor>
            </div>
        
            <hr>
            
            <button type="submit" class="btn btn-primary"><i class="bi bi-box-arrow-up"></i>Post Update</button>
          
            <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-box-arrow-in-left"></i> Back to all Posts</a>
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