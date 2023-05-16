<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Http\Requests\StoreLanguage;
use App\Http\Requests\UpdateLanguage;
use Exception;

class MantenimentLanguagesController extends Controller {
    public function index() {
        $languages = Language::orderBy('id', 'desc')->paginate(5);
        return view('manteniment.languages.home', compact('languages'));
    }

    public function crear() {
        return view('manteniment.languages.crear');
    }

    public function store(StoreLanguage $request) {
        Language::create($request->all());
        return redirect()->route('mantenimentLanguages.index');
    }

    public function edit(Language $language) {
        return view('manteniment.languages.editar', compact('language'));
    }

    public function update(UpdateLanguage $request, Language $language) {
        $language->update($request->all());
        return redirect()->route('mantenimentLanguages.index');
    }
    public function delete(Language $language) {
        try{
            $language->delete();
        }
        catch(Exception $e){
            return redirect()->route('mantenimentLanguages.index')->with('false', 'No se puede eliminar el idioma porque esta asignado a un juego.');
        }
        return redirect()->route('mantenimentLanguages.index');
    }
}
