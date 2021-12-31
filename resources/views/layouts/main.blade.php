<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap --}}
    <link rel="stylesheet" href={{ asset('bootstrap/css/bootstrap.min.css') }}>

    {{-- Bootstrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    {{-- My Css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Arsa Muda Blog | {{ $title }}</title>
</head>
<body>
    @include('partials.navbar')

    <div class="container mt-4">
        @yield('container')
    </div>
    

    {{-- Javascript --}}
    <script src={{ asset('bootstrap/js/bootstrap.bundle.min.js') }}></script>
    
</body>
</html>