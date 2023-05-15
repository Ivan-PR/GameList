<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilterGame;
use App\Models\Game;
use App\Models\Language;
use App\Models\Location;
use App\Models\Platform;
use App\Models\Romsize;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Exists;

class HomeController extends Controller {
    public function __invoke(Request $request) {
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
            $requestData = [
                'platform_id' => 0,
                'location_id' => 0,
                'language_id' => 0,
                'romsize_id' => 0,
            ];
            $games = Game::all();
            return view('home', compact('games', 'locations', 'languages', 'platforms', 'romsizes', 'requestData'));
        }
    }

    public function viewGame(Game $gameOne, Request $request) {
        $locations = Location::all();
        $languages = Language::all();
        $platforms = Platform::all();
        $romsizes = Romsize::all();

        // comprobar si existe la imagen en el disco
        if (!file_exists(storage_path('app/public/imgs/games/' . $gameOne->image))) {
            $gameOne->image = 'Sinimagen.webp';
        }

        if ($request->isMethod('GET') && $request->has('submit')) {
            $requestData = $request->input('filter');
            $request->session()->put('filter', $requestData);
        }

        if ($request->session()->has('filter')) {
            $requestData = $request->session()->get('filter');
            $games = Game::where('platform_id', ($requestData['platform_id'] == 0) ? '!=' : '=', $requestData['platform_id'])
                ->where('location_id', ($requestData['location_id'] == 0) ? '!=' : '=', $requestData['location_id'])
                ->where('language_id', ($requestData['language_id'] == 0) ? '!=' : '=', $requestData['language_id'])
                ->where('romsize_id', ($requestData['romsize_id'] == 0) ? '!=' : '=', $requestData['romsize_id'])
                ->get();
        } else {
            $requestData = [
                'platform_id' => 0,
                'location_id' => 0,
                'language_id' => 0,
                'romsize_id' => 0,
            ];
            $games = Game::all();
        }
        return view('homeGameOne', compact('games', 'gameOne', 'locations', 'languages', 'platforms', 'romsizes', 'requestData'));
    }
}
