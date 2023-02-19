<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use Illuminate\Http\Request;

class VoyagerPlaylistsController extends Controller
{
    public function index(Request $request)
    {
        $playlists = Playlist::all();
        return view('playlists.index', compact('playlists'));
    }

    public function show(Request $request, $id)
    {
        $playlist = Playlist::findOrFail($id);
        return view('playlist.show', compact('playlist'));
    }
}
