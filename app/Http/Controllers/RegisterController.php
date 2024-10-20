<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('LoginRegister.register');
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'username' => 'required',
            'email' => 'email|required',
            'password' => 'required'
        ], [
            'username.required' => 'Username Wajib diisi',
            'email.email' => 'Email wajib Menggunakan format @ dan .',
            'email.required' => 'Email wajib diisi',
            'password' => 'Password Wajib Diisi'
        ]);

        User::create($validasi);
        return redirect()->route('home');
    }
}
