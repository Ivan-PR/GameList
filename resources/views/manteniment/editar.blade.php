@extends('layouts.plantillaManteniment')

@section('title', 'Editando ' . $game->name)

@section('contenido')
    <div class="container">

        <div class="row">
            <div class="col-12">
                <form action="{{ route('manteniment.update', $game) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- @method('PUT') --}}
                    <div class="mb-3">
                        <label for="imageFileMultiple" class="form-label">Subida de imagenes:</label>
                        <input class="form-control" type="file" id="imageFileMultiple" multiple>
                    </div>
                    <div class="mb-3">
                        <label for="id_game" class="form-label">ID del juego:</label>
                        @error('id_game')
                            <br>
                            <small>* {{ $message }} </small>
                            <br>
                        @enderror
                        <input type="text" class="form-control" id="id_game" name="id_game"
                            value="{{ old('id_game',$game->id_game) }}">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Titulo:</label>
                        @error('name')
                            <br>
                            <small>* {{ $message }} </small>
                            <br>
                        @enderror
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ old('name', $game->name) }}">
                    </div>
                    <div class="mb-3">
                        <label for="location_id" class="form-label">Pais:</label>
                        @error('location_id')
                            <br>
                            <small>* {{ $message }} </small>
                            <br>
                        @enderror
                        <input type="text" class="form-control" id="location_id" name="location_id"
                            value="{{ old('location_id', $game->location_id_id) }}">
                    </div>
                    <div class="mb-3">
                        <label for="publisher" class="form-label">Desarrolladora:</label>
                        @error('publisher')
                            <br>
                            <small>* {{ $message }} </small>
                            <br>
                        @enderror
                        <input type="text" class="form-control" id="publisher" name="publisher"
                            value="{{ old('publisher', $game->publisher) }}">
                    </div>
                    <div class="mb-3">
                        <label for="sourcerom" class="form-label">Source rom:</label>
                        @error('sourcerom')
                            <br>
                            <small>* {{ $message }} </small>
                            <br>
                        @enderror
                        <input type="text" class="form-control" id="sourcerom" name="sourcerom"
                            value="{{ old('sourcerom', $game->sourcerom) }}">
                    </div>
                    <div class="mb-3">
                        <label for="savetype" class="form-label">Save type:</label>
                        @error('savetype')
                            <br>
                            <small>* {{ $message }} </small>
                            <br>
                        @enderror
                        <input type="text" class="form-control" id="savetype" name="savetype"
                            value="{{ old('savetype', $game->savetype) }}">
                    </div>
                    <div class="mb-3">
                        <label for="romsize_id" class="form-label">Tamaño:</label>
                        @error('romsize_id')
                            <br>
                            <small>* {{ $message }} </small>
                            <br>
                        @enderror
                        <input type="text" class="form-control" id="romsize_id" name="romsize_id"
                            value="{{ old('romsize_id', $game->romsize_id) }}">
                    </div>
                    <div class="mb-3">
                        <label for="language_id" class="form-label">Idioma:</label>
                        @error('language_id')
                            <br>
                            <small>* {{ $message }} </small>
                            <br>
                        @enderror
                        <input type="text" class="form-control" id="language_id" name="language_id"
                            value="{{ old('language_id', $game->language_id) }}">
                    </div>
                    <div class="mb-3">
                        <label for="platform_id" class="form-label">Plataforma:</label>
                        @error('platform_id')
                            <br>
                            <small>* {{ $message }} </small>
                            <br>
                        @enderror
                        <input type="text" class="form-control" id="platform_id" name="platform_id"
                            value="{{ old('platform_id', $game->platform_id) }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
