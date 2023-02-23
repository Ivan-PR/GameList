<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MantenimentController extends Controller
{
    public function index(){
        return view('manteniment/manteniment');
    }

    public function create(){
        return view('manteniment/editar');
    }
    public function edit(){
        return view('manteniment/editar');
    }
    public function delete(){
        return view('manteniment/borrar');
    }
    public function massiveLoad(){
        return view('manteniment/carga');
    }
}


?>