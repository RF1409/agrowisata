
@extends('Template.Blog')


@section('container')
<h1 class="mb-5">Post Catagory : {{ $catagory }}</h1>


    @foreach ($posts as $post)

    <article class="mb-5">

        <h2>
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
        </h2>
        <p>{{ $post->excerpt }} </p>
    
    </article>

    @endforeach



    
@endsection
  