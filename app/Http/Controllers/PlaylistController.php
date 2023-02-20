<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use App\Models\Song;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PlaylistController extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|int',
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->messages(), 400);
        }
        $song = Playlist::create([
            'user_id' => $request->get('user_id'),
            'name' => $request->get('name'),
            'type' => $request->get('type')
        ]);
        return response()->json(['message' => 'Playlist Created', 'data' => $song], 200);
    }

    public function show(Playlist $playlist)
    {
        return response()->json(['message'=>'','data'=>$playlist],200);
    }

    public function show_songs(Playlist $playlist){
        return response()->json(['message'=>'','data'=>$playlist->songs],200);
    }

    public function show_user(Playlist $playlist){
        return response()->json(['message'=>'','data'=>$playlist->user],200);
    }

    public function update(Request $request, $id)
    {
        $playlist = Playlist::findOrFail($id);
        $playlist->update($request->all());
        return response()->json(['message'=>'Playlist updated','data'=>$playlist],200);
    }

    public function destroy(Request $request, $id)
    {
        $playlist = Playlist::findOrFail($id);
        $playlist->delete();
        return response()->json(['message'=>'Playlist Deleted','data'=>$playlist],200);
    }
}
