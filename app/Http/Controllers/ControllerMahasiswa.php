<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerMahasiswa extends Controller
{
    public function index()
    {
        $data['DataMahasiswa'] = Db::table('tblmahasiswa_14210024')->get();
        return view('mahasiswa/mahasiswa', $data);
    }

    public function simpan(Request $request)
    {
        $data_array = array(
            'npm_14210024' => trim($request->npm),
            'nama_14210024' => trim($request->nama),
            'program_14210024' => trim($request->program_studi)
        );
        $get_mahasiswa = DB::table('tblmahasiswa_14210024')->insertOrIgnore($data_array);
        if ($get_mahasiswa) {
            return redirect('/mahasiswa');
        } else {
            echo 'Data Gagal Disimpan';
        }
    }

    public function tambah()
    {
        return view('mahasiswa/mahasiswa_tambah');
    }

    public function ubah($id){
        $data['DataMahasiswa'] = DB::table('tblmahasiswa_14210024')->where('id_14210024',$id)->get();
        return view('mahasiswa/mahasiswa_ubah',$data);
    }

    public function update(Request $request){
        $data_array = array('nama_14210024' => trim($request->nama),
                            'program_14210024' => trim($request->program_studi));
        DB::table('tblmahasiswa_14210024')->where('npm_14210024',$request->npm)->update($data_array);
        return redirect('/mahasiswa');
    }

    public function hapus($id){
        DB::table('tblmahasiswa_14210024')->where('id_14210024',$id)->delete();
        return redirect('/mahasiswa');
    }
}
