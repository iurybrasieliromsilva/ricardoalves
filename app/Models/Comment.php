<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'photo_profile',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
