<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('login');
    }

    // Proses login
    public function login(Request $request)
    {
        $credentials = [
            'email' => 'admin@example.com',
            'password' => '123'
        ];
    
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
    
        // Cek apakah email dan password sesuai
        if ($request->email === $credentials['email'] && $request->password === $credentials['password']) {
            Session::put('is_logged_in', true);
            Session::flash('success', 'Login berhasil! Selamat datang di Dashboard.');
            return redirect('/login');
        }
    
        // Jika salah, kembali ke halaman login dengan error
        return back()->withErrors(['email' => 'Email atau password salah']);
    }
    
    // Menampilkan halaman dashboard (hanya jika sudah login)
    public function dashboard()
    {
        if (!Session::get('is_logged_in')) {
            return redirect('/login');
        }
        return view('dashboard');
    }

    // Logout
    public function logout()
    {
        Session::forget('is_logged_in');
        return redirect('/login');
    }
}
