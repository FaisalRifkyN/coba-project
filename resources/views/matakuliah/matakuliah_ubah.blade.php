<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        @include('navbar')
        <div class="card shadow mt-5">
            <div class="card-header">
                <h2>Ubah Matakulaih</h2>
            </div>
            <div class="card-body">
                <form action="{{url('/matakuliah/update')}}" method="POST">
                    @method('patch')
                    @csrf
                    @foreach($DataMatakuliah as $row)
                    <label for="kode_matakuliah">Kode Matakuliah:</label>
                    <input type="etxt" class="form-control" id="kode_matakuliah" value="{{$row->kode_matakuliah_14210024}}" name="kode_matakuliah">
                    <label for="nama_matkul">Nama Matakuliah:</label>
                    <input type="text" class="form-control" id="nama_matkul" value="{{$row->nama_matakuliah_14210024}}" name="nama_matakuliah">
                    @endforeach
                    <button type="submit" class="btn btn-primary btn-sm mt-2">Ubah</button>
                </form>
                <a class="btn btn-info btn-sm mt-2" href="{{ url('/mahasiswa') }}">Kembali</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>