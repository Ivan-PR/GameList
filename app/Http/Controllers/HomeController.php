<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Language;
use App\Models\Location;
use App\Models\Platform;
use App\Models\Romsize;
use Illuminate\Http\Request;

class HomeController extends Controller {
    public function __invoke() {
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
