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
                <h2>Ubah Nilai</h2>
            </div>
            <div class="card-body">
                <form action="{{url('/nilai/update')}}" method="POST">
                    @method('patch')
                    @csrf
                    @foreach($DataNilai as $row)
                    <label for="npm">NPM:</label>
                    <input type="text" class="form-control" id="npm" value="{{$row->npm_14210024}}" name="npm" readonly >
                    <label for="Nama">Kode Matakuliah:</label>
                    <input type="text" class="form-control" id="Nama" value="{{$row->kode_matakuliah_14210024}}" name="kode_matakuliah" readonly>
                    <label for="quis">Nilai Quis:</label>
                    <input type="number" class="form-control" id="quis" value="{{$row->quis_14210024}}" name="quis">
                    <label for="tugas">Nilai Tugas:</label>
                    <input type="number" class="form-control" id="tugas" value="{{$row->tugas_14210024}}" name="tugas">
                    <label for="absensi">Nilai Absensi:</label>
                    <input type="number" class="form-control" id="absensi" value="{{$row->absensi_14210024}}" name="absensi">
                    <label for="uts">Nilai Uts:</label>
                    <input type="number" class="form-control" id="uts" value="{{$row->uts_14210024}}" name="uts">
                    <label for="uas">Nilai Uas :</label>
                    <input type="number" class="form-control" id="uas" value="{{$row->uas_14210024}}" name="uas">
                    @endforeach
                    <button type="submit" class="btn btn-primary btn-sm mt-2">Ubah</button>
                </form>
                <a class="btn btn-info btn-sm mt-2" href="{{ url('/nilai') }}">Kembali</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>