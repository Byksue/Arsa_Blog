@extends('dashboard.layouts.main')

@section('container')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Create New Post</h1>

    <div class="col-lg-8">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Create Post</h6>
            </div>
            <div class="card-body">
                <form method="post" action="/dashboard/posts">
                    @csrf
                    <div class="mb-4">
                      <label for="title" class="form-label">Title</label>
                      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
                      @error('title')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                    </div>
                    <div class="mb-4">
                      <label for="slug" class="form-label">Slug</label>
                      <input type="text" class="form-control @error('slug') is-invalid @enderror"" id="slug" value="{{ old('slug') }}" name="slug">
                      @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="mb-4">
                        <label for="title" class="form-label">Category</label><br>
                        <select class="form-select" name="category_id">
                            @foreach ($categories as $category)
                                @if (old('category_id') == $category->id)
                                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                @else
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endif
                            @endforeach
                        </select>
                      </div>
                    <div class="mb-4">
                        <label for="title" class="form-label">Body</label><br>
                        @error('body')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                        <trix-editor input="body"></trix-editor>
                      </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Create Post</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function(){
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        })
    </script>
@endsection