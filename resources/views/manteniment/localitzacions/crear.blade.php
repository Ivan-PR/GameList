@extends('layouts.plantillaManteniment')

@section('title', 'Creando Pais')

@section('contenido')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('mantenimentLocalitzacions.store') }}" method="POST" enctype="multipart/form-data">
                    {{-- <form action="{{ route('mantenimentLocalitzacions.store') }}" method="POST" enctype="multipart/form-data"> --}}
                    @csrf
                    <div class="mb-3">
                        <label for="imageFileMultiple" class="form-label">Subida de imagenes:</label>
                        @error('imageFileMultiple')
                            <br>
                            <small>* {{ $message }} </small>
                            <br>
                        @enderror
                        <input class="form-control" type="file" name="image" id="imageFileMultiple" multiple>
                    </div>
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Pais:</label>
                        @error('name')
                            <br>
                            <small>* {{ $message }} </small>
                            <br>
                        @enderror
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ old('name') }}">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection