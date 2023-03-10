<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table="user_settings";

    protected $fillable = [
        'user_id',
        'acc_plan',
        'audio_quality',
        'privacy'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
