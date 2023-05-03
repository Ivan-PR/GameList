<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Models\Game;
use App\Models\Location;
use App\Models\Language;
use App\Models\Platform;
use App\Models\Romsize;
use App\Http\Requests\StoreGame;
use App\Http\Requests\UpdateGame;
use Exception;
use Ramsey\Uuid\Type\Integer;

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
            if (Storage::disk("imgGames")->exists($game->__get("image"))) {
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
        if (Storage::disk("imgGames")->exists($game->__get("image"))) {
            Storage::disk("imgGames")->delete($game->__get("image"));
        }
        return redirect()->route('mantenimentGame.index');
    }
    public function massiveLoad() {
        if (isset($_POST['submit']) && isset($_FILES['xmlfile'])) {
            $xml = simplexml_load_file($_FILES['xmlfile']['tmp_name']);
            global $newGame;
            $newGame['platform_id'] = Platform::firstOrCreate(['platform' => $xml->configuration->system->__toString()], ['platform' => $xml->configuration->system]);
            $newGame['platform_id'] = $newGame['platform_id']->__get('id');
            foreach ($xml->games->game as $gamex) {
                //crear comprobar si el juego existe
                $one = Game::where('name', $gamex->title->__toString())->exists();
                $two = Game::where('platform_id', $newGame['platform_id'])->exists();

                if (!Game::where('platform_id', $newGame['platform_id'])
                    ->where('name', $gamex->title->__toString())
                    ->first()) {
                    $newGame['id_game'] = $gamex->files->romCRC->__toString();
                    $newGame['name'] = $gamex->title->__toString();
                    $newGame['image'] = $gamex->imageNumber . '.jpg';
                    $newGame['publisher'] = $gamex->publisher->__toString();
                    $newGame['location_id'] = $gamex->location->__toString();

                    $newGame['language_id'] = Language::findOr($gamex->language->__toString(), fn () => $newGame['language_id'] = 1);
                    if ($newGame['language_id'] !== 1) {
                        $newGame['language_id'] = $newGame['language_id']->__get('id');
                    }
                    
                    $newGame['sourcerom'] = $gamex->sourceRom->__toString();
                    $newGame['romsize_id'] = Romsize::firstOrCreate(['romsize' => $gamex->romSize->__toString()], ['romsize' => $gamex->romSize]);
                    $newGame['romsize_id'] = $newGame['romsize_id']->__get('id');
                    $newGame['savetype'] = $gamex->saveType->__toString();
                    Game::create($newGame);
                } else {
                    //actualizar
                    $game = Game::where('platform_id', $newGame['platform_id'])
                        ->where('name', $gamex->title->__toString())
                        ->first();
                    $game->update(['name' => $gamex->title->__toString()]);
                    $game->update(['image' => $gamex->imageNumber . '.jpg']);
                    $game->update(['publisher' => $gamex->publisher->__toString()]);
                    $game->update(['location_id' => (int) $gamex->location->__toString()]);
                    $game->update(['language_id' => (int) $gamex->language->__toString()]);
                    $game->update(['sourcerom' => $gamex->sourceRom->__toString()]);
                    $romSize = Romsize::firstOrCreate(['romsize' => $gamex->romSize->__toString()], ['romsize' => $gamex->romSize]);
                    $game->update(['romsize_id' => $romSize->__get('id')]);
                    $game->update(['savetype' => $gamex->saveType->__toString()]);
                }
            }
            return redirect()->route('mantenimentGame.index');
        }
    }
}
