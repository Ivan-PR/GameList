<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="container-fluid">
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand d-flex" href="#">
                    <img src="/imgs/logo.png" alt="Logo" width="30" class="d-inline-block align-text-top me-1">
                    Lists
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/manteniment">Llistat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/manteniment/crear">Inserir nou</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/manteniment/carga">Carrega massiva</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                {{-- if hay objeto 
                <h1 class="text-center">Editar</h1>
                else no lo hay
                <h1 class="text-center">Crear nuevo</h1>
                --}}
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="" method="POST" {{-- enctype="multipart/form-data" --}}>
                    {{-- @csrf
                        @method('PUT') --}}
                    <div class="mb-3">
                        <label for="imageFileMultiple" class="form-label">Subida de imagenes:</label>
                        <input class="form-control" type="file" id="imageFileMultiple" multiple>
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Titulo:</label>
                        <input type="text" class="form-control" id="title" name="title" value="">
                    </div>
                    <div class="mb-3">
                        <label for="location" class="form-label">Pais:</label>
                        <input type="text" class="form-control" id="location" name="location" value="">
                    </div>
                    <div class="mb-3">
                        <label for="publisher" class="form-label">Desarrolladora:</label>
                        <input type="text" class="form-control" id="publisher" name="publisher" value="">
                    </div>
                    <div class="mb-3">
                        <label for="source_rom" class="form-label">Source rom:</label>
                        <input type="text" class="form-control" id="source_rom" name="source_rom" value="">
                    </div>
                    <div class="mb-3">
                        <label for="save_type" class="form-label">Save type:</label>
                        <input type="text" class="form-control" id="save_type" name="save_type" value="">
                    </div>
                    <div class="mb-3">
                        <label for="rom_size" class="form-label">Tamaño:</label>
                        <input type="text" class="form-control" id="rom_size" name="rom_size" value="">
                    </div>
                    <div class="mb-3">
                        <label for="language" class="form-label">Idioma:</label>
                        <input type="text" class="form-control" id="language" name="language" value="">
                    </div>
                    <div class="mb-3">
                        <label for="platform" class="form-label">Plataforma:</label>
                        <input type="text" class="form-control" id="platform" name="platform" value="">
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>


    </main>
    <footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50">
        <div class="container text-center">
            <small>Copyright &copy; Your Website</small>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>

</html>
