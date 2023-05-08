@extends('layouts.plantilla')

@section('title', 'Home')


@section('contenido')

    <div class="container-xl bg-secondary d-flex w-100 px-0" style="height:650px">
        <div class="col-4 py-4 px-4 border border-5 overflow-auto">
            <div>
                <ol class="gamelist">
                    @foreach ($games as $game)
                    <a href="{{route("home.viewGame",$game)}}" alt="Game {{$game->id_game}}" title="Game {{$game->id_game}}"><li><img height="25" src="imgs/flags/{{$game->location->image}}"> {{$game->id_game}} - {{$game->name}} </li></a>
                    @endforeach
                </ol>
            </div>
            <div class="">Listas de xmls a escoger.</div>
        </div>
        <div class="col-8 game_info d-flex flex-column border border-5 p-4">
            <div class="d-flex flex-row p-4">
                <div class="w-50 img1"><img src="imgs/games/{{$gameOne->image}}" alt="img" title="img1" height="200" style="display:block;margin: auto;"></div>
                <div class="w-50 m-auto img2"><img src="imgs/games/som_2.jpg" alt="img" title="img2" width="300" style="display:block;margin: auto;"></div>
            </div>
            <div class="d-flex flex-column pt-5">

                <h4>{{$gameOne->id_game}} - {{$gameOne->name}}</h4>
                <p><b>País: </b> {{$gameOne->location->location}}</p>
                <p><b>Publicado por: </b> @foreach ($platforms as $platform)@if ($platform->id == $gameOne->platform_id){{$platform->platform}} @endif @endforeach</p>
                <p><b>Source Rom: </b> {{$gameOne->sourcerom}}</p>
                <p><b>Save Type: </b> {{$gameOne->savetype}}</p>
                <p><b>Rom Size: </b> @foreach ($romsizes as $romsize)@if ($romsize->id == $gameOne->romsize_id){{$romsize->romsize}} @endif @endforeach</p>
                <p><b>Idioma: </b> @foreach ($languages as $language)@if ($language->id == $gameOne->language_id){{$language->language}} @endif @endforeach</p>
            </div>
        </div>

    </div>
@endsection
