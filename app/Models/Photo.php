<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'name',
        'title',
        'description',
        'author',
    ]; 

    public function comments()
    {
        return $tis->hasMany('App\Models\Comment');
    }
}
