<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class MantenimentController extends Controller
{
    public function index(){
        $games = Game::paginate(5);

        return view('manteniment.home', compact('games'));
    }

    public function create(){
        return view('manteniment.editar');
    }
    public function edit($id){
        $game = Game::find($id);
        return view('manteniment.editar', compact('game'));
    }
    public function delete(){
        return view('manteniment.home');
    }
    public function massiveLoad(){
        return view('manteniment.carga');
    }
}


?>