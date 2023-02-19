<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    protected $fillable = [
        'name',
        'email',
        'password'
    ];
    public function setting(){
        return $this->hasOne('App\Models\Setting');
    }
    public function playlists(){
        return $this->hasMany('App\Models\Playlist');
    }
    public function artists(){
        return $this ->belongsToMany('App\Models\Artist','user_artist','user_id');
    }

}
