<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SongController extends Controller
{
    public function publish(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'artist_id' => 'required|int',
            'name' => 'required|string|max:255',
            'duration' => 'required|string|max:255'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->messages(), 400);
        }
        $song = Song::create([
            'artist_id' => $request->get('artist_id'),
            'name' => $request->get('name'),
            'duration' => $request->get('duration')
        ]);
        return response()->json(['message' => 'Song Published', 'data' => $song], 200);
    }

    function list(Request $request) {
        $song = Song::jsonPaginate();
        return $song;
    }

    public function show_artist(Song $song)
    {
        return response()->json(['message'=>'','data'=>$song->artist],200);
    }

    public function show_playlist(Song $song)
    {
        return response()->json(['message'=>'','data'=>$song->playlists],200);
    }

    public function update(Request $request, $id)
    {
        $song = Song::findOrFail($id);
        $song->update($request->all());
        return response()->json(['message'=>'Song updated','data'=>$song],200);
    }

    public function destroy(Request $request, $id)
    {
        $song = Song::findOrFail($id);
        $song->delete();
        return response()->json(['message'=>'Song Deleted','data'=>$song],200);
    }
}
