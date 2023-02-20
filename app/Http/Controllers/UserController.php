<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255'
        ]);
        if($validator->fails()){
            return response()->json($validator->messages(), 400);
        }
        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => $request->get('password')

        ]);
        return response()->json(['message'=>'User Created','data'=>$user],200);
    }

    public function show(User $user)
    {
        return response()->json(['message'=>'','data'=>$user],200);
    }

    public function show_settings(User $user)
    {
        return response()->json(['message'=>'','data'=>$user->setting],200);
    }

    public function show_playlists(User $user)
    {
        return response()->json(['message'=>'','data'=>$user->playlists],200);
    }

    public function show_artists(User $user)
    {
        return response()->json(['message'=>'','data'=>$user->artists],200);
    }

    public function artistsFollowed(Request $request)
    {
        $id = Auth::id();
        $usuario = User::findOrFail($id);
        $artists = $usuario->follows;
        return $artists;
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return response()->json(['message'=>'User updated','data'=>$user],200);
    }

    public function destroy(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json(['message'=>'User Deleted','data'=>$user],200);
    }

}
