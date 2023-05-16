@extends('layouts.plantillaManteniment')

@section('title', 'Listado de Plataformas')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Mantenimiento de Plataformas</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Listado de Plataformas</h2>
                <a href="{{ route('mantenimentPlataformes.crear') }}"
                    class="btn btn-info mb-3 w-100 text-white fw-bold">Insertar Nueva</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-responsive table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Plataforma</th>
                            <th scope="col" colspan="2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($platforms as $platform)
                            <tr>
                                <th scope="row">{{ $platform->id }}</th>
                                <td>{{ $platform->platform }}</td>
                                <td>
                                    <a href="{{ route('mantenimentPlataformes.editar', $platform->id) }}"
                                        class="btn btn-primary">Editar</a>
                                </td>
                                <td>
                                    <form action="{{ route('mantenimentPlataformes.eliminar', $platform->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $platforms->links() }}
            </div>
        </div>
    </div>
@endsection
