<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(UserController::class)->group(function(){
    Route::post('register', 'register');
    Route::get('user/{user}', 'show');
    Route::get('user/{user}/setting', 'show_settings');
    Route::get('user/{user}/playlists', 'show_playlists');
    Route::get('user/{user}/artists', 'show_artists');
});

Route::controller(SettingController::class)->group(function(){
    Route::post('asign', 'asign');
    Route::get('setting/{setting}','show');
    Route::get('setting/{setting}/user', 'show_user');
});

Route::controller(SongController::class)->group(function(){
    Route::post('publish', 'publish');
    Route::get('song/{song}', 'show');
    Route::get('song/{song}/artist', 'show_artist');
    Route::get('song/{song}/playlists', 'show_playlists');
});

Route::controller(PlaylistController::class)->group(function(){
    Route::post('create', 'create');
    Route::get('playlist/{playlist}', 'show');
    Route::get('playlist/{playlist}/songs', 'show_songs');
    Route::get('playlist/{playlist}/user', 'show_user');
});

Route::controller(ArtistController::class)->group(function(){
    Route::post('start', 'register');
    Route::get('artist/{artist}', 'show');
    Route::get('artist/{artist}/songs', 'show_songs');
    Route::get('artist/{artist}/users', 'show_users');
});
