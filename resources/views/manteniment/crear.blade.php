@extends('layouts.plantillaManteniment')

@section('title', 'Creando juego')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('manteniment.store') }}" method="POST" {{-- enctype="multipart/form-data" --}}>
                    @csrf
                    {{-- @method('PUT') --}}
                    <div class="mb-3">
                        <label for="imageFileMultiple" class="form-label">Subida de imagenes:</label>
                        {{-- https://www.youtube.com/watch?v=KbpbqZshUus&list=PLZ2ovOgdI-kWWS9aq8mfUDkJRfYib-SvF&index=20 --}}
                        {{-- min 8:09  --}}
                        @error('imageFileMultiple')
                            <br>
                            <small>* {{ $message }} </small>
                            <br>
                        @enderror
                        <input class="form-control" type="file" id="imageFileMultiple" multiple>
                    </div>
                    <div class="mb-3">
                        <label for="id_game" class="form-label">ID del juego:</label>
                        @error('id_game')
                            <br>
                            <small>* {{ $message }} </small>
                            <br>
                        @enderror
                        <input type="text" class="form-control" id="id_game" name="id_game" value="">
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Titulo:</label>
                        @error('title')
                            <br>
                            <small>* {{ $message }} </small>
                            <br>
                        @enderror
                        <input type="text" class="form-control" id="title" name="title" value="">
                    </div>
                    <div class="mb-3">
                        <label for="location" class="form-label">Pais:</label>
                        @error('location')
                            <br>
                            <small>* {{ $message }} </small>
                            <br>
                        @enderror
                        <input type="text" class="form-control" id="location" name="location" value="">
                    </div>
                    <div class="mb-3">
                        <label for="publisher" class="form-label">Desarrolladora:</label>
                        @error('publisher')
                            <br>
                            <small>* {{ $message }} </small>
                            <br>
                        @enderror
                        <input type="text" class="form-control" id="publisher" name="publisher" value="">
                    </div>
                    <div class="mb-3">
                        <label for="source_rom" class="form-label">Source rom:</label>
                        @error('source_rom')
                            <br>
                            <small>* {{ $message }} </small>
                            <br>
                        @enderror
                        <input type="text" class="form-control" id="source_rom" name="source_rom" value="">
                    </div>
                    <div class="mb-3">
                        <label for="save_type" class="form-label">Save type:</label>
                        @error('save_type')
                            <br>
                            <small>* {{ $message }} </small>
                            <br>
                        @enderror
                        <input type="text" class="form-control" id="save_type" name="save_type" value="">
                    </div>
                    <div class="mb-3">
                        <label for="rom_size" class="form-label">Tamaño:</label>
                        @error('rom_size')
                            <br>
                            <small>* {{ $message }} </small>
                            <br>
                        @enderror
                        <input type="text" class="form-control" id="rom_size" name="rom_size" value="">
                    </div>
                    <div class="mb-3">
                        <label for="language" class="form-label">Idioma:</label>
                        @error('language')
                            <br>
                            <small>* {{ $message }} </small>
                            <br>
                        @enderror
                        <input type="text" class="form-control" id="language" name="language" value="">
                    </div>
                    <div class="mb-3">
                        <label for="platform" class="form-label">Plataforma:</label>
                        @error('platform')
                            <br>
                            <small>* {{ $message }} </small>
                            <br>
                        @enderror
                        <input type="text" class="form-control" id="platform" name="platform" value="">
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
{{-- 
https://www.youtube.com/watch?v=KbpbqZshUus&list=PLZ2ovOgdI-kWWS9aq8mfUDkJRfYib-SvF&index=20
15:35
--}}

