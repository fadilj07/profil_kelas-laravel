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
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NPM</th>
                <th>Alamat</th>
                <th>TTL</th>
                <th>Hobi</th>
                <th>Gender</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['npm'] }}</td>
                    <td>{{ $item['alamat'] }}</td>
                    <td>{{ $item['ttl'] }}</td>
                    <td>{{ $item['hobi'] }}</td>
                    <td>{{ $item['gender'] }}</td>
                    <td><img src="{{ $item['capture'] }}" width="50"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>
@endsection