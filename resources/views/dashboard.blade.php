<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Kelas</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="max-w-4xl mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-3xl font-bold text-center text-blue-600 mb-4">Profil Kelas</h1>

        <!-- Foto Kelas -->
        <div class="flex justify-center mb-6">
            <img src="https://source.unsplash.com/600x300/?students,classroom" alt="Foto Kelas" class="rounded-lg shadow-md">
        </div>

        <!-- Informasi Kelas -->
        <div class="text-center">
            <h2 class="text-2xl font-semibold">Nama Kelas: 3 TRPL B</h2>
            <p class="text-gray-600">Wali Kelas: <strong>INDAH PRATIWI</strong></p>
            <p class="text-gray-600">Jumlah Siswa: <strong>30</strong> MAHASISWA</p>
        </div>

        <!-- Daftar Siswa -->
        <h3 class="mt-6 text-xl font-semibold text-gray-700">Daftar Siswa</h3>
        <ul class="mt-2 space-y-2">
            <li class="bg-blue-100 p-2 rounded-md">1. Ahmad</li>
            <li class="bg-blue-100 p-2 rounded-md">2. Budi</li>
            <li class="bg-blue-100 p-2 rounded-md">3. Cindy</li>
            <li class="bg-blue-100 p-2 rounded-md">4. Dani</li>
            <li class="bg-blue-100 p-2 rounded-md">5. Erika</li>
            <!-- Tambahkan siswa lainnya -->
        </ul>

        <!-- Tombol Kembali -->
        <div class="mt-6 text-center">
            <a href="/login" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Kembali ke Beranda</a>
        </div>
    </div>
</body>
</html>
