<header class="mb-3">
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




                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Llistats
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('mantenimentGame.index') }}">Llistat Jocs</a>
                            </li>
                    </li>
                    <li><a class="dropdown-item" href="{{ route('mantenimentLocalitzacions.index') }}">Llistat Localitzacions</a>
                    </li>
                    <li><a class="dropdown-item" href="{{ route('mantenimentGame.index') }}">Llistat Plataformes</a>
                    </li>
                    <li><a class="dropdown-item" href="{{ route('mantenimentGame.index') }}">Llistat Romsizes</a></li>
                    {{-- <li><a class="dropdown-item" href="{{ route('mantenimentPlataformes.index') }}">Llistat Plataformes</a>
                    </li>
                    <li><a class="dropdown-item" href="{{ route('mantenimentRomsizes.index') }}">Llistat Romsizes</a></li> --}}
                </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('mantenimentGame.carga') }}">Carrega massiva</a>
                </li>
                </ul>
            </div>
        </div>
        <div>
            <ul class="navbar-nav">
                @auth
                    <li class="nav-item">
                        <a class="nav-link px-5" href="{{ route('login.logout') }}">LogOut</a>
                    </li>
                @endauth
                @guest
                    <li class="nav-item">
                        <a class="nav-link px-5" href="{{ route('users.login') }}">LogIn</a>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
</header>
