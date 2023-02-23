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
                    <img src="./imgs/logo.png" alt="Logo" width="30" 
                        class="d-inline-block align-text-top me-1">
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
                            <a class="nav-link" href="manteniment">Llistat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="manteniment/crear">Inserir nou</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="manteniment/carga">Carrega massiva</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<main>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Manteniment</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Llistat de Roms</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Descripció</th>
                            <th scope="col">Data</th>
                            <th scope="col">Accions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Super Mario Bros</td>
                            <td>El clàssic de la Nintendo</td>
                            <td>1990</td>
                            <td>
                                <a href="manteniment/editar" class="btn btn-primary">Editar</a>
                                <a href="manteniment/eliminar" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Super Mario Bros 2</td>
                            <td>El clàssic de la Nintendo</td>
                            <td>1990</td>
                            <td>
                                <a href="manteniment/editar" class="btn btn-primary">Editar</a>
                                <a href="manteniment/eliminar" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Super Mario Bros 3</td>
                            <td>El clàssic de la Nintendo</td>
                            <td>1990</td>
                            <td>
                                <a href="manteniment/editar" class="btn btn-primary">Editar</a>
                                <a href="manteniment/eliminar" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
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