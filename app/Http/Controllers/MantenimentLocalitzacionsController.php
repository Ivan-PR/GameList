<?php

namespace App\Http\Controllers;
use App\Models\Location;

use Illuminate\Http\Request;

class MantenimentLocalitzacionsController extends Controller
{
    public function index() {
        $locations = Location::orderBy('id', 'desc')->paginate(5);
        return view('mantenimentLocalitzacions.localitzacions.index', compact('locations'));
    }
}
