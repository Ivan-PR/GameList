@extends('layouts.plantillaManteniment')

@section('title', 'Llista de Jocs')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Manteniment</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Llistat de Roms</h2>
                    <a href="{{ route('mantenimentGame.crear') }}"
                    class="btn btn-info mb-3 w-100 text-white fw-bold">Inserir nou</a>
            </div>
                </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-responsive table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Platform</th>
                            <th scope="col">Publisher</th>
                            <th scope="col">Location</th>
                            <th scope="col">Language</th>
                            <th scope="col">Sourcerom</th>
                            <th scope="col">Romsize</th>
                            <th scope="col">Savetype</th>
                            <th scope="col" colspan="2">Accions</th>
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
