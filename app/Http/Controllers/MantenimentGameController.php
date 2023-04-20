<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Game;
use App\Models\Location;
use App\Models\Language;
use App\Models\Platform;
use App\Models\Romsize;
use App\Http\Requests\StoreGame;
use App\Http\Requests\UpdateGame;


class MantenimentGameController extends Controller {

    public function index() {
        $games = Game::orderBy('id', 'desc')->paginate(5);
        return view('manteniment.jocs.home', compact('games'));
    }

    public function crear() {
        $locations = Location::all();
        $languages = Language::all();
        $platforms = Platform::all();
        $romsizes = Romsize::all();
        return view('manteniment.jocs.crear', compact('locations', 'languages', 'platforms', 'romsizes'));
    }

    public function store(StoreGame $request) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/imgs/games', $imageName);
        $request = $request->all();
        $request['image'] = $imageName;
        Game::create($request);

        return redirect()->route('mantenimentGame.index');
    }

    public function edit(Game $game) {
        $locations = Location::all();
        $languages = Language::all();
        $platforms = Platform::all();
        $romsizes = Romsize::all();
        return view('manteniment.jocs.editar', compact('game', 'locations', 'languages', 'platforms', 'romsizes'));
    }

    public function update(UpdateGame $request, Game $game) {
        if (isset($request->image)) {
            var_dump($request->image->extension());
            $imageName = time() . '.' . $request->image->extension();
            if (Storage::disk("imgGames")->exists($game->__get("image"))){
                Storage::disk("imgGames")->delete($game->__get("image"));
            }
            $request->image->storeAs('public/imgs/games', $imageName);
            $request = $request->all();
            $request['image'] = $imageName;
            $game->update($request);
        } else {
            $game->update($request->all());
        }

        return redirect()->route('mantenimentGame.index');
    }

    public function delete(Game $game) {
        $game->delete();
        if (Storage::disk("imgGames")->exists($game->__get("image"))){
            Storage::disk("imgGames")->delete($game->__get("image"));
        }
        return redirect()->route('mantenimentGame.index');
    }
    public function massiveLoad() {
        
        return view('manteniment.jocs.carga');
    }
}
