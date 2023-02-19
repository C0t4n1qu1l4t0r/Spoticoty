<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class VoyagerArtistsController extends Controller
{
    public function index(Request $request)
    {
        $artists = Artist::all();
        return view('artists.index', compact('artists'));
    }

    public function show(Request $request, $id)
    {
        $artist = Artist::findOrFail($id);
        return view('artist.show', compact('artist'));
    }
}
