@extends('layouts.plantillaManteniment')


@section('title', 'Editando ' . $location->location)


@section('contenido')
    <div class="container">

        <div class="row">
            <div class="col-12">
                <form action="{{ route('mantenimentLocalitzacions.update', $location) }}" method="get" enctype="multipart/form-data">
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
                        <label for="location" class="form-label">Pais:</label>
                        @error('location')
                            <br>
                            <small>* {{ $message }} </small>
                            <br>
                        @enderror
                        <input type="text" class="form-control" id="location" name="location"
                            value="{{ old('location', $location->location) }}">
                    </div>

                    
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
