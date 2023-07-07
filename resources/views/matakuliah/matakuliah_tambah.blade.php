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
                    <form action="{{ url('/matakuliah/simpan') }}" method="post">
                        @csrf
                        <label for="kode_matakuliah" class="form-label">Kode Matakuliah</label>
                        <input type="text" name="kode_matakuliah" id="kode_matakuliah" class="form-control" required>
                        <label for="nama_matkul" class="form-label">Nama Matakuliah</label>
                        <input type="text" name="nama_matkuliah" id="nama_matkul" class="form-control" required>
                        <div class="d-flex">
                            <div class="mr-5">
                                <button type="submit" class="btn btn-primary btn-sm mt-2"> Simpan</button>
                                <a class="btn btn-info btn-sm mt-2" href="{{ url('/matakuliah') }}">Kembali</a>
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