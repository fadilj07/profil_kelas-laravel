<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class KelasController extends Controller
{

    public function index()
    {
        // Ambil file JSON dari folder public
        $path = public_path('kelas.json');

        // Cek apakah file ada
        if (file_exists($path)) {
            // Membaca isi file
            $json = file_get_contents($path);

            // Mengubah JSON menjadi array
            $mahasiswa = json_decode($json);
        } else {
            $mahasiswa = [];
        }

        // Kirim data ke view
        return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }
    public function detail($npm)
    {
        // Ambil file JSON dari folder public
        $path = public_path('kelas.json');

        // Cek apakah file ada
        if (file_exists($path)) {
            // Membaca isi file
            $json = file_get_contents($path);

            // Mengubah JSON menjadi array (tanpa parameter true, agar jadi objek)
            $mahasiswa = json_decode($json);

            // Cari data berdasarkan npm
            $detail = null;

            foreach ($mahasiswa as $mh) {
                if ($mh->npm == $npm) {
                    $detail = $mh;
                    break; // Hentikan pencarian jika data sudah ditemukan
                }
            }

            // Jika tidak ditemukan, kembalikan 404
            if (!$detail) {
                abort(404, 'Mahasiswa tidak ditemukan');
            }
        } else {
            abort(404, 'File JSON tidak ditemukan');
        }

        // Kirim data ke view
        return view('detail', ['mh' => $detail]);
    }
    

    // 
    public function getKelas()
    {
        // Baca file JSON
        $path = storage_path('app/public/kelas.json');
        if (!File::exists($path)) {
            return response()->json(['error' => 'File tidak ditemukan'], 404);
        }

        $json = File::get($path);
        $data = json_decode($json, true);

        return response()->json($data);
    }
    public function showDetail($id)
{
    $path = storage_path('app/public/kelas.json');
    if (!File::exists($path)) {
        return abort(404, 'File tidak ditemukan');
    }

    $json = File::get($path);
    $data = json_decode($json, true);

    // Cari anggota berdasarkan ID
    $anggota = collect($data)->firstWhere('id', $id);

    if (!$anggota) {
        return abort(404, 'Anggota tidak ditemukan');
    }

    return view('detail_anggota', compact('anggota'));
}

}
