@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">

        {{-- Alert! --}}
        @if (session()->has('success'))   
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session()->has('loginError'))   
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
               <strong>{{ session('loginError') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <main class="form-signin">
            <form action="/login" method="post">
                @csrf
                <h1 class=" mb-3 text-center">Please Login</h1>
            
                <div class="form-floating">
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Username" autofocus required value="{{ old('username') }}">
                    <label for="username">Username</label>
                    @error('username')
                        <div class="invlaid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                    <label for="password">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
            <small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now!</a></small>
        </main>
    </div>
</div>
@endsection