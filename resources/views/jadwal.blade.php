
@extends('layouts.app')  

@section('title', 'Detail Profil')  

@section('content')  
<div class=" p-6">
    <div class="max-w-6xl mx-auto bg-white shadow-lg rounded-lg p-6">
        <h1 class="text-2xl font-bold text-center text-indigo-800 mb-4">Jadwal Kuliah 3 TRPL B - Semester 6</h1>
        <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-indigo-800 text-white">
                        <th class="border border-gray-300 px-4 py-2">HARI / JAM</th>
                        <th class="border border-gray-300 px-4 py-2">SENIN</th>
                        <th class="border border-gray-300 px-4 py-2">SELASA</th>
                        <th class="border border-gray-300 px-4 py-2">RABU</th>
                        <th class="border border-gray-300 px-4 py-2">KAMIS</th>
                        <th class="border border-gray-300 px-4 py-2">JUMAT</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2">07:30 - 08:20</td>
                        <td class="border border-gray-300 px-4 py-2">PAR100</td>
                        <td class="border border-gray-300 px-4 py-2">PEI106</td>
                        <td class="border border-gray-300 px-4 py-2"></td>
                        <td class="border border-gray-300 px-4 py-2">PAR100</td>
                        <td class="border border-gray-300 px-4 py-2">EDG106</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">08:20 - 09:10</td>
                        <td class="border border-gray-300 px-4 py-2">PAR100</td>
                        <td class="border border-gray-300 px-4 py-2">PEI106</td>
                        <td class="border border-gray-300 px-4 py-2"></td>
                        <td class="border border-gray-300 px-4 py-2">PAR100</td>
                        <td class="border border-gray-300 px-4 py-2">EDG106</td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2">09:30 - 10:20</td>
                        <td class="border border-gray-300 px-4 py-2">PAR100</td>
                        <td class="border border-gray-300 px-4 py-2">KEP107</td>
                        <td class="border border-gray-300 px-4 py-2">PAR100</td>
                        <td class="border border-gray-300 px-4 py-2">PAR100</td>
                        <td class="border border-gray-300 px-4 py-2">EDG106</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">10:20 - 11:10</td>
                        <td class="border border-gray-300 px-4 py-2">PAR100</td>
                        <td class="border border-gray-300 px-4 py-2">KEP107</td>
                        <td class="border border-gray-300 px-4 py-2">PAR100</td>
                        <td class="border border-gray-300 px-4 py-2">PAR100</td>
                        <td class="border border-gray-300 px-4 py-2">EDG106</td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2">11:10 - 12:00</td>
                        <td class="border border-gray-300 px-4 py-2">PEI106</td>
                        <td class="border border-gray-300 px-4 py-2">KEP107</td>
                        <td class="border border-gray-300 px-4 py-2">PAR100</td>
                        <td class="border border-gray-300 px-4 py-2">KSK107</td>
                        <td class="border border-gray-300 px-4 py-2"></td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">12:00 - 13:00</td>
                        <td colspan="5" class="border border-gray-300 px-4 py-2 text-center bg-gray-300">ISTIRAHAT</td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2">13:00 - 13:50</td>
                        <td class="border border-gray-300 px-4 py-2">PEI106</td>
                        <td class="border border-gray-300 px-4 py-2">KEP107</td>
                        <td class="border border-gray-300 px-4 py-2">BIG300</td>
                        <td class="border border-gray-300 px-4 py-2">KSK107</td>
                        <td class="border border-gray-300 px-4 py-2"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection  