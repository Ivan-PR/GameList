@extends('layouts.plantillaManteniment')

@section('title', 'Listado de Romsizes')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Mantenimiento de Romsizes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Listado de Romsizes</h2>
                <a href="{{ route('mantenimentRomsizes.crear') }}" class="btn btn-info mb-3 w-100 text-white fw-bold">Insertar
                    Nueva</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-responsive table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Romsize</th>
                            <th scope="col" colspan="2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($romsizes as $romsize)
                            <tr>
                                <th scope="row">{{ $romsize->id }}</th>
                                <td>{{ $romsize->romsize }}</td>
                                <td>
                                    <a href="{{ route('mantenimentRomsizes.editar', $romsize->id) }}"
                                        class="btn btn-primary">Editar</a>
                                </td>
                                <td>
                                    <form action="{{ route('mantenimentRomsizes.eliminar', $romsize->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $romsizes->links() }}
            </div>
        </div>
    </div>
@endsection
