@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-2">{{ $post->title }}</h1>
                <p>Penulis: <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> | Kategori: <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

                @if ($post->image)
                    <div style="max-height: 600px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                    </div>
                @else  
                <img src="https://source.unsplash.com/1200x600?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                @endif
                

                <article class="my-3 fs-6">
                    {!! $post->body !!}
                </article>
                
                <a href="/posts" class="text-decoration-none d-block mt-3">🡸Back to Posts</a>
            </div>
        </div>
    </div>

@endsection

