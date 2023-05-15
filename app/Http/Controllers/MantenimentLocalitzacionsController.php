<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Location;
use App\Http\Requests\StoreLocation;
use App\Http\Requests\UpdateLocation;


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
        $request->image->storeAs('public/flags', $imageName);
        $request = $request->all();
        $request['image'] = $imageName;
        Location::create($request);

        return redirect()->route('mantenimentLocalitzacions.index');
    }

    public function edit(Location $location) {
        return view('manteniment.localitzacions.editar', compact('location'));
    }
   
    public function update(UpdateLocation $request, Location $location) {
        if (isset($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            if ($location->__get("image") != null && Storage::disk("imgFlag")->exists($location->__get("image"))){
                Storage::disk("imgFlag")->delete($location->__get("image"));
            }
            $request->image->storeAs('public/flags', $imageName);
            $request = $request->all();
            $request['image'] = $imageName;
            $location->update($request);
        } else {
            $location->update($request->all());
        }

        return redirect()->route('mantenimentLocalitzacions.index');
    }
    public function delete(Location $location) {
        $location->delete();
        if (Storage::disk("imgFlag")->exists($location->__get("image"))){
            Storage::disk("imgFlag")->delete($location->__get("image"));
        }
        return redirect()->route('mantenimentLocalitzacions.index');
    }
}
