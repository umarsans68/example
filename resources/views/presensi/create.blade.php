<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presensi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <!-- resources/views/presensi/create.blade.php -->
    <h1>Tambah Presensi Baru</h1>
    <form action="{{ route('presensi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="nik">Nik</label>
            <input type="text" class="form-control" id="nik" name="nik">
        </div>
        <div class="form-group">
            <label for="datel">Datel</label>
            <select class="form-control" id="datel" name="datel" required>
                <option value="">Pilih Datel</option>
                <option value="Purbalingga">Purbalingga</option>
                <option value="Banjarnegara">Banjarnegara</option>
                <option value="Sokaraja">Sokaraja</option>
            </select>
        </div>
        <div class="form-group">
            <label for="jam_masuk">Jam Masuk</label>
            <input type="text" class="form-control" id="jam_masuk" name="jam_masuk" required>
        </div>
        <div class="form-group">
            <label for="jam_pulang">Jam Pulang</label>
            <input type="text" class="form-control" id="jam_pulang" name="jam_pulang" required>
        </div>
        <div class="form-group">
            <label for="foto">Foto (JPEG, PNG, JPG, GIF)</label>
            <input type="file" class="form-control" id="foto" name="foto" accept="image/jpeg,image/png,image/jpg,image/gif" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

</body>
</html>
