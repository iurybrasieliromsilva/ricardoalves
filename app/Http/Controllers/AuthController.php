<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        if( \Auth::attempt($credentials) )
        {
            return redirect()->route('home');
        }

        return redirect()->back()->with('error', 'Credenciais incorretas.');
    }

    public function logout()
    {
        \Auth::logout();
        
        return redirect()->route('home');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function create(UserRequest $request)
    {
        
        $name = uniqid(date('HisYmd'));
        
        $extension = $request->file('photo_profile')->extension();
        
        $nameFile = "{$name}.{$extension}";

        $upload = $request->file('photo_profile')->storeAs('images', $nameFile);

        if(!$upload){
            return redirect()
                ->back()
                ->with('error', 'Falha ao salvar imagem.')
                ->withInput();
        }
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'photo_profile' => $nameFile,
        ]);

        if( !$user ){
            return redirect()
                ->back()
                ->withInput();
        }

        return redirect()->route('auth.login');
    }
}
