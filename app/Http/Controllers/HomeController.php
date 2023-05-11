<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilterGame;
use App\Models\Game;
use App\Models\Language;
use App\Models\Location;
use App\Models\Platform;
use App\Models\Romsize;
use Illuminate\Http\Request;

class HomeController extends Controller {
    public function __invoke(Request $request)
    {
        $locations = Location::all();
        $languages = Language::all();
        $platforms = Platform::all();
        $romsizes = Romsize::all();
    
        if ($request->isMethod('POST') && $request->has('submit')) {
            $requestData = $request->input('filter');
    
            $games = Game::where('platform_id', ($requestData['platform_id'] == 0) ? '!=' : '=', $requestData['platform_id'])
                ->where('location_id', ($requestData['location_id'] == 0) ? '!=' : '=', $requestData['location_id'])
                ->where('language_id', ($requestData['language_id'] == 0) ? '!=' : '=', $requestData['language_id'])
                ->where('romsize_id', ($requestData['romsize_id'] == 0) ? '!=' : '=', $requestData['romsize_id'])
                ->get();
    
            return view('home', compact('games', 'locations', 'languages', 'platforms', 'romsizes', 'requestData'));
        } else {
            $games = Game::all();
            return view('home', compact('games', 'locations', 'languages', 'platforms', 'romsizes'));
        }
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
