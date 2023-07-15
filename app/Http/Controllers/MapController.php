<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    public function showMap()
    {
        $latitude = -6.7573;
        $longitude = 111.0386;

        return view('map', compact('latitude', 'longitude'));
    }
}
