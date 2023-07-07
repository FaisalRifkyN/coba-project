<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerMahasiswa;
use App\Http\Controllers\ControllerMatakuliah;
use App\Http\Controllers\ControllerNilai;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/mahasiswa', [ControllerMahasiswa::class, 'index']);
// Route::get('/mahasiswa/tambah', [ControllerMahasiswa::class, 'tambah']);
// Route::post('/mahasiswa/simpan', [ControllerMahasiswa::class, 'simpan']);
// Route::get('/mahasiswa/ubah/{id_14210024}', [ControllerMahasiswa::class, 'ubah']);
// Route::get('/mahasiswa/hapus/{id_14210024}', [ControllerMahasiswa::class, 'hapus']);
// Route::patch('/mahasiswa/update', [ControllerMahasiswa::class, 'update']);

// Route::get('/matakuliah', [ControllerMatakuliah::class, 'index']);
// Route::post('/matakuliah/simpan', [ControllerMatakuliah::class, 'simpan']);
// Route::get('/matakuliah/tambah', [ControllerMatakuliah::class, 'tambah']);
// Route::get('/matakuliah/ubah/{id_14210024}', [ControllerMatakuliah::class, 'ubah']);
// Route::get('/matakuliah/hapus/{id_14210024}', [ControllerMatakuliah::class, 'hapus']);
// Route::patch('/matakuliah/update', [ControllerMatakuliah::class, 'update']);

Route::get('/nilai', [ControllerNilai::class, 'index']);
Route::post('/nilai/simpan', [ControllerNilai::class, 'simpan']);
Route::get('/nilai/tambah', [ControllerNilai::class, 'tambah']);
Route::get('/nilai/ubah/{id_14210024}', [ControllerNilai::class, 'ubah']);
Route::get('/nilai/hapus/{id_14210024}', [ControllerNilai::class, 'hapus']);
Route::patch('/nilai/update', [ControllerNilai::class, 'update']);