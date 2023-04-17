@extends('layouts.plantillaManteniment')

@section('title', 'Llista de Jocs')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Mantenimiento</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Listado de Roms</h2>
                    <a href="{{ route('mantenimentGame.crear') }}"
                    class="btn btn-info mb-3 w-100 text-white fw-bold">Insertar nuevo</a>
            </div>
                </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-responsive table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Plataforma</th>
                            <th scope="col">Publicado por:</th>
                            <th scope="col">País</th>
                            <th scope="col">Idioma</th>
                            <th scope="col">Source rom</th>
                            <th scope="col">Rom size</th>
                            <th scope="col">Save type</th>
                            <th scope="col" colspan="2">Acciones</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($games as $game)
                            <tr>
                                <th scope="row">{{ $game->id_game }}</th>
                                <td>{{ $game->name }}</td>
                                <td>{{ $game->image }}</td>
                                <td>{{ $game->platform->platform }}</td>
                                <td>{{ $game->publisher }}</td>
                                <td>{{ $game->location->location }}</td>
                                <td>{{ $game->language->language }}</td>
                                <td>{{ $game->sourcerom }}</td>
                                <td>{{ $game->romsize->romsize }}</td>
                                <td>{{ $game->savetype }}</td>
                                <td>
                                    <a href="{{ route('mantenimentGame.editar', $game->id) }}"
                                        class="btn btn-primary">Editar</a>
                                </td>
                                <td>
                                    <form action="{{ route('mantenimentGame.eliminar', $game->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>


                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $games->links() }}
            </div>
        </div>
    </div>
@endsection
