<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Presensi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <!-- resources/views/presensi/index.blade.php -->
    <h1>Daftar Presensi</h1>
    <a href="{{ route('presensi.create') }}" class="btn btn-primary mb-3">Tambah Presensi Baru</a>
    <table class="table" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nik</th>
                <th>Datel</th>
                <th>Jam Masuk</th>
                <th>Jam Pulang</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($presensi as $p)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->nik }}</td>
                    <td>{{ $p->datel }}</td>
                    <td>{{ $p->jam_masuk }}</td>
                    <td>{{ $p->jam_pulang }}</td>
                    <td>
                        @if ($p->foto)
                            <img src="{{ asset('storage/foto_presensi/' . $p->foto) }}" alt="Foto" style="max-width: 100px;">
                        @else
                            No Photo
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('presensi.show', $p->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <form action="{{ route('presensi.destroy', $p->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
</body>
</html>

