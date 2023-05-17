@extends('layouts.plantillaManteniment')

@section('title', 'Creando Plataforma')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p><b>* Campo requerido</b></p>
                <form action="{{ route('mantenimentPlataformes.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="platform" class="form-label">Plataforma: *</label>
                        @error('platform')
                            <br>
                            <small>* {{ $message }} </small>
                            <br>
                        @enderror
                        <input type="text" class="form-control" id="platform" name="platform"
                            value="{{ old('platform') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
