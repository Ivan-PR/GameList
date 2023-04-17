@extends('layouts.plantillaManteniment')

@section('title', 'Listado de Localizaciones')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Mantenimiento Localizaciones</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Listado de Localizaciones</h2>
                    <a href="{{ route('mantenimentLocalitzacions.crear') }}"
                    class="btn btn-info mb-3 w-100 text-white fw-bold">Insertar Nuevo</a>
            </div>
                </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-responsive table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Imagen</th>
                            <th scope="col" colspan="2">Acciones</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($locations as $location)
                            <tr>
                                <th scope="row">{{ $location->id }}</th>
                                <td>{{ $location->location }}</td>
                                <td>{{ $location->image }}</td>
                                
                                <td>
                                    <a href="{{ route('mantenimentLocalitzacions.editar', $location->id) }}"
                                        class="btn btn-primary">Editar</a>
                                </td>
                                <td>
                                    <form action="{{ route('mantenimentLocalitzacions.eliminar', $location->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>


                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $locations->links() }}
            </div>
        </div>
    </div>
@endsection
