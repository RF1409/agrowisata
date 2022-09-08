
@extends('Template.Blog')


@section('container')


@if ($posts->count()) 
 
 

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="my-4">Blog
                <small>Agrowisata Bambu Sungai</small>
                </h1>

                <!-- Blog Post -->
                <div class="card mb-4">

                    @if ($posts[0]->image)

                    <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->catagory->name }}" class="img-fluid" style="max-height: 350px; overflow:hidden;">

                    @else
                
                    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->catagory->name }}" class="card-img-top" alt="{{ $posts[0]->catagory->name }}">
            
                    @endif

                    <div class="card-body">
                        
                        <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>

                        <p class="card-text">{{ $posts[0]->excerpt }}</p>

                        <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>

                    </div>

                    <div class="card-footer text-muted">
                        
                            <small class="text-muted"> 
                            By. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/posts?catagory={{ $posts[0]->catagory->slug }}" class="text-decoration-none"> {{ $posts[0]->catagory->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                            {{-- {{ $posts[0]->created_at->diffForHumans() }} digunakan untuk memberi tahu kapan di post --}}
                            </small>
                        
                    </div>
                </div>

            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Search Widget -->
                <div class="card my-4">
                <h5 class="card-header">Search</h5>
                <div class="card-body">
                    <div class="input-group">
                        
                        <form action="/posts">
                
                            @if (request('catagory'))
                                <input type="hidden" name="catagory" value="{{ request('catagory') }}">  
                            @endif
                
                            @if (request('author'))
                            <input type="hidden" name="author" value="{{ request('author') }}">  
                            @endif
                
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                                <button class="btn btn-secondary" type="submit">Search</button>
                            </div>
                        </form>

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
                                <a href="#">Sayur</a>
                            </li>
                            <li>
                                <a href="#">Buah</a>
                            </li>
                            <li>
                                <a href="#">Pertanian</a>
                            </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#">Obat Herbal</a>
                            </li>
                            <li>
                                <a href="#">Peptisida</a>
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
                   
                </div>
                </div>

            </div>


            <div class="col-md-12">

                <div class="row">
                    @foreach ($posts->skip(1) as $post)
                    
                        <div class="col-md-4 mb-2">
                            <div class="card">
                                <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/posts?catagory={{ $post->catagory->slug }}" class="text-decoration-none text-white">{{ $post->catagory->name }}</a></div>

                                @if ($post->image)

                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->catagory->name }}" class="img-fluid">
                                {{-- karna sudah kecil tidak perlu div --}}
                        
                                @else
                                
                                <img src="https://source.unsplash.com/500x400?{{ $post->catagory->name }}" class="card-img-top" alt="{{ $post->catagory->name }}">
                        
                                @endif

                            
                                <div class="card-body">

                                    <h5 class="card-title">{{ $post->title }}</h5>

                                    <p class="card-text">{{ $post->excerpt }}</p>
                                    <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                                    
                                    <div class="card-footer text-muted">
                    
                                        <small class="text-muted"> 
                                             By. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/posts?catagory={{ $posts[0]->catagory->slug }}" class="text-decoration-none"> {{ $posts[0]->catagory->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                                        </small>
                                    
                                    </div>

                                </div>

                            </div>
                        </div>
                        
                    @endforeach
                </div>

                @else
                    <p class="text-center fs-4" style="padding: 20px">No Post Found.</p> 
                @endif  

            
            </div>

      

        </div>
        <!-- /.row -->

        <div class="d-flex justify-content-end">
            {{-- justify-conten-end agar berada di kanan --}}
            {{ $posts->links() }}
            {{-- untuk membuat perpindahan halaman --}}
        </div>

    </div>
    <!-- /.container -->


@endsection
  