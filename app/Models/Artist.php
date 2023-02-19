<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function songs(){
        return $this->hasMany('App\Models\Song');
    }
    public function users(){
        return $this ->belongsToMany('App\Models\User','user_artist','artist_id');
    }
}
