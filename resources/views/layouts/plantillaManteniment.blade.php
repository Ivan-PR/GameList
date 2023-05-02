<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="./build/assets/app-490c72e2.css">
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="container-fluid p-0">
    {{--          HEADER                        --}}
    @include('layouts.manteniment.partials.headerManteniment')
    <a href="{{ url()->previous() }}" class="btn btn-secondary mb-3 text-white fw-bold">Atras</a>
<main class="mb-3">
    @yield('contenido')
</main>
    {{--          FOOTER                        --}}
    @include('layouts.partials.footer')
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>

</html>
