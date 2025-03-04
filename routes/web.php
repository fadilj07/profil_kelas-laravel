<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KelasController;
use Illuminate\Support\Facades\Route;

// Menampilkan halaman login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Proses login
Route::post('/login', [AuthController::class, 'login']);

// Logout hanya menggunakan POST
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/logout', [AuthController::class, 'showLogout'])->name('logout');


// Data Mahasiswa
Route::get('/mahasiswa', [KelasController::class, 'index'])->name('mahasiswa');
Route::get('/mahasiswa/{npm}', [KelasController::class, 'detail'])->name('mahasiswa.detail');

// Halaman utama
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Halaman Jadwal Perkuliahan
Route::get('/jadwal-perkuliahan', function () {
    return view('jadwal');
})->name('jadwal');

// Halaman Detail Profile
Route::get('/detail-profile', function () {
    return view('detail');
});

// Menampilkan dashboard (hanya bisa diakses jika login)
// Route::get('/dashboard', [AuthController::class, 'dashboard']);
// Route::get('/dashboard', [AuthController::class, 'index'])->name('dashboard');
// Logout
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// // Route::get('/daftar-anggota', [AuthController::class, 'daftarAnggota'])->name('daftar-anggota');
// // Route::get('/dashboard', [AuthController::class, 'index'])->name('dashboard');
// // Route::get('/mahasiswa', [AuthController::class, 'daftarAnggota'])->name('mahasiswa');
// Route::get('/anggota/{npm}', [AuthController::class, 'detailAnggota'])->name('detail-anggota');
// Route::get('/api/kelas', [KelasController::class, 'getKelas']);
// Route::get('/anggota/{npm}', [KelasController::class, 'showDetail']);
// Route::get('/kelas', function () {
//     $json = Storage::disk('local')->get('kelas.json');
//     return response()->json(json_decode($json, true));
// });

// Route::get('/anggota/{npm}', function ($npm) {
//     $json = Storage::disk('local')->get('kelas.json');
//     $anggota = json_decode($json, true);

//     $detail = collect($anggota)->firstWhere('npm', $npm);

//     if (!$detail) {
//         abort(404);
//     }

//     return view('detail_anggota', compact('detail'));
// })->name('anggota-detail');
