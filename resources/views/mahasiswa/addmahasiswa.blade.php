<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-3">
        @if($errors->has('nim'))
            <div class="alert alert-danger">
                @foreach($errors->get('nim') as $error)
                    {{ $error }}
                @endforeach
            </div>
        @endif
        <div class="card-header font-weight-bold">
            Tambah Mahasiswa
        </div>
        <form action="{{route('student.save')}}" method="POST" class="row" enctype="multipart/form-data">
            @csrf
            <div class="col-md-8">
                <div class="card mb-4 border-left-primary">
                    <div class="card-body">
                        <div class="form-group row mb-3">
                            <label class="col-md-3 mt-2">NIM</label>
                            <input type="text" name="nim" class="form-control bg-dark text-light border-0 small col-md-8" required value="{{ old('nim') }}">
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-md-3 mt-2">Nama</label>
                            <input type="text" name="nama" class="form-control bg-dark text-light border-0 small col-md-8" required value="{{ old('nama') }}">
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-md-3 mt-2">Umur</label>
                            <input type="number" name="umur" class="form-control bg-dark text-light border-0 small col-md-8" required value="{{ old('umur') }}">
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-md-3 mt-2">alamat</label>
                            <textarea name="alamat" class="bg-dark text-light border-0 col-md-8" required value="{{ old('alamat') }}"></textarea>
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
                            <input type="text" name="kota" class="form-control bg-dark text-light border-0 small col-md-8" required value="{{ old('kota') }}">
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-md-3 mt-2">Jurusan</label>
                            <input type="text" name="jurusan" class="form-control bg-dark text-light border-0 small col-md-8" required value="{{ old('jurusan') }}">
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-md-3 mt-2">Fakultas</label>
                            <input type="text" name="fakultas" class="form-control bg-dark text-light border-0 small col-md-8" required value="{{ old('fakultas') }}">
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-md-3 mt-2">Kelas</label>
                            <div class="p-2 col-md-8 bg-dark text-light border-0">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="kelas" id="kelas" value="Kelas Pagi">
                                    <label class="form-check-label" for="kelas">
                                        Kelas Pagi
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="kelas" id="kelas" value="Kelas Sore">
                                    <label class="form-check-label" for="kelas">
                                        Kelas Sore
                                    </label>
                                </div>
                            </div>
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
