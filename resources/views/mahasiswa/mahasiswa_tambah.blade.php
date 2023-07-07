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
                    <h2>Tambah Mahasiswa</h2>
                </div>
                <div class="card-body">
                    <form action="{{ url('/mahasiswa/simpan') }}" method="post">
                        @csrf
                        <label for="npm" class="form-label">Npm</label>
                        <input type="text" name="npm" id="npm" class="form-control" required>
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" required>
                        <label for="program_studi" class="form-label">Program Studi</label>
                        <select class="form-control" name="program_studi" id="program_studi" required>
                            <option value="">--Pilih Matakuliah--</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknologi Informasi">Teknologi Informasi</option>
                        </select>
                        <div class="d-flex">
                            <div class="mr-5">
                                <button type="submit" class="btn btn-primary btn-sm mt-2"> Simpan</button>
                                <a class="btn btn-info btn-sm mt-2" href="{{ url('/mahasiswa') }}">Kembali</a>
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