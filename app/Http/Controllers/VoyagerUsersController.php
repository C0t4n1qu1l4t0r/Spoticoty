<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class VoyagerUsersController extends Controller
{
    public function show_artists(Request $request, $id){
        $user = User::findOrFail($id);
        return view('users.misArtistas',compact('user'));
    }

    public function show_playlists(Request $request, $id){
        $user = User::findOrFail($id);
        return view('users.misPlaylists',compact('user'));
    }

    public function show_settings(Request $request, $id){
        $user = User::findOrFail($id);
        return view('users.misAjustes',compact('user'));
    }
}
