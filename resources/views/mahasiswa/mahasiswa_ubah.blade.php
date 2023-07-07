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
                <h2>Ubah Mahasiswa</h2>
            </div>
            <div class="card-body">
                <form action="{{url('/mahasiswa/update')}}" method="POST">
                    @method('patch')
                    @csrf
                    @foreach($DataMahasiswa as $row)
                    <label for="npm">NPM:</label>
                    <input type="text" class="form-control" id="npm" value="{{$row->npm_14210024}}" name="npm" readonly >
                    <label for="Nama">Nama:</label>
                    <input type="text" class="form-control" id="Nama" value="{{$row->nama_14210024}}" name="nama">
                    <label for="program_studi" class="form-label">Program Studi</label>
                    <select class="form-control" name="program_studi" id="programstudi" required>
                        <option @if($row->program_14210024=='Sistem Informasi'){{'Selected'}}@endif value="Sistem Informasi">Sistem Informasi</option>
                        <option @if($row->program_14210024=='Teknik Informatika'){{'Selected'}}@endif value="Teknik Informatika">Teknologi Informatika</option>
                        <option @if($row->program_14210024=='Teknologi Informasi'){{'Selected'}}@endif value="Teknologi Informasi">Teknologi Informasi</option>
                    </select>
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