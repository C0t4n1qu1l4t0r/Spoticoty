<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'type'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function songs(){
        return $this ->belongsToMany('App\Models\Song','playlist_song','playlist_id');
    }
}
