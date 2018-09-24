<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function create(UserRequest $request)
    {
        if($request->hasFile('photo_profile')){
            $image      = $request->file('photo_profile');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();

            $img = \Image::make($image->getRealPath());

            $img->stream();

            Storage::disk('local')->put('images'.'/'.$fileName, $img, 'public');
        }
        return redirect()->route('auth.register');
    }
}
