<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [\App\Http\Controllers\PagesController::class, 'home']);
//Artists
Route::get('/artists/index',[\App\Http\Controllers\VoyagerArtistsController::class, 'index']);
Route::get('/artists/artist/{id}',[\App\Http\Controllers\VoyagerArtistsController::class, 'show']);
//Playlists
Route::get('/playlists/index',[\App\Http\Controllers\VoyagerPlaylistsController::class, 'index']);
Route::get('playlists/playlist/{id}',[\App\Http\Controllers\VoyagerPlaylistsController::class, 'show']);
//Users
Route::get('/users/misArtistas/{id}',[\App\Http\Controllers\VoyagerUsersController::class, 'show_artists']);
Route::get('/users/misPlaylists/{id}',[\App\Http\Controllers\VoyagerUsersController::class, 'show_playlists']);
Route::get('/users/misAjustes/{id}',[\App\Http\Controllers\VoyagerUsersController::class, 'show_settings']);



require __DIR__.'/auth.php';
