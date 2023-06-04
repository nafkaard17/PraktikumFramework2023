<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{

    public function create()
    {

        return view ('mahasiswa.addmahasiswa', [
            "title" => "Tambah Mahasiswa",
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // Aturan validasi untuk inputan
            'nim' => 'required|unique:students,nim',
            'nama' => 'required',
            'umur' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'jurusan' => 'required',
            'fakultas' => 'required',
            'kelas' => 'required',
        ], [
            'nim.required' => 'NIM harus diisi!',
            'nim.unique' => 'NIM sudah ada!',
            'nama.required' => 'Nama harus diisi!',
        ]);

        if ($validator->fails()) {
            return redirect("/student/add")
                ->withErrors($validator)
                ->withInput();
        } else {
            try {
                $mhs = new Student;
                $mhs->nim = $request->nim;
                $mhs->nama = $request->nama;
                $mhs->umur = $request->umur;
                $mhs->jenis_kelamin = $request->jk;
                $mhs->alamat = $request->alamat;
                $mhs->kota = $request->kota;
                $mhs->jurusan = $request->jurusan;
                $mhs->fakultas = $request->fakultas;
                $mhs->kelas = $request->kelas;

                $mhs->save();

                return redirect('/student')->with('status', 'Berhasil ditambahkan');
            } catch (\Exception $e) {
                $errorMessage = "Terjadi kesalahan: " . $e->getMessage();
                return redirect("/student/add")
                    ->withErrors([$errorMessage])
                    ->withInput();
            }
        }

    }

    public function index()
    {

        return view("mahasiswa.show", [
            "title" => "Daftar Mahasiswa",
            "students" => DB::table('students')->paginate(5)
        ]);

    }

    public function getEdit($nim)
    {
        return view('mahasiswa.edit', [
            "title" => "Edit Mahasiswa",
            "students" => DB::table("students")->where("nim", $nim)->first()
        ]);
    }

    public function postEdit(Request $request, $nim)
    {
        $this->validate ($request,[
            'nim' => 'required',
            'nama' => 'required',
            'umur' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'jurusan' => 'required',
            'fakultas' => 'required',
            'kelas' => 'required',
        ]);

        $save['nim'] = $request->get('nim');
        $save['nama'] = $request->get('nama');
        $save['umur'] = $request->get('umur');
        $save['jenis_kelamin'] = $request->get('jk');
        $save['alamat'] = $request->get('alamat');
        $save['kota'] = $request->get('kota');
        $save['jurusan'] = $request->get('jurusan');
        $save['fakultas'] = $request->get('fakultas');
        $save['kelas'] = $request->get('kelas');

        DB::table('students')->where('nim',$nim)->update($save);

        return redirect('/student')->with(["status"=>"Berhasil diedit"]);
    }

    public function delete($nim)
    {

        DB::Table('students')->where('nim',$nim)->delete();

        return redirect('/student')->with('status','Berhasil dihapus');
    }

}
