<?php
namespace App\Http\Controllers;

use App\Models\Location;


class MantenimentLocalitzacionsController extends Controller
{
    public function index() {
        $locations = Location::orderBy('id', 'desc')->paginate(5);
        return view('manteniment.localitzacions.home', compact('locations'));
    }
}
