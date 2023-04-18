<?php
namespace App\Http\Controllers;

use App\Models\Location;
use App\Http\Requests\StoreLocation;


class MantenimentLocalitzacionsController extends Controller
{
    public function index() {
        $locations = Location::orderBy('id', 'desc')->paginate(5);
        return view('manteniment.localitzacions.home', compact('locations'));
    }
    public function crear() {
        return view('manteniment.localitzacions.crear');
    }

    public function store(StoreLocation $request) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/imgs/flags', $imageName);
        $request = $request->all();
        $request['image'] = $imageName;
        Location::create($request);

        return redirect()->route('mantenimentLocalitzacions.index');
    }

    
}
