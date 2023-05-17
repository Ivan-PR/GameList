@extends('layouts.plantillaManteniment')

@section('title', 'Creando Pais')

@section('contenido')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <p><b>* Campo requerido</b></p>
                <form action="{{ route('mantenimentLocalitzacions.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="imageFileMultiple" class="form-label">Subida de imagenes: *</label>
                        @error('imageFileMultiple')
                            <br>
                            <small>* {{ $message }} </small>
                            <br>
                        @enderror
                        <input class="form-control" type="file" name="image" id="imageFileMultiple" multiple>
                    </div>
                    <div class="mb-3">
                        <label for="location" class="form-label">Pais: *</label>
                        @error('location')
                            <br>
                            <small>* {{ $message }} </small>
                            <br>
                        @enderror
                        <input type="text" class="form-control" id="location" name="location"
                            value="{{ old('location') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
