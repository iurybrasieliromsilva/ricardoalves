<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('home.index', [
            'photos' => Photo::orderBy('created_at', 'desc')->take(6)->get()
        ]);
    }
}