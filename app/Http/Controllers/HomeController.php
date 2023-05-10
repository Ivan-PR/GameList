<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilterGame;
use App\Models\Game;
use App\Models\Language;
use App\Models\Location;
use App\Models\Platform;
use App\Models\Romsize;

class HomeController extends Controller {
    public function __invoke(FilterGame $request) {
        // Falta analizar que viene por el request y en caso de que no sea All o Todos o x y si no el objeto $games lo filtramos con metodos de laravel.
        $games = Game::all();
        $locations = Location::all();
        $languages = Language::all();
        $platforms = Platform::all();
        $romsizes = Romsize::all();
        return view('home', compact("games", "locations", 'languages', 'platforms', 'romsizes'));
    }

    public function viewGame(Game $gameOne) {
        $games = Game::all();
        $locations = Location::all();
        $languages = Language::all();
        $platforms = Platform::all();
        $romsizes = Romsize::all();
        return view('homeGameOne', compact("games", "gameOne", "locations", 'languages', 'platforms', 'romsizes'));
    }
}
