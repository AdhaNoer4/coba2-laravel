<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    // method untuk autentifikasi login
    public function authenticate(Request $request): RedirectResponse
    {
        //untuk validasi email & password
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);


        // jika autentifikasi berhasil 
        if (Auth::attempt($credentials)) {
            // untuk regenerate session agar terhindar session fixation
            $request->session()->regenerate();

            // untuk redirect ke route dashboard
            return redirect()->intended('/dashboard');
        }

        // jika autentifikasi gagal
        return back()->with('loginError', 'Login Failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
