<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MantenimentController extends Controller
{
    public function index(){
        return view('manteniment.home');
    }

    public function create(){
        return view('manteniment.editar');
    }
    public function edit(){
        return view('manteniment.editar');
    }
    public function delete(){
        return view('manteniment.home');
    }
    public function massiveLoad(){
        return view('manteniment.carga');
    }
}


?>