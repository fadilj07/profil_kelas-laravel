@extends('layout')

@section('content')
   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   </head>
   <body>
    <h2 class="text-2xl font-bold mb-4">Daftar Anggota Kelas</h2>
    
    <table class="w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-blue-500 text-white">
                <th class="border border-gray-300 p-2">Nama</th>
                <th class="border border-gray-300 p-2">NIM</th>
                <th class="border border-gray-300 p-2">Jabatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($anggota as $item)
            <tr class="bg-gray-100 text-center">
                <td class="border border-gray-300 p-2">{{ $item['nama'] }}</td>
                <td class="border border-gray-300 p-2">{{ $item['nim'] }}</td>
                <td class="border border-gray-300 p-2">{{ $item['role'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
   </body>
   </html>
@endsection
