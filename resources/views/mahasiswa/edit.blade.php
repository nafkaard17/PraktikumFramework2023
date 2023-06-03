<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <div class="card-header font-weight-bold">
        Tambah Mahasiswa
    </div>
    <form action="{{route('student.edit', $students->nim)}}" method="POST" class="row" enctype="multipart/form-data">
        @csrf
        <div class="col-md-8">
            <div class="card mb-4 border-left-primary">
                <div class="card-body">
                    <div class="form-group row mb-3">
                        <label class="col-md-3 mt-2">NIM</label>
                        <input type="text" name="nim" class="form-control bg-dark text-light border-0 small col-md-8" readonly value="{{$students->nim}}" required>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-md-3 mt-2">Nama</label>
                        <input type="text" name="nama" class="form-control bg-dark text-light border-0 small col-md-8" value="{{$students->nama}}" required>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-md-3 mt-2">Umur</label>
                        <input type="number" name="umur" class="form-control bg-dark text-light border-0 small col-md-8" value="{{$students->umur}}" required>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-md-3 mt-2">alamat</label>
                        <input name="alamat" class="form-control-file bg-dark text-light border-0 small col-md-8" style="padding-top: 7px;" value="{{$students->alamat}}" required>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-md-3 mt-2">Jenis Kelamin</label>
                        <div class="p-2 col-md-8 bg-dark text-light border-0">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="jk" id="jk" value="Laki-laki">
                                <label class="form-check-label" for="jk">
                                    Laki-laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" id="jk" value="Perempuan">
                                <label class="form-check-label" for="jk">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-md-3 mt-2">Kota</label>
                        <input type="text" name="kota" class="form-control bg-dark text-light border-0 small col-md-8" value="{{$students->kota}}" required>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-md-3 mt-2">Jurusan</label>
                        <input type="text" name="jurusan" class="form-control bg-dark text-light border-0 small col-md-8" value="{{$students->jurusan}}" required>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-md-3 mt-2">Fakultas</label>
                        <input type="text" name="fakultas" class="form-control bg-dark text-light border-0 small col-md-8" value="{{$students->fakultas}}" required>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-md-3 mt-2">Kelas</label>
                        <select name="kelas" class="form-control bg-dark text-light border-0 small col-md-8" value="{{$students->kelas}}" required>
                            <option value="">Pilih</option>
                            <option value="Pagi">Kelas Pagi</option>
                            <option value="Sore">Kelas Sore</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <p>
                        Pastikan data yang anda masukan sudah sesuai dengan data yang diminta dan pastikan tidak kosong.
                    </p>
                    <a href="{{route('student')}}" class="btn btn-outline-dark">Batal</a>
                    <button type="submit" class="btn btn-outline-success">Simpan Data</button>
                </div>
            </div>
        </div>
    </form>
</div>
</body>
</html>
