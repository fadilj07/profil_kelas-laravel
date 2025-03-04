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
<div class="container mt-4">
    <h2>Detail Anggota</h2>
    <table class="table">
        <tr>
            <th>Nama:</th>
            <td>{{ $anggota['nama'] }}</td>
        </tr>
        <tr>
            <th>NPM:</th>
            <td>{{ $anggota['npm'] }}</td>
        </tr>
        <tr>
            <th>Alamat:</th>
            <td>{{ $anggota['alamat'] }}</td>
        </tr>
        <tr>
            <th>Tanggal Lahir:</th>
            <td>{{ $anggota['ttl'] }}</td>
        </tr>
        <tr>
            <th>Hobi:</th>
            <td>{{ $anggota['hobi'] }}</td>
        </tr>
        <tr>
            <th>Jenis Kelamin:</th>
            <td>{{ $anggota['gender'] }}</td>
        </tr>
        <tr>
            <th>Foto:</th>
            <td>
                <img src="{{ $anggota['capture'] }}" alt="Foto {{ $anggota['nama'] }}" width="100">
            </td>
        </tr>
    </table>
    <a href="{{ url('/daftar-anggota') }}" class="btn btn-secondary">Kembali</a>
</div>

</body>
</html>
@endsection