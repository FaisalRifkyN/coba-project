<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerNilai extends Controller
{
    public function index()
    {
        $data['DataNilai'] = Db::table('tblnilai_14210024')
            ->join('tblmatakuliah_14210024', 'tblmatakuliah_14210024.kode_matakuliah_14210024', '=', 'tblnilai_14210024.kode_matakuliah_14210024')
            ->join('tblmahasiswa_14210024', 'tblmahasiswa_14210024.npm_14210024', '=', 'tblnilai_14210024.npm_14210024')
            ->select('tblnilai_14210024.*', 'tblmahasiswa_14210024.nama_14210024', 'tblmahasiswa_14210024.program_14210024', 'tblmatakuliah_14210024.nama_matakuliah_14210024')
            ->get();
        return view('nilai/nilai', $data);
    }

    public function tambah()
    {
        $data['DataMatakuliah'] = DB::table('tblMatakuliah_14210024')->get();
        $data['DataMahasiswa'] = DB::table('tblmahasiswa_14210024')->get();
        return view('nilai/nilai_tambah', $data);
    }

    public function simpan(Request $request)
    {
        $data_array = array(
            'npm_14210024' => trim($request->npm),
            'kode_matakuliah_14210024' => trim($request->kode_matakuliah),
            'quis_14210024' => trim($request->quis),
            'tugas_14210024' => trim($request->tugas),
            'absensi_14210024' => trim($request->absensi),
            'uts_14210024' => trim($request->uts),
            'uas_14210024' => trim($request->uas)
        );
        $get_nilai = DB::table('tblnilai_14210024')->insertOrIgnore($data_array);
        if ($get_nilai) {
            return redirect('/nilai');
        } else {
            echo 'Data Gagal Disimpan';
        }
    }

    public function ubah($id)
    {
        $data['DataNilai'] = DB::table('tblnilai_14210024')->where('id_14210024', $id)->get();
        return view('nilai/nilai_ubah', $data);
    }

    public function update(Request $request)
    {
        $data_array = array(
            'npm_14210024' => trim($request->npm),
            'quis_14210024' => trim($request->quis),
            'tugas_14210024' => trim($request->tugas),
            'absensi_14210024' => trim($request->absensi),
            'uts_14210024' => trim($request->uts),
            'uas_14210024' => trim($request->uas)
        );
        DB::table('tblnilai_14210024')->where('kode_matakuliah_14210024', $request->kode_matakuliah)->update($data_array);
        return  redirect('/nilai');
    }

    public function hapus($id)
    {
        DB::table('tblnilai_14210024')->where('id_14210024', $id)->delete();
        return redirect('/nilai');
    }
}
