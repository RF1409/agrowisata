
@extends('dashboard.layout.main')

@section('container')

    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Detail Data Posting </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Artikel</li>
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
                <h5 class="m-0">Tampilan Postingan</h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="col-8">
          
                  <h2 class="mb-3">{{ $post->title }}</h2>
          
                    @if ($post->image)
          
                   <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->catagory->name }}" class="img-fluid mt-3">
                   </div>
            
                    @else
                   
                    <img src="https://source.unsplash.com/1200x400?{{ $post->catagory->name }}" alt="{{ $post->catagory->name }}" class="img-fluid mt-3">
                    {{-- img-fluid digunakan untuk gambar bisa responsif --}}
            
                    @endif
                        
                    
                    <article class="my-3 fs-5"> {{-- my-3 adalah perintah margin atas bawah --}}
                    {!! $post->body !!}
                    </article>  
                    {{-- digunakan untuk menampilkan isi body dan menjalankan perintah html 
                      pada body tersebut --}}

                      <hr>

                      <a href="/dashboard/posts" class="btn btn-success"> 
                        <i class="bi bi-box-arrow-in-left"></i> Back to all my Posts</a>
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