<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Menampilkan halaman login
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Proses login
Route::post('/login', [AuthController::class, 'login']);

// Menampilkan dashboard (hanya bisa diakses jika login)
Route::get('/dashboard', [AuthController::class, 'dashboard']);
Route::get('/dashboard', [AuthController::class, 'index'])->name('dashboard');
// Logout
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/daftar-anggota', [AuthController::class, 'daftarAnggota'])->name('daftar-anggota');
