@extends('layouts.app')  

@section('title', 'Mahaiswa')  

@section('content')  
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard 3TRPLB</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-white">
    <!-- Card Profil Mahasiswa -->
    <section
      class="max-w-screen-xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 px-6 py-12"
    >
      <!-- Card 1 -->
      @foreach ($mahasiswa as $mh)  
      <a href="{{ route('mahasiswa.detail', $mh->npm) }}">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
          <div class="relative h-32 bg-gradient-to-r from-indigo-600 to-blue-700">
            <img
              src="{{$mh->capture}}"
              alt="Mahasiswa 1"
              class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-1/2 w-24 h-24 rounded-full border-4 border-white"
            />
          </div>
          <div class="pt-16 pb-6 px-6 text-center">
            <h1 class="text-2xl font-bold text-gray-900 mb-1">{{$mh->nama}}</h1>
            <p class="text-indigo-700 font-semibold mb-4">NIM: {{$mh->npm}}</p>
            
          </div>
        </div>
      </a>
      @endforeach
      
    </section>

  
 
        </div>
      </div>
    </div>
  </body>
</html>

@endsection  