<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AKADEMIK UNBIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        @include('navbar')
        <div class="tambah-mahasiswa mt-4">
            <div class="card shadow">
                <div class="card-header">
                    <h2>Tambah Matakulaih</h2>
                </div>
                <div class="card-body">
                    <form action="{{ url('/nilai/simpan') }}" method="post">
                        @csrf
                        <!-- <label for="npm" class="form-label">NPM</label>
                        <input type="text" name="npm" id="npm" class="form-control" required> -->
                        <label for="npm" class="form-label">NPM</label>
                        <select class="form-control" id="npm" name="npm">
                            <?php foreach ($DataMahasiswa as $row) : ?>
                                <option value="">--Pilih Npm--</option>
                                <option value="<?php echo $row->npm_14210024; ?>"><?php echo $row->npm_14210024; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label for="kode_matakuliah" class="form-label">Kode Matakuliah</label>
                        <select class="form-control" id="kode_matakuliah" name="kode_matakuliah">
                            <?php foreach ($DataMatakuliah as $row) : ?>
                                <option value="">--Pilih Kode Matakuliah--</option>
                                <option value="<?php echo $row->kode_matakuliah_14210024; ?>"><?php echo $row->kode_matakuliah_14210024; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <!-- <label for="kode_matakuliah" class="form-label">Kode Matakuliah</label>
                        <input type="text" name="kode_matakuliah" id="kode_matakuliah" class="form-control" required> -->
                        <label for="quis" class="form-label">Quis</label>
                        <input type="text" name="quis" id="quis" class="form-control" required>
                        <label for="tugas" class="form-label">Tugas</label>
                        <input type="text" name="tugas" id="tugas" class="form-control" required>
                        <label for="absensi" class="form-label">Absensi</label>
                        <input type="text" name="absensi" id="absensi" class="form-control" required>
                        <label for="uts" class="form-label">UTS</label>
                        <input type="text" name="uts" id="uts" class="form-control" required>
                        <label for="uas" class="form-label">UAS</label>
                        <input type="text" name="uas" id="uas" class="form-control" required>
                        <div class="d-flex">
                            <div class="mr-5">
                                <button type="submit" class="btn btn-primary btn-sm mt-2"> Simpan</button>
                                <a class="btn btn-info btn-sm mt-2" href="{{ url('/nilai') }}">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>