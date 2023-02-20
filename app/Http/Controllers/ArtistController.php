<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ArtistController extends Controller
{
    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255'
        ]);
        if($validator->fails()){
            return response()->json($validator->messages(), 400);
        }
        $artist = Artist::create([
            'name' => $request->get('name')
        ]);
        return response()->json(['message'=>'Artist Created','data'=>$artist],200);
    }

    public function show(Artist $artist){
        return response()->json(['message'=>'','data'=>$artist],200);
    }

    public function show_songs(Artist $artist){
        return response()->json(['message'=>'','data'=>$artist->songs],200);
    }

    public function show_users(Artist $artist){
            return response()->json(['message'=>'','data'=>$artist->users],200);
    }

    public function follow(Request $request, $id)
    {
        try {
            $artist = Artist::findOrFail($id);
            $user = Auth::user();
            $follows = $artist->follows;
            foreach ($follows as $follow) {
                if ($follow->id == $user->id) {
                    return response()->json(['message' => 'No seguir 2 veces al mismo artista'], 403);
                }
            }
            $user_id = [$user->id];
            $artist->follows()->attach($user_id);
            $artist->followers = $artist->followers + 1;
            $artist->save();
        } catch (\Throwable$th) {
            return response()->json(['message' => 'Ha habido un error en el proceso'], 500);
        }
        return response()->json(['message' => 'Artist followed', 'peticion' => $artist], 201);
    }

    public function update(Request $request, $id)
    {
        $artist = Artist::findOrFail($id);
        $artist->update($request->all());
        return response()->json(['message'=>'Artist updated','data'=>$artist],200);
    }

    public function destroy(Request $request, $id)
    {
        $artist = Artist::findOrFail($id);
        $artist->delete();
        return response()->json(['message'=>'Artist Deleted','data'=>$artist],200);
    }
}
