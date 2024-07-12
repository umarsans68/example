<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <a href="/karyawan/create" class="btn btn-primary mb-3">Tambah Data Karyawan</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Datel</th>
                    <th>Jabatan</th>
                    <th>Tanggal Bekerja</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($karyawan as $k)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $k->nama }}</td>
                    <td>{{ $k->nik }}</td>
                    <td>{{ $k->datel }}</td>
                    <td>{{ $k->jabatan }}</td>
                    <td>{{ $k->tgl_bekerja }}</td>
                    <td>
                        <a href="/karyawan/{{$k->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                        <form action="/karyawan/{{$k->id}}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
