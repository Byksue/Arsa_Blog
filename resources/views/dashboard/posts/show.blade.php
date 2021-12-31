@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-2">{{ $post->title }}</h2>
            <p>Kategori: <span class="text-primary">{{ $post->category->name }}</span></p>
            
            <a href="/dashboard/posts" class="btn btn-sm btn-success text-light"><i class="fas fa-arrow-left"></i>&nbsp; Back to MyPost</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-sm btn-warning text-light"><i class="fas fa-edit"></i>&nbsp; Edit this Post</a>
            <form method="post" action="/dashboard/posts/{{ $post->slug }}" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure to Delete This Post?')"><i class="fas fa-trash"></i> Delete Post</button>
            </form>

            @if ($post->image)
                <div style="max-height: 550px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                </div>
            @else  
                <img src="https://source.unsplash.com/1200x600?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
            @endif

            <article class="my-3 fs-6">
                {!! $post->body !!}
            </article>
            
        </div>
    </div>
</div>
@endsection