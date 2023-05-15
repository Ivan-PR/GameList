@extends('layouts.plantilla')

@section('title', 'Home')


@section('contenido')
    <div class="container-xl bg-secondary d-flex  w-100 px-0" style="height:650px">

        <div class="col-4 py-4 px-4 border border-5 overflow-auto">
            <div class="">Lista de juegos a escoger.</div>
            <div>
                <ol class="gamelist">
                    @foreach ($games as $game)
                        <a href="{{ route('home.viewGame', $game, $requestData) }}" alt="Game {{ $game->id_game }}"
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
    @include("layouts.partials.filterGames")

@endsection
