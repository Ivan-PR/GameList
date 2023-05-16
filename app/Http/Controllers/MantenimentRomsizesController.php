<?php

namespace App\Http\Controllers;

use App\Models\Romsize;
use App\Http\Requests\StoreRomsize;
use App\Http\Requests\UpdateRomsize;

class MantenimentRomsizesController extends Controller {
    public function index() {
        $romsizes = Romsize::orderBy('id', 'desc')->paginate(5);
        return view('manteniment.romsizes.home', compact('romsizes'));
    }
    public function crear() {
        return view('manteniment.romsizes.crear');
    }

    public function store(StoreRomsize $request) {
        Romsize::create($request->all());
        return redirect()->route('mantenimentRomsizes.index');
    }

    public function edit(Romsize $romsize) {
        return view('manteniment.romsizes.editar', compact('romsize'));
    }

    public function update(UpdateRomsize $request, Romsize $romsize) {
        $romsize->update($request->all());
        return redirect()->route('mantenimentRomsizes.index');
    }

    public function delete(Romsize $romsize) {
        $romsize->delete();
        return redirect()->route('mantenimentRomsizes.index');
    }
}
