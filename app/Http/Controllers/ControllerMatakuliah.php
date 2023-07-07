<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ControllerMatakuliah extends Controller
{
    public function index()
    {
        $data['DataMatakuliah'] = Db::table('tblmatakuliah_14210024')->get();
        return view('matakuliah/matakuliah', $data);
    }
    public function simpan(Request $request)
    {
        $data_array = array(
            'kode_matakuliah_14210024' => trim($request->kode_matakuliah),
            'nama_matakuliah_14210024' => trim($request->nama_matkuliah)
        );
        $get_mahasiswa = DB::table('tblmatakuliah_14210024')->insertOrIgnore($data_array);
        if ($get_mahasiswa) {
            return redirect('/matakuliah');
        } else {
            echo 'Data Gagal Disimpan';
        }
    }

    public function tambah()
    {
        return view('matakuliah/matakuliah_tambah');
    }

    public function ubah($id)
    {
        $data['DataMatakuliah'] = DB::table('tblmatakuliah_14210024')->where('id_14210024', $id)->get();
        return view('matakuliah/matakuliah_ubah', $data);
    }

    public function update(Request $request)
    {
        $data_array = array(
            'nama_matakuliah_14210024' => trim($request->nama_matakuliah)
        );
        DB::table('tblmatakuliah_14210024')->where('kode_matakuliah_14210024', $request->kode_matakuliah)->update($data_array);
        return  redirect('/matakuliah');
    }

    public function hapus($id)
    {
        DB::table('tblmatakuliah_14210024')->where('id_14210024', $id)->delete();
        return redirect('/matakuliah');
    }
}
