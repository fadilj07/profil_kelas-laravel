@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h2 class="mb-3">Daftar Anggota</h2>
    <table class="table table-bordered">
        <thead class="table-primary">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody id="anggota-table-body">
            <tr>
                <td colspan="4" class="text-center">Memuat data...</td>
            </tr>
        </tbody>
    </table>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        fetch('/api/kelas')
            .then(response => response.json())
            .then(data => {
                let tableBody = document.getElementById("anggota-table-body");
                tableBody.innerHTML = "";

                data.forEach((anggota, index) => {
                    let row = `
                        <tr>
                            <td>${index + 1}</td>
                            <td>${anggota.nama}</td>
                            <td>${anggota.npm}</td>
                            <td>
                                <a href="/anggota/${anggota.npm}" class="btn btn-primary">Detail</a>
                            </td>
                        </tr>
                    `;
                    tableBody.innerHTML += row;
                });
            })
            .catch(error => console.error("Error fetching data:", error));
    });
</script>


</body>
</html>
@endsection
