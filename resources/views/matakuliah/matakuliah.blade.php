<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>

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

        <!-- tabel -->
        <div class="mahasiswa mt-4">
            <div class="d-flex">
                <div class="p-2 flex-grow-1">
                    <h2>Data Matakuliah</h2>
                </div>
                <div class="p-2 ">
                    <a class="text-decoration-none btn btn-primary btn-sm" href="{{ url('/matakuliah/tambah') }}"> + Tambah Data Mahasiswa</a>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <tr>
                    <th>No</th>
                    <th>Kode Matakuliah</th>
                    <th>Nama Matakuliah</th>
                    <th>Action</th>
                </tr>
                @php
                $no=1;
                @endphp
                @foreach($DataMatakuliah as $row)
                <tr>
                    <td>{{ $no++; }}</td>
                    <td>{{ $row->kode_matakuliah_14210024; }}</td>
                    <td>{{ $row->nama_matakuliah_14210024; }}</td>
                    <td><a href="{{url('/matakuliah/ubah/'.$row->id_14210024)}}" class="btn btn-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Edit</a> || <a href="{{url('matakuliah/hapus/'.$row->id_14210024)}}" class="btn btn-danger" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a></td>
                </tr>
                @endforeach
            </table>
            <!-- end tabel -->
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>