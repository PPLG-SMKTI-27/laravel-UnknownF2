<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormLogin extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        if ($email == 'example@gmail.com' && $password == '123') {
            session(['user' => $email]);
            return redirect('/portfolio');
        } else {
            return redirect('/login')->with('error', 'Email atau password salah');
        }
    }

    public function logout()
    {
        session()->forget('user');
        return redirect('/login');
    }
}
