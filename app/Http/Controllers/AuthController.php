<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // GET /auth
    public function index()
    {
        return view('login-form');
    }

    // POST /auth/login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required',
            'password' => [
                'required',
                'min:3',
                'regex:/[A-Z]/' // Harus ada minimal 1 huruf kapital
            ],
            [
                'username.required' => 'Username wajib diisi.',
                'password.required' => 'Password wajib diisi.',
                'password.min' => 'Password minimal 3 karakter.',
                'password.regex' => 'Password harus mengandung minimal 1 huruf kapital.'
            ]
        ]);

        // Ambil data dari input
        $username = $request->input('username');
        $password = $request->input('password');

        // Sederhana: login berhasil jika username == password
        if ($username === $password) {
            return view('welcome', compact('username'));
        }

        // Kalau gagal
        return redirect('/auth')->with('error', 'Username dan Password harus sama.');
    }
}
