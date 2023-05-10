@extends('layouts.plantilla')

@section('title', 'Home')


@section('contenido')
    <div class="container-xl bg-secondary d-flex  w-100 px-0" style="height:650px">
     
            <div class="col-4 py-4 px-4 border border-5 overflow-auto">
                <div class="">Lista de juegos a escoger.</div>
                <div>
                    <ol class="gamelist">
                        @foreach ($games as $game)
                            <a href="{{ route('home.viewGame', $game) }}" alt="Game {{ $game->id_game }}"
                                title="Game {{ $game->id_game }}">
                                <li><img height="12" src="imgs/flags/{{ $game->location->image }}"> {{ $game->id_game }} -
                                    {{ $game->name }} </li>
                            </a>
                        @endforeach
                    </ol>
                </div>
            </div>
            <div class="col-8 game_info d-flex border border-5 p-4 justify-content-center align-items-center">
                <div class="">
                    <img src="/imgs/system/logo.png" alt="Logo">
                </div>
            </div>
        </div>
   
    </div>
    <div class="container-xl bg-secondary d-flex  w-100 px-0">
        
        <div class="col-4 py-4 px-4 border border-5 overflow-auto">
                <label for="platform_id" class="form-label">Plataforma:</label>
                <select name="platform_id" id="platform_id" class="form-control">
                    <option value="0" selected>Selecciona una plataforma</option>
                    @foreach ($platforms as $platform)
                        <option value="{{ $platform->id }}" selected>{{ $platform->platform }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-8 game_info d-flex border border-5 p-4">
                <label for="location_id" class="form-label">Pais:</label>
                <br>
                <select name="location_id" id="location_id" class="form-control">
                    <option value="0" selected>Selecciona una localizacion</option>
                    @foreach ($locations as $location)
                        <option value="{{ $location->id }}" selected>{{ $location->location }}</option>
                    @endforeach
                </select>
                <label for="language_id" class="form-label">Idioma:</label>
                <br>
                <select name="language_id" id="language_id" class="form-control">
                    <option value="0" selected>Selecciona un idioma</option>
                    @foreach ($languages as $language)
                        <option value="{{ $language->id }}" selected>{{ $language->language }}</option>
                    @endforeach
                </select>
                <label for="romsize_id" class="form-label">Tamaño:</label>
                <br>
                <select name="romsize_id" id="romsize_id" class="form-control">
                    <option value="0" selected>Selecciona una romsize</option>
                    @foreach ($romsizes as $romsize)
                        <option value="{{ $romsize->id }}" selected>{{ $romsize->romsize }}</option>
                    @endforeach
                </select>
            </div>
     

    </div>
@endsection
