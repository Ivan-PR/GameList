<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class MantenimentController extends Controller {

    public function index() {
        $games = Game::orderBy('id', 'desc')->paginate(5);
        return view('manteniment.home', compact('games'));
    }

    public function create() {
        return view('manteniment.crear');
    }

    public function store(Request $request) {

        $request->validate([
            'id_game' => 'required',
            'title' => 'required',
            'location' => 'required',
            'publisher' => 'required',
            'source_rom' => 'required',
            'save_type' => 'required',
            'rom_size' => 'required',
            'language' => 'required',
            'platform' => 'required',
        ]);


        $game = new Game();
        //falta definir las imagenes
        $game->image = 'imgprova.jpg';
        $game->id_game = $request->id_game;
        $game->name = $request->title;
        $game->location_id = $request->location;
        $game->publisher = $request->publisher;
        $game->sourcerom = $request->source_rom;
        $game->savetype = $request->save_type;
        $game->romsize_id = $request->rom_size;
        $game->language_id = $request->language;
        $game->platform_id = $request->platform;
        $game->save();
    }

    public function edit(Game $game) {
        return view('manteniment.editar', compact('game'));
    }

    public function update(Request $request, Game $game) {
        $request->validate([
            'id_game' => 'required',
            'title' => 'required',
            'location' => 'required',
            'publisher' => 'required',
            'source_rom' => 'required',
            'save_type' => 'required',
            'rom_size' => 'required',
            'language' => 'required',
            'platform' => 'required',
        ]);

        //falta definir las imagenes
        $game->image = 'imgprova2.jpg';
        $game->id_game = $request->id_game;
        $game->name = $request->title;
        $game->location_id = $request->location;
        $game->publisher = $request->publisher;
        $game->sourcerom = $request->source_rom;
        $game->savetype = $request->save_type;
        $game->romsize_id = $request->rom_size;
        $game->language_id = $request->language;
        $game->platform_id = $request->platform;
        $game->save();

        return redirect()->route('manteniment.index');
    }

    public function delete() {
        return view('manteniment.home');
    }
    public function massiveLoad() {
        return view('manteniment.carga');
    }
}
