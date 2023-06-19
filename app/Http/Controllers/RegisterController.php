<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'

        ]);
    }

    public function store(Request $request)
    {
        // untuk validasi data 
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        //untuk enkripsi password
        $validatedData['password'] = Hash::make($validatedData['password']);

        // untuk insert data ke database
        User::create($validatedData);

        //menampilkan notifikasi success jika berhasil
        // $request->session()->flash('success', 'Regristration Successful!, Please Login!');

        // kembali ke halaman login
        return redirect('/login')->with('success', 'Regristration Successful!, Please Login!'); //menampilkan notifikasi success jika berhasil
    }
}
