<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['only' => 'showLoginForm']);
    }

    public function login()
    {
        $credentials = $this->validate(request(),[
            'email' => 'email|required|string',
            'password' => 'required|string'
        ]);

        if(Auth::attempt($credentials))
        {
            return redirect()->route('dashboard');
        }
        return back()->withErrors(['email' => 'Verifica tu usuario y/o contraseña'])
            ->withInput(request(['email']));
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

    public function username()
    {
        return 'name';
    }
}
