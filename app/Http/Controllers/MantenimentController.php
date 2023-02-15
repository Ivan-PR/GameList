<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MantenimentController extends Controller
{
    public function index(){
        return view('manteniment/manteniment');
    }

    public function create(){
        return view('manteniment/manteniment');
    }
    public function edit(){
        return view('manteniment/manteniment');
    }
    public function delete(){
        return view('manteniment/manteniment');
    }
}


?>