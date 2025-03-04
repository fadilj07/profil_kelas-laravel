<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Kelas</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-blue-600 p-4 text-white">
        <div class="container mx-auto flex justify-between">
            <h1 class="text-xl font-bold">Profil Kelas</h1>
            <div>
                <a href="{{ route('dashboard') }}" class="mr-4">Home</a>
                <a href="{{ route('daftar-anggota') }}">Daftar Anggota</a>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mx-auto mt-6 p-6 bg-white shadow-md rounded-lg">
        @yield('content')
    </div>

</body>
</html>
