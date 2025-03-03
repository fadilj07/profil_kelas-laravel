<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Menampilkan halaman login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Proses login
Route::post('/login', [AuthController::class, 'login']);

// Menampilkan dashboard (hanya bisa diakses jika login)
Route::get('/dashboard', [AuthController::class, 'dashboard']);

// Logout
Route::post('/logout', [AuthController::class, 'logout']);
