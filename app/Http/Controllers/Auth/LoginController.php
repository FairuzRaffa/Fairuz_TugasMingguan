<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login', [
            'title' => 'Login'
        ]);
    }

    public function login(Request $request)
    {
        // Validate input
        $credentials = $request->validate([
            'email' => ['required', 'email', 'string'],
            'password' => ['required', 'string', 'min:6']
        ], [
            'email.required' => 'Email harus diisi',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password harus diisi',
            'password.min' => 'Password minimal 6 karakter'
        ]);

        // Attempt login
        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('/datamahasiswa')->with('success', 'Login berhasil!');
        }

        // Return error if login fails
        return back()->withErrors([
            'email' => 'Email atau password tidak sesuai dengan data kami.',
        ])->onlyInput('email')->with('error', 'Login gagal, silakan cek email dan password Anda.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Logout berhasil');
    }
}
