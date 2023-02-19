<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Song;
use Illuminate\Http\Request;
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
}
