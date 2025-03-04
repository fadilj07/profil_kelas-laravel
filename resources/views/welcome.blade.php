@extends('layouts.app')  

@section('title', 'Detail Profil')  

@section('content')  
    <!-- Landing Page -->
    <section class="relative text-white overflow-hidden ">
      <div
        class="container mx-auto lg:px-12 px-5 py-24 md:py-32 relative z-10 lg:h-[70vh]"
      >
        <div class="flex flex-col md:flex-row items-center justify-around">
          <div class="w-full md:w-1/2 mb-12 md:mb-0 relative">
            <h1 class="text-5xl md:text-8xl font-bold mb-6 leading-tight">
              <span
                class="bg-gradient-to-r from-blue-700 via-green-400 to-indigo-400 inline-block text-transparent bg-clip-text"
              >
               3 TRPL B
              </span>
            </h1>

            <p class="text-xl mb-5 text-gray-300">
                Selamat datang di website kami! Temukan berbagai informasi dan inspirasi
                untuk masa depan yang lebih cerah..
            </p>
            <a href="#">
            <div
              class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4"
            >
              <button
                class="group relative w-full sm:w-auto px-6 py-3 min-w-[160px]"
              >
                <div
                  class="absolute inset-0 bg-gradient-to-r from-violet-600 to-cyan-600 rounded-lg"
                ></div>
                <div
                  class="absolute inset-0 bg-gradient-to-r from-violet-600 to-cyan-600 rounded-lg lg:blur-md blur-0 group-hover:opacity-60 transition-opacity duration-500"
                ></div>
                <div class="relative flex items-center justify-center gap-2">
                  <span class="text-white font-medium">Logout</span>
                  <svg
                    class="w-5 h-5 text-white transform group-hover:translate-x-1 transition-transform"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                  >
                    <path
                      strokeLinecap="round"
                      strokeLinejoin="round"
                      strokeWidth="2"
                      d="M13 7l5 5m0 0l-5 5m5-5H6"
                    />
                  </svg>
                </div>
              </button>
            </div>
            </a>
          </div>

          <div class="w-full md:w-2/5 md:pl-12">
            <div
              <div class="max-w-sm mx-auto bg-white rounded-lg overflow-hidden shadow-lg text-black">
        <div class="px-4 py-6  border-r-4 border-indigo-500">
            <div class="text-center my-4 ">
                <img class="h-32 w-32 rounded-full border-4 border-white dark:border-gray-800 mx-auto my-4"
                src="https://i.pravatar.cc/300?img=1" alt="Profile Picture">
                <div class="py-2">
                    <h3 class="font-bold text-2xl text-indigo-800 ">Indah Riezky Pratiwi,M.Pd</h3>
                 
                    <div class="inline-flex text-gray-700">
                       
                        <span class="text-lg">Wali Kelas 3TRPLB</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- menu button -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-4/5 mx-auto my-10">
        <!-- Card 1: Daftar Mahasiswa -->
    <a href="{{ route('mahasiswa') }}">
    <div class="bg-white rounded-lg shadow-lg p-6 flex items-center justify-between border-l-4 border-blue-500 hover:shadow-xl transition duration-300">
            <div>
                <h2 class="text-xl font-semibold text-gray-800">Daftar Mahasiswa</h2>
                <p class="text-gray-600">Lihat daftar mahasiswa beserta profil lengkapnya.</p>
            </div>
            <svg class="w-10 h-10 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11M9 21V3m3 18h8m-4-4l4 4m0 0l-4 4"></path>
            </svg>
        </div>
    </a>
    
        <!-- Card 2: Jadwal Perkuliahan -->
       <a href="{{ route('jadwal') }}">
       <div class="bg-white rounded-lg shadow-lg p-6 flex items-center justify-between border-l-4 border-green-500 hover:shadow-xl transition duration-300">
            <div>
                <h2 class="text-xl font-semibold text-gray-800">Jadwal Perkuliahan</h2>
                <p class="text-gray-600">Lihat jadwal perkuliahan terbaru untuk semua mata kuliah.</p>
            </div>
            <svg class="w-10 h-10 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-8 8h8m-8 4h4m5-10h2a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2"></path>
            </svg>
        </div>
       </a>
    </div>
    

    <!-- Tentang TRPL -->
    <div class="sm:flex items-center max-w-screen-xl mx-auto p-6">
      <div class="sm:w-1/2 p-10">
        <div class="image object-center text-center">
          <img src="https://i.imgur.com/WbQnbas.png" alt="Tentang TRPL" />
        </div>
      </div>
      <div class="sm:w-1/2 p-5">
        <div class="text">

          <h2 class="my-4 font-bold text-3xl sm:text-4xl">
            <span class="text-indigo-600 border-b-8 border-indigo-500">TRPL</span>
          </h2><br>
          <p class="text-gray-700 text-justify">
            Program Studi Teknologi Rekayasa Perangkat Lunak (TRPL) berfokus
            pada pengembangan perangkat lunak berbasis teknologi modern.
            Mahasiswa dibekali keterampilan dalam pemrograman, analisis sistem,
            dan pengelolaan proyek perangkat lunak. Dengan kurikulum berbasis
            industri, TRPL menyiapkan lulusan yang siap bersaing di dunia kerja
            sebagai software engineer, web developer, dan profesional IT
            lainnya.
          </p>
        </div>
      </div>
    </div>

    <!-- Gallery -->
    <div class="py-10">
        <div class="container mx-auto px-4">
          <h2 class="my-4 font-bold text-3xl sm:text-4xl">
              <span class="text-indigo-600 border-b-8 border-indigo-500">Gallery</span>
            </h2><br>
          <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <!-- Large item -->
            <div
              class="md:col-span-2 md:row-span-2 relative overflow-hidden rounded-2xl shadow-lg group"
            >
            <img
                src="{{ asset('images/galeri4.jpg') }}"
                class="w-full h-97 object-cover"
              />
              <div
                class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4"
              >
                <h4 class="text-xl font-bold text-white">Hari Batik Nasional</h4>
              </div>
          
            </div>
  
            <!-- Small items -->
            <div class="relative overflow-hidden rounded-2xl shadow-lg group">
              <img
                src="{{ asset('images/galeri2.jpg') }}"
                class="w-full h-48 object-cover"
              />
              <div
                class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4"
              >
                <h4 class="text-xl font-bold text-white">Buka Bersama 2024</h4>
              </div>
            </div>
  
            <div class="relative overflow-hidden rounded-2xl shadow-lg group">
              <img
                src="{{ asset('images/galeri3.jpg') }}"
                class="w-full h-48 object-cover"
              />
              <div
                class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4"
              >
                <h4 class="text-xl font-bold text-white">Buka Bersama 2024</h4>
              </div>
            </div>
  
            <!-- Medium items -->
            <div class="relative overflow-hidden rounded-2xl shadow-lg group">
            <img
                src="{{ asset('images/galeri1.jpg') }}"
                class="w-full h-48 object-cover"
              />
              <div
                class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4"
              >
                <h3 class="text-2xl font-bold text-white">Buka Bersama 2024</h3>
              </div>
            </div>
  
            <div class="relative overflow-hidden rounded-2xl shadow-lg group">
              <img
                src="{{ asset('images/galeri5.jpg') }}"
                class="w-full h-48 object-cover"
              />
              <div
                class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4"
              >
                <h4 class="text-xl font-bold text-white">Kelas</h4>
              </div>
            </div>
          </div>
        </div>
      </div>

    <section class="w-4/5 mx-auto text-justify ">  
        <h2 class="my-4 font-bold text-3xl sm:text-4xl">
            <span class="text-indigo-600 border-b-8 border-indigo-500">POLMAN BABEL</span>
          </h2> <br>
        <div class=" mx-auto grid grid-cols-4 gap-4">
            <div class="relative">
                <img src="https://polman-babel.ac.id/public/uploads/cover-konten/1637802955_5904fcebe0e7235f993e.jpg" alt="Kampus 1"class="object-cover h-48 w-full rounded-lg shadow-xl">
               
            </div>
            <div class="relative">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTU_-vwDENvZxiv54Nnwzh5YzX8aSoNhluf6Q&s" alt="Kampus 2"class="object-cover h-48 w-full rounded-lg shadow-xl">
               
            </div>
            <div class="relative">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOBA-h_VxT4_olYx3wQBIsSi1RxCzvk_Qaeg&s" alt="Kampus 3"class="object-cover h-48 w-full rounded-lg shadow-xl">
               
            </div>
            <div class="relative">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQnDFRS0IOuqYk0VA0KvwlOH7n88gNXhMOmeg&s" alt="Kampus 4" class="h-48 w-full rounded-lg shadow-xl">
               
            </div>
        </div>
        <br><br>
        <p class="text-lg mb-5 text-gray-700 text-justify">
            Politeknik Manufaktur Negeri Bangka Belitung (Polman Babel) bermula dari Politeknik Manufaktur Timah, sebuah institusi pendidikan tinggi yang didirikan oleh PT. Timah, Tbk. di tahun 1994 sebagai bentuk sumbangsih di bidang pendidikan. Polman Babel telah berkiprah selama hampir dua puluh tahun dan meluluskan lebih dari 1400 alumni yang telah terserap ke berbagai sektor pekerjaan, mulai dari industri nasional, perusahaan multinasional dan internasional, hingga sektor usaha mandiri atau wirausaha.
        </p>
        <p class="text-lg mb-5 text-gray-700 text-justify">
            Selain di dalam negeri, lulusan Polman Babel juga berhasil meniti karier di Taipei, Singapura, Qatar, Arab Saudi, Australia, dan banyak negara lainnya lho. Hal ini dapat terwujud berkat kerja sama yang dilakukan Polman Negeri Babel dengan berbagai mitra seperti Yangzhou Polytechnic Institute, National Kaohsiung First University of Science and Technology, dan National Taipei University of Technology.
        </p>
        
    </section>
    
 
 
    

   
@endsection
