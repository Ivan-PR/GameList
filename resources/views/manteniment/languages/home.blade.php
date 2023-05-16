@extends('layouts.plantillaManteniment')

@section('title', 'Listado de Idiomas')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Mantenimiento de Idiomas</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Listado de Idiomas</h2>
                <a href="{{ route('mantenimentLanguages.crear') }}"
                    class="btn btn-info mb-3 w-100 text-white fw-bold">Insertar Nueva</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-responsive table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Idiomas</th>
                            <th scope="col" colspan="2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($languages as $language)
                            <tr>
                                <th scope="row">{{ $language->id }}</th>
                                <td>{{ $language->language }}</td>
                                <td>
                                    <a href="{{ route('mantenimentLanguages.editar', $language->id) }}"
                                        class="btn btn-primary">Editar</a>
                                </td>
                                <td>
                                    <form action="{{ route('mantenimentLanguages.eliminar', $language->id) }}"
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
                {{ $languages->links() }}
            </div>
        </div>
    </div>
@endsection
