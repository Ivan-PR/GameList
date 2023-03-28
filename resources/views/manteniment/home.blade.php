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
                                <td>{{ $game->platform_id }}</td>
                                <td>{{ $game->publisher }}</td>
                                <td>{{ $game->location_id }}</td>
                                <td>{{ $game->language_id }}</td>
                                <td>{{ $game->sourcerom }}</td>
                                <td>{{ $game->romsize_id }}</td>
                                <td>{{ $game->savetype }}</td>
                                <td>
                                    <a href="{{route('manteniment.editar',$game->id)}}" class="btn btn-primary">Editar</a>
                                </td>
                                <td>
                                    <a href="{{route('manteniment.eliminar',$game->id)}}" class="btn btn-danger">Eliminar</a>
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
