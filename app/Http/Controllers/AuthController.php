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
    public function showLogout()
    {
        return view('login');
    }
    public function logout()
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
            return redirect('/');
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
    private $anggota = [
        ['nama' => 'Fadil', 'nim' => '123456', 'role' => 'Ketua Kelas', 'email' => 'fadil@example.com'],
        ['nama' => 'Rizky', 'nim' => '123457', 'role' => 'Wakil Ketua', 'email' => 'rizky@example.com'],
        ['nama' => 'Aisyah', 'nim' => '123458', 'role' => 'Sekretaris', 'email' => 'aisyah@example.com'],
        ['nama' => 'Dian', 'nim' => '123459', 'role' => 'Bendahara', 'email' => 'dian@example.com']
    ];

    public function index()
    {
        return view('home');
    }

    public function daftarAnggota()
    {
        return view('mahasiswa', ['anggota' => $this->anggota]);
    }

    public function detailAnggota($nim)
    {
        $anggota = collect($this->anggota)->firstWhere('nim', $nim);

        if (!$anggota) {
            abort(404);
        }

        return view('detail_anggota', ['anggota' => $anggota]);
    }
   

    // public function index2()
    // {
    //     $filePath = storage_path('app/public/kelas.json');
        
    //     if (!file_exists($filePath)) {
    //         return response()->json(['message' => 'File tidak ditemukan'], 404);
    //     }

    //     $data = json_decode(file_get_contents($filePath), true);
    //     return response()->json($data);
    // }
}