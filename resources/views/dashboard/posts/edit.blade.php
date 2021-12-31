@extends('dashboard.layouts.main')

@section('container')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Post</h1>

    <div class="col-lg-8">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Create Post</h6>
            </div>
            <div class="card-body">
                <form method="post" action="/dashboard/posts/{{ $post->slug }}" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    
                    <div class="mb-4">
                      <label for="title" class="form-label">Title</label>
                      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $post->title) }}">
                      @error('title')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                    </div>
                    <div class="mb-4">
                      <label for="slug" class="form-label">Slug</label>
                      <input type="text" class="form-control @error('slug') is-invalid @enderror"" id="slug" value="{{ old('slug', $post->slug) }}" name="slug">
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
                                @if (old('category_id', $post->category_id) == $category->id)
                                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                @else
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="customFile" class="form-label">Post Image</label><br>
                        <input type="hidden" name="oldImage" value="{{ $post->image }}">
                        @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                        @else   
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                        @endif
                        <div class="custom-file">
                            <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="customFile" name="image" onchange="previewImage()">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                          </div>
                    </div>
                    <div class="mb-4">
                        <label for="title" class="form-label">Body</label><br>
                        @error('body')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                        <trix-editor input="body"></trix-editor>
                      </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Update Post</button>
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

        function previewImage(){
            const image = document.querySelector('#customFile');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection