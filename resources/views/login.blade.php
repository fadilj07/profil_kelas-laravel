<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Aplikasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
        <h2 class="text-3xl font-bold text-center text-blue-600">Login</h2>
        <p class="text-gray-500 text-center mb-6">Silakan masuk untuk melanjutkan</p>

        <!-- Alert jika login berhasil -->
        @if (session('success'))
            <div id="success-message" class="bg-green-100 text-green-700 p-3 rounded-md text-center mb-4">
                {{ session('success') }}
            </div>
            <script>
                setTimeout(() => {
                    alert("Login berhasil! Anda akan diarahkan ke dashboard.");
                    window.location.href = "/dashboard";
                }, 1000);
            </script>
        @endif

        <!-- Alert jika terjadi error -->
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded-md text-center mb-4">
                {{ $errors->first() }}
            </div>
        @endif

        <!-- Form Login -->
        <form action="{{ url('/login') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 font-medium">Email</label>
                <input type="email" name="email" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium">Password</label>
                <input type="password" name="password" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition">
                Login
            </button>
        </form>

    </div>
</body>
</html>
