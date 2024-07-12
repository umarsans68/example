<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Presensi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>Detail Presensi</h1>
        <table class="table table-striped">
            <tr>
                <th style="width: 200px;">Nama</th>
                <td>{{ $presensi->nama }}</td>
            </tr>
            <tr>
                <th>Nik</th>
                <td>{{ $presensi->nik }}</td>
            </tr>
            <tr>
                <th>Datel</th>
                <td>{{ $presensi->datel }}</td>
            </tr>
            <tr>
                <th>Jam Masuk</th>
                <td>{{ $presensi->jam_masuk }}</td>
            </tr>
            <tr>
                <th>Jam Pulang</th>
                <td>{{ $presensi->jam_pulang }}</td>
            </tr>
            <tr>
                <th>Foto</th>
                <td>
                    @if ($presensi->foto)
                        <img src="{{ asset('storage/foto_presensi/' . $presensi->foto) }}" alt="Foto" style="max-width: 100px;">
                    @else
                        No Photo
                    @endif
                </td>
            </tr>
        </table>
        <a href="{{ route('presensi.index') }}" class="btn btn-primary">Kembali ke Daftar Presensi</a>
    </div>
</body>
</html>
