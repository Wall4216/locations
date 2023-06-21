<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::all();
        return response()->json($locations);
    }

    public function store(Request $request)
    {
        $location = Location::create($request->all());
        return response()->json($location, 201);
    }

    public function show($id)
    {
        $location = Location::findOrFail($id);
        return response()->json($location);
    }

    public function update(Request $request, $id)
    {
        $location = Location::findOrFail($id);
        $location->update($request->all());
        return response()->json($location);
    }

    public function destroy($id)
    {
        $location = Location::findOrFail($id);
        $location->delete();
        return response()->json(['message' => 'Location deleted']);
    }
}
