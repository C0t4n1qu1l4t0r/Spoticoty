<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'artist_id',
        'name',
        'duration'
    ];

    public function artist(){
        return $this->belongsTo('App\Models\Artist');
    }
    public function playlists(){
        return $this ->belongsToMany('App\Models\Playlist','playlist_song','song_id');
    }

}
