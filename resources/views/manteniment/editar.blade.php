@extends('layouts.plantillaManteniment')

@section('title', 'Editando ')

@section('contenido')
<div class="container">
    
    <div class="row">
        <div class="col-12">
            <form action="{{route('manteniment.update', $game )}}" method="POST" {{-- enctype="multipart/form-data" --}}>
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="imageFileMultiple" class="form-label">Subida de imagenes:</label>
                    <input class="form-control" type="file" id="imageFileMultiple" multiple>
                </div>
                <div class="mb-3">
                    <label for="id_game" class="form-label">ID del juego:</label>
                    <input type="text" class="form-control" id="id_game" name="id_game" value="{{$game->id_game}}">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Titulo:</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$game->name}}">
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Pais:</label>
                    <input type="text" class="form-control" id="location" name="location" value="{{$game->location_id}}">
                </div>
                <div class="mb-3">
                    <label for="publisher" class="form-label">Desarrolladora:</label>
                    <input type="text" class="form-control" id="publisher" name="publisher" value="{{$game->publisher}}">
                </div>
                <div class="mb-3">
                    <label for="source_rom" class="form-label">Source rom:</label>
                    <input type="text" class="form-control" id="source_rom" name="source_rom" value="{{$game->sourcerom}}">
                </div>
                <div class="mb-3">
                    <label for="save_type" class="form-label">Save type:</label>
                    <input type="text" class="form-control" id="save_type" name="save_type" value="{{$game->savetype}}">
                </div>
                <div class="mb-3">
                    <label for="rom_size" class="form-label">Tamaño:</label>
                    <input type="text" class="form-control" id="rom_size" name="rom_size" value="{{$game->romsize_id}}">
                </div>
                <div class="mb-3">
                    <label for="language" class="form-label">Idioma:</label>
                    <input type="text" class="form-control" id="language" name="language" value="{{$game->language_id}}">
                </div>
                <div class="mb-3">
                    <label for="platform" class="form-label">Plataforma:</label>
                    <input type="text" class="form-control" id="platform" name="platform" value="{{$game->platform_id}}">
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection