<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .form-control {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1>Tambah Karyawan</h1>
        <form action="/karyawan/store" method="POST">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control" name="nama" placeholder="Nama" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="nik" placeholder="NIK" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="no_kk" placeholder="No KK">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="no_ktp" placeholder="No KTP">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="no_bpjs" placeholder="No BPJS">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="datel" placeholder="Datel">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="jabatan" placeholder="Jabatan" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="no_hp" placeholder="No HP">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="masakerja" placeholder="Masa Kerja">
            </div>
            <div class="mb-3">
                <input type="date" class="form-control" name="tgl_bekerja" placeholder="Tanggal Bekerja">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="alamat_rumah" placeholder="Alamat Rumah">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</body>
</html>
