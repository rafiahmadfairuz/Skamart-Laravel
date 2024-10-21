<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('LoginRegister.login');
    }
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $cekData = [
             'email' => $validasi['email'],
             'password' => $validasi['password'],
        ];


        if(Auth::attempt($cekData)){
            return redirect()->route('dashboard')->with('sukses', 'Login Sukses, Terimakasih');
        } else {
            return redirect()->route('login')->with('gagal', 'Email Atau Password Salah, Silahkan Coba Lagi');
        }

    }
}
