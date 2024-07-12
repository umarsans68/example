<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .form-control {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1>Edit Data Karyawan</h1>
        <form action="/karyawan/{{$karyawan->id}}" method="POST">
            @method('put')
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{$karyawan->nama}}" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="nik" placeholder="NIK" value="{{$karyawan->nik}}" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="no_kk" placeholder="No KK" value="{{$karyawan->no_kk}}">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="no_ktp" placeholder="No KTP" value="{{$karyawan->no_ktp}}">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="no_bpjs" placeholder="No BPJS" value="{{$karyawan->no_bpjs}}">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="datel" placeholder="Datel" value="{{$karyawan->datel}}">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="jabatan" placeholder="Jabatan" value="{{$karyawan->jabatan}}" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="no_hp" placeholder="No HP" value="{{$karyawan->no_hp}}">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="masakerja" placeholder="Masa Kerja" value="{{$karyawan->masakerja}}">
            </div>
            <div class="mb-3">
                <input type="date" class="form-control" name="tgl_bekerja" placeholder="Tanggal Bekerja" value="{{$karyawan->tgl_bekerja}}">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="alamat_rumah" placeholder="Alamat Rumah" value="{{$karyawan->alamat_rumah}}">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="username" placeholder="Username" value="{{$karyawan->username}}">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password" value="{{$karyawan->password}}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
