@extends('layouts.app')  

@section('title', 'Detail Profil')  

@section('content')  
<section class="min-h-screen flex items-center justify-center p-4">
<div
      class="bg-white  rounded-xl shadow-2xl max-w-4xl w-full p-8 transition-all duration-300 animate-fade-in"
    >
      <div class="flex flex-col md:flex-row">
        <!-- Bagian Kiri - Foto Profil -->
        <div class="md:w-1/3 text-center mb-8 md:mb-0">
          <img
            src="{{$mh->capture}}"
            alt="Foto Mahasiswa"
            class="rounded-full w-48 h-48 mx-auto mb-4 border-4 border-indigo-800 dark:border-blue-900 transition-transform duration-300 hover:scale-105"
          />
          <h1 class="text-2xl font-bold text-dark mb-2">
            {{$mh->nama}}
          </h1>
          <p class="text-gray-600">Mahasiswa TRPL</p>
        </div>

        <!-- Bagian Kanan - Informasi Mahasiswa -->
        <div class="md:w-2/3 md:pl-8">
          <h2
            class="text-xl font-semibold text-indigo-800 mb-4"
          >
            Informasi Pribadi
          </h2>
          <ul class="text-gray-700 space-y-2">
            <li><strong>NPM:</strong> {{$mh->npm}}</li>
            <li><strong>Tanggal Lahir:</strong> {{$mh->ttl}}</li>
            <li><strong>Hobi:</strong> {{$mh->hobi}}</li>
            <li><strong>Gender:</strong> {{$mh->gender}}</li>
          </ul>

          <h2
            class="text-xl font-semibold text-indigo-800 mt-6 mb-4"
          >
            Kontak
          
            <div class="flex space-x-4 justify-start">
                <!-- Email -->
                <a href="mailto:rizky.saputra@example.com" target="_blank" class="transform hover:scale-110 transition-transform duration-300">
                    <img src="https://cdn-icons-png.flaticon.com/512/732/732200.png" alt="Email" class="w-10 h-10">
                </a>
            
                <!-- WhatsApp -->
                <a href="https://wa.me/6281234567890" target="_blank" class="transform hover:scale-110 transition-transform duration-300">
                    <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp" class="w-10 h-10">
                </a>
            
                <!-- Instagram -->
                <a href="https://instagram.com/username" target="_blank" class="transform hover:scale-110 transition-transform duration-300">
                    <img src="https://cdn-icons-png.flaticon.com/512/733/733558.png" alt="Instagram" class="w-10 h-10">
                </a>
            </div>
            
        </div>
      </div>
    </div>

</section>
    <style>
      @keyframes fadeIn {
        from {
          opacity: 0;
          transform: translateY(-10px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }
      .animate-fade-in {
        animation: fadeIn 0.5s ease-out forwards;
      }
    </style>

    <script>
      // Toggle dark mode berdasarkan preferensi sistem
      if (window.matchMedia("(prefers-color-scheme: dark)").matches) {
        document.documentElement.classList.add("dark");
      }
    </script>  
@endsection  