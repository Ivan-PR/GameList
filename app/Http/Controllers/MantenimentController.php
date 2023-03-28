<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Http\Requests\StoreGame;
use App\Http\Requests\UpdateGame;

class MantenimentController extends Controller {

    public function index() {
        $games = Game::orderBy('id', 'desc')->paginate(5);
        return view('manteniment.home', compact('games'));
    }

    
    public function store(StoreGame $request) {
        $game = Game::create($request->all());

        return redirect()->route('manteniment.index');
    }

    public function edit(Game $game) {
        return view('manteniment.editar', compact('game'));
    }

    public function update(Request $request, Game $game) {
        $game->update($request->all());

        return redirect()->route('manteniment.index');
    }

    public function delete() {
        return view('manteniment.home');
    }
    public function massiveLoad() {
        return view('manteniment.carga');
    }
}