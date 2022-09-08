@extends('Template.Blog')


@section('container')

 <!-- Page Content -->
 <div class="container">

  <div class="row">

    <!-- Post Content Column -->
    <div class="col-lg-8">

      <!-- Title -->
      <h1 class="mt-4">{{ $post->title }}</h1>

      <!-- Author -->
      <p class="lead">
        by
        <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?catagory={{ $post->catagory->slug }}" class="text-decoration-none"> {{ $post->catagory->name }}</a>
      </p>

      <hr>

      <!-- Date/Time -->
      <p>Posted on {!! date('M d, Y ',strtotime($post->created_at)) !!}</p>
      <hr>

      <!-- Preview Image -->
      
      @if ($post->image)

      <div style="max-height: 350px; overflow:hidden;">
        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->catagory->name }}" class="img-fluid" >

        @else
          
        <img src="https://source.unsplash.com/900x400?{{ $post->catagory->name }}" alt="{{ $post->catagory->name }}" class="img-fluid">
        {{-- img-fluid digunakan untuk gambar bisa responsif --}}

      {{-- </div> --}}

      @endif
  

      <hr>

      <!-- Post Content -->
      
      <p>
            
        <article class="my-3 fs-5"> {{-- my-3 adalah perintah margin atas bawah --}}
        {!! $post->body !!}
        </article>  
        {{-- digunakan untuk menampilkan isi body dan menjalankan perintah html 
          pada body tersebut --}}

        </p>

      <hr>

      <a href="/posts" class="btn btn-success"><i class="bi bi-box-arrow-in-left"></i>Back to home posts</a>     

    </div>

    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">

      <!-- Search Widget -->
      <div class="card my-4">
        <h5 class="card-header">Search</h5>
        <div class="card-body">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-secondary" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>

      <!-- Categories Widget -->
      <div class="card my-4">
        <h5 class="card-header">Categories</h5>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#">Web Design</a>
                </li>
                <li>
                  <a href="#">HTML</a>
                </li>
                <li>
                  <a href="#">Freebies</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#">JavaScript</a>
                </li>
                <li>
                  <a href="#">CSS</a>
                </li>
                <li>
                  <a href="#">Tutorials</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Side Widget -->
      <div class="card my-4">
        <h5 class="card-header">Side Widget</h5>
        <div class="card-body">
          You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
        </div>
      </div>

    </div>

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->
    
@endsection